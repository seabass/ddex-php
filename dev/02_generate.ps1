<#
 # This file is part of ddex-php
 # 
 # (c) Sebastian Wolff <seabass88@gmail.com>
 # 
 # Requires powershell-yaml, php, composer.
 # Run after downloading XSD schemas.
 # 
 # Loops through all XsdSchemaPaths, finds xs namespaces, copies needed namespaces from xsd2php_config.yml, creates a temporary xsdconfig.tmp.yml, uses xsd2php to generate php classes
 #
#>


# Supported standards. If you edit these, update xsd2php_config.yml to ensure additional namespace handling is added

$XsdSchemaPaths = @(

	# DPID
	"..\src\xml\dpid"

	# Electronic Release Notification Message Suite (ERN)
	"..\src\xml\ern"
	
	# Digital Sales Reporting Message Suite (DSR)
	"..\src\xml\dsr"

	# Catalogue Transfers (CT)
	"..\src\xml\ct"

	# Media Enrichment and Description (MEAD)
	#"..\src\xml\mead" #Any\Any bug

	# Party Identification and Enrichment (PIE)
	#"..\src\xml\pie" #Any\Any bug

	# Recording Data and Rights Standards (RDR)
	#"..\src\xml\rdr" #Any\Any bug
	#"..\src\xml\rdr-n" #Any\Any bug
	#"..\src\xml\rdr-c" #Any\Any bug

	# Recording Information Notification (RIN)
	#"..\src\xml\rin" #Any\Any bug

	# Musical Work Data and Rights communication (MWDR)
	#"..\src\xml\mwn\10"
	"..\src\xml\mwl"
	#"..\src\xml\mc-us-lic" #Any\Any bug
	#"..\src\xml\mc-us-lod" #Any\Any bug

	# Links between Resources and Musical Works (LRAW)
	"..\src\xml\lraw"


	# Anomaly Reporting (CDM) - unsupported
	#"..\src\xml\?"

	# Anomaly Reporting (AR) - unsupported
	#"..\src\xml\?"
	
)



# =========================================
# Schema handling
# =========================================
Function ReadSchema
{
	param($SchemaPath)
	try
	{
		$schemaItem = Get-Item $SchemaPath
		$stream = $schemaItem.OpenRead()
		$schema = [Xml.Schema.XmlSchema]::Read($stream, $null)
		return $schema
	}
	catch
	{
		throw
	}
	finally
	{
			if($stream)
		{
					$stream.Close()
			}
	}
}

class DDEXclass
{
	[String] $schemaPath

	[String] $standard
	[String] $version
	[String] $xsd_filename

	[String] $name
	[String] $namespace
	[String] $schemaLocation

	DDEXclass ([String] $SchemaPath, [String] $Name, [String] $Namespace)
	{
		$this.schemaPath = $SchemaPath


		# We split the schema path
		$SchemaPathParts = $SchemaPath -split '\\'

		# eg, 'ern'
		$this.standard = $SchemaPathParts[-3]

		# eg, '341
		$this.standard = $SchemaPathParts[-2]

		# eg, 'release-notification.xsd'
		$this.xsd_filename = $SchemaPathParts[-1]


		$this.name = $Name
		$this.namespace = $Namespace
	}

	[String] getNamespace()
	{
		return $this.namespace
	}

	[String] getName()
	{
		return $this.name
	}

	setSchemaLocation([String] $schemaLocation)
	{
		$this.schemaLocation = $schemaLocation
	}

	[String] toString()
	{
		return $this.schemaPath + "|" + $this.name + "|" + $this.namespace + "|" + $this.schemaLocation
	}
}

Function GetNamespaces()
{
	param($SchemaPath)
	try
	{
		$schema = ReadSchema $SchemaPath

		$DdexNamespaces =  @()

		# Add the target namespace
		#$Namespace += $schema.TargetNamespace

		# Loop through namespaces
		foreach($XmlSerializerNamespaces in $schema.NameSpaces)
		{
			foreach($XmlSerializerNamespace in $XmlSerializerNamespaces.toArray())
			{
				# XmlSerializerNamespace:
				# Name = ern
				# Namespace = http://ddex.net/xml/ern/341

				$DdexNamespaces += [DDEXclass]::new($SchemaPath, $XmlSerializerNamespace.Name, $XmlSerializerNamespace.Namespace)
			}
		}

		# Loop through includes, append SchemaLocation
		foreach($XmlSchemaImport in $schema.Includes)
		{
			foreach($DdexNamespace in $DdexNamespaces)
			{
				if($DdexNamespace.getNamespace() = $XmlSchemaImport.namespace) {
					$DdexNamespace.setSchemaLocation($XmlSchemaImport.SchemaLocation)
				}
			}
		}

		return $DdexNamespaces
	}
	catch
	{
		throw
	}
}



# =========================================
# Runtime
# =========================================

$DevPath = (Get-Item .).FullName

#if(!(get-package php* | % { $_.metadata['installlocation'] })) {
#	$continue = Read-Host -Prompt "PHP not found, proceed anyway? [y/n]"
#	if ( $continue -eq 'n' ) {
#		Exit
#	}
#}

if(!(get-package composer* | % { $_.metadata['installlocation'] })) {
	$continue = Read-Host -Prompt "Composer not found, proceed anyway? [y/n]"
	if ( $continue -eq 'n' ) {
		Exit
		# ..\composer install
	}
}



try {
	Import-Module powershell-yaml
	#Write-Host "Module exists"
} 
catch {
	$continue = Read-Host -Prompt "powershell-yaml module not found, proceed anyway? [y/n]"
	if ( $continue -eq 'n' ) {
		Exit
		#Install-Module powershell-yaml
		#https://github.com/cloudbase/powershell-yaml
	}
}


if(!(Test-Path -Path "..\src\xml")) {
	Write-Host "XML directory missing, did you run 01_generate.ps1 first?"
	Exit
}

# =========================================
# Parse and generate schema
# =========================================


# Clear existing dirs
<#
if(Test-Path -Path "..\src\metadata") {
	Remove-Item -Recurse -Force ..\src\metadata
}

if(Test-Path -Path "..\src\schema") {
	Remove-Item -Recurse -Force ..\src\schema
}

if(Test-Path -Path "..\src\validation") {
	Remove-Item -Recurse -Force ..\src\validation
}
#>



# We import the standard config
$YmlConfigPath = ".\xsd2php_config.yml"
if(!(Test-Path -Path $YmlConfigPath)) {
	Write-Host "xsd2php_config.yml missing"
	Exit
}
try {
	$DefaultConfig = ConvertFrom-Yaml -Yaml $(Get-Content -Raw $YmlConfigPath) -AllDocuments
} catch [Exception]{
	throw
}

$default_xml_namespaces = $DefaultConfig["xsd2php"]["xml_namespaces"]




# This will be the config file that xsd2php uses to generate php classes.
# We need to update this from the default config by detecting needed namespaces and only including those
$ConfigYamlFile = ".\xsdconfig.tmp.yml"


# Loop through XSD files, create generator and config
Write-Host Finding XSD files and creating generator script

foreach($XmlPath in $XsdSchemaPaths) {

	# Find all xsd files
	foreach($SchemaPath in (gci -Path $XmlPath -Filter *.xsd -Recurse -Force).FullName) {
		Write-Host Found $SchemaPath

		# Make a copy of the default config
		$XsdConfig = $DefaultConfig.Clone()
		# and wipe default xml_namespaces
		$XsdConfig["xsd2php"]["xml_namespaces"] = @{}


		# ConfigYamlFile cleanup
		if(Test-Path -Path $ConfigYamlFile) {
			$ConfigYamlFile | Remove-Item
		}


		# Loop through found namespaces in the schema
		foreach($DdexNamespace in GetNamespaces($SchemaPath))
		{
			#Write-Host Testing: $DdexNamespace.getNamespace()

			foreach($default_xml_namespace in $default_xml_namespaces.keys)
			{
				#Write-Host "  Testing" $default_xml_namespace

				# if the schema exists, copy it over from global config
				if($DdexNamespace.getNamespace() -eq $default_xml_namespace)
				{
					Write-Host "  Namespace match for " $default_xml_namespace
					$XsdConfig["xsd2php"]["xml_namespaces"].Add($DdexNamespace.getNamespace(), $DdexNamespace.getName())
				} else {
				}
			}
		}

		# TODO check for empty namespace list
		if($XsdConfig["xsd2php"]["xml_namespaces"].Count -eq 0) {
			Write-Host "  NAMESPACES EMPTY."
		} else {
			# We found namespaces, updated our config for this schema, let's convert to yaml
			Write-Host "  " $XsdConfig["xsd2php"]["xml_namespaces"].Count " Namespace(s) found, ok."

			# and save to a temp yaml file
			Write-Host "  Writing yaml config..."
			$yaml_data = ConvertTo-Yaml $XsdConfig -Options UseSequenceFlowStyle
			Add-Content -Path $ConfigYamlFile -Value $yaml_data

			# and convert using xsd2php
			Write-Host "  Converting xsd to php classes..."
			php ..\vendor\bin\xsd2php convert $ConfigYamlFile "$SchemaPath"

			Write-Host "  Done."
		}
	}
}


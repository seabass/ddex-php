
# =========================================
# Runtime
# =========================================
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
# Main
# =========================================

# We import the standard config
$YmlConfigPath = ".\xsd2php_config.yml"
if(!(Test-Path -Path $YmlConfigPath)) {
	Write-Host YmlConfigPath missing
	Exit
}
try {
	$DefaultConfig = ConvertFrom-Yaml -Yaml $(Get-Content -Raw $YmlConfigPath) -AllDocuments
} catch [Exception]{
	throw
}

$default_xml_namespaces = $DefaultConfig["xsd2php"]["xml_namespaces"]



# =========================================


$SchemaPath = '..\src\xml\ern\341\release-notification.xsd'

$XsdConfig = $DefaultConfig.Clone()

# wipe default xml_namespaces
$XsdConfig["xsd2php"]["xml_namespaces"] = @{}


$DdexNamespaces = GetNamespaces($SchemaPath)

# Loop through found namespaces in the schema
foreach($DdexNamespace in $DdexNamespaces)
{
	Write-Host Testing: $DdexNamespace.getNamespace()

	foreach($default_xml_namespace in $default_xml_namespaces.keys)
	{
		Write-Host "  Testing" $default_xml_namespace

		# if the schema exists, copy it over from global config
		if($DdexNamespace.getNamespace() -eq $default_xml_namespace)
		{
			Write-Host "    match"
			$XsdConfig["xsd2php"]["xml_namespaces"].Add($DdexNamespace.getNamespace(), $DdexNamespace.getName())
		} else {
		}
	}
}

$yaml = ConvertTo-Yaml $XsdConfig -Options UseSequenceFlowStyle
Write-Host $yaml
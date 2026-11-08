
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
	[String] $name
	[String] $namespace
	[String] $schemaLocation

	DDEXclass ([String] $name, [String] $namespace)
	{
		$this.name = $name
		$this.namespace = $namespace
	}

	[String] getNamespace()
	{
		return $this.namespace
	}

	setSchemaLocation([String] $schemaLocation)
	{
		$this.schemaLocation = $schemaLocation
	}

	[String] toString()
	{
		return $this.name + "|" + $this.namespace + "|" + $this.schemaLocation
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
				# Name = ern
				# Namespace = http://ddex.net/xml/ern/341
				$DdexNamespaces += [DDEXclass]::new($XmlSerializerNamespace.Name, $XmlSerializerNamespace.Namespace)
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


$DdexNamespaces = GetNamespaces('..\src\xml\ern\341\release-notification.xsd')

foreach($DdexNamespace in $DdexNamespaces)
{
	Write-Host $DdexNamespace.toString()
}
Exit
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


# We import and splice together only the useful namespaces
$YmlConfigPath = ".\xsd2php_config.yml"
if(!(Test-Path -Path $YmlConfigPath)) {
    Write-Host YmlConfigPath missing
    Exit
}
$Config = ConvertFrom-Yaml -Yaml $(Get-Content -Raw $YmlConfigPath) -AllDocuments

$Yaml = ConvertTo-Yaml $Config
Write-Host $Yaml


#Splice xml_namespaces
$DefaultConfig["xsd2php"]["xml_namespaces"] = @()


$data['xsd2php']['destinations_php'] = @(1,2)
Write-Host $data['xsd2php']['destinations_php']

$yaml = ConvertTo-Yaml $data -Options UseSequenceFlowStyle
Write-Host $yaml
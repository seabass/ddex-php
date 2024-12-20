
process {
	try {

		#if(!(get-package php* | % { $_.metadata['installlocation'] })) {
		#	$continue = Read-Host -Prompt "PHP not found, proceed anyway? [y/n]"
		#	if ( $continue -eq 'n' ) {
		#		Exit
		#	}
		#}
		$DevPath = (Get-Item .).FullName

		if(!(get-package composer* | % { $_.metadata['installlocation'] })) {
			$continue = Read-Host -Prompt "Composer not found, proceed anyway? [y/n]"
			if ( $continue -eq 'n' ) {
				Exit
			}
		}

		# ..\composer install


		#Cleanup
		$XSDListFile = '.\XSD_list.log'
		$ConfigYamlFile = '.\xsd2php_config.yml'
		$DownloadUrl = "https://service.ddex.net/xml/"
		$XmlPaths = @(
			
			"..\src\xml\ct"
			"..\src\xml\dsr"
			"..\src\xml\ern"
			"..\src\xml\mead"

			"..\src\xml\pie"
			"..\src\xml\rdr-n"
			"..\src\xml\rdr-c"
			"..\src\xml\rin"
			"..\src\xml\mwl"

			"..\src\xml\mc-us-lic"
			"..\src\xml\mc-us-lod"
			
			"..\src\xml\mwn\10"
		)

		if(Test-Path $XSDListFile) {
			$XSDListFile | Remove-Item
		}


		<#
		Write-Host Beginning download...
		try {


			#Thank you https://github.com/lazaroblanc/Index-of-downloader

			$NoOfDirsToCut = ([Uri]$DownloadUrl).Segments.Count - 1
			$wgetParams = @(
				"--no-check-certificate"
				"--recursive"
				"--no-clobber"
				"--no-parent"
				"--no-host-directories"
				"--cut-dirs=$NoOfDirsToCut"
				"--quiet"
				"--show-progress"
				"--restrict-file-names=ascii"
				"--local-encoding=utf-8"
				"--reject=index.htm*"
				"--accept=*.xsd"
				"--directory-prefix=$XmlPath"
			)

			if(!(Test-Path -Path $XmlPath)) {
				New-Item $XmlPath -ItemType Directory -ea 0
			}


			$wget = $DevPath + "\wget.exe"
			if (-not (Test-Path "$wget" -ErrorAction SilentlyContinue)) {
				if ([Environment]::Is64BitOperatingSystem) { $architecture = "64" }
				else { $architecture = "32" }
				"Downloading wget" | Write-Verbose
				Invoke-WebRequest -Uri "https://eternallybored.org/misc/wget/1.20.3/$architecture/wget.exe" -OutFile ".\$wget"
				$cleanupWget = $true
			}

			"Running wget" | Write-Verbose
			& $wget $wgetParams --execute robots=off $DownloadUrl

			#if ($cleanupWget) { $wget | Remove-Item }
		} catch {

		}

		exit
		#>

		# Clear existing dirs
		#Remove-Item -Recurse -Force ..\metadata
		#Remove-Item -Recurse -Force ..\schema
		#Remove-Item -Recurse -Force ..\validation

		#dig through files, create generator and config
		Write-Host Finding XSD files and creating generator script

		foreach($XmlPath in $XmlPaths) {
			foreach($FullName in (gci -Path $XmlPath -Filter *.xsd -Recurse -Force).FullName) {
				$FullNameParts = $FullName -split '\\'
				$XSDFileName = $FullNameParts[-1]

				Write-Host Found $FullNameParts

				Add-Content -Path $XSDListFile -Value $FullName

				php ..\vendor\bin\xsd2php convert $ConfigYamlFile "$FullName"
			}
		}





		Write-Host done.
	} catch {
		Write-Host $error[0]
	}
}

<#
 # This file is part of ddex-php
 # 
 # (c) Sebastian Wolff <seabass88@gmail.com>
 # 
 # Downloads wget, downloads and https://service.ddex.net/xml/ directory tree, cleans up wget.exe
 #
#>

# =========================================
# Runtime
# =========================================

$DevPath = (Get-Item .).FullName

$DownloadUrl = "https://service.ddex.net/xml/"
$XmlPath = "..\src\xml"

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


	$wget = $DevPath + ".\wget.exe"
	if (-not (Test-Path "$wget" -ErrorAction SilentlyContinue)) {
		if ([Environment]::Is64BitOperatingSystem) { $architecture = "64" }
		else { $architecture = "32" }
		"Downloading wget" | Write-Verbose
		Invoke-WebRequest -Uri "https://eternallybored.org/misc/wget/1.20.3/$architecture/wget.exe" -OutFile ".\$wget"
		$cleanupWget = $true
	}

	"Running wget" | Write-Verbose
	& $wget $wgetParams --execute robots=off $DownloadUrl

	if ($cleanupWget) { $wget | Remove-Item }
} catch {
	throw
}


Write-Host Done.
Exit
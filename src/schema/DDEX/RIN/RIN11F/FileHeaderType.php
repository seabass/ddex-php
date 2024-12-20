<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing FileHeaderType
 *
 * A Composite placed at the beginning of each RecordingInformationNotification providing information about the File.
 * XSD Type: FileHeader
 */
class FileHeaderType
{
    /**
     * The Language and script for the Elements of the FileHeader as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A string used to uniquely identify the current File.
     *
     * @var string $fileId
     */
    private $fileId = null;

    /**
     * The FileName, possibly including the FilePath, of the XML File containing the current File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * The DateTime on which the File was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $fileCreatedDateTime
     */
    private $fileCreatedDateTime = null;

    /**
     * The indicator used to distinguish a live File from a test File.
     *
     * @var string $fileControlType
     */
    private $fileControlType = null;

    /**
     * The type of the system that generated the File.
     *
     * @var string $systemType
     */
    private $systemType = null;

    /**
     * The Identifier of the Version of the system that generated the File.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @var \DDEX\RIN\RIN11F\PartyDescriptorType[] $fileCreator
     */
    private $fileCreator = [
        
    ];

    /**
     * A Composite containing details of the Party on whose behalf the RIN File was created.
     *
     * @var \DDEX\RIN\RIN11F\PartyDescriptorType $createdOnBehalfOf
     */
    private $createdOnBehalfOf = null;

    /**
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @var \DDEX\RIN\RIN11F\DdexDigitalSignatureType[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the FileHeader as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the FileHeader as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as fileId
     *
     * A string used to uniquely identify the current File.
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Sets a new fileId
     *
     * A string used to uniquely identify the current File.
     *
     * @param string $fileId
     * @return self
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * The FileName, possibly including the FilePath, of the XML File containing the current File.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * The FileName, possibly including the FilePath, of the XML File containing the current File.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as fileCreatedDateTime
     *
     * The DateTime on which the File was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getFileCreatedDateTime()
    {
        return $this->fileCreatedDateTime;
    }

    /**
     * Sets a new fileCreatedDateTime
     *
     * The DateTime on which the File was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $fileCreatedDateTime
     * @return self
     */
    public function setFileCreatedDateTime(\DateTime $fileCreatedDateTime)
    {
        $this->fileCreatedDateTime = $fileCreatedDateTime;
        return $this;
    }

    /**
     * Gets as fileControlType
     *
     * The indicator used to distinguish a live File from a test File.
     *
     * @return string
     */
    public function getFileControlType()
    {
        return $this->fileControlType;
    }

    /**
     * Sets a new fileControlType
     *
     * The indicator used to distinguish a live File from a test File.
     *
     * @param string $fileControlType
     * @return self
     */
    public function setFileControlType($fileControlType)
    {
        $this->fileControlType = $fileControlType;
        return $this;
    }

    /**
     * Gets as systemType
     *
     * The type of the system that generated the File.
     *
     * @return string
     */
    public function getSystemType()
    {
        return $this->systemType;
    }

    /**
     * Sets a new systemType
     *
     * The type of the system that generated the File.
     *
     * @param string $systemType
     * @return self
     */
    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;
        return $this;
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the system that generated the File.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the system that generated the File.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as fileCreator
     *
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\PartyDescriptorType $fileCreator
     */
    public function addToFileCreator(\DDEX\RIN\RIN11F\PartyDescriptorType $fileCreator)
    {
        $this->fileCreator[] = $fileCreator;
        return $this;
    }

    /**
     * isset fileCreator
     *
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileCreator($index)
    {
        return isset($this->fileCreator[$index]);
    }

    /**
     * unset fileCreator
     *
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileCreator($index)
    {
        unset($this->fileCreator[$index]);
    }

    /**
     * Gets as fileCreator
     *
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @return \DDEX\RIN\RIN11F\PartyDescriptorType[]
     */
    public function getFileCreator()
    {
        return $this->fileCreator;
    }

    /**
     * Sets a new fileCreator
     *
     * A Composite containing details of the Party operating the application that created or updated the RIN File.
     *
     * @param \DDEX\RIN\RIN11F\PartyDescriptorType[] $fileCreator
     * @return self
     */
    public function setFileCreator(array $fileCreator)
    {
        $this->fileCreator = $fileCreator;
        return $this;
    }

    /**
     * Gets as createdOnBehalfOf
     *
     * A Composite containing details of the Party on whose behalf the RIN File was created.
     *
     * @return \DDEX\RIN\RIN11F\PartyDescriptorType
     */
    public function getCreatedOnBehalfOf()
    {
        return $this->createdOnBehalfOf;
    }

    /**
     * Sets a new createdOnBehalfOf
     *
     * A Composite containing details of the Party on whose behalf the RIN File was created.
     *
     * @param \DDEX\RIN\RIN11F\PartyDescriptorType $createdOnBehalfOf
     * @return self
     */
    public function setCreatedOnBehalfOf(?\DDEX\RIN\RIN11F\PartyDescriptorType $createdOnBehalfOf = null)
    {
        $this->createdOnBehalfOf = $createdOnBehalfOf;
        return $this;
    }

    /**
     * Adds as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\DdexDigitalSignatureType $signature
     */
    public function addToSignature(\DDEX\RIN\RIN11F\DdexDigitalSignatureType $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return \DDEX\RIN\RIN11F\DdexDigitalSignatureType[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @param \DDEX\RIN\RIN11F\DdexDigitalSignatureType[] $signature
     * @return self
     */
    public function setSignature(array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}


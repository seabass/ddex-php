<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing FileListType
 *
 * A Composite containing details of one or more Files.
 * XSD Type: FileList
 */
class FileListType
{
    /**
     * The Language and script for the Elements of the FileList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a File.
     *
     * @var \DDEX\RIN\RIN11F\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the FileList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the FileList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as file
     *
     * A Composite containing details of a File.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\FileType $file
     */
    public function addToFile(\DDEX\RIN\RIN11F\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a File.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * A Composite containing details of a File.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a File.
     *
     * @return \DDEX\RIN\RIN11F\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File.
     *
     * @param \DDEX\RIN\RIN11F\FileType[] $file
     * @return self
     */
    public function setFile(array $file)
    {
        $this->file = $file;
        return $this;
    }
}


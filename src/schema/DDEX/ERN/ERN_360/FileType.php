<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing FileType
 *
 * A Composite containing details of a File.
 * XSD Type: File
 */
class FileType
{
    /**
     * A Name of the File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * A location of the File.
     *
     * @var string $filePath
     */
    private $filePath = null;

    /**
     * A URL of the File.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\ERN\ERN_360\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * Gets as fileName
     *
     * A Name of the File.
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
     * A Name of the File.
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
     * Gets as filePath
     *
     * A location of the File.
     *
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Sets a new filePath
     *
     * A location of the File.
     *
     * @param string $filePath
     * @return self
     */
    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL of the File.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL of the File.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\ERN\ERN_360\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @param \DDEX\ERN\ERN_360\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\ERN\ERN_360\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing FileType
 *
 * A Composite containing details of a File.
 * XSD Type: File
 */
class FileType
{
    /**
     * A Composite containing details of FileIds.
     *
     * @var \DDEX\RIN\RIN11F\ProprietaryIdType[] $fileId
     */
    private $fileId = null;

    /**
     * The Identifier (specific to the File) of the File. This is a LocalFileAnchor starting with the letter F.
     *
     * @var string $fileReference
     */
    private $fileReference = null;

    /**
     * The Type of File.
     *
     * @var string $fileType
     */
    private $fileType = null;

    /**
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\RIN\RIN11F\DetailedHashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * The Size of the File in bytes.
     *
     * @var float $size
     */
    private $size = null;

    /**
     * The BitDepth of the File.
     *
     * @var int $bitDepth
     */
    private $bitDepth = null;

    /**
     * The sample rate of the File in kHz.
     *
     * @var float $samplingRate
     */
    private $samplingRate = null;

    /**
     * A Composite containing a human-readable Comment about the File.
     *
     * @var \DDEX\RIN\RIN11F\CommentType $comment
     */
    private $comment = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of FileIds.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId
     */
    public function addToFileId(\DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId)
    {
        $this->fileId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset fileId
     *
     * A Composite containing details of FileIds.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileId($index)
    {
        return isset($this->fileId[$index]);
    }

    /**
     * unset fileId
     *
     * A Composite containing details of FileIds.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileId($index)
    {
        unset($this->fileId[$index]);
    }

    /**
     * Gets as fileId
     *
     * A Composite containing details of FileIds.
     *
     * @return \DDEX\RIN\RIN11F\ProprietaryIdType[]
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Sets a new fileId
     *
     * A Composite containing details of FileIds.
     *
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType[] $fileId
     * @return self
     */
    public function setFileId(array $fileId = null)
    {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * Gets as fileReference
     *
     * The Identifier (specific to the File) of the File. This is a LocalFileAnchor starting with the letter F.
     *
     * @return string
     */
    public function getFileReference()
    {
        return $this->fileReference;
    }

    /**
     * Sets a new fileReference
     *
     * The Identifier (specific to the File) of the File. This is a LocalFileAnchor starting with the letter F.
     *
     * @param string $fileReference
     * @return self
     */
    public function setFileReference($fileReference)
    {
        $this->fileReference = $fileReference;
        return $this;
    }

    /**
     * Gets as fileType
     *
     * The Type of File.
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets a new fileType
     *
     * The Type of File.
     *
     * @param string $fileType
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * A URI of the File (this can be a URL or another type of Identifier using a scheme identifier, e.g. http or ftp, as defined in RFC 3986).
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\RIN\RIN11F\DetailedHashSumType
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
     * @param \DDEX\RIN\RIN11F\DetailedHashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\RIN\RIN11F\DetailedHashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as size
     *
     * The Size of the File in bytes.
     *
     * @return float
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * The Size of the File in bytes.
     *
     * @param float $size
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as bitDepth
     *
     * The BitDepth of the File.
     *
     * @return int
     */
    public function getBitDepth()
    {
        return $this->bitDepth;
    }

    /**
     * Sets a new bitDepth
     *
     * The BitDepth of the File.
     *
     * @param int $bitDepth
     * @return self
     */
    public function setBitDepth($bitDepth)
    {
        $this->bitDepth = $bitDepth;
        return $this;
    }

    /**
     * Gets as samplingRate
     *
     * The sample rate of the File in kHz.
     *
     * @return float
     */
    public function getSamplingRate()
    {
        return $this->samplingRate;
    }

    /**
     * Sets a new samplingRate
     *
     * The sample rate of the File in kHz.
     *
     * @param float $samplingRate
     * @return self
     */
    public function setSamplingRate($samplingRate)
    {
        $this->samplingRate = $samplingRate;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the File.
     *
     * @return \DDEX\RIN\RIN11F\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the File.
     *
     * @param \DDEX\RIN\RIN11F\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN11F\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing ReceivedFileType
 *
 * A Composite containing details of a File received by FTP. A HashSum or Signature is mandatory if the FileStatus is FileOK.
 * XSD Type: ReceivedFile
 */
class ReceivedFileType
{
    /**
     * The Name of the File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * The status of the File in terms of its validity.
     *
     * @var string $fileStatus
     */
    private $fileStatus = null;

    /**
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated. Either this Element or the Signature is required, but not both.
     *
     * @var \DDEX\MWN\MWN_100\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * A digital signature of the File in accordance with DDEX-DSIG. Either this Element or the HashSum is required, but not both.
     *
     * @var \DDEX\MWN\MWN_100\DdexDigitalSignatureType $signature
     */
    private $signature = null;

    /**
     * Gets as fileName
     *
     * The Name of the File.
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
     * The Name of the File.
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
     * Gets as fileStatus
     *
     * The status of the File in terms of its validity.
     *
     * @return string
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    /**
     * Sets a new fileStatus
     *
     * The status of the File in terms of its validity.
     *
     * @param string $fileStatus
     * @return self
     */
    public function setFileStatus($fileStatus)
    {
        $this->fileStatus = $fileStatus;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated. Either this Element or the Signature is required, but not both.
     *
     * @return \DDEX\MWN\MWN_100\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated. Either this Element or the Signature is required, but not both.
     *
     * @param \DDEX\MWN\MWN_100\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\MWN\MWN_100\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as signature
     *
     * A digital signature of the File in accordance with DDEX-DSIG. Either this Element or the HashSum is required, but not both.
     *
     * @return \DDEX\MWN\MWN_100\DdexDigitalSignatureType
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * A digital signature of the File in accordance with DDEX-DSIG. Either this Element or the HashSum is required, but not both.
     *
     * @param \DDEX\MWN\MWN_100\DdexDigitalSignatureType $signature
     * @return self
     */
    public function setSignature(?\DDEX\MWN\MWN_100\DdexDigitalSignatureType $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}


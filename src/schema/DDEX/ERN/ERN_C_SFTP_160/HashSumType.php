<?php

namespace DDEX\ERN\ERN_C_SFTP_160;

/**
 * Class representing HashSumType
 *
 * A Composite containing details of a HashSum and its governing algorithm.
 * XSD Type: HashSum
 */
class HashSumType
{
    /**
     * The value of the HashSum.
     *
     * @var string $hashSum
     */
    private $hashSum = null;

    /**
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\HashSumAlgorithmTypeType $hashSumAlgorithmType
     */
    private $hashSumAlgorithmType = null;

    /**
     * The datatype of the HashSum.
     *
     * @var string $hashSumDataType
     */
    private $hashSumDataType = null;

    /**
     * Gets as hashSum
     *
     * The value of the HashSum.
     *
     * @return string
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * The value of the HashSum.
     *
     * @param string $hashSum
     * @return self
     */
    public function setHashSum($hashSum)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as hashSumAlgorithmType
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\HashSumAlgorithmTypeType
     */
    public function getHashSumAlgorithmType()
    {
        return $this->hashSumAlgorithmType;
    }

    /**
     * Sets a new hashSumAlgorithmType
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\HashSumAlgorithmTypeType $hashSumAlgorithmType
     * @return self
     */
    public function setHashSumAlgorithmType(\DDEX\ERN\ERN_C_SFTP_160\HashSumAlgorithmTypeType $hashSumAlgorithmType)
    {
        $this->hashSumAlgorithmType = $hashSumAlgorithmType;
        return $this;
    }

    /**
     * Gets as hashSumDataType
     *
     * The datatype of the HashSum.
     *
     * @return string
     */
    public function getHashSumDataType()
    {
        return $this->hashSumDataType;
    }

    /**
     * Sets a new hashSumDataType
     *
     * The datatype of the HashSum.
     *
     * @param string $hashSumDataType
     * @return self
     */
    public function setHashSumDataType($hashSumDataType)
    {
        $this->hashSumDataType = $hashSumDataType;
        return $this;
    }
}


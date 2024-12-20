<?php

namespace DDEX\RDR_C\RDR_C_110;

/**
 * Class representing HashSumType
 *
 * A Composite containing details of a hash sum and its governing Algorithm.
 * XSD Type: HashSum
 */
class HashSumType
{
    /**
     * The value of the hash sum.
     *
     * @var string $hashSumValue
     */
    private $hashSumValue = null;

    /**
     * A Composite containing details of the Type of HashSumAlgorithm governing the hash sum.
     *
     * @var \DDEX\RDR_C\RDR_C_110\HashSumAlgorithmTypeType $hashSumAlgorithmType
     */
    private $hashSumAlgorithmType = null;

    /**
     * The datatype of the hash sum.
     *
     * @var string $hashSumDataType
     */
    private $hashSumDataType = null;

    /**
     * Gets as hashSumValue
     *
     * The value of the hash sum.
     *
     * @return string
     */
    public function getHashSumValue()
    {
        return $this->hashSumValue;
    }

    /**
     * Sets a new hashSumValue
     *
     * The value of the hash sum.
     *
     * @param string $hashSumValue
     * @return self
     */
    public function setHashSumValue($hashSumValue)
    {
        $this->hashSumValue = $hashSumValue;
        return $this;
    }

    /**
     * Gets as hashSumAlgorithmType
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the hash sum.
     *
     * @return \DDEX\RDR_C\RDR_C_110\HashSumAlgorithmTypeType
     */
    public function getHashSumAlgorithmType()
    {
        return $this->hashSumAlgorithmType;
    }

    /**
     * Sets a new hashSumAlgorithmType
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the hash sum.
     *
     * @param \DDEX\RDR_C\RDR_C_110\HashSumAlgorithmTypeType $hashSumAlgorithmType
     * @return self
     */
    public function setHashSumAlgorithmType(\DDEX\RDR_C\RDR_C_110\HashSumAlgorithmTypeType $hashSumAlgorithmType)
    {
        $this->hashSumAlgorithmType = $hashSumAlgorithmType;
        return $this;
    }

    /**
     * Gets as hashSumDataType
     *
     * The datatype of the hash sum.
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
     * The datatype of the hash sum.
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


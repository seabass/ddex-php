<?php

namespace DDEX\ERN\ERN_360;

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
     * @var \DDEX\ERN\ERN_360\HashSumAlgorithmTypeType $hashSumAlgorithmType
     */
    private $hashSumAlgorithmType = null;

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
     * @return \DDEX\ERN\ERN_360\HashSumAlgorithmTypeType
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
     * @param \DDEX\ERN\ERN_360\HashSumAlgorithmTypeType $hashSumAlgorithmType
     * @return self
     */
    public function setHashSumAlgorithmType(\DDEX\ERN\ERN_360\HashSumAlgorithmTypeType $hashSumAlgorithmType)
    {
        $this->hashSumAlgorithmType = $hashSumAlgorithmType;
        return $this;
    }
}


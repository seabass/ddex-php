<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing DetailedHashSumType
 *
 * A Composite containing details of a HashSum and its governing algorithm.
 * XSD Type: DetailedHashSum
 */
class DetailedHashSumType
{
    /**
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @var \DDEX\RIN\RIN10F\HashSumAlgorithmTypeType $algorithm
     */
    private $algorithm = null;

    /**
     * The Identifier of the Version of the HashSumAlgorithm.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A parameter of the HashSumAlgorithm.
     *
     * @var string $parameter
     */
    private $parameter = null;

    /**
     * The datatype of the HashSum.
     *
     * @var string $dataType
     */
    private $dataType = null;

    /**
     * The value of the HashSum.
     *
     * @var string $hashSum
     */
    private $hashSum = null;

    /**
     * Gets as algorithm
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @return \DDEX\RIN\RIN10F\HashSumAlgorithmTypeType
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * A Composite containing details of the Type of HashSumAlgorithm governing the HashSum.
     *
     * @param \DDEX\RIN\RIN10F\HashSumAlgorithmTypeType $algorithm
     * @return self
     */
    public function setAlgorithm(\DDEX\RIN\RIN10F\HashSumAlgorithmTypeType $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the HashSumAlgorithm.
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
     * The Identifier of the Version of the HashSumAlgorithm.
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
     * Gets as parameter
     *
     * A parameter of the HashSumAlgorithm.
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A parameter of the HashSumAlgorithm.
     *
     * @param string $parameter
     * @return self
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as dataType
     *
     * The datatype of the HashSum.
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * The datatype of the HashSum.
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

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
}


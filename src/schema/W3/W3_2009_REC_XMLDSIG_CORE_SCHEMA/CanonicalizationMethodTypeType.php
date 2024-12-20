<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing CanonicalizationMethodTypeType
 *
 * 
 * XSD Type: CanonicalizationMethodType
 */
class CanonicalizationMethodTypeType
{
    /**
     * @var string $algorithm
     */
    private $algorithm = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }
}


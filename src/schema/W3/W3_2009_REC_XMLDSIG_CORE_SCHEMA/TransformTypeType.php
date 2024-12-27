<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing TransformTypeType
 *
 * 
 * XSD Type: TransformType
 */
class TransformTypeType
{
    /**
     * @var string $algorithm
     */
    private $algorithm = null;

    /**
     * @var mixed $any
     */
    private $any = null;

    /**
     * @var string $xPath
     */
    private $xPath = null;

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

    /**
     * Gets as any
     *
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * Sets a new any
     *
     * @param $any
     * @return self
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }

    /**
     * Gets as xPath
     *
     * @return string
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath
     *
     * @param string $xPath
     * @return self
     */
    public function setXPath($xPath)
    {
        $this->xPath = $xPath;
        return $this;
    }
}


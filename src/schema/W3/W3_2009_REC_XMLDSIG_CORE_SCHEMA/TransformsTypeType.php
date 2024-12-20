<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing TransformsTypeType
 *
 * 
 * XSD Type: TransformsType
 */
class TransformsTypeType
{
    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[] $transform
     */
    private $transform = [
        
    ];

    /**
     * Adds as transform
     *
     * @return self
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform $transform
     */
    public function addToTransform(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }
}


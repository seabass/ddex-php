<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing RetrievalMethodTypeType
 *
 * 
 * XSD Type: RetrievalMethodType
 */
class RetrievalMethodTypeType
{
    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * Gets as uRI
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
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform $transform
     */
    public function addToTransforms(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Transform[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms = null)
    {
        $this->transforms = $transforms;
        return $this;
    }
}


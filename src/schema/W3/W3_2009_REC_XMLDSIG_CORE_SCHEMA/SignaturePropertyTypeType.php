<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing SignaturePropertyTypeType
 *
 * 
 * XSD Type: SignaturePropertyType
 */
class SignaturePropertyTypeType
{
    /**
     * @var string $target
     */
    private $target = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}


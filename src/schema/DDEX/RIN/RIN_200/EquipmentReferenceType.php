<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing EquipmentReferenceType
 *
 * A Composite containing a ContributorEquipmentReference.
 * XSD Type: EquipmentReference
 */
class EquipmentReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether the Equipment is the main one (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMain
     */
    private $isMain = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as isMain
     *
     * A Flag indicating whether the Equipment is the main one (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * Sets a new isMain
     *
     * A Flag indicating whether the Equipment is the main one (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isMain
     * @return self
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        return $this;
    }
}


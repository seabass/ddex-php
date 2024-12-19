<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing DurationType
 *
 * A Composite containing details of an entry in the charts.
 * XSD Type: Duration
 */
class DurationType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The unit of the Duration. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $unitOfDuration
     */
    private $unitOfDuration = null;

    /**
     * The Namespace of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

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
     * Gets as unitOfDuration
     *
     * The unit of the Duration. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getUnitOfDuration()
    {
        return $this->unitOfDuration;
    }

    /**
     * Sets a new unitOfDuration
     *
     * The unit of the Duration. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $unitOfDuration
     * @return self
     */
    public function setUnitOfDuration($unitOfDuration)
    {
        $this->unitOfDuration = $unitOfDuration;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The Namespace of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The Namespace of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as userDefinedValue
     *
     * A UserDefined value of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A UserDefined value of the UnitOfDuration. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }
}


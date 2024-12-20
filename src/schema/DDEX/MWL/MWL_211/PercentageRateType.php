<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing PercentageRateType
 *
 * A ddex:Composite containing details of a ddex:PercentageRate.
 * XSD Type: PercentageRate
 */
class PercentageRateType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * A ddex:Type of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $percentageType
     */
    private $percentageType = null;

    /**
     * The ddex:Namespace of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A ddex:UserDefined value of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
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
     * Gets as percentageType
     *
     * A ddex:Type of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getPercentageType()
    {
        return $this->percentageType;
    }

    /**
     * Sets a new percentageType
     *
     * A ddex:Type of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $percentageType
     * @return self
     */
    public function setPercentageType($percentageType)
    {
        $this->percentageType = $percentageType;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The ddex:Namespace of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Namespace of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:UserDefined value of the ddex:PercentageRate. This is represented in an XML schema as an XML ddex:Attribute.
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


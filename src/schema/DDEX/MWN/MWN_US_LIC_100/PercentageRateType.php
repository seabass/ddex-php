<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing PercentageRateType
 *
 * A Composite containing details of a PercentageRate.
 * XSD Type: PercentageRate
 */
class PercentageRateType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * A Type of the PercentageRate. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $percentageType
     */
    private $percentageType = null;

    /**
     * The Namespace of the PercentageRate. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the PercentageRate. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false).
     *
     * @var bool $hasMaxValueOfOne
     */
    private $hasMaxValueOfOne = null;

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
     * A Type of the PercentageRate. This is represented in an XML schema as an XML Attribute.
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
     * A Type of the PercentageRate. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the PercentageRate. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the PercentageRate. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the PercentageRate. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the PercentageRate. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Gets as hasMaxValueOfOne
     *
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false).
     *
     * @return bool
     */
    public function getHasMaxValueOfOne()
    {
        return $this->hasMaxValueOfOne;
    }

    /**
     * Sets a new hasMaxValueOfOne
     *
     * A Flag indicating whether a PercentageRate is given as a value in the range [0,1] (=true) instead of a value in the range [0,100] (=false).
     *
     * @param bool $hasMaxValueOfOne
     * @return self
     */
    public function setHasMaxValueOfOne($hasMaxValueOfOne)
    {
        $this->hasMaxValueOfOne = $hasMaxValueOfOne;
        return $this;
    }
}


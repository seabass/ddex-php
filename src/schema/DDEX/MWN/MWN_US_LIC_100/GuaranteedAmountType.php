<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing GuaranteedAmountType
 *
 * A Composite containing details of a GuaranteedAmount.
 * XSD Type: GuaranteedAmount
 */
class GuaranteedAmountType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * The Currency of the GuaranteedAmount (represented by an ISO 4217 CurrencyCode). This is represented in an XML schema as an XML Attribute.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * A unit to which the GuaranteedAmount refers (per Use or for the whole License).
     *
     * @var string $referenceUnit
     */
    private $referenceUnit = null;

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
     * Gets as currencyCode
     *
     * The Currency of the GuaranteedAmount (represented by an ISO 4217 CurrencyCode). This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The Currency of the GuaranteedAmount (represented by an ISO 4217 CurrencyCode). This is represented in an XML schema as an XML Attribute.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as referenceUnit
     *
     * A unit to which the GuaranteedAmount refers (per Use or for the whole License).
     *
     * @return string
     */
    public function getReferenceUnit()
    {
        return $this->referenceUnit;
    }

    /**
     * Sets a new referenceUnit
     *
     * A unit to which the GuaranteedAmount refers (per Use or for the whole License).
     *
     * @param string $referenceUnit
     * @return self
     */
    public function setReferenceUnit($referenceUnit)
    {
        $this->referenceUnit = $referenceUnit;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing DeductionRateType
 *
 * A Composite containing details of a DeductionRate.
 * XSD Type: DeductionRate
 */
class DeductionRateType
{
    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * A Type of DeductionRate. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $deductionRateType
     */
    private $deductionRateType = null;

    /**
     * A Description of the Deduction to be applied to an Amount to determine the actual Amount paid. This is a text string with no prescribed allowed values.This is represented in an XML schema as an XML Attribute.
     *
     * @var string $deductionDescription
     */
    private $deductionDescription = null;

    /**
     * The Language and script of the DeductionDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

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
     * Gets as deductionRateType
     *
     * A Type of DeductionRate. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getDeductionRateType()
    {
        return $this->deductionRateType;
    }

    /**
     * Sets a new deductionRateType
     *
     * A Type of DeductionRate. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $deductionRateType
     * @return self
     */
    public function setDeductionRateType($deductionRateType)
    {
        $this->deductionRateType = $deductionRateType;
        return $this;
    }

    /**
     * Gets as deductionDescription
     *
     * A Description of the Deduction to be applied to an Amount to determine the actual Amount paid. This is a text string with no prescribed allowed values.This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getDeductionDescription()
    {
        return $this->deductionDescription;
    }

    /**
     * Sets a new deductionDescription
     *
     * A Description of the Deduction to be applied to an Amount to determine the actual Amount paid. This is a text string with no prescribed allowed values.This is represented in an XML schema as an XML Attribute.
     *
     * @param string $deductionDescription
     * @return self
     */
    public function setDeductionDescription($deductionDescription)
    {
        $this->deductionDescription = $deductionDescription;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script of the DeductionDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script of the DeductionDescription as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }
}


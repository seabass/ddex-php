<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing TerritoryCodeWithDateType
 *
 * A Composite containing details of a TerritoryCode.
 * XSD Type: TerritoryCodeWithDate
 */
class TerritoryCodeWithDateType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Date that specifies the beginning of the Period for which the TerritoryCode applies. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $startDate
     */
    private $startDate = null;

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
     * Gets as startDate
     *
     * A Date that specifies the beginning of the Period for which the TerritoryCode applies. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Date that specifies the beginning of the Period for which the TerritoryCode applies. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing ProprietaryFinancialDataType
 *
 * A ddex:Composite containing an element of proprietary financial data.
 * XSD Type: ProprietaryFinancialData
 */
class ProprietaryFinancialDataType
{
    /**
     * The value of the proprietary financial data.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * A ddex:Composite containing a ddex:Description of the proprietary financial data.
     *
     * @var \DDEX\ddexC\DescriptionType $description
     */
    private $description = null;

    /**
     * Gets as value
     *
     * The value of the proprietary financial data.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the proprietary financial data.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as description
     *
     * A ddex:Composite containing a ddex:Description of the proprietary financial data.
     *
     * @return \DDEX\ddexC\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A ddex:Composite containing a ddex:Description of the proprietary financial data.
     *
     * @param \DDEX\ddexC\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\ddexC\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing ProprietaryFinancialDataType
 *
 * A Composite containing an element of proprietary financial data.
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
     * A Composite containing a Description of the proprietary financial data.
     *
     * @var \DDEX\DSR\DSR_43D1\DescriptionType $description
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
     * A Composite containing a Description of the proprietary financial data.
     *
     * @return \DDEX\DSR\DSR_43D1\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the proprietary financial data.
     *
     * @param \DDEX\DSR\DSR_43D1\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\DSR\DSR_43D1\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


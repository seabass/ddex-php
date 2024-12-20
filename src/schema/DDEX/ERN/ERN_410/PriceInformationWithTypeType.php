<?php

namespace DDEX\ERN\ERN_410;

/**
 * Class representing PriceInformationWithTypeType
 *
 * A Composite containing details of a Price.
 * XSD Type: PriceInformationWithType
 */
class PriceInformationWithTypeType
{
    /**
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @var string $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @var \DDEX\ERN\ERN_410\PriceTypeType $priceCode
     */
    private $priceCode = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @var \DDEX\ERN\ERN_410\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @var \DDEX\ERN\ERN_410\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a suggested retail Price.
     *
     * @var \DDEX\ERN\ERN_410\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as priceType
     *
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Type of the Price. This is represented in an XML schema as an XML Attribute. If no value is provided, a StandardRetailPrice is assumed.
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as priceCode
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @return \DDEX\ERN\ERN_410\PriceTypeType
     */
    public function getPriceCode()
    {
        return $this->priceCode;
    }

    /**
     * Sets a new priceCode
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @param \DDEX\ERN\ERN_410\PriceTypeType $priceCode
     * @return self
     */
    public function setPriceCode(?\DDEX\ERN\ERN_410\PriceTypeType $priceCode = null)
    {
        $this->priceCode = $priceCode;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @return \DDEX\ERN\ERN_410\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @param \DDEX\ERN\ERN_410\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DDEX\ERN\ERN_410\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @return \DDEX\ERN\ERN_410\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @param \DDEX\ERN\ERN_410\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DDEX\ERN\ERN_410\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @return \DDEX\ERN\ERN_410\PriceType
     */
    public function getSuggestedRetailPrice()
    {
        return $this->suggestedRetailPrice;
    }

    /**
     * Sets a new suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @param \DDEX\ERN\ERN_410\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DDEX\ERN\ERN_410\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }
}


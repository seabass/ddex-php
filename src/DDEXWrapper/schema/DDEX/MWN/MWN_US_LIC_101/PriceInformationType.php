<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing PriceInformationType
 *
 * A Composite containing details of a Price.
 * XSD Type: PriceInformation
 */
class PriceInformationType
{
    /**
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\DescriptionType $description
     */
    private $description = null;

    /**
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a suggested retail Price.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as description
     *
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\MWN\MWN_US_LIC_101\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(?\DDEX\MWN\MWN_US_LIC_101\PriceTypeType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PriceType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DDEX\MWN\MWN_US_LIC_101\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PriceType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DDEX\MWN\MWN_US_LIC_101\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PriceType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DDEX\MWN\MWN_US_LIC_101\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }
}


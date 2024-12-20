<?php

namespace DDEX\ERN\ERN_37D1;

/**
 * Class representing PriceInformationType
 *
 * A Composite containing details of a Price.
 * XSD Type: PriceInformation
 */
class PriceInformationType
{
    /**
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @var \DDEX\ERN\ERN_37D1\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @var \DDEX\ERN\ERN_37D1\DescriptionType $description
     */
    private $description = null;

    /**
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'. This is an informative element which is not meant to be used to send instructions on the Price to be used by the DSP.
     *
     * @var \DDEX\ERN\ERN_37D1\PriceRangeTypeType $priceRangeType
     */
    private $priceRangeType = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @var \DDEX\ERN\ERN_37D1\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @var \DDEX\ERN\ERN_37D1\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a suggested retail Price.
     *
     * @var \DDEX\ERN\ERN_37D1\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as priceType
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @return \DDEX\ERN\ERN_37D1\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Composite containing further details of the Price, including a Price code that informs the DSP of the Price the Release should be offered at, often in combination with a rate card. This element should not be combined with WholesalePricePerUnit or BulkOrderWholesalePricePerUnit.
     *
     * @param \DDEX\ERN\ERN_37D1\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(?\DDEX\ERN\ERN_37D1\PriceTypeType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @return \DDEX\ERN\ERN_37D1\DescriptionType
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
     * @param \DDEX\ERN\ERN_37D1\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\ERN\ERN_37D1\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceRangeType
     *
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'. This is an informative element which is not meant to be used to send instructions on the Price to be used by the DSP.
     *
     * @return \DDEX\ERN\ERN_37D1\PriceRangeTypeType
     */
    public function getPriceRangeType()
    {
        return $this->priceRangeType;
    }

    /**
     * Sets a new priceRangeType
     *
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'. This is an informative element which is not meant to be used to send instructions on the Price to be used by the DSP.
     *
     * @param \DDEX\ERN\ERN_37D1\PriceRangeTypeType $priceRangeType
     * @return self
     */
    public function setPriceRangeType(?\DDEX\ERN\ERN_37D1\PriceRangeTypeType $priceRangeType = null)
    {
        $this->priceRangeType = $priceRangeType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, which informs the informs the DSP of the Price the Release should be offered at. Note that this Price applies to all UseTypes referenced in a DealTerm Composite. This element should not be combined with PriceType.
     *
     * @return \DDEX\ERN\ERN_37D1\PriceType
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
     * @param \DDEX\ERN\ERN_37D1\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DDEX\ERN\ERN_37D1\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit, which informs the informs the DSP of the Price the Release should be offered at. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient. This element should not be combined with PriceType.
     *
     * @return \DDEX\ERN\ERN_37D1\PriceType
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
     * @param \DDEX\ERN\ERN_37D1\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DDEX\ERN\ERN_37D1\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @return \DDEX\ERN\ERN_37D1\PriceType
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
     * @param \DDEX\ERN\ERN_37D1\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DDEX\ERN\ERN_37D1\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }
}


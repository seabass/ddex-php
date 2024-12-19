<?php

namespace DDEX\ddexC;

/**
 * Class representing PriceInformationType
 *
 * A ddex:Composite containing details of a ddex:Price.
 * XSD Type: PriceInformation
 */
class PriceInformationType
{
    /**
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
     *
     * @var \DDEX\ddexC\DescriptionType $description
     */
    private $description = null;

    /**
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @var \DDEX\ddexC\PriceRangeTypeType $priceRangeType
     */
    private $priceRangeType = null;

    /**
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @var \DDEX\ddexC\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @var \DDEX\ddexC\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @var \DDEX\ddexC\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @var \DDEX\ddexC\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * Gets as description
     *
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
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
     * A ddex:Composite containing a ddex:Description of the differences between multiple ddexC:PriceInformation ddex:Composites.
     *
     * @param \DDEX\ddexC\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\ddexC\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceRangeType
     *
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @return \DDEX\ddexC\PriceRangeTypeType
     */
    public function getPriceRangeType()
    {
        return $this->priceRangeType;
    }

    /**
     * Sets a new priceRangeType
     *
     * A ddex:Composite containing a ddex:Type of ddex:Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @param \DDEX\ddexC\PriceRangeTypeType $priceRangeType
     * @return self
     */
    public function setPriceRangeType(?\DDEX\ddexC\PriceRangeTypeType $priceRangeType = null)
    {
        $this->priceRangeType = $priceRangeType;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @return \DDEX\ddexC\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A ddex:Composite containing further details of the ddex:Price. Often used to refine the ddex:PriceRangeType.
     *
     * @param \DDEX\ddexC\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(?\DDEX\ddexC\PriceTypeType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @return \DDEX\ddexC\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit of Usage. Note that this ddex:Price applies to all ddex:UseTypes referenced in a DealTerm ddex:Composite.
     *
     * @param \DDEX\ddexC\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DDEX\ddexC\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @return \DDEX\ddexC\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A ddex:Composite containing details of a wholesale ddex:Price for a single unit. Note that the size of a bulk order is defined in the contract between ddex:MessageSender and the ddex:MessageRecipient.
     *
     * @param \DDEX\ddexC\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DDEX\ddexC\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @return \DDEX\ddexC\PriceType
     */
    public function getSuggestedRetailPrice()
    {
        return $this->suggestedRetailPrice;
    }

    /**
     * Sets a new suggestedRetailPrice
     *
     * A ddex:Composite containing details of a suggested retail ddex:Price.
     *
     * @param \DDEX\ddexC\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DDEX\ddexC\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_430;

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
     * @var \DDEX\DSR\DSR_430\DescriptionType $description
     */
    private $description = null;

    /**
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @var \DDEX\DSR\DSR_430\PriceRangeTypeType $priceRangeType
     */
    private $priceRangeType = null;

    /**
     * A Composite containing further details of the Price. Often used to refine the PriceRangeType.
     *
     * @var \DDEX\DSR\DSR_430\PriceTypeType $priceType
     */
    private $priceType = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnit
     */
    private $wholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit of Usage, using the CurrencyOfAccounting. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnitInCurrencyOfAccounting
     */
    private $wholesalePricePerUnitInCurrencyOfAccounting = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnit
     */
    private $bulkOrderWholesalePricePerUnit = null;

    /**
     * A Composite containing details of a wholesale Price for a single unit, using the CurrencyOfAccounting. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnitInCurrencyOfAccounting
     */
    private $bulkOrderWholesalePricePerUnitInCurrencyOfAccounting = null;

    /**
     * A Composite containing details of a suggested retail Price.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $suggestedRetailPrice
     */
    private $suggestedRetailPrice = null;

    /**
     * A Composite containing details of a suggested retail Price, using the CurrencyOfAccounting.
     *
     * @var \DDEX\DSR\DSR_430\PriceType $suggestedRetailPriceInCurrencyOfAccounting
     */
    private $suggestedRetailPriceInCurrencyOfAccounting = null;

    /**
     * The effective cost per mille (eCPM) for an advertisement at transaction level.
     *
     * @var float $eCPM
     */
    private $eCPM = null;

    /**
     * Gets as description
     *
     * A Composite containing a Description of the differences between multiple PriceInformation Composites.
     *
     * @return \DDEX\DSR\DSR_430\DescriptionType
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
     * @param \DDEX\DSR\DSR_430\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DDEX\DSR\DSR_430\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as priceRangeType
     *
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @return \DDEX\DSR\DSR_430\PriceRangeTypeType
     */
    public function getPriceRangeType()
    {
        return $this->priceRangeType;
    }

    /**
     * Sets a new priceRangeType
     *
     * A Composite containing a Type of Price according to its value range. Typical examples include 'budget' and 'front line'.
     *
     * @param \DDEX\DSR\DSR_430\PriceRangeTypeType $priceRangeType
     * @return self
     */
    public function setPriceRangeType(?\DDEX\DSR\DSR_430\PriceRangeTypeType $priceRangeType = null)
    {
        $this->priceRangeType = $priceRangeType;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * A Composite containing further details of the Price. Often used to refine the PriceRangeType.
     *
     * @return \DDEX\DSR\DSR_430\PriceTypeType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * A Composite containing further details of the Price. Often used to refine the PriceRangeType.
     *
     * @param \DDEX\DSR\DSR_430\PriceTypeType $priceType
     * @return self
     */
    public function setPriceType(?\DDEX\DSR\DSR_430\PriceTypeType $priceType = null)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
     */
    public function getWholesalePricePerUnit()
    {
        return $this->wholesalePricePerUnit;
    }

    /**
     * Sets a new wholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @param \DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnit
     * @return self
     */
    public function setWholesalePricePerUnit(?\DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnit = null)
    {
        $this->wholesalePricePerUnit = $wholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as wholesalePricePerUnitInCurrencyOfAccounting
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, using the CurrencyOfAccounting. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
     */
    public function getWholesalePricePerUnitInCurrencyOfAccounting()
    {
        return $this->wholesalePricePerUnitInCurrencyOfAccounting;
    }

    /**
     * Sets a new wholesalePricePerUnitInCurrencyOfAccounting
     *
     * A Composite containing details of a wholesale Price for a single unit of Usage, using the CurrencyOfAccounting. Note that this Price applies to all UseTypes referenced in a DealTerm Composite.
     *
     * @param \DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnitInCurrencyOfAccounting
     * @return self
     */
    public function setWholesalePricePerUnitInCurrencyOfAccounting(?\DDEX\DSR\DSR_430\PriceType $wholesalePricePerUnitInCurrencyOfAccounting = null)
    {
        $this->wholesalePricePerUnitInCurrencyOfAccounting = $wholesalePricePerUnitInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
     */
    public function getBulkOrderWholesalePricePerUnit()
    {
        return $this->bulkOrderWholesalePricePerUnit;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnit
     *
     * A Composite containing details of a wholesale Price for a single unit. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @param \DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnit
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnit(?\DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnit = null)
    {
        $this->bulkOrderWholesalePricePerUnit = $bulkOrderWholesalePricePerUnit;
        return $this;
    }

    /**
     * Gets as bulkOrderWholesalePricePerUnitInCurrencyOfAccounting
     *
     * A Composite containing details of a wholesale Price for a single unit, using the CurrencyOfAccounting. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
     */
    public function getBulkOrderWholesalePricePerUnitInCurrencyOfAccounting()
    {
        return $this->bulkOrderWholesalePricePerUnitInCurrencyOfAccounting;
    }

    /**
     * Sets a new bulkOrderWholesalePricePerUnitInCurrencyOfAccounting
     *
     * A Composite containing details of a wholesale Price for a single unit, using the CurrencyOfAccounting. Note that the size of a bulk order is defined in the contract between MessageSender and the MessageRecipient.
     *
     * @param \DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnitInCurrencyOfAccounting
     * @return self
     */
    public function setBulkOrderWholesalePricePerUnitInCurrencyOfAccounting(?\DDEX\DSR\DSR_430\PriceType $bulkOrderWholesalePricePerUnitInCurrencyOfAccounting = null)
    {
        $this->bulkOrderWholesalePricePerUnitInCurrencyOfAccounting = $bulkOrderWholesalePricePerUnitInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as suggestedRetailPrice
     *
     * A Composite containing details of a suggested retail Price.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
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
     * @param \DDEX\DSR\DSR_430\PriceType $suggestedRetailPrice
     * @return self
     */
    public function setSuggestedRetailPrice(?\DDEX\DSR\DSR_430\PriceType $suggestedRetailPrice = null)
    {
        $this->suggestedRetailPrice = $suggestedRetailPrice;
        return $this;
    }

    /**
     * Gets as suggestedRetailPriceInCurrencyOfAccounting
     *
     * A Composite containing details of a suggested retail Price, using the CurrencyOfAccounting.
     *
     * @return \DDEX\DSR\DSR_430\PriceType
     */
    public function getSuggestedRetailPriceInCurrencyOfAccounting()
    {
        return $this->suggestedRetailPriceInCurrencyOfAccounting;
    }

    /**
     * Sets a new suggestedRetailPriceInCurrencyOfAccounting
     *
     * A Composite containing details of a suggested retail Price, using the CurrencyOfAccounting.
     *
     * @param \DDEX\DSR\DSR_430\PriceType $suggestedRetailPriceInCurrencyOfAccounting
     * @return self
     */
    public function setSuggestedRetailPriceInCurrencyOfAccounting(?\DDEX\DSR\DSR_430\PriceType $suggestedRetailPriceInCurrencyOfAccounting = null)
    {
        $this->suggestedRetailPriceInCurrencyOfAccounting = $suggestedRetailPriceInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as eCPM
     *
     * The effective cost per mille (eCPM) for an advertisement at transaction level.
     *
     * @return float
     */
    public function getECPM()
    {
        return $this->eCPM;
    }

    /**
     * Sets a new eCPM
     *
     * The effective cost per mille (eCPM) for an advertisement at transaction level.
     *
     * @param float $eCPM
     * @return self
     */
    public function setECPM($eCPM)
    {
        $this->eCPM = $eCPM;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing SalesDataToSocietyType
 *
 * A ddex:Composite containing details of ddex:SalesTransactions of a ddex:Release.
 * XSD Type: SalesDataToSociety
 */
class SalesDataToSocietyType
{
    /**
     * A ddex:Composite containing details of the criteria by which sales reports to societies are grouped.
     *
     * @var \DDEX\DSR\DSR_410\SalesDataGroupingToSocietyType $salesDataGrouping
     */
    private $salesDataGrouping = null;

    /**
     * The number of unit sales of the ddex:Release from the ddex:DSP to ddex:Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
     *
     * @var int $numberOfConsumerSalesGross
     */
    private $numberOfConsumerSalesGross = null;

    /**
     * The number of sold units of a ddex:Release returned (with refund) to the ddex:DSP as a result of a reversal of a ddex:SalesTransaction or because of an earlier error in sales reporting.
     *
     * @var int $numberOfUnitAdjustments
     */
    private $numberOfUnitAdjustments = null;

    /**
     * The number of units of a ddex:Release provided free to ddex:Consumers.
     *
     * @var int $numberOfFreeUnitsToConsumers
     */
    private $numberOfFreeUnitsToConsumers = null;

    /**
     * The number of free units of a ddex:Release returned to the ddex:DSP.
     *
     * @var int $numberOfUnitAdjustmentsToFreeUnits
     */
    private $numberOfUnitAdjustmentsToFreeUnits = null;

    /**
     * A ddex:Composite containing details of a ddex:PriceConsumerPaidExcSalesTax. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @var \DDEX\ddexC\PriceConsumerPaidExcSalesTaxType $priceConsumerPaidExcSalesTax
     */
    private $priceConsumerPaidExcSalesTax = null;

    /**
     * The gross ddex:Price (that is, including value-added tax) paid by the ddex:Consumer. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @var float $consumerPriceGross
     */
    private $consumerPriceGross = null;

    /**
     * Gets as salesDataGrouping
     *
     * A ddex:Composite containing details of the criteria by which sales reports to societies are grouped.
     *
     * @return \DDEX\DSR\DSR_410\SalesDataGroupingToSocietyType
     */
    public function getSalesDataGrouping()
    {
        return $this->salesDataGrouping;
    }

    /**
     * Sets a new salesDataGrouping
     *
     * A ddex:Composite containing details of the criteria by which sales reports to societies are grouped.
     *
     * @param \DDEX\DSR\DSR_410\SalesDataGroupingToSocietyType $salesDataGrouping
     * @return self
     */
    public function setSalesDataGrouping(?\DDEX\DSR\DSR_410\SalesDataGroupingToSocietyType $salesDataGrouping = null)
    {
        $this->salesDataGrouping = $salesDataGrouping;
        return $this;
    }

    /**
     * Gets as numberOfConsumerSalesGross
     *
     * The number of unit sales of the ddex:Release from the ddex:DSP to ddex:Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
     *
     * @return int
     */
    public function getNumberOfConsumerSalesGross()
    {
        return $this->numberOfConsumerSalesGross;
    }

    /**
     * Sets a new numberOfConsumerSalesGross
     *
     * The number of unit sales of the ddex:Release from the ddex:DSP to ddex:Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
     *
     * @param int $numberOfConsumerSalesGross
     * @return self
     */
    public function setNumberOfConsumerSalesGross($numberOfConsumerSalesGross)
    {
        $this->numberOfConsumerSalesGross = $numberOfConsumerSalesGross;
        return $this;
    }

    /**
     * Gets as numberOfUnitAdjustments
     *
     * The number of sold units of a ddex:Release returned (with refund) to the ddex:DSP as a result of a reversal of a ddex:SalesTransaction or because of an earlier error in sales reporting.
     *
     * @return int
     */
    public function getNumberOfUnitAdjustments()
    {
        return $this->numberOfUnitAdjustments;
    }

    /**
     * Sets a new numberOfUnitAdjustments
     *
     * The number of sold units of a ddex:Release returned (with refund) to the ddex:DSP as a result of a reversal of a ddex:SalesTransaction or because of an earlier error in sales reporting.
     *
     * @param int $numberOfUnitAdjustments
     * @return self
     */
    public function setNumberOfUnitAdjustments($numberOfUnitAdjustments)
    {
        $this->numberOfUnitAdjustments = $numberOfUnitAdjustments;
        return $this;
    }

    /**
     * Gets as numberOfFreeUnitsToConsumers
     *
     * The number of units of a ddex:Release provided free to ddex:Consumers.
     *
     * @return int
     */
    public function getNumberOfFreeUnitsToConsumers()
    {
        return $this->numberOfFreeUnitsToConsumers;
    }

    /**
     * Sets a new numberOfFreeUnitsToConsumers
     *
     * The number of units of a ddex:Release provided free to ddex:Consumers.
     *
     * @param int $numberOfFreeUnitsToConsumers
     * @return self
     */
    public function setNumberOfFreeUnitsToConsumers($numberOfFreeUnitsToConsumers)
    {
        $this->numberOfFreeUnitsToConsumers = $numberOfFreeUnitsToConsumers;
        return $this;
    }

    /**
     * Gets as numberOfUnitAdjustmentsToFreeUnits
     *
     * The number of free units of a ddex:Release returned to the ddex:DSP.
     *
     * @return int
     */
    public function getNumberOfUnitAdjustmentsToFreeUnits()
    {
        return $this->numberOfUnitAdjustmentsToFreeUnits;
    }

    /**
     * Sets a new numberOfUnitAdjustmentsToFreeUnits
     *
     * The number of free units of a ddex:Release returned to the ddex:DSP.
     *
     * @param int $numberOfUnitAdjustmentsToFreeUnits
     * @return self
     */
    public function setNumberOfUnitAdjustmentsToFreeUnits($numberOfUnitAdjustmentsToFreeUnits)
    {
        $this->numberOfUnitAdjustmentsToFreeUnits = $numberOfUnitAdjustmentsToFreeUnits;
        return $this;
    }

    /**
     * Gets as priceConsumerPaidExcSalesTax
     *
     * A ddex:Composite containing details of a ddex:PriceConsumerPaidExcSalesTax. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @return \DDEX\ddexC\PriceConsumerPaidExcSalesTaxType
     */
    public function getPriceConsumerPaidExcSalesTax()
    {
        return $this->priceConsumerPaidExcSalesTax;
    }

    /**
     * Sets a new priceConsumerPaidExcSalesTax
     *
     * A ddex:Composite containing details of a ddex:PriceConsumerPaidExcSalesTax. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @param \DDEX\ddexC\PriceConsumerPaidExcSalesTaxType $priceConsumerPaidExcSalesTax
     * @return self
     */
    public function setPriceConsumerPaidExcSalesTax(?\DDEX\ddexC\PriceConsumerPaidExcSalesTaxType $priceConsumerPaidExcSalesTax = null)
    {
        $this->priceConsumerPaidExcSalesTax = $priceConsumerPaidExcSalesTax;
        return $this;
    }

    /**
     * Gets as consumerPriceGross
     *
     * The gross ddex:Price (that is, including value-added tax) paid by the ddex:Consumer. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @return float
     */
    public function getConsumerPriceGross()
    {
        return $this->consumerPriceGross;
    }

    /**
     * Sets a new consumerPriceGross
     *
     * The gross ddex:Price (that is, including value-added tax) paid by the ddex:Consumer. This ddex:Element is to be used only when no ddex:Deal ddex:Composite is available which applies to the sales.
     *
     * @param float $consumerPriceGross
     * @return self
     */
    public function setConsumerPriceGross($consumerPriceGross)
    {
        $this->consumerPriceGross = $consumerPriceGross;
        return $this;
    }
}


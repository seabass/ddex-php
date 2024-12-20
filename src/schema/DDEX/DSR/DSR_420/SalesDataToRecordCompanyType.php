<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing SalesDataToRecordCompanyType
 *
 * A Composite containing details of SalesTransactions of a Release.
 * XSD Type: SalesDataToRecordCompany
 */
class SalesDataToRecordCompanyType
{
    /**
     * A Composite containing details of the criteria by which sales reports to record companies are grouped.
     *
     * @var \DDEX\DSR\DSR_420\SalesDataGroupingToRecordCompanyType $salesDataGrouping
     */
    private $salesDataGrouping = null;

    /**
     * The number of unit sales of the Release from the DSP to Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
     *
     * @var int $numberOfConsumerSalesGross
     */
    private $numberOfConsumerSalesGross = null;

    /**
     * The number of sold units of a Release returned (with refund) to the DSP as a result of a reversal of a SalesTransaction or because of an earlier error in sales reporting.
     *
     * @var int $numberOfUnitAdjustments
     */
    private $numberOfUnitAdjustments = null;

    /**
     * The number of units of a Release provided free to Consumers.
     *
     * @var int $numberOfFreeUnitsToConsumers
     */
    private $numberOfFreeUnitsToConsumers = null;

    /**
     * The number of free units of a Release returned to the DSP.
     *
     * @var int $numberOfUnitAdjustmentsToFreeUnits
     */
    private $numberOfUnitAdjustmentsToFreeUnits = null;

    /**
     * Gets as salesDataGrouping
     *
     * A Composite containing details of the criteria by which sales reports to record companies are grouped.
     *
     * @return \DDEX\DSR\DSR_420\SalesDataGroupingToRecordCompanyType
     */
    public function getSalesDataGrouping()
    {
        return $this->salesDataGrouping;
    }

    /**
     * Sets a new salesDataGrouping
     *
     * A Composite containing details of the criteria by which sales reports to record companies are grouped.
     *
     * @param \DDEX\DSR\DSR_420\SalesDataGroupingToRecordCompanyType $salesDataGrouping
     * @return self
     */
    public function setSalesDataGrouping(?\DDEX\DSR\DSR_420\SalesDataGroupingToRecordCompanyType $salesDataGrouping = null)
    {
        $this->salesDataGrouping = $salesDataGrouping;
        return $this;
    }

    /**
     * Gets as numberOfConsumerSalesGross
     *
     * The number of unit sales of the Release from the DSP to Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
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
     * The number of unit sales of the Release from the DSP to Consumers, including any sales adjustments but not including units made available free of charge. Sales adjustments include e.g. file failures.
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
     * The number of sold units of a Release returned (with refund) to the DSP as a result of a reversal of a SalesTransaction or because of an earlier error in sales reporting.
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
     * The number of sold units of a Release returned (with refund) to the DSP as a result of a reversal of a SalesTransaction or because of an earlier error in sales reporting.
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
     * The number of units of a Release provided free to Consumers.
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
     * The number of units of a Release provided free to Consumers.
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
     * The number of free units of a Release returned to the DSP.
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
     * The number of free units of a Release returned to the DSP.
     *
     * @param int $numberOfUnitAdjustmentsToFreeUnits
     * @return self
     */
    public function setNumberOfUnitAdjustmentsToFreeUnits($numberOfUnitAdjustmentsToFreeUnits)
    {
        $this->numberOfUnitAdjustmentsToFreeUnits = $numberOfUnitAdjustmentsToFreeUnits;
        return $this;
    }
}


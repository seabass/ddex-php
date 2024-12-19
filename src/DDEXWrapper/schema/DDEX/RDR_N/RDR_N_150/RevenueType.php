<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RevenueType
 *
 * A Composite containing details of a Revenue.
 * XSD Type: Revenue
 */
class RevenueType
{
    /**
     * The Revenue without or before Deductions.
     *
     * @var float $grossRevenue
     */
    private $grossRevenue = null;

    /**
     * An administrative fee to be paid.
     *
     * @var float $adminFee
     */
    private $adminFee = null;

    /**
     * The Revenue without or before taking the WithholdingTax into account.
     *
     * @var float $netRevenueBeforeWithholdingTax
     */
    private $netRevenueBeforeWithholdingTax = null;

    /**
     * [missing definition]
     *
     * @var float $withholdingTax
     */
    private $withholdingTax = null;

    /**
     * The Revenue after Deductions.
     *
     * @var float $netRevenue
     */
    private $netRevenue = null;

    /**
     * Gets as grossRevenue
     *
     * The Revenue without or before Deductions.
     *
     * @return float
     */
    public function getGrossRevenue()
    {
        return $this->grossRevenue;
    }

    /**
     * Sets a new grossRevenue
     *
     * The Revenue without or before Deductions.
     *
     * @param float $grossRevenue
     * @return self
     */
    public function setGrossRevenue($grossRevenue)
    {
        $this->grossRevenue = $grossRevenue;
        return $this;
    }

    /**
     * Gets as adminFee
     *
     * An administrative fee to be paid.
     *
     * @return float
     */
    public function getAdminFee()
    {
        return $this->adminFee;
    }

    /**
     * Sets a new adminFee
     *
     * An administrative fee to be paid.
     *
     * @param float $adminFee
     * @return self
     */
    public function setAdminFee($adminFee)
    {
        $this->adminFee = $adminFee;
        return $this;
    }

    /**
     * Gets as netRevenueBeforeWithholdingTax
     *
     * The Revenue without or before taking the WithholdingTax into account.
     *
     * @return float
     */
    public function getNetRevenueBeforeWithholdingTax()
    {
        return $this->netRevenueBeforeWithholdingTax;
    }

    /**
     * Sets a new netRevenueBeforeWithholdingTax
     *
     * The Revenue without or before taking the WithholdingTax into account.
     *
     * @param float $netRevenueBeforeWithholdingTax
     * @return self
     */
    public function setNetRevenueBeforeWithholdingTax($netRevenueBeforeWithholdingTax)
    {
        $this->netRevenueBeforeWithholdingTax = $netRevenueBeforeWithholdingTax;
        return $this;
    }

    /**
     * Gets as withholdingTax
     *
     * [missing definition]
     *
     * @return float
     */
    public function getWithholdingTax()
    {
        return $this->withholdingTax;
    }

    /**
     * Sets a new withholdingTax
     *
     * [missing definition]
     *
     * @param float $withholdingTax
     * @return self
     */
    public function setWithholdingTax($withholdingTax)
    {
        $this->withholdingTax = $withholdingTax;
        return $this;
    }

    /**
     * Gets as netRevenue
     *
     * The Revenue after Deductions.
     *
     * @return float
     */
    public function getNetRevenue()
    {
        return $this->netRevenue;
    }

    /**
     * Sets a new netRevenue
     *
     * The Revenue after Deductions.
     *
     * @param float $netRevenue
     * @return self
     */
    public function setNetRevenue($netRevenue)
    {
        $this->netRevenue = $netRevenue;
        return $this;
    }
}


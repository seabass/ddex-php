<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SummaryDealType
 *
 * A ddex:Composite containing a summary of the terms and conditions of a ddex:Deal made between a ddex:DSP (as ddex:Licensee) and a ddex:Licensor of ddex:Works or ddex:Releases.
 * XSD Type: SummaryDeal
 */
class SummaryDealType
{
    /**
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode), if different from the ddex:CurrencyOfAccounting.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ddex:Price paid by ddex:Consumers, excluding value-added tax.
     *
     * @var float $priceConsumerPaidExcSalesTax
     */
    private $priceConsumerPaidExcSalesTax = null;

    /**
     * The ddex:Price paid by ddex:Consumers, including value-added tax.
     *
     * @var float $consumerPriceGross
     */
    private $consumerPriceGross = null;

    /**
     * Gets as currencyCode
     *
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode), if different from the ddex:CurrencyOfAccounting.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode), if different from the ddex:CurrencyOfAccounting.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as priceConsumerPaidExcSalesTax
     *
     * The ddex:Price paid by ddex:Consumers, excluding value-added tax.
     *
     * @return float
     */
    public function getPriceConsumerPaidExcSalesTax()
    {
        return $this->priceConsumerPaidExcSalesTax;
    }

    /**
     * Sets a new priceConsumerPaidExcSalesTax
     *
     * The ddex:Price paid by ddex:Consumers, excluding value-added tax.
     *
     * @param float $priceConsumerPaidExcSalesTax
     * @return self
     */
    public function setPriceConsumerPaidExcSalesTax($priceConsumerPaidExcSalesTax)
    {
        $this->priceConsumerPaidExcSalesTax = $priceConsumerPaidExcSalesTax;
        return $this;
    }

    /**
     * Gets as consumerPriceGross
     *
     * The ddex:Price paid by ddex:Consumers, including value-added tax.
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
     * The ddex:Price paid by ddex:Consumers, including value-added tax.
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


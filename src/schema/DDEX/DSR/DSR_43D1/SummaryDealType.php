<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing SummaryDealType
 *
 * A Composite containing a summary of the terms and conditions of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 * XSD Type: SummaryDeal
 */
class SummaryDealType
{
    /**
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode), if different from the CurrencyOfAccounting.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The Price paid by Consumers, excluding value-added tax.
     *
     * @var float $priceConsumerPaidExcSalesTax
     */
    private $priceConsumerPaidExcSalesTax = null;

    /**
     * The Price paid by Consumers, including value-added tax.
     *
     * @var float $consumerPriceGross
     */
    private $consumerPriceGross = null;

    /**
     * Gets as currencyCode
     *
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode), if different from the CurrencyOfAccounting.
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
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode), if different from the CurrencyOfAccounting.
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
     * The Price paid by Consumers, excluding value-added tax.
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
     * The Price paid by Consumers, excluding value-added tax.
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
     * The Price paid by Consumers, including value-added tax.
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
     * The Price paid by Consumers, including value-added tax.
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


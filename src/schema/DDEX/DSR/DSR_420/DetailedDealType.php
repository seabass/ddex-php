<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing DetailedDealType
 *
 * A Composite containing details of the terms and conditions of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 * XSD Type: DetailedDeal
 */
class DetailedDealType
{
    /**
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode) if different from the CurrencyOfAccounting.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * A Composite containing details of the Price applicable to the SalesTransaction.
     *
     * @var \DDEX\DSR\DSR_420\PriceInformationType $priceInformation
     */
    private $priceInformation = null;

    /**
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @var bool $isPromotional
     */
    private $isPromotional = null;

    /**
     * A Composite containing details of a PromotionalCode.
     *
     * @var \DDEX\DSR\DSR_420\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A Composite containing the Reference (in the form of an Identifier, Name or Description) to a TextDocument containing details of the Deal governing the SalesTransaction.
     *
     * @var \DDEX\DSR\DSR_420\DealReferenceType $dealReference
     */
    private $dealReference = null;

    /**
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @var string[] $campaignName
     */
    private $campaignName = [
        
    ];

    /**
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @var \DDEX\DSR\DSR_420\TaxRateType[] $taxRate
     */
    private $taxRate = [
        
    ];

    /**
     * The RetailPrice excluding value-added tax.
     *
     * @var float $priceConsumerPaidExcSalesTax
     */
    private $priceConsumerPaidExcSalesTax = null;

    /**
     * The RetailPrice excluding value-added tax, using the CurrencyOfAccounting.
     *
     * @var float $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     */
    private $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * The RetailPrice excluding value-added tax that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourcePriceConsumerPaidExcSalesTax
     */
    private $primaryResourcePriceConsumerPaidExcSalesTax = null;

    /**
     * The RetailPrice (excluding value-added tax and using the CurrencyOfAccounting) that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     */
    private $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @var \DDEX\DSR\DSR_420\CalculationTypeType[] $calculationType
     */
    private $calculationType = [
        
    ];

    /**
     * A Type of RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @var string $royaltyRateType
     */
    private $royaltyRateType = null;

    /**
     * The Rate of royalty to be used when calculating the royalty payment. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @var float $royaltyRate
     */
    private $royaltyRate = null;

    /**
     * The Rate of royalty to be used when calculating the royalty payment, using the CurrencyOfAccounting. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @var float $royaltyRateInCurrencyOfAccounting
     */
    private $royaltyRateInCurrencyOfAccounting = null;

    /**
     * The Price per unit (excluding value-added tax) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @var float $agreedUnitPriceExcSalesTax
     */
    private $agreedUnitPriceExcSalesTax = null;

    /**
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @var float $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     */
    private $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * The Price per unit (excluding value-added tax), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourceAgreedUnitPriceExcSalesTax
     */
    private $primaryResourceAgreedUnitPriceExcSalesTax = null;

    /**
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     */
    private $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @var \DDEX\DSR\DSR_420\DeductionRateType[] $deductionRate
     */
    private $deductionRate = [
        
    ];

    /**
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @var \DDEX\DSR\DSR_420\DeductionRateType[] $deductionRateInCurrencyOfAccounting
     */
    private $deductionRateInCurrencyOfAccounting = [
        
    ];

    /**
     * The RoyaltyRate which applies after all calculations and deductions have been applied.
     *
     * @var float $effectiveUnitRoyaltyRateNet
     */
    private $effectiveUnitRoyaltyRateNet = null;

    /**
     * The RoyaltyRate which applies after all calculations and deductions have been applied, using the CurrencyOfAccounting.
     *
     * @var float $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting
     */
    private $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting = null;

    /**
     * A Composite containing proprietary financial Elements.
     *
     * @var \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[] $proprietaryFinancialData
     */
    private $proprietaryFinancialData = [
        
    ];

    /**
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @var \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[] $proprietaryFinancialDataInCurrencyOfAccounting
     */
    private $proprietaryFinancialDataInCurrencyOfAccounting = [
        
    ];

    /**
     * The extended Amount due to the Licensor of Works or Releases for the sales (The Amount reported in this Element is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var float $amountPayable
     */
    private $amountPayable = null;

    /**
     * The AmountPayable, measured in the Currency in which it has been accounted.
     *
     * @var float $amountPayableInCurrencyOfAccounting
     */
    private $amountPayableInCurrencyOfAccounting = null;

    /**
     * The conversion Rate applicable to the AmountPayableInCurrencyOfAccounting.
     *
     * @var float $currencyExchangeRate
     */
    private $currencyExchangeRate = null;

    /**
     * A Flag indicating whether a sale reported in a SalesTransaction is a sale where a Release was returned and a related Release is acquired by the Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed Release. If this Element is not provided, it is assumed that this is False.
     *
     * @var bool $isReplacementPurchase
     */
    private $isReplacementPurchase = null;

    /**
     * A Composite containing technical details of the Release.
     *
     * @var \DDEX\DSR\DSR_420\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * Gets as currencyCode
     *
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode) if different from the CurrencyOfAccounting.
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
     * The Currency in which the SalesTransactions are made (represented by an ISO 4217 CurrencyCode) if different from the CurrencyOfAccounting.
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
     * Gets as priceInformation
     *
     * A Composite containing details of the Price applicable to the SalesTransaction.
     *
     * @return \DDEX\DSR\DSR_420\PriceInformationType
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A Composite containing details of the Price applicable to the SalesTransaction.
     *
     * @param \DDEX\DSR\DSR_420\PriceInformationType $priceInformation
     * @return self
     */
    public function setPriceInformation(?\DDEX\DSR\DSR_420\PriceInformationType $priceInformation = null)
    {
        $this->priceInformation = $priceInformation;
        return $this;
    }

    /**
     * Gets as isPromotional
     *
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @return bool
     */
    public function getIsPromotional()
    {
        return $this->isPromotional;
    }

    /**
     * Sets a new isPromotional
     *
     * The Flag indicating whether a special Deal is made between the Licensor and the Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this Deal.
     *
     * @param bool $isPromotional
     * @return self
     */
    public function setIsPromotional($isPromotional)
    {
        $this->isPromotional = $isPromotional;
        return $this;
    }

    /**
     * Gets as promotionalCode
     *
     * A Composite containing details of a PromotionalCode.
     *
     * @return \DDEX\DSR\DSR_420\PromotionalCodeType
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * A Composite containing details of a PromotionalCode.
     *
     * @param \DDEX\DSR\DSR_420\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DDEX\DSR\DSR_420\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Gets as dealReference
     *
     * A Composite containing the Reference (in the form of an Identifier, Name or Description) to a TextDocument containing details of the Deal governing the SalesTransaction.
     *
     * @return \DDEX\DSR\DSR_420\DealReferenceType
     */
    public function getDealReference()
    {
        return $this->dealReference;
    }

    /**
     * Sets a new dealReference
     *
     * A Composite containing the Reference (in the form of an Identifier, Name or Description) to a TextDocument containing details of the Deal governing the SalesTransaction.
     *
     * @param \DDEX\DSR\DSR_420\DealReferenceType $dealReference
     * @return self
     */
    public function setDealReference(?\DDEX\DSR\DSR_420\DealReferenceType $dealReference = null)
    {
        $this->dealReference = $dealReference;
        return $this;
    }

    /**
     * Adds as campaignName
     *
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @return self
     * @param string $campaignName
     */
    public function addToCampaignName($campaignName)
    {
        $this->campaignName[] = $campaignName;
        return $this;
    }

    /**
     * isset campaignName
     *
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCampaignName($index)
    {
        return isset($this->campaignName[$index]);
    }

    /**
     * unset campaignName
     *
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCampaignName($index)
    {
        unset($this->campaignName[$index]);
    }

    /**
     * Gets as campaignName
     *
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @return string[]
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }

    /**
     * Sets a new campaignName
     *
     * The Name of an advertising campaign if the CommercialModelType is AdvertisementSupportedModel.
     *
     * @param string[] $campaignName
     * @return self
     */
    public function setCampaignName(array $campaignName = null)
    {
        $this->campaignName = $campaignName;
        return $this;
    }

    /**
     * Adds as taxRate
     *
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TaxRateType $taxRate
     */
    public function addToTaxRate(\DDEX\DSR\DSR_420\TaxRateType $taxRate)
    {
        $this->taxRate[] = $taxRate;
        return $this;
    }

    /**
     * isset taxRate
     *
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxRate($index)
    {
        return isset($this->taxRate[$index]);
    }

    /**
     * unset taxRate
     *
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxRate($index)
    {
        unset($this->taxRate[$index]);
    }

    /**
     * Gets as taxRate
     *
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @return \DDEX\DSR\DSR_420\TaxRateType[]
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * A Composite containing details of a TaxRate applicable to the total Amount to be paid. Within the DSR Message, only one of the two TaxRate Elements (here and in the SalesByTerritory or in the SalesByTerritory Composite) may be filled.
     *
     * @param \DDEX\DSR\DSR_420\TaxRateType[] $taxRate
     * @return self
     */
    public function setTaxRate(array $taxRate = null)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Gets as priceConsumerPaidExcSalesTax
     *
     * The RetailPrice excluding value-added tax.
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
     * The RetailPrice excluding value-added tax.
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
     * Gets as priceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     *
     * The RetailPrice excluding value-added tax, using the CurrencyOfAccounting.
     *
     * @return float
     */
    public function getPriceConsumerPaidExcSalesTaxInCurrencyOfAccounting()
    {
        return $this->priceConsumerPaidExcSalesTaxInCurrencyOfAccounting;
    }

    /**
     * Sets a new priceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     *
     * The RetailPrice excluding value-added tax, using the CurrencyOfAccounting.
     *
     * @param float $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     * @return self
     */
    public function setPriceConsumerPaidExcSalesTaxInCurrencyOfAccounting($priceConsumerPaidExcSalesTaxInCurrencyOfAccounting)
    {
        $this->priceConsumerPaidExcSalesTaxInCurrencyOfAccounting = $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as primaryResourcePriceConsumerPaidExcSalesTax
     *
     * The RetailPrice excluding value-added tax that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @return float
     */
    public function getPrimaryResourcePriceConsumerPaidExcSalesTax()
    {
        return $this->primaryResourcePriceConsumerPaidExcSalesTax;
    }

    /**
     * Sets a new primaryResourcePriceConsumerPaidExcSalesTax
     *
     * The RetailPrice excluding value-added tax that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @param float $primaryResourcePriceConsumerPaidExcSalesTax
     * @return self
     */
    public function setPrimaryResourcePriceConsumerPaidExcSalesTax($primaryResourcePriceConsumerPaidExcSalesTax)
    {
        $this->primaryResourcePriceConsumerPaidExcSalesTax = $primaryResourcePriceConsumerPaidExcSalesTax;
        return $this;
    }

    /**
     * Gets as primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     *
     * The RetailPrice (excluding value-added tax and using the CurrencyOfAccounting) that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @return float
     */
    public function getPrimaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting()
    {
        return $this->primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting;
    }

    /**
     * Sets a new primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     *
     * The RetailPrice (excluding value-added tax and using the CurrencyOfAccounting) that is applicable to each primary Resource that is part of the currently reported Release. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @param float $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     * @return self
     */
    public function setPrimaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting($primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting)
    {
        $this->primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting = $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Adds as calculationType
     *
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\CalculationTypeType $calculationType
     */
    public function addToCalculationType(\DDEX\DSR\DSR_420\CalculationTypeType $calculationType)
    {
        $this->calculationType[] = $calculationType;
        return $this;
    }

    /**
     * isset calculationType
     *
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculationType($index)
    {
        return isset($this->calculationType[$index]);
    }

    /**
     * unset calculationType
     *
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculationType($index)
    {
        unset($this->calculationType[$index]);
    }

    /**
     * Gets as calculationType
     *
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return \DDEX\DSR\DSR_420\CalculationTypeType[]
     */
    public function getCalculationType()
    {
        return $this->calculationType;
    }

    /**
     * Sets a new calculationType
     *
     * A Composite containing details of a Type of Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param \DDEX\DSR\DSR_420\CalculationTypeType[] $calculationType
     * @return self
     */
    public function setCalculationType(array $calculationType = null)
    {
        $this->calculationType = $calculationType;
        return $this;
    }

    /**
     * Gets as royaltyRateType
     *
     * A Type of RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @return string
     */
    public function getRoyaltyRateType()
    {
        return $this->royaltyRateType;
    }

    /**
     * Sets a new royaltyRateType
     *
     * A Type of RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @param string $royaltyRateType
     * @return self
     */
    public function setRoyaltyRateType($royaltyRateType)
    {
        $this->royaltyRateType = $royaltyRateType;
        return $this;
    }

    /**
     * Gets as royaltyRate
     *
     * The Rate of royalty to be used when calculating the royalty payment. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @return float
     */
    public function getRoyaltyRate()
    {
        return $this->royaltyRate;
    }

    /**
     * Sets a new royaltyRate
     *
     * The Rate of royalty to be used when calculating the royalty payment. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @param float $royaltyRate
     * @return self
     */
    public function setRoyaltyRate($royaltyRate)
    {
        $this->royaltyRate = $royaltyRate;
        return $this;
    }

    /**
     * Gets as royaltyRateInCurrencyOfAccounting
     *
     * The Rate of royalty to be used when calculating the royalty payment, using the CurrencyOfAccounting. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @return float
     */
    public function getRoyaltyRateInCurrencyOfAccounting()
    {
        return $this->royaltyRateInCurrencyOfAccounting;
    }

    /**
     * Sets a new royaltyRateInCurrencyOfAccounting
     *
     * The Rate of royalty to be used when calculating the royalty payment, using the CurrencyOfAccounting. Note that when this Composite is used in a sales reporting Message for a record company, the RoyaltyRate refers to the rate due to the record company, not the royalties due to individual Artists.
     *
     * @param float $royaltyRateInCurrencyOfAccounting
     * @return self
     */
    public function setRoyaltyRateInCurrencyOfAccounting($royaltyRateInCurrencyOfAccounting)
    {
        $this->royaltyRateInCurrencyOfAccounting = $royaltyRateInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as agreedUnitPriceExcSalesTax
     *
     * The Price per unit (excluding value-added tax) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @return float
     */
    public function getAgreedUnitPriceExcSalesTax()
    {
        return $this->agreedUnitPriceExcSalesTax;
    }

    /**
     * Sets a new agreedUnitPriceExcSalesTax
     *
     * The Price per unit (excluding value-added tax) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @param float $agreedUnitPriceExcSalesTax
     * @return self
     */
    public function setAgreedUnitPriceExcSalesTax($agreedUnitPriceExcSalesTax)
    {
        $this->agreedUnitPriceExcSalesTax = $agreedUnitPriceExcSalesTax;
        return $this;
    }

    /**
     * Gets as agreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     *
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @return float
     */
    public function getAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting()
    {
        return $this->agreedUnitPriceExcSalesTaxInCurrencyOfAccounting;
    }

    /**
     * Sets a new agreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     *
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting) agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations.
     *
     * @param float $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     * @return self
     */
    public function setAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting($agreedUnitPriceExcSalesTaxInCurrencyOfAccounting)
    {
        $this->agreedUnitPriceExcSalesTaxInCurrencyOfAccounting = $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as primaryResourceAgreedUnitPriceExcSalesTax
     *
     * The Price per unit (excluding value-added tax), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @return float
     */
    public function getPrimaryResourceAgreedUnitPriceExcSalesTax()
    {
        return $this->primaryResourceAgreedUnitPriceExcSalesTax;
    }

    /**
     * Sets a new primaryResourceAgreedUnitPriceExcSalesTax
     *
     * The Price per unit (excluding value-added tax), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @param float $primaryResourceAgreedUnitPriceExcSalesTax
     * @return self
     */
    public function setPrimaryResourceAgreedUnitPriceExcSalesTax($primaryResourceAgreedUnitPriceExcSalesTax)
    {
        $this->primaryResourceAgreedUnitPriceExcSalesTax = $primaryResourceAgreedUnitPriceExcSalesTax;
        return $this;
    }

    /**
     * Gets as primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     *
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @return float
     */
    public function getPrimaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting()
    {
        return $this->primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting;
    }

    /**
     * Sets a new primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     *
     * The Price per unit (excluding value-added tax and using the CurrencyOfAccounting), which is applicable to each primary Resource that is part of the currently reported Release and which is agreed between DSP and the record company as representing the notional unit price for Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported Release contains more than one primary Resource and when the MessageSender is confident that it knows the distribution of the total amount to the individual Resources (e.g. when such a distribution is stated in a contract).
     *
     * @param float $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     * @return self
     */
    public function setPrimaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting($primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting)
    {
        $this->primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting = $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Adds as deductionRate
     *
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\DeductionRateType $deductionRate
     */
    public function addToDeductionRate(\DDEX\DSR\DSR_420\DeductionRateType $deductionRate)
    {
        $this->deductionRate[] = $deductionRate;
        return $this;
    }

    /**
     * isset deductionRate
     *
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeductionRate($index)
    {
        return isset($this->deductionRate[$index]);
    }

    /**
     * unset deductionRate
     *
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeductionRate($index)
    {
        unset($this->deductionRate[$index]);
    }

    /**
     * Gets as deductionRate
     *
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @return \DDEX\DSR\DSR_420\DeductionRateType[]
     */
    public function getDeductionRate()
    {
        return $this->deductionRate;
    }

    /**
     * Sets a new deductionRate
     *
     * A Composite containing details of an applicable DeductionRate (if any).
     *
     * @param \DDEX\DSR\DSR_420\DeductionRateType[] $deductionRate
     * @return self
     */
    public function setDeductionRate(array $deductionRate = null)
    {
        $this->deductionRate = $deductionRate;
        return $this;
    }

    /**
     * Adds as deductionRateInCurrencyOfAccounting
     *
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\DeductionRateType $deductionRateInCurrencyOfAccounting
     */
    public function addToDeductionRateInCurrencyOfAccounting(\DDEX\DSR\DSR_420\DeductionRateType $deductionRateInCurrencyOfAccounting)
    {
        $this->deductionRateInCurrencyOfAccounting[] = $deductionRateInCurrencyOfAccounting;
        return $this;
    }

    /**
     * isset deductionRateInCurrencyOfAccounting
     *
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeductionRateInCurrencyOfAccounting($index)
    {
        return isset($this->deductionRateInCurrencyOfAccounting[$index]);
    }

    /**
     * unset deductionRateInCurrencyOfAccounting
     *
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeductionRateInCurrencyOfAccounting($index)
    {
        unset($this->deductionRateInCurrencyOfAccounting[$index]);
    }

    /**
     * Gets as deductionRateInCurrencyOfAccounting
     *
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @return \DDEX\DSR\DSR_420\DeductionRateType[]
     */
    public function getDeductionRateInCurrencyOfAccounting()
    {
        return $this->deductionRateInCurrencyOfAccounting;
    }

    /**
     * Sets a new deductionRateInCurrencyOfAccounting
     *
     * A Composite containing details of an applicable DeductionRate, using the CurrencyOfAccounting (if any).
     *
     * @param \DDEX\DSR\DSR_420\DeductionRateType[] $deductionRateInCurrencyOfAccounting
     * @return self
     */
    public function setDeductionRateInCurrencyOfAccounting(array $deductionRateInCurrencyOfAccounting = null)
    {
        $this->deductionRateInCurrencyOfAccounting = $deductionRateInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as effectiveUnitRoyaltyRateNet
     *
     * The RoyaltyRate which applies after all calculations and deductions have been applied.
     *
     * @return float
     */
    public function getEffectiveUnitRoyaltyRateNet()
    {
        return $this->effectiveUnitRoyaltyRateNet;
    }

    /**
     * Sets a new effectiveUnitRoyaltyRateNet
     *
     * The RoyaltyRate which applies after all calculations and deductions have been applied.
     *
     * @param float $effectiveUnitRoyaltyRateNet
     * @return self
     */
    public function setEffectiveUnitRoyaltyRateNet($effectiveUnitRoyaltyRateNet)
    {
        $this->effectiveUnitRoyaltyRateNet = $effectiveUnitRoyaltyRateNet;
        return $this;
    }

    /**
     * Gets as effectiveUnitRoyaltyRateNetInCurrencyOfAccounting
     *
     * The RoyaltyRate which applies after all calculations and deductions have been applied, using the CurrencyOfAccounting.
     *
     * @return float
     */
    public function getEffectiveUnitRoyaltyRateNetInCurrencyOfAccounting()
    {
        return $this->effectiveUnitRoyaltyRateNetInCurrencyOfAccounting;
    }

    /**
     * Sets a new effectiveUnitRoyaltyRateNetInCurrencyOfAccounting
     *
     * The RoyaltyRate which applies after all calculations and deductions have been applied, using the CurrencyOfAccounting.
     *
     * @param float $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting
     * @return self
     */
    public function setEffectiveUnitRoyaltyRateNetInCurrencyOfAccounting($effectiveUnitRoyaltyRateNetInCurrencyOfAccounting)
    {
        $this->effectiveUnitRoyaltyRateNetInCurrencyOfAccounting = $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Adds as proprietaryFinancialData
     *
     * A Composite containing proprietary financial Elements.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ProprietaryFinancialDataType $proprietaryFinancialData
     */
    public function addToProprietaryFinancialData(\DDEX\DSR\DSR_420\ProprietaryFinancialDataType $proprietaryFinancialData)
    {
        $this->proprietaryFinancialData[] = $proprietaryFinancialData;
        return $this;
    }

    /**
     * isset proprietaryFinancialData
     *
     * A Composite containing proprietary financial Elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryFinancialData($index)
    {
        return isset($this->proprietaryFinancialData[$index]);
    }

    /**
     * unset proprietaryFinancialData
     *
     * A Composite containing proprietary financial Elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryFinancialData($index)
    {
        unset($this->proprietaryFinancialData[$index]);
    }

    /**
     * Gets as proprietaryFinancialData
     *
     * A Composite containing proprietary financial Elements.
     *
     * @return \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[]
     */
    public function getProprietaryFinancialData()
    {
        return $this->proprietaryFinancialData;
    }

    /**
     * Sets a new proprietaryFinancialData
     *
     * A Composite containing proprietary financial Elements.
     *
     * @param \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[] $proprietaryFinancialData
     * @return self
     */
    public function setProprietaryFinancialData(array $proprietaryFinancialData = null)
    {
        $this->proprietaryFinancialData = $proprietaryFinancialData;
        return $this;
    }

    /**
     * Adds as proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ProprietaryFinancialDataType $proprietaryFinancialDataInCurrencyOfAccounting
     */
    public function addToProprietaryFinancialDataInCurrencyOfAccounting(\DDEX\DSR\DSR_420\ProprietaryFinancialDataType $proprietaryFinancialDataInCurrencyOfAccounting)
    {
        $this->proprietaryFinancialDataInCurrencyOfAccounting[] = $proprietaryFinancialDataInCurrencyOfAccounting;
        return $this;
    }

    /**
     * isset proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryFinancialDataInCurrencyOfAccounting($index)
    {
        return isset($this->proprietaryFinancialDataInCurrencyOfAccounting[$index]);
    }

    /**
     * unset proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryFinancialDataInCurrencyOfAccounting($index)
    {
        unset($this->proprietaryFinancialDataInCurrencyOfAccounting[$index]);
    }

    /**
     * Gets as proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @return \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[]
     */
    public function getProprietaryFinancialDataInCurrencyOfAccounting()
    {
        return $this->proprietaryFinancialDataInCurrencyOfAccounting;
    }

    /**
     * Sets a new proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A Composite containing proprietary financial Elements, using the CurrencyOfAccounting.
     *
     * @param \DDEX\DSR\DSR_420\ProprietaryFinancialDataType[] $proprietaryFinancialDataInCurrencyOfAccounting
     * @return self
     */
    public function setProprietaryFinancialDataInCurrencyOfAccounting(array $proprietaryFinancialDataInCurrencyOfAccounting = null)
    {
        $this->proprietaryFinancialDataInCurrencyOfAccounting = $proprietaryFinancialDataInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as amountPayable
     *
     * The extended Amount due to the Licensor of Works or Releases for the sales (The Amount reported in this Element is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @return float
     */
    public function getAmountPayable()
    {
        return $this->amountPayable;
    }

    /**
     * Sets a new amountPayable
     *
     * The extended Amount due to the Licensor of Works or Releases for the sales (The Amount reported in this Element is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @param float $amountPayable
     * @return self
     */
    public function setAmountPayable($amountPayable)
    {
        $this->amountPayable = $amountPayable;
        return $this;
    }

    /**
     * Gets as amountPayableInCurrencyOfAccounting
     *
     * The AmountPayable, measured in the Currency in which it has been accounted.
     *
     * @return float
     */
    public function getAmountPayableInCurrencyOfAccounting()
    {
        return $this->amountPayableInCurrencyOfAccounting;
    }

    /**
     * Sets a new amountPayableInCurrencyOfAccounting
     *
     * The AmountPayable, measured in the Currency in which it has been accounted.
     *
     * @param float $amountPayableInCurrencyOfAccounting
     * @return self
     */
    public function setAmountPayableInCurrencyOfAccounting($amountPayableInCurrencyOfAccounting)
    {
        $this->amountPayableInCurrencyOfAccounting = $amountPayableInCurrencyOfAccounting;
        return $this;
    }

    /**
     * Gets as currencyExchangeRate
     *
     * The conversion Rate applicable to the AmountPayableInCurrencyOfAccounting.
     *
     * @return float
     */
    public function getCurrencyExchangeRate()
    {
        return $this->currencyExchangeRate;
    }

    /**
     * Sets a new currencyExchangeRate
     *
     * The conversion Rate applicable to the AmountPayableInCurrencyOfAccounting.
     *
     * @param float $currencyExchangeRate
     * @return self
     */
    public function setCurrencyExchangeRate($currencyExchangeRate)
    {
        $this->currencyExchangeRate = $currencyExchangeRate;
        return $this;
    }

    /**
     * Gets as isReplacementPurchase
     *
     * A Flag indicating whether a sale reported in a SalesTransaction is a sale where a Release was returned and a related Release is acquired by the Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed Release. If this Element is not provided, it is assumed that this is False.
     *
     * @return bool
     */
    public function getIsReplacementPurchase()
    {
        return $this->isReplacementPurchase;
    }

    /**
     * Sets a new isReplacementPurchase
     *
     * A Flag indicating whether a sale reported in a SalesTransaction is a sale where a Release was returned and a related Release is acquired by the Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed Release. If this Element is not provided, it is assumed that this is False.
     *
     * @param bool $isReplacementPurchase
     * @return self
     */
    public function setIsReplacementPurchase($isReplacementPurchase)
    {
        $this->isReplacementPurchase = $isReplacementPurchase;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @return \DDEX\DSR\DSR_420\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @param \DDEX\DSR\DSR_420\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DDEX\DSR\DSR_420\TechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }
}


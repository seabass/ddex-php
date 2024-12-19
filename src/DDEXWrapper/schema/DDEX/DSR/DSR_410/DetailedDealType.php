<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing DetailedDealType
 *
 * A ddex:Composite containing details of the terms and conditions of a ddex:Deal made between a ddex:DSP (as ddex:Licensee) and a ddex:Licensor of ddex:Works or ddex:Releases.
 * XSD Type: DetailedDeal
 */
class DetailedDealType
{
    /**
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode) if different from the ddex:CurrencyOfAccounting.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Price applicable to the ddex:SalesTransaction.
     *
     * @var \DDEX\DSR\DSR_410\PriceInformationType $priceInformation
     */
    private $priceInformation = null;

    /**
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
     *
     * @var bool $isPromotional
     */
    private $isPromotional = null;

    /**
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @var \DDEX\ddexC\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A ddex:Composite containing the ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Deal governing the ddex:SalesTransaction.
     *
     * @var \DDEX\ddexC\DealReferenceType $dealReference
     */
    private $dealReference = null;

    /**
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
     *
     * @var string[] $campaignName
     */
    private $campaignName = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
     *
     * @var \DDEX\ddexC\TaxRateType[] $taxRate
     */
    private $taxRate = [
        
    ];

    /**
     * The ddex:RetailPrice excluding value-added tax.
     *
     * @var float $priceConsumerPaidExcSalesTax
     */
    private $priceConsumerPaidExcSalesTax = null;

    /**
     * The ddex:RetailPrice excluding value-added tax, using the ddex:CurrencyOfAccounting.
     *
     * @var float $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     */
    private $priceConsumerPaidExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * The ddex:RetailPrice excluding value-added tax that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourcePriceConsumerPaidExcSalesTax
     */
    private $primaryResourcePriceConsumerPaidExcSalesTax = null;

    /**
     * The ddex:RetailPrice (excluding value-added tax and using the ddex:CurrencyOfAccounting) that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting
     */
    private $primaryResourcePriceConsumerPaidExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @var \DDEX\ddexC\CalculationTypeType[] $calculationType
     */
    private $calculationType = [
        
    ];

    /**
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
     *
     * @var string $royaltyRateType
     */
    private $royaltyRateType = null;

    /**
     * The ddex:Rate of royalty to be used when calculating the royalty payment. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
     *
     * @var float $royaltyRate
     */
    private $royaltyRate = null;

    /**
     * The ddex:Rate of royalty to be used when calculating the royalty payment, using the ddex:CurrencyOfAccounting. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
     *
     * @var float $royaltyRateInCurrencyOfAccounting
     */
    private $royaltyRateInCurrencyOfAccounting = null;

    /**
     * The ddex:Price per unit (excluding value-added tax) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
     *
     * @var float $agreedUnitPriceExcSalesTax
     */
    private $agreedUnitPriceExcSalesTax = null;

    /**
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
     *
     * @var float $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     */
    private $agreedUnitPriceExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * The ddex:Price per unit (excluding value-added tax), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourceAgreedUnitPriceExcSalesTax
     */
    private $primaryResourceAgreedUnitPriceExcSalesTax = null;

    /**
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
     *
     * @var float $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting
     */
    private $primaryResourceAgreedUnitPriceExcSalesTaxInCurrencyOfAccounting = null;

    /**
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
     *
     * @var \DDEX\ddexC\DeductionRateType[] $deductionRate
     */
    private $deductionRate = [
        
    ];

    /**
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
     *
     * @var \DDEX\ddexC\DeductionRateType[] $deductionRateInCurrencyOfAccounting
     */
    private $deductionRateInCurrencyOfAccounting = [
        
    ];

    /**
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied.
     *
     * @var float $effectiveUnitRoyaltyRateNet
     */
    private $effectiveUnitRoyaltyRateNet = null;

    /**
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied, using the ddex:CurrencyOfAccounting.
     *
     * @var float $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting
     */
    private $effectiveUnitRoyaltyRateNetInCurrencyOfAccounting = null;

    /**
     * A ddex:Composite containing proprietary financial ddex:Elements.
     *
     * @var \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[] $proprietaryFinancialData
     */
    private $proprietaryFinancialData = [
        
    ];

    /**
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
     *
     * @var \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[] $proprietaryFinancialDataInCurrencyOfAccounting
     */
    private $proprietaryFinancialDataInCurrencyOfAccounting = [
        
    ];

    /**
     * The extended ddex:Amount due to the ddex:Licensor of ddex:Works or ddex:Releases for the sales (The ddex:Amount reported in this ddex:Element is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var float $amountPayable
     */
    private $amountPayable = null;

    /**
     * The ddex:AmountPayable, measured in the ddex:Currency in which it has been accounted.
     *
     * @var float $amountPayableInCurrencyOfAccounting
     */
    private $amountPayableInCurrencyOfAccounting = null;

    /**
     * The conversion ddex:Rate applicable to the ddex:AmountPayableInCurrencyOfAccounting.
     *
     * @var float $currencyExchangeRate
     */
    private $currencyExchangeRate = null;

    /**
     * A ddex:Flag indicating whether a sale reported in a ddex:SalesTransaction is a sale where a ddex:Release was returned and a related ddex:Release is acquired by the ddex:Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed ddex:Release. If this ddex:Element is not provided, it is assumed that this is False.
     *
     * @var bool $isReplacementPurchase
     */
    private $isReplacementPurchase = null;

    /**
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @var \DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * Gets as currencyCode
     *
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode) if different from the ddex:CurrencyOfAccounting.
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
     * The ddex:Currency in which the ddex:SalesTransactions are made (represented by an ISO 4217 iso4217a:CurrencyCode) if different from the ddex:CurrencyOfAccounting.
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
     * A ddex:Composite containing details of the ddex:Price applicable to the ddex:SalesTransaction.
     *
     * @return \DDEX\DSR\DSR_410\PriceInformationType
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A ddex:Composite containing details of the ddex:Price applicable to the ddex:SalesTransaction.
     *
     * @param \DDEX\DSR\DSR_410\PriceInformationType $priceInformation
     * @return self
     */
    public function setPriceInformation(?\DDEX\DSR\DSR_410\PriceInformationType $priceInformation = null)
    {
        $this->priceInformation = $priceInformation;
        return $this;
    }

    /**
     * Gets as isPromotional
     *
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
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
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
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
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @return \DDEX\ddexC\PromotionalCodeType
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @param \DDEX\ddexC\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DDEX\ddexC\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Gets as dealReference
     *
     * A ddex:Composite containing the ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Deal governing the ddex:SalesTransaction.
     *
     * @return \DDEX\ddexC\DealReferenceType
     */
    public function getDealReference()
    {
        return $this->dealReference;
    }

    /**
     * Sets a new dealReference
     *
     * A ddex:Composite containing the ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Deal governing the ddex:SalesTransaction.
     *
     * @param \DDEX\ddexC\DealReferenceType $dealReference
     * @return self
     */
    public function setDealReference(?\DDEX\ddexC\DealReferenceType $dealReference = null)
    {
        $this->dealReference = $dealReference;
        return $this;
    }

    /**
     * Adds as campaignName
     *
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
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
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
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
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
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
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
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
     * The ddex:Name of an advertising campaign if the ddex:CommercialModelType is ddex:AdvertisementSupportedModel.
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
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
     *
     * @return self
     * @param \DDEX\ddexC\TaxRateType $taxRate
     */
    public function addToTaxRate(\DDEX\ddexC\TaxRateType $taxRate)
    {
        $this->taxRate[] = $taxRate;
        return $this;
    }

    /**
     * isset taxRate
     *
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
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
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
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
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
     *
     * @return \DDEX\ddexC\TaxRateType[]
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid. Within the DSR ddex:Message, only one of the two ddex:TaxRate ddex:Elements (here and in the SalesByTerritory or in the SalesByTerritory ddex:Composite) may be filled.
     *
     * @param \DDEX\ddexC\TaxRateType[] $taxRate
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
     * The ddex:RetailPrice excluding value-added tax.
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
     * The ddex:RetailPrice excluding value-added tax.
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
     * The ddex:RetailPrice excluding value-added tax, using the ddex:CurrencyOfAccounting.
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
     * The ddex:RetailPrice excluding value-added tax, using the ddex:CurrencyOfAccounting.
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
     * The ddex:RetailPrice excluding value-added tax that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:RetailPrice excluding value-added tax that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:RetailPrice (excluding value-added tax and using the ddex:CurrencyOfAccounting) that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:RetailPrice (excluding value-added tax and using the ddex:CurrencyOfAccounting) that is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return self
     * @param \DDEX\ddexC\CalculationTypeType $calculationType
     */
    public function addToCalculationType(\DDEX\ddexC\CalculationTypeType $calculationType)
    {
        $this->calculationType[] = $calculationType;
        return $this;
    }

    /**
     * isset calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
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
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
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
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return \DDEX\ddexC\CalculationTypeType[]
     */
    public function getCalculationType()
    {
        return $this->calculationType;
    }

    /**
     * Sets a new calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param \DDEX\ddexC\CalculationTypeType[] $calculationType
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
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
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
     * A ddex:Type of ddex:RoyaltyRate upon which the per unit royalty is calculated.
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
     * The ddex:Rate of royalty to be used when calculating the royalty payment. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
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
     * The ddex:Rate of royalty to be used when calculating the royalty payment. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
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
     * The ddex:Rate of royalty to be used when calculating the royalty payment, using the ddex:CurrencyOfAccounting. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
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
     * The ddex:Rate of royalty to be used when calculating the royalty payment, using the ddex:CurrencyOfAccounting. Note that when this ddex:Composite is used in a sales reporting ddex:Message for a record company, the ddex:RoyaltyRate refers to the rate due to the record company, not the royalties due to individual ddex:Artists.
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
     * The ddex:Price per unit (excluding value-added tax) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
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
     * The ddex:Price per unit (excluding value-added tax) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
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
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
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
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting) agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations.
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
     * The ddex:Price per unit (excluding value-added tax), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:Price per unit (excluding value-added tax), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * The ddex:Price per unit (excluding value-added tax and using the ddex:CurrencyOfAccounting), which is applicable to each primary ddex:Resource that is part of the currently reported ddex:Release and which is agreed between ddex:DSP and the record company as representing the notional unit price for ddex:Subscription sales, as a basis for royalty and other calculations. This field may only be used when the reported ddex:Release contains more than one primary ddex:Resource and when the ddex:MessageSender is confident that it knows the distribution of the total amount to the individual ddex:Resources (e.g. when such a distribution is stated in a contract).
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
     *
     * @return self
     * @param \DDEX\ddexC\DeductionRateType $deductionRate
     */
    public function addToDeductionRate(\DDEX\ddexC\DeductionRateType $deductionRate)
    {
        $this->deductionRate[] = $deductionRate;
        return $this;
    }

    /**
     * isset deductionRate
     *
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
     *
     * @return \DDEX\ddexC\DeductionRateType[]
     */
    public function getDeductionRate()
    {
        return $this->deductionRate;
    }

    /**
     * Sets a new deductionRate
     *
     * A ddex:Composite containing details of an applicable ddex:DeductionRate (if any).
     *
     * @param \DDEX\ddexC\DeductionRateType[] $deductionRate
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
     *
     * @return self
     * @param \DDEX\ddexC\DeductionRateType $deductionRateInCurrencyOfAccounting
     */
    public function addToDeductionRateInCurrencyOfAccounting(\DDEX\ddexC\DeductionRateType $deductionRateInCurrencyOfAccounting)
    {
        $this->deductionRateInCurrencyOfAccounting[] = $deductionRateInCurrencyOfAccounting;
        return $this;
    }

    /**
     * isset deductionRateInCurrencyOfAccounting
     *
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
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
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
     *
     * @return \DDEX\ddexC\DeductionRateType[]
     */
    public function getDeductionRateInCurrencyOfAccounting()
    {
        return $this->deductionRateInCurrencyOfAccounting;
    }

    /**
     * Sets a new deductionRateInCurrencyOfAccounting
     *
     * A ddex:Composite containing details of an applicable ddex:DeductionRate, using the ddex:CurrencyOfAccounting (if any).
     *
     * @param \DDEX\ddexC\DeductionRateType[] $deductionRateInCurrencyOfAccounting
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
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied.
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
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied.
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
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied, using the ddex:CurrencyOfAccounting.
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
     * The ddex:RoyaltyRate which applies after all calculations and deductions have been applied, using the ddex:CurrencyOfAccounting.
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
     * A ddex:Composite containing proprietary financial ddex:Elements.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\ProprietaryFinancialDataType $proprietaryFinancialData
     */
    public function addToProprietaryFinancialData(\DDEX\DSR\DSR_410\ProprietaryFinancialDataType $proprietaryFinancialData)
    {
        $this->proprietaryFinancialData[] = $proprietaryFinancialData;
        return $this;
    }

    /**
     * isset proprietaryFinancialData
     *
     * A ddex:Composite containing proprietary financial ddex:Elements.
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
     * A ddex:Composite containing proprietary financial ddex:Elements.
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
     * A ddex:Composite containing proprietary financial ddex:Elements.
     *
     * @return \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[]
     */
    public function getProprietaryFinancialData()
    {
        return $this->proprietaryFinancialData;
    }

    /**
     * Sets a new proprietaryFinancialData
     *
     * A ddex:Composite containing proprietary financial ddex:Elements.
     *
     * @param \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[] $proprietaryFinancialData
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
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\ProprietaryFinancialDataType $proprietaryFinancialDataInCurrencyOfAccounting
     */
    public function addToProprietaryFinancialDataInCurrencyOfAccounting(\DDEX\DSR\DSR_410\ProprietaryFinancialDataType $proprietaryFinancialDataInCurrencyOfAccounting)
    {
        $this->proprietaryFinancialDataInCurrencyOfAccounting[] = $proprietaryFinancialDataInCurrencyOfAccounting;
        return $this;
    }

    /**
     * isset proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
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
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
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
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
     *
     * @return \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[]
     */
    public function getProprietaryFinancialDataInCurrencyOfAccounting()
    {
        return $this->proprietaryFinancialDataInCurrencyOfAccounting;
    }

    /**
     * Sets a new proprietaryFinancialDataInCurrencyOfAccounting
     *
     * A ddex:Composite containing proprietary financial ddex:Elements, using the ddex:CurrencyOfAccounting.
     *
     * @param \DDEX\DSR\DSR_410\ProprietaryFinancialDataType[] $proprietaryFinancialDataInCurrencyOfAccounting
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
     * The extended ddex:Amount due to the ddex:Licensor of ddex:Works or ddex:Releases for the sales (The ddex:Amount reported in this ddex:Element is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
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
     * The extended ddex:Amount due to the ddex:Licensor of ddex:Works or ddex:Releases for the sales (The ddex:Amount reported in this ddex:Element is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
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
     * The ddex:AmountPayable, measured in the ddex:Currency in which it has been accounted.
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
     * The ddex:AmountPayable, measured in the ddex:Currency in which it has been accounted.
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
     * The conversion ddex:Rate applicable to the ddex:AmountPayableInCurrencyOfAccounting.
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
     * The conversion ddex:Rate applicable to the ddex:AmountPayableInCurrencyOfAccounting.
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
     * A ddex:Flag indicating whether a sale reported in a ddex:SalesTransaction is a sale where a ddex:Release was returned and a related ddex:Release is acquired by the ddex:Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed ddex:Release. If this ddex:Element is not provided, it is assumed that this is False.
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
     * A ddex:Flag indicating whether a sale reported in a ddex:SalesTransaction is a sale where a ddex:Release was returned and a related ddex:Release is acquired by the ddex:Consumer (=True) or not (=False). Examples include upgrades from a DRMed to a not-DRMed ddex:Release. If this ddex:Element is not provided, it is assumed that this is False.
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
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @return \DDEX\ddexC\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @param \DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }
}


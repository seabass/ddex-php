<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing InvoiceItemType
 *
 * A ddex:Composite containing details of an InvoiceItem.
 * XSD Type: InvoiceItem
 */
class InvoiceItemType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of the dsr:InvoiceItem.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $invoiceItemId
     */
    private $invoiceItemId = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType[] $licenseOrClaimId
     */
    private $licenseOrClaimId = [
        
    ];

    /**
     * A ddex:Composite containing details about the ddex:Period of ddex:Time covered by the Invoice.
     *
     * @var \DDEX\ddexC\PeriodType $invoicePeriod
     */
    private $invoicePeriod = null;

    /**
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @var \DDEX\DSR\DSR_410\SalesReportMessageReferenceType[] $salesReportMessageReference
     */
    private $salesReportMessageReference = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $invoiceReleaseReference
     */
    private $invoiceReleaseReference = [
        
    ];

    /**
     * The number of times a ddex:Release has been used under the terms and conditions reported in the ddex:Message.
     *
     * @var int $numberOfUsages
     */
    private $numberOfUsages = null;

    /**
     * A ddex:Composite containing details of the ddex:Price for each of the Usages of a ddex:Release.
     *
     * @var \DDEX\ddexC\PriceType $releaseUsagePrice
     */
    private $releaseUsagePrice = null;

    /**
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @var \DDEX\ddexC\TariffReferenceType $appliedTariff
     */
    private $appliedTariff = null;

    /**
     * A ddex:Composite containing the details of the ddex:RoyaltyRate that has been applied when issuing the invoice.
     *
     * @var \DDEX\ddexC\AppliedRoyaltyRateType $appliedRoyaltyRate
     */
    private $appliedRoyaltyRate = null;

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied ddex:Tariff when issuing the invoice.
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerUse
     */
    private $calculatedRoyaltyAmountPerUse = null;

    /**
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @var \DDEX\ddexC\TaxType[] $calculatedTax
     */
    private $calculatedTax = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice
     */
    private $calculatedRoyaltyAmountPerInvoice = null;

    /**
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @var \DDEX\ddexC\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @var string[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @var \DDEX\ddexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * Gets as invoiceItemId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the dsr:InvoiceItem.
     *
     * @return \DDEX\ddexC\ProprietaryIdType
     */
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * Sets a new invoiceItemId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the dsr:InvoiceItem.
     *
     * @param \DDEX\ddexC\ProprietaryIdType $invoiceItemId
     * @return self
     */
    public function setInvoiceItemId(\DDEX\ddexC\ProprietaryIdType $invoiceItemId)
    {
        $this->invoiceItemId = $invoiceItemId;
        return $this;
    }

    /**
     * Adds as licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    public function addToLicenseOrClaimId(\DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId)
    {
        $this->licenseOrClaimId[] = $licenseOrClaimId;
        return $this;
    }

    /**
     * isset licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimId($index)
    {
        return isset($this->licenseOrClaimId[$index]);
    }

    /**
     * unset licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimId($index)
    {
        unset($this->licenseOrClaimId[$index]);
    }

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType[]
     */
    public function getLicenseOrClaimId()
    {
        return $this->licenseOrClaimId;
    }

    /**
     * Sets a new licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType[] $licenseOrClaimId
     * @return self
     */
    public function setLicenseOrClaimId(array $licenseOrClaimId = null)
    {
        $this->licenseOrClaimId = $licenseOrClaimId;
        return $this;
    }

    /**
     * Gets as invoicePeriod
     *
     * A ddex:Composite containing details about the ddex:Period of ddex:Time covered by the Invoice.
     *
     * @return \DDEX\ddexC\PeriodType
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * A ddex:Composite containing details about the ddex:Period of ddex:Time covered by the Invoice.
     *
     * @param \DDEX\ddexC\PeriodType $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(\DDEX\ddexC\PeriodType $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as salesReportMessageReference
     *
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\SalesReportMessageReferenceType $salesReportMessageReference
     */
    public function addToSalesReportMessageReference(\DDEX\DSR\DSR_410\SalesReportMessageReferenceType $salesReportMessageReference)
    {
        $this->salesReportMessageReference[] = $salesReportMessageReference;
        return $this;
    }

    /**
     * isset salesReportMessageReference
     *
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesReportMessageReference($index)
    {
        return isset($this->salesReportMessageReference[$index]);
    }

    /**
     * unset salesReportMessageReference
     *
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesReportMessageReference($index)
    {
        unset($this->salesReportMessageReference[$index]);
    }

    /**
     * Gets as salesReportMessageReference
     *
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @return \DDEX\DSR\DSR_410\SalesReportMessageReferenceType[]
     */
    public function getSalesReportMessageReference()
    {
        return $this->salesReportMessageReference;
    }

    /**
     * Sets a new salesReportMessageReference
     *
     * A ddex:Composite containing a reference to the sales report ddex:Message containing usage reports for which an invoice is provided.
     *
     * @param \DDEX\DSR\DSR_410\SalesReportMessageReferenceType[] $salesReportMessageReference
     * @return self
     */
    public function setSalesReportMessageReference(array $salesReportMessageReference = null)
    {
        $this->salesReportMessageReference = $salesReportMessageReference;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\ddexC\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return \DDEX\ddexC\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param \DDEX\ddexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as invoiceReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $invoiceReleaseReference
     */
    public function addToInvoiceReleaseReference($invoiceReleaseReference)
    {
        $this->invoiceReleaseReference[] = $invoiceReleaseReference;
        return $this;
    }

    /**
     * isset invoiceReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceReleaseReference($index)
    {
        return isset($this->invoiceReleaseReference[$index]);
    }

    /**
     * unset invoiceReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceReleaseReference($index)
    {
        unset($this->invoiceReleaseReference[$index]);
    }

    /**
     * Gets as invoiceReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getInvoiceReleaseReference()
    {
        return $this->invoiceReleaseReference;
    }

    /**
     * Sets a new invoiceReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $invoiceReleaseReference
     * @return self
     */
    public function setInvoiceReleaseReference(array $invoiceReleaseReference = null)
    {
        $this->invoiceReleaseReference = $invoiceReleaseReference;
        return $this;
    }

    /**
     * Gets as numberOfUsages
     *
     * The number of times a ddex:Release has been used under the terms and conditions reported in the ddex:Message.
     *
     * @return int
     */
    public function getNumberOfUsages()
    {
        return $this->numberOfUsages;
    }

    /**
     * Sets a new numberOfUsages
     *
     * The number of times a ddex:Release has been used under the terms and conditions reported in the ddex:Message.
     *
     * @param int $numberOfUsages
     * @return self
     */
    public function setNumberOfUsages($numberOfUsages)
    {
        $this->numberOfUsages = $numberOfUsages;
        return $this;
    }

    /**
     * Gets as releaseUsagePrice
     *
     * A ddex:Composite containing details of the ddex:Price for each of the Usages of a ddex:Release.
     *
     * @return \DDEX\ddexC\PriceType
     */
    public function getReleaseUsagePrice()
    {
        return $this->releaseUsagePrice;
    }

    /**
     * Sets a new releaseUsagePrice
     *
     * A ddex:Composite containing details of the ddex:Price for each of the Usages of a ddex:Release.
     *
     * @param \DDEX\ddexC\PriceType $releaseUsagePrice
     * @return self
     */
    public function setReleaseUsagePrice(\DDEX\ddexC\PriceType $releaseUsagePrice)
    {
        $this->releaseUsagePrice = $releaseUsagePrice;
        return $this;
    }

    /**
     * Gets as appliedTariff
     *
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @return \DDEX\ddexC\TariffReferenceType
     */
    public function getAppliedTariff()
    {
        return $this->appliedTariff;
    }

    /**
     * Sets a new appliedTariff
     *
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description).
     *
     * @param \DDEX\ddexC\TariffReferenceType $appliedTariff
     * @return self
     */
    public function setAppliedTariff(?\DDEX\ddexC\TariffReferenceType $appliedTariff = null)
    {
        $this->appliedTariff = $appliedTariff;
        return $this;
    }

    /**
     * Gets as appliedRoyaltyRate
     *
     * A ddex:Composite containing the details of the ddex:RoyaltyRate that has been applied when issuing the invoice.
     *
     * @return \DDEX\ddexC\AppliedRoyaltyRateType
     */
    public function getAppliedRoyaltyRate()
    {
        return $this->appliedRoyaltyRate;
    }

    /**
     * Sets a new appliedRoyaltyRate
     *
     * A ddex:Composite containing the details of the ddex:RoyaltyRate that has been applied when issuing the invoice.
     *
     * @param \DDEX\ddexC\AppliedRoyaltyRateType $appliedRoyaltyRate
     * @return self
     */
    public function setAppliedRoyaltyRate(\DDEX\ddexC\AppliedRoyaltyRateType $appliedRoyaltyRate)
    {
        $this->appliedRoyaltyRate = $appliedRoyaltyRate;
        return $this;
    }

    /**
     * Gets as calculatedRoyaltyAmountPerUse
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied ddex:Tariff when issuing the invoice.
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getCalculatedRoyaltyAmountPerUse()
    {
        return $this->calculatedRoyaltyAmountPerUse;
    }

    /**
     * Sets a new calculatedRoyaltyAmountPerUse
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied ddex:Tariff when issuing the invoice.
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerUse
     * @return self
     */
    public function setCalculatedRoyaltyAmountPerUse(\DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerUse)
    {
        $this->calculatedRoyaltyAmountPerUse = $calculatedRoyaltyAmountPerUse;
        return $this;
    }

    /**
     * Adds as calculatedTax
     *
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @return self
     * @param \DDEX\ddexC\TaxType $calculatedTax
     */
    public function addToCalculatedTax(\DDEX\ddexC\TaxType $calculatedTax)
    {
        $this->calculatedTax[] = $calculatedTax;
        return $this;
    }

    /**
     * isset calculatedTax
     *
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculatedTax($index)
    {
        return isset($this->calculatedTax[$index]);
    }

    /**
     * unset calculatedTax
     *
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculatedTax($index)
    {
        unset($this->calculatedTax[$index]);
    }

    /**
     * Gets as calculatedTax
     *
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @return \DDEX\ddexC\TaxType[]
     */
    public function getCalculatedTax()
    {
        return $this->calculatedTax;
    }

    /**
     * Sets a new calculatedTax
     *
     * A ddex:Composite containing details of the ddex:Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @param \DDEX\ddexC\TaxType[] $calculatedTax
     * @return self
     */
    public function setCalculatedTax(array $calculatedTax = null)
    {
        $this->calculatedTax = $calculatedTax;
        return $this;
    }

    /**
     * Gets as calculatedRoyaltyAmountPerInvoice
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getCalculatedRoyaltyAmountPerInvoice()
    {
        return $this->calculatedRoyaltyAmountPerInvoice;
    }

    /**
     * Sets a new calculatedRoyaltyAmountPerInvoice
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice
     * @return self
     */
    public function setCalculatedRoyaltyAmountPerInvoice(\DDEX\ddexC\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice)
    {
        $this->calculatedRoyaltyAmountPerInvoice = $calculatedRoyaltyAmountPerInvoice;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @return self
     * @param \DDEX\ddexC\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\ddexC\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @return \DDEX\ddexC\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A ddex:Composite containing details of the RightsType for a given Invoice item.
     *
     * @param \DDEX\ddexC\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @return self
     * @param string $releaseType
     */
    public function addToReleaseType($releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @return string[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * The Type of the Release according to its content, Duration and/or number of components.
     *
     * @param string $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return self
     * @param \DDEX\ddexC\UseTypeType $useType
     */
    public function addToUseType(\DDEX\ddexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return \DDEX\ddexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param \DDEX\ddexC\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }
}


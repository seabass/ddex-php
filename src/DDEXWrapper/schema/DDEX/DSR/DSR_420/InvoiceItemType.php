<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing InvoiceItemType
 *
 * A Composite containing details of an InvoiceItem.
 * XSD Type: InvoiceItem
 */
class InvoiceItemType
{
    /**
     * A Composite containing details of an Identifier of the InvoiceItem.
     *
     * @var \DDEX\DSR\DSR_420\ProprietaryIdType $invoiceItemId
     */
    private $invoiceItemId = null;

    /**
     * A Composite containing details of an Identifier of the License or Claim.
     *
     * @var \DDEX\DSR\DSR_420\RightsAgreementIdType[] $licenseOrClaimId
     */
    private $licenseOrClaimId = [
        
    ];

    /**
     * A Composite containing details about the Period of Time covered by the Invoice.
     *
     * @var \DDEX\DSR\DSR_420\PeriodType $invoicePeriod
     */
    private $invoicePeriod = null;

    /**
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
     *
     * @var \DDEX\DSR\DSR_420\SalesReportMessageReferenceType[] $salesReportMessageReference
     */
    private $salesReportMessageReference = [
        
    ];

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @var \DDEX\DSR\DSR_420\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $invoiceReleaseReference
     */
    private $invoiceReleaseReference = [
        
    ];

    /**
     * The number of times a Release has been used under the terms and conditions reported in the Message.
     *
     * @var int $numberOfUsages
     */
    private $numberOfUsages = null;

    /**
     * A Composite containing details of the Price for each of the Usages of a Release.
     *
     * @var \DDEX\DSR\DSR_420\PriceType $releaseUsagePrice
     */
    private $releaseUsagePrice = null;

    /**
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description).
     *
     * @var \DDEX\DSR\DSR_420\TariffReferenceType $appliedTariff
     */
    private $appliedTariff = null;

    /**
     * A Composite containing the details of the RoyaltyRate that has been applied when issuing the invoice.
     *
     * @var \DDEX\DSR\DSR_420\AppliedRoyaltyRateType $appliedRoyaltyRate
     */
    private $appliedRoyaltyRate = null;

    /**
     * A Composite containing details of the RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied Tariff when issuing the invoice.
     *
     * @var \DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerUse
     */
    private $calculatedRoyaltyAmountPerUse = null;

    /**
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @var \DDEX\DSR\DSR_420\TaxType[] $calculatedTax
     */
    private $calculatedTax = [
        
    ];

    /**
     * A Composite containing details of the RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @var \DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice
     */
    private $calculatedRoyaltyAmountPerInvoice = null;

    /**
     * A Composite containing details of the RightsType for a given Invoice item.
     *
     * @var \DDEX\DSR\DSR_420\RightsTypeType[] $rightsType
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @var \DDEX\DSR\DSR_420\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * Gets as invoiceItemId
     *
     * A Composite containing details of an Identifier of the InvoiceItem.
     *
     * @return \DDEX\DSR\DSR_420\ProprietaryIdType
     */
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * Sets a new invoiceItemId
     *
     * A Composite containing details of an Identifier of the InvoiceItem.
     *
     * @param \DDEX\DSR\DSR_420\ProprietaryIdType $invoiceItemId
     * @return self
     */
    public function setInvoiceItemId(\DDEX\DSR\DSR_420\ProprietaryIdType $invoiceItemId)
    {
        $this->invoiceItemId = $invoiceItemId;
        return $this;
    }

    /**
     * Adds as licenseOrClaimId
     *
     * A Composite containing details of an Identifier of the License or Claim.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\RightsAgreementIdType $licenseOrClaimId
     */
    public function addToLicenseOrClaimId(\DDEX\DSR\DSR_420\RightsAgreementIdType $licenseOrClaimId)
    {
        $this->licenseOrClaimId[] = $licenseOrClaimId;
        return $this;
    }

    /**
     * isset licenseOrClaimId
     *
     * A Composite containing details of an Identifier of the License or Claim.
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
     * A Composite containing details of an Identifier of the License or Claim.
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
     * A Composite containing details of an Identifier of the License or Claim.
     *
     * @return \DDEX\DSR\DSR_420\RightsAgreementIdType[]
     */
    public function getLicenseOrClaimId()
    {
        return $this->licenseOrClaimId;
    }

    /**
     * Sets a new licenseOrClaimId
     *
     * A Composite containing details of an Identifier of the License or Claim.
     *
     * @param \DDEX\DSR\DSR_420\RightsAgreementIdType[] $licenseOrClaimId
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
     * A Composite containing details about the Period of Time covered by the Invoice.
     *
     * @return \DDEX\DSR\DSR_420\PeriodType
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * A Composite containing details about the Period of Time covered by the Invoice.
     *
     * @param \DDEX\DSR\DSR_420\PeriodType $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(\DDEX\DSR\DSR_420\PeriodType $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as salesReportMessageReference
     *
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\SalesReportMessageReferenceType $salesReportMessageReference
     */
    public function addToSalesReportMessageReference(\DDEX\DSR\DSR_420\SalesReportMessageReferenceType $salesReportMessageReference)
    {
        $this->salesReportMessageReference[] = $salesReportMessageReference;
        return $this;
    }

    /**
     * isset salesReportMessageReference
     *
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
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
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
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
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
     *
     * @return \DDEX\DSR\DSR_420\SalesReportMessageReferenceType[]
     */
    public function getSalesReportMessageReference()
    {
        return $this->salesReportMessageReference;
    }

    /**
     * Sets a new salesReportMessageReference
     *
     * A Composite containing a reference to the sales report Message containing usage reports for which an invoice is provided.
     *
     * @param \DDEX\DSR\DSR_420\SalesReportMessageReferenceType[] $salesReportMessageReference
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
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\DSR\DSR_420\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
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
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
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
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @return \DDEX\DSR\DSR_420\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @param \DDEX\DSR\DSR_420\ReleaseIdType[] $releaseId
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * The number of times a Release has been used under the terms and conditions reported in the Message.
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
     * The number of times a Release has been used under the terms and conditions reported in the Message.
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
     * A Composite containing details of the Price for each of the Usages of a Release.
     *
     * @return \DDEX\DSR\DSR_420\PriceType
     */
    public function getReleaseUsagePrice()
    {
        return $this->releaseUsagePrice;
    }

    /**
     * Sets a new releaseUsagePrice
     *
     * A Composite containing details of the Price for each of the Usages of a Release.
     *
     * @param \DDEX\DSR\DSR_420\PriceType $releaseUsagePrice
     * @return self
     */
    public function setReleaseUsagePrice(\DDEX\DSR\DSR_420\PriceType $releaseUsagePrice)
    {
        $this->releaseUsagePrice = $releaseUsagePrice;
        return $this;
    }

    /**
     * Gets as appliedTariff
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description).
     *
     * @return \DDEX\DSR\DSR_420\TariffReferenceType
     */
    public function getAppliedTariff()
    {
        return $this->appliedTariff;
    }

    /**
     * Sets a new appliedTariff
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description).
     *
     * @param \DDEX\DSR\DSR_420\TariffReferenceType $appliedTariff
     * @return self
     */
    public function setAppliedTariff(?\DDEX\DSR\DSR_420\TariffReferenceType $appliedTariff = null)
    {
        $this->appliedTariff = $appliedTariff;
        return $this;
    }

    /**
     * Gets as appliedRoyaltyRate
     *
     * A Composite containing the details of the RoyaltyRate that has been applied when issuing the invoice.
     *
     * @return \DDEX\DSR\DSR_420\AppliedRoyaltyRateType
     */
    public function getAppliedRoyaltyRate()
    {
        return $this->appliedRoyaltyRate;
    }

    /**
     * Sets a new appliedRoyaltyRate
     *
     * A Composite containing the details of the RoyaltyRate that has been applied when issuing the invoice.
     *
     * @param \DDEX\DSR\DSR_420\AppliedRoyaltyRateType $appliedRoyaltyRate
     * @return self
     */
    public function setAppliedRoyaltyRate(\DDEX\DSR\DSR_420\AppliedRoyaltyRateType $appliedRoyaltyRate)
    {
        $this->appliedRoyaltyRate = $appliedRoyaltyRate;
        return $this;
    }

    /**
     * Gets as calculatedRoyaltyAmountPerUse
     *
     * A Composite containing details of the RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied Tariff when issuing the invoice.
     *
     * @return \DDEX\DSR\DSR_420\RoyaltyAmountType
     */
    public function getCalculatedRoyaltyAmountPerUse()
    {
        return $this->calculatedRoyaltyAmountPerUse;
    }

    /**
     * Sets a new calculatedRoyaltyAmountPerUse
     *
     * A Composite containing details of the RoyaltyAmount that has been calculated to be due for the given Usage and ReleaseUsagePrice, based on the applied Tariff when issuing the invoice.
     *
     * @param \DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerUse
     * @return self
     */
    public function setCalculatedRoyaltyAmountPerUse(\DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerUse)
    {
        $this->calculatedRoyaltyAmountPerUse = $calculatedRoyaltyAmountPerUse;
        return $this;
    }

    /**
     * Adds as calculatedTax
     *
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TaxType $calculatedTax
     */
    public function addToCalculatedTax(\DDEX\DSR\DSR_420\TaxType $calculatedTax)
    {
        $this->calculatedTax[] = $calculatedTax;
        return $this;
    }

    /**
     * isset calculatedTax
     *
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
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
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
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
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @return \DDEX\DSR\DSR_420\TaxType[]
     */
    public function getCalculatedTax()
    {
        return $this->calculatedTax;
    }

    /**
     * Sets a new calculatedTax
     *
     * A Composite containing details of the Tax applicable to the CalculatedRoyaltyAmountPerUse.
     *
     * @param \DDEX\DSR\DSR_420\TaxType[] $calculatedTax
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
     * A Composite containing details of the RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @return \DDEX\DSR\DSR_420\RoyaltyAmountType
     */
    public function getCalculatedRoyaltyAmountPerInvoice()
    {
        return $this->calculatedRoyaltyAmountPerInvoice;
    }

    /**
     * Sets a new calculatedRoyaltyAmountPerInvoice
     *
     * A Composite containing details of the RoyaltyAmount that has been calculated for a given Invoice item.
     *
     * @param \DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice
     * @return self
     */
    public function setCalculatedRoyaltyAmountPerInvoice(\DDEX\DSR\DSR_420\RoyaltyAmountType $calculatedRoyaltyAmountPerInvoice)
    {
        $this->calculatedRoyaltyAmountPerInvoice = $calculatedRoyaltyAmountPerInvoice;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Composite containing details of the RightsType for a given Invoice item.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\DSR\DSR_420\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Composite containing details of the RightsType for a given Invoice item.
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
     * A Composite containing details of the RightsType for a given Invoice item.
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
     * A Composite containing details of the RightsType for a given Invoice item.
     *
     * @return \DDEX\DSR\DSR_420\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Composite containing details of the RightsType for a given Invoice item.
     *
     * @param \DDEX\DSR\DSR_420\RightsTypeType[] $rightsType
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\UseTypeType $useType
     */
    public function addToUseType(\DDEX\DSR\DSR_420\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return \DDEX\DSR\DSR_420\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @param \DDEX\DSR\DSR_420\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }
}


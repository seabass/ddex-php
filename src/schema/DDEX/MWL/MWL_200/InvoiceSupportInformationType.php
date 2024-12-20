<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing InvoiceSupportInformationType
 *
 * A ddex:Composite containing details to support invoicing.
 * XSD Type: InvoiceSupportInformation
 */
class InvoiceSupportInformationType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the InvoiceSupportInformation as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $invoiceSupportInformationIdentifier
     */
    private $invoiceSupportInformationIdentifier = [
        
    ];

    /**
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @var string[] $invoiceSupportInformationLicenseOrClaimReference
     */
    private $invoiceSupportInformationLicenseOrClaimReference = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType[] $licenseOrClaimId
     */
    private $licenseOrClaimId = [
        
    ];

    /**
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the InvoiceSupportInformation is provided.
     *
     * @var \DDEX\ddexC\PeriodType $invoicePeriod
     */
    private $invoicePeriod = null;

    /**
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @var \DDEX\ddexC\AnnotationType[] $salesReportReference
     */
    private $salesReportReference = [
        
    ];

    /**
     * The number of times a ddex:Release has been used under the terms and conditions reported in the InvoiceSupportInformation.
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
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) in respect to which the InvoiceSupportInformation is provided.
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
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the InvoiceSupportInformation as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the InvoiceSupportInformation as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as invoiceSupportInformationIdentifier
     *
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @return self
     * @param \DDEX\ddexC\ProprietaryIdType $invoiceSupportInformationIdentifier
     */
    public function addToInvoiceSupportInformationIdentifier(\DDEX\ddexC\ProprietaryIdType $invoiceSupportInformationIdentifier)
    {
        $this->invoiceSupportInformationIdentifier[] = $invoiceSupportInformationIdentifier;
        return $this;
    }

    /**
     * isset invoiceSupportInformationIdentifier
     *
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceSupportInformationIdentifier($index)
    {
        return isset($this->invoiceSupportInformationIdentifier[$index]);
    }

    /**
     * unset invoiceSupportInformationIdentifier
     *
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceSupportInformationIdentifier($index)
    {
        unset($this->invoiceSupportInformationIdentifier[$index]);
    }

    /**
     * Gets as invoiceSupportInformationIdentifier
     *
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @return \DDEX\ddexC\ProprietaryIdType[]
     */
    public function getInvoiceSupportInformationIdentifier()
    {
        return $this->invoiceSupportInformationIdentifier;
    }

    /**
     * Sets a new invoiceSupportInformationIdentifier
     *
     * A ddex:Composite containing details of an ddex:Identifier of the InvoiceSupportInformation.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $invoiceSupportInformationIdentifier
     * @return self
     */
    public function setInvoiceSupportInformationIdentifier(array $invoiceSupportInformationIdentifier = null)
    {
        $this->invoiceSupportInformationIdentifier = $invoiceSupportInformationIdentifier;
        return $this;
    }

    /**
     * Adds as invoiceSupportInformationLicenseOrClaimReference
     *
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @return self
     * @param string $invoiceSupportInformationLicenseOrClaimReference
     */
    public function addToInvoiceSupportInformationLicenseOrClaimReference($invoiceSupportInformationLicenseOrClaimReference)
    {
        $this->invoiceSupportInformationLicenseOrClaimReference[] = $invoiceSupportInformationLicenseOrClaimReference;
        return $this;
    }

    /**
     * isset invoiceSupportInformationLicenseOrClaimReference
     *
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceSupportInformationLicenseOrClaimReference($index)
    {
        return isset($this->invoiceSupportInformationLicenseOrClaimReference[$index]);
    }

    /**
     * unset invoiceSupportInformationLicenseOrClaimReference
     *
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceSupportInformationLicenseOrClaimReference($index)
    {
        unset($this->invoiceSupportInformationLicenseOrClaimReference[$index]);
    }

    /**
     * Gets as invoiceSupportInformationLicenseOrClaimReference
     *
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @return string[]
     */
    public function getInvoiceSupportInformationLicenseOrClaimReference()
    {
        return $this->invoiceSupportInformationLicenseOrClaimReference;
    }

    /**
     * Sets a new invoiceSupportInformationLicenseOrClaimReference
     *
     * A ddex:Reference to a ddex:License or ddex:Claim (specific to the ddex:Message) which is contained within the specific InvoiceSupportInformation. This is a ddex:LocalLicenseOrClaimAnchorReference starting with the letter L. Either this ddex:Element or the LicenseOrClaimId has to be provided.
     *
     * @param string $invoiceSupportInformationLicenseOrClaimReference
     * @return self
     */
    public function setInvoiceSupportInformationLicenseOrClaimReference(array $invoiceSupportInformationLicenseOrClaimReference = null)
    {
        $this->invoiceSupportInformationLicenseOrClaimReference = $invoiceSupportInformationLicenseOrClaimReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License or ddex:Claim for the ddex:MusicalWork in respect of which the InvoiceSupportInformation is provided. Either this ddex:Element or the ddex:InvoiceSupportInformationLicenseOrClaimReference has to be provided.
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
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the InvoiceSupportInformation is provided.
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
     * A ddex:Composite containing details about the ddex:Period of ddex:Time for which the InvoiceSupportInformation is provided.
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
     * Adds as salesReportReference
     *
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @return self
     * @param \DDEX\ddexC\AnnotationType $salesReportReference
     */
    public function addToSalesReportReference(\DDEX\ddexC\AnnotationType $salesReportReference)
    {
        $this->salesReportReference[] = $salesReportReference;
        return $this;
    }

    /**
     * isset salesReportReference
     *
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesReportReference($index)
    {
        return isset($this->salesReportReference[$index]);
    }

    /**
     * unset salesReportReference
     *
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesReportReference($index)
    {
        unset($this->salesReportReference[$index]);
    }

    /**
     * Gets as salesReportReference
     *
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @return \DDEX\ddexC\AnnotationType[]
     */
    public function getSalesReportReference()
    {
        return $this->salesReportReference;
    }

    /**
     * Sets a new salesReportReference
     *
     * A ddex:Composite containing a reference to the sales report that was used as a basis for issuing the invoice. This may be used to point to the SalesReport message or to an individual line within such a SalesReport.
     *
     * @param \DDEX\ddexC\AnnotationType[] $salesReportReference
     * @return self
     */
    public function setSalesReportReference(array $salesReportReference = null)
    {
        $this->salesReportReference = $salesReportReference;
        return $this;
    }

    /**
     * Gets as numberOfUsages
     *
     * The number of times a ddex:Release has been used under the terms and conditions reported in the InvoiceSupportInformation.
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
     * The number of times a ddex:Release has been used under the terms and conditions reported in the InvoiceSupportInformation.
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
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) in respect to which the InvoiceSupportInformation is provided.
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
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) in respect to which the InvoiceSupportInformation is provided.
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
}


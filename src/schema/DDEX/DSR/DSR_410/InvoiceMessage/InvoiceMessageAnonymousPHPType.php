<?php

namespace DDEX\DSR\DSR_410\InvoiceMessage;

/**
 * Class representing InvoiceMessageAnonymousPHPType
 */
class InvoiceMessageAnonymousPHPType
{
    /**
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the dsr:InvoiceMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the Invoice.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $invoiceId
     */
    private $invoiceId = null;

    /**
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @var \DDEX\DSR\DSR_410\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * The ddex:Currency of the Invoice (represented by an ISO 4217 iso4217a:CurrencyCode).
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @var \DDEX\DSR\DSR_410\InvoiceItemType[] $invoiceItem
     */
    private $invoiceItem = [
        
    ];

    /**
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @var \DDEX\DSR\DSR_410\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     */
    private $totalRoyaltyAmount = [
        
    ];

    /**
     * Gets as messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getMessageSchemaVersionId()
    {
        return $this->messageSchemaVersionId;
    }

    /**
     * Sets a new messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $messageSchemaVersionId
     * @return self
     */
    public function setMessageSchemaVersionId($messageSchemaVersionId)
    {
        $this->messageSchemaVersionId = $messageSchemaVersionId;
        return $this;
    }

    /**
     * Gets as businessProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getBusinessProfileVersionId()
    {
        return $this->businessProfileVersionId;
    }

    /**
     * Sets a new businessProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $businessProfileVersionId
     * @return self
     */
    public function setBusinessProfileVersionId($businessProfileVersionId)
    {
        $this->businessProfileVersionId = $businessProfileVersionId;
        return $this;
    }

    /**
     * Gets as releaseProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getReleaseProfileVersionId()
    {
        return $this->releaseProfileVersionId;
    }

    /**
     * Sets a new releaseProfileVersionId
     *
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $releaseProfileVersionId
     * @return self
     */
    public function setReleaseProfileVersionId($releaseProfileVersionId)
    {
        $this->releaseProfileVersionId = $releaseProfileVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as messageHeader
     *
     * The MessageHeader for the dsr:InvoiceMessage.
     *
     * @return \DDEX\ddexC\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the dsr:InvoiceMessage.
     *
     * @param \DDEX\ddexC\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ddexC\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as invoiceId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the Invoice.
     *
     * @return \DDEX\ddexC\ProprietaryIdType
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Sets a new invoiceId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the Invoice.
     *
     * @param \DDEX\ddexC\ProprietaryIdType $invoiceId
     * @return self
     */
    public function setInvoiceId(\DDEX\ddexC\ProprietaryIdType $invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * Adds as containedReleaseSummary
     *
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\ContainedReleaseSummaryType $containedReleaseSummary
     */
    public function addToContainedReleaseSummary(\DDEX\DSR\DSR_410\ContainedReleaseSummaryType $containedReleaseSummary)
    {
        $this->containedReleaseSummary[] = $containedReleaseSummary;
        return $this;
    }

    /**
     * isset containedReleaseSummary
     *
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedReleaseSummary($index)
    {
        return isset($this->containedReleaseSummary[$index]);
    }

    /**
     * unset containedReleaseSummary
     *
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedReleaseSummary($index)
    {
        unset($this->containedReleaseSummary[$index]);
    }

    /**
     * Gets as containedReleaseSummary
     *
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @return \DDEX\DSR\DSR_410\ContainedReleaseSummaryType[]
     */
    public function getContainedReleaseSummary()
    {
        return $this->containedReleaseSummary;
    }

    /**
     * Sets a new containedReleaseSummary
     *
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @param \DDEX\DSR\DSR_410\ContainedReleaseSummaryType[] $containedReleaseSummary
     * @return self
     */
    public function setContainedReleaseSummary(array $containedReleaseSummary = null)
    {
        $this->containedReleaseSummary = $containedReleaseSummary;
        return $this;
    }

    /**
     * Gets as currency
     *
     * The ddex:Currency of the Invoice (represented by an ISO 4217 iso4217a:CurrencyCode).
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The ddex:Currency of the Invoice (represented by an ISO 4217 iso4217a:CurrencyCode).
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Adds as invoiceItem
     *
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\InvoiceItemType $invoiceItem
     */
    public function addToInvoiceItem(\DDEX\DSR\DSR_410\InvoiceItemType $invoiceItem)
    {
        $this->invoiceItem[] = $invoiceItem;
        return $this;
    }

    /**
     * isset invoiceItem
     *
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceItem($index)
    {
        return isset($this->invoiceItem[$index]);
    }

    /**
     * unset invoiceItem
     *
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceItem($index)
    {
        unset($this->invoiceItem[$index]);
    }

    /**
     * Gets as invoiceItem
     *
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @return \DDEX\DSR\DSR_410\InvoiceItemType[]
     */
    public function getInvoiceItem()
    {
        return $this->invoiceItem;
    }

    /**
     * Sets a new invoiceItem
     *
     * A ddex:Composite containing details of an InvoiceItem.
     *
     * @param \DDEX\DSR\DSR_410\InvoiceItemType[] $invoiceItem
     * @return self
     */
    public function setInvoiceItem(array $invoiceItem)
    {
        $this->invoiceItem = $invoiceItem;
        return $this;
    }

    /**
     * Adds as totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\TotalRoyaltyAmountType $totalRoyaltyAmount
     */
    public function addToTotalRoyaltyAmount(\DDEX\DSR\DSR_410\TotalRoyaltyAmountType $totalRoyaltyAmount)
    {
        $this->totalRoyaltyAmount[] = $totalRoyaltyAmount;
        return $this;
    }

    /**
     * isset totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalRoyaltyAmount($index)
    {
        return isset($this->totalRoyaltyAmount[$index]);
    }

    /**
     * unset totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalRoyaltyAmount($index)
    {
        unset($this->totalRoyaltyAmount[$index]);
    }

    /**
     * Gets as totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @return \DDEX\DSR\DSR_410\TotalRoyaltyAmountType[]
     */
    public function getTotalRoyaltyAmount()
    {
        return $this->totalRoyaltyAmount;
    }

    /**
     * Sets a new totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param \DDEX\DSR\DSR_410\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     * @return self
     */
    public function setTotalRoyaltyAmount(array $totalRoyaltyAmount = null)
    {
        $this->totalRoyaltyAmount = $totalRoyaltyAmount;
        return $this;
    }
}


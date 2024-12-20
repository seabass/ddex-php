<?php

namespace DDEX\DSR\DSR_43D1\InvoiceMessage;

/**
 * Class representing InvoiceMessageAnonymousPHPType
 */
class InvoiceMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The Language and script for the Elements of the SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the InvoiceMessage.
     *
     * @var \DDEX\DSR\DSR_43D1\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of an Identifier of the Invoice.
     *
     * @var \DDEX\DSR\DSR_43D1\ProprietaryIdType $invoiceId
     */
    private $invoiceId = null;

    /**
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @var \DDEX\DSR\DSR_43D1\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * The Currency of the Invoice (represented by an ISO 4217 CurrencyCode).
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * A Composite containing details of an InvoiceItem.
     *
     * @var \DDEX\DSR\DSR_43D1\InvoiceItemType[] $invoiceItem
     */
    private $invoiceItem = [
        
    ];

    /**
     * A Composite containing details of a total RoyaltyAmount.
     *
     * @var \DDEX\DSR\DSR_43D1\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     */
    private $totalRoyaltyAmount = [
        
    ];

    /**
     * Gets as messageSchemaVersionId
     *
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesReportToRecordCompanyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the InvoiceMessage.
     *
     * @return \DDEX\DSR\DSR_43D1\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the InvoiceMessage.
     *
     * @param \DDEX\DSR\DSR_43D1\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\DSR\DSR_43D1\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as invoiceId
     *
     * A Composite containing details of an Identifier of the Invoice.
     *
     * @return \DDEX\DSR\DSR_43D1\ProprietaryIdType
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Sets a new invoiceId
     *
     * A Composite containing details of an Identifier of the Invoice.
     *
     * @param \DDEX\DSR\DSR_43D1\ProprietaryIdType $invoiceId
     * @return self
     */
    public function setInvoiceId(\DDEX\DSR\DSR_43D1\ProprietaryIdType $invoiceId)
    {
        $this->invoiceId = $invoiceId;
        return $this;
    }

    /**
     * Adds as containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\ContainedReleaseSummaryType $containedReleaseSummary
     */
    public function addToContainedReleaseSummary(\DDEX\DSR\DSR_43D1\ContainedReleaseSummaryType $containedReleaseSummary)
    {
        $this->containedReleaseSummary[] = $containedReleaseSummary;
        return $this;
    }

    /**
     * isset containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
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
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
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
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @return \DDEX\DSR\DSR_43D1\ContainedReleaseSummaryType[]
     */
    public function getContainedReleaseSummary()
    {
        return $this->containedReleaseSummary;
    }

    /**
     * Sets a new containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the dsrs:InvoiceMessage.
     *
     * @param \DDEX\DSR\DSR_43D1\ContainedReleaseSummaryType[] $containedReleaseSummary
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
     * The Currency of the Invoice (represented by an ISO 4217 CurrencyCode).
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
     * The Currency of the Invoice (represented by an ISO 4217 CurrencyCode).
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
     * A Composite containing details of an InvoiceItem.
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\InvoiceItemType $invoiceItem
     */
    public function addToInvoiceItem(\DDEX\DSR\DSR_43D1\InvoiceItemType $invoiceItem)
    {
        $this->invoiceItem[] = $invoiceItem;
        return $this;
    }

    /**
     * isset invoiceItem
     *
     * A Composite containing details of an InvoiceItem.
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
     * A Composite containing details of an InvoiceItem.
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
     * A Composite containing details of an InvoiceItem.
     *
     * @return \DDEX\DSR\DSR_43D1\InvoiceItemType[]
     */
    public function getInvoiceItem()
    {
        return $this->invoiceItem;
    }

    /**
     * Sets a new invoiceItem
     *
     * A Composite containing details of an InvoiceItem.
     *
     * @param \DDEX\DSR\DSR_43D1\InvoiceItemType[] $invoiceItem
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
     * A Composite containing details of a total RoyaltyAmount.
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\TotalRoyaltyAmountType $totalRoyaltyAmount
     */
    public function addToTotalRoyaltyAmount(\DDEX\DSR\DSR_43D1\TotalRoyaltyAmountType $totalRoyaltyAmount)
    {
        $this->totalRoyaltyAmount[] = $totalRoyaltyAmount;
        return $this;
    }

    /**
     * isset totalRoyaltyAmount
     *
     * A Composite containing details of a total RoyaltyAmount.
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
     * A Composite containing details of a total RoyaltyAmount.
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
     * A Composite containing details of a total RoyaltyAmount.
     *
     * @return \DDEX\DSR\DSR_43D1\TotalRoyaltyAmountType[]
     */
    public function getTotalRoyaltyAmount()
    {
        return $this->totalRoyaltyAmount;
    }

    /**
     * Sets a new totalRoyaltyAmount
     *
     * A Composite containing details of a total RoyaltyAmount.
     *
     * @param \DDEX\DSR\DSR_43D1\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     * @return self
     */
    public function setTotalRoyaltyAmount(array $totalRoyaltyAmount = null)
    {
        $this->totalRoyaltyAmount = $totalRoyaltyAmount;
        return $this;
    }
}


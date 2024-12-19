<?php

namespace DDEX\DSR\DSR_420\SalesReportToRecordCompanyMessage;

/**
 * Class representing SalesReportToRecordCompanyMessageAnonymousPHPType
 */
class SalesReportToRecordCompanyMessageAnonymousPHPType
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
     * The MessageHeader for the SalesReportToRecordCompanyMessage.
     *
     * @var \DDEX\DSR\DSR_420\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the reporting Period covered by the SalesReportToRecordCompanyMessage.
     *
     * @var \DDEX\DSR\DSR_420\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A textual commentary about the method for settlement of payments between MessageSender and MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @var \DDEX\DSR\DSR_420\RemittanceAdviceType $remittanceAdvice
     */
    private $remittanceAdvice = null;

    /**
     * A Type of revenue to which the content of the Message relates.
     *
     * @var string $messageContentRevenueType
     */
    private $messageContentRevenueType = null;

    /**
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @var string[] $rightsCoverage
     */
    private $rightsCoverage = [
        
    ];

    /**
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
     *
     * @var \DDEX\DSR\DSR_420\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @var \DDEX\DSR\DSR_420\SalesReportToRecordCompanyType[] $salesReport
     */
    private $salesReport = [
        
    ];

    /**
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @var \DDEX\DSR\DSR_420\TotalSalesByReleaseTypeType[] $totalSalesByReleaseType
     */
    private $totalSalesByReleaseType = [
        
    ];

    /**
     * A Composite containing details of the RoyaltyAmount due. This is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property Rights controlled by the MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_420\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToRecordCompanyMessage. SalesTransaction records are SalesToRecordCompanyByTerritory Composites.
     *
     * @var int $numberOfSalesTransactionRecords
     */
    private $numberOfSalesTransactionRecords = null;

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
     * The MessageHeader for the SalesReportToRecordCompanyMessage.
     *
     * @return \DDEX\DSR\DSR_420\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the SalesReportToRecordCompanyMessage.
     *
     * @param \DDEX\DSR\DSR_420\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\DSR\DSR_420\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of the reporting Period covered by the SalesReportToRecordCompanyMessage.
     *
     * @return \DDEX\DSR\DSR_420\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of the reporting Period covered by the SalesReportToRecordCompanyMessage.
     *
     * @param \DDEX\DSR\DSR_420\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(\DDEX\DSR\DSR_420\MessageNotificationPeriodType $messageNotificationPeriod)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Gets as remittanceAdvice
     *
     * A textual commentary about the method for settlement of payments between MessageSender and MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @return \DDEX\DSR\DSR_420\RemittanceAdviceType
     */
    public function getRemittanceAdvice()
    {
        return $this->remittanceAdvice;
    }

    /**
     * Sets a new remittanceAdvice
     *
     * A textual commentary about the method for settlement of payments between MessageSender and MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @param \DDEX\DSR\DSR_420\RemittanceAdviceType $remittanceAdvice
     * @return self
     */
    public function setRemittanceAdvice(?\DDEX\DSR\DSR_420\RemittanceAdviceType $remittanceAdvice = null)
    {
        $this->remittanceAdvice = $remittanceAdvice;
        return $this;
    }

    /**
     * Gets as messageContentRevenueType
     *
     * A Type of revenue to which the content of the Message relates.
     *
     * @return string
     */
    public function getMessageContentRevenueType()
    {
        return $this->messageContentRevenueType;
    }

    /**
     * Sets a new messageContentRevenueType
     *
     * A Type of revenue to which the content of the Message relates.
     *
     * @param string $messageContentRevenueType
     * @return self
     */
    public function setMessageContentRevenueType($messageContentRevenueType)
    {
        $this->messageContentRevenueType = $messageContentRevenueType;
        return $this;
    }

    /**
     * Adds as rightsCoverage
     *
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @return self
     * @param string $rightsCoverage
     */
    public function addToRightsCoverage($rightsCoverage)
    {
        $this->rightsCoverage[] = $rightsCoverage;
        return $this;
    }

    /**
     * isset rightsCoverage
     *
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsCoverage($index)
    {
        return isset($this->rightsCoverage[$index]);
    }

    /**
     * unset rightsCoverage
     *
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsCoverage($index)
    {
        unset($this->rightsCoverage[$index]);
    }

    /**
     * Gets as rightsCoverage
     *
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @return string[]
     */
    public function getRightsCoverage()
    {
        return $this->rightsCoverage;
    }

    /**
     * Sets a new rightsCoverage
     *
     * A Type of Right which is covered in the SalesReportToRecordCompanyMessage.
     *
     * @param string $rightsCoverage
     * @return self
     */
    public function setRightsCoverage(array $rightsCoverage = null)
    {
        $this->rightsCoverage = $rightsCoverage;
        return $this;
    }

    /**
     * Adds as containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ContainedReleaseSummaryType $containedReleaseSummary
     */
    public function addToContainedReleaseSummary(\DDEX\DSR\DSR_420\ContainedReleaseSummaryType $containedReleaseSummary)
    {
        $this->containedReleaseSummary[] = $containedReleaseSummary;
        return $this;
    }

    /**
     * isset containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
     *
     * @return \DDEX\DSR\DSR_420\ContainedReleaseSummaryType[]
     */
    public function getContainedReleaseSummary()
    {
        return $this->containedReleaseSummary;
    }

    /**
     * Sets a new containedReleaseSummary
     *
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToRecordCompanyMessage. If a Release is reported in a SalesReportToRecordCompanyMessage, then exactly one ContainedReleaseSummary Composite shall be provided.
     *
     * @param \DDEX\DSR\DSR_420\ContainedReleaseSummaryType[] $containedReleaseSummary
     * @return self
     */
    public function setContainedReleaseSummary(array $containedReleaseSummary = null)
    {
        $this->containedReleaseSummary = $containedReleaseSummary;
        return $this;
    }

    /**
     * Adds as salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\SalesReportToRecordCompanyType $salesReport
     */
    public function addToSalesReport(\DDEX\DSR\DSR_420\SalesReportToRecordCompanyType $salesReport)
    {
        $this->salesReport[] = $salesReport;
        return $this;
    }

    /**
     * isset salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesReport($index)
    {
        return isset($this->salesReport[$index]);
    }

    /**
     * unset salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesReport($index)
    {
        unset($this->salesReport[$index]);
    }

    /**
     * Gets as salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @return \DDEX\DSR\DSR_420\SalesReportToRecordCompanyType[]
     */
    public function getSalesReport()
    {
        return $this->salesReport;
    }

    /**
     * Sets a new salesReport
     *
     * A Composite containing details of SalesTransactions by a distribution partner reported to a record company.
     *
     * @param \DDEX\DSR\DSR_420\SalesReportToRecordCompanyType[] $salesReport
     * @return self
     */
    public function setSalesReport(array $salesReport = null)
    {
        $this->salesReport = $salesReport;
        return $this;
    }

    /**
     * Adds as totalSalesByReleaseType
     *
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TotalSalesByReleaseTypeType $totalSalesByReleaseType
     */
    public function addToTotalSalesByReleaseType(\DDEX\DSR\DSR_420\TotalSalesByReleaseTypeType $totalSalesByReleaseType)
    {
        $this->totalSalesByReleaseType[] = $totalSalesByReleaseType;
        return $this;
    }

    /**
     * isset totalSalesByReleaseType
     *
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalSalesByReleaseType($index)
    {
        return isset($this->totalSalesByReleaseType[$index]);
    }

    /**
     * unset totalSalesByReleaseType
     *
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalSalesByReleaseType($index)
    {
        unset($this->totalSalesByReleaseType[$index]);
    }

    /**
     * Gets as totalSalesByReleaseType
     *
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @return \DDEX\DSR\DSR_420\TotalSalesByReleaseTypeType[]
     */
    public function getTotalSalesByReleaseType()
    {
        return $this->totalSalesByReleaseType;
    }

    /**
     * Sets a new totalSalesByReleaseType
     *
     * A Composite containing details of total sales of Releases of a specific Type.
     *
     * @param \DDEX\DSR\DSR_420\TotalSalesByReleaseTypeType[] $totalSalesByReleaseType
     * @return self
     */
    public function setTotalSalesByReleaseType(array $totalSalesByReleaseType)
    {
        $this->totalSalesByReleaseType = $totalSalesByReleaseType;
        return $this;
    }

    /**
     * Gets as royaltyAmount
     *
     * A Composite containing details of the RoyaltyAmount due. This is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property Rights controlled by the MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @return \DDEX\DSR\DSR_420\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A Composite containing details of the RoyaltyAmount due. This is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property Rights controlled by the MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @param \DDEX\DSR\DSR_420\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(?\DDEX\DSR\DSR_420\RoyaltyAmountType $royaltyAmount = null)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Gets as numberOfSalesTransactionRecords
     *
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToRecordCompanyMessage. SalesTransaction records are SalesToRecordCompanyByTerritory Composites.
     *
     * @return int
     */
    public function getNumberOfSalesTransactionRecords()
    {
        return $this->numberOfSalesTransactionRecords;
    }

    /**
     * Sets a new numberOfSalesTransactionRecords
     *
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToRecordCompanyMessage. SalesTransaction records are SalesToRecordCompanyByTerritory Composites.
     *
     * @param int $numberOfSalesTransactionRecords
     * @return self
     */
    public function setNumberOfSalesTransactionRecords($numberOfSalesTransactionRecords)
    {
        $this->numberOfSalesTransactionRecords = $numberOfSalesTransactionRecords;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_410\SalesReportToRecordCompanyMessage;

/**
 * Class representing SalesReportToRecordCompanyMessageAnonymousPHPType
 */
class SalesReportToRecordCompanyMessageAnonymousPHPType
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
     * The MessageHeader for the dsr:SalesReportToRecordCompanyMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of the reporting ddex:Period covered by the dsr:SalesReportToRecordCompanyMessage.
     *
     * @var \DDEX\ddexC\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A textual commentary about the method for settlement of payments between ddex:MessageSender and ddex:MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @var \DDEX\ddexC\RemittanceAdviceType $remittanceAdvice
     */
    private $remittanceAdvice = null;

    /**
     * A ddex:Type of revenue to which the content of the ddex:Message relates.
     *
     * @var string $messageContentRevenueType
     */
    private $messageContentRevenueType = null;

    /**
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
     *
     * @var string[] $rightsCoverage
     */
    private $rightsCoverage = [
        
    ];

    /**
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
     *
     * @var \DDEX\DSR\DSR_410\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
     *
     * @var \DDEX\DSR\DSR_410\SalesReportToRecordCompanyType[] $salesReport
     */
    private $salesReport = [
        
    ];

    /**
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
     *
     * @var \DDEX\DSR\DSR_410\TotalSalesByReleaseTypeType[] $totalSalesByReleaseType
     */
    private $totalSalesByReleaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due. This is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property Rights controlled by the ddex:MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToRecordCompanyMessage. ddex:SalesTransaction records are SalesToRecordCompanyByTerritory ddex:Composites.
     *
     * @var int $numberOfSalesTransactionRecords
     */
    private $numberOfSalesTransactionRecords = null;

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
     * The MessageHeader for the dsr:SalesReportToRecordCompanyMessage.
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
     * The MessageHeader for the dsr:SalesReportToRecordCompanyMessage.
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
     * Gets as messageNotificationPeriod
     *
     * A ddex:Composite containing details of the reporting ddex:Period covered by the dsr:SalesReportToRecordCompanyMessage.
     *
     * @return \DDEX\ddexC\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A ddex:Composite containing details of the reporting ddex:Period covered by the dsr:SalesReportToRecordCompanyMessage.
     *
     * @param \DDEX\ddexC\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(\DDEX\ddexC\MessageNotificationPeriodType $messageNotificationPeriod)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Gets as remittanceAdvice
     *
     * A textual commentary about the method for settlement of payments between ddex:MessageSender and ddex:MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @return \DDEX\ddexC\RemittanceAdviceType
     */
    public function getRemittanceAdvice()
    {
        return $this->remittanceAdvice;
    }

    /**
     * Sets a new remittanceAdvice
     *
     * A textual commentary about the method for settlement of payments between ddex:MessageSender and ddex:MessageRecipient (e.g. 'international bank transfer initiated on 2006-09-18').
     *
     * @param \DDEX\ddexC\RemittanceAdviceType $remittanceAdvice
     * @return self
     */
    public function setRemittanceAdvice(?\DDEX\ddexC\RemittanceAdviceType $remittanceAdvice = null)
    {
        $this->remittanceAdvice = $remittanceAdvice;
        return $this;
    }

    /**
     * Gets as messageContentRevenueType
     *
     * A ddex:Type of revenue to which the content of the ddex:Message relates.
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
     * A ddex:Type of revenue to which the content of the ddex:Message relates.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToRecordCompanyMessage.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToRecordCompanyMessage. If a ddex:Release is reported in a dsr:SalesReportToRecordCompanyMessage, then exactly one ddex:ContainedReleaseSummary ddex:Composite shall be provided.
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
     * Adds as salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\SalesReportToRecordCompanyType $salesReport
     */
    public function addToSalesReport(\DDEX\DSR\DSR_410\SalesReportToRecordCompanyType $salesReport)
    {
        $this->salesReport[] = $salesReport;
        return $this;
    }

    /**
     * isset salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
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
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
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
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
     *
     * @return \DDEX\DSR\DSR_410\SalesReportToRecordCompanyType[]
     */
    public function getSalesReport()
    {
        return $this->salesReport;
    }

    /**
     * Sets a new salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a distribution partner reported to a record company.
     *
     * @param \DDEX\DSR\DSR_410\SalesReportToRecordCompanyType[] $salesReport
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
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\TotalSalesByReleaseTypeType $totalSalesByReleaseType
     */
    public function addToTotalSalesByReleaseType(\DDEX\DSR\DSR_410\TotalSalesByReleaseTypeType $totalSalesByReleaseType)
    {
        $this->totalSalesByReleaseType[] = $totalSalesByReleaseType;
        return $this;
    }

    /**
     * isset totalSalesByReleaseType
     *
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
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
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
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
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
     *
     * @return \DDEX\DSR\DSR_410\TotalSalesByReleaseTypeType[]
     */
    public function getTotalSalesByReleaseType()
    {
        return $this->totalSalesByReleaseType;
    }

    /**
     * Sets a new totalSalesByReleaseType
     *
     * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
     *
     * @param \DDEX\DSR\DSR_410\TotalSalesByReleaseTypeType[] $totalSalesByReleaseType
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
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due. This is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property Rights controlled by the ddex:MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due. This is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property Rights controlled by the ddex:MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(?\DDEX\ddexC\RoyaltyAmountType $royaltyAmount = null)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Gets as numberOfSalesTransactionRecords
     *
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToRecordCompanyMessage. ddex:SalesTransaction records are SalesToRecordCompanyByTerritory ddex:Composites.
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
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToRecordCompanyMessage. ddex:SalesTransaction records are SalesToRecordCompanyByTerritory ddex:Composites.
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


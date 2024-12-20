<?php

namespace DDEX\DSR\DSR_420\SalesReportToSocietyMessage;

/**
 * Class representing SalesReportToSocietyMessageAnonymousPHPType
 */
class SalesReportToSocietyMessageAnonymousPHPType
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
     * The Language and script for the Elements of the SalesReportToSocietyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the SalesReportToSocietyMessage.
     *
     * @var \DDEX\DSR\DSR_420\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Period covered by the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
     *
     * @var string[] $rightsCoverage
     */
    private $rightsCoverage = [
        
    ];

    /**
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
     *
     * @var \DDEX\DSR\DSR_420\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * A Composite containing details of one or more MusicalWorks contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_420\WorkListType $containedWorkList
     */
    private $containedWorkList = null;

    /**
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_420\CueSheetType[] $containedCueSheetList
     */
    private $containedCueSheetList = null;

    /**
     * A Composite containing details of one or more Resources contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_420\ResourceListType $containedResourceList
     */
    private $containedResourceList = null;

    /**
     * A Composite containing details of one or more Collections contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_420\CollectionListType $containedCollectionList
     */
    private $containedCollectionList = null;

    /**
     * A Composite containing details of one or more Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_420\ReleaseListType $containedReleaseList
     */
    private $containedReleaseList = null;

    /**
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
     *
     * @var \DDEX\DSR\DSR_420\SalesReportToSocietyType[] $salesReport
     */
    private $salesReport = [
        
    ];

    /**
     * A Composite containing details of the RoyaltyAmount due. This is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property Rights controlled by the MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_420\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToSocietyMessage. SalesTransaction records are SalesToSocietyByTerritory Composites.
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
     * The Language and script for the Elements of the SalesReportToSocietyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesReportToSocietyMessage as defined in IETF RfC 4646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the SalesReportToSocietyMessage.
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
     * The MessageHeader for the SalesReportToSocietyMessage.
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
     * A Composite containing details of the Period covered by the SalesReportToSocietyMessage.
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
     * A Composite containing details of the Period covered by the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
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
     * A Type of Right which is covered in the SalesReportToSocietyMessage.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
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
     * A Composite containing summary details of a Release for which sales data is provided in the SalesReportToSocietyMessage. Either this Element or at least one of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList is required. Typically a SalesReportToSocietyMessage only contains either this Element or a set of ContainedMusicalWorkList, ContainedResourceList and ContainedReleaseList are used.
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
     * Gets as containedWorkList
     *
     * A Composite containing details of one or more MusicalWorks contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_420\WorkListType
     */
    public function getContainedWorkList()
    {
        return $this->containedWorkList;
    }

    /**
     * Sets a new containedWorkList
     *
     * A Composite containing details of one or more MusicalWorks contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_420\WorkListType $containedWorkList
     * @return self
     */
    public function setContainedWorkList(?\DDEX\DSR\DSR_420\WorkListType $containedWorkList = null)
    {
        $this->containedWorkList = $containedWorkList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\CueSheetType $cueSheet
     */
    public function addToContainedCueSheetList(\DDEX\DSR\DSR_420\CueSheetType $cueSheet)
    {
        $this->containedCueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset containedCueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedCueSheetList($index)
    {
        return isset($this->containedCueSheetList[$index]);
    }

    /**
     * unset containedCueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedCueSheetList($index)
    {
        unset($this->containedCueSheetList[$index]);
    }

    /**
     * Gets as containedCueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_420\CueSheetType[]
     */
    public function getContainedCueSheetList()
    {
        return $this->containedCueSheetList;
    }

    /**
     * Sets a new containedCueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_420\CueSheetType[] $containedCueSheetList
     * @return self
     */
    public function setContainedCueSheetList(array $containedCueSheetList = null)
    {
        $this->containedCueSheetList = $containedCueSheetList;
        return $this;
    }

    /**
     * Gets as containedResourceList
     *
     * A Composite containing details of one or more Resources contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_420\ResourceListType
     */
    public function getContainedResourceList()
    {
        return $this->containedResourceList;
    }

    /**
     * Sets a new containedResourceList
     *
     * A Composite containing details of one or more Resources contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_420\ResourceListType $containedResourceList
     * @return self
     */
    public function setContainedResourceList(?\DDEX\DSR\DSR_420\ResourceListType $containedResourceList = null)
    {
        $this->containedResourceList = $containedResourceList;
        return $this;
    }

    /**
     * Gets as containedCollectionList
     *
     * A Composite containing details of one or more Collections contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_420\CollectionListType
     */
    public function getContainedCollectionList()
    {
        return $this->containedCollectionList;
    }

    /**
     * Sets a new containedCollectionList
     *
     * A Composite containing details of one or more Collections contained in Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_420\CollectionListType $containedCollectionList
     * @return self
     */
    public function setContainedCollectionList(?\DDEX\DSR\DSR_420\CollectionListType $containedCollectionList = null)
    {
        $this->containedCollectionList = $containedCollectionList;
        return $this;
    }

    /**
     * Gets as containedReleaseList
     *
     * A Composite containing details of one or more Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_420\ReleaseListType
     */
    public function getContainedReleaseList()
    {
        return $this->containedReleaseList;
    }

    /**
     * Sets a new containedReleaseList
     *
     * A Composite containing details of one or more Releases for which sales data is provided in the SalesReportToSocietyMessage. If this Element is used, the ContainedReleaseSummary Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_420\ReleaseListType $containedReleaseList
     * @return self
     */
    public function setContainedReleaseList(?\DDEX\DSR\DSR_420\ReleaseListType $containedReleaseList = null)
    {
        $this->containedReleaseList = $containedReleaseList;
        return $this;
    }

    /**
     * Adds as salesReport
     *
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\SalesReportToSocietyType $salesReport
     */
    public function addToSalesReport(\DDEX\DSR\DSR_420\SalesReportToSocietyType $salesReport)
    {
        $this->salesReport[] = $salesReport;
        return $this;
    }

    /**
     * isset salesReport
     *
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
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
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
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
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
     *
     * @return \DDEX\DSR\DSR_420\SalesReportToSocietyType[]
     */
    public function getSalesReport()
    {
        return $this->salesReport;
    }

    /**
     * Sets a new salesReport
     *
     * A Composite containing details of SalesTransactions by a DSP reported to a MusicalWork Licensor.
     *
     * @param \DDEX\DSR\DSR_420\SalesReportToSocietyType[] $salesReport
     * @return self
     */
    public function setSalesReport(array $salesReport = null)
    {
        $this->salesReport = $salesReport;
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
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToSocietyMessage. SalesTransaction records are SalesToSocietyByTerritory Composites.
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
     * The check number which identifies the number of SalesTransaction records contained in the SalesReportToSocietyMessage. SalesTransaction records are SalesToSocietyByTerritory Composites.
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


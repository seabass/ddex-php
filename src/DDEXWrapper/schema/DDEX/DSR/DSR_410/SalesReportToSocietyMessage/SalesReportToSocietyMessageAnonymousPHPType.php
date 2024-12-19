<?php

namespace DDEX\DSR\DSR_410\SalesReportToSocietyMessage;

/**
 * Class representing SalesReportToSocietyMessageAnonymousPHPType
 */
class SalesReportToSocietyMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToSocietyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the dsr:SalesReportToSocietyMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of the ddex:Period covered by the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
     *
     * @var string[] $rightsCoverage
     */
    private $rightsCoverage = [
        
    ];

    /**
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
     *
     * @var \DDEX\DSR\DSR_410\ContainedReleaseSummaryType[] $containedReleaseSummary
     */
    private $containedReleaseSummary = [
        
    ];

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @var \DDEX\ddexC\WorkListType $containedWorkList
     */
    private $containedWorkList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @var \DDEX\ddexC\CueSheetType[] $containedCueSheetList
     */
    private $containedCueSheetList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_410\ResourceListType $containedResourceList
     */
    private $containedResourceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @var \DDEX\ddexC\CollectionListType $containedCollectionList
     */
    private $containedCollectionList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @var \DDEX\DSR\DSR_410\ReleaseListType $containedReleaseList
     */
    private $containedReleaseList = null;

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
     *
     * @var \DDEX\DSR\DSR_410\SalesReportToSocietyType[] $salesReport
     */
    private $salesReport = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due. This is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property Rights controlled by the ddex:MessageRecipient (The default is that 100% ownership is assumed).
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToSocietyMessage. ddex:SalesTransaction records are SalesToSocietyByTerritory ddex:Composites.
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
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToSocietyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the dsr:SalesReportToSocietyMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the dsr:SalesReportToSocietyMessage.
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
     * The MessageHeader for the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Composite containing details of the ddex:Period covered by the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Composite containing details of the ddex:Period covered by the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Type of ddex:Right which is covered in the dsr:SalesReportToSocietyMessage.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
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
     * A ddex:Composite containing summary details of a ddex:Release for which sales data is provided in the dsr:SalesReportToSocietyMessage. Either this ddex:Element or at least one of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList is required. Typically a dsr:SalesReportToSocietyMessage only contains either this ddex:Element or a set of ddex:ContainedMusicalWorkList, ddex:ContainedResourceList and ddex:ContainedReleaseList are used.
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
     * Gets as containedWorkList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return \DDEX\ddexC\WorkListType
     */
    public function getContainedWorkList()
    {
        return $this->containedWorkList;
    }

    /**
     * Sets a new containedWorkList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @param \DDEX\ddexC\WorkListType $containedWorkList
     * @return self
     */
    public function setContainedWorkList(?\DDEX\ddexC\WorkListType $containedWorkList = null)
    {
        $this->containedWorkList = $containedWorkList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return self
     * @param \DDEX\ddexC\CueSheetType $cueSheet
     */
    public function addToContainedCueSheetList(\DDEX\ddexC\CueSheetType $cueSheet)
    {
        $this->containedCueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset containedCueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return \DDEX\ddexC\CueSheetType[]
     */
    public function getContainedCueSheetList()
    {
        return $this->containedCueSheetList;
    }

    /**
     * Sets a new containedCueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @param \DDEX\ddexC\CueSheetType[] $containedCueSheetList
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
     * A ddex:Composite containing details of one or more ddex:Resources contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_410\ResourceListType
     */
    public function getContainedResourceList()
    {
        return $this->containedResourceList;
    }

    /**
     * Sets a new containedResourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_410\ResourceListType $containedResourceList
     * @return self
     */
    public function setContainedResourceList(?\DDEX\DSR\DSR_410\ResourceListType $containedResourceList = null)
    {
        $this->containedResourceList = $containedResourceList;
        return $this;
    }

    /**
     * Gets as containedCollectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return \DDEX\ddexC\CollectionListType
     */
    public function getContainedCollectionList()
    {
        return $this->containedCollectionList;
    }

    /**
     * Sets a new containedCollectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @param \DDEX\ddexC\CollectionListType $containedCollectionList
     * @return self
     */
    public function setContainedCollectionList(?\DDEX\ddexC\CollectionListType $containedCollectionList = null)
    {
        $this->containedCollectionList = $containedCollectionList;
        return $this;
    }

    /**
     * Gets as containedReleaseList
     *
     * A ddex:Composite containing details of one or more ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @return \DDEX\DSR\DSR_410\ReleaseListType
     */
    public function getContainedReleaseList()
    {
        return $this->containedReleaseList;
    }

    /**
     * Sets a new containedReleaseList
     *
     * A ddex:Composite containing details of one or more ddex:Releases for which sales data is provided in the dsr:SalesReportToSocietyMessage. If this ddex:Element is used, the ddex:ContainedReleaseSummary ddex:Element shall not be used.
     *
     * @param \DDEX\DSR\DSR_410\ReleaseListType $containedReleaseList
     * @return self
     */
    public function setContainedReleaseList(?\DDEX\DSR\DSR_410\ReleaseListType $containedReleaseList = null)
    {
        $this->containedReleaseList = $containedReleaseList;
        return $this;
    }

    /**
     * Adds as salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\SalesReportToSocietyType $salesReport
     */
    public function addToSalesReport(\DDEX\DSR\DSR_410\SalesReportToSocietyType $salesReport)
    {
        $this->salesReport[] = $salesReport;
        return $this;
    }

    /**
     * isset salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
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
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
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
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
     *
     * @return \DDEX\DSR\DSR_410\SalesReportToSocietyType[]
     */
    public function getSalesReport()
    {
        return $this->salesReport;
    }

    /**
     * Sets a new salesReport
     *
     * A ddex:Composite containing details of ddex:SalesTransactions by a ddex:DSP reported to a ddex:MusicalWork ddex:Licensor.
     *
     * @param \DDEX\DSR\DSR_410\SalesReportToSocietyType[] $salesReport
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
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToSocietyMessage. ddex:SalesTransaction records are SalesToSocietyByTerritory ddex:Composites.
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
     * The check number which identifies the number of ddex:SalesTransaction records contained in the dsr:SalesReportToSocietyMessage. ddex:SalesTransaction records are SalesToSocietyByTerritory ddex:Composites.
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


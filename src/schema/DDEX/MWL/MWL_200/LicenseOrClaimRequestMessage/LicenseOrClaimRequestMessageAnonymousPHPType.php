<?php

namespace DDEX\MWL\MWL_200\LicenseOrClaimRequestMessage;

/**
 * Class representing LicenseOrClaimRequestMessageAnonymousPHPType
 */
class LicenseOrClaimRequestMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the mwl:LicenseOrClaimRequestMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @var string $updateIndicator
     */
    private $updateIndicator = null;

    /**
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[] $licenseOrClaimRequestList
     */
    private $licenseOrClaimRequestList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @var \DDEX\MWL\MWL_200\WorkListType $workList
     */
    private $workList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @var \DDEX\MWL\MWL_200\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Releases for which a ddex:License or ddex:Claim is requested.
     *
     * @var \DDEX\MWL\MWL_200\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A ddex:Composite containing details of ddex:RightShares for which a ddex:License or ddex:Claim is requested.
     *
     * @var \DDEX\MWL\MWL_200\RightShareListType $rightShareList
     */
    private $rightShareList = null;

    /**
     * A ddex:Composite containing details of conditions and/or limitations for Usages for which a ddex:License or ddex:Claim is requested.
     *
     * @var \DDEX\MWL\MWL_200\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     */
    private $licenseOrClaimConditionList = null;

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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the mwl:LicenseOrClaimRequestMessage.
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
     * The MessageHeader for the mwl:LicenseOrClaimRequestMessage.
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
     * Gets as updateIndicator
     *
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @return string
     */
    public function getUpdateIndicator()
    {
        return $this->updateIndicator;
    }

    /**
     * Sets a new updateIndicator
     *
     * The indicator which distinguishes whether the ddex:Message contains original data or updates to previously sent data.
     *
     * @param string $updateIndicator
     * @return self
     */
    public function setUpdateIndicator($updateIndicator)
    {
        $this->updateIndicator = $updateIndicator;
        return $this;
    }

    /**
     * Adds as licenseOrClaimRequest
     *
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRequestType $licenseOrClaimRequest
     */
    public function addToLicenseOrClaimRequestList(\DDEX\MWL\MWL_200\LicenseOrClaimRequestType $licenseOrClaimRequest)
    {
        $this->licenseOrClaimRequestList[] = $licenseOrClaimRequest;
        return $this;
    }

    /**
     * isset licenseOrClaimRequestList
     *
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRequestList($index)
    {
        return isset($this->licenseOrClaimRequestList[$index]);
    }

    /**
     * unset licenseOrClaimRequestList
     *
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRequestList($index)
    {
        unset($this->licenseOrClaimRequestList[$index]);
    }

    /**
     * Gets as licenseOrClaimRequestList
     *
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[]
     */
    public function getLicenseOrClaimRequestList()
    {
        return $this->licenseOrClaimRequestList;
    }

    /**
     * Sets a new licenseOrClaimRequestList
     *
     * A ddex:Composite containing details of requests for a ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[] $licenseOrClaimRequestList
     * @return self
     */
    public function setLicenseOrClaimRequestList(array $licenseOrClaimRequestList = null)
    {
        $this->licenseOrClaimRequestList = $licenseOrClaimRequestList;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @return \DDEX\MWL\MWL_200\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @param \DDEX\MWL\MWL_200\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DDEX\MWL\MWL_200\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @return self
     * @param \DDEX\ddexC\CueSheetType $cueSheet
     */
    public function addToCueSheetList(\DDEX\ddexC\CueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueSheetList($index)
    {
        return isset($this->cueSheetList[$index]);
    }

    /**
     * unset cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueSheetList($index)
    {
        unset($this->cueSheetList[$index]);
    }

    /**
     * Gets as cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @return \DDEX\ddexC\CueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @param \DDEX\ddexC\CueSheetType[] $cueSheetList
     * @return self
     */
    public function setCueSheetList(array $cueSheetList = null)
    {
        $this->cueSheetList = $cueSheetList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @return \DDEX\MWL\MWL_200\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) for which a ddex:License or ddex:Claim is requested.
     *
     * @param \DDEX\MWL\MWL_200\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWL\MWL_200\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @return \DDEX\ddexC\CollectionListType
     */
    public function getCollectionList()
    {
        return $this->collectionList;
    }

    /**
     * Sets a new collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @param \DDEX\ddexC\CollectionListType $collectionList
     * @return self
     */
    public function setCollectionList(?\DDEX\ddexC\CollectionListType $collectionList = null)
    {
        $this->collectionList = $collectionList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A ddex:Composite containing details of one or more ddex:Releases for which a ddex:License or ddex:Claim is requested.
     *
     * @return \DDEX\MWL\MWL_200\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A ddex:Composite containing details of one or more ddex:Releases for which a ddex:License or ddex:Claim is requested.
     *
     * @param \DDEX\MWL\MWL_200\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(?\DDEX\MWL\MWL_200\ReleaseListType $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as rightShareList
     *
     * A ddex:Composite containing details of ddex:RightShares for which a ddex:License or ddex:Claim is requested.
     *
     * @return \DDEX\MWL\MWL_200\RightShareListType
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A ddex:Composite containing details of ddex:RightShares for which a ddex:License or ddex:Claim is requested.
     *
     * @param \DDEX\MWL\MWL_200\RightShareListType $rightShareList
     * @return self
     */
    public function setRightShareList(?\DDEX\MWL\MWL_200\RightShareListType $rightShareList = null)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Gets as licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages for which a ddex:License or ddex:Claim is requested.
     *
     * @return \DDEX\MWL\MWL_200\LicenseOrClaimConditionListType
     */
    public function getLicenseOrClaimConditionList()
    {
        return $this->licenseOrClaimConditionList;
    }

    /**
     * Sets a new licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages for which a ddex:License or ddex:Claim is requested.
     *
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     * @return self
     */
    public function setLicenseOrClaimConditionList(?\DDEX\MWL\MWL_200\LicenseOrClaimConditionListType $licenseOrClaimConditionList = null)
    {
        $this->licenseOrClaimConditionList = $licenseOrClaimConditionList;
        return $this;
    }
}


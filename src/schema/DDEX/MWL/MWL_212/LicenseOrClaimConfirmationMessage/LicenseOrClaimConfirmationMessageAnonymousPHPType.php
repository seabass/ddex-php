<?php

namespace DDEX\MWL\MWL_212\LicenseOrClaimConfirmationMessage;

/**
 * Class representing LicenseOrClaimConfirmationMessageAnonymousPHPType
 */
class LicenseOrClaimConfirmationMessageAnonymousPHPType
{
    /**
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicenseOrClaimConfirmationMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the
     *  mwl:LicenseOrClaimConfirmationMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The indicator which distinguishes
     *  whether the ddex:Message contains original data or updates to previously sent
     *  data.
     *
     * @var string $updateIndicator
     */
    private $updateIndicator = null;

    /**
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @var \DDEX\MWL\MWL_212\LicenseOrClaimType[] $confirmedLicenseOrClaimList
     */
    private $confirmedLicenseOrClaimList = null;

    /**
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @var \DDEX\MWL\MWL_212\LicenseOrClaimType[] $pendingLicenseOrClaimList
     */
    private $pendingLicenseOrClaimList = null;

    /**
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are rejected.
     *
     * @var \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $rejectedLicenseOrClaimList
     */
    private $rejectedLicenseOrClaimList = null;

    /**
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending because the ddex:Licensee
     *  wishes to negotiate T&Cs.
     *
     * @var \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $licenseOrClaimForNegotiationList
     */
    private $licenseOrClaimForNegotiationList = null;

    /**
     * A ddex:Composite containing details of
     *  one or more ddex:Works being part of the Release(s) for which a ddex:License or
     *  ddex:Claim is rejected.
     *
     * @var \DDEX\MWL\MWL_212\WorkListType $workList
     */
    private $workList = null;

    /**
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A ddex:Composite containing details of
     *  one or more ddex:Resources being part of the Release(s) for which a
     *  ddex:License or ddex:Claim is rejected.
     *
     * @var \DDEX\MWL\MWL_212\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A ddex:Composite containing details of
     *  one or more ddex:Collections contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A ddex:Composite containing details of
     *  one or more ddex:Releases for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @var \DDEX\MWL\MWL_212\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A ddex:Composite containing details of
     *  ddex:RightShares for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @var \DDEX\MWL\MWL_212\RightShareListType $rightShareList
     */
    private $rightShareList = null;

    /**
     * A ddex:Composite containing details of
     *  conditions and/or limitations for Usages for which a ddex:License or ddex:Claim
     *  is rejected.
     *
     * @var \DDEX\MWL\MWL_212\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     */
    private $licenseOrClaimConditionList = null;

    /**
     * Gets as messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicenseOrClaimConfirmationMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicenseOrClaimConfirmationMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the
     *  mwl:LicenseOrClaimConfirmationMessage.
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
     * The MessageHeader for the
     *  mwl:LicenseOrClaimConfirmationMessage.
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
     * The indicator which distinguishes
     *  whether the ddex:Message contains original data or updates to previously sent
     *  data.
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
     * The indicator which distinguishes
     *  whether the ddex:Message contains original data or updates to previously sent
     *  data.
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
     * Adds as licenseOrClaim
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @return self
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim
     */
    public function addToConfirmedLicenseOrClaimList(\DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim)
    {
        $this->confirmedLicenseOrClaimList[] = $licenseOrClaim;
        return $this;
    }

    /**
     * isset confirmedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfirmedLicenseOrClaimList($index)
    {
        return isset($this->confirmedLicenseOrClaimList[$index]);
    }

    /**
     * unset confirmedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfirmedLicenseOrClaimList($index)
    {
        unset($this->confirmedLicenseOrClaimList[$index]);
    }

    /**
     * Gets as confirmedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @return \DDEX\MWL\MWL_212\LicenseOrClaimType[]
     */
    public function getConfirmedLicenseOrClaimList()
    {
        return $this->confirmedLicenseOrClaimList;
    }

    /**
     * Sets a new confirmedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are confirmed.
     *
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType[] $confirmedLicenseOrClaimList
     * @return self
     */
    public function setConfirmedLicenseOrClaimList(array $confirmedLicenseOrClaimList = null)
    {
        $this->confirmedLicenseOrClaimList = $confirmedLicenseOrClaimList;
        return $this;
    }

    /**
     * Adds as licenseOrClaim
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @return self
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim
     */
    public function addToPendingLicenseOrClaimList(\DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim)
    {
        $this->pendingLicenseOrClaimList[] = $licenseOrClaim;
        return $this;
    }

    /**
     * isset pendingLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPendingLicenseOrClaimList($index)
    {
        return isset($this->pendingLicenseOrClaimList[$index]);
    }

    /**
     * unset pendingLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPendingLicenseOrClaimList($index)
    {
        unset($this->pendingLicenseOrClaimList[$index]);
    }

    /**
     * Gets as pendingLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @return \DDEX\MWL\MWL_212\LicenseOrClaimType[]
     */
    public function getPendingLicenseOrClaimList()
    {
        return $this->pendingLicenseOrClaimList;
    }

    /**
     * Sets a new pendingLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending.
     *
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType[] $pendingLicenseOrClaimList
     * @return self
     */
    public function setPendingLicenseOrClaimList(array $pendingLicenseOrClaimList = null)
    {
        $this->pendingLicenseOrClaimList = $pendingLicenseOrClaimList;
        return $this;
    }

    /**
     * Gets as rejectedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are rejected.
     *
     * @return \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType
     */
    public function getRejectedLicenseOrClaimList()
    {
        return $this->rejectedLicenseOrClaimList;
    }

    /**
     * Sets a new rejectedLicenseOrClaimList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are rejected.
     *
     * @param \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $rejectedLicenseOrClaimList
     * @return self
     */
    public function setRejectedLicenseOrClaimList(?\DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $rejectedLicenseOrClaimList = null)
    {
        $this->rejectedLicenseOrClaimList = $rejectedLicenseOrClaimList;
        return $this;
    }

    /**
     * Gets as licenseOrClaimForNegotiationList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending because the ddex:Licensee
     *  wishes to negotiate T&Cs.
     *
     * @return \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType
     */
    public function getLicenseOrClaimForNegotiationList()
    {
        return $this->licenseOrClaimForNegotiationList;
    }

    /**
     * Sets a new licenseOrClaimForNegotiationList
     *
     * A ddex:Composite containing details of
     *  the ddex:Licenses or ddex:Claims that are pending because the ddex:Licensee
     *  wishes to negotiate T&Cs.
     *
     * @param \DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $licenseOrClaimForNegotiationList
     * @return self
     */
    public function setLicenseOrClaimForNegotiationList(?\DDEX\MWL\MWL_212\RejectedLicenseOrClaimListType $licenseOrClaimForNegotiationList = null)
    {
        $this->licenseOrClaimForNegotiationList = $licenseOrClaimForNegotiationList;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A ddex:Composite containing details of
     *  one or more ddex:Works being part of the Release(s) for which a ddex:License or
     *  ddex:Claim is rejected.
     *
     * @return \DDEX\MWL\MWL_212\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A ddex:Composite containing details of
     *  one or more ddex:Works being part of the Release(s) for which a ddex:License or
     *  ddex:Claim is rejected.
     *
     * @param \DDEX\MWL\MWL_212\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DDEX\MWL\MWL_212\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:CueSheets contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:Resources being part of the Release(s) for which a
     *  ddex:License or ddex:Claim is rejected.
     *
     * @return \DDEX\MWL\MWL_212\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A ddex:Composite containing details of
     *  one or more ddex:Resources being part of the Release(s) for which a
     *  ddex:License or ddex:Claim is rejected.
     *
     * @param \DDEX\MWL\MWL_212\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWL\MWL_212\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as collectionList
     *
     * A ddex:Composite containing details of
     *  one or more ddex:Collections contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:Collections contained in ddex:Releases for which sales data is
     *  provided in the ddex:Message.
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
     * A ddex:Composite containing details of
     *  one or more ddex:Releases for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @return \DDEX\MWL\MWL_212\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A ddex:Composite containing details of
     *  one or more ddex:Releases for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @param \DDEX\MWL\MWL_212\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(?\DDEX\MWL\MWL_212\ReleaseListType $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as rightShareList
     *
     * A ddex:Composite containing details of
     *  ddex:RightShares for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @return \DDEX\MWL\MWL_212\RightShareListType
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A ddex:Composite containing details of
     *  ddex:RightShares for which a ddex:License or ddex:Claim is
     *  rejected.
     *
     * @param \DDEX\MWL\MWL_212\RightShareListType $rightShareList
     * @return self
     */
    public function setRightShareList(?\DDEX\MWL\MWL_212\RightShareListType $rightShareList = null)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Gets as licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of
     *  conditions and/or limitations for Usages for which a ddex:License or ddex:Claim
     *  is rejected.
     *
     * @return \DDEX\MWL\MWL_212\LicenseOrClaimConditionListType
     */
    public function getLicenseOrClaimConditionList()
    {
        return $this->licenseOrClaimConditionList;
    }

    /**
     * Sets a new licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of
     *  conditions and/or limitations for Usages for which a ddex:License or ddex:Claim
     *  is rejected.
     *
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     * @return self
     */
    public function setLicenseOrClaimConditionList(?\DDEX\MWL\MWL_212\LicenseOrClaimConditionListType $licenseOrClaimConditionList = null)
    {
        $this->licenseOrClaimConditionList = $licenseOrClaimConditionList;
        return $this;
    }
}


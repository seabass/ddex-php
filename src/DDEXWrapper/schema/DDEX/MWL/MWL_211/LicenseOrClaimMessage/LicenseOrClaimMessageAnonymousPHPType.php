<?php

namespace DDEX\MWL\MWL_211\LicenseOrClaimMessage;

/**
 * Class representing LicenseOrClaimMessageAnonymousPHPType
 */
class LicenseOrClaimMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the mwl:LicenseOrClaimMessage.
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
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @var \DDEX\MWL\MWL_211\LicenseOrClaimType[] $licenseOrClaimList
     */
    private $licenseOrClaimList = null;

    /**
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @var \DDEX\MWL\MWL_211\RefusedLicenseOrClaimType[] $refusedLicenseOrClaimList
     */
    private $refusedLicenseOrClaimList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_211\WorkListType $workList
     */
    private $workList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_211\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which sales data is provided in the ddex:Message.
     *
     * @var \DDEX\ddexC\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Releases referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_211\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A ddex:Composite containing details of ddex:RightShares referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_211\RightShareListType $rightShareList
     */
    private $rightShareList = null;

    /**
     * A ddex:Composite containing details of conditions and/or limitations for Usages which are referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_211\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     */
    private $licenseOrClaimConditionList = null;

    /**
     * A ddex:Composite containing a list of details to support invoicing.
     *
     * @var \DDEX\MWL\MWL_211\InvoiceSupportInformationListType $invoiceSupportInformationList
     */
    private $invoiceSupportInformationList = null;

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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the mwl:LicenseOrClaimMessage.
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
     * The MessageHeader for the mwl:LicenseOrClaimMessage.
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
     * Adds as licenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\LicenseOrClaimType $licenseOrClaim
     */
    public function addToLicenseOrClaimList(\DDEX\MWL\MWL_211\LicenseOrClaimType $licenseOrClaim)
    {
        $this->licenseOrClaimList[] = $licenseOrClaim;
        return $this;
    }

    /**
     * isset licenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimList($index)
    {
        return isset($this->licenseOrClaimList[$index]);
    }

    /**
     * unset licenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimList($index)
    {
        unset($this->licenseOrClaimList[$index]);
    }

    /**
     * Gets as licenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @return \DDEX\MWL\MWL_211\LicenseOrClaimType[]
     */
    public function getLicenseOrClaimList()
    {
        return $this->licenseOrClaimList;
    }

    /**
     * Sets a new licenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims.
     *
     * @param \DDEX\MWL\MWL_211\LicenseOrClaimType[] $licenseOrClaimList
     * @return self
     */
    public function setLicenseOrClaimList(array $licenseOrClaimList = null)
    {
        $this->licenseOrClaimList = $licenseOrClaimList;
        return $this;
    }

    /**
     * Adds as refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\RefusedLicenseOrClaimType $refusedLicenseOrClaim
     */
    public function addToRefusedLicenseOrClaimList(\DDEX\MWL\MWL_211\RefusedLicenseOrClaimType $refusedLicenseOrClaim)
    {
        $this->refusedLicenseOrClaimList[] = $refusedLicenseOrClaim;
        return $this;
    }

    /**
     * isset refusedLicenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusedLicenseOrClaimList($index)
    {
        return isset($this->refusedLicenseOrClaimList[$index]);
    }

    /**
     * unset refusedLicenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusedLicenseOrClaimList($index)
    {
        unset($this->refusedLicenseOrClaimList[$index]);
    }

    /**
     * Gets as refusedLicenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @return \DDEX\MWL\MWL_211\RefusedLicenseOrClaimType[]
     */
    public function getRefusedLicenseOrClaimList()
    {
        return $this->refusedLicenseOrClaimList;
    }

    /**
     * Sets a new refusedLicenseOrClaimList
     *
     * A ddex:Composite containing details of the ddex:Licenses or ddex:Claims that are refused.
     *
     * @param \DDEX\MWL\MWL_211\RefusedLicenseOrClaimType[] $refusedLicenseOrClaimList
     * @return self
     */
    public function setRefusedLicenseOrClaimList(array $refusedLicenseOrClaimList = null)
    {
        $this->refusedLicenseOrClaimList = $refusedLicenseOrClaimList;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_211\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A ddex:Composite containing details of one or more ddex:Works being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_211\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DDEX\MWL\MWL_211\WorkListType $workList = null)
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
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_211\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources being part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_211\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWL\MWL_211\ResourceListType $resourceList = null)
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
     * A ddex:Composite containing details of one or more ddex:Releases referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_211\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A ddex:Composite containing details of one or more ddex:Releases referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_211\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(?\DDEX\MWL\MWL_211\ReleaseListType $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as rightShareList
     *
     * A ddex:Composite containing details of ddex:RightShares referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_211\RightShareListType
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A ddex:Composite containing details of ddex:RightShares referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_211\RightShareListType $rightShareList
     * @return self
     */
    public function setRightShareList(?\DDEX\MWL\MWL_211\RightShareListType $rightShareList = null)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Gets as licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages which are referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_211\LicenseOrClaimConditionListType
     */
    public function getLicenseOrClaimConditionList()
    {
        return $this->licenseOrClaimConditionList;
    }

    /**
     * Sets a new licenseOrClaimConditionList
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages which are referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_211\LicenseOrClaimConditionListType $licenseOrClaimConditionList
     * @return self
     */
    public function setLicenseOrClaimConditionList(?\DDEX\MWL\MWL_211\LicenseOrClaimConditionListType $licenseOrClaimConditionList = null)
    {
        $this->licenseOrClaimConditionList = $licenseOrClaimConditionList;
        return $this;
    }

    /**
     * Gets as invoiceSupportInformationList
     *
     * A ddex:Composite containing a list of details to support invoicing.
     *
     * @return \DDEX\MWL\MWL_211\InvoiceSupportInformationListType
     */
    public function getInvoiceSupportInformationList()
    {
        return $this->invoiceSupportInformationList;
    }

    /**
     * Sets a new invoiceSupportInformationList
     *
     * A ddex:Composite containing a list of details to support invoicing.
     *
     * @param \DDEX\MWL\MWL_211\InvoiceSupportInformationListType $invoiceSupportInformationList
     * @return self
     */
    public function setInvoiceSupportInformationList(?\DDEX\MWL\MWL_211\InvoiceSupportInformationListType $invoiceSupportInformationList = null)
    {
        $this->invoiceSupportInformationList = $invoiceSupportInformationList;
        return $this;
    }
}


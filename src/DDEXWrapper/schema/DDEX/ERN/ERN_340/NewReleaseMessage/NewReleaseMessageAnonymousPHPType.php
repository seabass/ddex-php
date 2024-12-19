<?php

namespace DDEX\ERN\ERN_340\NewReleaseMessage;

/**
 * Class representing NewReleaseMessageAnonymousPHPType
 */
class NewReleaseMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the ern:NewReleaseMessage.
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
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @var \DDEX\ERN\ERN_340\CatalogTransferType $catalogTransfer
     */
    private $catalogTransfer = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @var \DDEX\ddexC\WorkListType $workList
     */
    private $workList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_340\CueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @var \DDEX\ERN\ERN_340\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_340\CollectionListType $collectionList
     */
    private $collectionList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_340\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @var \DDEX\ERN\ERN_340\DealListType $dealList
     */
    private $dealList = null;

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
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:NewReleaseMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the ern:NewReleaseMessage.
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
     * The MessageHeader for the ern:NewReleaseMessage.
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
     * Gets as catalogTransfer
     *
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @return \DDEX\ERN\ERN_340\CatalogTransferType
     */
    public function getCatalogTransfer()
    {
        return $this->catalogTransfer;
    }

    /**
     * Sets a new catalogTransfer
     *
     * A ddex:Composite containing details of a ddex:Price change.
     *
     * @param \DDEX\ERN\ERN_340\CatalogTransferType $catalogTransfer
     * @return self
     */
    public function setCatalogTransfer(?\DDEX\ERN\ERN_340\CatalogTransferType $catalogTransfer = null)
    {
        $this->catalogTransfer = $catalogTransfer;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @return \DDEX\ddexC\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks, a ddex:Performance of which is contained in the ddex:Resources of the ern:NewReleaseMessage.
     *
     * @param \DDEX\ddexC\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DDEX\ddexC\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return self
     * @param \DDEX\ERN\ERN_340\CueSheetType $cueSheet
     */
    public function addToCueSheetList(\DDEX\ERN\ERN_340\CueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
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
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_340\CueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A ddex:Composite containing details of one or more ddex:CueSheets contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_340\CueSheetType[] $cueSheetList
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
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @return \DDEX\ERN\ERN_340\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources.
     *
     * @param \DDEX\ERN\ERN_340\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DDEX\ERN\ERN_340\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_340\CollectionListType
     */
    public function getCollectionList()
    {
        return $this->collectionList;
    }

    /**
     * Sets a new collectionList
     *
     * A ddex:Composite containing details of one or more ddex:Collections contained in ddex:Releases for which data is provided in the ern:NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_340\CollectionListType $collectionList
     * @return self
     */
    public function setCollectionList(?\DDEX\ERN\ERN_340\CollectionListType $collectionList = null)
    {
        $this->collectionList = $collectionList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_340\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A ddex:Composite containing details of one or more ddex:DDEX ddex:Releases contained in the ern:NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_340\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DDEX\ERN\ERN_340\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as dealList
     *
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @return \DDEX\ERN\ERN_340\DealListType
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A ddex:Composite containing details of one or more ddex:Deals governing the Usage of the ddex:Releases in the ddex:Message.
     *
     * @param \DDEX\ERN\ERN_340\DealListType $dealList
     * @return self
     */
    public function setDealList(?\DDEX\ERN\ERN_340\DealListType $dealList = null)
    {
        $this->dealList = $dealList;
        return $this;
    }
}


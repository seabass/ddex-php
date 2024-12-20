<?php

namespace DDEX\ERN\ERN_410\NewReleaseMessage;

/**
 * Class representing NewReleaseMessageAnonymousPHPType
 */
class NewReleaseMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVariantVersionId
     */
    private $releaseProfileVariantVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_410\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\ERN\ERN_410\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_410\DetailedCueSheetType[] $cueSheetList
     */
    private $cueSheetList = null;

    /**
     * A Composite containing details of one or more Resources.
     *
     * @var \DDEX\ERN\ERN_410\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_410\ChapterListType $chapterList
     */
    private $chapterList = null;

    /**
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_410\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @var \DDEX\ERN\ERN_410\ReleaseDealType[] $dealList
     */
    private $dealList = null;

    /**
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @var \DDEX\ERN\ERN_410\FileType[] $supplementalDocumentList
     */
    private $supplementalDocumentList = null;

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
     * Gets as releaseProfileVariantVersionId
     *
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getReleaseProfileVariantVersionId()
    {
        return $this->releaseProfileVariantVersionId;
    }

    /**
     * Sets a new releaseProfileVariantVersionId
     *
     * The Identifier of the Version of the release profile variant used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $releaseProfileVariantVersionId
     * @return self
     */
    public function setReleaseProfileVariantVersionId($releaseProfileVariantVersionId)
    {
        $this->releaseProfileVariantVersionId = $releaseProfileVariantVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_410\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_410\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_410\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\ERN\ERN_410\PartyType $party
     */
    public function addToPartyList(\DDEX\ERN\ERN_410\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyList($index)
    {
        return isset($this->partyList[$index]);
    }

    /**
     * unset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyList($index)
    {
        unset($this->partyList[$index]);
    }

    /**
     * Gets as partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return \DDEX\ERN\ERN_410\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param \DDEX\ERN\ERN_410\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as cueSheet
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return self
     * @param \DDEX\ERN\ERN_410\DetailedCueSheetType $cueSheet
     */
    public function addToCueSheetList(\DDEX\ERN\ERN_410\DetailedCueSheetType $cueSheet)
    {
        $this->cueSheetList[] = $cueSheet;
        return $this;
    }

    /**
     * isset cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
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
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
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
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_410\DetailedCueSheetType[]
     */
    public function getCueSheetList()
    {
        return $this->cueSheetList;
    }

    /**
     * Sets a new cueSheetList
     *
     * A Composite containing details of one or more CueSheets contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_410\DetailedCueSheetType[] $cueSheetList
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
     * A Composite containing details of one or more Resources.
     *
     * @return \DDEX\ERN\ERN_410\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @param \DDEX\ERN\ERN_410\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DDEX\ERN\ERN_410\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as chapterList
     *
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_410\ChapterListType
     */
    public function getChapterList()
    {
        return $this->chapterList;
    }

    /**
     * Sets a new chapterList
     *
     * A Composite containing details of one or more Chapters contained in Releases for which data is provided in the NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_410\ChapterListType $chapterList
     * @return self
     */
    public function setChapterList(?\DDEX\ERN\ERN_410\ChapterListType $chapterList = null)
    {
        $this->chapterList = $chapterList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_410\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the NewReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_410\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(\DDEX\ERN\ERN_410\ReleaseListType $releaseList)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @return self
     * @param \DDEX\ERN\ERN_410\ReleaseDealType $releaseDeal
     */
    public function addToDealList(\DDEX\ERN\ERN_410\ReleaseDealType $releaseDeal)
    {
        $this->dealList[] = $releaseDeal;
        return $this;
    }

    /**
     * isset dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDealList($index)
    {
        return isset($this->dealList[$index]);
    }

    /**
     * unset dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDealList($index)
    {
        unset($this->dealList[$index]);
    }

    /**
     * Gets as dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @return \DDEX\ERN\ERN_410\ReleaseDealType[]
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A Composite containing details of one or more Deals governing the Usage of the Releases in the Message.
     *
     * @param \DDEX\ERN\ERN_410\ReleaseDealType[] $dealList
     * @return self
     */
    public function setDealList(array $dealList = null)
    {
        $this->dealList = $dealList;
        return $this;
    }

    /**
     * Adds as supplementalDocument
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @return self
     * @param \DDEX\ERN\ERN_410\FileType $supplementalDocument
     */
    public function addToSupplementalDocumentList(\DDEX\ERN\ERN_410\FileType $supplementalDocument)
    {
        $this->supplementalDocumentList[] = $supplementalDocument;
        return $this;
    }

    /**
     * isset supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalDocumentList($index)
    {
        return isset($this->supplementalDocumentList[$index]);
    }

    /**
     * unset supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalDocumentList($index)
    {
        unset($this->supplementalDocumentList[$index]);
    }

    /**
     * Gets as supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @return \DDEX\ERN\ERN_410\FileType[]
     */
    public function getSupplementalDocumentList()
    {
        return $this->supplementalDocumentList;
    }

    /**
     * Sets a new supplementalDocumentList
     *
     * A Composite containing details of one or more XML documents communicated with the Message.
     *
     * @param \DDEX\ERN\ERN_410\FileType[] $supplementalDocumentList
     * @return self
     */
    public function setSupplementalDocumentList(array $supplementalDocumentList = null)
    {
        $this->supplementalDocumentList = $supplementalDocumentList;
        return $this;
    }
}


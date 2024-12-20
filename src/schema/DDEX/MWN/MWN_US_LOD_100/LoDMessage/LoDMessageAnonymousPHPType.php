<?php

namespace DDEX\MWN\MWN_US_LOD_100\LoDMessage;

/**
 * Class representing LoDMessageAnonymousPHPType
 */
class LoDMessageAnonymousPHPType
{
    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the LoDMessage.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkType[] $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseType[] $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\RightShareType[] $rightShareList
     */
    private $rightShareList = null;

    /**
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[] $catalogTransferList
     */
    private $catalogTransferList = null;

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
     * The MessageHeader for the LoDMessage.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the LoDMessage.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_US_LOD_100\MessageHeaderType $messageHeader)
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
     * @param \DDEX\MWN\MWN_US_LOD_100\PartyType $party
     */
    public function addToPartyList(\DDEX\MWN\MWN_US_LOD_100\PartyType $party)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\PartyType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkType $musicalWork
     */
    public function addToWorkList(\DDEX\MWN\MWN_US_LOD_100\MusicalWorkType $musicalWork)
    {
        $this->workList[] = $musicalWork;
        return $this;
    }

    /**
     * isset workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkList($index)
    {
        return isset($this->workList[$index]);
    }

    /**
     * unset workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkList($index)
    {
        unset($this->workList[$index]);
    }

    /**
     * Gets as workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkType[]
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkType[] $workList
     * @return self
     */
    public function setWorkList(array $workList)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWN\MWN_US_LOD_100\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseType $release
     */
    public function addToReleaseList(\DDEX\MWN\MWN_US_LOD_100\ReleaseType $release)
    {
        $this->releaseList[] = $release;
        return $this;
    }

    /**
     * isset releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseList($index)
    {
        return isset($this->releaseList[$index]);
    }

    /**
     * unset releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseList($index)
    {
        unset($this->releaseList[$index]);
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseType[]
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseType[] $releaseList
     * @return self
     */
    public function setReleaseList(array $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as rightShare
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\RightShareType $rightShare
     */
    public function addToRightShareList(\DDEX\MWN\MWN_US_LOD_100\RightShareType $rightShare)
    {
        $this->rightShareList[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareList($index)
    {
        return isset($this->rightShareList[$index]);
    }

    /**
     * unset rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareList($index)
    {
        unset($this->rightShareList[$index]);
    }

    /**
     * Gets as rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\RightShareType[]
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\RightShareType[] $rightShareList
     * @return self
     */
    public function setRightShareList(array $rightShareList)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Adds as catalogTransfer
     *
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType $catalogTransfer
     */
    public function addToCatalogTransferList(\DDEX\MWN\MWN_US_LOD_100\CatalogTransferType $catalogTransfer)
    {
        $this->catalogTransferList[] = $catalogTransfer;
        return $this;
    }

    /**
     * isset catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogTransferList($index)
    {
        return isset($this->catalogTransferList[$index]);
    }

    /**
     * unset catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogTransferList($index)
    {
        unset($this->catalogTransferList[$index]);
    }

    /**
     * Gets as catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[]
     */
    public function getCatalogTransferList()
    {
        return $this->catalogTransferList;
    }

    /**
     * Sets a new catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is communicating as a Letter Of Direction. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[] $catalogTransferList
     * @return self
     */
    public function setCatalogTransferList(array $catalogTransferList)
    {
        $this->catalogTransferList = $catalogTransferList;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LOD_100\LoDConfirmationMessage;

/**
 * Class representing LoDConfirmationMessageAnonymousPHPType
 */
class LoDConfirmationMessageAnonymousPHPType
{
    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the LoDConfirmationMessage.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[] $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ResourceListForConfirmationType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Releases relating to the Resources.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[] $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one or more RightShare transfers that the sender is confirming or disputing to be part of the CatalogTransfer. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard. At least one of the Elements ConfirmedCatalogTransfer and CatalogTransferException needs to be provided.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogTransferListForConfirmationType $catalogTransferList
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
     * The MessageHeader for the LoDConfirmationMessage.
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
     * The MessageHeader for the LoDConfirmationMessage.
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
     * Adds as musicalWork
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType $musicalWork
     */
    public function addToWorkList(\DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType $musicalWork)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\MusicalWorkForConfirmationType[] $workList
     * @return self
     */
    public function setWorkList(array $workList = null)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\ResourceListForConfirmationType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\ResourceListForConfirmationType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWN\MWN_US_LOD_100\ResourceListForConfirmationType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of one or more Releases relating to the Resources.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType $release
     */
    public function addToReleaseList(\DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType $release)
    {
        $this->releaseList[] = $release;
        return $this;
    }

    /**
     * isset releaseList
     *
     * A Composite containing details of one or more Releases relating to the Resources.
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
     * A Composite containing details of one or more Releases relating to the Resources.
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
     * A Composite containing details of one or more Releases relating to the Resources.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[]
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more Releases relating to the Resources.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[] $releaseList
     * @return self
     */
    public function setReleaseList(array $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Gets as catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is confirming or disputing to be part of the CatalogTransfer. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard. At least one of the Elements ConfirmedCatalogTransfer and CatalogTransferException needs to be provided.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogTransferListForConfirmationType
     */
    public function getCatalogTransferList()
    {
        return $this->catalogTransferList;
    }

    /**
     * Sets a new catalogTransferList
     *
     * A Composite containing details of one or more RightShare transfers that the sender is confirming or disputing to be part of the CatalogTransfer. This Composite is included in the Message for the specific case of CatalogTransfers and is used in the context of the Letters of Direction Choreography Standard. At least one of the Elements ConfirmedCatalogTransfer and CatalogTransferException needs to be provided.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferListForConfirmationType $catalogTransferList
     * @return self
     */
    public function setCatalogTransferList(\DDEX\MWN\MWN_US_LOD_100\CatalogTransferListForConfirmationType $catalogTransferList)
    {
        $this->catalogTransferList = $catalogTransferList;
        return $this;
    }
}


<?php

namespace DDEX\CT\CT_100\CatalogTransferMessage;

/**
 * Class representing CatalogTransferMessageAnonymousPHPType
 */
class CatalogTransferMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the CatalogTransferMessage.
     *
     * @var \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @var \DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId
     */
    private $catalogTransferId = null;

    /**
     * A Composite containing details of the RelinquishingRecordCompany.
     *
     * @var \DDEX\CT\CT_100\PartyDescriptorType $relinquishingRecordCompany
     */
    private $relinquishingRecordCompany = null;

    /**
     * A Composite containing details of the AcquiringRecordCompany.
     *
     * @var \DDEX\CT\CT_100\PartyDescriptorType $acquiringRecordCompany
     */
    private $acquiringRecordCompany = null;

    /**
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * The EffectiveTransferDate of the CatalogTransfer.
     *
     * @var string $effectiveTransferDate
     */
    private $effectiveTransferDate = null;

    /**
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
     *
     * @var \DDEX\CT\CT_100\ReleaseType[] $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
     *
     * @var \DDEX\CT\CT_100\ReleaseDealType[] $dealList
     */
    private $dealList = null;

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
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
     * The MessageHeader for the CatalogTransferMessage.
     *
     * @return \DDEX\CT\CT_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the CatalogTransferMessage.
     *
     * @param \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\CT\CT_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @return \DDEX\CT\CT_100\ProprietaryIdType
     */
    public function getCatalogTransferId()
    {
        return $this->catalogTransferId;
    }

    /**
     * Sets a new catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @param \DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId
     * @return self
     */
    public function setCatalogTransferId(\DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId)
    {
        $this->catalogTransferId = $catalogTransferId;
        return $this;
    }

    /**
     * Gets as relinquishingRecordCompany
     *
     * A Composite containing details of the RelinquishingRecordCompany.
     *
     * @return \DDEX\CT\CT_100\PartyDescriptorType
     */
    public function getRelinquishingRecordCompany()
    {
        return $this->relinquishingRecordCompany;
    }

    /**
     * Sets a new relinquishingRecordCompany
     *
     * A Composite containing details of the RelinquishingRecordCompany.
     *
     * @param \DDEX\CT\CT_100\PartyDescriptorType $relinquishingRecordCompany
     * @return self
     */
    public function setRelinquishingRecordCompany(\DDEX\CT\CT_100\PartyDescriptorType $relinquishingRecordCompany)
    {
        $this->relinquishingRecordCompany = $relinquishingRecordCompany;
        return $this;
    }

    /**
     * Gets as acquiringRecordCompany
     *
     * A Composite containing details of the AcquiringRecordCompany.
     *
     * @return \DDEX\CT\CT_100\PartyDescriptorType
     */
    public function getAcquiringRecordCompany()
    {
        return $this->acquiringRecordCompany;
    }

    /**
     * Sets a new acquiringRecordCompany
     *
     * A Composite containing details of the AcquiringRecordCompany.
     *
     * @param \DDEX\CT\CT_100\PartyDescriptorType $acquiringRecordCompany
     * @return self
     */
    public function setAcquiringRecordCompany(\DDEX\CT\CT_100\PartyDescriptorType $acquiringRecordCompany)
    {
        $this->acquiringRecordCompany = $acquiringRecordCompany;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory in which the CatalogTransfer applies. Either this Element or ExcludedTerritory must be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory in which the CatalogTransfer does not apply. Either this Element or Territory must be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Gets as effectiveTransferDate
     *
     * The EffectiveTransferDate of the CatalogTransfer.
     *
     * @return string
     */
    public function getEffectiveTransferDate()
    {
        return $this->effectiveTransferDate;
    }

    /**
     * Sets a new effectiveTransferDate
     *
     * The EffectiveTransferDate of the CatalogTransfer.
     *
     * @param string $effectiveTransferDate
     * @return self
     */
    public function setEffectiveTransferDate($effectiveTransferDate)
    {
        $this->effectiveTransferDate = $effectiveTransferDate;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ReleaseType $release
     */
    public function addToReleaseList(\DDEX\CT\CT_100\ReleaseType $release)
    {
        $this->releaseList[] = $release;
        return $this;
    }

    /**
     * isset releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
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
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
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
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
     *
     * @return \DDEX\CT\CT_100\ReleaseType[]
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more DDEX Releases contained in the CatalogTransfer.
     *
     * @param \DDEX\CT\CT_100\ReleaseType[] $releaseList
     * @return self
     */
    public function setReleaseList(array $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ReleaseDealType $releaseDeal
     */
    public function addToDealList(\DDEX\CT\CT_100\ReleaseDealType $releaseDeal)
    {
        $this->dealList[] = $releaseDeal;
        return $this;
    }

    /**
     * isset dealList
     *
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
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
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
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
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
     *
     * @return \DDEX\CT\CT_100\ReleaseDealType[]
     */
    public function getDealList()
    {
        return $this->dealList;
    }

    /**
     * Sets a new dealList
     *
     * A Composite containing details of one or more Deals governing the usage of the Releases in the Message. If no DealList is provided, this does not mean that the Releases should be taken down. Instead it means that all existing Deals (as provided by the RelinquishingRecordCompany) will remain active.
     *
     * @param \DDEX\CT\CT_100\ReleaseDealType[] $dealList
     * @return self
     */
    public function setDealList(array $dealList = null)
    {
        $this->dealList = $dealList;
        return $this;
    }
}


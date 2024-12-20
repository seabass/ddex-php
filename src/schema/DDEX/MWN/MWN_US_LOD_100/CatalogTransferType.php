<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing CatalogTransferType
 *
 * A Composite containing details of a CatalogTransfer.
 * XSD Type: CatalogTransfer
 */
class CatalogTransferType
{
    /**
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     */
    private $catalogTransferId = null;

    /**
     * A Type of the CatalogTransfer.
     *
     * @var string $catalogTransferType
     */
    private $catalogTransferType = null;

    /**
     * A Composite containing details of the CatalogName.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogNameType[] $catalogName
     */
    private $catalogName = [
        
    ];

    /**
     * A Reference for the catalog's RelinquishingPublisher (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $relinquishingPublisher
     */
    private $relinquishingPublisher = null;

    /**
     * A Composite collating the RightShares being transferred in the form of RightShares before the transfer and RightShares after the transfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareListType $transferredRightShareList
     */
    private $transferredRightShareList = null;

    /**
     * A Composite containing details of conditions and/or limitations for the catalog transfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ConditionWithSupplementalDocumentType $condition
     */
    private $condition = null;

    /**
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @var string[] $restrictingResourceList
     */
    private $restrictingResourceList = null;

    /**
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @var string[] $restrictingReleaseList
     */
    private $restrictingReleaseList = null;

    /**
     * A free-text Description of, or Comment on, the restriction of the CatalogTransfer using RestrictingResourceList or RestrictingReleaseList.
     *
     * @var string $restrictionDescription
     */
    private $restrictionDescription = null;

    /**
     * Gets as catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     * @return self
     */
    public function setCatalogTransferId(\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId)
    {
        $this->catalogTransferId = $catalogTransferId;
        return $this;
    }

    /**
     * Gets as catalogTransferType
     *
     * A Type of the CatalogTransfer.
     *
     * @return string
     */
    public function getCatalogTransferType()
    {
        return $this->catalogTransferType;
    }

    /**
     * Sets a new catalogTransferType
     *
     * A Type of the CatalogTransfer.
     *
     * @param string $catalogTransferType
     * @return self
     */
    public function setCatalogTransferType($catalogTransferType)
    {
        $this->catalogTransferType = $catalogTransferType;
        return $this;
    }

    /**
     * Adds as catalogName
     *
     * A Composite containing details of the CatalogName.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogNameType $catalogName
     */
    public function addToCatalogName(\DDEX\MWN\MWN_US_LOD_100\CatalogNameType $catalogName)
    {
        $this->catalogName[] = $catalogName;
        return $this;
    }

    /**
     * isset catalogName
     *
     * A Composite containing details of the CatalogName.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogName($index)
    {
        return isset($this->catalogName[$index]);
    }

    /**
     * unset catalogName
     *
     * A Composite containing details of the CatalogName.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogName($index)
    {
        unset($this->catalogName[$index]);
    }

    /**
     * Gets as catalogName
     *
     * A Composite containing details of the CatalogName.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogNameType[]
     */
    public function getCatalogName()
    {
        return $this->catalogName;
    }

    /**
     * Sets a new catalogName
     *
     * A Composite containing details of the CatalogName.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogNameType[] $catalogName
     * @return self
     */
    public function setCatalogName(array $catalogName)
    {
        $this->catalogName = $catalogName;
        return $this;
    }

    /**
     * Gets as relinquishingPublisher
     *
     * A Reference for the catalog's RelinquishingPublisher (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getRelinquishingPublisher()
    {
        return $this->relinquishingPublisher;
    }

    /**
     * Sets a new relinquishingPublisher
     *
     * A Reference for the catalog's RelinquishingPublisher (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $relinquishingPublisher
     * @return self
     */
    public function setRelinquishingPublisher($relinquishingPublisher)
    {
        $this->relinquishingPublisher = $relinquishingPublisher;
        return $this;
    }

    /**
     * Gets as transferredRightShareList
     *
     * A Composite collating the RightShares being transferred in the form of RightShares before the transfer and RightShares after the transfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareListType
     */
    public function getTransferredRightShareList()
    {
        return $this->transferredRightShareList;
    }

    /**
     * Sets a new transferredRightShareList
     *
     * A Composite collating the RightShares being transferred in the form of RightShares before the transfer and RightShares after the transfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareListType $transferredRightShareList
     * @return self
     */
    public function setTransferredRightShareList(\DDEX\MWN\MWN_US_LOD_100\TransferredRightShareListType $transferredRightShareList)
    {
        $this->transferredRightShareList = $transferredRightShareList;
        return $this;
    }

    /**
     * Gets as condition
     *
     * A Composite containing details of conditions and/or limitations for the catalog transfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ConditionWithSupplementalDocumentType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of conditions and/or limitations for the catalog transfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ConditionWithSupplementalDocumentType $condition
     * @return self
     */
    public function setCondition(\DDEX\MWN\MWN_US_LOD_100\ConditionWithSupplementalDocumentType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as catalogResourceReference
     *
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @return self
     * @param string $catalogResourceReference
     */
    public function addToRestrictingResourceList($catalogResourceReference)
    {
        $this->restrictingResourceList[] = $catalogResourceReference;
        return $this;
    }

    /**
     * isset restrictingResourceList
     *
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictingResourceList($index)
    {
        return isset($this->restrictingResourceList[$index]);
    }

    /**
     * unset restrictingResourceList
     *
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictingResourceList($index)
    {
        unset($this->restrictingResourceList[$index]);
    }

    /**
     * Gets as restrictingResourceList
     *
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @return string[]
     */
    public function getRestrictingResourceList()
    {
        return $this->restrictingResourceList;
    }

    /**
     * Sets a new restrictingResourceList
     *
     * A Composite containing details of one or more Resources to which the CatalogTransfer is restricted (i.e. all other Resources contained in the catalog are not included in the transfer).
     *
     * @param string $restrictingResourceList
     * @return self
     */
    public function setRestrictingResourceList(array $restrictingResourceList = null)
    {
        $this->restrictingResourceList = $restrictingResourceList;
        return $this;
    }

    /**
     * Adds as catalogReleaseReference
     *
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @return self
     * @param string $catalogReleaseReference
     */
    public function addToRestrictingReleaseList($catalogReleaseReference)
    {
        $this->restrictingReleaseList[] = $catalogReleaseReference;
        return $this;
    }

    /**
     * isset restrictingReleaseList
     *
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestrictingReleaseList($index)
    {
        return isset($this->restrictingReleaseList[$index]);
    }

    /**
     * unset restrictingReleaseList
     *
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestrictingReleaseList($index)
    {
        unset($this->restrictingReleaseList[$index]);
    }

    /**
     * Gets as restrictingReleaseList
     *
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @return string[]
     */
    public function getRestrictingReleaseList()
    {
        return $this->restrictingReleaseList;
    }

    /**
     * Sets a new restrictingReleaseList
     *
     * A Composite containing details of one or more Releases to which the CatalogTransfer is restricted (i.e. all other Releases contained in the catalog are not included in the transfer).
     *
     * @param string $restrictingReleaseList
     * @return self
     */
    public function setRestrictingReleaseList(array $restrictingReleaseList = null)
    {
        $this->restrictingReleaseList = $restrictingReleaseList;
        return $this;
    }

    /**
     * Gets as restrictionDescription
     *
     * A free-text Description of, or Comment on, the restriction of the CatalogTransfer using RestrictingResourceList or RestrictingReleaseList.
     *
     * @return string
     */
    public function getRestrictionDescription()
    {
        return $this->restrictionDescription;
    }

    /**
     * Sets a new restrictionDescription
     *
     * A free-text Description of, or Comment on, the restriction of the CatalogTransfer using RestrictingResourceList or RestrictingReleaseList.
     *
     * @param string $restrictionDescription
     * @return self
     */
    public function setRestrictionDescription($restrictionDescription)
    {
        $this->restrictionDescription = $restrictionDescription;
        return $this;
    }
}


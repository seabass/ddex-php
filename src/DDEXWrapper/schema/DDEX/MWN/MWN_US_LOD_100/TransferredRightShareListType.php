<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing TransferredRightShareListType
 *
 * A Composite containing details of one or more transferred RightShares.
 * XSD Type: TransferredRightShareList
 */
class TransferredRightShareListType
{
    /**
     * A Flag indicating whether the CatalogTransfer is partial (=true) or not (=false). If this Flag is set to true, the list of RightShares is a sub-set of all the catalog's RightShares and defines the Works that are actually transferred. If this Flag is set to false, the full Catalog is transferred, even if the list of RightShares is only a sub-set of the catalog's RightShares.
     *
     * @var bool $isPartial
     */
    private $isPartial = null;

    /**
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareType[] $transferredRightShare
     */
    private $transferredRightShare = [
        
    ];

    /**
     * Gets as isPartial
     *
     * A Flag indicating whether the CatalogTransfer is partial (=true) or not (=false). If this Flag is set to true, the list of RightShares is a sub-set of all the catalog's RightShares and defines the Works that are actually transferred. If this Flag is set to false, the full Catalog is transferred, even if the list of RightShares is only a sub-set of the catalog's RightShares.
     *
     * @return bool
     */
    public function getIsPartial()
    {
        return $this->isPartial;
    }

    /**
     * Sets a new isPartial
     *
     * A Flag indicating whether the CatalogTransfer is partial (=true) or not (=false). If this Flag is set to true, the list of RightShares is a sub-set of all the catalog's RightShares and defines the Works that are actually transferred. If this Flag is set to false, the full Catalog is transferred, even if the list of RightShares is only a sub-set of the catalog's RightShares.
     *
     * @param bool $isPartial
     * @return self
     */
    public function setIsPartial($isPartial)
    {
        $this->isPartial = $isPartial;
        return $this;
    }

    /**
     * Adds as transferredRightShare
     *
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareType $transferredRightShare
     */
    public function addToTransferredRightShare(\DDEX\MWN\MWN_US_LOD_100\TransferredRightShareType $transferredRightShare)
    {
        $this->transferredRightShare[] = $transferredRightShare;
        return $this;
    }

    /**
     * isset transferredRightShare
     *
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferredRightShare($index)
    {
        return isset($this->transferredRightShare[$index]);
    }

    /**
     * unset transferredRightShare
     *
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferredRightShare($index)
    {
        unset($this->transferredRightShare[$index]);
    }

    /**
     * Gets as transferredRightShare
     *
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareType[]
     */
    public function getTransferredRightShare()
    {
        return $this->transferredRightShare;
    }

    /**
     * Sets a new transferredRightShare
     *
     * A Composite containing details of RightShares before and after a transfer of rights.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\TransferredRightShareType[] $transferredRightShare
     * @return self
     */
    public function setTransferredRightShare(array $transferredRightShare)
    {
        $this->transferredRightShare = $transferredRightShare;
        return $this;
    }
}


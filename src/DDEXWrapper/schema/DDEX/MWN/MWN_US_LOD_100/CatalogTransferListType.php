<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing CatalogTransferListType
 *
 * A Composite containing details of one or more CatalogTransfers.
 * XSD Type: CatalogTransferList
 */
class CatalogTransferListType
{
    /**
     * A Composite containing details of a CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[] $catalogTransfer
     */
    private $catalogTransfer = [
        
    ];

    /**
     * Adds as catalogTransfer
     *
     * A Composite containing details of a CatalogTransfer.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType $catalogTransfer
     */
    public function addToCatalogTransfer(\DDEX\MWN\MWN_US_LOD_100\CatalogTransferType $catalogTransfer)
    {
        $this->catalogTransfer[] = $catalogTransfer;
        return $this;
    }

    /**
     * isset catalogTransfer
     *
     * A Composite containing details of a CatalogTransfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogTransfer($index)
    {
        return isset($this->catalogTransfer[$index]);
    }

    /**
     * unset catalogTransfer
     *
     * A Composite containing details of a CatalogTransfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogTransfer($index)
    {
        unset($this->catalogTransfer[$index]);
    }

    /**
     * Gets as catalogTransfer
     *
     * A Composite containing details of a CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[]
     */
    public function getCatalogTransfer()
    {
        return $this->catalogTransfer;
    }

    /**
     * Sets a new catalogTransfer
     *
     * A Composite containing details of a CatalogTransfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferType[] $catalogTransfer
     * @return self
     */
    public function setCatalogTransfer(array $catalogTransfer)
    {
        $this->catalogTransfer = $catalogTransfer;
        return $this;
    }
}


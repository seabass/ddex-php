<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing CatalogTransferListForConfirmationType
 *
 * A Composite containing details of one or more CatalogTransfers.
 * Explanatory Note: This Composite is named CatalogTransferListForConfirmation to disambiguate it from the basic CatalogTransferList Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: CatalogTransferListForConfirmation
 */
class CatalogTransferListForConfirmationType
{
    /**
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ConfirmedCatalogTransferType[] $confirmedCatalogTransfer
     */
    private $confirmedCatalogTransfer = [
        
    ];

    /**
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogTransferExceptionType[] $catalogTransferException
     */
    private $catalogTransferException = [
        
    ];

    /**
     * Adds as confirmedCatalogTransfer
     *
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ConfirmedCatalogTransferType $confirmedCatalogTransfer
     */
    public function addToConfirmedCatalogTransfer(\DDEX\MWN\MWN_US_LOD_100\ConfirmedCatalogTransferType $confirmedCatalogTransfer)
    {
        $this->confirmedCatalogTransfer[] = $confirmedCatalogTransfer;
        return $this;
    }

    /**
     * isset confirmedCatalogTransfer
     *
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfirmedCatalogTransfer($index)
    {
        return isset($this->confirmedCatalogTransfer[$index]);
    }

    /**
     * unset confirmedCatalogTransfer
     *
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfirmedCatalogTransfer($index)
    {
        unset($this->confirmedCatalogTransfer[$index]);
    }

    /**
     * Gets as confirmedCatalogTransfer
     *
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ConfirmedCatalogTransferType[]
     */
    public function getConfirmedCatalogTransfer()
    {
        return $this->confirmedCatalogTransfer;
    }

    /**
     * Sets a new confirmedCatalogTransfer
     *
     * A Composite containing details of a confirmed CatalogTransfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ConfirmedCatalogTransferType[] $confirmedCatalogTransfer
     * @return self
     */
    public function setConfirmedCatalogTransfer(array $confirmedCatalogTransfer = null)
    {
        $this->confirmedCatalogTransfer = $confirmedCatalogTransfer;
        return $this;
    }

    /**
     * Adds as catalogTransferException
     *
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferExceptionType $catalogTransferException
     */
    public function addToCatalogTransferException(\DDEX\MWN\MWN_US_LOD_100\CatalogTransferExceptionType $catalogTransferException)
    {
        $this->catalogTransferException[] = $catalogTransferException;
        return $this;
    }

    /**
     * isset catalogTransferException
     *
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogTransferException($index)
    {
        return isset($this->catalogTransferException[$index]);
    }

    /**
     * unset catalogTransferException
     *
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogTransferException($index)
    {
        unset($this->catalogTransferException[$index]);
    }

    /**
     * Gets as catalogTransferException
     *
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogTransferExceptionType[]
     */
    public function getCatalogTransferException()
    {
        return $this->catalogTransferException;
    }

    /**
     * Sets a new catalogTransferException
     *
     * A Composite containing details of a CatalogTransfer that is not confirmed.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogTransferExceptionType[] $catalogTransferException
     * @return self
     */
    public function setCatalogTransferException(array $catalogTransferException = null)
    {
        $this->catalogTransferException = $catalogTransferException;
        return $this;
    }
}


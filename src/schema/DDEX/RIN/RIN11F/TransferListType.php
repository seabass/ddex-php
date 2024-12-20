<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing TransferListType
 *
 * A Composite containing details of one or more Transfers.
 * XSD Type: TransferList
 */
class TransferListType
{
    /**
     * A Composite containing details of a Transfer.
     *
     * @var \DDEX\RIN\RIN11F\TransferType[] $transfer
     */
    private $transfer = [
        
    ];

    /**
     * Adds as transfer
     *
     * A Composite containing details of a Transfer.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\TransferType $transfer
     */
    public function addToTransfer(\DDEX\RIN\RIN11F\TransferType $transfer)
    {
        $this->transfer[] = $transfer;
        return $this;
    }

    /**
     * isset transfer
     *
     * A Composite containing details of a Transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransfer($index)
    {
        return isset($this->transfer[$index]);
    }

    /**
     * unset transfer
     *
     * A Composite containing details of a Transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransfer($index)
    {
        unset($this->transfer[$index]);
    }

    /**
     * Gets as transfer
     *
     * A Composite containing details of a Transfer.
     *
     * @return \DDEX\RIN\RIN11F\TransferType[]
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * Sets a new transfer
     *
     * A Composite containing details of a Transfer.
     *
     * @param \DDEX\RIN\RIN11F\TransferType[] $transfer
     * @return self
     */
    public function setTransfer(array $transfer)
    {
        $this->transfer = $transfer;
        return $this;
    }
}


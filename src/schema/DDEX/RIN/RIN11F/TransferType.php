<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing TransferType
 *
 * A Composite containing details of a Transfer.
 * XSD Type: Transfer
 */
class TransferType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @var \DDEX\RIN\RIN11F\ProprietaryIdType[] $transferId
     */
    private $transferId = [
        
    ];

    /**
     * The Identifier (specific to the File) of the Transfer. This is a LocalMusicalWorkAnchor starting with the letter N.
     *
     * @var string $transferReference
     */
    private $transferReference = null;

    /**
     * The Type of the Transfer.
     *
     * @var string $transferType
     */
    private $transferType = null;

    /**
     * A Composite containing a human-readable Comment about the Transfer.
     *
     * @var \DDEX\RIN\RIN11F\CommentType $comment
     */
    private $comment = null;

    /**
     * A Reference for Equipment used for the Transfer (specific to this File). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @var string $transferEquipmentReference
     */
    private $transferEquipmentReference = null;

    /**
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @var string[] $transferSessionReference
     */
    private $transferSessionReference = [
        
    ];

    /**
     * A Composite containing details of a source of the Transfer.
     *
     * @var \DDEX\RIN\RIN11F\TransferSourceType[] $transferSource
     */
    private $transferSource = [
        
    ];

    /**
     * A Composite containing details of a destination of the Transfer.
     *
     * @var \DDEX\RIN\RIN11F\TransferDestinationType[] $transferDestination
     */
    private $transferDestination = [
        
    ];

    /**
     * Adds as transferId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType $transferId
     */
    public function addToTransferId(\DDEX\RIN\RIN11F\ProprietaryIdType $transferId)
    {
        $this->transferId[] = $transferId;
        return $this;
    }

    /**
     * isset transferId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferId($index)
    {
        return isset($this->transferId[$index]);
    }

    /**
     * unset transferId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferId($index)
    {
        unset($this->transferId[$index]);
    }

    /**
     * Gets as transferId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @return \DDEX\RIN\RIN11F\ProprietaryIdType[]
     */
    public function getTransferId()
    {
        return $this->transferId;
    }

    /**
     * Sets a new transferId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Transfer.
     *
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType[] $transferId
     * @return self
     */
    public function setTransferId(array $transferId = null)
    {
        $this->transferId = $transferId;
        return $this;
    }

    /**
     * Gets as transferReference
     *
     * The Identifier (specific to the File) of the Transfer. This is a LocalMusicalWorkAnchor starting with the letter N.
     *
     * @return string
     */
    public function getTransferReference()
    {
        return $this->transferReference;
    }

    /**
     * Sets a new transferReference
     *
     * The Identifier (specific to the File) of the Transfer. This is a LocalMusicalWorkAnchor starting with the letter N.
     *
     * @param string $transferReference
     * @return self
     */
    public function setTransferReference($transferReference)
    {
        $this->transferReference = $transferReference;
        return $this;
    }

    /**
     * Gets as transferType
     *
     * The Type of the Transfer.
     *
     * @return string
     */
    public function getTransferType()
    {
        return $this->transferType;
    }

    /**
     * Sets a new transferType
     *
     * The Type of the Transfer.
     *
     * @param string $transferType
     * @return self
     */
    public function setTransferType($transferType)
    {
        $this->transferType = $transferType;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Transfer.
     *
     * @return \DDEX\RIN\RIN11F\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Transfer.
     *
     * @param \DDEX\RIN\RIN11F\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN11F\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as transferEquipmentReference
     *
     * A Reference for Equipment used for the Transfer (specific to this File). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return string
     */
    public function getTransferEquipmentReference()
    {
        return $this->transferEquipmentReference;
    }

    /**
     * Sets a new transferEquipmentReference
     *
     * A Reference for Equipment used for the Transfer (specific to this File). This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param string $transferEquipmentReference
     * @return self
     */
    public function setTransferEquipmentReference($transferEquipmentReference)
    {
        $this->transferEquipmentReference = $transferEquipmentReference;
        return $this;
    }

    /**
     * Adds as transferSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return self
     * @param string $transferSessionReference
     */
    public function addToTransferSessionReference($transferSessionReference)
    {
        $this->transferSessionReference[] = $transferSessionReference;
        return $this;
    }

    /**
     * isset transferSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferSessionReference($index)
    {
        return isset($this->transferSessionReference[$index]);
    }

    /**
     * unset transferSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferSessionReference($index)
    {
        unset($this->transferSessionReference[$index]);
    }

    /**
     * Gets as transferSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @return string[]
     */
    public function getTransferSessionReference()
    {
        return $this->transferSessionReference;
    }

    /**
     * Sets a new transferSessionReference
     *
     * A Reference for a Session (specific to the File). This is a LocalSessionAnchorReference starting with the letter O.
     *
     * @param string $transferSessionReference
     * @return self
     */
    public function setTransferSessionReference(array $transferSessionReference)
    {
        $this->transferSessionReference = $transferSessionReference;
        return $this;
    }

    /**
     * Adds as transferSource
     *
     * A Composite containing details of a source of the Transfer.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\TransferSourceType $transferSource
     */
    public function addToTransferSource(\DDEX\RIN\RIN11F\TransferSourceType $transferSource)
    {
        $this->transferSource[] = $transferSource;
        return $this;
    }

    /**
     * isset transferSource
     *
     * A Composite containing details of a source of the Transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferSource($index)
    {
        return isset($this->transferSource[$index]);
    }

    /**
     * unset transferSource
     *
     * A Composite containing details of a source of the Transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferSource($index)
    {
        unset($this->transferSource[$index]);
    }

    /**
     * Gets as transferSource
     *
     * A Composite containing details of a source of the Transfer.
     *
     * @return \DDEX\RIN\RIN11F\TransferSourceType[]
     */
    public function getTransferSource()
    {
        return $this->transferSource;
    }

    /**
     * Sets a new transferSource
     *
     * A Composite containing details of a source of the Transfer.
     *
     * @param \DDEX\RIN\RIN11F\TransferSourceType[] $transferSource
     * @return self
     */
    public function setTransferSource(array $transferSource)
    {
        $this->transferSource = $transferSource;
        return $this;
    }

    /**
     * Adds as transferDestination
     *
     * A Composite containing details of a destination of the Transfer.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\TransferDestinationType $transferDestination
     */
    public function addToTransferDestination(\DDEX\RIN\RIN11F\TransferDestinationType $transferDestination)
    {
        $this->transferDestination[] = $transferDestination;
        return $this;
    }

    /**
     * isset transferDestination
     *
     * A Composite containing details of a destination of the Transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferDestination($index)
    {
        return isset($this->transferDestination[$index]);
    }

    /**
     * unset transferDestination
     *
     * A Composite containing details of a destination of the Transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferDestination($index)
    {
        unset($this->transferDestination[$index]);
    }

    /**
     * Gets as transferDestination
     *
     * A Composite containing details of a destination of the Transfer.
     *
     * @return \DDEX\RIN\RIN11F\TransferDestinationType[]
     */
    public function getTransferDestination()
    {
        return $this->transferDestination;
    }

    /**
     * Sets a new transferDestination
     *
     * A Composite containing details of a destination of the Transfer.
     *
     * @param \DDEX\RIN\RIN11F\TransferDestinationType[] $transferDestination
     * @return self
     */
    public function setTransferDestination(array $transferDestination)
    {
        $this->transferDestination = $transferDestination;
        return $this;
    }
}


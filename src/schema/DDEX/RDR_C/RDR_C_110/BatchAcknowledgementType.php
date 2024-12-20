<?php

namespace DDEX\RDR_C\RDR_C_110;

/**
 * Class representing BatchAcknowledgementType
 *
 * A Composite containing details of an Acknowledgement for a Batch.
 * XSD Type: BatchAcknowledgement
 */
class BatchAcknowledgementType
{
    /**
     * An Identifier of the Batch.
     *
     * @var string $batchId
     */
    private $batchId = null;

    /**
     * A Composite containing details of the Batch Status.
     *
     * @var \DDEX\RDR_C\RDR_C_110\BatchStatusType $batchStatus
     */
    private $batchStatus = null;

    /**
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @var \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[] $messageAcknowledgement
     */
    private $messageAcknowledgement = [
        
    ];

    /**
     * Gets as batchId
     *
     * An Identifier of the Batch.
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->batchId;
    }

    /**
     * Sets a new batchId
     *
     * An Identifier of the Batch.
     *
     * @param string $batchId
     * @return self
     */
    public function setBatchId($batchId)
    {
        $this->batchId = $batchId;
        return $this;
    }

    /**
     * Gets as batchStatus
     *
     * A Composite containing details of the Batch Status.
     *
     * @return \DDEX\RDR_C\RDR_C_110\BatchStatusType
     */
    public function getBatchStatus()
    {
        return $this->batchStatus;
    }

    /**
     * Sets a new batchStatus
     *
     * A Composite containing details of the Batch Status.
     *
     * @param \DDEX\RDR_C\RDR_C_110\BatchStatusType $batchStatus
     * @return self
     */
    public function setBatchStatus(\DDEX\RDR_C\RDR_C_110\BatchStatusType $batchStatus)
    {
        $this->batchStatus = $batchStatus;
        return $this;
    }

    /**
     * Adds as messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @return self
     * @param \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType $messageAcknowledgement
     */
    public function addToMessageAcknowledgement(\DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType $messageAcknowledgement)
    {
        $this->messageAcknowledgement[] = $messageAcknowledgement;
        return $this;
    }

    /**
     * isset messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageAcknowledgement($index)
    {
        return isset($this->messageAcknowledgement[$index]);
    }

    /**
     * unset messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageAcknowledgement($index)
    {
        unset($this->messageAcknowledgement[$index]);
    }

    /**
     * Gets as messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @return \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[]
     */
    public function getMessageAcknowledgement()
    {
        return $this->messageAcknowledgement;
    }

    /**
     * Sets a new messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message in the Batch.
     *
     * @param \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[] $messageAcknowledgement
     * @return self
     */
    public function setMessageAcknowledgement(array $messageAcknowledgement = null)
    {
        $this->messageAcknowledgement = $messageAcknowledgement;
        return $this;
    }
}


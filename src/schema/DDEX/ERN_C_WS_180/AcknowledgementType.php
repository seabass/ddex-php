<?php

namespace DDEX\ERN\ERN_C_WS_180;

/**
 * Class representing AcknowledgementType
 *
 * A Composite containing details of an acknowledgement.
 * XSD Type: Acknowledgement
 */
class AcknowledgementType
{
    /**
     * The Type of Message.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * An Identifier of the Batch.
     *
     * @var string $batchId
     */
    private $batchId = null;

    /**
     * An Identifier of the Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * A Composite containing details of the Message Status.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\MessageStatusType[] $messageStatus
     */
    private $messageStatus = [
        
    ];

    /**
     * Gets as messageType
     *
     * The Type of Message.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * The Type of Message.
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

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
     * Gets as messageId
     *
     * An Identifier of the Message.
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Sets a new messageId
     *
     * An Identifier of the Message.
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Adds as messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\MessageStatusType $messageStatus
     */
    public function addToMessageStatus(\DDEX\ERN\ERN_C_WS_180\MessageStatusType $messageStatus)
    {
        $this->messageStatus[] = $messageStatus;
        return $this;
    }

    /**
     * isset messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageStatus($index)
    {
        return isset($this->messageStatus[$index]);
    }

    /**
     * unset messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageStatus($index)
    {
        unset($this->messageStatus[$index]);
    }

    /**
     * Gets as messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\MessageStatusType[]
     */
    public function getMessageStatus()
    {
        return $this->messageStatus;
    }

    /**
     * Sets a new messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\MessageStatusType[] $messageStatus
     * @return self
     */
    public function setMessageStatus(array $messageStatus)
    {
        $this->messageStatus = $messageStatus;
        return $this;
    }
}


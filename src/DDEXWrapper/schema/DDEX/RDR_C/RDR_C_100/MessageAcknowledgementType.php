<?php

namespace DDEX\RDR_C\RDR_C_100;

/**
 * Class representing MessageAcknowledgementType
 *
 * A Composite containing details of an Acknowledgement for a Message.
 * XSD Type: MessageAcknowledgement
 */
class MessageAcknowledgementType
{
    /**
     * The Type of Message.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * An Identifier of the Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * A Composite containing details of the Message Status.
     *
     * @var \DDEX\RDR_C\RDR_C_100\MessageStatusType $messageStatus
     */
    private $messageStatus = null;

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
     * Gets as messageStatus
     *
     * A Composite containing details of the Message Status.
     *
     * @return \DDEX\RDR_C\RDR_C_100\MessageStatusType
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
     * @param \DDEX\RDR_C\RDR_C_100\MessageStatusType $messageStatus
     * @return self
     */
    public function setMessageStatus(\DDEX\RDR_C\RDR_C_100\MessageStatusType $messageStatus)
    {
        $this->messageStatus = $messageStatus;
        return $this;
    }
}


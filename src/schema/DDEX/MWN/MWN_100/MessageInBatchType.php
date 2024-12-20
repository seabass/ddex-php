<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing MessageInBatchType
 *
 * A Composite containing details of a Electronic Musical Work Notification Message in a Batch.
 * XSD Type: MessageInBatch
 */
class MessageInBatchType
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
     * A URL of the Message.
     *
     * @var string $uRL
     */
    private $uRL = null;

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
     * Gets as uRL
     *
     * A URL of the Message.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL of the Message.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }
}


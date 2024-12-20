<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing MessageInBatchType
 *
 * A Composite containing details of a Message in a Batch.
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
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @var string $signature
     */
    private $signature = null;

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

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\MWN\MWN_US_LIC_101\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @param string $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }
}


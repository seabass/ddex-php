<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing FtpMessageHeaderType
 *
 * A Composite placed at the beginning of each Message providing information about the Message such as MessageSender, MessageRecipient and a Message creation time stamp.
 * XSD Type: FtpMessageHeader
 */
class FtpMessageHeaderType
{
    /**
     * A Composite containing details of the MessageSender.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageSender
     */
    private $messageSender = null;

    /**
     * A Composite containing details of the MessageRecipient.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageRecipient
     */
    private $messageRecipient = null;

    /**
     * The DateTime on which the Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $messageCreatedDateTime
     */
    private $messageCreatedDateTime = null;

    /**
     * A Composite containing a HashSum and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\DdexDigitalSignatureType $signature
     */
    private $signature = null;

    /**
     * Gets as messageSender
     *
     * A Composite containing details of the MessageSender.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType
     */
    public function getMessageSender()
    {
        return $this->messageSender;
    }

    /**
     * Sets a new messageSender
     *
     * A Composite containing details of the MessageSender.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageSender
     * @return self
     */
    public function setMessageSender(\DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageSender)
    {
        $this->messageSender = $messageSender;
        return $this;
    }

    /**
     * Gets as messageRecipient
     *
     * A Composite containing details of the MessageRecipient.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType
     */
    public function getMessageRecipient()
    {
        return $this->messageRecipient;
    }

    /**
     * Sets a new messageRecipient
     *
     * A Composite containing details of the MessageRecipient.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageRecipient
     * @return self
     */
    public function setMessageRecipient(\DDEX\MWN\MWN_US_LIC_100\MessagingPartyType $messageRecipient)
    {
        $this->messageRecipient = $messageRecipient;
        return $this;
    }

    /**
     * Gets as messageCreatedDateTime
     *
     * The DateTime on which the Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getMessageCreatedDateTime()
    {
        return $this->messageCreatedDateTime;
    }

    /**
     * Sets a new messageCreatedDateTime
     *
     * The DateTime on which the Message was created (the only allowed format is ISO 8601:2004: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $messageCreatedDateTime
     * @return self
     */
    public function setMessageCreatedDateTime(\DateTime $messageCreatedDateTime)
    {
        $this->messageCreatedDateTime = $messageCreatedDateTime;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum and information about the algorithm with which it has been generated.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\MWN\MWN_US_LIC_100\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\DdexDigitalSignatureType
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
     * @param \DDEX\MWN\MWN_US_LIC_100\DdexDigitalSignatureType $signature
     * @return self
     */
    public function setSignature(?\DDEX\MWN\MWN_US_LIC_100\DdexDigitalSignatureType $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}


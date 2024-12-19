<?php

namespace DDEX\RDR_C\RDR_C_110;

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
     * @var \DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageSender
     */
    private $messageSender = null;

    /**
     * A Composite containing details of the MessageRecipient.
     *
     * @var \DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageRecipient
     */
    private $messageRecipient = null;

    /**
     * The DateTime on which the Message was created (the only allowed format is RFC 3339: YYYY-MM-DDThh:mm:ssTZD, where TZD stands for time zone designator, which can be the letter Z or an offset from UTC in the format +hh:mm or -hh:mm).
     *
     * @var \DateTime $messageCreatedDateTime
     */
    private $messageCreatedDateTime = null;

    /**
     * A Composite containing a hash sum and information about the Algorithm with which it has been generated.
     *
     * @var \DDEX\RDR_C\RDR_C_110\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @var \DDEX\RDR_C\RDR_C_110\DdexDigitalSignatureType $signature
     */
    private $signature = null;

    /**
     * Gets as messageSender
     *
     * A Composite containing details of the MessageSender.
     *
     * @return \DDEX\RDR_C\RDR_C_110\MessagingPartyType
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
     * @param \DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageSender
     * @return self
     */
    public function setMessageSender(\DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageSender)
    {
        $this->messageSender = $messageSender;
        return $this;
    }

    /**
     * Gets as messageRecipient
     *
     * A Composite containing details of the MessageRecipient.
     *
     * @return \DDEX\RDR_C\RDR_C_110\MessagingPartyType
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
     * @param \DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageRecipient
     * @return self
     */
    public function setMessageRecipient(\DDEX\RDR_C\RDR_C_110\MessagingPartyType $messageRecipient)
    {
        $this->messageRecipient = $messageRecipient;
        return $this;
    }

    /**
     * Gets as messageCreatedDateTime
     *
     * The DateTime on which the Message was created (the only allowed format is RFC 3339: YYYY-MM-DDThh:mm:ssTZD, where TZD stands for time zone designator, which can be the letter Z or an offset from UTC in the format +hh:mm or -hh:mm).
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
     * The DateTime on which the Message was created (the only allowed format is RFC 3339: YYYY-MM-DDThh:mm:ssTZD, where TZD stands for time zone designator, which can be the letter Z or an offset from UTC in the format +hh:mm or -hh:mm).
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
     * A Composite containing a hash sum and information about the Algorithm with which it has been generated.
     *
     * @return \DDEX\RDR_C\RDR_C_110\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a hash sum and information about the Algorithm with which it has been generated.
     *
     * @param \DDEX\RDR_C\RDR_C_110\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\RDR_C\RDR_C_110\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return \DDEX\RDR_C\RDR_C_110\DdexDigitalSignatureType
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
     * @param \DDEX\RDR_C\RDR_C_110\DdexDigitalSignatureType $signature
     * @return self
     */
    public function setSignature(?\DDEX\RDR_C\RDR_C_110\DdexDigitalSignatureType $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}


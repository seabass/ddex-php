<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing BasicFtpMessageHeaderType
 *
 * A Composite placed at the beginning of each FtpAcknowledgementMessage providing information about the FtpAcknowledgementMessage such as MessageSender, MessageRecipient and a FtpAcknowledgementMessage creation time stamp.
 * XSD Type: BasicFtpMessageHeader
 */
class BasicFtpMessageHeaderType
{
    /**
     * A Composite containing details of the MessageSender.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageSender
     */
    private $messageSender = null;

    /**
     * A Composite containing details of the MessageRecipient.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageRecipient
     */
    private $messageRecipient = null;

    /**
     * The DateTime on which the Message was created (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $messageCreatedDateTime
     */
    private $messageCreatedDateTime = null;

    /**
     * Gets as messageSender
     *
     * A Composite containing details of the MessageSender.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageSender
     * @return self
     */
    public function setMessageSender(\DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageSender)
    {
        $this->messageSender = $messageSender;
        return $this;
    }

    /**
     * Gets as messageRecipient
     *
     * A Composite containing details of the MessageRecipient.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageRecipient
     * @return self
     */
    public function setMessageRecipient(\DDEX\MWN\MWN_US_LOD_100\MessagingPartyType $messageRecipient)
    {
        $this->messageRecipient = $messageRecipient;
        return $this;
    }

    /**
     * Gets as messageCreatedDateTime
     *
     * The DateTime on which the Message was created (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
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
     * The DateTime on which the Message was created (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $messageCreatedDateTime
     * @return self
     */
    public function setMessageCreatedDateTime(\DateTime $messageCreatedDateTime)
    {
        $this->messageCreatedDateTime = $messageCreatedDateTime;
        return $this;
    }
}


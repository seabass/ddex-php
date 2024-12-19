<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing MessageAuditTrailEventType
 *
 * A Composite containing details of a Party handling a Message and the Time at which the handling took place.
 * XSD Type: MessageAuditTrailEvent
 */
class MessageAuditTrailEventType
{
    /**
     * A Composite containing details of a MessagingParty.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessagingPartyWithoutCodeType $messagingPartyDescriptor
     */
    private $messagingPartyDescriptor = null;

    /**
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Gets as messagingPartyDescriptor
     *
     * A Composite containing details of a MessagingParty.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessagingPartyWithoutCodeType
     */
    public function getMessagingPartyDescriptor()
    {
        return $this->messagingPartyDescriptor;
    }

    /**
     * Sets a new messagingPartyDescriptor
     *
     * A Composite containing details of a MessagingParty.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessagingPartyWithoutCodeType $messagingPartyDescriptor
     * @return self
     */
    public function setMessagingPartyDescriptor(\DDEX\RDR_N\RDR_N_150\MessagingPartyWithoutCodeType $messagingPartyDescriptor)
    {
        $this->messagingPartyDescriptor = $messagingPartyDescriptor;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * The DateTime at which the Message was handled by the MessagingParty (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }
}


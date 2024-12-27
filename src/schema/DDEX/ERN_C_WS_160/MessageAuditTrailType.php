<?php

namespace DDEX\ERN\ERN_C_WS_160;

/**
 * Class representing MessageAuditTrailType
 *
 * A Composite containing information about Parties in between the original MessageSender and ultimate MessageRecipient.
 * XSD Type: MessageAuditTrail
 */
class MessageAuditTrailType
{
    /**
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @var \DDEX\ERN\ERN_C_WS_160\MessageAuditTrailEventType[] $messageAuditTrailEvent
     */
    private $messageAuditTrailEvent = [
        
    ];

    /**
     * Adds as messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_160\MessageAuditTrailEventType $messageAuditTrailEvent
     */
    public function addToMessageAuditTrailEvent(\DDEX\ERN\ERN_C_WS_160\MessageAuditTrailEventType $messageAuditTrailEvent)
    {
        $this->messageAuditTrailEvent[] = $messageAuditTrailEvent;
        return $this;
    }

    /**
     * isset messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageAuditTrailEvent($index)
    {
        return isset($this->messageAuditTrailEvent[$index]);
    }

    /**
     * unset messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageAuditTrailEvent($index)
    {
        unset($this->messageAuditTrailEvent[$index]);
    }

    /**
     * Gets as messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @return \DDEX\ERN\ERN_C_WS_160\MessageAuditTrailEventType[]
     */
    public function getMessageAuditTrailEvent()
    {
        return $this->messageAuditTrailEvent;
    }

    /**
     * Sets a new messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @param \DDEX\ERN\ERN_C_WS_160\MessageAuditTrailEventType[] $messageAuditTrailEvent
     * @return self
     */
    public function setMessageAuditTrailEvent(array $messageAuditTrailEvent)
    {
        $this->messageAuditTrailEvent = $messageAuditTrailEvent;
        return $this;
    }
}


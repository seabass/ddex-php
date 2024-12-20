<?php

namespace DDEX\ERN\ERN_37D1;

/**
 * Class representing MessageAuditTrailType
 *
 * A Composite containing information about Parties in between the original MessageSender and ultimate MessageRecipient.
 * XSD Type: MessageAuditTrail
 */
class MessageAuditTrailType
{
    /**
     * The Language and script for the Elements of the MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @var \DDEX\ERN\ERN_37D1\MessageAuditTrailEventType[] $messageAuditTrailEvent
     */
    private $messageAuditTrailEvent = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as messageAuditTrailEvent
     *
     * A Composite containing details of a Party handling the Message and the Time at which the handling took place.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\MessageAuditTrailEventType $messageAuditTrailEvent
     */
    public function addToMessageAuditTrailEvent(\DDEX\ERN\ERN_37D1\MessageAuditTrailEventType $messageAuditTrailEvent)
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
     * @return \DDEX\ERN\ERN_37D1\MessageAuditTrailEventType[]
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
     * @param \DDEX\ERN\ERN_37D1\MessageAuditTrailEventType[] $messageAuditTrailEvent
     * @return self
     */
    public function setMessageAuditTrailEvent(array $messageAuditTrailEvent)
    {
        $this->messageAuditTrailEvent = $messageAuditTrailEvent;
        return $this;
    }
}


<?php

namespace DDEX\ddexC;

/**
 * Class representing MessageAuditTrailType
 *
 * A ddex:Composite containing information about Parties in between the original ddex:MessageSender and ultimate ddex:MessageRecipient.
 * XSD Type: MessageAuditTrail
 */
class MessageAuditTrailType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
     *
     * @var \DDEX\ddexC\MessageAuditTrailEventType[] $messageAuditTrailEvent
     */
    private $messageAuditTrailEvent = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessageAuditTrail as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
     *
     * @return self
     * @param \DDEX\ddexC\MessageAuditTrailEventType $messageAuditTrailEvent
     */
    public function addToMessageAuditTrailEvent(\DDEX\ddexC\MessageAuditTrailEventType $messageAuditTrailEvent)
    {
        $this->messageAuditTrailEvent[] = $messageAuditTrailEvent;
        return $this;
    }

    /**
     * isset messageAuditTrailEvent
     *
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
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
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
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
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
     *
     * @return \DDEX\ddexC\MessageAuditTrailEventType[]
     */
    public function getMessageAuditTrailEvent()
    {
        return $this->messageAuditTrailEvent;
    }

    /**
     * Sets a new messageAuditTrailEvent
     *
     * A ddex:Composite containing details of a ddex:Party handling the ddex:Message and the ddex:Time at which the handling took place.
     *
     * @param \DDEX\ddexC\MessageAuditTrailEventType[] $messageAuditTrailEvent
     * @return self
     */
    public function setMessageAuditTrailEvent(array $messageAuditTrailEvent)
    {
        $this->messageAuditTrailEvent = $messageAuditTrailEvent;
        return $this;
    }
}


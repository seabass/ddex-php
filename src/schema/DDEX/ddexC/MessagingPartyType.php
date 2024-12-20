<?php

namespace DDEX\ddexC;

/**
 * Class representing MessagingPartyType
 *
 * A ddex:Composite containing details of a ddex:MessagingParty.
 * XSD Type: MessagingParty
 */
class MessagingPartyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessagingParty as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party handling the ddex:Message. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @var \DDEX\ddexC\PartyIdType $partyId
     */
    private $partyId = null;

    /**
     * A ddex:Composite containing details of the ddex:PartyNames for the ddex:Party handling the ddex:Message.
     *
     * @var \DDEX\ddexC\PartyNameType $partyName
     */
    private $partyName = null;

    /**
     * A ddex:Composite containing a ddex:TradingName for the ddex:Party handling the ddex:Message.
     *
     * @var \DDEX\ddexC\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessagingParty as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:MessagingParty as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party handling the ddex:Message. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @return \DDEX\ddexC\PartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party handling the ddex:Message. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @param \DDEX\ddexC\PartyIdType $partyId
     * @return self
     */
    public function setPartyId(\DDEX\ddexC\PartyIdType $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A ddex:Composite containing details of the ddex:PartyNames for the ddex:Party handling the ddex:Message.
     *
     * @return \DDEX\ddexC\PartyNameType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A ddex:Composite containing details of the ddex:PartyNames for the ddex:Party handling the ddex:Message.
     *
     * @param \DDEX\ddexC\PartyNameType $partyName
     * @return self
     */
    public function setPartyName(?\DDEX\ddexC\PartyNameType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A ddex:Composite containing a ddex:TradingName for the ddex:Party handling the ddex:Message.
     *
     * @return \DDEX\ddexC\NameType
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Sets a new tradingName
     *
     * A ddex:Composite containing a ddex:TradingName for the ddex:Party handling the ddex:Message.
     *
     * @param \DDEX\ddexC\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DDEX\ddexC\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }
}


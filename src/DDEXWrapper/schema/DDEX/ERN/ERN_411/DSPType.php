<?php

namespace DDEX\ERN\ERN_411;

/**
 * Class representing DSPType
 *
 * A Composite containing details of a DSP acting as a Licensee in a commercial relationship.
 * XSD Type: DSP
 */
class DSPType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\ERN\ERN_411\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DDEX\ERN\ERN_411\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing a TradingName of the DSP.
     *
     * @var \DDEX\ERN\ERN_411\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * A URL for the DSP's web site.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\ERN\ERN_411\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\ERN\ERN_411\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\ERN\ERN_411\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\ERN\ERN_411\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return \DDEX\ERN\ERN_411\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DDEX\ERN\ERN_411\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as tradingName
     *
     * A Composite containing a TradingName of the DSP.
     *
     * @return \DDEX\ERN\ERN_411\NameType
     */
    public function getTradingName()
    {
        return $this->tradingName;
    }

    /**
     * Sets a new tradingName
     *
     * A Composite containing a TradingName of the DSP.
     *
     * @param \DDEX\ERN\ERN_411\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DDEX\ERN\ERN_411\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * A URL for the DSP's web site.
     *
     * @return self
     * @param string $uRL
     */
    public function addToURL($uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * A URL for the DSP's web site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * A URL for the DSP's web site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * A URL for the DSP's web site.
     *
     * @return string[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL for the DSP's web site.
     *
     * @param string[] $uRL
     * @return self
     */
    public function setURL(array $uRL = null)
    {
        $this->uRL = $uRL;
        return $this;
    }
}


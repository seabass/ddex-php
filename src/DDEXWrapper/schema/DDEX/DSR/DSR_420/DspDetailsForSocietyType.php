<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing DspDetailsForSocietyType
 *
 * A Composite (for use by WorkLicensors) containing details of a DSP acting as a Licensee in a commercial relationship.
 * XSD Type: DspDetailsForSociety
 */
class DspDetailsForSocietyType
{
    /**
     * The Language and script for the Elements of the DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing the Name and/or Description of the channel through which the DSP distributes Releases.
     *
     * @var \DDEX\DSR\DSR_420\DistributionChannelDescriptorType $distributionChannelDescriptor
     */
    private $distributionChannelDescriptor = null;

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract existing between the Licensor and the DSP.
     *
     * @var \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @var \DDEX\DSR\DSR_420\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DDEX\DSR\DSR_420\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing a TradingName of the DSP.
     *
     * @var \DDEX\DSR\DSR_420\NameType $tradingName
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
     * The Territory from which the DSP operates (represented by an ISO 3166-1 TerritoryCode). This Territory may differ from the one in which SalesTransactions occur.
     *
     * @var string $territoryCode
     */
    private $territoryCode = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as distributionChannelDescriptor
     *
     * A Composite containing the Name and/or Description of the channel through which the DSP distributes Releases.
     *
     * @return \DDEX\DSR\DSR_420\DistributionChannelDescriptorType
     */
    public function getDistributionChannelDescriptor()
    {
        return $this->distributionChannelDescriptor;
    }

    /**
     * Sets a new distributionChannelDescriptor
     *
     * A Composite containing the Name and/or Description of the channel through which the DSP distributes Releases.
     *
     * @param \DDEX\DSR\DSR_420\DistributionChannelDescriptorType $distributionChannelDescriptor
     * @return self
     */
    public function setDistributionChannelDescriptor(?\DDEX\DSR\DSR_420\DistributionChannelDescriptorType $distributionChannelDescriptor = null)
    {
        $this->distributionChannelDescriptor = $distributionChannelDescriptor;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract existing between the Licensor and the DSP.
     *
     * @return \DDEX\DSR\DSR_420\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract existing between the Licensor and the DSP.
     *
     * @param \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\PartyIdType $partyId
     */
    public function addToPartyId(\DDEX\DSR\DSR_420\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @return \DDEX\DSR\DSR_420\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, Producers or other Creators.
     *
     * @param \DDEX\DSR\DSR_420\PartyIdType[] $partyId
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
     * @param \DDEX\DSR\DSR_420\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\DSR\DSR_420\PartyNameType $partyName)
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
     * @return \DDEX\DSR\DSR_420\PartyNameType[]
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
     * @param \DDEX\DSR\DSR_420\PartyNameType[] $partyName
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
     * @return \DDEX\DSR\DSR_420\NameType
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
     * @param \DDEX\DSR\DSR_420\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DDEX\DSR\DSR_420\NameType $tradingName = null)
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

    /**
     * Gets as territoryCode
     *
     * The Territory from which the DSP operates (represented by an ISO 3166-1 TerritoryCode). This Territory may differ from the one in which SalesTransactions occur.
     *
     * @return string
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * The Territory from which the DSP operates (represented by an ISO 3166-1 TerritoryCode). This Territory may differ from the one in which SalesTransactions occur.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode($territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }
}


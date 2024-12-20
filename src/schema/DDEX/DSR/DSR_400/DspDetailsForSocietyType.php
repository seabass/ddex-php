<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing DspDetailsForSocietyType
 *
 * A ddex:Composite (for use by ddex:WorkLicensors) containing details of a ddex:DSP acting as a ddex:Licensee in a commercial relationship.
 * XSD Type: DspDetailsForSociety
 */
class DspDetailsForSocietyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing the ddex:Name and/or ddex:Description of the channel through which the ddex:DSP distributes ddex:Releases.
     *
     * @var \DDEX\ddexC\DistributionChannelDescriptorType $distributionChannelDescriptor
     */
    private $distributionChannelDescriptor = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract existing between the ddex:Licensor and the ddex:DSP.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @var \DDEX\ddexC\PartyIdType $partyId
     */
    private $partyId = null;

    /**
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @var \DDEX\ddexC\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:TradingName of the ddexC:DSP.
     *
     * @var \DDEX\ddexC\NameType $tradingName
     */
    private $tradingName = null;

    /**
     * A ddex:URL for the DSP's web site.
     *
     * @var string[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * The ddex:Territory from which the ddexC:DSP operates (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This ddex:Territory may differ from the one in which ddex:SalesTransactions occur.
     *
     * @var string $territoryCode
     */
    private $territoryCode = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:DSP as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing the ddex:Name and/or ddex:Description of the channel through which the ddex:DSP distributes ddex:Releases.
     *
     * @return \DDEX\ddexC\DistributionChannelDescriptorType
     */
    public function getDistributionChannelDescriptor()
    {
        return $this->distributionChannelDescriptor;
    }

    /**
     * Sets a new distributionChannelDescriptor
     *
     * A ddex:Composite containing the ddex:Name and/or ddex:Description of the channel through which the ddex:DSP distributes ddex:Releases.
     *
     * @param \DDEX\ddexC\DistributionChannelDescriptorType $distributionChannelDescriptor
     * @return self
     */
    public function setDistributionChannelDescriptor(?\DDEX\ddexC\DistributionChannelDescriptorType $distributionChannelDescriptor = null)
    {
        $this->distributionChannelDescriptor = $distributionChannelDescriptor;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract existing between the ddex:Licensor and the ddex:DSP.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract existing between the ddex:Licensor and the ddex:DSP.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ddexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Gets as partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
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
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @param \DDEX\ddexC\PartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\ddexC\PartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DDEX\ddexC\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\ddexC\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
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
     * A ddex:Composite containing details of the PartyName(s).
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
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return \DDEX\ddexC\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @param \DDEX\ddexC\PartyNameType[] $partyName
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
     * A ddex:Composite containing a ddex:TradingName of the ddexC:DSP.
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
     * A ddex:Composite containing a ddex:TradingName of the ddexC:DSP.
     *
     * @param \DDEX\ddexC\NameType $tradingName
     * @return self
     */
    public function setTradingName(?\DDEX\ddexC\NameType $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * Adds as uRL
     *
     * A ddex:URL for the DSP's web site.
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
     * A ddex:URL for the DSP's web site.
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
     * A ddex:URL for the DSP's web site.
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
     * A ddex:URL for the DSP's web site.
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
     * A ddex:URL for the DSP's web site.
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
     * The ddex:Territory from which the ddexC:DSP operates (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This ddex:Territory may differ from the one in which ddex:SalesTransactions occur.
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
     * The ddex:Territory from which the ddexC:DSP operates (represented by an ISO 3166-1 iso3166a2:TerritoryCode). This ddex:Territory may differ from the one in which ddex:SalesTransactions occur.
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


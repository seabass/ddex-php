<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * A Territory to which the Party applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\ERN\ERN_400\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DDEX\ERN\ERN_400\DetailedPartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a society affiliation for the Party.
     *
     * @var \DDEX\ERN\ERN_400\SocietyAffiliationType[] $societyAffiliation
     */
    private $societyAffiliation = [
        
    ];

    /**
     * A URL of a WebPage for the Artist.
     *
     * @var string[] $artistProfilePage
     */
    private $artistProfilePage = [
        
    ];

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the Party applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the Party applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as partyReference
     *
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @return string
     */
    public function getPartyReference()
    {
        return $this->partyReference;
    }

    /**
     * Sets a new partyReference
     *
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @param string $partyReference
     * @return self
     */
    public function setPartyReference($partyReference)
    {
        $this->partyReference = $partyReference;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\ERN\ERN_400\DetailedPartyIdType $partyId)
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
     * @return \DDEX\ERN\ERN_400\DetailedPartyIdType[]
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
     * @param \DDEX\ERN\ERN_400\DetailedPartyIdType[] $partyId
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
     * @param \DDEX\ERN\ERN_400\DetailedPartyNameType $partyName
     */
    public function addToPartyName(\DDEX\ERN\ERN_400\DetailedPartyNameType $partyName)
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
     * @return \DDEX\ERN\ERN_400\DetailedPartyNameType[]
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
     * @param \DDEX\ERN\ERN_400\DetailedPartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\SocietyAffiliationType $societyAffiliation
     */
    public function addToSocietyAffiliation(\DDEX\ERN\ERN_400\SocietyAffiliationType $societyAffiliation)
    {
        $this->societyAffiliation[] = $societyAffiliation;
        return $this;
    }

    /**
     * isset societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocietyAffiliation($index)
    {
        return isset($this->societyAffiliation[$index]);
    }

    /**
     * unset societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocietyAffiliation($index)
    {
        unset($this->societyAffiliation[$index]);
    }

    /**
     * Gets as societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @return \DDEX\ERN\ERN_400\SocietyAffiliationType[]
     */
    public function getSocietyAffiliation()
    {
        return $this->societyAffiliation;
    }

    /**
     * Sets a new societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param \DDEX\ERN\ERN_400\SocietyAffiliationType[] $societyAffiliation
     * @return self
     */
    public function setSocietyAffiliation(array $societyAffiliation = null)
    {
        $this->societyAffiliation = $societyAffiliation;
        return $this;
    }

    /**
     * Adds as artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @return self
     * @param string $artistProfilePage
     */
    public function addToArtistProfilePage($artistProfilePage)
    {
        $this->artistProfilePage[] = $artistProfilePage;
        return $this;
    }

    /**
     * isset artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistProfilePage($index)
    {
        return isset($this->artistProfilePage[$index]);
    }

    /**
     * unset artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistProfilePage($index)
    {
        unset($this->artistProfilePage[$index]);
    }

    /**
     * Gets as artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @return string[]
     */
    public function getArtistProfilePage()
    {
        return $this->artistProfilePage;
    }

    /**
     * Sets a new artistProfilePage
     *
     * A URL of a WebPage for the Artist.
     *
     * @param string[] $artistProfilePage
     * @return self
     */
    public function setArtistProfilePage(array $artistProfilePage = null)
    {
        $this->artistProfilePage = $artistProfilePage;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing DetailedResourceContributorType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a Contributor to a Resource.
 * XSD Type: DetailedResourceContributor
 */
class DetailedResourceContributorType
{
    /**
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

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
     * @var \DDEX\ERN\ERN_400\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a Role played by the Contributor.
     *
     * @var \DDEX\ERN\ERN_400\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Type of musical Instrument played by the Artist.
     *
     * @var \DDEX\ERN\ERN_400\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @var bool $isFeaturedArtist
     */
    private $isFeaturedArtist = null;

    /**
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $isContractedArtist
     */
    private $isContractedArtist = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
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
     * @param \DDEX\ERN\ERN_400\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\ERN\ERN_400\PartyNameType $partyName)
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
     * @return \DDEX\ERN\ERN_400\PartyNameType[]
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
     * @param \DDEX\ERN\ERN_400\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ContributorRoleType $role
     */
    public function addToRole(\DDEX\ERN\ERN_400\ContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return \DDEX\ERN\ERN_400\ContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param \DDEX\ERN\ERN_400\ContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\ERN\ERN_400\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentType($index)
    {
        return isset($this->instrumentType[$index]);
    }

    /**
     * unset instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentType($index)
    {
        unset($this->instrumentType[$index]);
    }

    /**
     * Gets as instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @return \DDEX\ERN\ERN_400\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical Instrument played by the Artist.
     *
     * @param \DDEX\ERN\ERN_400\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as isFeaturedArtist
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsFeaturedArtist()
    {
        return $this->isFeaturedArtist;
    }

    /**
     * Sets a new isFeaturedArtist
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @param bool $isFeaturedArtist
     * @return self
     */
    public function setIsFeaturedArtist($isFeaturedArtist)
    {
        $this->isFeaturedArtist = $isFeaturedArtist;
        return $this;
    }

    /**
     * Gets as isContractedArtist
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsContractedArtist()
    {
        return $this->isContractedArtist;
    }

    /**
     * Sets a new isContractedArtist
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @param bool $isContractedArtist
     * @return self
     */
    public function setIsContractedArtist($isContractedArtist)
    {
        $this->isContractedArtist = $isContractedArtist;
        return $this;
    }
}


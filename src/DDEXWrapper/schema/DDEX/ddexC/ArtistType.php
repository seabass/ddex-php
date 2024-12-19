<?php

namespace DDEX\ddexC;

/**
 * Class representing ArtistType
 *
 * A ddex:Composite containing details of an ddex:Artist. An ddex:Artist may be described through ddex:Name, ddex:Identifier and Roles.
 * XSD Type: Artist
 */
class ArtistType
{
    /**
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

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
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @var \DDEX\ddexC\ArtistRoleType[] $artistRole
     */
    private $artistRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the ddexC:Artist in a group of ddex:Artists. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistRoleType $artistRole
     */
    public function addToArtistRole(\DDEX\ddexC\ArtistRoleType $artistRole)
    {
        $this->artistRole[] = $artistRole;
        return $this;
    }

    /**
     * isset artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistRole($index)
    {
        return isset($this->artistRole[$index]);
    }

    /**
     * unset artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistRole($index)
    {
        unset($this->artistRole[$index]);
    }

    /**
     * Gets as artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @return \DDEX\ddexC\ArtistRoleType[]
     */
    public function getArtistRole()
    {
        return $this->artistRole;
    }

    /**
     * Sets a new artistRole
     *
     * A ddex:Composite containing details of a role played by the ddexC:Artist in relation to other ddex:Artists.
     *
     * @param \DDEX\ddexC\ArtistRoleType[] $artistRole
     * @return self
     */
    public function setArtistRole(array $artistRole)
    {
        $this->artistRole = $artistRole;
        return $this;
    }
}


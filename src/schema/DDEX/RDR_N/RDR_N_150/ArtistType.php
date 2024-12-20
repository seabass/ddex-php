<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ArtistType
 *
 * A Composite containing details of an Artist. An Artist may be described through Name, Identifier and Roles.
 * XSD Type: Artist
 */
class ArtistType
{
    /**
     * The number indicating the order of the Artist in a group of Artists. This is represented in an XML schema as an XML Attribute. 
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/sequencing-recording-artists-and-writers
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistRoleType[] $displayArtistRole
     */
    private $displayArtistRole = [
        
    ];

    /**
     * The nationality of the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Artist in a group of Artists. This is represented in an XML schema as an XML Attribute. 
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/sequencing-recording-artists-and-writers
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
     * The number indicating the order of the Artist in a group of Artists. This is represented in an XML schema as an XML Attribute. 
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/sequencing-recording-artists-and-writers
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
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId)
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
     * @return \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\RDR_N\RDR_N_150\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as displayArtistRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistRoleType $displayArtistRole
     */
    public function addToDisplayArtistRole(\DDEX\RDR_N\RDR_N_150\DisplayArtistRoleType $displayArtistRole)
    {
        $this->displayArtistRole[] = $displayArtistRole;
        return $this;
    }

    /**
     * isset displayArtistRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistRole($index)
    {
        return isset($this->displayArtistRole[$index]);
    }

    /**
     * unset displayArtistRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistRole($index)
    {
        unset($this->displayArtistRole[$index]);
    }

    /**
     * Gets as displayArtistRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DisplayArtistRoleType[]
     */
    public function getDisplayArtistRole()
    {
        return $this->displayArtistRole;
    }

    /**
     * Sets a new displayArtistRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistRoleType[] $displayArtistRole
     * @return self
     */
    public function setDisplayArtistRole(array $displayArtistRole)
    {
        $this->displayArtistRole = $displayArtistRole;
        return $this;
    }

    /**
     * Adds as nationality
     *
     * The nationality of the Artist.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $nationality
     */
    public function addToNationality(\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $nationality)
    {
        $this->nationality[] = $nationality;
        return $this;
    }

    /**
     * isset nationality
     *
     * The nationality of the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNationality($index)
    {
        return isset($this->nationality[$index]);
    }

    /**
     * unset nationality
     *
     * The nationality of the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNationality($index)
    {
        unset($this->nationality[$index]);
    }

    /**
     * Gets as nationality
     *
     * The nationality of the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[]
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * The nationality of the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $nationality
     * @return self
     */
    public function setNationality(array $nationality = null)
    {
        $this->nationality = $nationality;
        return $this;
    }
}


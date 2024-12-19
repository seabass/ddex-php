<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing DetailedArtistType
 *
 * A Composite containing details of an Artist. An Artist may be described through Name, Identifier and Roles.
 * XSD Type: DetailedArtist
 */
class DetailedArtistType
{
    /**
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     */
    private $artistDelegatedUsageRights = null;

    /**
     * The gender of the Contributor.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of birth. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfBirth
     */
    private $dateAndPlaceOfBirth = null;

    /**
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfDeath
     */
    private $dateAndPlaceOfDeath = null;

    /**
     * A Composite containing details of a Type of an agreement that covers the Contributor's participation in making a SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType
     */
    private $governingAgreementType = null;

    /**
     * A Composite containing details of contact Identifiers of the Contributor.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContactIdType $contactInformation
     */
    private $contactInformation = null;

    /**
     * The country of main residency of the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $territoryOfResidency
     */
    private $territoryOfResidency = [
        
    ];

    /**
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContributorRoleType[] $additionalRoles
     */
    private $additionalRoles = [
        
    ];

    /**
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @var \DDEX\RDR_N\RDR_N_150\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Role for which the Contributor is credited.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * A Composite containing details of the primary role played by the Artist in relation to other Artists.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContributorRoleType $primaryRole
     */
    private $primaryRole = null;

    /**
     * A Composite containing details of the Date of the Performance. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateType $date
     */
    private $date = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Gets as artistDelegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ArtistDelegatedUsageRightsType
     */
    public function getArtistDelegatedUsageRights()
    {
        return $this->artistDelegatedUsageRights;
    }

    /**
     * Sets a new artistDelegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     * @return self
     */
    public function setArtistDelegatedUsageRights(?\DDEX\RDR_N\RDR_N_150\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights = null)
    {
        $this->artistDelegatedUsageRights = $artistDelegatedUsageRights;
        return $this;
    }

    /**
     * Gets as gender
     *
     * The gender of the Contributor.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * The gender of the Contributor.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Adds as nationality
     *
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * The nationality of the Artist. The use of ISO TerritoryCodes is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $nationality
     * @return self
     */
    public function setNationality(array $nationality = null)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfBirth
     *
     * A Composite containing details of the Date and Place of birth. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType
     */
    public function getDateAndPlaceOfBirth()
    {
        return $this->dateAndPlaceOfBirth;
    }

    /**
     * Sets a new dateAndPlaceOfBirth
     *
     * A Composite containing details of the Date and Place of birth. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfBirth
     * @return self
     */
    public function setDateAndPlaceOfBirth(?\DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfBirth = null)
    {
        $this->dateAndPlaceOfBirth = $dateAndPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType
     */
    public function getDateAndPlaceOfDeath()
    {
        return $this->dateAndPlaceOfDeath;
    }

    /**
     * Sets a new dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfDeath
     * @return self
     */
    public function setDateAndPlaceOfDeath(?\DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $dateAndPlaceOfDeath = null)
    {
        $this->dateAndPlaceOfDeath = $dateAndPlaceOfDeath;
        return $this;
    }

    /**
     * Gets as governingAgreementType
     *
     * A Composite containing details of a Type of an agreement that covers the Contributor's participation in making a SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType
     */
    public function getGoverningAgreementType()
    {
        return $this->governingAgreementType;
    }

    /**
     * Sets a new governingAgreementType
     *
     * A Composite containing details of a Type of an agreement that covers the Contributor's participation in making a SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType
     * @return self
     */
    public function setGoverningAgreementType(?\DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType = null)
    {
        $this->governingAgreementType = $governingAgreementType;
        return $this;
    }

    /**
     * Gets as contactInformation
     *
     * A Composite containing details of contact Identifiers of the Contributor.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContactIdType
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     * Sets a new contactInformation
     *
     * A Composite containing details of contact Identifiers of the Contributor.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContactIdType $contactInformation
     * @return self
     */
    public function setContactInformation(?\DDEX\RDR_N\RDR_N_150\ContactIdType $contactInformation = null)
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    /**
     * Adds as territoryOfResidency
     *
     * The country of main residency of the Artist.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $territoryOfResidency
     */
    public function addToTerritoryOfResidency(\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $territoryOfResidency)
    {
        $this->territoryOfResidency[] = $territoryOfResidency;
        return $this;
    }

    /**
     * isset territoryOfResidency
     *
     * The country of main residency of the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfResidency($index)
    {
        return isset($this->territoryOfResidency[$index]);
    }

    /**
     * unset territoryOfResidency
     *
     * The country of main residency of the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfResidency($index)
    {
        unset($this->territoryOfResidency[$index]);
    }

    /**
     * Gets as territoryOfResidency
     *
     * The country of main residency of the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[]
     */
    public function getTerritoryOfResidency()
    {
        return $this->territoryOfResidency;
    }

    /**
     * Sets a new territoryOfResidency
     *
     * The country of main residency of the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType[] $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency(array $territoryOfResidency = null)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Adds as additionalRoles
     *
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ContributorRoleType $additionalRoles
     */
    public function addToAdditionalRoles(\DDEX\RDR_N\RDR_N_150\ContributorRoleType $additionalRoles)
    {
        $this->additionalRoles[] = $additionalRoles;
        return $this;
    }

    /**
     * isset additionalRoles
     *
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalRoles($index)
    {
        return isset($this->additionalRoles[$index]);
    }

    /**
     * unset additionalRoles
     *
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalRoles($index)
    {
        unset($this->additionalRoles[$index]);
    }

    /**
     * Gets as additionalRoles
     *
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContributorRoleType[]
     */
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    /**
     * Sets a new additionalRoles
     *
     * A Composite containing details of the AdditionalRoles played by the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContributorRoleType[] $additionalRoles
     * @return self
     */
    public function setAdditionalRoles(array $additionalRoles = null)
    {
        $this->additionalRoles = $additionalRoles;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\GenreType $genre
     */
    public function addToGenre(\DDEX\RDR_N\RDR_N_150\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @return \DDEX\RDR_N\RDR_N_150\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @param \DDEX\RDR_N\RDR_N_150\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as displayCredits
     *
     * A Role for which the Contributor is credited.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DDEX\RDR_N\RDR_N_150\DisplayCreditsType $displayCredits)
    {
        $this->displayCredits[] = $displayCredits;
        return $this;
    }

    /**
     * isset displayCredits
     *
     * A Role for which the Contributor is credited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayCredits($index)
    {
        return isset($this->displayCredits[$index]);
    }

    /**
     * unset displayCredits
     *
     * A Role for which the Contributor is credited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayCredits($index)
    {
        unset($this->displayCredits[$index]);
    }

    /**
     * Gets as displayCredits
     *
     * A Role for which the Contributor is credited.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DisplayCreditsType[]
     */
    public function getDisplayCredits()
    {
        return $this->displayCredits;
    }

    /**
     * Sets a new displayCredits
     *
     * A Role for which the Contributor is credited.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits = null)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }

    /**
     * Gets as primaryRole
     *
     * A Composite containing details of the primary role played by the Artist in relation to other Artists.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContributorRoleType
     */
    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }

    /**
     * Sets a new primaryRole
     *
     * A Composite containing details of the primary role played by the Artist in relation to other Artists.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContributorRoleType $primaryRole
     * @return self
     */
    public function setPrimaryRole(?\DDEX\RDR_N\RDR_N_150\ContributorRoleType $primaryRole = null)
    {
        $this->primaryRole = $primaryRole;
        return $this;
    }

    /**
     * Gets as date
     *
     * A Composite containing details of the Date of the Performance. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A Composite containing details of the Date of the Performance. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateType $date
     * @return self
     */
    public function setDate(?\DDEX\RDR_N\RDR_N_150\EventDateType $date = null)
    {
        $this->date = $date;
        return $this;
    }
}


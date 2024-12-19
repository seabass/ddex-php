<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing OtherContributorType
 *
 * A Composite containing details of the Name, Identifier and role(s) of a Contributor. This Composite is not used for Parties that are performing Contributors or that contribute indirectly to a Resource.
 * XSD Type: OtherContributor
 */
class OtherContributorType
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
     * The gender of the Contributor.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * The nationality of the Contributor.
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
     * The country of main residency of the Contributor.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $territoryOfResidency
     */
    private $territoryOfResidency = null;

    /**
     * The country of whose citizenship the Contributor has.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $citizenship
     */
    private $citizenship = null;

    /**
     * A Composite containing details of a typical or main Genre relating to the Contributor.
     *
     * @var \DDEX\RDR_N\RDR_N_150\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContributionType[] $contribution
     */
    private $contribution = [
        
    ];

    /**
     * A Role for which the Contributor is credited.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * A Type of the Character.
     *
     * @var string $characterType
     */
    private $characterType = null;

    /**
     * A Composite containing details of the Name of the role played by a Contributor.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyNameType $character
     */
    private $character = null;

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
     * The nationality of the Contributor.
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
     * The nationality of the Contributor.
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
     * The nationality of the Contributor.
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
     * The nationality of the Contributor.
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
     * The nationality of the Contributor.
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
     * Gets as territoryOfResidency
     *
     * The country of main residency of the Contributor.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType
     */
    public function getTerritoryOfResidency()
    {
        return $this->territoryOfResidency;
    }

    /**
     * Sets a new territoryOfResidency
     *
     * The country of main residency of the Contributor.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency(?\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $territoryOfResidency = null)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Gets as citizenship
     *
     * The country of whose citizenship the Contributor has.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Sets a new citizenship
     *
     * The country of whose citizenship the Contributor has.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $citizenship
     * @return self
     */
    public function setCitizenship(?\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeNoWorldwideType $citizenship = null)
    {
        $this->citizenship = $citizenship;
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
     * Adds as contribution
     *
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ContributionType $contribution
     */
    public function addToContribution(\DDEX\RDR_N\RDR_N_150\ContributionType $contribution)
    {
        $this->contribution[] = $contribution;
        return $this;
    }

    /**
     * isset contribution
     *
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContribution($index)
    {
        return isset($this->contribution[$index]);
    }

    /**
     * unset contribution
     *
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContribution($index)
    {
        unset($this->contribution[$index]);
    }

    /**
     * Gets as contribution
     *
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContributionType[]
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Sets a new contribution
     *
     * A Composite containing details of a contribution. Each contribution must have one role in one country with one set of flags and with 0-n instruments. If multiple roles or set of flags need to be communicated, multiple contribution composites need to be used.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContributionType[] $contribution
     * @return self
     */
    public function setContribution(array $contribution = null)
    {
        $this->contribution = $contribution;
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
     * Gets as characterType
     *
     * A Type of the Character.
     *
     * @return string
     */
    public function getCharacterType()
    {
        return $this->characterType;
    }

    /**
     * Sets a new characterType
     *
     * A Type of the Character.
     *
     * @param string $characterType
     * @return self
     */
    public function setCharacterType($characterType)
    {
        $this->characterType = $characterType;
        return $this;
    }

    /**
     * Gets as character
     *
     * A Composite containing details of the Name of the role played by a Contributor.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyNameType
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of the Name of the role played by a Contributor.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType $character
     * @return self
     */
    public function setCharacter(?\DDEX\RDR_N\RDR_N_150\PartyNameType $character = null)
    {
        $this->character = $character;
        return $this;
    }
}


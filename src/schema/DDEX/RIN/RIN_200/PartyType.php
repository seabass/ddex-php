<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\RIN\RIN_200\DetailedPartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of an affiliation.
     *
     * @var \DDEX\RIN\RIN_200\AffiliationType[] $affiliation
     */
    private $affiliation = [
        
    ];

    /**
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @var \DDEX\RIN\RIN_200\RelatedPartyType[] $relatedParty
     */
    private $relatedParty = [
        
    ];

    /**
     * The gender of the Party.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * The country of main residency of the Party.
     *
     * @var \DDEX\RIN\RIN_200\AllTerritoryCodeType $territoryOfResidency
     */
    private $territoryOfResidency = null;

    /**
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @var bool $isOrganization
     */
    private $isOrganization = null;

    /**
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @var \DDEX\RIN\RIN_200\PostalAddressType[] $postalAddress
     */
    private $postalAddress = [
        
    ];

    /**
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @var \DDEX\RIN\RIN_200\PhoneNumberType[] $phoneNumber
     */
    private $phoneNumber = [
        
    ];

    /**
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @var \DDEX\RIN\RIN_200\EmailAddressType[] $emailAddress
     */
    private $emailAddress = [
        
    ];

    /**
     * The nationality of the Party.
     *
     * @var \DDEX\RIN\RIN_200\CurrentTerritoryCodeType[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of birth. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfBirth
     */
    private $dateAndPlaceOfBirth = null;

    /**
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfDeath
     */
    private $dateAndPlaceOfDeath = null;

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RIN\RIN_200\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
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
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\DetailedPartyNameType $partyName
     */
    public function addToPartyName(\DDEX\RIN\RIN_200\DetailedPartyNameType $partyName)
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
     * @return \DDEX\RIN\RIN_200\DetailedPartyNameType[]
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
     * @param \DDEX\RIN\RIN_200\DetailedPartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as affiliation
     *
     * A Composite containing details of an affiliation.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\AffiliationType $affiliation
     */
    public function addToAffiliation(\DDEX\RIN\RIN_200\AffiliationType $affiliation)
    {
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * isset affiliation
     *
     * A Composite containing details of an affiliation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffiliation($index)
    {
        return isset($this->affiliation[$index]);
    }

    /**
     * unset affiliation
     *
     * A Composite containing details of an affiliation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffiliation($index)
    {
        unset($this->affiliation[$index]);
    }

    /**
     * Gets as affiliation
     *
     * A Composite containing details of an affiliation.
     *
     * @return \DDEX\RIN\RIN_200\AffiliationType[]
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Sets a new affiliation
     *
     * A Composite containing details of an affiliation.
     *
     * @param \DDEX\RIN\RIN_200\AffiliationType[] $affiliation
     * @return self
     */
    public function setAffiliation(array $affiliation = null)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    /**
     * Adds as relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\RelatedPartyType $relatedParty
     */
    public function addToRelatedParty(\DDEX\RIN\RIN_200\RelatedPartyType $relatedParty)
    {
        $this->relatedParty[] = $relatedParty;
        return $this;
    }

    /**
     * isset relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedParty($index)
    {
        return isset($this->relatedParty[$index]);
    }

    /**
     * unset relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedParty($index)
    {
        unset($this->relatedParty[$index]);
    }

    /**
     * Gets as relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @return \DDEX\RIN\RIN_200\RelatedPartyType[]
     */
    public function getRelatedParty()
    {
        return $this->relatedParty;
    }

    /**
     * Sets a new relatedParty
     *
     * A Composite containing details of a PartyRelatedPartyReference referring to a Party that is related to the current Party. This can be used to express, for instance, relationships between a band and its members or between a label and its parent company.
     *
     * @param \DDEX\RIN\RIN_200\RelatedPartyType[] $relatedParty
     * @return self
     */
    public function setRelatedParty(array $relatedParty = null)
    {
        $this->relatedParty = $relatedParty;
        return $this;
    }

    /**
     * Gets as gender
     *
     * The gender of the Party.
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
     * The gender of the Party.
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
     * Gets as territoryOfResidency
     *
     * The country of main residency of the Party.
     *
     * @return \DDEX\RIN\RIN_200\AllTerritoryCodeType
     */
    public function getTerritoryOfResidency()
    {
        return $this->territoryOfResidency;
    }

    /**
     * Sets a new territoryOfResidency
     *
     * The country of main residency of the Party.
     *
     * @param \DDEX\RIN\RIN_200\AllTerritoryCodeType $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency(?\DDEX\RIN\RIN_200\AllTerritoryCodeType $territoryOfResidency = null)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Gets as isOrganization
     *
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @return bool
     */
    public function getIsOrganization()
    {
        return $this->isOrganization;
    }

    /**
     * Sets a new isOrganization
     *
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @param bool $isOrganization
     * @return self
     */
    public function setIsOrganization($isOrganization)
    {
        $this->isOrganization = $isOrganization;
        return $this;
    }

    /**
     * Adds as postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\PostalAddressType $postalAddress
     */
    public function addToPostalAddress(\DDEX\RIN\RIN_200\PostalAddressType $postalAddress)
    {
        $this->postalAddress[] = $postalAddress;
        return $this;
    }

    /**
     * isset postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPostalAddress($index)
    {
        return isset($this->postalAddress[$index]);
    }

    /**
     * unset postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPostalAddress($index)
    {
        unset($this->postalAddress[$index]);
    }

    /**
     * Gets as postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @return \DDEX\RIN\RIN_200\PostalAddressType[]
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @param \DDEX\RIN\RIN_200\PostalAddressType[] $postalAddress
     * @return self
     */
    public function setPostalAddress(array $postalAddress = null)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Adds as phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\PhoneNumberType $phoneNumber
     */
    public function addToPhoneNumber(\DDEX\RIN\RIN_200\PhoneNumberType $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * isset phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneNumber($index)
    {
        return isset($this->phoneNumber[$index]);
    }

    /**
     * unset phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneNumber($index)
    {
        unset($this->phoneNumber[$index]);
    }

    /**
     * Gets as phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @return \DDEX\RIN\RIN_200\PhoneNumberType[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @param \DDEX\RIN\RIN_200\PhoneNumberType[] $phoneNumber
     * @return self
     */
    public function setPhoneNumber(array $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Adds as emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\EmailAddressType $emailAddress
     */
    public function addToEmailAddress(\DDEX\RIN\RIN_200\EmailAddressType $emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }

    /**
     * isset emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmailAddress($index)
    {
        return isset($this->emailAddress[$index]);
    }

    /**
     * unset emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmailAddress($index)
    {
        unset($this->emailAddress[$index]);
    }

    /**
     * Gets as emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @return \DDEX\RIN\RIN_200\EmailAddressType[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @param \DDEX\RIN\RIN_200\EmailAddressType[] $emailAddress
     * @return self
     */
    public function setEmailAddress(array $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Adds as nationality
     *
     * The nationality of the Party.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\CurrentTerritoryCodeType $nationality
     */
    public function addToNationality(\DDEX\RIN\RIN_200\CurrentTerritoryCodeType $nationality)
    {
        $this->nationality[] = $nationality;
        return $this;
    }

    /**
     * isset nationality
     *
     * The nationality of the Party.
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
     * The nationality of the Party.
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
     * The nationality of the Party.
     *
     * @return \DDEX\RIN\RIN_200\CurrentTerritoryCodeType[]
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * The nationality of the Party.
     *
     * @param \DDEX\RIN\RIN_200\CurrentTerritoryCodeType[] $nationality
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
     * @return \DDEX\RIN\RIN_200\EventDateType
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
     * @param \DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfBirth
     * @return self
     */
    public function setDateAndPlaceOfBirth(?\DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfBirth = null)
    {
        $this->dateAndPlaceOfBirth = $dateAndPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN_200\EventDateType
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
     * @param \DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfDeath
     * @return self
     */
    public function setDateAndPlaceOfDeath(?\DDEX\RIN\RIN_200\EventDateType $dateAndPlaceOfDeath = null)
    {
        $this->dateAndPlaceOfDeath = $dateAndPlaceOfDeath;
        return $this;
    }
}


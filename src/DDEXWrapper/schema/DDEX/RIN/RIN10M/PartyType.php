<?php

namespace DDEX\RIN\RIN10M;

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
     *
     * @var \DDEX\RIN\RIN10M\DetailedPartyIdType[] $partyId
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
     *
     * @var \DDEX\RIN\RIN10M\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @var \DDEX\RIN\RIN10M\AffiliationType[] $publisher
     */
    private $publisher = [
        
    ];

    /**
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @var \DDEX\RIN\RIN10M\AffiliationType[] $authorsSociety
     */
    private $authorsSociety = [
        
    ];

    /**
     * A Composite containing details of the Label the Party is signed to.
     *
     * @var \DDEX\RIN\RIN10M\AffiliationType[] $label
     */
    private $label = [
        
    ];

    /**
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @var \DDEX\RIN\RIN10M\AffiliationType[] $musicLicensingCompany
     */
    private $musicLicensingCompany = [
        
    ];

    /**
     * The sex of the Party.
     *
     * @var string $sex
     */
    private $sex = null;

    /**
     * The country of main residency of the Party.
     *
     * @var \DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryOfResidency
     */
    private $territoryOfResidency = null;

    /**
     * A Composite containing details of a Type of an agreement that covers the Party's participation in making a SoundRecording.
     *
     * @var \DDEX\RIN\RIN10M\GoverningAgreementTypeType $governingAgreementType
     */
    private $governingAgreementType = null;

    /**
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Party.
     *
     * @var \DDEX\RIN\RIN10M\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     */
    private $artistDelegatedUsageRights = null;

    /**
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @var bool $isOrganization
     */
    private $isOrganization = null;

    /**
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @var \DDEX\RIN\RIN10M\PostalAddressType[] $postalAddress
     */
    private $postalAddress = [
        
    ];

    /**
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @var \DDEX\RIN\RIN10M\PhoneNumberType[] $phoneNumber
     */
    private $phoneNumber = [
        
    ];

    /**
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @var \DDEX\RIN\RIN10M\EmailAddressType[] $emailAddress
     */
    private $emailAddress = [
        
    ];

    /**
     * The nationality of the Party.
     *
     * @var \DDEX\RIN\RIN10M\CurrentTerritoryCodeType[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of birth. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfBirth
     */
    private $dateAndPlaceOfBirth = null;

    /**
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfDeath
     */
    private $dateAndPlaceOfDeath = null;

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RIN\RIN10M\DetailedPartyIdType $partyId)
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
     * @return \DDEX\RIN\RIN10M\DetailedPartyIdType[]
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
     * @param \DDEX\RIN\RIN10M\DetailedPartyIdType[] $partyId
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
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\RIN\RIN10M\PartyNameType $partyName)
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
     * @return \DDEX\RIN\RIN10M\PartyNameType[]
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
     * @param \DDEX\RIN\RIN10M\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as publisher
     *
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\AffiliationType $publisher
     */
    public function addToPublisher(\DDEX\RIN\RIN10M\AffiliationType $publisher)
    {
        $this->publisher[] = $publisher;
        return $this;
    }

    /**
     * isset publisher
     *
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPublisher($index)
    {
        return isset($this->publisher[$index]);
    }

    /**
     * unset publisher
     *
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPublisher($index)
    {
        unset($this->publisher[$index]);
    }

    /**
     * Gets as publisher
     *
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @return \DDEX\RIN\RIN10M\AffiliationType[]
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * A Composite containing details of the MusicPublisher the Party is signed to.
     *
     * @param \DDEX\RIN\RIN10M\AffiliationType[] $publisher
     * @return self
     */
    public function setPublisher(array $publisher = null)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Adds as authorsSociety
     *
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\AffiliationType $authorsSociety
     */
    public function addToAuthorsSociety(\DDEX\RIN\RIN10M\AffiliationType $authorsSociety)
    {
        $this->authorsSociety[] = $authorsSociety;
        return $this;
    }

    /**
     * isset authorsSociety
     *
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorsSociety($index)
    {
        return isset($this->authorsSociety[$index]);
    }

    /**
     * unset authorsSociety
     *
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorsSociety($index)
    {
        unset($this->authorsSociety[$index]);
    }

    /**
     * Gets as authorsSociety
     *
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @return \DDEX\RIN\RIN10M\AffiliationType[]
     */
    public function getAuthorsSociety()
    {
        return $this->authorsSociety;
    }

    /**
     * Sets a new authorsSociety
     *
     * A Composite containing details of the AuthorsSociety the Party is a member of.
     *
     * @param \DDEX\RIN\RIN10M\AffiliationType[] $authorsSociety
     * @return self
     */
    public function setAuthorsSociety(array $authorsSociety = null)
    {
        $this->authorsSociety = $authorsSociety;
        return $this;
    }

    /**
     * Adds as label
     *
     * A Composite containing details of the Label the Party is signed to.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\AffiliationType $label
     */
    public function addToLabel(\DDEX\RIN\RIN10M\AffiliationType $label)
    {
        $this->label[] = $label;
        return $this;
    }

    /**
     * isset label
     *
     * A Composite containing details of the Label the Party is signed to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label
     *
     * A Composite containing details of the Label the Party is signed to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabel($index)
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label
     *
     * A Composite containing details of the Label the Party is signed to.
     *
     * @return \DDEX\RIN\RIN10M\AffiliationType[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A Composite containing details of the Label the Party is signed to.
     *
     * @param \DDEX\RIN\RIN10M\AffiliationType[] $label
     * @return self
     */
    public function setLabel(array $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as musicLicensingCompany
     *
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\AffiliationType $musicLicensingCompany
     */
    public function addToMusicLicensingCompany(\DDEX\RIN\RIN10M\AffiliationType $musicLicensingCompany)
    {
        $this->musicLicensingCompany[] = $musicLicensingCompany;
        return $this;
    }

    /**
     * isset musicLicensingCompany
     *
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicLicensingCompany($index)
    {
        return isset($this->musicLicensingCompany[$index]);
    }

    /**
     * unset musicLicensingCompany
     *
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicLicensingCompany($index)
    {
        unset($this->musicLicensingCompany[$index]);
    }

    /**
     * Gets as musicLicensingCompany
     *
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @return \DDEX\RIN\RIN10M\AffiliationType[]
     */
    public function getMusicLicensingCompany()
    {
        return $this->musicLicensingCompany;
    }

    /**
     * Sets a new musicLicensingCompany
     *
     * A Composite containing details of the MusicLicensingCompany the Party is a member of.
     *
     * @param \DDEX\RIN\RIN10M\AffiliationType[] $musicLicensingCompany
     * @return self
     */
    public function setMusicLicensingCompany(array $musicLicensingCompany = null)
    {
        $this->musicLicensingCompany = $musicLicensingCompany;
        return $this;
    }

    /**
     * Gets as sex
     *
     * The sex of the Party.
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Sets a new sex
     *
     * The sex of the Party.
     *
     * @param string $sex
     * @return self
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * Gets as territoryOfResidency
     *
     * The country of main residency of the Party.
     *
     * @return \DDEX\RIN\RIN10M\AllTerritoryCodeType
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
     * @param \DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency(?\DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryOfResidency = null)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Gets as governingAgreementType
     *
     * A Composite containing details of a Type of an agreement that covers the Party's participation in making a SoundRecording.
     *
     * @return \DDEX\RIN\RIN10M\GoverningAgreementTypeType
     */
    public function getGoverningAgreementType()
    {
        return $this->governingAgreementType;
    }

    /**
     * Sets a new governingAgreementType
     *
     * A Composite containing details of a Type of an agreement that covers the Party's participation in making a SoundRecording.
     *
     * @param \DDEX\RIN\RIN10M\GoverningAgreementTypeType $governingAgreementType
     * @return self
     */
    public function setGoverningAgreementType(?\DDEX\RIN\RIN10M\GoverningAgreementTypeType $governingAgreementType = null)
    {
        $this->governingAgreementType = $governingAgreementType;
        return $this;
    }

    /**
     * Gets as artistDelegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Party.
     *
     * @return \DDEX\RIN\RIN10M\ArtistDelegatedUsageRightsType
     */
    public function getArtistDelegatedUsageRights()
    {
        return $this->artistDelegatedUsageRights;
    }

    /**
     * Sets a new artistDelegatedUsageRights
     *
     * A Composite containing details of the kinds of usage for which rights have been delegated by the Party.
     *
     * @param \DDEX\RIN\RIN10M\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     * @return self
     */
    public function setArtistDelegatedUsageRights(?\DDEX\RIN\RIN10M\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights = null)
    {
        $this->artistDelegatedUsageRights = $artistDelegatedUsageRights;
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
     * @param \DDEX\RIN\RIN10M\PostalAddressType $postalAddress
     */
    public function addToPostalAddress(\DDEX\RIN\RIN10M\PostalAddressType $postalAddress)
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
     * @return \DDEX\RIN\RIN10M\PostalAddressType[]
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
     * @param \DDEX\RIN\RIN10M\PostalAddressType[] $postalAddress
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
     * @param \DDEX\RIN\RIN10M\PhoneNumberType $phoneNumber
     */
    public function addToPhoneNumber(\DDEX\RIN\RIN10M\PhoneNumberType $phoneNumber)
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
     * @return \DDEX\RIN\RIN10M\PhoneNumberType[]
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
     * @param \DDEX\RIN\RIN10M\PhoneNumberType[] $phoneNumber
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
     * @param \DDEX\RIN\RIN10M\EmailAddressType $emailAddress
     */
    public function addToEmailAddress(\DDEX\RIN\RIN10M\EmailAddressType $emailAddress)
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
     * @return \DDEX\RIN\RIN10M\EmailAddressType[]
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
     * @param \DDEX\RIN\RIN10M\EmailAddressType[] $emailAddress
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
     * @param \DDEX\RIN\RIN10M\CurrentTerritoryCodeType $nationality
     */
    public function addToNationality(\DDEX\RIN\RIN10M\CurrentTerritoryCodeType $nationality)
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
     * @return \DDEX\RIN\RIN10M\CurrentTerritoryCodeType[]
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
     * @param \DDEX\RIN\RIN10M\CurrentTerritoryCodeType[] $nationality
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
     * @return \DDEX\RIN\RIN10M\EventDateType
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
     * @param \DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfBirth
     * @return self
     */
    public function setDateAndPlaceOfBirth(?\DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfBirth = null)
    {
        $this->dateAndPlaceOfBirth = $dateAndPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfDeath
     *
     * A Composite containing details of the Date and Place of death. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RIN\RIN10M\EventDateType
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
     * @param \DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfDeath
     * @return self
     */
    public function setDateAndPlaceOfDeath(?\DDEX\RIN\RIN10M\EventDateType $dateAndPlaceOfDeath = null)
    {
        $this->dateAndPlaceOfDeath = $dateAndPlaceOfDeath;
        return $this;
    }
}


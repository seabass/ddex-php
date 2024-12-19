<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing ResourceContributorType
 *
 * A ddex:Composite containing details of the ddex:Name, ddex:Identifier and role(s) of a ddex:Contributor to a ddex:Resource.
 * XSD Type: ResourceContributor
 */
class ResourceContributorType
{
    /**
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @var \DDEX\ddexC\ResourceContributorRoleType[] $resourceContributorRole
     */
    private $resourceContributorRole = [
        
    ];

    /**
     * A ddex:Flag indicating whether the ddex:Contributor is a featured ddex:Artist (=True) or not (=False).
     *
     * @var bool $isFeaturedArtist
     */
    private $isFeaturedArtist = null;

    /**
     * A ddex:Flag indicating whether the ddex:Contributor is an ddex:Artist that has a contract for its part in creating the ddex:Resource (=True) or not (=False).
     *
     * @var bool $isContractedArtist
     */
    private $isContractedArtist = null;

    /**
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @var string[] $territoryOfPerformance
     */
    private $territoryOfPerformance = [
        
    ];

    /**
     * A ddex:Type of musical instrument played by the ddex:Artist.
     *
     * @var string[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A ddex:Composite containing details of the kinds of usage for which rights have been delegated by the ddex:Artist.
     *
     * @var \DDEX\ddexC\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     */
    private $artistDelegatedUsageRights = null;

    /**
     * Sex
     *
     * @var string $sex
     */
    private $sex = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of birth.
     *
     * @var \DDEX\ddexC\EventDateType $dateAndPlaceOfBirth
     */
    private $dateAndPlaceOfBirth = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of death.
     *
     * @var \DDEX\ddexC\EventDateType $dateAndPlaceOfDeath
     */
    private $dateAndPlaceOfDeath = null;

    /**
     * A ddex:Composite containing details of the primary role played by the ddex:Artist in relation to other ddex:Artists.
     *
     * @var \DDEX\ddexC\ArtistRoleType $primaryRole
     */
    private $primaryRole = null;

    /**
     * A ddex:Type of (musical) instrument primarily played by the ddex:Artist.
     *
     * @var string $primaryInstrumentType
     */
    private $primaryInstrumentType = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of an agreement that covers the ddex:Artist's participation in making a ddex:SoundRecording.
     *
     * @var \DDEX\ddexC\GoverningAgreementTypeType $governingAgreementType
     */
    private $governingAgreementType = null;

    /**
     * A ddex:Composite containing details of contact ddex:Identifiers of the ddex:Artist.
     *
     * @var \DDEX\ddexC\ContactIdType $contactInformation
     */
    private $contactInformation = null;

    /**
     * The country of main residency of the ddex:Artist (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @var string $territoryOfResidency
     */
    private $territoryOfResidency = null;

    /**
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
     *
     * @var \DDEX\ddexC\ArtistRoleType[] $additionalRoles
     */
    private $additionalRoles = [
        
    ];

    /**
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
     *
     * @var \DDEX\ddexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @var \DDEX\ddexC\MembershipType[] $membership
     */
    private $membership = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceContributorRoleType $resourceContributorRole
     */
    public function addToResourceContributorRole(\DDEX\ddexC\ResourceContributorRoleType $resourceContributorRole)
    {
        $this->resourceContributorRole[] = $resourceContributorRole;
        return $this;
    }

    /**
     * isset resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributorRole($index)
    {
        return isset($this->resourceContributorRole[$index]);
    }

    /**
     * unset resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributorRole($index)
    {
        unset($this->resourceContributorRole[$index]);
    }

    /**
     * Gets as resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @return \DDEX\ddexC\ResourceContributorRoleType[]
     */
    public function getResourceContributorRole()
    {
        return $this->resourceContributorRole;
    }

    /**
     * Sets a new resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @param \DDEX\ddexC\ResourceContributorRoleType[] $resourceContributorRole
     * @return self
     */
    public function setResourceContributorRole(array $resourceContributorRole = null)
    {
        $this->resourceContributorRole = $resourceContributorRole;
        return $this;
    }

    /**
     * Gets as isFeaturedArtist
     *
     * A ddex:Flag indicating whether the ddex:Contributor is a featured ddex:Artist (=True) or not (=False).
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
     * A ddex:Flag indicating whether the ddex:Contributor is a featured ddex:Artist (=True) or not (=False).
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
     * A ddex:Flag indicating whether the ddex:Contributor is an ddex:Artist that has a contract for its part in creating the ddex:Resource (=True) or not (=False).
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
     * A ddex:Flag indicating whether the ddex:Contributor is an ddex:Artist that has a contract for its part in creating the ddex:Resource (=True) or not (=False).
     *
     * @param bool $isContractedArtist
     * @return self
     */
    public function setIsContractedArtist($isContractedArtist)
    {
        $this->isContractedArtist = $isContractedArtist;
        return $this;
    }

    /**
     * Adds as territoryOfPerformance
     *
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return self
     * @param string $territoryOfPerformance
     */
    public function addToTerritoryOfPerformance($territoryOfPerformance)
    {
        $this->territoryOfPerformance[] = $territoryOfPerformance;
        return $this;
    }

    /**
     * isset territoryOfPerformance
     *
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfPerformance($index)
    {
        return isset($this->territoryOfPerformance[$index]);
    }

    /**
     * unset territoryOfPerformance
     *
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfPerformance($index)
    {
        unset($this->territoryOfPerformance[$index]);
    }

    /**
     * Gets as territoryOfPerformance
     *
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return string[]
     */
    public function getTerritoryOfPerformance()
    {
        return $this->territoryOfPerformance;
    }

    /**
     * Sets a new territoryOfPerformance
     *
     * A country of performance (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param string $territoryOfPerformance
     * @return self
     */
    public function setTerritoryOfPerformance(array $territoryOfPerformance = null)
    {
        $this->territoryOfPerformance = $territoryOfPerformance;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A ddex:Type of musical instrument played by the ddex:Artist.
     *
     * @return self
     * @param string $instrumentType
     */
    public function addToInstrumentType($instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A ddex:Type of musical instrument played by the ddex:Artist.
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
     * A ddex:Type of musical instrument played by the ddex:Artist.
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
     * A ddex:Type of musical instrument played by the ddex:Artist.
     *
     * @return string[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A ddex:Type of musical instrument played by the ddex:Artist.
     *
     * @param string[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as artistDelegatedUsageRights
     *
     * A ddex:Composite containing details of the kinds of usage for which rights have been delegated by the ddex:Artist.
     *
     * @return \DDEX\ddexC\ArtistDelegatedUsageRightsType
     */
    public function getArtistDelegatedUsageRights()
    {
        return $this->artistDelegatedUsageRights;
    }

    /**
     * Sets a new artistDelegatedUsageRights
     *
     * A ddex:Composite containing details of the kinds of usage for which rights have been delegated by the ddex:Artist.
     *
     * @param \DDEX\ddexC\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights
     * @return self
     */
    public function setArtistDelegatedUsageRights(?\DDEX\ddexC\ArtistDelegatedUsageRightsType $artistDelegatedUsageRights = null)
    {
        $this->artistDelegatedUsageRights = $artistDelegatedUsageRights;
        return $this;
    }

    /**
     * Gets as sex
     *
     * Sex
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
     * Sex
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
     * Gets as dateAndPlaceOfBirth
     *
     * A ddex:Composite containing details of the Date and ddex:Place of birth.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getDateAndPlaceOfBirth()
    {
        return $this->dateAndPlaceOfBirth;
    }

    /**
     * Sets a new dateAndPlaceOfBirth
     *
     * A ddex:Composite containing details of the Date and ddex:Place of birth.
     *
     * @param \DDEX\ddexC\EventDateType $dateAndPlaceOfBirth
     * @return self
     */
    public function setDateAndPlaceOfBirth(?\DDEX\ddexC\EventDateType $dateAndPlaceOfBirth = null)
    {
        $this->dateAndPlaceOfBirth = $dateAndPlaceOfBirth;
        return $this;
    }

    /**
     * Gets as dateAndPlaceOfDeath
     *
     * A ddex:Composite containing details of the Date and ddex:Place of death.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getDateAndPlaceOfDeath()
    {
        return $this->dateAndPlaceOfDeath;
    }

    /**
     * Sets a new dateAndPlaceOfDeath
     *
     * A ddex:Composite containing details of the Date and ddex:Place of death.
     *
     * @param \DDEX\ddexC\EventDateType $dateAndPlaceOfDeath
     * @return self
     */
    public function setDateAndPlaceOfDeath(?\DDEX\ddexC\EventDateType $dateAndPlaceOfDeath = null)
    {
        $this->dateAndPlaceOfDeath = $dateAndPlaceOfDeath;
        return $this;
    }

    /**
     * Gets as primaryRole
     *
     * A ddex:Composite containing details of the primary role played by the ddex:Artist in relation to other ddex:Artists.
     *
     * @return \DDEX\ddexC\ArtistRoleType
     */
    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }

    /**
     * Sets a new primaryRole
     *
     * A ddex:Composite containing details of the primary role played by the ddex:Artist in relation to other ddex:Artists.
     *
     * @param \DDEX\ddexC\ArtistRoleType $primaryRole
     * @return self
     */
    public function setPrimaryRole(?\DDEX\ddexC\ArtistRoleType $primaryRole = null)
    {
        $this->primaryRole = $primaryRole;
        return $this;
    }

    /**
     * Gets as primaryInstrumentType
     *
     * A ddex:Type of (musical) instrument primarily played by the ddex:Artist.
     *
     * @return string
     */
    public function getPrimaryInstrumentType()
    {
        return $this->primaryInstrumentType;
    }

    /**
     * Sets a new primaryInstrumentType
     *
     * A ddex:Type of (musical) instrument primarily played by the ddex:Artist.
     *
     * @param string $primaryInstrumentType
     * @return self
     */
    public function setPrimaryInstrumentType($primaryInstrumentType)
    {
        $this->primaryInstrumentType = $primaryInstrumentType;
        return $this;
    }

    /**
     * Gets as governingAgreementType
     *
     * A ddex:Composite containing details of a ddex:Type of an agreement that covers the ddex:Artist's participation in making a ddex:SoundRecording.
     *
     * @return \DDEX\ddexC\GoverningAgreementTypeType
     */
    public function getGoverningAgreementType()
    {
        return $this->governingAgreementType;
    }

    /**
     * Sets a new governingAgreementType
     *
     * A ddex:Composite containing details of a ddex:Type of an agreement that covers the ddex:Artist's participation in making a ddex:SoundRecording.
     *
     * @param \DDEX\ddexC\GoverningAgreementTypeType $governingAgreementType
     * @return self
     */
    public function setGoverningAgreementType(?\DDEX\ddexC\GoverningAgreementTypeType $governingAgreementType = null)
    {
        $this->governingAgreementType = $governingAgreementType;
        return $this;
    }

    /**
     * Gets as contactInformation
     *
     * A ddex:Composite containing details of contact ddex:Identifiers of the ddex:Artist.
     *
     * @return \DDEX\ddexC\ContactIdType
     */
    public function getContactInformation()
    {
        return $this->contactInformation;
    }

    /**
     * Sets a new contactInformation
     *
     * A ddex:Composite containing details of contact ddex:Identifiers of the ddex:Artist.
     *
     * @param \DDEX\ddexC\ContactIdType $contactInformation
     * @return self
     */
    public function setContactInformation(?\DDEX\ddexC\ContactIdType $contactInformation = null)
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    /**
     * Gets as territoryOfResidency
     *
     * The country of main residency of the ddex:Artist (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return string
     */
    public function getTerritoryOfResidency()
    {
        return $this->territoryOfResidency;
    }

    /**
     * Sets a new territoryOfResidency
     *
     * The country of main residency of the ddex:Artist (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param string $territoryOfResidency
     * @return self
     */
    public function setTerritoryOfResidency($territoryOfResidency)
    {
        $this->territoryOfResidency = $territoryOfResidency;
        return $this;
    }

    /**
     * Adds as additionalRoles
     *
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistRoleType $additionalRoles
     */
    public function addToAdditionalRoles(\DDEX\ddexC\ArtistRoleType $additionalRoles)
    {
        $this->additionalRoles[] = $additionalRoles;
        return $this;
    }

    /**
     * isset additionalRoles
     *
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
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
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
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
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
     *
     * @return \DDEX\ddexC\ArtistRoleType[]
     */
    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    /**
     * Sets a new additionalRoles
     *
     * A ddex:Composite containing details of the additional roles played by the ddex:Artist.
     *
     * @param \DDEX\ddexC\ArtistRoleType[] $additionalRoles
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
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
     *
     * @return self
     * @param \DDEX\ddexC\GenreType $genre
     */
    public function addToGenre(\DDEX\ddexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
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
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
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
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
     *
     * @return \DDEX\ddexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a typical or main ddex:Genre relating to the ddex:Artist.
     *
     * @param \DDEX\ddexC\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as membership
     *
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @return self
     * @param \DDEX\ddexC\MembershipType $membership
     */
    public function addToMembership(\DDEX\ddexC\MembershipType $membership)
    {
        $this->membership[] = $membership;
        return $this;
    }

    /**
     * isset membership
     *
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMembership($index)
    {
        return isset($this->membership[$index]);
    }

    /**
     * unset membership
     *
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMembership($index)
    {
        unset($this->membership[$index]);
    }

    /**
     * Gets as membership
     *
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @return \DDEX\ddexC\MembershipType[]
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * A ddex:Composite containing details of a membership in a collective rights management organization.
     *
     * @param \DDEX\ddexC\MembershipType[] $membership
     * @return self
     */
    public function setMembership(array $membership = null)
    {
        $this->membership = $membership;
        return $this;
    }
}


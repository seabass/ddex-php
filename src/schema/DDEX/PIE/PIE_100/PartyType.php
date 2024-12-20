<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * The Language and script for the Elements of the Party as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyId for the Party.
     *
     * @var \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of a PartyName.
     *
     * @var \DDEX\PIE\PIE_100\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * The Type of the Party.
     *
     * @var \DDEX\PIE\PIE_100\PartyTypeType $partyType
     */
    private $partyType = null;

    /**
     * A Composite containing details of an Event.
     *
     * @var \DDEX\PIE\PIE_100\EventType[] $event
     */
    private $event = [
        
    ];

    /**
     * A Composite containing details of a related Party.
     *
     * @var \DDEX\PIE\PIE_100\RelatedPartyType[] $relatedParty
     */
    private $relatedParty = [
        
    ];

    /**
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @var \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     */
    private $relatedCreation = [
        
    ];

    /**
     * The Gender of the Party, based on self-identification.
     *
     * @var \DDEX\PIE\PIE_100\GenderType $gender
     */
    private $gender = null;

    /**
     * The nationality of the Party.
     *
     * @var \DDEX\PIE\PIE_100\NationalityType[] $nationality
     */
    private $nationality = [
        
    ];

    /**
     * A Composite containing details of the PrimaryRole played by the Party.
     *
     * @var \DDEX\PIE\PIE_100\PrimaryRoleType $primaryRole
     */
    private $primaryRole = null;

    /**
     * A Composite containing details of a vocal register of the Party.
     *
     * @var \DDEX\PIE\PIE_100\VocalRegisterType $vocalRegister
     */
    private $vocalRegister = null;

    /**
     * A Composite containing details of a focus track.
     *
     * @var \DDEX\PIE\PIE_100\FocusType[] $focus
     */
    private $focus = [
        
    ];

    /**
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @var \DDEX\PIE\PIE_100\ArtistTypeType[] $artistType
     */
    private $artistType = [
        
    ];

    /**
     * A Composite containing details of a period of the Party.
     *
     * @var \DDEX\PIE\PIE_100\ClassicalPeriodType $classicalPeriod
     */
    private $classicalPeriod = null;

    /**
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @var \DDEX\PIE\PIE_100\EpochType[] $epoch
     */
    private $epoch = [
        
    ];

    /**
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @var \DDEX\PIE\PIE_100\ArtisticInfluenceType[] $artisticInfluence
     */
    private $artisticInfluence = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\PIE\PIE_100\AwardType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of a biography of the Party.
     *
     * @var \DDEX\PIE\PIE_100\BiographyType[] $biography
     */
    private $biography = [
        
    ];

    /**
     * A Composite containing details of an Image of the Party.
     *
     * @var \DDEX\PIE\PIE_100\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * A URL of a social medium used by the Party.
     *
     * @var \DDEX\PIE\PIE_100\SocialMediaURLType $socialMediaURL
     */
    private $socialMediaURL = null;

    /**
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\PIE\PIE_100\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Party as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Party as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the PartyId for the Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType $partyId
     */
    public function addToPartyId(\DDEX\PIE\PIE_100\DetailedPartyIdForPartyType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party.
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
     * A Composite containing details of the PartyId for the Party.
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
     * A Composite containing details of the PartyId for the Party.
     *
     * @return \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @param \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of a PartyName.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\PIE\PIE_100\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of a PartyName.
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
     * A Composite containing details of a PartyName.
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
     * A Composite containing details of a PartyName.
     *
     * @return \DDEX\PIE\PIE_100\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of a PartyName.
     *
     * @param \DDEX\PIE\PIE_100\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as partyType
     *
     * The Type of the Party.
     *
     * @return \DDEX\PIE\PIE_100\PartyTypeType
     */
    public function getPartyType()
    {
        return $this->partyType;
    }

    /**
     * Sets a new partyType
     *
     * The Type of the Party.
     *
     * @param \DDEX\PIE\PIE_100\PartyTypeType $partyType
     * @return self
     */
    public function setPartyType(\DDEX\PIE\PIE_100\PartyTypeType $partyType)
    {
        $this->partyType = $partyType;
        return $this;
    }

    /**
     * Adds as event
     *
     * A Composite containing details of an Event.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\EventType $event
     */
    public function addToEvent(\DDEX\PIE\PIE_100\EventType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * A Composite containing details of an Event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * A Composite containing details of an Event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * A Composite containing details of an Event.
     *
     * @return \DDEX\PIE\PIE_100\EventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * A Composite containing details of an Event.
     *
     * @param \DDEX\PIE\PIE_100\EventType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as relatedParty
     *
     * A Composite containing details of a related Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\RelatedPartyType $relatedParty
     */
    public function addToRelatedParty(\DDEX\PIE\PIE_100\RelatedPartyType $relatedParty)
    {
        $this->relatedParty[] = $relatedParty;
        return $this;
    }

    /**
     * isset relatedParty
     *
     * A Composite containing details of a related Party.
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
     * A Composite containing details of a related Party.
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
     * A Composite containing details of a related Party.
     *
     * @return \DDEX\PIE\PIE_100\RelatedPartyType[]
     */
    public function getRelatedParty()
    {
        return $this->relatedParty;
    }

    /**
     * Sets a new relatedParty
     *
     * A Composite containing details of a related Party.
     *
     * @param \DDEX\PIE\PIE_100\RelatedPartyType[] $relatedParty
     * @return self
     */
    public function setRelatedParty(array $relatedParty = null)
    {
        $this->relatedParty = $relatedParty;
        return $this;
    }

    /**
     * Adds as relatedCreation
     *
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation
     */
    public function addToRelatedCreation(\DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation)
    {
        $this->relatedCreation[] = $relatedCreation;
        return $this;
    }

    /**
     * isset relatedCreation
     *
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedCreation($index)
    {
        return isset($this->relatedCreation[$index]);
    }

    /**
     * unset relatedCreation
     *
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedCreation($index)
    {
        unset($this->relatedCreation[$index]);
    }

    /**
     * Gets as relatedCreation
     *
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @return \DDEX\PIE\PIE_100\RelatedCreationForPartyType[]
     */
    public function getRelatedCreation()
    {
        return $this->relatedCreation;
    }

    /**
     * Sets a new relatedCreation
     *
     * A Composite containing details of a related Creation (a Work, a Release or a Resource).
     *
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     * @return self
     */
    public function setRelatedCreation(array $relatedCreation = null)
    {
        $this->relatedCreation = $relatedCreation;
        return $this;
    }

    /**
     * Gets as gender
     *
     * The Gender of the Party, based on self-identification.
     *
     * @return \DDEX\PIE\PIE_100\GenderType
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * The Gender of the Party, based on self-identification.
     *
     * @param \DDEX\PIE\PIE_100\GenderType $gender
     * @return self
     */
    public function setGender(?\DDEX\PIE\PIE_100\GenderType $gender = null)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Adds as nationality
     *
     * The nationality of the Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\NationalityType $nationality
     */
    public function addToNationality(\DDEX\PIE\PIE_100\NationalityType $nationality)
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
     * @return \DDEX\PIE\PIE_100\NationalityType[]
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
     * @param \DDEX\PIE\PIE_100\NationalityType[] $nationality
     * @return self
     */
    public function setNationality(array $nationality = null)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * Gets as primaryRole
     *
     * A Composite containing details of the PrimaryRole played by the Party.
     *
     * @return \DDEX\PIE\PIE_100\PrimaryRoleType
     */
    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }

    /**
     * Sets a new primaryRole
     *
     * A Composite containing details of the PrimaryRole played by the Party.
     *
     * @param \DDEX\PIE\PIE_100\PrimaryRoleType $primaryRole
     * @return self
     */
    public function setPrimaryRole(?\DDEX\PIE\PIE_100\PrimaryRoleType $primaryRole = null)
    {
        $this->primaryRole = $primaryRole;
        return $this;
    }

    /**
     * Gets as vocalRegister
     *
     * A Composite containing details of a vocal register of the Party.
     *
     * @return \DDEX\PIE\PIE_100\VocalRegisterType
     */
    public function getVocalRegister()
    {
        return $this->vocalRegister;
    }

    /**
     * Sets a new vocalRegister
     *
     * A Composite containing details of a vocal register of the Party.
     *
     * @param \DDEX\PIE\PIE_100\VocalRegisterType $vocalRegister
     * @return self
     */
    public function setVocalRegister(?\DDEX\PIE\PIE_100\VocalRegisterType $vocalRegister = null)
    {
        $this->vocalRegister = $vocalRegister;
        return $this;
    }

    /**
     * Adds as focus
     *
     * A Composite containing details of a focus track.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\FocusType $focus
     */
    public function addToFocus(\DDEX\PIE\PIE_100\FocusType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * A Composite containing details of a focus track.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * A Composite containing details of a focus track.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * A Composite containing details of a focus track.
     *
     * @return \DDEX\PIE\PIE_100\FocusType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * A Composite containing details of a focus track.
     *
     * @param \DDEX\PIE\PIE_100\FocusType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Adds as artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ArtistTypeType $artistType
     */
    public function addToArtistType(\DDEX\PIE\PIE_100\ArtistTypeType $artistType)
    {
        $this->artistType[] = $artistType;
        return $this;
    }

    /**
     * isset artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistType($index)
    {
        return isset($this->artistType[$index]);
    }

    /**
     * unset artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistType($index)
    {
        unset($this->artistType[$index]);
    }

    /**
     * Gets as artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @return \DDEX\PIE\PIE_100\ArtistTypeType[]
     */
    public function getArtistType()
    {
        return $this->artistType;
    }

    /**
     * Sets a new artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param \DDEX\PIE\PIE_100\ArtistTypeType[] $artistType
     * @return self
     */
    public function setArtistType(array $artistType = null)
    {
        $this->artistType = $artistType;
        return $this;
    }

    /**
     * Gets as classicalPeriod
     *
     * A Composite containing details of a period of the Party.
     *
     * @return \DDEX\PIE\PIE_100\ClassicalPeriodType
     */
    public function getClassicalPeriod()
    {
        return $this->classicalPeriod;
    }

    /**
     * Sets a new classicalPeriod
     *
     * A Composite containing details of a period of the Party.
     *
     * @param \DDEX\PIE\PIE_100\ClassicalPeriodType $classicalPeriod
     * @return self
     */
    public function setClassicalPeriod(?\DDEX\PIE\PIE_100\ClassicalPeriodType $classicalPeriod = null)
    {
        $this->classicalPeriod = $classicalPeriod;
        return $this;
    }

    /**
     * Adds as epoch
     *
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\EpochType $epoch
     */
    public function addToEpoch(\DDEX\PIE\PIE_100\EpochType $epoch)
    {
        $this->epoch[] = $epoch;
        return $this;
    }

    /**
     * isset epoch
     *
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEpoch($index)
    {
        return isset($this->epoch[$index]);
    }

    /**
     * unset epoch
     *
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEpoch($index)
    {
        unset($this->epoch[$index]);
    }

    /**
     * Gets as epoch
     *
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @return \DDEX\PIE\PIE_100\EpochType[]
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Sets a new epoch
     *
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @param \DDEX\PIE\PIE_100\EpochType[] $epoch
     * @return self
     */
    public function setEpoch(array $epoch = null)
    {
        $this->epoch = $epoch;
        return $this;
    }

    /**
     * Adds as artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ArtisticInfluenceType $artisticInfluence
     */
    public function addToArtisticInfluence(\DDEX\PIE\PIE_100\ArtisticInfluenceType $artisticInfluence)
    {
        $this->artisticInfluence[] = $artisticInfluence;
        return $this;
    }

    /**
     * isset artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtisticInfluence($index)
    {
        return isset($this->artisticInfluence[$index]);
    }

    /**
     * unset artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtisticInfluence($index)
    {
        unset($this->artisticInfluence[$index]);
    }

    /**
     * Gets as artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @return \DDEX\PIE\PIE_100\ArtisticInfluenceType[]
     */
    public function getArtisticInfluence()
    {
        return $this->artisticInfluence;
    }

    /**
     * Sets a new artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist). Simple relationships that are not coupled to a creation by the related Artist should be documented using the RelatedParty element.
     *
     * @param \DDEX\PIE\PIE_100\ArtisticInfluenceType[] $artisticInfluence
     * @return self
     */
    public function setArtisticInfluence(array $artisticInfluence = null)
    {
        $this->artisticInfluence = $artisticInfluence;
        return $this;
    }

    /**
     * Adds as award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\AwardType $award
     */
    public function addToAward(\DDEX\PIE\PIE_100\AwardType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @return \DDEX\PIE\PIE_100\AwardType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param \DDEX\PIE\PIE_100\AwardType[] $award
     * @return self
     */
    public function setAward(array $award = null)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Adds as biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\BiographyType $biography
     */
    public function addToBiography(\DDEX\PIE\PIE_100\BiographyType $biography)
    {
        $this->biography[] = $biography;
        return $this;
    }

    /**
     * isset biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBiography($index)
    {
        return isset($this->biography[$index]);
    }

    /**
     * unset biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBiography($index)
    {
        unset($this->biography[$index]);
    }

    /**
     * Gets as biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @return \DDEX\PIE\PIE_100\BiographyType[]
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Sets a new biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param \DDEX\PIE\PIE_100\BiographyType[] $biography
     * @return self
     */
    public function setBiography(array $biography = null)
    {
        $this->biography = $biography;
        return $this;
    }

    /**
     * Adds as image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ImageType $image
     */
    public function addToImage(\DDEX\PIE\PIE_100\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @return \DDEX\PIE\PIE_100\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @param \DDEX\PIE\PIE_100\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as socialMediaURL
     *
     * A URL of a social medium used by the Party.
     *
     * @return \DDEX\PIE\PIE_100\SocialMediaURLType
     */
    public function getSocialMediaURL()
    {
        return $this->socialMediaURL;
    }

    /**
     * Sets a new socialMediaURL
     *
     * A URL of a social medium used by the Party.
     *
     * @param \DDEX\PIE\PIE_100\SocialMediaURLType $socialMediaURL
     * @return self
     */
    public function setSocialMediaURL(?\DDEX\PIE\PIE_100\SocialMediaURLType $socialMediaURL = null)
    {
        $this->socialMediaURL = $socialMediaURL;
        return $this;
    }

    /**
     * Adds as commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\CommentaryNoteType $commentaryNote
     */
    public function addToCommentaryNote(\DDEX\PIE\PIE_100\CommentaryNoteType $commentaryNote)
    {
        $this->commentaryNote[] = $commentaryNote;
        return $this;
    }

    /**
     * isset commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommentaryNote($index)
    {
        return isset($this->commentaryNote[$index]);
    }

    /**
     * unset commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommentaryNote($index)
    {
        unset($this->commentaryNote[$index]);
    }

    /**
     * Gets as commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @return \DDEX\PIE\PIE_100\CommentaryNoteType[]
     */
    public function getCommentaryNote()
    {
        return $this->commentaryNote;
    }

    /**
     * Sets a new commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @param \DDEX\PIE\PIE_100\CommentaryNoteType[] $commentaryNote
     * @return self
     */
    public function setCommentaryNote(array $commentaryNote = null)
    {
        $this->commentaryNote = $commentaryNote;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_37D1;

/**
 * Class representing ReleaseDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors and other attributes of a Release which may vary according to Territory of release.
 * XSD Type: ReleaseDetailsByTerritory
 */
class ReleaseDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @var \DDEX\ERN\ERN_37D1\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing the Name of the Label for the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of a Title of the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_37D1\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * The Flag indicating whether the Release is a multiartist compilation (=True) or not (=False).
     *
     * @var bool $isMultiArtistCompilation
     */
    private $isMultiArtistCompilation = null;

    /**
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @var \DDEX\ERN\ERN_37D1\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ERN\ERN_37D1\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @var \DDEX\ERN\ERN_37D1\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @var \DDEX\ERN\ERN_37D1\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ERN\ERN_37D1\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ERN\ERN_37D1\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ERN\ERN_37D1\EventDateType $originalDigitalReleaseDate
     */
    private $originalDigitalReleaseDate = null;

    /**
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @var \DDEX\ERN\ERN_37D1\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @var \DDEX\ERN\ERN_37D1\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @var \DDEX\ERN\ERN_37D1\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Release.
     *
     * @var \DDEX\ERN\ERN_37D1\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_37D1\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A number of units (typically a CD or a DVD) contained in a physical Release. This Element is for boxed sets.
     *
     * @var int $numberOfUnitsPerPhysicalRelease
     */
    private $numberOfUnitsPerPhysicalRelease = null;

    /**
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_37D1\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as territoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\ERN\ERN_37D1\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\ERN\ERN_37D1\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @return \DDEX\ERN\ERN_37D1\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @param \DDEX\ERN\ERN_37D1\NameType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\ERN\ERN_37D1\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ERN\ERN_37D1\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\TitleType $title
     */
    public function addToTitle(\DDEX\ERN\ERN_37D1\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\ERN\ERN_37D1\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_37D1\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_37D1\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Gets as isMultiArtistCompilation
     *
     * The Flag indicating whether the Release is a multiartist compilation (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsMultiArtistCompilation()
    {
        return $this->isMultiArtistCompilation;
    }

    /**
     * Sets a new isMultiArtistCompilation
     *
     * The Flag indicating whether the Release is a multiartist compilation (=True) or not (=False).
     *
     * @param bool $isMultiArtistCompilation
     * @return self
     */
    public function setIsMultiArtistCompilation($isMultiArtistCompilation)
    {
        $this->isMultiArtistCompilation = $isMultiArtistCompilation;
        return $this;
    }

    /**
     * Adds as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DDEX\ERN\ERN_37D1\AdministratingRecordCompanyType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdministratingRecordCompany($index)
    {
        return isset($this->administratingRecordCompany[$index]);
    }

    /**
     * unset administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdministratingRecordCompany($index)
    {
        unset($this->administratingRecordCompany[$index]);
    }

    /**
     * Gets as administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\AdministratingRecordCompanyType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A Composite containing details of the AdministratingRecordCompany for the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\AdministratingRecordCompanyType[] $administratingRecordCompany
     * @return self
     */
    public function setAdministratingRecordCompany(array $administratingRecordCompany = null)
    {
        $this->administratingRecordCompany = $administratingRecordCompany;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\ERN\ERN_37D1\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DDEX\ERN\ERN_37D1\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRelease($index)
    {
        return isset($this->relatedRelease[$index]);
    }

    /**
     * unset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRelease($index)
    {
        unset($this->relatedRelease[$index]);
    }

    /**
     * Gets as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @return \DDEX\ERN\ERN_37D1\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @param \DDEX\ERN\ERN_37D1\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ERN\ERN_37D1\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentalWarningType($index)
    {
        return isset($this->parentalWarningType[$index]);
    }

    /**
     * unset parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentalWarningType($index)
    {
        unset($this->parentalWarningType[$index]);
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ERN\ERN_37D1\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ERN\ERN_37D1\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\AvRatingType $avRating
     */
    public function addToAvRating(\DDEX\ERN\ERN_37D1\AvRatingType $avRating)
    {
        $this->avRating[] = $avRating;
        return $this;
    }

    /**
     * isset avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvRating($index)
    {
        return isset($this->avRating[$index]);
    }

    /**
     * unset avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvRating($index)
    {
        unset($this->avRating[$index]);
    }

    /**
     * Gets as avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\AvRatingType[]
     */
    public function getAvRating()
    {
        return $this->avRating;
    }

    /**
     * Sets a new avRating
     *
     * A Composite containing details of a rating for the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating = null)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DDEX\ERN\ERN_37D1\CommentType $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DDEX\ERN\ERN_37D1\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroup($index)
    {
        return isset($this->resourceGroup[$index]);
    }

    /**
     * unset resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroup($index)
    {
        unset($this->resourceGroup[$index]);
    }

    /**
     * Gets as resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return \DDEX\ERN\ERN_37D1\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A Composite containing details of a group of some or all of the Resources in the Release. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @param \DDEX\ERN\ERN_37D1\ResourceGroupType[] $resourceGroup
     * @return self
     */
    public function setResourceGroup(array $resourceGroup = null)
    {
        $this->resourceGroup = $resourceGroup;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\GenreType $genre
     */
    public function addToGenre(\DDEX\ERN\ERN_37D1\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
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
     * A Composite containing details of a Genre to which the Release belongs.
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
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return \DDEX\ERN\ERN_37D1\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param \DDEX\ERN\ERN_37D1\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ERN\ERN_37D1\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ERN\ERN_37D1\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DDEX\ERN\ERN_37D1\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ERN\ERN_37D1\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the collection of tracks for the Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ERN\ERN_37D1\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DDEX\ERN\ERN_37D1\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalDigitalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ERN\ERN_37D1\EventDateType
     */
    public function getOriginalDigitalReleaseDate()
    {
        return $this->originalDigitalReleaseDate;
    }

    /**
     * Sets a new originalDigitalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ERN\ERN_37D1\EventDateType $originalDigitalReleaseDate
     * @return self
     */
    public function setOriginalDigitalReleaseDate(?\DDEX\ERN\ERN_37D1\EventDateType $originalDigitalReleaseDate = null)
    {
        $this->originalDigitalReleaseDate = $originalDigitalReleaseDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DDEX\ERN\ERN_37D1\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFileAvailabilityDescription($index)
    {
        return isset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * unset fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFileAvailabilityDescription($index)
    {
        unset($this->fileAvailabilityDescription[$index]);
    }

    /**
     * Gets as fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @return \DDEX\ERN\ERN_37D1\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A Composite containing a Description providing details of how a DSP can obtain any related Release File.
     *
     * @param \DDEX\ERN\ERN_37D1\DescriptionType[] $fileAvailabilityDescription
     * @return self
     */
    public function setFileAvailabilityDescription(array $fileAvailabilityDescription = null)
    {
        $this->fileAvailabilityDescription = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * Adds as file
     *
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\FileType $file
     */
    public function addToFile(\DDEX\ERN\ERN_37D1\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFile($index)
    {
        return isset($this->file[$index]);
    }

    /**
     * unset file
     *
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFile($index)
    {
        unset($this->file[$index]);
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @return \DDEX\ERN\ERN_37D1\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a related Release File that a DSP can obtain.
     *
     * @param \DDEX\ERN\ERN_37D1\FileType[] $file
     * @return self
     */
    public function setFile(array $file = null)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\ERN\ERN_37D1\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return \DDEX\ERN\ERN_37D1\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param \DDEX\ERN\ERN_37D1\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return \DDEX\ERN\ERN_37D1\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param \DDEX\ERN\ERN_37D1\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\ERN\ERN_37D1\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as character
     *
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\CharacterType $character
     */
    public function addToCharacter(\DDEX\ERN\ERN_37D1\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacter($index)
    {
        return isset($this->character[$index]);
    }

    /**
     * unset character
     *
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacter($index)
    {
        unset($this->character[$index]);
    }

    /**
     * Gets as character
     *
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_37D1\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A Composite containing details of a Character in the Release. A Character may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_37D1\CharacterType[] $character
     * @return self
     */
    public function setCharacter(array $character = null)
    {
        $this->character = $character;
        return $this;
    }

    /**
     * Gets as numberOfUnitsPerPhysicalRelease
     *
     * A number of units (typically a CD or a DVD) contained in a physical Release. This Element is for boxed sets.
     *
     * @return int
     */
    public function getNumberOfUnitsPerPhysicalRelease()
    {
        return $this->numberOfUnitsPerPhysicalRelease;
    }

    /**
     * Sets a new numberOfUnitsPerPhysicalRelease
     *
     * A number of units (typically a CD or a DVD) contained in a physical Release. This Element is for boxed sets.
     *
     * @param int $numberOfUnitsPerPhysicalRelease
     * @return self
     */
    public function setNumberOfUnitsPerPhysicalRelease($numberOfUnitsPerPhysicalRelease)
    {
        $this->numberOfUnitsPerPhysicalRelease = $numberOfUnitsPerPhysicalRelease;
        return $this;
    }

    /**
     * Adds as displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D1\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DDEX\ERN\ERN_37D1\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayConductor($index)
    {
        return isset($this->displayConductor[$index]);
    }

    /**
     * unset displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayConductor($index)
    {
        unset($this->displayConductor[$index]);
    }

    /**
     * Gets as displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_37D1\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A Composite containing details of a DisplayConductor for the Release. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_37D1\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }
}


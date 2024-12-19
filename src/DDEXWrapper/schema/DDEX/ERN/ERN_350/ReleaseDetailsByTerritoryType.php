<?php

namespace DDEX\ERN\ERN_350;

/**
 * Class representing ReleaseDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors and other attributes of a ddex:Release which may vary according to ddex:Territory of release.
 * XSD Type: ReleaseDetailsByTerritory
 */
class ReleaseDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @var \DDEX\ddexC\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @var \DDEX\ddexC\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @var \DDEX\ddexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ddexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
     *
     * @var bool $isMultiArtistCompilation
     */
    private $isMultiArtistCompilation = null;

    /**
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
     *
     * @var \DDEX\ddexC\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @var \DDEX\ddexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @var \DDEX\ddexC\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ddexC\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A ddex:Composite containing details of a rating for the ddex:Release.
     *
     * @var \DDEX\ddexC\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:Release.
     *
     * @var \DDEX\ddexC\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @var \DDEX\ERN\ERN_350\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @var \DDEX\ddexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $originalDigitalReleaseDate
     */
    private $originalDigitalReleaseDate = null;

    /**
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
     *
     * @var \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
     */
    private $fileAvailabilityDescription = [
        
    ];

    /**
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
     *
     * @var \DDEX\ddexC\FileType[] $file
     */
    private $file = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
     *
     * @var \DDEX\ddexC\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Release.
     *
     * @var \DDEX\ddexC\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_350\CharacterType[] $character
     */
    private $character = [
        
    ];

    /**
     * A number of units (typically a CD or a DVD) contained in a physical ddex:Release. This Element is for boxed sets.
     *
     * @var int $numberOfUnitsPerPhysicalRelease
     */
    private $numberOfUnitsPerPhysicalRelease = null;

    /**
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ddexC\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReleaseSummaryDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddexC:ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
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
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return self
     * @param \DDEX\ddexC\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\ddexC\NameType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return \DDEX\ddexC\NameType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param \DDEX\ddexC\NameType[] $displayArtistName
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\ddexC\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return \DDEX\ddexC\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param \DDEX\ddexC\LabelNameType[] $labelName
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ddexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\TitleType $title
     */
    public function addToTitle(\DDEX\ddexC\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @return \DDEX\ddexC\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @param \DDEX\ddexC\TitleType[] $title
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\ddexC\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ddexC\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ddex:Release. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ddexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Gets as isMultiArtistCompilation
     *
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ddex:Release is a multiartist compilation (=True) or not (=False).
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DDEX\ddexC\AdministratingRecordCompanyType $administratingRecordCompany)
    {
        $this->administratingRecordCompany[] = $administratingRecordCompany;
        return $this;
    }

    /**
     * isset administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
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
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
     *
     * @return \DDEX\ddexC\AdministratingRecordCompanyType[]
     */
    public function getAdministratingRecordCompany()
    {
        return $this->administratingRecordCompany;
    }

    /**
     * Sets a new administratingRecordCompany
     *
     * A ddex:Composite containing details of the ddex:AdministratingRecordCompany for the ddex:Release.
     *
     * @param \DDEX\ddexC\AdministratingRecordCompanyType[] $administratingRecordCompany
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\ddexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @return \DDEX\ddexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers. This overrides the ddex:ReleaseType specified globally for the ddex:Release.
     *
     * @param \DDEX\ddexC\ReleaseTypeType[] $releaseType
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
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DDEX\ddexC\RelatedReleaseType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
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
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @return \DDEX\ddexC\RelatedReleaseType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to this ddex:Release.
     *
     * @param \DDEX\ddexC\RelatedReleaseType[] $relatedRelease
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
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ddexC\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ddexC\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ddexC\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Release according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ddexC\ParentalWarningTypeType[] $parentalWarningType
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
     * A ddex:Composite containing details of a rating for the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\AvRatingType $avRating
     */
    public function addToAvRating(\DDEX\ddexC\AvRatingType $avRating)
    {
        $this->avRating[] = $avRating;
        return $this;
    }

    /**
     * isset avRating
     *
     * A ddex:Composite containing details of a rating for the ddex:Release.
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
     * A ddex:Composite containing details of a rating for the ddex:Release.
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
     * A ddex:Composite containing details of a rating for the ddex:Release.
     *
     * @return \DDEX\ddexC\AvRatingType[]
     */
    public function getAvRating()
    {
        return $this->avRating;
    }

    /**
     * Sets a new avRating
     *
     * A ddex:Composite containing details of a rating for the ddex:Release.
     *
     * @param \DDEX\ddexC\AvRatingType[] $avRating
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
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:Release.
     *
     * @return \DDEX\ddexC\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A ddex:Composite containing a ddex:Comment about the promotion and marketing of the ddex:Release.
     *
     * @param \DDEX\ddexC\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DDEX\ddexC\CommentType $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_350\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DDEX\ERN\ERN_350\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
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
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
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
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return \DDEX\ERN\ERN_350\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ddex:Composite containing details of a group of some or all of the ddex:Resources in the ddex:Release. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @param \DDEX\ERN\ERN_350\ResourceGroupType[] $resourceGroup
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * Gets as releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DDEX\ddexC\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DDEX\ddexC\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalDigitalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getOriginalDigitalReleaseDate()
    {
        return $this->originalDigitalReleaseDate;
    }

    /**
     * Sets a new originalDigitalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available in electronic/online format for Usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $originalDigitalReleaseDate
     * @return self
     */
    public function setOriginalDigitalReleaseDate(?\DDEX\ddexC\EventDateType $originalDigitalReleaseDate = null)
    {
        $this->originalDigitalReleaseDate = $originalDigitalReleaseDate;
        return $this;
    }

    /**
     * Adds as fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
     *
     * @return self
     * @param \DDEX\ddexC\DescriptionType $fileAvailabilityDescription
     */
    public function addToFileAvailabilityDescription(\DDEX\ddexC\DescriptionType $fileAvailabilityDescription)
    {
        $this->fileAvailabilityDescription[] = $fileAvailabilityDescription;
        return $this;
    }

    /**
     * isset fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
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
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
     *
     * @return \DDEX\ddexC\DescriptionType[]
     */
    public function getFileAvailabilityDescription()
    {
        return $this->fileAvailabilityDescription;
    }

    /**
     * Sets a new fileAvailabilityDescription
     *
     * A ddex:Composite containing a ddex:Description providing details of how a ddex:DSP can obtain any related ddex:Release ddex:File.
     *
     * @param \DDEX\ddexC\DescriptionType[] $fileAvailabilityDescription
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
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
     *
     * @return self
     * @param \DDEX\ddexC\FileType $file
     */
    public function addToFile(\DDEX\ddexC\FileType $file)
    {
        $this->file[] = $file;
        return $this;
    }

    /**
     * isset file
     *
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
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
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
     *
     * @return \DDEX\ddexC\FileType[]
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A ddex:Composite containing details of a related ddex:Release ddex:File that a ddex:DSP can obtain.
     *
     * @param \DDEX\ddexC\FileType[] $file
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
     *
     * @return self
     * @param \DDEX\ddexC\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\ddexC\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
     *
     * @return \DDEX\ddexC\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Release containing ddex:Keywords.
     *
     * @param \DDEX\ddexC\KeywordsType[] $keywords
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
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Release.
     *
     * @return \DDEX\ddexC\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Release.
     *
     * @param \DDEX\ddexC\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\ddexC\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_350\CharacterType $character
     */
    public function addToCharacter(\DDEX\ERN\ERN_350\CharacterType $character)
    {
        $this->character[] = $character;
        return $this;
    }

    /**
     * isset character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_350\CharacterType[]
     */
    public function getCharacter()
    {
        return $this->character;
    }

    /**
     * Sets a new character
     *
     * A ddex:Composite containing details of a ddex:Character in the ddex:Release. A ddex:Character may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_350\CharacterType[] $character
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
     * A number of units (typically a CD or a DVD) contained in a physical ddex:Release. This Element is for boxed sets.
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
     * A number of units (typically a CD or a DVD) contained in a physical ddex:Release. This Element is for boxed sets.
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
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DDEX\ddexC\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ddexC\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ddex:Release. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ddexC\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }
}


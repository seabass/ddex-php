<?php

namespace DDEX\DSR\DSR_420;

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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @var \DDEX\DSR\DSR_420\NameType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing the Name of the Label for the Release.
     *
     * @var \DDEX\DSR\DSR_420\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @var \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of a Title of the Release.
     *
     * @var \DDEX\DSR\DSR_420\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the Release. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\DSR\DSR_420\ArtistType[] $displayArtist
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
     * @var \DDEX\DSR\DSR_420\AdministratingRecordCompanyType[] $administratingRecordCompany
     */
    private $administratingRecordCompany = [
        
    ];

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This overrides the ReleaseType specified globally for the Release.
     *
     * @var \DDEX\DSR\DSR_420\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to this Release.
     *
     * @var \DDEX\DSR\DSR_420\RelatedReleaseType[] $relatedRelease
     */
    private $relatedRelease = [
        
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the ReleaseSummaryDetailsByTerritory do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\NameType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\DSR\DSR_420\NameType $displayArtistName)
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
     * @return \DDEX\DSR\DSR_420\NameType[]
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
     * @param \DDEX\DSR\DSR_420\NameType[] $displayArtistName
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
     * @param \DDEX\DSR\DSR_420\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\DSR\DSR_420\LabelNameType $labelName)
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
     * @return \DDEX\DSR\DSR_420\LabelNameType[]
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
     * @param \DDEX\DSR\DSR_420\LabelNameType[] $labelName
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
     * @return \DDEX\DSR\DSR_420\RightsAgreementIdType
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
     * @param \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId = null)
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
     * @param \DDEX\DSR\DSR_420\TitleType $title
     */
    public function addToTitle(\DDEX\DSR\DSR_420\TitleType $title)
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
     * @return \DDEX\DSR\DSR_420\TitleType[]
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
     * @param \DDEX\DSR\DSR_420\TitleType[] $title
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
     * @param \DDEX\DSR\DSR_420\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\DSR\DSR_420\ArtistType $displayArtist)
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
     * @return \DDEX\DSR\DSR_420\ArtistType[]
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
     * @param \DDEX\DSR\DSR_420\ArtistType[] $displayArtist
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
     * @param \DDEX\DSR\DSR_420\AdministratingRecordCompanyType $administratingRecordCompany
     */
    public function addToAdministratingRecordCompany(\DDEX\DSR\DSR_420\AdministratingRecordCompanyType $administratingRecordCompany)
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
     * @return \DDEX\DSR\DSR_420\AdministratingRecordCompanyType[]
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
     * @param \DDEX\DSR\DSR_420\AdministratingRecordCompanyType[] $administratingRecordCompany
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
     * @param \DDEX\DSR\DSR_420\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\DSR\DSR_420\ReleaseTypeType $releaseType)
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
     * @return \DDEX\DSR\DSR_420\ReleaseTypeType[]
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
     * @param \DDEX\DSR\DSR_420\ReleaseTypeType[] $releaseType
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
     * @param \DDEX\DSR\DSR_420\RelatedReleaseType $relatedRelease
     */
    public function addToRelatedRelease(\DDEX\DSR\DSR_420\RelatedReleaseType $relatedRelease)
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
     * @return \DDEX\DSR\DSR_420\RelatedReleaseType[]
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
     * @param \DDEX\DSR\DSR_420\RelatedReleaseType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }
}


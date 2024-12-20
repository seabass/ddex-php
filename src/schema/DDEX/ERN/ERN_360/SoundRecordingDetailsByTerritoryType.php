<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing SoundRecordingDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors and other attributes of a SoundRecording which may vary according to Territory of release.
 * XSD Type: SoundRecordingDetailsByTerritory
 */
class SoundRecordingDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_360\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_360\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing the Name of the Label under which the Release is to be marketed.
     *
     * @var \DDEX\ERN\ERN_360\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\TypedRightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally).
     *
     * @var \DDEX\ERN\ERN_360\EventDateType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution.
     *
     * @var \DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * The number indicating the order of the SoundRecording in a group of SoundRecordings in a Release.
     *
     * @var string $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @var \DDEX\ERN\ERN_360\HostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @var \DDEX\ERN\ERN_360\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ERN\ERN_360\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing technical details of the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\TechnicalSoundRecordingDetailsType[] $technicalSoundRecordingDetails
     */
    private $technicalSoundRecordingDetails = [
        
    ];

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
     *
     * @var \DDEX\ERN\ERN_360\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the SoundRecording details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the SoundRecording details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * Adds as title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TitleType $title
     */
    public function addToTitle(\DDEX\ERN\ERN_360\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
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
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\TitleType[] $title
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\ERN\ERN_360\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_360\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_360\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as displayConductor
     *
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DDEX\ERN\ERN_360\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_360\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_360\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DDEX\ERN\ERN_360\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a Contributor to the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\ResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DDEX\ERN\ERN_360\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ERN\ERN_360\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\ERN\ERN_360\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed.
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
     * A Composite containing the Name of the Label under which the Release is to be marketed.
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
     * A Composite containing the Name of the Label under which the Release is to be marketed.
     *
     * @return \DDEX\ERN\ERN_360\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the Label under which the Release is to be marketed.
     *
     * @param \DDEX\ERN\ERN_360\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TypedRightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\ERN\ERN_360\TypedRightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\TypedRightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of RightsController of Rights in the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\TypedRightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally).
     *
     * @return \DDEX\ERN\ERN_360\EventDateType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was re-mastered (usually digitally).
     *
     * @param \DDEX\ERN\ERN_360\EventDateType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DDEX\ERN\ERN_360\EventDateType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution.
     *
     * @return \DDEX\ERN\ERN_360\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SoundRecording was originally published, whether for physical or electronic/online distribution.
     *
     * @param \DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\PLineType $pLine
     */
    public function addToPLine(\DDEX\ERN\ERN_360\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\CourtesyLineType
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the SoundRecording in a group of SoundRecordings in a Release.
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the SoundRecording in a group of SoundRecordings in a Release.
     *
     * @param string $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\HostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DDEX\ERN\ERN_360\HostSoundCarrierType $hostSoundCarrier)
    {
        $this->hostSoundCarrier[] = $hostSoundCarrier;
        return $this;
    }

    /**
     * isset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHostSoundCarrier($index)
    {
        return isset($this->hostSoundCarrier[$index]);
    }

    /**
     * unset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHostSoundCarrier($index)
    {
        unset($this->hostSoundCarrier[$index]);
    }

    /**
     * Gets as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @return \DDEX\ERN\ERN_360\HostSoundCarrierType[]
     */
    public function getHostSoundCarrier()
    {
        return $this->hostSoundCarrier;
    }

    /**
     * Sets a new hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the SoundRecording appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of SoundRecording information.
     *
     * @param \DDEX\ERN\ERN_360\HostSoundCarrierType[] $hostSoundCarrier
     * @return self
     */
    public function setHostSoundCarrier(array $hostSoundCarrier = null)
    {
        $this->hostSoundCarrier = $hostSoundCarrier;
        return $this;
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\CommentType
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DDEX\ERN\ERN_360\CommentType $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\GenreType $genre
     */
    public function addToGenre(\DDEX\ERN\ERN_360\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
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
     * A Composite containing details of a Genre to which the SoundRecording belongs.
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
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @return \DDEX\ERN\ERN_360\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @param \DDEX\ERN\ERN_360\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ERN\ERN_360\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ERN\ERN_360\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ERN\ERN_360\ParentalWarningTypeType[] $parentalWarningType
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
     * A Composite containing details of a rating for the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\AvRatingType $avRating
     */
    public function addToAvRating(\DDEX\ERN\ERN_360\AvRatingType $avRating)
    {
        $this->avRating[] = $avRating;
        return $this;
    }

    /**
     * isset avRating
     *
     * A Composite containing details of a rating for the SoundRecording.
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
     * A Composite containing details of a rating for the SoundRecording.
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
     * A Composite containing details of a rating for the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\AvRatingType[]
     */
    public function getAvRating()
    {
        return $this->avRating;
    }

    /**
     * Sets a new avRating
     *
     * A Composite containing details of a rating for the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating = null)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Adds as technicalSoundRecordingDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TechnicalSoundRecordingDetailsType $technicalSoundRecordingDetails
     */
    public function addToTechnicalSoundRecordingDetails(\DDEX\ERN\ERN_360\TechnicalSoundRecordingDetailsType $technicalSoundRecordingDetails)
    {
        $this->technicalSoundRecordingDetails[] = $technicalSoundRecordingDetails;
        return $this;
    }

    /**
     * isset technicalSoundRecordingDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalSoundRecordingDetails($index)
    {
        return isset($this->technicalSoundRecordingDetails[$index]);
    }

    /**
     * unset technicalSoundRecordingDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalSoundRecordingDetails($index)
    {
        unset($this->technicalSoundRecordingDetails[$index]);
    }

    /**
     * Gets as technicalSoundRecordingDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\TechnicalSoundRecordingDetailsType[]
     */
    public function getTechnicalSoundRecordingDetails()
    {
        return $this->technicalSoundRecordingDetails;
    }

    /**
     * Sets a new technicalSoundRecordingDetails
     *
     * A Composite containing technical details of the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\TechnicalSoundRecordingDetailsType[] $technicalSoundRecordingDetails
     * @return self
     */
    public function setTechnicalSoundRecordingDetails(array $technicalSoundRecordingDetails = null)
    {
        $this->technicalSoundRecordingDetails = $technicalSoundRecordingDetails;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @return \DDEX\ERN\ERN_360\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @param \DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\ERN\ERN_360\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
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
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
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
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
     *
     * @return \DDEX\ERN\ERN_360\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the SoundRecording containing Keywords.
     *
     * @param \DDEX\ERN\ERN_360\KeywordsType[] $keywords
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
     * A Composite containing details of a Synopsis of the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\ERN\ERN_360\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }
}


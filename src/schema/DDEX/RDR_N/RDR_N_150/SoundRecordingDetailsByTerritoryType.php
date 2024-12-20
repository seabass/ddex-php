<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing SoundRecordingDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors and other attributes of a SoundRecording which may vary according to Territory of release.
 * XSD Type: SoundRecordingDetailsByTerritory
 */
class SoundRecordingDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title of the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a DisplayConductor for the SoundRecording. A DisplayConductor may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DetailedArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DetailedArtistType[] $displayComposer
     */
    private $displayComposer = [
        
    ];

    /**
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @var \DDEX\RDR_N\RDR_N_150\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $licensor
     */
    private $licensor = null;

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CourtesyLineType $courtesyLine
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
     * @var \DDEX\RDR_N\RDR_N_150\HostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CommentType $marketingComment
     */
    private $marketingComment = null;

    /**
     * A Composite containing details of a Genre to which the SoundRecording belongs.
     *
     * @var \DDEX\RDR_N\RDR_N_150\GenreWithClassicalType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the SoundRecording according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a rating for the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AvRatingType[] $avRating
     */
    private $avRating = [
        
    ];

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a Type of an agreement that covers the making of the SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType
     */
    private $governingAgreementType = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SoundRecordingDetailsByTerritory as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the SoundRecording details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the SoundRecording details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $excludedTerritoryCode
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
     * @param \DDEX\RDR_N\RDR_N_150\TitleType $title
     */
    public function addToTitle(\DDEX\RDR_N\RDR_N_150\TitleType $title)
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
     * @return \DDEX\RDR_N\RDR_N_150\TitleType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist for the SoundRecording. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
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
     * @param \DDEX\RDR_N\RDR_N_150\DetailedArtistType $displayConductor
     */
    public function addToDisplayConductor(\DDEX\RDR_N\RDR_N_150\DetailedArtistType $displayConductor)
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
     * @return \DDEX\RDR_N\RDR_N_150\DetailedArtistType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\DetailedArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }

    /**
     * Adds as displayComposer
     *
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DetailedArtistType $displayComposer
     */
    public function addToDisplayComposer(\DDEX\RDR_N\RDR_N_150\DetailedArtistType $displayComposer)
    {
        $this->displayComposer[] = $displayComposer;
        return $this;
    }

    /**
     * isset displayComposer
     *
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayComposer($index)
    {
        return isset($this->displayComposer[$index]);
    }

    /**
     * unset displayComposer
     *
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayComposer($index)
    {
        unset($this->displayComposer[$index]);
    }

    /**
     * Gets as displayComposer
     *
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DetailedArtistType[]
     */
    public function getDisplayComposer()
    {
        return $this->displayComposer;
    }

    /**
     * Sets a new displayComposer
     *
     * A Composite containing details of a DisplayComposer for the SoundRecording. A DisplayComposer may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DetailedArtistType[] $displayComposer
     * @return self
     */
    public function setDisplayComposer(array $displayComposer = null)
    {
        $this->displayComposer = $displayComposer;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\RDR_N\RDR_N_150\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
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
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
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
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @return \DDEX\RDR_N\RDR_N_150\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this SoundRecording is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @param \DDEX\RDR_N\RDR_N_150\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PLineType $pLine
     */
    public function addToPLine(\DDEX\RDR_N\RDR_N_150\PLineType $pLine)
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
     * @return \DDEX\RDR_N\RDR_N_150\PLineType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as licensor
     *
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyDescriptorType
     */
    public function getLicensor()
    {
        return $this->licensor;
    }

    /**
     * Sets a new licensor
     *
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyDescriptorType $licensor
     * @return self
     */
    public function setLicensor(?\DDEX\RDR_N\RDR_N_150\PartyDescriptorType $licensor = null)
    {
        $this->licensor = $licensor;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for guests Artists or others featured on the SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CourtesyLineType
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
     * @param \DDEX\RDR_N\RDR_N_150\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DDEX\RDR_N\RDR_N_150\CourtesyLineType $courtesyLine = null)
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
     * @param \DDEX\RDR_N\RDR_N_150\HostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DDEX\RDR_N\RDR_N_150\HostSoundCarrierType $hostSoundCarrier)
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
     * @return \DDEX\RDR_N\RDR_N_150\HostSoundCarrierType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\HostSoundCarrierType[] $hostSoundCarrier
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
     * @return \DDEX\RDR_N\RDR_N_150\CommentType
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
     * @param \DDEX\RDR_N\RDR_N_150\CommentType $marketingComment
     * @return self
     */
    public function setMarketingComment(?\DDEX\RDR_N\RDR_N_150\CommentType $marketingComment = null)
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
     * @param \DDEX\RDR_N\RDR_N_150\GenreWithClassicalType $genre
     */
    public function addToGenre(\DDEX\RDR_N\RDR_N_150\GenreWithClassicalType $genre)
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
     * @return \DDEX\RDR_N\RDR_N_150\GenreWithClassicalType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\GenreWithClassicalType[] $genre
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
     * @param \DDEX\RDR_N\RDR_N_150\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\RDR_N\RDR_N_150\ParentalWarningTypeType $parentalWarningType)
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
     * @return \DDEX\RDR_N\RDR_N_150\ParentalWarningTypeType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ParentalWarningTypeType[] $parentalWarningType
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
     * @param \DDEX\RDR_N\RDR_N_150\AvRatingType $avRating
     */
    public function addToAvRating(\DDEX\RDR_N\RDR_N_150\AvRatingType $avRating)
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
     * @return \DDEX\RDR_N\RDR_N_150\AvRatingType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\AvRatingType[] $avRating
     * @return self
     */
    public function setAvRating(array $avRating = null)
    {
        $this->avRating = $avRating;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\FulfillmentDateType
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
     * @param \DDEX\RDR_N\RDR_N_150\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DDEX\RDR_N\RDR_N_150\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Gets as governingAgreementType
     *
     * A Composite containing details of a Type of an agreement that covers the making of the SoundRecording.
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
     * A Composite containing details of a Type of an agreement that covers the making of the SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType
     * @return self
     */
    public function setGoverningAgreementType(?\DDEX\RDR_N\RDR_N_150\GoverningAgreementTypeType $governingAgreementType = null)
    {
        $this->governingAgreementType = $governingAgreementType;
        return $this;
    }
}


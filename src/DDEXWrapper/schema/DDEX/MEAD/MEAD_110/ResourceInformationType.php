<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ResourceInformationType
 *
 * A Composite containing details of a Resource.
 * XSD Type: ResourceInformation
 */
class ResourceInformationType
{
    /**
     * The StartDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $priorityPeriodStartDate
     */
    private $priorityPeriodStartDate = null;

    /**
     * The EndDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $priorityPeriodEndDate
     */
    private $priorityPeriodEndDate = null;

    /**
     * A Territory to which the information applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * A Composite containing summary details of a Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\ResourceSummaryType $resourceSummary
     */
    private $resourceSummary = null;

    /**
     * A Composite containing details of a Genre Category.
     *
     * @var \DDEX\MEAD\MEAD_110\GenreCategoryType[] $genreCategory
     */
    private $genreCategory = [
        
    ];

    /**
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\SubGenreCategoryType[] $subGenreCategory
     */
    private $subGenreCategory = [
        
    ];

    /**
     * A Composite containing details of a form of the Work on which the Resource is based (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @var \DDEX\MEAD\MEAD_110\FormType $form
     */
    private $form = null;

    /**
     * A Composite containing details of a vocal register of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\VocalRegisterType[] $vocalRegister
     */
    private $vocalRegister = [
        
    ];

    /**
     * A Composite containing details of a focus track.
     *
     * @var \DDEX\MEAD\MEAD_110\FocusType[] $focus
     */
    private $focus = [
        
    ];

    /**
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\AbsolutePitchType[] $absolutePitch
     */
    private $absolutePitch = [
        
    ];

    /**
     * A Composite containing details of a time signature of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\TimeSignatureType[] $timeSignature
     */
    private $timeSignature = [
        
    ];

    /**
     * A Composite containing details of a tempo.
     *
     * @var \DDEX\MEAD\MEAD_110\TempoValueType[] $tempo
     */
    private $tempo = [
        
    ];

    /**
     * A Composite containing details of the beats of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\BeatsPerMinuteType[] $beatsPerMinute
     */
    private $beatsPerMinute = [
        
    ];

    /**
     * A Composite containing details of an intensity.
     *
     * @var \DDEX\MEAD\MEAD_110\IntensityType[] $intensity
     */
    private $intensity = [
        
    ];

    /**
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\InstrumentUsedType[] $instrumentUsed
     */
    private $instrumentUsed = [
        
    ];

    /**
     * A Composite containing details of a harmony of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\HarmonyType[] $harmony
     */
    private $harmony = [
        
    ];

    /**
     * A Flag indicating whether the Recording is an OriginalRecording (=true) or not (=false).
     *
     * @var \DDEX\MEAD\MEAD_110\FlagType $isOriginal
     */
    private $isOriginal = null;

    /**
     * A Flag indicating whether the Recording is a Cover (=true) or not (=false).
     *
     * @var \DDEX\MEAD\MEAD_110\FlagType $isCover
     */
    private $isCover = null;

    /**
     * A Composite containing details of a Mood.
     *
     * @var \DDEX\MEAD\MEAD_110\MoodType[] $mood
     */
    private $mood = [
        
    ];

    /**
     * A Composite containing details of a dance style.
     *
     * @var \DDEX\MEAD\MEAD_110\DanceStyleType[] $danceStyle
     */
    private $danceStyle = [
        
    ];

    /**
     * A Composite containing details of a rhythm style.
     *
     * @var \DDEX\MEAD\MEAD_110\RhythmStyleType[] $rhythmStyle
     */
    private $rhythmStyle = [
        
    ];

    /**
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @var \DDEX\MEAD\MEAD_110\ArtisticStyleType[] $artisticStyle
     */
    private $artisticStyle = [
        
    ];

    /**
     * A Composite containing details of a Theme.
     *
     * @var \DDEX\MEAD\MEAD_110\ThemeType[] $theme
     */
    private $theme = [
        
    ];

    /**
     * A Composite containing details of an activity that the content is for.
     *
     * @var \DDEX\MEAD\MEAD_110\ActivityType[] $activity
     */
    private $activity = [
        
    ];

    /**
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @var \DDEX\MEAD\MEAD_110\UsedMusicalWorkType[] $usedMusicalWork
     */
    private $usedMusicalWork = [
        
    ];

    /**
     * A Composite containing details of a related Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\ResourceRelationshipType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A Composite containing details of Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_110\LyricsType[] $lyrics
     */
    private $lyrics = [
        
    ];

    /**
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\MEAD\MEAD_110\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * A Composite containing details of a sample.
     *
     * @var \DDEX\MEAD\MEAD_110\SampleType[] $sample
     */
    private $sample = [
        
    ];

    /**
     * A Composite containing details of a Recording Part.
     *
     * @var \DDEX\MEAD\MEAD_110\RecordingPartType[] $recordingPart
     */
    private $recordingPart = [
        
    ];

    /**
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @var \DDEX\MEAD\MEAD_110\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @var \DDEX\MEAD\MEAD_110\ImpactDateType[] $impactDate
     */
    private $impactDate = [
        
    ];

    /**
     * A Composite containing details of a period of the Work on which the Resource is based.
     *
     * @var \DDEX\MEAD\MEAD_110\ClassicalPeriodType $classicalPeriod
     */
    private $classicalPeriod = null;

    /**
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @var \DDEX\MEAD\MEAD_110\EpochType[] $epoch
     */
    private $epoch = [
        
    ];

    /**
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @var \DDEX\MEAD\MEAD_110\ArtisticInfluenceType[] $artisticInfluence
     */
    private $artisticInfluence = [
        
    ];

    /**
     * A Composite containing details of a similar Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\SimilarResourceType[] $isSimilar
     */
    private $isSimilar = [
        
    ];

    /**
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_110\HistoricChartingInformationType[] $historicChartingInformation
     */
    private $historicChartingInformation = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_110\AwardType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of a RecordingSession.
     *
     * @var \DDEX\MEAD\MEAD_110\LocationAndDateOfSessionType[] $locationAndDateOfSession
     */
    private $locationAndDateOfSession = [
        
    ];

    /**
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @var \DDEX\MEAD\MEAD_110\AlternativeTitleType[] $alternativeTitle
     */
    private $alternativeTitle = [
        
    ];

    /**
     * A Composite containing details of an Image relating to the Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * Gets as priorityPeriodStartDate
     *
     * The StartDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getPriorityPeriodStartDate()
    {
        return $this->priorityPeriodStartDate;
    }

    /**
     * Sets a new priorityPeriodStartDate
     *
     * The StartDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $priorityPeriodStartDate
     * @return self
     */
    public function setPriorityPeriodStartDate($priorityPeriodStartDate)
    {
        $this->priorityPeriodStartDate = $priorityPeriodStartDate;
        return $this;
    }

    /**
     * Gets as priorityPeriodEndDate
     *
     * The EndDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getPriorityPeriodEndDate()
    {
        return $this->priorityPeriodEndDate;
    }

    /**
     * Sets a new priorityPeriodEndDate
     *
     * The EndDate of a Period in which the Resource is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $priorityPeriodEndDate
     * @return self
     */
    public function setPriorityPeriodEndDate($priorityPeriodEndDate)
    {
        $this->priorityPeriodEndDate = $priorityPeriodEndDate;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the information applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the information applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as resourceSummary
     *
     * A Composite containing summary details of a Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\ResourceSummaryType
     */
    public function getResourceSummary()
    {
        return $this->resourceSummary;
    }

    /**
     * Sets a new resourceSummary
     *
     * A Composite containing summary details of a Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\ResourceSummaryType $resourceSummary
     * @return self
     */
    public function setResourceSummary(\DDEX\MEAD\MEAD_110\ResourceSummaryType $resourceSummary)
    {
        $this->resourceSummary = $resourceSummary;
        return $this;
    }

    /**
     * Adds as genreCategory
     *
     * A Composite containing details of a Genre Category.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\GenreCategoryType $genreCategory
     */
    public function addToGenreCategory(\DDEX\MEAD\MEAD_110\GenreCategoryType $genreCategory)
    {
        $this->genreCategory[] = $genreCategory;
        return $this;
    }

    /**
     * isset genreCategory
     *
     * A Composite containing details of a Genre Category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenreCategory($index)
    {
        return isset($this->genreCategory[$index]);
    }

    /**
     * unset genreCategory
     *
     * A Composite containing details of a Genre Category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenreCategory($index)
    {
        unset($this->genreCategory[$index]);
    }

    /**
     * Gets as genreCategory
     *
     * A Composite containing details of a Genre Category.
     *
     * @return \DDEX\MEAD\MEAD_110\GenreCategoryType[]
     */
    public function getGenreCategory()
    {
        return $this->genreCategory;
    }

    /**
     * Sets a new genreCategory
     *
     * A Composite containing details of a Genre Category.
     *
     * @param \DDEX\MEAD\MEAD_110\GenreCategoryType[] $genreCategory
     * @return self
     */
    public function setGenreCategory(array $genreCategory = null)
    {
        $this->genreCategory = $genreCategory;
        return $this;
    }

    /**
     * Adds as subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SubGenreCategoryType $subGenreCategory
     */
    public function addToSubGenreCategory(\DDEX\MEAD\MEAD_110\SubGenreCategoryType $subGenreCategory)
    {
        $this->subGenreCategory[] = $subGenreCategory;
        return $this;
    }

    /**
     * isset subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubGenreCategory($index)
    {
        return isset($this->subGenreCategory[$index]);
    }

    /**
     * unset subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubGenreCategory($index)
    {
        unset($this->subGenreCategory[$index]);
    }

    /**
     * Gets as subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\SubGenreCategoryType[]
     */
    public function getSubGenreCategory()
    {
        return $this->subGenreCategory;
    }

    /**
     * Sets a new subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\SubGenreCategoryType[] $subGenreCategory
     * @return self
     */
    public function setSubGenreCategory(array $subGenreCategory = null)
    {
        $this->subGenreCategory = $subGenreCategory;
        return $this;
    }

    /**
     * Gets as form
     *
     * A Composite containing details of a form of the Work on which the Resource is based (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @return \DDEX\MEAD\MEAD_110\FormType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * A Composite containing details of a form of the Work on which the Resource is based (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @param \DDEX\MEAD\MEAD_110\FormType $form
     * @return self
     */
    public function setForm(?\DDEX\MEAD\MEAD_110\FormType $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Adds as vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\VocalRegisterType $vocalRegister
     */
    public function addToVocalRegister(\DDEX\MEAD\MEAD_110\VocalRegisterType $vocalRegister)
    {
        $this->vocalRegister[] = $vocalRegister;
        return $this;
    }

    /**
     * isset vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVocalRegister($index)
    {
        return isset($this->vocalRegister[$index]);
    }

    /**
     * unset vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVocalRegister($index)
    {
        unset($this->vocalRegister[$index]);
    }

    /**
     * Gets as vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\VocalRegisterType[]
     */
    public function getVocalRegister()
    {
        return $this->vocalRegister;
    }

    /**
     * Sets a new vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\VocalRegisterType[] $vocalRegister
     * @return self
     */
    public function setVocalRegister(array $vocalRegister = null)
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
     * @param \DDEX\MEAD\MEAD_110\FocusType $focus
     */
    public function addToFocus(\DDEX\MEAD\MEAD_110\FocusType $focus)
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
     * @return \DDEX\MEAD\MEAD_110\FocusType[]
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
     * @param \DDEX\MEAD\MEAD_110\FocusType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Adds as absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\AbsolutePitchType $absolutePitch
     */
    public function addToAbsolutePitch(\DDEX\MEAD\MEAD_110\AbsolutePitchType $absolutePitch)
    {
        $this->absolutePitch[] = $absolutePitch;
        return $this;
    }

    /**
     * isset absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAbsolutePitch($index)
    {
        return isset($this->absolutePitch[$index]);
    }

    /**
     * unset absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAbsolutePitch($index)
    {
        unset($this->absolutePitch[$index]);
    }

    /**
     * Gets as absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\AbsolutePitchType[]
     */
    public function getAbsolutePitch()
    {
        return $this->absolutePitch;
    }

    /**
     * Sets a new absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\AbsolutePitchType[] $absolutePitch
     * @return self
     */
    public function setAbsolutePitch(array $absolutePitch = null)
    {
        $this->absolutePitch = $absolutePitch;
        return $this;
    }

    /**
     * Adds as timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\TimeSignatureType $timeSignature
     */
    public function addToTimeSignature(\DDEX\MEAD\MEAD_110\TimeSignatureType $timeSignature)
    {
        $this->timeSignature[] = $timeSignature;
        return $this;
    }

    /**
     * isset timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeSignature($index)
    {
        return isset($this->timeSignature[$index]);
    }

    /**
     * unset timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeSignature($index)
    {
        unset($this->timeSignature[$index]);
    }

    /**
     * Gets as timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\TimeSignatureType[]
     */
    public function getTimeSignature()
    {
        return $this->timeSignature;
    }

    /**
     * Sets a new timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\TimeSignatureType[] $timeSignature
     * @return self
     */
    public function setTimeSignature(array $timeSignature = null)
    {
        $this->timeSignature = $timeSignature;
        return $this;
    }

    /**
     * Adds as tempo
     *
     * A Composite containing details of a tempo.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\TempoValueType $tempo
     */
    public function addToTempo(\DDEX\MEAD\MEAD_110\TempoValueType $tempo)
    {
        $this->tempo[] = $tempo;
        return $this;
    }

    /**
     * isset tempo
     *
     * A Composite containing details of a tempo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTempo($index)
    {
        return isset($this->tempo[$index]);
    }

    /**
     * unset tempo
     *
     * A Composite containing details of a tempo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTempo($index)
    {
        unset($this->tempo[$index]);
    }

    /**
     * Gets as tempo
     *
     * A Composite containing details of a tempo.
     *
     * @return \DDEX\MEAD\MEAD_110\TempoValueType[]
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Sets a new tempo
     *
     * A Composite containing details of a tempo.
     *
     * @param \DDEX\MEAD\MEAD_110\TempoValueType[] $tempo
     * @return self
     */
    public function setTempo(array $tempo = null)
    {
        $this->tempo = $tempo;
        return $this;
    }

    /**
     * Adds as beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\BeatsPerMinuteType $beatsPerMinute
     */
    public function addToBeatsPerMinute(\DDEX\MEAD\MEAD_110\BeatsPerMinuteType $beatsPerMinute)
    {
        $this->beatsPerMinute[] = $beatsPerMinute;
        return $this;
    }

    /**
     * isset beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBeatsPerMinute($index)
    {
        return isset($this->beatsPerMinute[$index]);
    }

    /**
     * unset beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBeatsPerMinute($index)
    {
        unset($this->beatsPerMinute[$index]);
    }

    /**
     * Gets as beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\BeatsPerMinuteType[]
     */
    public function getBeatsPerMinute()
    {
        return $this->beatsPerMinute;
    }

    /**
     * Sets a new beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\BeatsPerMinuteType[] $beatsPerMinute
     * @return self
     */
    public function setBeatsPerMinute(array $beatsPerMinute = null)
    {
        $this->beatsPerMinute = $beatsPerMinute;
        return $this;
    }

    /**
     * Adds as intensity
     *
     * A Composite containing details of an intensity.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\IntensityType $intensity
     */
    public function addToIntensity(\DDEX\MEAD\MEAD_110\IntensityType $intensity)
    {
        $this->intensity[] = $intensity;
        return $this;
    }

    /**
     * isset intensity
     *
     * A Composite containing details of an intensity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIntensity($index)
    {
        return isset($this->intensity[$index]);
    }

    /**
     * unset intensity
     *
     * A Composite containing details of an intensity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIntensity($index)
    {
        unset($this->intensity[$index]);
    }

    /**
     * Gets as intensity
     *
     * A Composite containing details of an intensity.
     *
     * @return \DDEX\MEAD\MEAD_110\IntensityType[]
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * Sets a new intensity
     *
     * A Composite containing details of an intensity.
     *
     * @param \DDEX\MEAD\MEAD_110\IntensityType[] $intensity
     * @return self
     */
    public function setIntensity(array $intensity = null)
    {
        $this->intensity = $intensity;
        return $this;
    }

    /**
     * Adds as instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\InstrumentUsedType $instrumentUsed
     */
    public function addToInstrumentUsed(\DDEX\MEAD\MEAD_110\InstrumentUsedType $instrumentUsed)
    {
        $this->instrumentUsed[] = $instrumentUsed;
        return $this;
    }

    /**
     * isset instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentUsed($index)
    {
        return isset($this->instrumentUsed[$index]);
    }

    /**
     * unset instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentUsed($index)
    {
        unset($this->instrumentUsed[$index]);
    }

    /**
     * Gets as instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\InstrumentUsedType[]
     */
    public function getInstrumentUsed()
    {
        return $this->instrumentUsed;
    }

    /**
     * Sets a new instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\InstrumentUsedType[] $instrumentUsed
     * @return self
     */
    public function setInstrumentUsed(array $instrumentUsed = null)
    {
        $this->instrumentUsed = $instrumentUsed;
        return $this;
    }

    /**
     * Adds as harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\HarmonyType $harmony
     */
    public function addToHarmony(\DDEX\MEAD\MEAD_110\HarmonyType $harmony)
    {
        $this->harmony[] = $harmony;
        return $this;
    }

    /**
     * isset harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHarmony($index)
    {
        return isset($this->harmony[$index]);
    }

    /**
     * unset harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHarmony($index)
    {
        unset($this->harmony[$index]);
    }

    /**
     * Gets as harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\HarmonyType[]
     */
    public function getHarmony()
    {
        return $this->harmony;
    }

    /**
     * Sets a new harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\HarmonyType[] $harmony
     * @return self
     */
    public function setHarmony(array $harmony = null)
    {
        $this->harmony = $harmony;
        return $this;
    }

    /**
     * Gets as isOriginal
     *
     * A Flag indicating whether the Recording is an OriginalRecording (=true) or not (=false).
     *
     * @return \DDEX\MEAD\MEAD_110\FlagType
     */
    public function getIsOriginal()
    {
        return $this->isOriginal;
    }

    /**
     * Sets a new isOriginal
     *
     * A Flag indicating whether the Recording is an OriginalRecording (=true) or not (=false).
     *
     * @param \DDEX\MEAD\MEAD_110\FlagType $isOriginal
     * @return self
     */
    public function setIsOriginal(?\DDEX\MEAD\MEAD_110\FlagType $isOriginal = null)
    {
        $this->isOriginal = $isOriginal;
        return $this;
    }

    /**
     * Gets as isCover
     *
     * A Flag indicating whether the Recording is a Cover (=true) or not (=false).
     *
     * @return \DDEX\MEAD\MEAD_110\FlagType
     */
    public function getIsCover()
    {
        return $this->isCover;
    }

    /**
     * Sets a new isCover
     *
     * A Flag indicating whether the Recording is a Cover (=true) or not (=false).
     *
     * @param \DDEX\MEAD\MEAD_110\FlagType $isCover
     * @return self
     */
    public function setIsCover(?\DDEX\MEAD\MEAD_110\FlagType $isCover = null)
    {
        $this->isCover = $isCover;
        return $this;
    }

    /**
     * Adds as mood
     *
     * A Composite containing details of a Mood.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MoodType $mood
     */
    public function addToMood(\DDEX\MEAD\MEAD_110\MoodType $mood)
    {
        $this->mood[] = $mood;
        return $this;
    }

    /**
     * isset mood
     *
     * A Composite containing details of a Mood.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMood($index)
    {
        return isset($this->mood[$index]);
    }

    /**
     * unset mood
     *
     * A Composite containing details of a Mood.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMood($index)
    {
        unset($this->mood[$index]);
    }

    /**
     * Gets as mood
     *
     * A Composite containing details of a Mood.
     *
     * @return \DDEX\MEAD\MEAD_110\MoodType[]
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Sets a new mood
     *
     * A Composite containing details of a Mood.
     *
     * @param \DDEX\MEAD\MEAD_110\MoodType[] $mood
     * @return self
     */
    public function setMood(array $mood = null)
    {
        $this->mood = $mood;
        return $this;
    }

    /**
     * Adds as danceStyle
     *
     * A Composite containing details of a dance style.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\DanceStyleType $danceStyle
     */
    public function addToDanceStyle(\DDEX\MEAD\MEAD_110\DanceStyleType $danceStyle)
    {
        $this->danceStyle[] = $danceStyle;
        return $this;
    }

    /**
     * isset danceStyle
     *
     * A Composite containing details of a dance style.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDanceStyle($index)
    {
        return isset($this->danceStyle[$index]);
    }

    /**
     * unset danceStyle
     *
     * A Composite containing details of a dance style.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDanceStyle($index)
    {
        unset($this->danceStyle[$index]);
    }

    /**
     * Gets as danceStyle
     *
     * A Composite containing details of a dance style.
     *
     * @return \DDEX\MEAD\MEAD_110\DanceStyleType[]
     */
    public function getDanceStyle()
    {
        return $this->danceStyle;
    }

    /**
     * Sets a new danceStyle
     *
     * A Composite containing details of a dance style.
     *
     * @param \DDEX\MEAD\MEAD_110\DanceStyleType[] $danceStyle
     * @return self
     */
    public function setDanceStyle(array $danceStyle = null)
    {
        $this->danceStyle = $danceStyle;
        return $this;
    }

    /**
     * Adds as rhythmStyle
     *
     * A Composite containing details of a rhythm style.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\RhythmStyleType $rhythmStyle
     */
    public function addToRhythmStyle(\DDEX\MEAD\MEAD_110\RhythmStyleType $rhythmStyle)
    {
        $this->rhythmStyle[] = $rhythmStyle;
        return $this;
    }

    /**
     * isset rhythmStyle
     *
     * A Composite containing details of a rhythm style.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRhythmStyle($index)
    {
        return isset($this->rhythmStyle[$index]);
    }

    /**
     * unset rhythmStyle
     *
     * A Composite containing details of a rhythm style.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRhythmStyle($index)
    {
        unset($this->rhythmStyle[$index]);
    }

    /**
     * Gets as rhythmStyle
     *
     * A Composite containing details of a rhythm style.
     *
     * @return \DDEX\MEAD\MEAD_110\RhythmStyleType[]
     */
    public function getRhythmStyle()
    {
        return $this->rhythmStyle;
    }

    /**
     * Sets a new rhythmStyle
     *
     * A Composite containing details of a rhythm style.
     *
     * @param \DDEX\MEAD\MEAD_110\RhythmStyleType[] $rhythmStyle
     * @return self
     */
    public function setRhythmStyle(array $rhythmStyle = null)
    {
        $this->rhythmStyle = $rhythmStyle;
        return $this;
    }

    /**
     * Adds as artisticStyle
     *
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ArtisticStyleType $artisticStyle
     */
    public function addToArtisticStyle(\DDEX\MEAD\MEAD_110\ArtisticStyleType $artisticStyle)
    {
        $this->artisticStyle[] = $artisticStyle;
        return $this;
    }

    /**
     * isset artisticStyle
     *
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtisticStyle($index)
    {
        return isset($this->artisticStyle[$index]);
    }

    /**
     * unset artisticStyle
     *
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtisticStyle($index)
    {
        unset($this->artisticStyle[$index]);
    }

    /**
     * Gets as artisticStyle
     *
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @return \DDEX\MEAD\MEAD_110\ArtisticStyleType[]
     */
    public function getArtisticStyle()
    {
        return $this->artisticStyle;
    }

    /**
     * Sets a new artisticStyle
     *
     * A Composite containing details of an artistic style of the Resource. This may differ from the style that the artists usually record in.
     *
     * @param \DDEX\MEAD\MEAD_110\ArtisticStyleType[] $artisticStyle
     * @return self
     */
    public function setArtisticStyle(array $artisticStyle = null)
    {
        $this->artisticStyle = $artisticStyle;
        return $this;
    }

    /**
     * Adds as theme
     *
     * A Composite containing details of a Theme.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ThemeType $theme
     */
    public function addToTheme(\DDEX\MEAD\MEAD_110\ThemeType $theme)
    {
        $this->theme[] = $theme;
        return $this;
    }

    /**
     * isset theme
     *
     * A Composite containing details of a Theme.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTheme($index)
    {
        return isset($this->theme[$index]);
    }

    /**
     * unset theme
     *
     * A Composite containing details of a Theme.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTheme($index)
    {
        unset($this->theme[$index]);
    }

    /**
     * Gets as theme
     *
     * A Composite containing details of a Theme.
     *
     * @return \DDEX\MEAD\MEAD_110\ThemeType[]
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * A Composite containing details of a Theme.
     *
     * @param \DDEX\MEAD\MEAD_110\ThemeType[] $theme
     * @return self
     */
    public function setTheme(array $theme = null)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Adds as activity
     *
     * A Composite containing details of an activity that the content is for.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ActivityType $activity
     */
    public function addToActivity(\DDEX\MEAD\MEAD_110\ActivityType $activity)
    {
        $this->activity[] = $activity;
        return $this;
    }

    /**
     * isset activity
     *
     * A Composite containing details of an activity that the content is for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivity($index)
    {
        return isset($this->activity[$index]);
    }

    /**
     * unset activity
     *
     * A Composite containing details of an activity that the content is for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivity($index)
    {
        unset($this->activity[$index]);
    }

    /**
     * Gets as activity
     *
     * A Composite containing details of an activity that the content is for.
     *
     * @return \DDEX\MEAD\MEAD_110\ActivityType[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * A Composite containing details of an activity that the content is for.
     *
     * @param \DDEX\MEAD\MEAD_110\ActivityType[] $activity
     * @return self
     */
    public function setActivity(array $activity = null)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Adds as usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\UsedMusicalWorkType $usedMusicalWork
     */
    public function addToUsedMusicalWork(\DDEX\MEAD\MEAD_110\UsedMusicalWorkType $usedMusicalWork)
    {
        $this->usedMusicalWork[] = $usedMusicalWork;
        return $this;
    }

    /**
     * isset usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsedMusicalWork($index)
    {
        return isset($this->usedMusicalWork[$index]);
    }

    /**
     * unset usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsedMusicalWork($index)
    {
        unset($this->usedMusicalWork[$index]);
    }

    /**
     * Gets as usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @return \DDEX\MEAD\MEAD_110\UsedMusicalWorkType[]
     */
    public function getUsedMusicalWork()
    {
        return $this->usedMusicalWork;
    }

    /**
     * Sets a new usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @param \DDEX\MEAD\MEAD_110\UsedMusicalWorkType[] $usedMusicalWork
     * @return self
     */
    public function setUsedMusicalWork(array $usedMusicalWork = null)
    {
        $this->usedMusicalWork = $usedMusicalWork;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ResourceRelationshipType $relatedResource
     */
    public function addToRelatedResource(\DDEX\MEAD\MEAD_110\ResourceRelationshipType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedResource($index)
    {
        return isset($this->relatedResource[$index]);
    }

    /**
     * unset relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedResource($index)
    {
        unset($this->relatedResource[$index]);
    }

    /**
     * Gets as relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\ResourceRelationshipType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\ResourceRelationshipType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(array $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Adds as lyrics
     *
     * A Composite containing details of Lyrics.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\LyricsType $lyrics
     */
    public function addToLyrics(\DDEX\MEAD\MEAD_110\LyricsType $lyrics)
    {
        $this->lyrics[] = $lyrics;
        return $this;
    }

    /**
     * isset lyrics
     *
     * A Composite containing details of Lyrics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLyrics($index)
    {
        return isset($this->lyrics[$index]);
    }

    /**
     * unset lyrics
     *
     * A Composite containing details of Lyrics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLyrics($index)
    {
        unset($this->lyrics[$index]);
    }

    /**
     * Gets as lyrics
     *
     * A Composite containing details of Lyrics.
     *
     * @return \DDEX\MEAD\MEAD_110\LyricsType[]
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Sets a new lyrics
     *
     * A Composite containing details of Lyrics.
     *
     * @param \DDEX\MEAD\MEAD_110\LyricsType[] $lyrics
     * @return self
     */
    public function setLyrics(array $lyrics = null)
    {
        $this->lyrics = $lyrics;
        return $this;
    }

    /**
     * Adds as commentaryNote
     *
     * A Composite containing details of a commentary note.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\CommentaryNoteType $commentaryNote
     */
    public function addToCommentaryNote(\DDEX\MEAD\MEAD_110\CommentaryNoteType $commentaryNote)
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
     * @return \DDEX\MEAD\MEAD_110\CommentaryNoteType[]
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
     * @param \DDEX\MEAD\MEAD_110\CommentaryNoteType[] $commentaryNote
     * @return self
     */
    public function setCommentaryNote(array $commentaryNote = null)
    {
        $this->commentaryNote = $commentaryNote;
        return $this;
    }

    /**
     * Adds as sample
     *
     * A Composite containing details of a sample.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SampleType $sample
     */
    public function addToSample(\DDEX\MEAD\MEAD_110\SampleType $sample)
    {
        $this->sample[] = $sample;
        return $this;
    }

    /**
     * isset sample
     *
     * A Composite containing details of a sample.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSample($index)
    {
        return isset($this->sample[$index]);
    }

    /**
     * unset sample
     *
     * A Composite containing details of a sample.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSample($index)
    {
        unset($this->sample[$index]);
    }

    /**
     * Gets as sample
     *
     * A Composite containing details of a sample.
     *
     * @return \DDEX\MEAD\MEAD_110\SampleType[]
     */
    public function getSample()
    {
        return $this->sample;
    }

    /**
     * Sets a new sample
     *
     * A Composite containing details of a sample.
     *
     * @param \DDEX\MEAD\MEAD_110\SampleType[] $sample
     * @return self
     */
    public function setSample(array $sample = null)
    {
        $this->sample = $sample;
        return $this;
    }

    /**
     * Adds as recordingPart
     *
     * A Composite containing details of a Recording Part.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\RecordingPartType $recordingPart
     */
    public function addToRecordingPart(\DDEX\MEAD\MEAD_110\RecordingPartType $recordingPart)
    {
        $this->recordingPart[] = $recordingPart;
        return $this;
    }

    /**
     * isset recordingPart
     *
     * A Composite containing details of a Recording Part.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordingPart($index)
    {
        return isset($this->recordingPart[$index]);
    }

    /**
     * unset recordingPart
     *
     * A Composite containing details of a Recording Part.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordingPart($index)
    {
        unset($this->recordingPart[$index]);
    }

    /**
     * Gets as recordingPart
     *
     * A Composite containing details of a Recording Part.
     *
     * @return \DDEX\MEAD\MEAD_110\RecordingPartType[]
     */
    public function getRecordingPart()
    {
        return $this->recordingPart;
    }

    /**
     * Sets a new recordingPart
     *
     * A Composite containing details of a Recording Part.
     *
     * @param \DDEX\MEAD\MEAD_110\RecordingPartType[] $recordingPart
     * @return self
     */
    public function setRecordingPart(array $recordingPart = null)
    {
        $this->recordingPart = $recordingPart;
        return $this;
    }

    /**
     * Adds as usage
     *
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\UsageType $usage
     */
    public function addToUsage(\DDEX\MEAD\MEAD_110\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @return \DDEX\MEAD\MEAD_110\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @param \DDEX\MEAD\MEAD_110\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Adds as impactDate
     *
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ImpactDateType $impactDate
     */
    public function addToImpactDate(\DDEX\MEAD\MEAD_110\ImpactDateType $impactDate)
    {
        $this->impactDate[] = $impactDate;
        return $this;
    }

    /**
     * isset impactDate
     *
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImpactDate($index)
    {
        return isset($this->impactDate[$index]);
    }

    /**
     * unset impactDate
     *
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImpactDate($index)
    {
        unset($this->impactDate[$index]);
    }

    /**
     * Gets as impactDate
     *
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @return \DDEX\MEAD\MEAD_110\ImpactDateType[]
     */
    public function getImpactDate()
    {
        return $this->impactDate;
    }

    /**
     * Sets a new impactDate
     *
     * A Composite containing details of a Date when the track started to receive a significant amount of airplay.
     *
     * @param \DDEX\MEAD\MEAD_110\ImpactDateType[] $impactDate
     * @return self
     */
    public function setImpactDate(array $impactDate = null)
    {
        $this->impactDate = $impactDate;
        return $this;
    }

    /**
     * Gets as classicalPeriod
     *
     * A Composite containing details of a period of the Work on which the Resource is based.
     *
     * @return \DDEX\MEAD\MEAD_110\ClassicalPeriodType
     */
    public function getClassicalPeriod()
    {
        return $this->classicalPeriod;
    }

    /**
     * Sets a new classicalPeriod
     *
     * A Composite containing details of a period of the Work on which the Resource is based.
     *
     * @param \DDEX\MEAD\MEAD_110\ClassicalPeriodType $classicalPeriod
     * @return self
     */
    public function setClassicalPeriod(?\DDEX\MEAD\MEAD_110\ClassicalPeriodType $classicalPeriod = null)
    {
        $this->classicalPeriod = $classicalPeriod;
        return $this;
    }

    /**
     * Adds as epoch
     *
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\EpochType $epoch
     */
    public function addToEpoch(\DDEX\MEAD\MEAD_110\EpochType $epoch)
    {
        $this->epoch[] = $epoch;
        return $this;
    }

    /**
     * isset epoch
     *
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @return \DDEX\MEAD\MEAD_110\EpochType[]
     */
    public function getEpoch()
    {
        return $this->epoch;
    }

    /**
     * Sets a new epoch
     *
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @param \DDEX\MEAD\MEAD_110\EpochType[] $epoch
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ArtisticInfluenceType $artisticInfluence
     */
    public function addToArtisticInfluence(\DDEX\MEAD\MEAD_110\ArtisticInfluenceType $artisticInfluence)
    {
        $this->artisticInfluence[] = $artisticInfluence;
        return $this;
    }

    /**
     * isset artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @return \DDEX\MEAD\MEAD_110\ArtisticInfluenceType[]
     */
    public function getArtisticInfluence()
    {
        return $this->artisticInfluence;
    }

    /**
     * Sets a new artisticInfluence
     *
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @param \DDEX\MEAD\MEAD_110\ArtisticInfluenceType[] $artisticInfluence
     * @return self
     */
    public function setArtisticInfluence(array $artisticInfluence = null)
    {
        $this->artisticInfluence = $artisticInfluence;
        return $this;
    }

    /**
     * Adds as isSimilar
     *
     * A Composite containing details of a similar Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SimilarResourceType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_110\SimilarResourceType $isSimilar)
    {
        $this->isSimilar[] = $isSimilar;
        return $this;
    }

    /**
     * isset isSimilar
     *
     * A Composite containing details of a similar Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIsSimilar($index)
    {
        return isset($this->isSimilar[$index]);
    }

    /**
     * unset isSimilar
     *
     * A Composite containing details of a similar Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIsSimilar($index)
    {
        unset($this->isSimilar[$index]);
    }

    /**
     * Gets as isSimilar
     *
     * A Composite containing details of a similar Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\SimilarResourceType[]
     */
    public function getIsSimilar()
    {
        return $this->isSimilar;
    }

    /**
     * Sets a new isSimilar
     *
     * A Composite containing details of a similar Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\SimilarResourceType[] $isSimilar
     * @return self
     */
    public function setIsSimilar(array $isSimilar = null)
    {
        $this->isSimilar = $isSimilar;
        return $this;
    }

    /**
     * Adds as historicChartingInformation
     *
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\HistoricChartingInformationType $historicChartingInformation
     */
    public function addToHistoricChartingInformation(\DDEX\MEAD\MEAD_110\HistoricChartingInformationType $historicChartingInformation)
    {
        $this->historicChartingInformation[] = $historicChartingInformation;
        return $this;
    }

    /**
     * isset historicChartingInformation
     *
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistoricChartingInformation($index)
    {
        return isset($this->historicChartingInformation[$index]);
    }

    /**
     * unset historicChartingInformation
     *
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistoricChartingInformation($index)
    {
        unset($this->historicChartingInformation[$index]);
    }

    /**
     * Gets as historicChartingInformation
     *
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @return \DDEX\MEAD\MEAD_110\HistoricChartingInformationType[]
     */
    public function getHistoricChartingInformation()
    {
        return $this->historicChartingInformation;
    }

    /**
     * Sets a new historicChartingInformation
     *
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @param \DDEX\MEAD\MEAD_110\HistoricChartingInformationType[] $historicChartingInformation
     * @return self
     */
    public function setHistoricChartingInformation(array $historicChartingInformation = null)
    {
        $this->historicChartingInformation = $historicChartingInformation;
        return $this;
    }

    /**
     * Adds as award
     *
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\AwardType $award
     */
    public function addToAward(\DDEX\MEAD\MEAD_110\AwardType $award)
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
     * @return \DDEX\MEAD\MEAD_110\AwardType[]
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
     * @param \DDEX\MEAD\MEAD_110\AwardType[] $award
     * @return self
     */
    public function setAward(array $award = null)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Adds as locationAndDateOfSession
     *
     * A Composite containing details of a RecordingSession.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\LocationAndDateOfSessionType $locationAndDateOfSession
     */
    public function addToLocationAndDateOfSession(\DDEX\MEAD\MEAD_110\LocationAndDateOfSessionType $locationAndDateOfSession)
    {
        $this->locationAndDateOfSession[] = $locationAndDateOfSession;
        return $this;
    }

    /**
     * isset locationAndDateOfSession
     *
     * A Composite containing details of a RecordingSession.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationAndDateOfSession($index)
    {
        return isset($this->locationAndDateOfSession[$index]);
    }

    /**
     * unset locationAndDateOfSession
     *
     * A Composite containing details of a RecordingSession.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationAndDateOfSession($index)
    {
        unset($this->locationAndDateOfSession[$index]);
    }

    /**
     * Gets as locationAndDateOfSession
     *
     * A Composite containing details of a RecordingSession.
     *
     * @return \DDEX\MEAD\MEAD_110\LocationAndDateOfSessionType[]
     */
    public function getLocationAndDateOfSession()
    {
        return $this->locationAndDateOfSession;
    }

    /**
     * Sets a new locationAndDateOfSession
     *
     * A Composite containing details of a RecordingSession.
     *
     * @param \DDEX\MEAD\MEAD_110\LocationAndDateOfSessionType[] $locationAndDateOfSession
     * @return self
     */
    public function setLocationAndDateOfSession(array $locationAndDateOfSession = null)
    {
        $this->locationAndDateOfSession = $locationAndDateOfSession;
        return $this;
    }

    /**
     * Adds as alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\AlternativeTitleType $alternativeTitle
     */
    public function addToAlternativeTitle(\DDEX\MEAD\MEAD_110\AlternativeTitleType $alternativeTitle)
    {
        $this->alternativeTitle[] = $alternativeTitle;
        return $this;
    }

    /**
     * isset alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeTitle($index)
    {
        return isset($this->alternativeTitle[$index]);
    }

    /**
     * unset alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeTitle($index)
    {
        unset($this->alternativeTitle[$index]);
    }

    /**
     * Gets as alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @return \DDEX\MEAD\MEAD_110\AlternativeTitleType[]
     */
    public function getAlternativeTitle()
    {
        return $this->alternativeTitle;
    }

    /**
     * Sets a new alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @param \DDEX\MEAD\MEAD_110\AlternativeTitleType[] $alternativeTitle
     * @return self
     */
    public function setAlternativeTitle(array $alternativeTitle = null)
    {
        $this->alternativeTitle = $alternativeTitle;
        return $this;
    }

    /**
     * Adds as image
     *
     * A Composite containing details of an Image relating to the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ImageType $image
     */
    public function addToImage(\DDEX\MEAD\MEAD_110\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A Composite containing details of an Image relating to the Resource.
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
     * A Composite containing details of an Image relating to the Resource.
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
     * A Composite containing details of an Image relating to the Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A Composite containing details of an Image relating to the Resource.
     *
     * @param \DDEX\MEAD\MEAD_110\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }
}


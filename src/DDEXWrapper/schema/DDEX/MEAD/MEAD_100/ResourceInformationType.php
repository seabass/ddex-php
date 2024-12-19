<?php

namespace DDEX\MEAD\MEAD_100;

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
     * @var \DDEX\MEAD\MEAD_100\ResourceSummaryType $resourceSummary
     */
    private $resourceSummary = null;

    /**
     * A Composite containing details of a Genre Category.
     *
     * @var \DDEX\MEAD\MEAD_100\GenreCategoryType[] $genreCategory
     */
    private $genreCategory = [
        
    ];

    /**
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\SubGenreCategoryType $subGenreCategory
     */
    private $subGenreCategory = null;

    /**
     * A Composite containing details of a vocal register of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\VocalRegisterType $vocalRegister
     */
    private $vocalRegister = null;

    /**
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\AbsolutePitchType $absolutePitch
     */
    private $absolutePitch = null;

    /**
     * A Composite containing details of a time signature of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\TimeSignatureType $timeSignature
     */
    private $timeSignature = null;

    /**
     * A Composite containing details of the beats of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\BeatsPerMinuteType $beatsPerMinute
     */
    private $beatsPerMinute = null;

    /**
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\InstrumentUsedType[] $instrumentUsed
     */
    private $instrumentUsed = [
        
    ];

    /**
     * A Composite containing details of a harmony of the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\HarmonyType $harmony
     */
    private $harmony = null;

    /**
     * A Flag indicating whether the Recording is an OriginalRecording (=true) or not (=false).
     *
     * @var \DDEX\MEAD\MEAD_100\FlagType $isOriginal
     */
    private $isOriginal = null;

    /**
     * A Flag indicating whether the Recording is a Cover (=true) or not (=false).
     *
     * @var \DDEX\MEAD\MEAD_100\FlagType $isCover
     */
    private $isCover = null;

    /**
     * A Composite containing details of a mood.
     *
     * @var \DDEX\MEAD\MEAD_100\MoodType[] $mood
     */
    private $mood = [
        
    ];

    /**
     * A Composite containing details of a dance and rhythm style.
     *
     * @var \DDEX\MEAD\MEAD_100\DanceAndRhythmStyleType[] $danceAndRhythmStyle
     */
    private $danceAndRhythmStyle = [
        
    ];

    /**
     * A Composite containing details of a theme for the Recording.
     *
     * @var \DDEX\MEAD\MEAD_100\ThemeType[] $programmaticTheme
     */
    private $programmaticTheme = [
        
    ];

    /**
     * A Composite containing details of a theme for the Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_100\ThemeType[] $lyricTheme
     */
    private $lyricTheme = [
        
    ];

    /**
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @var \DDEX\MEAD\MEAD_100\UsedMusicalWorkType[] $usedMusicalWork
     */
    private $usedMusicalWork = [
        
    ];

    /**
     * A Composite containing details of a related Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\ResourceRelationshipType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * A Composite containing details of Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_100\LyricsType[] $lyrics
     */
    private $lyrics = [
        
    ];

    /**
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\MEAD\MEAD_100\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * A Composite containing details of a sample.
     *
     * @var \DDEX\MEAD\MEAD_100\SampleType[] $sample
     */
    private $sample = [
        
    ];

    /**
     * A Composite containing details of a Recording Part.
     *
     * @var \DDEX\MEAD\MEAD_100\RecordingPartType[] $recordingPart
     */
    private $recordingPart = [
        
    ];

    /**
     * A Composite containing details of a Context in which the Resource has been used.
     *
     * @var \DDEX\MEAD\MEAD_100\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @var \DDEX\MEAD\MEAD_100\EpochType[] $epoch
     */
    private $epoch = [
        
    ];

    /**
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @var \DDEX\MEAD\MEAD_100\ArtisticInfluenceType[] $artisticInfluence
     */
    private $artisticInfluence = [
        
    ];

    /**
     * A Composite containing details of a similar Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\SimilarResourceType[] $isSimilar
     */
    private $isSimilar = [
        
    ];

    /**
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_100\HistoricChartingInformationType[] $historicChartingInformation
     */
    private $historicChartingInformation = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_100\AwardType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of a RecordingSession.
     *
     * @var \DDEX\MEAD\MEAD_100\LocationAndDateOfSessionType[] $locationAndDateOfSession
     */
    private $locationAndDateOfSession = [
        
    ];

    /**
     * A Composite containing details of an AlternativeTitle of the Resource to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @var \DDEX\MEAD\MEAD_100\AlternativeTitleType[] $alternativeTitle
     */
    private $alternativeTitle = [
        
    ];

    /**
     * A Composite containing details of an Image relating to the Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\ImageType[] $image
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
     * @return \DDEX\MEAD\MEAD_100\ResourceSummaryType
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
     * @param \DDEX\MEAD\MEAD_100\ResourceSummaryType $resourceSummary
     * @return self
     */
    public function setResourceSummary(\DDEX\MEAD\MEAD_100\ResourceSummaryType $resourceSummary)
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
     * @param \DDEX\MEAD\MEAD_100\GenreCategoryType $genreCategory
     */
    public function addToGenreCategory(\DDEX\MEAD\MEAD_100\GenreCategoryType $genreCategory)
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
     * @return \DDEX\MEAD\MEAD_100\GenreCategoryType[]
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
     * @param \DDEX\MEAD\MEAD_100\GenreCategoryType[] $genreCategory
     * @return self
     */
    public function setGenreCategory(array $genreCategory = null)
    {
        $this->genreCategory = $genreCategory;
        return $this;
    }

    /**
     * Gets as subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\SubGenreCategoryType
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
     * @param \DDEX\MEAD\MEAD_100\SubGenreCategoryType $subGenreCategory
     * @return self
     */
    public function setSubGenreCategory(?\DDEX\MEAD\MEAD_100\SubGenreCategoryType $subGenreCategory = null)
    {
        $this->subGenreCategory = $subGenreCategory;
        return $this;
    }

    /**
     * Gets as vocalRegister
     *
     * A Composite containing details of a vocal register of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\VocalRegisterType
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
     * @param \DDEX\MEAD\MEAD_100\VocalRegisterType $vocalRegister
     * @return self
     */
    public function setVocalRegister(?\DDEX\MEAD\MEAD_100\VocalRegisterType $vocalRegister = null)
    {
        $this->vocalRegister = $vocalRegister;
        return $this;
    }

    /**
     * Gets as absolutePitch
     *
     * A Composite containing details of the absolute pitch of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\AbsolutePitchType
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
     * @param \DDEX\MEAD\MEAD_100\AbsolutePitchType $absolutePitch
     * @return self
     */
    public function setAbsolutePitch(?\DDEX\MEAD\MEAD_100\AbsolutePitchType $absolutePitch = null)
    {
        $this->absolutePitch = $absolutePitch;
        return $this;
    }

    /**
     * Gets as timeSignature
     *
     * A Composite containing details of a time signature of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\TimeSignatureType
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
     * @param \DDEX\MEAD\MEAD_100\TimeSignatureType $timeSignature
     * @return self
     */
    public function setTimeSignature(?\DDEX\MEAD\MEAD_100\TimeSignatureType $timeSignature = null)
    {
        $this->timeSignature = $timeSignature;
        return $this;
    }

    /**
     * Gets as beatsPerMinute
     *
     * A Composite containing details of the beats of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\BeatsPerMinuteType
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
     * @param \DDEX\MEAD\MEAD_100\BeatsPerMinuteType $beatsPerMinute
     * @return self
     */
    public function setBeatsPerMinute(?\DDEX\MEAD\MEAD_100\BeatsPerMinuteType $beatsPerMinute = null)
    {
        $this->beatsPerMinute = $beatsPerMinute;
        return $this;
    }

    /**
     * Adds as instrumentUsed
     *
     * A Composite containing details of an Instrument relating to the Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\InstrumentUsedType $instrumentUsed
     */
    public function addToInstrumentUsed(\DDEX\MEAD\MEAD_100\InstrumentUsedType $instrumentUsed)
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
     * @return \DDEX\MEAD\MEAD_100\InstrumentUsedType[]
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
     * @param \DDEX\MEAD\MEAD_100\InstrumentUsedType[] $instrumentUsed
     * @return self
     */
    public function setInstrumentUsed(array $instrumentUsed = null)
    {
        $this->instrumentUsed = $instrumentUsed;
        return $this;
    }

    /**
     * Gets as harmony
     *
     * A Composite containing details of a harmony of the Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\HarmonyType
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
     * @param \DDEX\MEAD\MEAD_100\HarmonyType $harmony
     * @return self
     */
    public function setHarmony(?\DDEX\MEAD\MEAD_100\HarmonyType $harmony = null)
    {
        $this->harmony = $harmony;
        return $this;
    }

    /**
     * Gets as isOriginal
     *
     * A Flag indicating whether the Recording is an OriginalRecording (=true) or not (=false).
     *
     * @return \DDEX\MEAD\MEAD_100\FlagType
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
     * @param \DDEX\MEAD\MEAD_100\FlagType $isOriginal
     * @return self
     */
    public function setIsOriginal(?\DDEX\MEAD\MEAD_100\FlagType $isOriginal = null)
    {
        $this->isOriginal = $isOriginal;
        return $this;
    }

    /**
     * Gets as isCover
     *
     * A Flag indicating whether the Recording is a Cover (=true) or not (=false).
     *
     * @return \DDEX\MEAD\MEAD_100\FlagType
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
     * @param \DDEX\MEAD\MEAD_100\FlagType $isCover
     * @return self
     */
    public function setIsCover(?\DDEX\MEAD\MEAD_100\FlagType $isCover = null)
    {
        $this->isCover = $isCover;
        return $this;
    }

    /**
     * Adds as mood
     *
     * A Composite containing details of a mood.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\MoodType $mood
     */
    public function addToMood(\DDEX\MEAD\MEAD_100\MoodType $mood)
    {
        $this->mood[] = $mood;
        return $this;
    }

    /**
     * isset mood
     *
     * A Composite containing details of a mood.
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
     * A Composite containing details of a mood.
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
     * A Composite containing details of a mood.
     *
     * @return \DDEX\MEAD\MEAD_100\MoodType[]
     */
    public function getMood()
    {
        return $this->mood;
    }

    /**
     * Sets a new mood
     *
     * A Composite containing details of a mood.
     *
     * @param \DDEX\MEAD\MEAD_100\MoodType[] $mood
     * @return self
     */
    public function setMood(array $mood = null)
    {
        $this->mood = $mood;
        return $this;
    }

    /**
     * Adds as danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\DanceAndRhythmStyleType $danceAndRhythmStyle
     */
    public function addToDanceAndRhythmStyle(\DDEX\MEAD\MEAD_100\DanceAndRhythmStyleType $danceAndRhythmStyle)
    {
        $this->danceAndRhythmStyle[] = $danceAndRhythmStyle;
        return $this;
    }

    /**
     * isset danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDanceAndRhythmStyle($index)
    {
        return isset($this->danceAndRhythmStyle[$index]);
    }

    /**
     * unset danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDanceAndRhythmStyle($index)
    {
        unset($this->danceAndRhythmStyle[$index]);
    }

    /**
     * Gets as danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @return \DDEX\MEAD\MEAD_100\DanceAndRhythmStyleType[]
     */
    public function getDanceAndRhythmStyle()
    {
        return $this->danceAndRhythmStyle;
    }

    /**
     * Sets a new danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @param \DDEX\MEAD\MEAD_100\DanceAndRhythmStyleType[] $danceAndRhythmStyle
     * @return self
     */
    public function setDanceAndRhythmStyle(array $danceAndRhythmStyle = null)
    {
        $this->danceAndRhythmStyle = $danceAndRhythmStyle;
        return $this;
    }

    /**
     * Adds as programmaticTheme
     *
     * A Composite containing details of a theme for the Recording.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\ThemeType $programmaticTheme
     */
    public function addToProgrammaticTheme(\DDEX\MEAD\MEAD_100\ThemeType $programmaticTheme)
    {
        $this->programmaticTheme[] = $programmaticTheme;
        return $this;
    }

    /**
     * isset programmaticTheme
     *
     * A Composite containing details of a theme for the Recording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgrammaticTheme($index)
    {
        return isset($this->programmaticTheme[$index]);
    }

    /**
     * unset programmaticTheme
     *
     * A Composite containing details of a theme for the Recording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgrammaticTheme($index)
    {
        unset($this->programmaticTheme[$index]);
    }

    /**
     * Gets as programmaticTheme
     *
     * A Composite containing details of a theme for the Recording.
     *
     * @return \DDEX\MEAD\MEAD_100\ThemeType[]
     */
    public function getProgrammaticTheme()
    {
        return $this->programmaticTheme;
    }

    /**
     * Sets a new programmaticTheme
     *
     * A Composite containing details of a theme for the Recording.
     *
     * @param \DDEX\MEAD\MEAD_100\ThemeType[] $programmaticTheme
     * @return self
     */
    public function setProgrammaticTheme(array $programmaticTheme = null)
    {
        $this->programmaticTheme = $programmaticTheme;
        return $this;
    }

    /**
     * Adds as lyricTheme
     *
     * A Composite containing details of a theme for the Lyrics.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\ThemeType $lyricTheme
     */
    public function addToLyricTheme(\DDEX\MEAD\MEAD_100\ThemeType $lyricTheme)
    {
        $this->lyricTheme[] = $lyricTheme;
        return $this;
    }

    /**
     * isset lyricTheme
     *
     * A Composite containing details of a theme for the Lyrics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLyricTheme($index)
    {
        return isset($this->lyricTheme[$index]);
    }

    /**
     * unset lyricTheme
     *
     * A Composite containing details of a theme for the Lyrics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLyricTheme($index)
    {
        unset($this->lyricTheme[$index]);
    }

    /**
     * Gets as lyricTheme
     *
     * A Composite containing details of a theme for the Lyrics.
     *
     * @return \DDEX\MEAD\MEAD_100\ThemeType[]
     */
    public function getLyricTheme()
    {
        return $this->lyricTheme;
    }

    /**
     * Sets a new lyricTheme
     *
     * A Composite containing details of a theme for the Lyrics.
     *
     * @param \DDEX\MEAD\MEAD_100\ThemeType[] $lyricTheme
     * @return self
     */
    public function setLyricTheme(array $lyricTheme = null)
    {
        $this->lyricTheme = $lyricTheme;
        return $this;
    }

    /**
     * Adds as usedMusicalWork
     *
     * A Composite containing details of a MusicalWork that has been used in the recording.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\UsedMusicalWorkType $usedMusicalWork
     */
    public function addToUsedMusicalWork(\DDEX\MEAD\MEAD_100\UsedMusicalWorkType $usedMusicalWork)
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
     * @return \DDEX\MEAD\MEAD_100\UsedMusicalWorkType[]
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
     * @param \DDEX\MEAD\MEAD_100\UsedMusicalWorkType[] $usedMusicalWork
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
     * @param \DDEX\MEAD\MEAD_100\ResourceRelationshipType $relatedResource
     */
    public function addToRelatedResource(\DDEX\MEAD\MEAD_100\ResourceRelationshipType $relatedResource)
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
     * @return \DDEX\MEAD\MEAD_100\ResourceRelationshipType[]
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
     * @param \DDEX\MEAD\MEAD_100\ResourceRelationshipType[] $relatedResource
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
     * @param \DDEX\MEAD\MEAD_100\LyricsType $lyrics
     */
    public function addToLyrics(\DDEX\MEAD\MEAD_100\LyricsType $lyrics)
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
     * @return \DDEX\MEAD\MEAD_100\LyricsType[]
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
     * @param \DDEX\MEAD\MEAD_100\LyricsType[] $lyrics
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
     * @param \DDEX\MEAD\MEAD_100\CommentaryNoteType $commentaryNote
     */
    public function addToCommentaryNote(\DDEX\MEAD\MEAD_100\CommentaryNoteType $commentaryNote)
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
     * @return \DDEX\MEAD\MEAD_100\CommentaryNoteType[]
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
     * @param \DDEX\MEAD\MEAD_100\CommentaryNoteType[] $commentaryNote
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
     * @param \DDEX\MEAD\MEAD_100\SampleType $sample
     */
    public function addToSample(\DDEX\MEAD\MEAD_100\SampleType $sample)
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
     * @return \DDEX\MEAD\MEAD_100\SampleType[]
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
     * @param \DDEX\MEAD\MEAD_100\SampleType[] $sample
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
     * @param \DDEX\MEAD\MEAD_100\RecordingPartType $recordingPart
     */
    public function addToRecordingPart(\DDEX\MEAD\MEAD_100\RecordingPartType $recordingPart)
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
     * @return \DDEX\MEAD\MEAD_100\RecordingPartType[]
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
     * @param \DDEX\MEAD\MEAD_100\RecordingPartType[] $recordingPart
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
     * @param \DDEX\MEAD\MEAD_100\UsageType $usage
     */
    public function addToUsage(\DDEX\MEAD\MEAD_100\UsageType $usage)
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
     * @return \DDEX\MEAD\MEAD_100\UsageType[]
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
     * @param \DDEX\MEAD\MEAD_100\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Adds as epoch
     *
     * A Composite containing details of an epoch in a artist's career which the Resource is related to.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\EpochType $epoch
     */
    public function addToEpoch(\DDEX\MEAD\MEAD_100\EpochType $epoch)
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
     * @return \DDEX\MEAD\MEAD_100\EpochType[]
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
     * @param \DDEX\MEAD\MEAD_100\EpochType[] $epoch
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
     * @param \DDEX\MEAD\MEAD_100\ArtisticInfluenceType $artisticInfluence
     */
    public function addToArtisticInfluence(\DDEX\MEAD\MEAD_100\ArtisticInfluenceType $artisticInfluence)
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
     * @return \DDEX\MEAD\MEAD_100\ArtisticInfluenceType[]
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
     * @param \DDEX\MEAD\MEAD_100\ArtisticInfluenceType[] $artisticInfluence
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
     * @param \DDEX\MEAD\MEAD_100\SimilarResourceType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_100\SimilarResourceType $isSimilar)
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
     * @return \DDEX\MEAD\MEAD_100\SimilarResourceType[]
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
     * @param \DDEX\MEAD\MEAD_100\SimilarResourceType[] $isSimilar
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
     * @param \DDEX\MEAD\MEAD_100\HistoricChartingInformationType $historicChartingInformation
     */
    public function addToHistoricChartingInformation(\DDEX\MEAD\MEAD_100\HistoricChartingInformationType $historicChartingInformation)
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
     * @return \DDEX\MEAD\MEAD_100\HistoricChartingInformationType[]
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
     * @param \DDEX\MEAD\MEAD_100\HistoricChartingInformationType[] $historicChartingInformation
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
     * @param \DDEX\MEAD\MEAD_100\AwardType $award
     */
    public function addToAward(\DDEX\MEAD\MEAD_100\AwardType $award)
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
     * @return \DDEX\MEAD\MEAD_100\AwardType[]
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
     * @param \DDEX\MEAD\MEAD_100\AwardType[] $award
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
     * @param \DDEX\MEAD\MEAD_100\LocationAndDateOfSessionType $locationAndDateOfSession
     */
    public function addToLocationAndDateOfSession(\DDEX\MEAD\MEAD_100\LocationAndDateOfSessionType $locationAndDateOfSession)
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
     * @return \DDEX\MEAD\MEAD_100\LocationAndDateOfSessionType[]
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
     * @param \DDEX\MEAD\MEAD_100\LocationAndDateOfSessionType[] $locationAndDateOfSession
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
     * @param \DDEX\MEAD\MEAD_100\AlternativeTitleType $alternativeTitle
     */
    public function addToAlternativeTitle(\DDEX\MEAD\MEAD_100\AlternativeTitleType $alternativeTitle)
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
     * @return \DDEX\MEAD\MEAD_100\AlternativeTitleType[]
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
     * @param \DDEX\MEAD\MEAD_100\AlternativeTitleType[] $alternativeTitle
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
     * @param \DDEX\MEAD\MEAD_100\ImageType $image
     */
    public function addToImage(\DDEX\MEAD\MEAD_100\ImageType $image)
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
     * @return \DDEX\MEAD\MEAD_100\ImageType[]
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
     * @param \DDEX\MEAD\MEAD_100\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }
}


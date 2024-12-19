<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing WorkInformationType
 *
 * A Composite containing details of a Work.
 * XSD Type: WorkInformation
 */
class WorkInformationType
{
    /**
     * The Identifier (specific to the Message) of the MusicalWork. This is a LocalMusicalWorkAnchor starting with the letter W. This element is only needed if and when a ResourceInformation composite that provides musical-work level information is used in the same MEAD message.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A Composite containing summary details of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\WorkSummaryType $workSummary
     */
    private $workSummary = null;

    /**
     * A Composite containing details of a Genre Category.
     *
     * @var \DDEX\MEAD\MEAD_110\GenreCategoryType[] $genreCategory
     */
    private $genreCategory = [
        
    ];

    /**
     * A Composite containing details of a sub-genre of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\SubGenreCategoryType[] $subGenreCategory
     */
    private $subGenreCategory = [
        
    ];

    /**
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @var \DDEX\MEAD\MEAD_110\FormType $form
     */
    private $form = null;

    /**
     * A Composite containing details of a vocal register of the Work.
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
     * A Composite containing details of a time signature of the Work.
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
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\InstrumentType[] $targetInstrument
     */
    private $targetInstrument = [
        
    ];

    /**
     * A Composite containing details of a harmony of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\HarmonyType[] $harmony
     */
    private $harmony = [
        
    ];

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
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\WorkHierarchyType[] $workHierarchy
     */
    private $workHierarchy = [
        
    ];

    /**
     * A Composite containing details of a Work relating to the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\RelatedWorkType[] $relatedWork
     */
    private $relatedWork = [
        
    ];

    /**
     * A Composite containing details of a Recording of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\DerivedRecordingType[] $derivedRecording
     */
    private $derivedRecording = [
        
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
     * A Composite containing details of a period of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\ClassicalPeriodType $classicalPeriod
     */
    private $classicalPeriod = null;

    /**
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of a similar Work.
     *
     * @var \DDEX\MEAD\MEAD_110\SimilarWorkType[] $isSimilar
     */
    private $isSimilar = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_110\AwardType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @var \DDEX\MEAD\MEAD_110\AlternativeTitleType[] $alternativeTitle
     */
    private $alternativeTitle = [
        
    ];

    /**
     * Gets as musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork. This is a LocalMusicalWorkAnchor starting with the letter W. This element is only needed if and when a ResourceInformation composite that provides musical-work level information is used in the same MEAD message.
     *
     * @return string
     */
    public function getMusicalWorkReference()
    {
        return $this->musicalWorkReference;
    }

    /**
     * Sets a new musicalWorkReference
     *
     * The Identifier (specific to the Message) of the MusicalWork. This is a LocalMusicalWorkAnchor starting with the letter W. This element is only needed if and when a ResourceInformation composite that provides musical-work level information is used in the same MEAD message.
     *
     * @param string $musicalWorkReference
     * @return self
     */
    public function setMusicalWorkReference($musicalWorkReference)
    {
        $this->musicalWorkReference = $musicalWorkReference;
        return $this;
    }

    /**
     * Gets as workSummary
     *
     * A Composite containing summary details of the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\WorkSummaryType
     */
    public function getWorkSummary()
    {
        return $this->workSummary;
    }

    /**
     * Sets a new workSummary
     *
     * A Composite containing summary details of the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\WorkSummaryType $workSummary
     * @return self
     */
    public function setWorkSummary(\DDEX\MEAD\MEAD_110\WorkSummaryType $workSummary)
    {
        $this->workSummary = $workSummary;
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
     * A Composite containing details of a sub-genre of the Work.
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
     * A Composite containing details of a sub-genre of the Work.
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
     * A Composite containing details of a sub-genre of the Work.
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
     * A Composite containing details of a sub-genre of the Work.
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
     * A Composite containing details of a sub-genre of the Work.
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
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
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
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
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
     * A Composite containing details of a vocal register of the Work.
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
     * A Composite containing details of a vocal register of the Work.
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
     * A Composite containing details of a vocal register of the Work.
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
     * A Composite containing details of a vocal register of the Work.
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
     * A Composite containing details of a vocal register of the Work.
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
     * Adds as timeSignature
     *
     * A Composite containing details of a time signature of the Work.
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
     * A Composite containing details of a time signature of the Work.
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
     * A Composite containing details of a time signature of the Work.
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
     * A Composite containing details of a time signature of the Work.
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
     * A Composite containing details of a time signature of the Work.
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
     * Adds as targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\InstrumentType $targetInstrument
     */
    public function addToTargetInstrument(\DDEX\MEAD\MEAD_110\InstrumentType $targetInstrument)
    {
        $this->targetInstrument[] = $targetInstrument;
        return $this;
    }

    /**
     * isset targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTargetInstrument($index)
    {
        return isset($this->targetInstrument[$index]);
    }

    /**
     * unset targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTargetInstrument($index)
    {
        unset($this->targetInstrument[$index]);
    }

    /**
     * Gets as targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\InstrumentType[]
     */
    public function getTargetInstrument()
    {
        return $this->targetInstrument;
    }

    /**
     * Sets a new targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\InstrumentType[] $targetInstrument
     * @return self
     */
    public function setTargetInstrument(array $targetInstrument = null)
    {
        $this->targetInstrument = $targetInstrument;
        return $this;
    }

    /**
     * Adds as harmony
     *
     * A Composite containing details of a harmony of the Work.
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
     * A Composite containing details of a harmony of the Work.
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
     * A Composite containing details of a harmony of the Work.
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
     * A Composite containing details of a harmony of the Work.
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
     * A Composite containing details of a harmony of the Work.
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
     * Adds as workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\WorkHierarchyType $workHierarchy
     */
    public function addToWorkHierarchy(\DDEX\MEAD\MEAD_110\WorkHierarchyType $workHierarchy)
    {
        $this->workHierarchy[] = $workHierarchy;
        return $this;
    }

    /**
     * isset workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkHierarchy($index)
    {
        return isset($this->workHierarchy[$index]);
    }

    /**
     * unset workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkHierarchy($index)
    {
        unset($this->workHierarchy[$index]);
    }

    /**
     * Gets as workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\WorkHierarchyType[]
     */
    public function getWorkHierarchy()
    {
        return $this->workHierarchy;
    }

    /**
     * Sets a new workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\WorkHierarchyType[] $workHierarchy
     * @return self
     */
    public function setWorkHierarchy(array $workHierarchy = null)
    {
        $this->workHierarchy = $workHierarchy;
        return $this;
    }

    /**
     * Adds as relatedWork
     *
     * A Composite containing details of a Work relating to the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\RelatedWorkType $relatedWork
     */
    public function addToRelatedWork(\DDEX\MEAD\MEAD_110\RelatedWorkType $relatedWork)
    {
        $this->relatedWork[] = $relatedWork;
        return $this;
    }

    /**
     * isset relatedWork
     *
     * A Composite containing details of a Work relating to the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedWork($index)
    {
        return isset($this->relatedWork[$index]);
    }

    /**
     * unset relatedWork
     *
     * A Composite containing details of a Work relating to the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedWork($index)
    {
        unset($this->relatedWork[$index]);
    }

    /**
     * Gets as relatedWork
     *
     * A Composite containing details of a Work relating to the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\RelatedWorkType[]
     */
    public function getRelatedWork()
    {
        return $this->relatedWork;
    }

    /**
     * Sets a new relatedWork
     *
     * A Composite containing details of a Work relating to the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\RelatedWorkType[] $relatedWork
     * @return self
     */
    public function setRelatedWork(array $relatedWork = null)
    {
        $this->relatedWork = $relatedWork;
        return $this;
    }

    /**
     * Adds as derivedRecording
     *
     * A Composite containing details of a Recording of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\DerivedRecordingType $derivedRecording
     */
    public function addToDerivedRecording(\DDEX\MEAD\MEAD_110\DerivedRecordingType $derivedRecording)
    {
        $this->derivedRecording[] = $derivedRecording;
        return $this;
    }

    /**
     * isset derivedRecording
     *
     * A Composite containing details of a Recording of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedRecording($index)
    {
        return isset($this->derivedRecording[$index]);
    }

    /**
     * unset derivedRecording
     *
     * A Composite containing details of a Recording of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedRecording($index)
    {
        unset($this->derivedRecording[$index]);
    }

    /**
     * Gets as derivedRecording
     *
     * A Composite containing details of a Recording of the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\DerivedRecordingType[]
     */
    public function getDerivedRecording()
    {
        return $this->derivedRecording;
    }

    /**
     * Sets a new derivedRecording
     *
     * A Composite containing details of a Recording of the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\DerivedRecordingType[] $derivedRecording
     * @return self
     */
    public function setDerivedRecording(array $derivedRecording = null)
    {
        $this->derivedRecording = $derivedRecording;
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
     * Gets as classicalPeriod
     *
     * A Composite containing details of a period of the Work.
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
     * A Composite containing details of a period of the Work.
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
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
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
     * A Composite containing details of a similar Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SimilarWorkType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_110\SimilarWorkType $isSimilar)
    {
        $this->isSimilar[] = $isSimilar;
        return $this;
    }

    /**
     * isset isSimilar
     *
     * A Composite containing details of a similar Work.
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
     * A Composite containing details of a similar Work.
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
     * A Composite containing details of a similar Work.
     *
     * @return \DDEX\MEAD\MEAD_110\SimilarWorkType[]
     */
    public function getIsSimilar()
    {
        return $this->isSimilar;
    }

    /**
     * Sets a new isSimilar
     *
     * A Composite containing details of a similar Work.
     *
     * @param \DDEX\MEAD\MEAD_110\SimilarWorkType[] $isSimilar
     * @return self
     */
    public function setIsSimilar(array $isSimilar = null)
    {
        $this->isSimilar = $isSimilar;
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
     * Adds as alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @param \DDEX\MEAD\MEAD_110\AlternativeTitleType[] $alternativeTitle
     * @return self
     */
    public function setAlternativeTitle(array $alternativeTitle = null)
    {
        $this->alternativeTitle = $alternativeTitle;
        return $this;
    }
}


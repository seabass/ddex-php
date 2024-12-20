<?php

namespace DDEX\MEAD\MEAD_101;

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
     * @var \DDEX\MEAD\MEAD_101\WorkSummaryType $workSummary
     */
    private $workSummary = null;

    /**
     * A Composite containing details of a sub-genre of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\SubGenreCategoryType $subGenreCategory
     */
    private $subGenreCategory = null;

    /**
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @var \DDEX\MEAD\MEAD_101\FormType $form
     */
    private $form = null;

    /**
     * A Composite containing details of a vocal register of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\VocalRegisterType $vocalRegister
     */
    private $vocalRegister = null;

    /**
     * A Composite containing details of a time signature of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\TimeSignatureType $timeSignature
     */
    private $timeSignature = null;

    /**
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\InstrumentType[] $targetInstrument
     */
    private $targetInstrument = [
        
    ];

    /**
     * A Composite containing details of a harmony of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\HarmonyType $harmony
     */
    private $harmony = null;

    /**
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\MoodType[] $lyricsMood
     */
    private $lyricsMood = [
        
    ];

    /**
     * A Composite containing details of a dance and rhythm style.
     *
     * @var \DDEX\MEAD\MEAD_101\DanceAndRhythmStyleType[] $danceAndRhythmStyle
     */
    private $danceAndRhythmStyle = [
        
    ];

    /**
     * A Composite containing details of a theme.
     *
     * @var \DDEX\MEAD\MEAD_101\ThemeType[] $theme
     */
    private $theme = [
        
    ];

    /**
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\WorkHierarchyType[] $workHierarchy
     */
    private $workHierarchy = [
        
    ];

    /**
     * A Composite containing details of a Work relating to the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\RelatedWorkType[] $relatedWork
     */
    private $relatedWork = [
        
    ];

    /**
     * A Composite containing details of a Recording of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\DerivedRecordingType[] $derivedRecording
     */
    private $derivedRecording = [
        
    ];

    /**
     * A Composite containing details of Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_101\LyricsType[] $lyrics
     */
    private $lyrics = [
        
    ];

    /**
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\MEAD\MEAD_101\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * A Composite containing details of a period of the Work.
     *
     * @var \DDEX\MEAD\MEAD_101\ClassicalPeriodType $classicalPeriod
     */
    private $classicalPeriod = null;

    /**
     * A Composite containing details of an epoch in a artist's career which the Work is related to.
     *
     * @var \DDEX\MEAD\MEAD_101\EpochType[] $epoch
     */
    private $epoch = [
        
    ];

    /**
     * A Composite containing details of a related Artist that was influenced or that was an influencer.
     *
     * @var \DDEX\MEAD\MEAD_101\ArtisticInfluenceType[] $artisticInfluence
     */
    private $artisticInfluence = [
        
    ];

    /**
     * A Composite containing details of a similar Work.
     *
     * @var \DDEX\MEAD\MEAD_101\SimilarWorkType[] $isSimilar
     */
    private $isSimilar = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_101\AwardType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of an AlternativeTitle of the Work to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @var \DDEX\MEAD\MEAD_101\AlternativeTitleType[] $alternativeTitle
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
     * @return \DDEX\MEAD\MEAD_101\WorkSummaryType
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
     * @param \DDEX\MEAD\MEAD_101\WorkSummaryType $workSummary
     * @return self
     */
    public function setWorkSummary(\DDEX\MEAD\MEAD_101\WorkSummaryType $workSummary)
    {
        $this->workSummary = $workSummary;
        return $this;
    }

    /**
     * Gets as subGenreCategory
     *
     * A Composite containing details of a sub-genre of the Work.
     *
     * @return \DDEX\MEAD\MEAD_101\SubGenreCategoryType
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
     * @param \DDEX\MEAD\MEAD_101\SubGenreCategoryType $subGenreCategory
     * @return self
     */
    public function setSubGenreCategory(?\DDEX\MEAD\MEAD_101\SubGenreCategoryType $subGenreCategory = null)
    {
        $this->subGenreCategory = $subGenreCategory;
        return $this;
    }

    /**
     * Gets as form
     *
     * A Composite containing details of a form of the Work (e.g. Concerto, Aria, 12 bar blues, etc.).
     *
     * @return \DDEX\MEAD\MEAD_101\FormType
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
     * @param \DDEX\MEAD\MEAD_101\FormType $form
     * @return self
     */
    public function setForm(?\DDEX\MEAD\MEAD_101\FormType $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Gets as vocalRegister
     *
     * A Composite containing details of a vocal register of the Work.
     *
     * @return \DDEX\MEAD\MEAD_101\VocalRegisterType
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
     * @param \DDEX\MEAD\MEAD_101\VocalRegisterType $vocalRegister
     * @return self
     */
    public function setVocalRegister(?\DDEX\MEAD\MEAD_101\VocalRegisterType $vocalRegister = null)
    {
        $this->vocalRegister = $vocalRegister;
        return $this;
    }

    /**
     * Gets as timeSignature
     *
     * A Composite containing details of a time signature of the Work.
     *
     * @return \DDEX\MEAD\MEAD_101\TimeSignatureType
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
     * @param \DDEX\MEAD\MEAD_101\TimeSignatureType $timeSignature
     * @return self
     */
    public function setTimeSignature(?\DDEX\MEAD\MEAD_101\TimeSignatureType $timeSignature = null)
    {
        $this->timeSignature = $timeSignature;
        return $this;
    }

    /**
     * Adds as targetInstrument
     *
     * A Composite containing details of an Instrument relating to the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\InstrumentType $targetInstrument
     */
    public function addToTargetInstrument(\DDEX\MEAD\MEAD_101\InstrumentType $targetInstrument)
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
     * @return \DDEX\MEAD\MEAD_101\InstrumentType[]
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
     * @param \DDEX\MEAD\MEAD_101\InstrumentType[] $targetInstrument
     * @return self
     */
    public function setTargetInstrument(array $targetInstrument = null)
    {
        $this->targetInstrument = $targetInstrument;
        return $this;
    }

    /**
     * Gets as harmony
     *
     * A Composite containing details of a harmony of the Work.
     *
     * @return \DDEX\MEAD\MEAD_101\HarmonyType
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
     * @param \DDEX\MEAD\MEAD_101\HarmonyType $harmony
     * @return self
     */
    public function setHarmony(?\DDEX\MEAD\MEAD_101\HarmonyType $harmony = null)
    {
        $this->harmony = $harmony;
        return $this;
    }

    /**
     * Adds as lyricsMood
     *
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\MoodType $lyricsMood
     */
    public function addToLyricsMood(\DDEX\MEAD\MEAD_101\MoodType $lyricsMood)
    {
        $this->lyricsMood[] = $lyricsMood;
        return $this;
    }

    /**
     * isset lyricsMood
     *
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLyricsMood($index)
    {
        return isset($this->lyricsMood[$index]);
    }

    /**
     * unset lyricsMood
     *
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLyricsMood($index)
    {
        unset($this->lyricsMood[$index]);
    }

    /**
     * Gets as lyricsMood
     *
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @return \DDEX\MEAD\MEAD_101\MoodType[]
     */
    public function getLyricsMood()
    {
        return $this->lyricsMood;
    }

    /**
     * Sets a new lyricsMood
     *
     * A Composite containing details of a Mood created by the lyrics of the Work.
     *
     * @param \DDEX\MEAD\MEAD_101\MoodType[] $lyricsMood
     * @return self
     */
    public function setLyricsMood(array $lyricsMood = null)
    {
        $this->lyricsMood = $lyricsMood;
        return $this;
    }

    /**
     * Adds as danceAndRhythmStyle
     *
     * A Composite containing details of a dance and rhythm style.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\DanceAndRhythmStyleType $danceAndRhythmStyle
     */
    public function addToDanceAndRhythmStyle(\DDEX\MEAD\MEAD_101\DanceAndRhythmStyleType $danceAndRhythmStyle)
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
     * @return \DDEX\MEAD\MEAD_101\DanceAndRhythmStyleType[]
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
     * @param \DDEX\MEAD\MEAD_101\DanceAndRhythmStyleType[] $danceAndRhythmStyle
     * @return self
     */
    public function setDanceAndRhythmStyle(array $danceAndRhythmStyle = null)
    {
        $this->danceAndRhythmStyle = $danceAndRhythmStyle;
        return $this;
    }

    /**
     * Adds as theme
     *
     * A Composite containing details of a theme.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ThemeType $theme
     */
    public function addToTheme(\DDEX\MEAD\MEAD_101\ThemeType $theme)
    {
        $this->theme[] = $theme;
        return $this;
    }

    /**
     * isset theme
     *
     * A Composite containing details of a theme.
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
     * A Composite containing details of a theme.
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
     * A Composite containing details of a theme.
     *
     * @return \DDEX\MEAD\MEAD_101\ThemeType[]
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * A Composite containing details of a theme.
     *
     * @param \DDEX\MEAD\MEAD_101\ThemeType[] $theme
     * @return self
     */
    public function setTheme(array $theme = null)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Adds as workHierarchy
     *
     * A Composite containing details of parents, children and siblings of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\WorkHierarchyType $workHierarchy
     */
    public function addToWorkHierarchy(\DDEX\MEAD\MEAD_101\WorkHierarchyType $workHierarchy)
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
     * @return \DDEX\MEAD\MEAD_101\WorkHierarchyType[]
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
     * @param \DDEX\MEAD\MEAD_101\WorkHierarchyType[] $workHierarchy
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
     * @param \DDEX\MEAD\MEAD_101\RelatedWorkType $relatedWork
     */
    public function addToRelatedWork(\DDEX\MEAD\MEAD_101\RelatedWorkType $relatedWork)
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
     * @return \DDEX\MEAD\MEAD_101\RelatedWorkType[]
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
     * @param \DDEX\MEAD\MEAD_101\RelatedWorkType[] $relatedWork
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
     * @param \DDEX\MEAD\MEAD_101\DerivedRecordingType $derivedRecording
     */
    public function addToDerivedRecording(\DDEX\MEAD\MEAD_101\DerivedRecordingType $derivedRecording)
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
     * @return \DDEX\MEAD\MEAD_101\DerivedRecordingType[]
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
     * @param \DDEX\MEAD\MEAD_101\DerivedRecordingType[] $derivedRecording
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
     * @param \DDEX\MEAD\MEAD_101\LyricsType $lyrics
     */
    public function addToLyrics(\DDEX\MEAD\MEAD_101\LyricsType $lyrics)
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
     * @return \DDEX\MEAD\MEAD_101\LyricsType[]
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
     * @param \DDEX\MEAD\MEAD_101\LyricsType[] $lyrics
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
     * @param \DDEX\MEAD\MEAD_101\CommentaryNoteType $commentaryNote
     */
    public function addToCommentaryNote(\DDEX\MEAD\MEAD_101\CommentaryNoteType $commentaryNote)
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
     * @return \DDEX\MEAD\MEAD_101\CommentaryNoteType[]
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
     * @param \DDEX\MEAD\MEAD_101\CommentaryNoteType[] $commentaryNote
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
     * @return \DDEX\MEAD\MEAD_101\ClassicalPeriodType
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
     * @param \DDEX\MEAD\MEAD_101\ClassicalPeriodType $classicalPeriod
     * @return self
     */
    public function setClassicalPeriod(?\DDEX\MEAD\MEAD_101\ClassicalPeriodType $classicalPeriod = null)
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
     * @param \DDEX\MEAD\MEAD_101\EpochType $epoch
     */
    public function addToEpoch(\DDEX\MEAD\MEAD_101\EpochType $epoch)
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
     * @return \DDEX\MEAD\MEAD_101\EpochType[]
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
     * @param \DDEX\MEAD\MEAD_101\EpochType[] $epoch
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
     * @param \DDEX\MEAD\MEAD_101\ArtisticInfluenceType $artisticInfluence
     */
    public function addToArtisticInfluence(\DDEX\MEAD\MEAD_101\ArtisticInfluenceType $artisticInfluence)
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
     * @return \DDEX\MEAD\MEAD_101\ArtisticInfluenceType[]
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
     * @param \DDEX\MEAD\MEAD_101\ArtisticInfluenceType[] $artisticInfluence
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
     * @param \DDEX\MEAD\MEAD_101\SimilarWorkType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_101\SimilarWorkType $isSimilar)
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
     * @return \DDEX\MEAD\MEAD_101\SimilarWorkType[]
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
     * @param \DDEX\MEAD\MEAD_101\SimilarWorkType[] $isSimilar
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
     * @param \DDEX\MEAD\MEAD_101\AwardType $award
     */
    public function addToAward(\DDEX\MEAD\MEAD_101\AwardType $award)
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
     * @return \DDEX\MEAD\MEAD_101\AwardType[]
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
     * @param \DDEX\MEAD\MEAD_101\AwardType[] $award
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
     * @param \DDEX\MEAD\MEAD_101\AlternativeTitleType $alternativeTitle
     */
    public function addToAlternativeTitle(\DDEX\MEAD\MEAD_101\AlternativeTitleType $alternativeTitle)
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
     * @return \DDEX\MEAD\MEAD_101\AlternativeTitleType[]
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
     * @param \DDEX\MEAD\MEAD_101\AlternativeTitleType[] $alternativeTitle
     * @return self
     */
    public function setAlternativeTitle(array $alternativeTitle = null)
    {
        $this->alternativeTitle = $alternativeTitle;
        return $this;
    }
}


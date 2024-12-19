<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ReleaseInformationType
 *
 * A Composite containing details of a Release.
 * XSD Type: ReleaseInformation
 */
class ReleaseInformationType
{
    /**
     * The StartDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $priorityPeriodStartDate
     */
    private $priorityPeriodStartDate = null;

    /**
     * The EndDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
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
     * A Composite containing summary details of a Release.
     *
     * @var \DDEX\MEAD\MEAD_110\ReleaseSummaryType $releaseSummary
     */
    private $releaseSummary = null;

    /**
     * A Composite containing details of a Genre Category.
     *
     * @var \DDEX\MEAD\MEAD_110\GenreCategoryType[] $genreCategory
     */
    private $genreCategory = [
        
    ];

    /**
     * A Composite containing details of a sub-genre of the Release.
     *
     * @var \DDEX\MEAD\MEAD_110\SubGenreCategoryType[] $subGenreCategory
     */
    private $subGenreCategory = [
        
    ];

    /**
     * A Composite containing details of a focus track.
     *
     * @var \DDEX\MEAD\MEAD_110\FocusType[] $focus
     */
    private $focus = [
        
    ];

    /**
     * A Composite containing details of a Mood.
     *
     * @var \DDEX\MEAD\MEAD_110\MoodType[] $mood
     */
    private $mood = [
        
    ];

    /**
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\MEAD\MEAD_110\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of a similar Release.
     *
     * @var \DDEX\MEAD\MEAD_110\SimilarReleaseType[] $isSimilar
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
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
     *
     * @var \DDEX\MEAD\MEAD_110\AlternativeTitleType[] $alternativeTitle
     */
    private $alternativeTitle = [
        
    ];

    /**
     * A Composite containing details of an Image relating to the Release.
     *
     * @var \DDEX\MEAD\MEAD_110\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * Gets as priorityPeriodStartDate
     *
     * The StartDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
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
     * The StartDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
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
     * The EndDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
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
     * The EndDate of a Period in which the Release is a priority item. This is a string with the syntax YYYY[-MM[-DD]].
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
     * Gets as releaseSummary
     *
     * A Composite containing summary details of a Release.
     *
     * @return \DDEX\MEAD\MEAD_110\ReleaseSummaryType
     */
    public function getReleaseSummary()
    {
        return $this->releaseSummary;
    }

    /**
     * Sets a new releaseSummary
     *
     * A Composite containing summary details of a Release.
     *
     * @param \DDEX\MEAD\MEAD_110\ReleaseSummaryType $releaseSummary
     * @return self
     */
    public function setReleaseSummary(\DDEX\MEAD\MEAD_110\ReleaseSummaryType $releaseSummary)
    {
        $this->releaseSummary = $releaseSummary;
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
     * A Composite containing details of a sub-genre of the Release.
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
     * A Composite containing details of a sub-genre of the Release.
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
     * A Composite containing details of a sub-genre of the Release.
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
     * A Composite containing details of a sub-genre of the Release.
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
     * A Composite containing details of a sub-genre of the Release.
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
     * Adds as artisticStyle
     *
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * A Composite containing details of an artistic style of the Release. This may differ from the style that the artists usually record in.
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
     * Adds as epoch
     *
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of an epoch in a artist's career which the Release is related to.
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
     * A Composite containing details of a similar Release.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\SimilarReleaseType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_110\SimilarReleaseType $isSimilar)
    {
        $this->isSimilar[] = $isSimilar;
        return $this;
    }

    /**
     * isset isSimilar
     *
     * A Composite containing details of a similar Release.
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
     * A Composite containing details of a similar Release.
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
     * A Composite containing details of a similar Release.
     *
     * @return \DDEX\MEAD\MEAD_110\SimilarReleaseType[]
     */
    public function getIsSimilar()
    {
        return $this->isSimilar;
    }

    /**
     * Sets a new isSimilar
     *
     * A Composite containing details of a similar Release.
     *
     * @param \DDEX\MEAD\MEAD_110\SimilarReleaseType[] $isSimilar
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
     * Adds as alternativeTitle
     *
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an AlternativeTitle of the Release to aid the recipient to identify the recording by Titles other than the official Title.
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
     * A Composite containing details of an Image relating to the Release.
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
     * A Composite containing details of an Image relating to the Release.
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
     * A Composite containing details of an Image relating to the Release.
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
     * A Composite containing details of an Image relating to the Release.
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
     * A Composite containing details of an Image relating to the Release.
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


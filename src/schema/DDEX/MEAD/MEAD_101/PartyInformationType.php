<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing PartyInformationType
 *
 * A Composite containing details of a Party.
 * XSD Type: PartyInformation
 */
class PartyInformationType
{
    /**
     * A Composite containing details of a Party.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType $party
     */
    private $party = null;

    /**
     * A Composite containing details of a vocal register of the Party.
     *
     * @var \DDEX\MEAD\MEAD_101\VocalRegisterType $vocalRegister
     */
    private $vocalRegister = null;

    /**
     * A Composite containing details of a focus track.
     *
     * @var \DDEX\MEAD\MEAD_101\FocusTrackType[] $focusTrack
     */
    private $focusTrack = [
        
    ];

    /**
     * A Composite containing details of a commentary note.
     *
     * @var \DDEX\MEAD\MEAD_101\CommentaryNoteType[] $commentaryNote
     */
    private $commentaryNote = [
        
    ];

    /**
     * A Composite containing details of a pseudonym.
     *
     * @var \DDEX\MEAD\MEAD_101\PseudonymType[] $pseudonym
     */
    private $pseudonym = [
        
    ];

    /**
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @var \DDEX\MEAD\MEAD_101\ArtistTypeType[] $artistType
     */
    private $artistType = [
        
    ];

    /**
     * A Composite containing details of a period of the Party.
     *
     * @var \DDEX\MEAD\MEAD_101\ClassicalPeriodType $classicalPeriod
     */
    private $classicalPeriod = null;

    /**
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
     *
     * @var \DDEX\MEAD\MEAD_101\EpochType[] $epoch
     */
    private $epoch = [
        
    ];

    /**
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
     *
     * @var \DDEX\MEAD\MEAD_101\ArtisticInfluenceType[] $artisticInfluence
     */
    private $artisticInfluence = [
        
    ];

    /**
     * A Composite containing details of a similar Party.
     *
     * @var \DDEX\MEAD\MEAD_101\SimilarPartyType[] $isSimilar
     */
    private $isSimilar = [
        
    ];

    /**
     * A Composite containing details of historic charting information. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_101\HistoricChartingInformationForPartyType[] $historicChartingInformation
     */
    private $historicChartingInformation = [
        
    ];

    /**
     * A Composite containing details of an award. Recipients are requested to make sure they only trust this information if it is sent from a reputable and, ideally, authoritative source.
     *
     * @var \DDEX\MEAD\MEAD_101\AwardForPartyType[] $award
     */
    private $award = [
        
    ];

    /**
     * A Composite containing details of a biography of the Party.
     *
     * @var \DDEX\MEAD\MEAD_101\BiographyType[] $biography
     */
    private $biography = [
        
    ];

    /**
     * A Composite containing details of an Image of the Party.
     *
     * @var \DDEX\MEAD\MEAD_101\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @var \DDEX\MEAD\MEAD_101\RelatedCreationType[] $relatedCreation
     */
    private $relatedCreation = [
        
    ];

    /**
     * Gets as party
     *
     * A Composite containing details of a Party.
     *
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of a Party.
     *
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $party
     * @return self
     */
    public function setParty(\DDEX\MEAD\MEAD_101\PartyWithNamesType $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as vocalRegister
     *
     * A Composite containing details of a vocal register of the Party.
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
     * A Composite containing details of a vocal register of the Party.
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
     * Adds as focusTrack
     *
     * A Composite containing details of a focus track.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\FocusTrackType $focusTrack
     */
    public function addToFocusTrack(\DDEX\MEAD\MEAD_101\FocusTrackType $focusTrack)
    {
        $this->focusTrack[] = $focusTrack;
        return $this;
    }

    /**
     * isset focusTrack
     *
     * A Composite containing details of a focus track.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocusTrack($index)
    {
        return isset($this->focusTrack[$index]);
    }

    /**
     * unset focusTrack
     *
     * A Composite containing details of a focus track.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocusTrack($index)
    {
        unset($this->focusTrack[$index]);
    }

    /**
     * Gets as focusTrack
     *
     * A Composite containing details of a focus track.
     *
     * @return \DDEX\MEAD\MEAD_101\FocusTrackType[]
     */
    public function getFocusTrack()
    {
        return $this->focusTrack;
    }

    /**
     * Sets a new focusTrack
     *
     * A Composite containing details of a focus track.
     *
     * @param \DDEX\MEAD\MEAD_101\FocusTrackType[] $focusTrack
     * @return self
     */
    public function setFocusTrack(array $focusTrack = null)
    {
        $this->focusTrack = $focusTrack;
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
     * Adds as pseudonym
     *
     * A Composite containing details of a pseudonym.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PseudonymType $pseudonym
     */
    public function addToPseudonym(\DDEX\MEAD\MEAD_101\PseudonymType $pseudonym)
    {
        $this->pseudonym[] = $pseudonym;
        return $this;
    }

    /**
     * isset pseudonym
     *
     * A Composite containing details of a pseudonym.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPseudonym($index)
    {
        return isset($this->pseudonym[$index]);
    }

    /**
     * unset pseudonym
     *
     * A Composite containing details of a pseudonym.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPseudonym($index)
    {
        unset($this->pseudonym[$index]);
    }

    /**
     * Gets as pseudonym
     *
     * A Composite containing details of a pseudonym.
     *
     * @return \DDEX\MEAD\MEAD_101\PseudonymType[]
     */
    public function getPseudonym()
    {
        return $this->pseudonym;
    }

    /**
     * Sets a new pseudonym
     *
     * A Composite containing details of a pseudonym.
     *
     * @param \DDEX\MEAD\MEAD_101\PseudonymType[] $pseudonym
     * @return self
     */
    public function setPseudonym(array $pseudonym = null)
    {
        $this->pseudonym = $pseudonym;
        return $this;
    }

    /**
     * Adds as artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ArtistTypeType $artistType
     */
    public function addToArtistType(\DDEX\MEAD\MEAD_101\ArtistTypeType $artistType)
    {
        $this->artistType[] = $artistType;
        return $this;
    }

    /**
     * isset artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtistType($index)
    {
        return isset($this->artistType[$index]);
    }

    /**
     * unset artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtistType($index)
    {
        unset($this->artistType[$index]);
    }

    /**
     * Gets as artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @return \DDEX\MEAD\MEAD_101\ArtistTypeType[]
     */
    public function getArtistType()
    {
        return $this->artistType;
    }

    /**
     * Sets a new artistType
     *
     * A Composite containing details of an Artist type (applicable if the Party is an Artist). This allows saying that the Artist is, for instance, a Mariachi Band.
     *
     * @param \DDEX\MEAD\MEAD_101\ArtistTypeType[] $artistType
     * @return self
     */
    public function setArtistType(array $artistType = null)
    {
        $this->artistType = $artistType;
        return $this;
    }

    /**
     * Gets as classicalPeriod
     *
     * A Composite containing details of a period of the Party.
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
     * A Composite containing details of a period of the Party.
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
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
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
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
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
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
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
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
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
     * A Composite containing details of an epoch in the Artist's career (applicable if the Party is an Artist).
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
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
     * A Composite containing details of a related Artist that was influenced or that was an influencer (applicable if the Party is an Artist).
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
     * A Composite containing details of a similar Party.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\SimilarPartyType $isSimilar
     */
    public function addToIsSimilar(\DDEX\MEAD\MEAD_101\SimilarPartyType $isSimilar)
    {
        $this->isSimilar[] = $isSimilar;
        return $this;
    }

    /**
     * isset isSimilar
     *
     * A Composite containing details of a similar Party.
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
     * A Composite containing details of a similar Party.
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
     * A Composite containing details of a similar Party.
     *
     * @return \DDEX\MEAD\MEAD_101\SimilarPartyType[]
     */
    public function getIsSimilar()
    {
        return $this->isSimilar;
    }

    /**
     * Sets a new isSimilar
     *
     * A Composite containing details of a similar Party.
     *
     * @param \DDEX\MEAD\MEAD_101\SimilarPartyType[] $isSimilar
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
     * @param \DDEX\MEAD\MEAD_101\HistoricChartingInformationForPartyType $historicChartingInformation
     */
    public function addToHistoricChartingInformation(\DDEX\MEAD\MEAD_101\HistoricChartingInformationForPartyType $historicChartingInformation)
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
     * @return \DDEX\MEAD\MEAD_101\HistoricChartingInformationForPartyType[]
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
     * @param \DDEX\MEAD\MEAD_101\HistoricChartingInformationForPartyType[] $historicChartingInformation
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
     * @param \DDEX\MEAD\MEAD_101\AwardForPartyType $award
     */
    public function addToAward(\DDEX\MEAD\MEAD_101\AwardForPartyType $award)
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
     * @return \DDEX\MEAD\MEAD_101\AwardForPartyType[]
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
     * @param \DDEX\MEAD\MEAD_101\AwardForPartyType[] $award
     * @return self
     */
    public function setAward(array $award = null)
    {
        $this->award = $award;
        return $this;
    }

    /**
     * Adds as biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\BiographyType $biography
     */
    public function addToBiography(\DDEX\MEAD\MEAD_101\BiographyType $biography)
    {
        $this->biography[] = $biography;
        return $this;
    }

    /**
     * isset biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBiography($index)
    {
        return isset($this->biography[$index]);
    }

    /**
     * unset biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBiography($index)
    {
        unset($this->biography[$index]);
    }

    /**
     * Gets as biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @return \DDEX\MEAD\MEAD_101\BiographyType[]
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Sets a new biography
     *
     * A Composite containing details of a biography of the Party.
     *
     * @param \DDEX\MEAD\MEAD_101\BiographyType[] $biography
     * @return self
     */
    public function setBiography(array $biography = null)
    {
        $this->biography = $biography;
        return $this;
    }

    /**
     * Adds as image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ImageType $image
     */
    public function addToImage(\DDEX\MEAD\MEAD_101\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A Composite containing details of an Image of the Party.
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
     * A Composite containing details of an Image of the Party.
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
     * A Composite containing details of an Image of the Party.
     *
     * @return \DDEX\MEAD\MEAD_101\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A Composite containing details of an Image of the Party.
     *
     * @param \DDEX\MEAD\MEAD_101\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Adds as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\RelatedCreationType $relatedCreation
     */
    public function addToRelatedCreation(\DDEX\MEAD\MEAD_101\RelatedCreationType $relatedCreation)
    {
        $this->relatedCreation[] = $relatedCreation;
        return $this;
    }

    /**
     * isset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedCreation($index)
    {
        return isset($this->relatedCreation[$index]);
    }

    /**
     * unset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedCreation($index)
    {
        unset($this->relatedCreation[$index]);
    }

    /**
     * Gets as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @return \DDEX\MEAD\MEAD_101\RelatedCreationType[]
     */
    public function getRelatedCreation()
    {
        return $this->relatedCreation;
    }

    /**
     * Sets a new relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) to which the Party contributed.
     *
     * @param \DDEX\MEAD\MEAD_101\RelatedCreationType[] $relatedCreation
     * @return self
     */
    public function setRelatedCreation(array $relatedCreation = null)
    {
        $this->relatedCreation = $relatedCreation;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing SampledSoundRecordingType
 *
 * A Composite containing details of a SoundRecording.
 * XSD Type: SampledSoundRecording
 */
class SampledSoundRecordingType
{
    /**
     * A Composite containing details of a SoundRecordingId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[] $soundRecordingId
     */
    private $soundRecordingId = [
        
    ];

    /**
     * A Composite containing details of a Title.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * Adds as soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId
     */
    public function addToSoundRecordingId(\DDEX\RDR_N\RDR_N_150\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId[] = $soundRecordingId;
        return $this;
    }

    /**
     * isset soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecordingId($index)
    {
        return isset($this->soundRecordingId[$index]);
    }

    /**
     * unset soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecordingId($index)
    {
        unset($this->soundRecordingId[$index]);
    }

    /**
     * Gets as soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[]
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of a SoundRecordingId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingIdType[] $soundRecordingId
     * @return self
     */
    public function setSoundRecordingId(array $soundRecordingId = null)
    {
        $this->soundRecordingId = $soundRecordingId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title.
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
     * A Composite containing details of a Title.
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
     * A Composite containing details of a Title.
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
     * A Composite containing details of a Title.
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
     * A Composite containing details of a Title.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


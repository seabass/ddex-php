<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ClaimedVideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: ClaimedVideo
 */
class ClaimedVideoType
{
    /**
     * A Composite containing details of a VideoId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     */
    private $videoId = [
        
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
     * Adds as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\RDR_N\RDR_N_150\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoId($index)
    {
        return isset($this->videoId[$index]);
    }

    /**
     * unset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoId($index)
    {
        unset($this->videoId[$index]);
    }

    /**
     * Gets as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId = null)
    {
        $this->videoId = $videoId;
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
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing SimpleHostSoundCarrierType
 *
 * A Composite containing details of a HostSoundCarrier of a SoundRecording. This Composite exists to support the identification and matching of SoundRecording information.
 * XSD Type: SimpleHostSoundCarrier
 */
class SimpleHostSoundCarrierType
{
    /**
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of a Title of the HostSoundCarrier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @var string $trackNumber
     */
    private $trackNumber = null;

    /**
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @var string $volumeNumberInSet
     */
    private $volumeNumberInSet = null;

    /**
     * The SideNumber of the SoundRecording within the Release.
     *
     * @var string $sideNumber
     */
    private $sideNumber = null;

    /**
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @var \DDEX\RDR_N\RDR_N_150\LabelNameType $labelName
     */
    private $labelName = null;

    /**
     * Adds as releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\RDR_N\RDR_N_150\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds of the HostSoundCarrier. If available, a GRid has to be used. If the HostSoundCarrier contains only one SoundRecording, the ISRC of the SoundRecording may be used instead.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the HostSoundCarrier.
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
     * A Composite containing details of a Title of the HostSoundCarrier.
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
     * A Composite containing details of a Title of the HostSoundCarrier.
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
     * A Composite containing details of a Title of the HostSoundCarrier.
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
     * A Composite containing details of a Title of the HostSoundCarrier.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the HostSoundCarrier to a Consumer.
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
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the HostSoundCarrier. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * Gets as trackNumber
     *
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @return string
     */
    public function getTrackNumber()
    {
        return $this->trackNumber;
    }

    /**
     * Sets a new trackNumber
     *
     * The TrackNumber of the SoundRecording within the HostSoundCarrier.
     *
     * @param string $trackNumber
     * @return self
     */
    public function setTrackNumber($trackNumber)
    {
        $this->trackNumber = $trackNumber;
        return $this;
    }

    /**
     * Gets as volumeNumberInSet
     *
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @return string
     */
    public function getVolumeNumberInSet()
    {
        return $this->volumeNumberInSet;
    }

    /**
     * Sets a new volumeNumberInSet
     *
     * The SequenceNumber within the Set of the volume containing the SoundRecording, where the HostSoundCarrier is a Set (such as a 'box set' of CDs).
     *
     * @param string $volumeNumberInSet
     * @return self
     */
    public function setVolumeNumberInSet($volumeNumberInSet)
    {
        $this->volumeNumberInSet = $volumeNumberInSet;
        return $this;
    }

    /**
     * Gets as sideNumber
     *
     * The SideNumber of the SoundRecording within the Release.
     *
     * @return string
     */
    public function getSideNumber()
    {
        return $this->sideNumber;
    }

    /**
     * Sets a new sideNumber
     *
     * The SideNumber of the SoundRecording within the Release.
     *
     * @param string $sideNumber
     * @return self
     */
    public function setSideNumber($sideNumber)
    {
        $this->sideNumber = $sideNumber;
        return $this;
    }

    /**
     * Gets as labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @return \DDEX\RDR_N\RDR_N_150\LabelNameType
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the primary releasing Label (not the original one) under which this HostSoundCarrier is marketed. The use of multiple LabelNames is discouraged unless used to communicate LabelNames in different languages and/or scripts. This field is solely for matching and not to signal rights claims.
     *
     * @param \DDEX\RDR_N\RDR_N_150\LabelNameType $labelName
     * @return self
     */
    public function setLabelName(?\DDEX\RDR_N\RDR_N_150\LabelNameType $labelName = null)
    {
        $this->labelName = $labelName;
        return $this;
    }
}


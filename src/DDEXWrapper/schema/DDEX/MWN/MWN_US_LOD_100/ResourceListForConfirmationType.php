<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ResourceListForConfirmationType
 *
 * A Composite containing details of one or more Resources. ResourceList provides a simple means of aggregating Resources without any explicit sequencing or grouping: if it is needed, that is provided by the ResourceGroup Composite. 
 * Explanatory Note: This Composite is named ResourceListForConfirmation to disambiguate it from the basic ResourceList Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: ResourceListForConfirmation
 */
class ResourceListForConfirmationType
{
    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\SoundRecordingForConfirmationType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * A Composite containing details of a Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\VideoForConfirmationType[] $video
     */
    private $video = [
        
    ];

    /**
     * Adds as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\SoundRecordingForConfirmationType $soundRecording
     */
    public function addToSoundRecording(\DDEX\MWN\MWN_US_LOD_100\SoundRecordingForConfirmationType $soundRecording)
    {
        $this->soundRecording[] = $soundRecording;
        return $this;
    }

    /**
     * isset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecording($index)
    {
        return isset($this->soundRecording[$index]);
    }

    /**
     * unset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecording($index)
    {
        unset($this->soundRecording[$index]);
    }

    /**
     * Gets as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\SoundRecordingForConfirmationType[]
     */
    public function getSoundRecording()
    {
        return $this->soundRecording;
    }

    /**
     * Sets a new soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\SoundRecordingForConfirmationType[] $soundRecording
     * @return self
     */
    public function setSoundRecording(array $soundRecording = null)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }

    /**
     * Adds as video
     *
     * A Composite containing details of a Video.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\VideoForConfirmationType $video
     */
    public function addToVideo(\DDEX\MWN\MWN_US_LOD_100\VideoForConfirmationType $video)
    {
        $this->video[] = $video;
        return $this;
    }

    /**
     * isset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideo($index)
    {
        return isset($this->video[$index]);
    }

    /**
     * unset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideo($index)
    {
        unset($this->video[$index]);
    }

    /**
     * Gets as video
     *
     * A Composite containing details of a Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\VideoForConfirmationType[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets a new video
     *
     * A Composite containing details of a Video.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\VideoForConfirmationType[] $video
     * @return self
     */
    public function setVideo(array $video = null)
    {
        $this->video = $video;
        return $this;
    }
}


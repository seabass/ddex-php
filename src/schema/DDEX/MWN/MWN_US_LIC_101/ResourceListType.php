<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing ResourceListType
 *
 * A Composite containing details of one or more Resources. ResourceList provides a simple means of aggregating Resources without any explicit sequencing or grouping: if it is needed, that is provided by the ResourceGroup Composite.
 * XSD Type: ResourceList
 */
class ResourceListType
{
    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\SoundRecordingType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * A Composite containing details of a Video.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\VideoType[] $video
     */
    private $video = [
        
    ];

    /**
     * Adds as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\SoundRecordingType $soundRecording
     */
    public function addToSoundRecording(\DDEX\MWN\MWN_US_LIC_101\SoundRecordingType $soundRecording)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\SoundRecordingType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\SoundRecordingType[] $soundRecording
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
     * @param \DDEX\MWN\MWN_US_LIC_101\VideoType $video
     */
    public function addToVideo(\DDEX\MWN\MWN_US_LIC_101\VideoType $video)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\VideoType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\VideoType[] $video
     * @return self
     */
    public function setVideo(array $video = null)
    {
        $this->video = $video;
        return $this;
    }
}


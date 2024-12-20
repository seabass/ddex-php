<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing ResourceListType
 *
 * A Composite containing details of one or more Resources.
 * XSD Type: ResourceList
 */
class ResourceListType
{
    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DDEX\RIN\RIN11M\SoundRecordingType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * Adds as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\SoundRecordingType $soundRecording
     */
    public function addToSoundRecording(\DDEX\RIN\RIN11M\SoundRecordingType $soundRecording)
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
     * @return \DDEX\RIN\RIN11M\SoundRecordingType[]
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
     * @param \DDEX\RIN\RIN11M\SoundRecordingType[] $soundRecording
     * @return self
     */
    public function setSoundRecording(array $soundRecording)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing TimecodeType
 *
 * A Composite containing details of an SMPTE FrameRate.
 * XSD Type: Timecode
 */
class TimecodeType
{
    /**
     * The time code type.
     *
     * @var string $timecodeType
     */
    private $timecodeType = null;

    /**
     * The FrameRate according to the TimecodeType.
     *
     * @var string $frameRate
     */
    private $frameRate = null;

    /**
     * A Flag indicating whether the frame rate is drop frame (=true) or not (=false).
     *
     * @var bool $isDropFrame
     */
    private $isDropFrame = null;

    /**
     * Gets as timecodeType
     *
     * The time code type.
     *
     * @return string
     */
    public function getTimecodeType()
    {
        return $this->timecodeType;
    }

    /**
     * Sets a new timecodeType
     *
     * The time code type.
     *
     * @param string $timecodeType
     * @return self
     */
    public function setTimecodeType($timecodeType)
    {
        $this->timecodeType = $timecodeType;
        return $this;
    }

    /**
     * Gets as frameRate
     *
     * The FrameRate according to the TimecodeType.
     *
     * @return string
     */
    public function getFrameRate()
    {
        return $this->frameRate;
    }

    /**
     * Sets a new frameRate
     *
     * The FrameRate according to the TimecodeType.
     *
     * @param string $frameRate
     * @return self
     */
    public function setFrameRate($frameRate)
    {
        $this->frameRate = $frameRate;
        return $this;
    }

    /**
     * Gets as isDropFrame
     *
     * A Flag indicating whether the frame rate is drop frame (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsDropFrame()
    {
        return $this->isDropFrame;
    }

    /**
     * Sets a new isDropFrame
     *
     * A Flag indicating whether the frame rate is drop frame (=true) or not (=false).
     *
     * @param bool $isDropFrame
     * @return self
     */
    public function setIsDropFrame($isDropFrame)
    {
        $this->isDropFrame = $isDropFrame;
        return $this;
    }
}


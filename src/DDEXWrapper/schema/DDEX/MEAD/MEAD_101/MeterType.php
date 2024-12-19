<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing MeterType
 *
 * A Composite containing details of a meter.
 * XSD Type: Meter
 */
class MeterType
{
    /**
     * The number of beats in a bar.
     *
     * @var int $numberOfBeatsInBar
     */
    private $numberOfBeatsInBar = null;

    /**
     * The note that is equivalent to one beat.
     *
     * @var int $noteEquivalentToBeat
     */
    private $noteEquivalentToBeat = null;

    /**
     * Gets as numberOfBeatsInBar
     *
     * The number of beats in a bar.
     *
     * @return int
     */
    public function getNumberOfBeatsInBar()
    {
        return $this->numberOfBeatsInBar;
    }

    /**
     * Sets a new numberOfBeatsInBar
     *
     * The number of beats in a bar.
     *
     * @param int $numberOfBeatsInBar
     * @return self
     */
    public function setNumberOfBeatsInBar($numberOfBeatsInBar)
    {
        $this->numberOfBeatsInBar = $numberOfBeatsInBar;
        return $this;
    }

    /**
     * Gets as noteEquivalentToBeat
     *
     * The note that is equivalent to one beat.
     *
     * @return int
     */
    public function getNoteEquivalentToBeat()
    {
        return $this->noteEquivalentToBeat;
    }

    /**
     * Sets a new noteEquivalentToBeat
     *
     * The note that is equivalent to one beat.
     *
     * @param int $noteEquivalentToBeat
     * @return self
     */
    public function setNoteEquivalentToBeat($noteEquivalentToBeat)
    {
        $this->noteEquivalentToBeat = $noteEquivalentToBeat;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing HarmonyModulationType
 *
 * A Composite containing details of the harmony modulation of a MusicalWork or a Resource.
 * XSD Type: HarmonyModulation
 */
class HarmonyModulationType
{
    /**
     * The start point given in seconds from the start of the referenced Resource.
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * The end point given in seconds from the start of the referenced Resource.
     *
     * @var float $endPoint
     */
    private $endPoint = null;

    /**
     * The start point given in bars from the start of the referenced Work.
     *
     * @var int $startBar
     */
    private $startBar = null;

    /**
     * The end point given in bars from the start of the referenced Work.
     *
     * @var int $endBar
     */
    private $endBar = null;

    /**
     * A root chord note of the modulation.
     *
     * @var \DDEX\MEAD\MEAD_110\RootChordNoteType $rootChordNote
     */
    private $rootChordNote = null;

    /**
     * A root chord quality of the modulation.
     *
     * @var \DDEX\MEAD\MEAD_110\RootChordQualityType $rootChordQuality
     */
    private $rootChordQuality = null;

    /**
     * A mode of the modulation, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @var \DDEX\MEAD\MEAD_110\ModeType $mode
     */
    private $mode = null;

    /**
     * Gets as startPoint
     *
     * The start point given in seconds from the start of the referenced Resource.
     *
     * @return float
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Sets a new startPoint
     *
     * The start point given in seconds from the start of the referenced Resource.
     *
     * @param float $startPoint
     * @return self
     */
    public function setStartPoint($startPoint)
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    /**
     * Gets as endPoint
     *
     * The end point given in seconds from the start of the referenced Resource.
     *
     * @return float
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * Sets a new endPoint
     *
     * The end point given in seconds from the start of the referenced Resource.
     *
     * @param float $endPoint
     * @return self
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * Gets as startBar
     *
     * The start point given in bars from the start of the referenced Work.
     *
     * @return int
     */
    public function getStartBar()
    {
        return $this->startBar;
    }

    /**
     * Sets a new startBar
     *
     * The start point given in bars from the start of the referenced Work.
     *
     * @param int $startBar
     * @return self
     */
    public function setStartBar($startBar)
    {
        $this->startBar = $startBar;
        return $this;
    }

    /**
     * Gets as endBar
     *
     * The end point given in bars from the start of the referenced Work.
     *
     * @return int
     */
    public function getEndBar()
    {
        return $this->endBar;
    }

    /**
     * Sets a new endBar
     *
     * The end point given in bars from the start of the referenced Work.
     *
     * @param int $endBar
     * @return self
     */
    public function setEndBar($endBar)
    {
        $this->endBar = $endBar;
        return $this;
    }

    /**
     * Gets as rootChordNote
     *
     * A root chord note of the modulation.
     *
     * @return \DDEX\MEAD\MEAD_110\RootChordNoteType
     */
    public function getRootChordNote()
    {
        return $this->rootChordNote;
    }

    /**
     * Sets a new rootChordNote
     *
     * A root chord note of the modulation.
     *
     * @param \DDEX\MEAD\MEAD_110\RootChordNoteType $rootChordNote
     * @return self
     */
    public function setRootChordNote(?\DDEX\MEAD\MEAD_110\RootChordNoteType $rootChordNote = null)
    {
        $this->rootChordNote = $rootChordNote;
        return $this;
    }

    /**
     * Gets as rootChordQuality
     *
     * A root chord quality of the modulation.
     *
     * @return \DDEX\MEAD\MEAD_110\RootChordQualityType
     */
    public function getRootChordQuality()
    {
        return $this->rootChordQuality;
    }

    /**
     * Sets a new rootChordQuality
     *
     * A root chord quality of the modulation.
     *
     * @param \DDEX\MEAD\MEAD_110\RootChordQualityType $rootChordQuality
     * @return self
     */
    public function setRootChordQuality(?\DDEX\MEAD\MEAD_110\RootChordQualityType $rootChordQuality = null)
    {
        $this->rootChordQuality = $rootChordQuality;
        return $this;
    }

    /**
     * Gets as mode
     *
     * A mode of the modulation, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @return \DDEX\MEAD\MEAD_110\ModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * A mode of the modulation, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @param \DDEX\MEAD\MEAD_110\ModeType $mode
     * @return self
     */
    public function setMode(?\DDEX\MEAD\MEAD_110\ModeType $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }
}


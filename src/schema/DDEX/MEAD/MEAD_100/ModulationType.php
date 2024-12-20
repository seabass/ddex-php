<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing ModulationType
 *
 * A Composite containing details of a modulation.
 * XSD Type: Modulation
 */
class ModulationType
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
     * The value of the beats per minute.
     *
     * @var float $value
     */
    private $value = null;

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
     * Gets as value
     *
     * The value of the beats per minute.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the beats per minute.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}


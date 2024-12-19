<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing TimeSignatureModulationType
 *
 * A Composite containing details of a time signature modulation.
 * XSD Type: TimeSignatureModulation
 */
class TimeSignatureModulationType
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
     * A Composite containing details of a meter of the modulation.
     *
     * @var \DDEX\MEAD\MEAD_100\MeterType $meter
     */
    private $meter = null;

    /**
     * A Flag indicating whether a meter was not available (=true) or whether it was (=false).
     *
     * @var bool $noMeterAvailable
     */
    private $noMeterAvailable = null;

    /**
     * A Composite containing details of a tempo of the modulation.
     *
     * @var \DDEX\MEAD\MEAD_100\TempoType $tempo
     */
    private $tempo = null;

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
     * Gets as meter
     *
     * A Composite containing details of a meter of the modulation.
     *
     * @return \DDEX\MEAD\MEAD_100\MeterType
     */
    public function getMeter()
    {
        return $this->meter;
    }

    /**
     * Sets a new meter
     *
     * A Composite containing details of a meter of the modulation.
     *
     * @param \DDEX\MEAD\MEAD_100\MeterType $meter
     * @return self
     */
    public function setMeter(?\DDEX\MEAD\MEAD_100\MeterType $meter = null)
    {
        $this->meter = $meter;
        return $this;
    }

    /**
     * Gets as noMeterAvailable
     *
     * A Flag indicating whether a meter was not available (=true) or whether it was (=false).
     *
     * @return bool
     */
    public function getNoMeterAvailable()
    {
        return $this->noMeterAvailable;
    }

    /**
     * Sets a new noMeterAvailable
     *
     * A Flag indicating whether a meter was not available (=true) or whether it was (=false).
     *
     * @param bool $noMeterAvailable
     * @return self
     */
    public function setNoMeterAvailable($noMeterAvailable)
    {
        $this->noMeterAvailable = $noMeterAvailable;
        return $this;
    }

    /**
     * Gets as tempo
     *
     * A Composite containing details of a tempo of the modulation.
     *
     * @return \DDEX\MEAD\MEAD_100\TempoType
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Sets a new tempo
     *
     * A Composite containing details of a tempo of the modulation.
     *
     * @param \DDEX\MEAD\MEAD_100\TempoType $tempo
     * @return self
     */
    public function setTempo(?\DDEX\MEAD\MEAD_100\TempoType $tempo = null)
    {
        $this->tempo = $tempo;
        return $this;
    }
}


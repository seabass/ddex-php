<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing TimeSignatureType
 *
 * A Composite containing details of a time signature.
 * XSD Type: TimeSignature
 */
class TimeSignatureType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a meter.
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
     * A Flag indicating whether there are too many tempi to provide any information (=true) or not (=false).
     *
     * @var bool $tooManyTempi
     */
    private $tooManyTempi = null;

    /**
     * A Composite containing details of a tempo.
     *
     * @var \DDEX\MEAD\MEAD_100\TempoValueType $tempo
     */
    private $tempo = null;

    /**
     * A Composite containing details of a time signature modulation.
     *
     * @var \DDEX\MEAD\MEAD_100\TimeSignatureModulationType[] $modulation
     */
    private $modulation = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return string[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as meter
     *
     * A Composite containing details of a meter.
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
     * A Composite containing details of a meter.
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
     * Gets as tooManyTempi
     *
     * A Flag indicating whether there are too many tempi to provide any information (=true) or not (=false).
     *
     * @return bool
     */
    public function getTooManyTempi()
    {
        return $this->tooManyTempi;
    }

    /**
     * Sets a new tooManyTempi
     *
     * A Flag indicating whether there are too many tempi to provide any information (=true) or not (=false).
     *
     * @param bool $tooManyTempi
     * @return self
     */
    public function setTooManyTempi($tooManyTempi)
    {
        $this->tooManyTempi = $tooManyTempi;
        return $this;
    }

    /**
     * Gets as tempo
     *
     * A Composite containing details of a tempo.
     *
     * @return \DDEX\MEAD\MEAD_100\TempoValueType
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * Sets a new tempo
     *
     * A Composite containing details of a tempo.
     *
     * @param \DDEX\MEAD\MEAD_100\TempoValueType $tempo
     * @return self
     */
    public function setTempo(?\DDEX\MEAD\MEAD_100\TempoValueType $tempo = null)
    {
        $this->tempo = $tempo;
        return $this;
    }

    /**
     * Adds as modulation
     *
     * A Composite containing details of a time signature modulation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TimeSignatureModulationType $modulation
     */
    public function addToModulation(\DDEX\MEAD\MEAD_100\TimeSignatureModulationType $modulation)
    {
        $this->modulation[] = $modulation;
        return $this;
    }

    /**
     * isset modulation
     *
     * A Composite containing details of a time signature modulation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModulation($index)
    {
        return isset($this->modulation[$index]);
    }

    /**
     * unset modulation
     *
     * A Composite containing details of a time signature modulation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModulation($index)
    {
        unset($this->modulation[$index]);
    }

    /**
     * Gets as modulation
     *
     * A Composite containing details of a time signature modulation.
     *
     * @return \DDEX\MEAD\MEAD_100\TimeSignatureModulationType[]
     */
    public function getModulation()
    {
        return $this->modulation;
    }

    /**
     * Sets a new modulation
     *
     * A Composite containing details of a time signature modulation.
     *
     * @param \DDEX\MEAD\MEAD_100\TimeSignatureModulationType[] $modulation
     * @return self
     */
    public function setModulation(array $modulation = null)
    {
        $this->modulation = $modulation;
        return $this;
    }
}


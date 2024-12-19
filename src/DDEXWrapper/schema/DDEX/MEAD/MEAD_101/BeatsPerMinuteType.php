<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing BeatsPerMinuteType
 *
 * A Composite containing details of beats.
 * XSD Type: BeatsPerMinute
 */
class BeatsPerMinuteType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The value of the beats per minute.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * A Composite containing details of a modulation.
     *
     * @var \DDEX\MEAD\MEAD_101\ModulationType[] $modulation
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

    /**
     * Adds as modulation
     *
     * A Composite containing details of a modulation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ModulationType $modulation
     */
    public function addToModulation(\DDEX\MEAD\MEAD_101\ModulationType $modulation)
    {
        $this->modulation[] = $modulation;
        return $this;
    }

    /**
     * isset modulation
     *
     * A Composite containing details of a modulation.
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
     * A Composite containing details of a modulation.
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
     * A Composite containing details of a modulation.
     *
     * @return \DDEX\MEAD\MEAD_101\ModulationType[]
     */
    public function getModulation()
    {
        return $this->modulation;
    }

    /**
     * Sets a new modulation
     *
     * A Composite containing details of a modulation.
     *
     * @param \DDEX\MEAD\MEAD_101\ModulationType[] $modulation
     * @return self
     */
    public function setModulation(array $modulation = null)
    {
        $this->modulation = $modulation;
        return $this;
    }
}


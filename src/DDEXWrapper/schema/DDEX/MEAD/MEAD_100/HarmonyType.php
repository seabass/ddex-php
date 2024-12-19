<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing HarmonyType
 *
 * A Composite containing details of a harmony of a MusicalWork or a Resource.
 * XSD Type: Harmony
 */
class HarmonyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A root chord note.
     *
     * @var \DDEX\MEAD\MEAD_100\RootChordNoteType $rootChordNote
     */
    private $rootChordNote = null;

    /**
     * A root chord quality.
     *
     * @var \DDEX\MEAD\MEAD_100\RootChordQualityType $rootChordQuality
     */
    private $rootChordQuality = null;

    /**
     * A mode, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @var \DDEX\MEAD\MEAD_100\ModeType $mode
     */
    private $mode = null;

    /**
     * A Composite containing details of a harmony modulation.
     *
     * @var \DDEX\MEAD\MEAD_100\HarmonyModulationType[] $modulation
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
     * Gets as rootChordNote
     *
     * A root chord note.
     *
     * @return \DDEX\MEAD\MEAD_100\RootChordNoteType
     */
    public function getRootChordNote()
    {
        return $this->rootChordNote;
    }

    /**
     * Sets a new rootChordNote
     *
     * A root chord note.
     *
     * @param \DDEX\MEAD\MEAD_100\RootChordNoteType $rootChordNote
     * @return self
     */
    public function setRootChordNote(\DDEX\MEAD\MEAD_100\RootChordNoteType $rootChordNote)
    {
        $this->rootChordNote = $rootChordNote;
        return $this;
    }

    /**
     * Gets as rootChordQuality
     *
     * A root chord quality.
     *
     * @return \DDEX\MEAD\MEAD_100\RootChordQualityType
     */
    public function getRootChordQuality()
    {
        return $this->rootChordQuality;
    }

    /**
     * Sets a new rootChordQuality
     *
     * A root chord quality.
     *
     * @param \DDEX\MEAD\MEAD_100\RootChordQualityType $rootChordQuality
     * @return self
     */
    public function setRootChordQuality(?\DDEX\MEAD\MEAD_100\RootChordQualityType $rootChordQuality = null)
    {
        $this->rootChordQuality = $rootChordQuality;
        return $this;
    }

    /**
     * Gets as mode
     *
     * A mode, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @return \DDEX\MEAD\MEAD_100\ModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * A mode, i.e. a type of musical scale coupled with a set of characteristic melodic behaviours.
     *
     * @param \DDEX\MEAD\MEAD_100\ModeType $mode
     * @return self
     */
    public function setMode(?\DDEX\MEAD\MEAD_100\ModeType $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Adds as modulation
     *
     * A Composite containing details of a harmony modulation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\HarmonyModulationType $modulation
     */
    public function addToModulation(\DDEX\MEAD\MEAD_100\HarmonyModulationType $modulation)
    {
        $this->modulation[] = $modulation;
        return $this;
    }

    /**
     * isset modulation
     *
     * A Composite containing details of a harmony modulation.
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
     * A Composite containing details of a harmony modulation.
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
     * A Composite containing details of a harmony modulation.
     *
     * @return \DDEX\MEAD\MEAD_100\HarmonyModulationType[]
     */
    public function getModulation()
    {
        return $this->modulation;
    }

    /**
     * Sets a new modulation
     *
     * A Composite containing details of a harmony modulation.
     *
     * @param \DDEX\MEAD\MEAD_100\HarmonyModulationType[] $modulation
     * @return self
     */
    public function setModulation(array $modulation = null)
    {
        $this->modulation = $modulation;
        return $this;
    }
}


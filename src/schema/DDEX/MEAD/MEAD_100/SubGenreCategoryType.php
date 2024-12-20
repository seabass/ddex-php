<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing SubGenreCategoryType
 *
 * A Composite containing details of a sub-genre within the classical genre.
 * XSD Type: SubGenreCategory
 */
class SubGenreCategoryType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The text of the sub-genre.
     *
     * @var \DDEX\MEAD\MEAD_100\SubGenreCategoryValueType[] $value
     */
    private $value = [
        
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
     * Adds as value
     *
     * The text of the sub-genre.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\SubGenreCategoryValueType $value
     */
    public function addToValue(\DDEX\MEAD\MEAD_100\SubGenreCategoryValueType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The text of the sub-genre.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The text of the sub-genre.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The text of the sub-genre.
     *
     * @return \DDEX\MEAD\MEAD_100\SubGenreCategoryValueType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The text of the sub-genre.
     *
     * @param \DDEX\MEAD\MEAD_100\SubGenreCategoryValueType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }
}


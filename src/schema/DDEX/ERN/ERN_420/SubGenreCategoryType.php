<?php

namespace DDEX\ERN\ERN_420;

/**
 * Class representing SubGenreCategoryType
 *
 * A Composite containing details of a sub-genre within the classical genre.
 * XSD Type: SubGenreCategory
 */
class SubGenreCategoryType
{
    /**
     * The text of the sub-genre.
     *
     * @var \DDEX\ERN\ERN_420\SubGenreCategoryValueType[] $value
     */
    private $value = [
        
    ];

    /**
     * Adds as value
     *
     * The text of the sub-genre.
     *
     * @return self
     * @param \DDEX\ERN\ERN_420\SubGenreCategoryValueType $value
     */
    public function addToValue(\DDEX\ERN\ERN_420\SubGenreCategoryValueType $value)
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
     * @return \DDEX\ERN\ERN_420\SubGenreCategoryValueType[]
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
     * @param \DDEX\ERN\ERN_420\SubGenreCategoryValueType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }
}


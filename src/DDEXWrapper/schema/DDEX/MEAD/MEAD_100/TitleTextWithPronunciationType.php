<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing TitleTextWithPronunciationType
 *
 * A Composite containing details of a Title and its pronunciation.
 * Explanatory Note: This Composite is named TitleTextWithPronunciation to disambiguate it from the basic Title Composite.
 * XSD Type: TitleTextWithPronunciation
 */
class TitleTextWithPronunciationType
{
    /**
     * The Title string.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\MEAD\MEAD_100\PronunciationType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as title
     *
     * The Title string.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The Title string.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\PronunciationType $pronunciation
     */
    public function addToPronunciation(\DDEX\MEAD\MEAD_100\PronunciationType $pronunciation)
    {
        $this->pronunciation[] = $pronunciation;
        return $this;
    }

    /**
     * isset pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPronunciation($index)
    {
        return isset($this->pronunciation[$index]);
    }

    /**
     * unset pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPronunciation($index)
    {
        unset($this->pronunciation[$index]);
    }

    /**
     * Gets as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return \DDEX\MEAD\MEAD_100\PronunciationType[]
     */
    public function getPronunciation()
    {
        return $this->pronunciation;
    }

    /**
     * Sets a new pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param \DDEX\MEAD\MEAD_100\PronunciationType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


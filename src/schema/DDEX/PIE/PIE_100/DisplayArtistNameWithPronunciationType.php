<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing DisplayArtistNameWithPronunciationType
 *
 * A Composite containing details of a DisplayArtistName.
 * Explanatory Note: This Composite is named DisplayArtistNameWithPronunciation to disambiguate it from the basic DisplayArtistName Composite.
 * XSD Type: DisplayArtistNameWithPronunciation
 */
class DisplayArtistNameWithPronunciationType
{
    /**
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var \DDEX\PIE\PIE_100\DisplayArtistNameWithDefaultType $name
     */
    private $name = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\PIE\PIE_100\PronunciationType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as name
     *
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return \DDEX\PIE\PIE_100\DisplayArtistNameWithDefaultType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameWithDefaultType $name
     * @return self
     */
    public function setName(\DDEX\PIE\PIE_100\DisplayArtistNameWithDefaultType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PronunciationType $pronunciation
     */
    public function addToPronunciation(\DDEX\PIE\PIE_100\PronunciationType $pronunciation)
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
     * @return \DDEX\PIE\PIE_100\PronunciationType[]
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
     * @param \DDEX\PIE\PIE_100\PronunciationType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing NameWithPronunciationType
 *
 * A Composite containing details of a Name and its pronunciation.
 * Explanatory Note: This Composite is named NameWithPronunciation to disambiguate it from the basic Name Composite.
 * XSD Type: NameWithPronunciation
 */
class NameWithPronunciationType
{
    /**
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\PIE\PIE_100\PronunciationForPartyType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as name
     *
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return string
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
     * @param string $name
     * @return self
     */
    public function setName($name)
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
     * @param \DDEX\PIE\PIE_100\PronunciationForPartyType $pronunciation
     */
    public function addToPronunciation(\DDEX\PIE\PIE_100\PronunciationForPartyType $pronunciation)
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
     * @return \DDEX\PIE\PIE_100\PronunciationForPartyType[]
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
     * @param \DDEX\PIE\PIE_100\PronunciationForPartyType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


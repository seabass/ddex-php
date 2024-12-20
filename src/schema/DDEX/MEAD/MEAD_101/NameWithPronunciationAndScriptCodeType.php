<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing NameWithPronunciationAndScriptCodeType
 *
 * A Composite containing details of a Name and its pronunciation.
 * Explanatory Note: This Composite is named NameWithPronunciationAndScriptCode to disambiguate it from the basic Name Composite.
 * XSD Type: NameWithPronunciationAndScriptCode
 */
class NameWithPronunciationAndScriptCodeType
{
    /**
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var \DDEX\MEAD\MEAD_101\NameType $name
     */
    private $name = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\MEAD\MEAD_101\PronunciationType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as name
     *
     * The Name string.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return \DDEX\MEAD\MEAD_101\NameType
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
     * @param \DDEX\MEAD\MEAD_101\NameType $name
     * @return self
     */
    public function setName(\DDEX\MEAD\MEAD_101\NameType $name)
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
     * @param \DDEX\MEAD\MEAD_101\PronunciationType $pronunciation
     */
    public function addToPronunciation(\DDEX\MEAD\MEAD_101\PronunciationType $pronunciation)
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
     * @return \DDEX\MEAD\MEAD_101\PronunciationType[]
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
     * @param \DDEX\MEAD\MEAD_101\PronunciationType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


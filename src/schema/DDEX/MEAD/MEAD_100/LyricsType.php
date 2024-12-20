<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing LyricsType
 *
 * A Composite containing details of Lyrics.
 * XSD Type: Lyrics
 */
class LyricsType
{
    /**
     * A number indicating the order of the Lyrics in a group of Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The Type of the Lyrics.
     *
     * @var string $lyricsType
     */
    private $lyricsType = null;

    /**
     * The Namespace of the user defined value for LyricsType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $lyricsTypeNamespace
     */
    private $lyricsTypeNamespace = null;

    /**
     * A UserDefined value of LyricsType This is represented in an XML schema as an XML Attribute.
     *
     * @var string $lyricsTypeUserDefinedValue
     */
    private $lyricsTypeUserDefinedValue = null;

    /**
     * A Flag indicating whether the Lyrics are misquoted (=true) or not (=false).
     *
     * @var bool $isMisquoted
     */
    private $isMisquoted = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The text of the Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_100\LyricsTextType $text
     */
    private $text = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\MEAD\MEAD_100\PronunciationType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * A number indicating the order of the Lyrics in a group of Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * A number indicating the order of the Lyrics in a group of Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as lyricsType
     *
     * The Type of the Lyrics.
     *
     * @return string
     */
    public function getLyricsType()
    {
        return $this->lyricsType;
    }

    /**
     * Sets a new lyricsType
     *
     * The Type of the Lyrics.
     *
     * @param string $lyricsType
     * @return self
     */
    public function setLyricsType($lyricsType)
    {
        $this->lyricsType = $lyricsType;
        return $this;
    }

    /**
     * Gets as lyricsTypeNamespace
     *
     * The Namespace of the user defined value for LyricsType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLyricsTypeNamespace()
    {
        return $this->lyricsTypeNamespace;
    }

    /**
     * Sets a new lyricsTypeNamespace
     *
     * The Namespace of the user defined value for LyricsType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $lyricsTypeNamespace
     * @return self
     */
    public function setLyricsTypeNamespace($lyricsTypeNamespace)
    {
        $this->lyricsTypeNamespace = $lyricsTypeNamespace;
        return $this;
    }

    /**
     * Gets as lyricsTypeUserDefinedValue
     *
     * A UserDefined value of LyricsType This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLyricsTypeUserDefinedValue()
    {
        return $this->lyricsTypeUserDefinedValue;
    }

    /**
     * Sets a new lyricsTypeUserDefinedValue
     *
     * A UserDefined value of LyricsType This is represented in an XML schema as an XML Attribute.
     *
     * @param string $lyricsTypeUserDefinedValue
     * @return self
     */
    public function setLyricsTypeUserDefinedValue($lyricsTypeUserDefinedValue)
    {
        $this->lyricsTypeUserDefinedValue = $lyricsTypeUserDefinedValue;
        return $this;
    }

    /**
     * Gets as isMisquoted
     *
     * A Flag indicating whether the Lyrics are misquoted (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsMisquoted()
    {
        return $this->isMisquoted;
    }

    /**
     * Sets a new isMisquoted
     *
     * A Flag indicating whether the Lyrics are misquoted (=true) or not (=false).
     *
     * @param bool $isMisquoted
     * @return self
     */
    public function setIsMisquoted($isMisquoted)
    {
        $this->isMisquoted = $isMisquoted;
        return $this;
    }

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
     * Gets as text
     *
     * The text of the Lyrics.
     *
     * @return \DDEX\MEAD\MEAD_100\LyricsTextType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The text of the Lyrics.
     *
     * @param \DDEX\MEAD\MEAD_100\LyricsTextType $text
     * @return self
     */
    public function setText(\DDEX\MEAD\MEAD_100\LyricsTextType $text)
    {
        $this->text = $text;
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


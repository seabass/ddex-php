<?php

namespace DDEX\MEAD\MEAD_110;

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
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The text of the Lyrics.
     *
     * @var \DDEX\MEAD\MEAD_110\LyricsTextType $text
     */
    private $text = null;

    /**
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfLyrics
     */
    private $languageAndScriptOfLyrics = [
        
    ];

    /**
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfLyricsDescription
     */
    private $territoryOfLyricsDescription = [
        
    ];

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\MEAD\MEAD_110\PronunciationType[] $pronunciation
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
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[]
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
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
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
     * @return \DDEX\MEAD\MEAD_110\LyricsTextType
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
     * @param \DDEX\MEAD\MEAD_110\LyricsTextType $text
     * @return self
     */
    public function setText(\DDEX\MEAD\MEAD_110\LyricsTextType $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as languageAndScriptOfLyrics
     *
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfLyrics
     */
    public function addToLanguageAndScriptOfLyrics($languageAndScriptOfLyrics)
    {
        $this->languageAndScriptOfLyrics[] = $languageAndScriptOfLyrics;
        return $this;
    }

    /**
     * isset languageAndScriptOfLyrics
     *
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfLyrics($index)
    {
        return isset($this->languageAndScriptOfLyrics[$index]);
    }

    /**
     * unset languageAndScriptOfLyrics
     *
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfLyrics($index)
    {
        unset($this->languageAndScriptOfLyrics[$index]);
    }

    /**
     * Gets as languageAndScriptOfLyrics
     *
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfLyrics()
    {
        return $this->languageAndScriptOfLyrics;
    }

    /**
     * Sets a new languageAndScriptOfLyrics
     *
     * A Language and script of the name of the Lyrics as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfLyrics
     * @return self
     */
    public function setLanguageAndScriptOfLyrics(array $languageAndScriptOfLyrics = null)
    {
        $this->languageAndScriptOfLyrics = $languageAndScriptOfLyrics;
        return $this;
    }

    /**
     * Adds as territoryOfLyricsDescription
     *
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfLyricsDescription
     */
    public function addToTerritoryOfLyricsDescription($territoryOfLyricsDescription)
    {
        $this->territoryOfLyricsDescription[] = $territoryOfLyricsDescription;
        return $this;
    }

    /**
     * isset territoryOfLyricsDescription
     *
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfLyricsDescription($index)
    {
        return isset($this->territoryOfLyricsDescription[$index]);
    }

    /**
     * unset territoryOfLyricsDescription
     *
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfLyricsDescription($index)
    {
        unset($this->territoryOfLyricsDescription[$index]);
    }

    /**
     * Gets as territoryOfLyricsDescription
     *
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfLyricsDescription()
    {
        return $this->territoryOfLyricsDescription;
    }

    /**
     * Sets a new territoryOfLyricsDescription
     *
     * A Territory to which the Lyrics note applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfLyricsDescription
     * @return self
     */
    public function setTerritoryOfLyricsDescription(array $territoryOfLyricsDescription = null)
    {
        $this->territoryOfLyricsDescription = $territoryOfLyricsDescription;
        return $this;
    }

    /**
     * Adds as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\PronunciationType $pronunciation
     */
    public function addToPronunciation(\DDEX\MEAD\MEAD_110\PronunciationType $pronunciation)
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
     * @return \DDEX\MEAD\MEAD_110\PronunciationType[]
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
     * @param \DDEX\MEAD\MEAD_110\PronunciationType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


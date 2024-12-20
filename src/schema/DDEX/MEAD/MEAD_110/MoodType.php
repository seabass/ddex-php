<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing MoodType
 *
 * A Composite containing details of a Mood.
 * XSD Type: Mood
 */
class MoodType
{
    /**
     * A Type of Mood according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @var string $moodType
     */
    private $moodType = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a Mood value.
     *
     * @var \DDEX\MEAD\MEAD_110\MoodValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the Mood.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfMood
     */
    private $languageAndScriptOfMood = [
        
    ];

    /**
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfMoodDescription
     */
    private $territoryOfMoodDescription = [
        
    ];

    /**
     * Gets as moodType
     *
     * A Type of Mood according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @return string
     */
    public function getMoodType()
    {
        return $this->moodType;
    }

    /**
     * Sets a new moodType
     *
     * A Type of Mood according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @param string $moodType
     * @return self
     */
    public function setMoodType($moodType)
    {
        $this->moodType = $moodType;
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
     * Gets as value
     *
     * A Composite containing details of a Mood value.
     *
     * @return \DDEX\MEAD\MEAD_110\MoodValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a Mood value.
     *
     * @param \DDEX\MEAD\MEAD_110\MoodValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\MoodValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the Mood.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType $description
     */
    public function addToDescription(\DDEX\MEAD\MEAD_110\TextWithoutTerritoryType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the Mood.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the Mood.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the Mood.
     *
     * @return \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the Mood.
     *
     * @param \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as languageAndScriptOfMood
     *
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfMood
     */
    public function addToLanguageAndScriptOfMood($languageAndScriptOfMood)
    {
        $this->languageAndScriptOfMood[] = $languageAndScriptOfMood;
        return $this;
    }

    /**
     * isset languageAndScriptOfMood
     *
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfMood($index)
    {
        return isset($this->languageAndScriptOfMood[$index]);
    }

    /**
     * unset languageAndScriptOfMood
     *
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfMood($index)
    {
        unset($this->languageAndScriptOfMood[$index]);
    }

    /**
     * Gets as languageAndScriptOfMood
     *
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfMood()
    {
        return $this->languageAndScriptOfMood;
    }

    /**
     * Sets a new languageAndScriptOfMood
     *
     * A Language and script of the Mood as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfMood
     * @return self
     */
    public function setLanguageAndScriptOfMood(array $languageAndScriptOfMood = null)
    {
        $this->languageAndScriptOfMood = $languageAndScriptOfMood;
        return $this;
    }

    /**
     * Adds as territoryOfMoodDescription
     *
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfMoodDescription
     */
    public function addToTerritoryOfMoodDescription($territoryOfMoodDescription)
    {
        $this->territoryOfMoodDescription[] = $territoryOfMoodDescription;
        return $this;
    }

    /**
     * isset territoryOfMoodDescription
     *
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfMoodDescription($index)
    {
        return isset($this->territoryOfMoodDescription[$index]);
    }

    /**
     * unset territoryOfMoodDescription
     *
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfMoodDescription($index)
    {
        unset($this->territoryOfMoodDescription[$index]);
    }

    /**
     * Gets as territoryOfMoodDescription
     *
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfMoodDescription()
    {
        return $this->territoryOfMoodDescription;
    }

    /**
     * Sets a new territoryOfMoodDescription
     *
     * A Territory to which the Mood applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfMoodDescription
     * @return self
     */
    public function setTerritoryOfMoodDescription(array $territoryOfMoodDescription = null)
    {
        $this->territoryOfMoodDescription = $territoryOfMoodDescription;
        return $this;
    }
}


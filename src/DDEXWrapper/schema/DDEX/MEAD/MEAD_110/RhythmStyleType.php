<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing RhythmStyleType
 *
 * A Composite containing details of a rhythm style.
 * XSD Type: RhythmStyle
 */
class RhythmStyleType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a rhythm style value.
     *
     * @var \DDEX\MEAD\MEAD_110\RhythmStyleValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the rhythm style.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfRhythmStyle
     */
    private $languageAndScriptOfRhythmStyle = [
        
    ];

    /**
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfRhythmStyleDescription
     */
    private $territoryOfRhythmStyleDescription = [
        
    ];

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
     * A Composite containing details of a rhythm style value.
     *
     * @return \DDEX\MEAD\MEAD_110\RhythmStyleValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a rhythm style value.
     *
     * @param \DDEX\MEAD\MEAD_110\RhythmStyleValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\RhythmStyleValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the rhythm style.
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
     * A Composite containing a Description of the rhythm style.
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
     * A Composite containing a Description of the rhythm style.
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
     * A Composite containing a Description of the rhythm style.
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
     * A Composite containing a Description of the rhythm style.
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
     * Adds as languageAndScriptOfRhythmStyle
     *
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfRhythmStyle
     */
    public function addToLanguageAndScriptOfRhythmStyle($languageAndScriptOfRhythmStyle)
    {
        $this->languageAndScriptOfRhythmStyle[] = $languageAndScriptOfRhythmStyle;
        return $this;
    }

    /**
     * isset languageAndScriptOfRhythmStyle
     *
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfRhythmStyle($index)
    {
        return isset($this->languageAndScriptOfRhythmStyle[$index]);
    }

    /**
     * unset languageAndScriptOfRhythmStyle
     *
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfRhythmStyle($index)
    {
        unset($this->languageAndScriptOfRhythmStyle[$index]);
    }

    /**
     * Gets as languageAndScriptOfRhythmStyle
     *
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfRhythmStyle()
    {
        return $this->languageAndScriptOfRhythmStyle;
    }

    /**
     * Sets a new languageAndScriptOfRhythmStyle
     *
     * A Language and script of the rhythm style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfRhythmStyle
     * @return self
     */
    public function setLanguageAndScriptOfRhythmStyle(array $languageAndScriptOfRhythmStyle = null)
    {
        $this->languageAndScriptOfRhythmStyle = $languageAndScriptOfRhythmStyle;
        return $this;
    }

    /**
     * Adds as territoryOfRhythmStyleDescription
     *
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfRhythmStyleDescription
     */
    public function addToTerritoryOfRhythmStyleDescription($territoryOfRhythmStyleDescription)
    {
        $this->territoryOfRhythmStyleDescription[] = $territoryOfRhythmStyleDescription;
        return $this;
    }

    /**
     * isset territoryOfRhythmStyleDescription
     *
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfRhythmStyleDescription($index)
    {
        return isset($this->territoryOfRhythmStyleDescription[$index]);
    }

    /**
     * unset territoryOfRhythmStyleDescription
     *
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfRhythmStyleDescription($index)
    {
        unset($this->territoryOfRhythmStyleDescription[$index]);
    }

    /**
     * Gets as territoryOfRhythmStyleDescription
     *
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfRhythmStyleDescription()
    {
        return $this->territoryOfRhythmStyleDescription;
    }

    /**
     * Sets a new territoryOfRhythmStyleDescription
     *
     * A Territory to which the rhythm style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfRhythmStyleDescription
     * @return self
     */
    public function setTerritoryOfRhythmStyleDescription(array $territoryOfRhythmStyleDescription = null)
    {
        $this->territoryOfRhythmStyleDescription = $territoryOfRhythmStyleDescription;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing DanceStyleType
 *
 * A Composite containing details of a dance style.
 * XSD Type: DanceStyle
 */
class DanceStyleType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a dance style value.
     *
     * @var \DDEX\MEAD\MEAD_110\DanceStyleValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the dance style.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfDanceStyle
     */
    private $languageAndScriptOfDanceStyle = [
        
    ];

    /**
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfDanceStyleDescription
     */
    private $territoryOfDanceStyleDescription = [
        
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
     * A Composite containing details of a dance style value.
     *
     * @return \DDEX\MEAD\MEAD_110\DanceStyleValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a dance style value.
     *
     * @param \DDEX\MEAD\MEAD_110\DanceStyleValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\DanceStyleValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the dance style.
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
     * A Composite containing a Description of the dance style.
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
     * A Composite containing a Description of the dance style.
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
     * A Composite containing a Description of the dance style.
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
     * A Composite containing a Description of the dance style.
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
     * Adds as languageAndScriptOfDanceStyle
     *
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfDanceStyle
     */
    public function addToLanguageAndScriptOfDanceStyle($languageAndScriptOfDanceStyle)
    {
        $this->languageAndScriptOfDanceStyle[] = $languageAndScriptOfDanceStyle;
        return $this;
    }

    /**
     * isset languageAndScriptOfDanceStyle
     *
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfDanceStyle($index)
    {
        return isset($this->languageAndScriptOfDanceStyle[$index]);
    }

    /**
     * unset languageAndScriptOfDanceStyle
     *
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfDanceStyle($index)
    {
        unset($this->languageAndScriptOfDanceStyle[$index]);
    }

    /**
     * Gets as languageAndScriptOfDanceStyle
     *
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfDanceStyle()
    {
        return $this->languageAndScriptOfDanceStyle;
    }

    /**
     * Sets a new languageAndScriptOfDanceStyle
     *
     * A Language and script of the dance style as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfDanceStyle
     * @return self
     */
    public function setLanguageAndScriptOfDanceStyle(array $languageAndScriptOfDanceStyle = null)
    {
        $this->languageAndScriptOfDanceStyle = $languageAndScriptOfDanceStyle;
        return $this;
    }

    /**
     * Adds as territoryOfDanceStyleDescription
     *
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfDanceStyleDescription
     */
    public function addToTerritoryOfDanceStyleDescription($territoryOfDanceStyleDescription)
    {
        $this->territoryOfDanceStyleDescription[] = $territoryOfDanceStyleDescription;
        return $this;
    }

    /**
     * isset territoryOfDanceStyleDescription
     *
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfDanceStyleDescription($index)
    {
        return isset($this->territoryOfDanceStyleDescription[$index]);
    }

    /**
     * unset territoryOfDanceStyleDescription
     *
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfDanceStyleDescription($index)
    {
        unset($this->territoryOfDanceStyleDescription[$index]);
    }

    /**
     * Gets as territoryOfDanceStyleDescription
     *
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfDanceStyleDescription()
    {
        return $this->territoryOfDanceStyleDescription;
    }

    /**
     * Sets a new territoryOfDanceStyleDescription
     *
     * A Territory to which the dance style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfDanceStyleDescription
     * @return self
     */
    public function setTerritoryOfDanceStyleDescription(array $territoryOfDanceStyleDescription = null)
    {
        $this->territoryOfDanceStyleDescription = $territoryOfDanceStyleDescription;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ThemeType
 *
 * A Composite containing details of a Theme.
 * XSD Type: Theme
 */
class ThemeType
{
    /**
     * A Type of Theme according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @var string $themeType
     */
    private $themeType = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a Theme value.
     *
     * @var \DDEX\MEAD\MEAD_110\ThemeValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the Theme.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfTheme
     */
    private $languageAndScriptOfTheme = [
        
    ];

    /**
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfThemeDescription
     */
    private $territoryOfThemeDescription = [
        
    ];

    /**
     * Gets as themeType
     *
     * A Type of Theme according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @return string
     */
    public function getThemeType()
    {
        return $this->themeType;
    }

    /**
     * Sets a new themeType
     *
     * A Type of Theme according to its scope. This is represented in an XML schema as an XML Attribute. Absence of the attribute means that it could be either Lyrics or Melody or LyricsAndMelody.
     *
     * @param string $themeType
     * @return self
     */
    public function setThemeType($themeType)
    {
        $this->themeType = $themeType;
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
     * A Composite containing details of a Theme value.
     *
     * @return \DDEX\MEAD\MEAD_110\ThemeValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a Theme value.
     *
     * @param \DDEX\MEAD\MEAD_110\ThemeValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\ThemeValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the Theme.
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
     * A Composite containing a Description of the Theme.
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
     * A Composite containing a Description of the Theme.
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
     * A Composite containing a Description of the Theme.
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
     * A Composite containing a Description of the Theme.
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
     * Adds as languageAndScriptOfTheme
     *
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfTheme
     */
    public function addToLanguageAndScriptOfTheme($languageAndScriptOfTheme)
    {
        $this->languageAndScriptOfTheme[] = $languageAndScriptOfTheme;
        return $this;
    }

    /**
     * isset languageAndScriptOfTheme
     *
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfTheme($index)
    {
        return isset($this->languageAndScriptOfTheme[$index]);
    }

    /**
     * unset languageAndScriptOfTheme
     *
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfTheme($index)
    {
        unset($this->languageAndScriptOfTheme[$index]);
    }

    /**
     * Gets as languageAndScriptOfTheme
     *
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfTheme()
    {
        return $this->languageAndScriptOfTheme;
    }

    /**
     * Sets a new languageAndScriptOfTheme
     *
     * A Language and script of the Theme as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfTheme
     * @return self
     */
    public function setLanguageAndScriptOfTheme(array $languageAndScriptOfTheme = null)
    {
        $this->languageAndScriptOfTheme = $languageAndScriptOfTheme;
        return $this;
    }

    /**
     * Adds as territoryOfThemeDescription
     *
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfThemeDescription
     */
    public function addToTerritoryOfThemeDescription($territoryOfThemeDescription)
    {
        $this->territoryOfThemeDescription[] = $territoryOfThemeDescription;
        return $this;
    }

    /**
     * isset territoryOfThemeDescription
     *
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfThemeDescription($index)
    {
        return isset($this->territoryOfThemeDescription[$index]);
    }

    /**
     * unset territoryOfThemeDescription
     *
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfThemeDescription($index)
    {
        unset($this->territoryOfThemeDescription[$index]);
    }

    /**
     * Gets as territoryOfThemeDescription
     *
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfThemeDescription()
    {
        return $this->territoryOfThemeDescription;
    }

    /**
     * Sets a new territoryOfThemeDescription
     *
     * A Territory to which the Theme applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfThemeDescription
     * @return self
     */
    public function setTerritoryOfThemeDescription(array $territoryOfThemeDescription = null)
    {
        $this->territoryOfThemeDescription = $territoryOfThemeDescription;
        return $this;
    }
}


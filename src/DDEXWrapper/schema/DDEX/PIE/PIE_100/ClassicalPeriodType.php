<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing ClassicalPeriodType
 *
 * A Composite containing details of a musical period.
 * XSD Type: ClassicalPeriod
 */
class ClassicalPeriodType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The value of the period.
     *
     * @var \DDEX\PIE\PIE_100\PeriodValueType $name
     */
    private $name = null;

    /**
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfClassicalPeriod
     */
    private $languageAndScriptOfClassicalPeriod = [
        
    ];

    /**
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfClassicalPeriodDescription
     */
    private $territoryOfClassicalPeriodDescription = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
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
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as name
     *
     * The value of the period.
     *
     * @return \DDEX\PIE\PIE_100\PeriodValueType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The value of the period.
     *
     * @param \DDEX\PIE\PIE_100\PeriodValueType $name
     * @return self
     */
    public function setName(\DDEX\PIE\PIE_100\PeriodValueType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as languageAndScriptOfClassicalPeriod
     *
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfClassicalPeriod
     */
    public function addToLanguageAndScriptOfClassicalPeriod($languageAndScriptOfClassicalPeriod)
    {
        $this->languageAndScriptOfClassicalPeriod[] = $languageAndScriptOfClassicalPeriod;
        return $this;
    }

    /**
     * isset languageAndScriptOfClassicalPeriod
     *
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfClassicalPeriod($index)
    {
        return isset($this->languageAndScriptOfClassicalPeriod[$index]);
    }

    /**
     * unset languageAndScriptOfClassicalPeriod
     *
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfClassicalPeriod($index)
    {
        unset($this->languageAndScriptOfClassicalPeriod[$index]);
    }

    /**
     * Gets as languageAndScriptOfClassicalPeriod
     *
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfClassicalPeriod()
    {
        return $this->languageAndScriptOfClassicalPeriod;
    }

    /**
     * Sets a new languageAndScriptOfClassicalPeriod
     *
     * A Language and script of the name of the classical musical period as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfClassicalPeriod
     * @return self
     */
    public function setLanguageAndScriptOfClassicalPeriod(array $languageAndScriptOfClassicalPeriod = null)
    {
        $this->languageAndScriptOfClassicalPeriod = $languageAndScriptOfClassicalPeriod;
        return $this;
    }

    /**
     * Adds as territoryOfClassicalPeriodDescription
     *
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfClassicalPeriodDescription
     */
    public function addToTerritoryOfClassicalPeriodDescription($territoryOfClassicalPeriodDescription)
    {
        $this->territoryOfClassicalPeriodDescription[] = $territoryOfClassicalPeriodDescription;
        return $this;
    }

    /**
     * isset territoryOfClassicalPeriodDescription
     *
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfClassicalPeriodDescription($index)
    {
        return isset($this->territoryOfClassicalPeriodDescription[$index]);
    }

    /**
     * unset territoryOfClassicalPeriodDescription
     *
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfClassicalPeriodDescription($index)
    {
        unset($this->territoryOfClassicalPeriodDescription[$index]);
    }

    /**
     * Gets as territoryOfClassicalPeriodDescription
     *
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfClassicalPeriodDescription()
    {
        return $this->territoryOfClassicalPeriodDescription;
    }

    /**
     * Sets a new territoryOfClassicalPeriodDescription
     *
     * A Territory to which the classical musical period applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfClassicalPeriodDescription
     * @return self
     */
    public function setTerritoryOfClassicalPeriodDescription(array $territoryOfClassicalPeriodDescription = null)
    {
        $this->territoryOfClassicalPeriodDescription = $territoryOfClassicalPeriodDescription;
        return $this;
    }
}


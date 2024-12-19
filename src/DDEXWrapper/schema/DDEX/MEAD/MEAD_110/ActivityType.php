<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ActivityType
 *
 * A Composite containing details of an activity.
 * XSD Type: Activity
 */
class ActivityType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of an activity value.
     *
     * @var \DDEX\MEAD\MEAD_110\ActivityValueType $value
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
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfActivity
     */
    private $languageAndScriptOfActivity = [
        
    ];

    /**
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfActivityDescription
     */
    private $territoryOfActivityDescription = [
        
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
     * A Composite containing details of an activity value.
     *
     * @return \DDEX\MEAD\MEAD_110\ActivityValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of an activity value.
     *
     * @param \DDEX\MEAD\MEAD_110\ActivityValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\ActivityValueType $value)
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
     * Adds as languageAndScriptOfActivity
     *
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfActivity
     */
    public function addToLanguageAndScriptOfActivity($languageAndScriptOfActivity)
    {
        $this->languageAndScriptOfActivity[] = $languageAndScriptOfActivity;
        return $this;
    }

    /**
     * isset languageAndScriptOfActivity
     *
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfActivity($index)
    {
        return isset($this->languageAndScriptOfActivity[$index]);
    }

    /**
     * unset languageAndScriptOfActivity
     *
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfActivity($index)
    {
        unset($this->languageAndScriptOfActivity[$index]);
    }

    /**
     * Gets as languageAndScriptOfActivity
     *
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfActivity()
    {
        return $this->languageAndScriptOfActivity;
    }

    /**
     * Sets a new languageAndScriptOfActivity
     *
     * A Language and script of the activity as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfActivity
     * @return self
     */
    public function setLanguageAndScriptOfActivity(array $languageAndScriptOfActivity = null)
    {
        $this->languageAndScriptOfActivity = $languageAndScriptOfActivity;
        return $this;
    }

    /**
     * Adds as territoryOfActivityDescription
     *
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfActivityDescription
     */
    public function addToTerritoryOfActivityDescription($territoryOfActivityDescription)
    {
        $this->territoryOfActivityDescription[] = $territoryOfActivityDescription;
        return $this;
    }

    /**
     * isset territoryOfActivityDescription
     *
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfActivityDescription($index)
    {
        return isset($this->territoryOfActivityDescription[$index]);
    }

    /**
     * unset territoryOfActivityDescription
     *
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfActivityDescription($index)
    {
        unset($this->territoryOfActivityDescription[$index]);
    }

    /**
     * Gets as territoryOfActivityDescription
     *
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfActivityDescription()
    {
        return $this->territoryOfActivityDescription;
    }

    /**
     * Sets a new territoryOfActivityDescription
     *
     * A Territory to which the activity applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfActivityDescription
     * @return self
     */
    public function setTerritoryOfActivityDescription(array $territoryOfActivityDescription = null)
    {
        $this->territoryOfActivityDescription = $territoryOfActivityDescription;
        return $this;
    }
}


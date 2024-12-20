<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing GenreCategoryType
 *
 * A Composite containing details of a Genre Category.
 * XSD Type: GenreCategory
 */
class GenreCategoryType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfGenreCategoryDescription
     */
    private $territoryOfGenreCategoryDescription = [
        
    ];

    /**
     * A Composite containing details of a Genre Category value.
     *
     * @var \DDEX\MEAD\MEAD_110\GenreCategoryValueType $value
     */
    private $value = null;

    /**
     * A Composite containing a Description of the Genre Category.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     */
    private $description = [
        
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
     * Adds as territoryOfGenreCategoryDescription
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfGenreCategoryDescription
     */
    public function addToTerritoryOfGenreCategoryDescription($territoryOfGenreCategoryDescription)
    {
        $this->territoryOfGenreCategoryDescription[] = $territoryOfGenreCategoryDescription;
        return $this;
    }

    /**
     * isset territoryOfGenreCategoryDescription
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfGenreCategoryDescription($index)
    {
        return isset($this->territoryOfGenreCategoryDescription[$index]);
    }

    /**
     * unset territoryOfGenreCategoryDescription
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfGenreCategoryDescription($index)
    {
        unset($this->territoryOfGenreCategoryDescription[$index]);
    }

    /**
     * Gets as territoryOfGenreCategoryDescription
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfGenreCategoryDescription()
    {
        return $this->territoryOfGenreCategoryDescription;
    }

    /**
     * Sets a new territoryOfGenreCategoryDescription
     *
     * A Territory to which the Genre Category applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfGenreCategoryDescription
     * @return self
     */
    public function setTerritoryOfGenreCategoryDescription(array $territoryOfGenreCategoryDescription = null)
    {
        $this->territoryOfGenreCategoryDescription = $territoryOfGenreCategoryDescription;
        return $this;
    }

    /**
     * Gets as value
     *
     * A Composite containing details of a Genre Category value.
     *
     * @return \DDEX\MEAD\MEAD_110\GenreCategoryValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of a Genre Category value.
     *
     * @param \DDEX\MEAD\MEAD_110\GenreCategoryValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\GenreCategoryValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the Genre Category.
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
     * A Composite containing a Description of the Genre Category.
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
     * A Composite containing a Description of the Genre Category.
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
     * A Composite containing a Description of the Genre Category.
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
     * A Composite containing a Description of the Genre Category.
     *
     * @param \DDEX\MEAD\MEAD_110\TextWithoutTerritoryType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


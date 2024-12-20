<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing ArtistTypeType
 *
 * A Composite containing details of an artist type.
 * XSD Type: ArtistType
 */
class ArtistTypeType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of an artist type value.
     *
     * @var \DDEX\PIE\PIE_100\ArtistTypeValueType $value
     */
    private $value = null;

    /**
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfArtistTypeDescription
     */
    private $territoryOfArtistTypeDescription = [
        
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
     * Gets as value
     *
     * A Composite containing details of an artist type value.
     *
     * @return \DDEX\PIE\PIE_100\ArtistTypeValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of an artist type value.
     *
     * @param \DDEX\PIE\PIE_100\ArtistTypeValueType $value
     * @return self
     */
    public function setValue(\DDEX\PIE\PIE_100\ArtistTypeValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as territoryOfArtistTypeDescription
     *
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfArtistTypeDescription
     */
    public function addToTerritoryOfArtistTypeDescription($territoryOfArtistTypeDescription)
    {
        $this->territoryOfArtistTypeDescription[] = $territoryOfArtistTypeDescription;
        return $this;
    }

    /**
     * isset territoryOfArtistTypeDescription
     *
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfArtistTypeDescription($index)
    {
        return isset($this->territoryOfArtistTypeDescription[$index]);
    }

    /**
     * unset territoryOfArtistTypeDescription
     *
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfArtistTypeDescription($index)
    {
        unset($this->territoryOfArtistTypeDescription[$index]);
    }

    /**
     * Gets as territoryOfArtistTypeDescription
     *
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfArtistTypeDescription()
    {
        return $this->territoryOfArtistTypeDescription;
    }

    /**
     * Sets a new territoryOfArtistTypeDescription
     *
     * A Territory to which the artist type applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfArtistTypeDescription
     * @return self
     */
    public function setTerritoryOfArtistTypeDescription(array $territoryOfArtistTypeDescription = null)
    {
        $this->territoryOfArtistTypeDescription = $territoryOfArtistTypeDescription;
        return $this;
    }
}


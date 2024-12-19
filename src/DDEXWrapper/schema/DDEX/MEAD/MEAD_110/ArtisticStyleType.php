<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ArtisticStyleType
 *
 * A Composite containing details of an artistic style.
 * XSD Type: ArtisticStyle
 */
class ArtisticStyleType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of an artistic style value.
     *
     * @var \DDEX\MEAD\MEAD_110\ArtistTypeValueType $value
     */
    private $value = null;

    /**
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfArtisticStyleDescription
     */
    private $territoryOfArtisticStyleDescription = [
        
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
     * A Composite containing details of an artistic style value.
     *
     * @return \DDEX\MEAD\MEAD_110\ArtistTypeValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of an artistic style value.
     *
     * @param \DDEX\MEAD\MEAD_110\ArtistTypeValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\ArtistTypeValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as territoryOfArtisticStyleDescription
     *
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfArtisticStyleDescription
     */
    public function addToTerritoryOfArtisticStyleDescription($territoryOfArtisticStyleDescription)
    {
        $this->territoryOfArtisticStyleDescription[] = $territoryOfArtisticStyleDescription;
        return $this;
    }

    /**
     * isset territoryOfArtisticStyleDescription
     *
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfArtisticStyleDescription($index)
    {
        return isset($this->territoryOfArtisticStyleDescription[$index]);
    }

    /**
     * unset territoryOfArtisticStyleDescription
     *
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfArtisticStyleDescription($index)
    {
        unset($this->territoryOfArtisticStyleDescription[$index]);
    }

    /**
     * Gets as territoryOfArtisticStyleDescription
     *
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfArtisticStyleDescription()
    {
        return $this->territoryOfArtisticStyleDescription;
    }

    /**
     * Sets a new territoryOfArtisticStyleDescription
     *
     * A Territory to which the artistic style applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfArtisticStyleDescription
     * @return self
     */
    public function setTerritoryOfArtisticStyleDescription(array $territoryOfArtisticStyleDescription = null)
    {
        $this->territoryOfArtisticStyleDescription = $territoryOfArtisticStyleDescription;
        return $this;
    }
}


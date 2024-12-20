<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing EpochType
 *
 * A Composite containing details of an epoch in a artist's career.
 * XSD Type: Epoch
 */
class EpochType
{
    /**
     * A Territory to which the epoch applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of an epoch name.
     *
     * @var \DDEX\MEAD\MEAD_101\NameType[] $value
     */
    private $value = [
        
    ];

    /**
     * A Composite containing details of a related Artist.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $relatedArtist
     */
    private $relatedArtist = [
        
    ];

    /**
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @var \DDEX\MEAD\MEAD_101\RelatedCreationType[] $relatedCreation
     */
    private $relatedCreation = [
        
    ];

    /**
     * The Date that marks the beginning of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_101\DateType $startDate
     */
    private $startDate = null;

    /**
     * The Date that marks the end of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_101\DateType $endDate
     */
    private $endDate = null;

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the epoch applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the epoch applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
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
     * @return string[]
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
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Adds as value
     *
     * A Composite containing details of an epoch name.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\NameType $value
     */
    public function addToValue(\DDEX\MEAD\MEAD_101\NameType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * A Composite containing details of an epoch name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * A Composite containing details of an epoch name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * A Composite containing details of an epoch name.
     *
     * @return \DDEX\MEAD\MEAD_101\NameType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A Composite containing details of an epoch name.
     *
     * @param \DDEX\MEAD\MEAD_101\NameType[] $value
     * @return self
     */
    public function setValue(array $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as relatedArtist
     *
     * A Composite containing details of a related Artist.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $relatedArtist
     */
    public function addToRelatedArtist(\DDEX\MEAD\MEAD_101\PartyWithNamesType $relatedArtist)
    {
        $this->relatedArtist[] = $relatedArtist;
        return $this;
    }

    /**
     * isset relatedArtist
     *
     * A Composite containing details of a related Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedArtist($index)
    {
        return isset($this->relatedArtist[$index]);
    }

    /**
     * unset relatedArtist
     *
     * A Composite containing details of a related Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedArtist($index)
    {
        unset($this->relatedArtist[$index]);
    }

    /**
     * Gets as relatedArtist
     *
     * A Composite containing details of a related Artist.
     *
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType[]
     */
    public function getRelatedArtist()
    {
        return $this->relatedArtist;
    }

    /**
     * Sets a new relatedArtist
     *
     * A Composite containing details of a related Artist.
     *
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $relatedArtist
     * @return self
     */
    public function setRelatedArtist(array $relatedArtist = null)
    {
        $this->relatedArtist = $relatedArtist;
        return $this;
    }

    /**
     * Adds as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\RelatedCreationType $relatedCreation
     */
    public function addToRelatedCreation(\DDEX\MEAD\MEAD_101\RelatedCreationType $relatedCreation)
    {
        $this->relatedCreation[] = $relatedCreation;
        return $this;
    }

    /**
     * isset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedCreation($index)
    {
        return isset($this->relatedCreation[$index]);
    }

    /**
     * unset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedCreation($index)
    {
        unset($this->relatedCreation[$index]);
    }

    /**
     * Gets as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @return \DDEX\MEAD\MEAD_101\RelatedCreationType[]
     */
    public function getRelatedCreation()
    {
        return $this->relatedCreation;
    }

    /**
     * Sets a new relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) that is part of the epoch.
     *
     * @param \DDEX\MEAD\MEAD_101\RelatedCreationType[] $relatedCreation
     * @return self
     */
    public function setRelatedCreation(array $relatedCreation = null)
    {
        $this->relatedCreation = $relatedCreation;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * The Date that marks the beginning of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_101\DateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date that marks the beginning of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_101\DateType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\MEAD\MEAD_101\DateType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date that marks the end of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_101\DateType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date that marks the end of the epoch. It can be represented as a calendar Year, Month or Day (in ISO 8601:2004 format: YYYY, YYYY-MM or YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_101\DateType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\MEAD\MEAD_101\DateType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }
}


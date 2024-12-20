<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing SimilarPartyType
 *
 * A Composite containing details of a similar Party.
 * XSD Type: SimilarParty
 */
class SimilarPartyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the Party.
     *
     * @var \DDEX\MEAD\MEAD_100\PartyWithNamesType $party
     */
    private $party = null;

    /**
     * A Composite containing a Description of the similarity.
     *
     * @var \DDEX\MEAD\MEAD_100\AnnotationType[] $description
     */
    private $description = [
        
    ];

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
     * Gets as party
     *
     * A Composite containing details of the Party.
     *
     * @return \DDEX\MEAD\MEAD_100\PartyWithNamesType
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of the Party.
     *
     * @param \DDEX\MEAD\MEAD_100\PartyWithNamesType $party
     * @return self
     */
    public function setParty(\DDEX\MEAD\MEAD_100\PartyWithNamesType $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the similarity.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\AnnotationType $description
     */
    public function addToDescription(\DDEX\MEAD\MEAD_100\AnnotationType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the similarity.
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
     * A Composite containing a Description of the similarity.
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
     * A Composite containing a Description of the similarity.
     *
     * @return \DDEX\MEAD\MEAD_100\AnnotationType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the similarity.
     *
     * @param \DDEX\MEAD\MEAD_100\AnnotationType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}


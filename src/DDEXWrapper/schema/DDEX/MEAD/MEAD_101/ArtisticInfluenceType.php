<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing ArtisticInfluenceType
 *
 * A Composite containing details of a related Artist that was influenced or that was an influencer.
 * XSD Type: ArtisticInfluence
 */
class ArtisticInfluenceType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a Party.
     *
     * @var \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $party
     */
    private $party = [
        
    ];

    /**
     * A Composite containing details of a Work.
     *
     * @var \DDEX\MEAD\MEAD_101\WorkType[] $work
     */
    private $work = [
        
    ];

    /**
     * A Composite containing details of a Resource.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceType[] $resource
     */
    private $resource = [
        
    ];

    /**
     * A Composite containing details of a Release.
     *
     * @var \DDEX\MEAD\MEAD_101\ReleaseType[] $release
     */
    private $release = [
        
    ];

    /**
     * A Composite containing Description of the relationship.
     *
     * @var \DDEX\MEAD\MEAD_101\TextWithFormatType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Flag indicating whether the related Party is influenced by the current Party (=true) or not (=false).
     *
     * @var bool $isInfluenced
     */
    private $isInfluenced = null;

    /**
     * A Flag indicating whether the related Party has influenced the current Party (=true) or not (=false).
     *
     * @var bool $isInfluencer
     */
    private $isInfluencer = null;

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
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType $party
     */
    public function addToParty(\DDEX\MEAD\MEAD_101\PartyWithNamesType $party)
    {
        $this->party[] = $party;
        return $this;
    }

    /**
     * isset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParty($index)
    {
        return isset($this->party[$index]);
    }

    /**
     * unset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParty($index)
    {
        unset($this->party[$index]);
    }

    /**
     * Gets as party
     *
     * A Composite containing details of a Party.
     *
     * @return \DDEX\MEAD\MEAD_101\PartyWithNamesType[]
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of a Party.
     *
     * @param \DDEX\MEAD\MEAD_101\PartyWithNamesType[] $party
     * @return self
     */
    public function setParty(array $party = null)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Adds as work
     *
     * A Composite containing details of a Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\WorkType $work
     */
    public function addToWork(\DDEX\MEAD\MEAD_101\WorkType $work)
    {
        $this->work[] = $work;
        return $this;
    }

    /**
     * isset work
     *
     * A Composite containing details of a Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWork($index)
    {
        return isset($this->work[$index]);
    }

    /**
     * unset work
     *
     * A Composite containing details of a Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWork($index)
    {
        unset($this->work[$index]);
    }

    /**
     * Gets as work
     *
     * A Composite containing details of a Work.
     *
     * @return \DDEX\MEAD\MEAD_101\WorkType[]
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Sets a new work
     *
     * A Composite containing details of a Work.
     *
     * @param \DDEX\MEAD\MEAD_101\WorkType[] $work
     * @return self
     */
    public function setWork(array $work = null)
    {
        $this->work = $work;
        return $this;
    }

    /**
     * Adds as resource
     *
     * A Composite containing details of a Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ResourceType $resource
     */
    public function addToResource(\DDEX\MEAD\MEAD_101\ResourceType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * A Composite containing details of a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * A Composite containing details of a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * A Composite containing details of a Resource.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * A Composite containing details of a Resource.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceType[] $resource
     * @return self
     */
    public function setResource(array $resource = null)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of a Release.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ReleaseType $release
     */
    public function addToRelease(\DDEX\MEAD\MEAD_101\ReleaseType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A Composite containing details of a Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelease($index)
    {
        return isset($this->release[$index]);
    }

    /**
     * unset release
     *
     * A Composite containing details of a Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelease($index)
    {
        unset($this->release[$index]);
    }

    /**
     * Gets as release
     *
     * A Composite containing details of a Release.
     *
     * @return \DDEX\MEAD\MEAD_101\ReleaseType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a Release.
     *
     * @param \DDEX\MEAD\MEAD_101\ReleaseType[] $release
     * @return self
     */
    public function setRelease(array $release = null)
    {
        $this->release = $release;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing Description of the relationship.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType $description
     */
    public function addToDescription(\DDEX\MEAD\MEAD_101\TextWithFormatType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing Description of the relationship.
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
     * A Composite containing Description of the relationship.
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
     * A Composite containing Description of the relationship.
     *
     * @return \DDEX\MEAD\MEAD_101\TextWithFormatType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing Description of the relationship.
     *
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as isInfluenced
     *
     * A Flag indicating whether the related Party is influenced by the current Party (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsInfluenced()
    {
        return $this->isInfluenced;
    }

    /**
     * Sets a new isInfluenced
     *
     * A Flag indicating whether the related Party is influenced by the current Party (=true) or not (=false).
     *
     * @param bool $isInfluenced
     * @return self
     */
    public function setIsInfluenced($isInfluenced)
    {
        $this->isInfluenced = $isInfluenced;
        return $this;
    }

    /**
     * Gets as isInfluencer
     *
     * A Flag indicating whether the related Party has influenced the current Party (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsInfluencer()
    {
        return $this->isInfluencer;
    }

    /**
     * Sets a new isInfluencer
     *
     * A Flag indicating whether the related Party has influenced the current Party (=true) or not (=false).
     *
     * @param bool $isInfluencer
     * @return self
     */
    public function setIsInfluencer($isInfluencer)
    {
        $this->isInfluencer = $isInfluencer;
        return $this;
    }
}


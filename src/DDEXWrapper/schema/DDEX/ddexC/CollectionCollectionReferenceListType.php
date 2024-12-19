<?php

namespace DDEX\ddexC;

/**
 * Class representing CollectionCollectionReferenceListType
 *
 * A ddex:Composite containing a list of ddex:CollectionCollectionReferences.
 * XSD Type: CollectionCollectionReferenceList
 */
class CollectionCollectionReferenceListType
{
    /**
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @var \DDEX\ddexC\CollectionCollectionReferenceType[] $collectionCollectionReference
     */
    private $collectionCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @return int
     */
    public function getNumberOfCollections()
    {
        return $this->numberOfCollections;
    }

    /**
     * Sets a new numberOfCollections
     *
     * The number of referenced ddexC:Collections (typically Chapters).
     *
     * @param int $numberOfCollections
     * @return self
     */
    public function setNumberOfCollections($numberOfCollections)
    {
        $this->numberOfCollections = $numberOfCollections;
        return $this;
    }

    /**
     * Adds as collectionCollectionReference
     *
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return self
     * @param \DDEX\ddexC\CollectionCollectionReferenceType $collectionCollectionReference
     */
    public function addToCollectionCollectionReference(\DDEX\ddexC\CollectionCollectionReferenceType $collectionCollectionReference)
    {
        $this->collectionCollectionReference[] = $collectionCollectionReference;
        return $this;
    }

    /**
     * isset collectionCollectionReference
     *
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionCollectionReference($index)
    {
        return isset($this->collectionCollectionReference[$index]);
    }

    /**
     * unset collectionCollectionReference
     *
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionCollectionReference($index)
    {
        unset($this->collectionCollectionReference[$index]);
    }

    /**
     * Gets as collectionCollectionReference
     *
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return \DDEX\ddexC\CollectionCollectionReferenceType[]
     */
    public function getCollectionCollectionReference()
    {
        return $this->collectionCollectionReference;
    }

    /**
     * Sets a new collectionCollectionReference
     *
     * A ddex:Composite containing a ddex:CollectionCollectionReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param \DDEX\ddexC\CollectionCollectionReferenceType[] $collectionCollectionReference
     * @return self
     */
    public function setCollectionCollectionReference(array $collectionCollectionReference)
    {
        $this->collectionCollectionReference = $collectionCollectionReference;
        return $this;
    }
}


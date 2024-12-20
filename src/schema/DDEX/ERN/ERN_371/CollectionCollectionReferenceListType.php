<?php

namespace DDEX\ERN\ERN_371;

/**
 * Class representing CollectionCollectionReferenceListType
 *
 * A Composite containing a list of
 *  CollectionCollectionReferences.
 * XSD Type: CollectionCollectionReferenceList
 */
class CollectionCollectionReferenceListType
{
    /**
     * The number of referenced Collections
     *  (typically Chapters).
     *
     * @var int $numberOfCollections
     */
    private $numberOfCollections = null;

    /**
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
     *
     * @var \DDEX\ERN\ERN_371\CollectionCollectionReferenceType[] $collectionCollectionReference
     */
    private $collectionCollectionReference = [
        
    ];

    /**
     * Gets as numberOfCollections
     *
     * The number of referenced Collections
     *  (typically Chapters).
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
     * The number of referenced Collections
     *  (typically Chapters).
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
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
     *
     * @return self
     * @param \DDEX\ERN\ERN_371\CollectionCollectionReferenceType $collectionCollectionReference
     */
    public function addToCollectionCollectionReference(\DDEX\ERN\ERN_371\CollectionCollectionReferenceType $collectionCollectionReference)
    {
        $this->collectionCollectionReference[] = $collectionCollectionReference;
        return $this;
    }

    /**
     * isset collectionCollectionReference
     *
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
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
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
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
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
     *
     * @return \DDEX\ERN\ERN_371\CollectionCollectionReferenceType[]
     */
    public function getCollectionCollectionReference()
    {
        return $this->collectionCollectionReference;
    }

    /**
     * Sets a new collectionCollectionReference
     *
     * A Composite containing a
     *  CollectionCollectionReference for a Collection (specific to this
     *  Message).
     *
     * @param \DDEX\ERN\ERN_371\CollectionCollectionReferenceType[] $collectionCollectionReference
     * @return self
     */
    public function setCollectionCollectionReference(array $collectionCollectionReference)
    {
        $this->collectionCollectionReference = $collectionCollectionReference;
        return $this;
    }
}


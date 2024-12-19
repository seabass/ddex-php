<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing CollectionWorkReferenceListType
 *
 * A Composite containing a list of CollectionWorkReferences.
 * XSD Type: CollectionWorkReferenceList
 */
class CollectionWorkReferenceListType
{
    /**
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @var \DDEX\DSR\DSR_43D1\CollectionWorkReferenceType[] $collectionWorkReference
     */
    private $collectionWorkReference = [
        
    ];

    /**
     * Adds as collectionWorkReference
     *
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\CollectionWorkReferenceType $collectionWorkReference
     */
    public function addToCollectionWorkReference(\DDEX\DSR\DSR_43D1\CollectionWorkReferenceType $collectionWorkReference)
    {
        $this->collectionWorkReference[] = $collectionWorkReference;
        return $this;
    }

    /**
     * isset collectionWorkReference
     *
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionWorkReference($index)
    {
        return isset($this->collectionWorkReference[$index]);
    }

    /**
     * unset collectionWorkReference
     *
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionWorkReference($index)
    {
        unset($this->collectionWorkReference[$index]);
    }

    /**
     * Gets as collectionWorkReference
     *
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @return \DDEX\DSR\DSR_43D1\CollectionWorkReferenceType[]
     */
    public function getCollectionWorkReference()
    {
        return $this->collectionWorkReference;
    }

    /**
     * Sets a new collectionWorkReference
     *
     * A Composite containing a CollectionWorkReference for a Collection (specific to this Message).
     *
     * @param \DDEX\DSR\DSR_43D1\CollectionWorkReferenceType[] $collectionWorkReference
     * @return self
     */
    public function setCollectionWorkReference(array $collectionWorkReference)
    {
        $this->collectionWorkReference = $collectionWorkReference;
        return $this;
    }
}


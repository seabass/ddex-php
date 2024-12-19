<?php

namespace DDEX\ERN\ERN_341;

/**
 * Class representing CollectionResourceReferenceListType
 *
 * A ddex:Composite containing a list of ddex:CollectionResourceReferences.
 * XSD Type: CollectionResourceReferenceList
 */
class CollectionResourceReferenceListType
{
    /**
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @var \DDEX\ERN\ERN_341\CollectionResourceReferenceType[] $collectionResourceReference
     */
    private $collectionResourceReference = [
        
    ];

    /**
     * Adds as collectionResourceReference
     *
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return self
     * @param \DDEX\ERN\ERN_341\CollectionResourceReferenceType $collectionResourceReference
     */
    public function addToCollectionResourceReference(\DDEX\ERN\ERN_341\CollectionResourceReferenceType $collectionResourceReference)
    {
        $this->collectionResourceReference[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReference
     *
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionResourceReference($index)
    {
        return isset($this->collectionResourceReference[$index]);
    }

    /**
     * unset collectionResourceReference
     *
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionResourceReference($index)
    {
        unset($this->collectionResourceReference[$index]);
    }

    /**
     * Gets as collectionResourceReference
     *
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @return \DDEX\ERN\ERN_341\CollectionResourceReferenceType[]
     */
    public function getCollectionResourceReference()
    {
        return $this->collectionResourceReference;
    }

    /**
     * Sets a new collectionResourceReference
     *
     * A ddex:Composite containing a ddex:CollectionResourceReference for a ddex:Collection (specific to this ddex:Message).
     *
     * @param \DDEX\ERN\ERN_341\CollectionResourceReferenceType[] $collectionResourceReference
     * @return self
     */
    public function setCollectionResourceReference(array $collectionResourceReference)
    {
        $this->collectionResourceReference = $collectionResourceReference;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing CollectionResourceReferenceListType
 *
 * A Composite containing a list of CollectionResourceReferences.
 * XSD Type: CollectionResourceReferenceList
 */
class CollectionResourceReferenceListType
{
    /**
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $collectionResourceReference
     */
    private $collectionResourceReference = [
        
    ];

    /**
     * Adds as collectionResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $collectionResourceReference
     */
    public function addToCollectionResourceReference($collectionResourceReference)
    {
        $this->collectionResourceReference[] = $collectionResourceReference;
        return $this;
    }

    /**
     * isset collectionResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getCollectionResourceReference()
    {
        return $this->collectionResourceReference;
    }

    /**
     * Sets a new collectionResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $collectionResourceReference
     * @return self
     */
    public function setCollectionResourceReference(array $collectionResourceReference)
    {
        $this->collectionResourceReference = $collectionResourceReference;
        return $this;
    }
}


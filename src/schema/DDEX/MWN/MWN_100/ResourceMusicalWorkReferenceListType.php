<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing ResourceMusicalWorkReferenceListType
 *
 * A Composite containing a list of ResourceMusicalWorkReferences.
 * XSD Type: ResourceMusicalWorkReferenceList
 */
class ResourceMusicalWorkReferenceListType
{
    /**
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @var \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = [
        
    ];

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReference(\DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReference($index)
    {
        return isset($this->resourceMusicalWorkReference[$index]);
    }

    /**
     * unset resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReference($index)
    {
        unset($this->resourceMusicalWorkReference[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @return \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReference()
    {
        return $this->resourceMusicalWorkReference;
    }

    /**
     * Sets a new resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference(array $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}


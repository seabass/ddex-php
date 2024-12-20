<?php

namespace DDEX\ddexC;

/**
 * Class representing ResourceMusicalWorkReferenceListType
 *
 * A ddex:Composite containing a list of ddex:ResourceMusicalWorkReferences.
 * XSD Type: ResourceMusicalWorkReferenceList
 */
class ResourceMusicalWorkReferenceListType
{
    /**
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @var \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = [
        
    ];

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @return self
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReference(\DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
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
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @return \DDEX\ddexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReference()
    {
        return $this->resourceMusicalWorkReference;
    }

    /**
     * Sets a new resourceMusicalWorkReference
     *
     * A ddex:Composite containing a ddex:ResourceMusicalWorkReference for a ddex:MusicalWork (specific to this ddex:Message).
     *
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference(array $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}


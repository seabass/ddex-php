<?php

namespace DDEX\RDR_N\RDR_N_150;

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
     * @var \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     */
    private $resourceMusicalWorkReference = [
        
    ];

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing a ResourceMusicalWorkReference for a MusicalWork (specific to this Message).
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReference(\DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
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
     * @return \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReference
     * @return self
     */
    public function setResourceMusicalWorkReference(array $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReference = $resourceMusicalWorkReference;
        return $this;
    }
}


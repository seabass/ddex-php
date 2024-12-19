<?php

namespace DDEX\ddexC;

/**
 * Class representing ResourceContainedResourceReferenceListType
 *
 * A ddex:Composite containing details of one or more ddex:ResourceContainedResourceReferences.
 * XSD Type: ResourceContainedResourceReferenceList
 */
class ResourceContainedResourceReferenceListType
{
    /**
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @var \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReference
     */
    private $resourceContainedResourceReference = [
        
    ];

    /**
     * Adds as resourceContainedResourceReference
     *
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReference(\DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReference[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReference
     *
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReference($index)
    {
        return isset($this->resourceContainedResourceReference[$index]);
    }

    /**
     * unset resourceContainedResourceReference
     *
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReference($index)
    {
        unset($this->resourceContainedResourceReference[$index]);
    }

    /**
     * Gets as resourceContainedResourceReference
     *
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @return \DDEX\ddexC\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReference()
    {
        return $this->resourceContainedResourceReference;
    }

    /**
     * Sets a new resourceContainedResourceReference
     *
     * A ddex:Composite containing details of a ddex:ResourceContainedResourceReference.
     *
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReference
     * @return self
     */
    public function setResourceContainedResourceReference(array $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReference = $resourceContainedResourceReference;
        return $this;
    }
}


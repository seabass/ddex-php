<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing RelatedResourceType
 *
 * A Composite containing details of a related Resource.
 * XSD Type: RelatedResource
 */
class RelatedResourceType
{
    /**
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Type of relationship between two Resources.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceRelationshipTypeType $resourceRelationshipType
     */
    private $resourceRelationshipType = null;

    /**
     * Gets as resourceId
     *
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceIdType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(\DDEX\MEAD\MEAD_101\ResourceIdType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as resourceRelationshipType
     *
     * A Type of relationship between two Resources.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceRelationshipTypeType
     */
    public function getResourceRelationshipType()
    {
        return $this->resourceRelationshipType;
    }

    /**
     * Sets a new resourceRelationshipType
     *
     * A Type of relationship between two Resources.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceRelationshipTypeType $resourceRelationshipType
     * @return self
     */
    public function setResourceRelationshipType(\DDEX\MEAD\MEAD_101\ResourceRelationshipTypeType $resourceRelationshipType)
    {
        $this->resourceRelationshipType = $resourceRelationshipType;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing ResourceForRequestType
 *
 * A Composite containing details of a related Work.
 * Explanatory Note: This Composite is named ResourceForRequest to disambiguate it from the basic Resource Composite.
 * XSD Type: ResourceForRequest
 */
class ResourceForRequestType
{
    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a Title of the Resource.
     *
     * @var \DDEX\PIE\PIE_100\ResourceTitleType $resourceTitle
     */
    private $resourceTitle = null;

    /**
     * The Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resourcegroups-and-trackreleases
     *
     * @var string $resourceType
     */
    private $resourceType = null;

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @return \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @param \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId
     * @return self
     */
    public function setResourceId(?\DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId = null)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as resourceTitle
     *
     * A Composite containing details of a Title of the Resource.
     *
     * @return \DDEX\PIE\PIE_100\ResourceTitleType
     */
    public function getResourceTitle()
    {
        return $this->resourceTitle;
    }

    /**
     * Sets a new resourceTitle
     *
     * A Composite containing details of a Title of the Resource.
     *
     * @param \DDEX\PIE\PIE_100\ResourceTitleType $resourceTitle
     * @return self
     */
    public function setResourceTitle(?\DDEX\PIE\PIE_100\ResourceTitleType $resourceTitle = null)
    {
        $this->resourceTitle = $resourceTitle;
        return $this;
    }

    /**
     * Gets as resourceType
     *
     * The Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resourcegroups-and-trackreleases
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * The Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resourcegroups-and-trackreleases
     *
     * @param string $resourceType
     * @return self
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
        return $this;
    }
}


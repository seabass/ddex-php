<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing RelatedCreationType
 *
 * A Composite containing details of a related Creation (a Work, a Release or a Resource).
 * XSD Type: RelatedCreation
 */
class RelatedCreationType
{
    /**
     * A Composite containing details of a ReleaseId.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details of a Title of the Creation.
     *
     * @var \DDEX\PIE\PIE_100\TitleWithPronunciationType $title
     */
    private $title = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\PIE\PIE_100\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

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
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(?\DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the Creation.
     *
     * @return \DDEX\PIE\PIE_100\TitleWithPronunciationType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Creation.
     *
     * @param \DDEX\PIE\PIE_100\TitleWithPronunciationType $title
     * @return self
     */
    public function setTitle(?\DDEX\PIE\PIE_100\TitleWithPronunciationType $title = null)
    {
        $this->title = $title;
        return $this;
    }
}


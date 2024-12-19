<?php

namespace DDEX\MEAD\MEAD_100;

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
     * @var \DDEX\MEAD\MEAD_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DDEX\MEAD\MEAD_100\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\MEAD\MEAD_100\MusicalWorkIdType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details of a Title of the Creation.
     *
     * @var \DDEX\MEAD\MEAD_100\TitleWithPronunciationType $title
     */
    private $title = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @return \DDEX\MEAD\MEAD_100\ReleaseIdType
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
     * @param \DDEX\MEAD\MEAD_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\MEAD\MEAD_100\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @return \DDEX\MEAD\MEAD_100\ResourceIdType
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
     * @param \DDEX\MEAD\MEAD_100\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(?\DDEX\MEAD\MEAD_100\ResourceIdType $resourceId = null)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\MEAD\MEAD_100\MusicalWorkIdType
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
     * @param \DDEX\MEAD\MEAD_100\MusicalWorkIdType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(?\DDEX\MEAD\MEAD_100\MusicalWorkIdType $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the Creation.
     *
     * @return \DDEX\MEAD\MEAD_100\TitleWithPronunciationType
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
     * @param \DDEX\MEAD\MEAD_100\TitleWithPronunciationType $title
     * @return self
     */
    public function setTitle(?\DDEX\MEAD\MEAD_100\TitleWithPronunciationType $title = null)
    {
        $this->title = $title;
        return $this;
    }
}


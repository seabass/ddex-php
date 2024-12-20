<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing ReleaseForRequestType
 *
 * A Composite containing details of a related Work.
 * Explanatory Note: This Composite is named ReleaseForRequest to disambiguate it from the basic Release Composite.
 * XSD Type: ReleaseForRequest
 */
class ReleaseForRequestType
{
    /**
     * A Composite containing details of a ReleaseId.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseTitleType $releaseTitle
     */
    private $releaseTitle = null;

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
     * Gets as releaseTitle
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseTitleType
     */
    public function getReleaseTitle()
    {
        return $this->releaseTitle;
    }

    /**
     * Sets a new releaseTitle
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseTitleType $releaseTitle
     * @return self
     */
    public function setReleaseTitle(?\DDEX\PIE\PIE_100\ReleaseTitleType $releaseTitle = null)
    {
        $this->releaseTitle = $releaseTitle;
        return $this;
    }
}


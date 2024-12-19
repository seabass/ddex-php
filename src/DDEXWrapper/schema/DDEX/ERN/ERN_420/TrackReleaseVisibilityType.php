<?php

namespace DDEX\ERN\ERN_420;

/**
 * Class representing TrackReleaseVisibilityType
 *
 * A Composite containing details of a Date specifying when a TrackRelease can be shown to Consumers.
 * XSD Type: TrackReleaseVisibility
 */
class TrackReleaseVisibilityType
{
    /**
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @var string $visibilityReference
     */
    private $visibilityReference = null;

    /**
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $trackListingPreviewStartDateTime
     */
    private $trackListingPreviewStartDateTime = null;

    /**
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $clipPreviewStartDateTime
     */
    private $clipPreviewStartDateTime = null;

    /**
     * Gets as visibilityReference
     *
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @return string
     */
    public function getVisibilityReference()
    {
        return $this->visibilityReference;
    }

    /**
     * Sets a new visibilityReference
     *
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @param string $visibilityReference
     * @return self
     */
    public function setVisibilityReference($visibilityReference)
    {
        $this->visibilityReference = $visibilityReference;
        return $this;
    }

    /**
     * Gets as trackListingPreviewStartDateTime
     *
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getTrackListingPreviewStartDateTime()
    {
        return $this->trackListingPreviewStartDateTime;
    }

    /**
     * Sets a new trackListingPreviewStartDateTime
     *
     * A DateTime on which the Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $trackListingPreviewStartDateTime
     * @return self
     */
    public function setTrackListingPreviewStartDateTime(\DateTime $trackListingPreviewStartDateTime)
    {
        $this->trackListingPreviewStartDateTime = $trackListingPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getClipPreviewStartDateTime()
    {
        return $this->clipPreviewStartDateTime;
    }

    /**
     * Sets a new clipPreviewStartDateTime
     *
     * A DateTime on which an audio or video clip is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no ClipPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The ClipPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $clipPreviewStartDateTime
     * @return self
     */
    public function setClipPreviewStartDateTime(?\DateTime $clipPreviewStartDateTime = null)
    {
        $this->clipPreviewStartDateTime = $clipPreviewStartDateTime;
        return $this;
    }
}


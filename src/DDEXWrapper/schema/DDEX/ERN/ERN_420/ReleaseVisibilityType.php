<?php

namespace DDEX\ERN\ERN_420;

/**
 * Class representing ReleaseVisibilityType
 *
 * A Composite containing details of Dates specifying when a Release can be shown to Consumers.
 * XSD Type: ReleaseVisibility
 */
class ReleaseVisibilityType
{
    /**
     * The Identifier (specific to the Message) of the visibility date. This is a LocalVisibilityAnchor starting with the letter V.
     *
     * @var string $visibilityReference
     */
    private $visibilityReference = null;

    /**
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $releaseDisplayStartDateTime
     */
    private $releaseDisplayStartDateTime = null;

    /**
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $coverArtPreviewStartDateTime
     */
    private $coverArtPreviewStartDateTime = null;

    /**
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @var \DateTime $fullTrackListingPreviewStartDateTime
     */
    private $fullTrackListingPreviewStartDateTime = null;

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
     * Gets as releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getReleaseDisplayStartDateTime()
    {
        return $this->releaseDisplayStartDateTime;
    }

    /**
     * Sets a new releaseDisplayStartDateTime
     *
     * A DateTime on which the Release is made first available for display. If no ReleaseDisplayStartDateTime is provided, the StartDate for the Deal is used instead. The ReleaseDisplayStartDateTime may not be later than the StartDate for the Deal. If the MessageRecipient is not able to cater for such granular display policies, the MessageRecipient may be forced to not display any Release information until a much later date. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $releaseDisplayStartDateTime
     * @return self
     */
    public function setReleaseDisplayStartDateTime(?\DateTime $releaseDisplayStartDateTime = null)
    {
        $this->releaseDisplayStartDateTime = $releaseDisplayStartDateTime;
        return $this;
    }

    /**
     * Gets as coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getCoverArtPreviewStartDateTime()
    {
        return $this->coverArtPreviewStartDateTime;
    }

    /**
     * Sets a new coverArtPreviewStartDateTime
     *
     * A DateTime on which the cover art is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no CoverArtPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The CoverArtPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $coverArtPreviewStartDateTime
     * @return self
     */
    public function setCoverArtPreviewStartDateTime(?\DateTime $coverArtPreviewStartDateTime = null)
    {
        $this->coverArtPreviewStartDateTime = $coverArtPreviewStartDateTime;
        return $this;
    }

    /**
     * Gets as fullTrackListingPreviewStartDateTime
     *
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @return \DateTime
     */
    public function getFullTrackListingPreviewStartDateTime()
    {
        return $this->fullTrackListingPreviewStartDateTime;
    }

    /**
     * Sets a new fullTrackListingPreviewStartDateTime
     *
     * A DateTime on which the full Track list is made first available for display (it overrides the generic ReleaseDisplayStartDate if supplied). If no TrackListingPreviewStartDateTime is provided, the StartDate for the Deal is used instead. The TrackListingPreviewStartDateTime shall not be later than the StartDate of the Deal allowing the general availability of the referenced Release. This element is not applicable on Track Releases. This is a string in ISO 8601 format: YYYY-MM-DDThh:mm:ss.
     *
     * @param \DateTime $fullTrackListingPreviewStartDateTime
     * @return self
     */
    public function setFullTrackListingPreviewStartDateTime(?\DateTime $fullTrackListingPreviewStartDateTime = null)
    {
        $this->fullTrackListingPreviewStartDateTime = $fullTrackListingPreviewStartDateTime;
        return $this;
    }
}


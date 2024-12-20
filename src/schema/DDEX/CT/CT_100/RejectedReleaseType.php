<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing RejectedReleaseType
 *
 * A Composite containing details of a DDEX Release that is rejected from inclusion in a CatalogTransfer.
 * XSD Type: RejectedRelease
 */
class RejectedReleaseType
{
    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\CT\CT_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Reason for rejecting the Release.
     *
     * @var \DDEX\CT\CT_100\RejectionReasonType $rejectionReason
     */
    private $rejectionReason = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\CT\CT_100\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\CT\CT_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\CT\CT_100\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as rejectionReason
     *
     * A Reason for rejecting the Release.
     *
     * @return \DDEX\CT\CT_100\RejectionReasonType
     */
    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    /**
     * Sets a new rejectionReason
     *
     * A Reason for rejecting the Release.
     *
     * @param \DDEX\CT\CT_100\RejectionReasonType $rejectionReason
     * @return self
     */
    public function setRejectionReason(\DDEX\CT\CT_100\RejectionReasonType $rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;
        return $this;
    }
}


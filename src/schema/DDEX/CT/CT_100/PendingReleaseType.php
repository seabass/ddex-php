<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing PendingReleaseType
 *
 * A Composite containing details of a DDEX Release that is still being processed.
 * XSD Type: PendingRelease
 */
class PendingReleaseType
{
    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\CT\CT_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Reason for which the Release is pending.
     *
     * @var \DDEX\CT\CT_100\PendingReasonType $pendingReason
     */
    private $pendingReason = null;

    /**
     * A Type of action proposed to the MessageRecipient.
     *
     * @var string $proposedActionType
     */
    private $proposedActionType = null;

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
     * Gets as pendingReason
     *
     * A Reason for which the Release is pending.
     *
     * @return \DDEX\CT\CT_100\PendingReasonType
     */
    public function getPendingReason()
    {
        return $this->pendingReason;
    }

    /**
     * Sets a new pendingReason
     *
     * A Reason for which the Release is pending.
     *
     * @param \DDEX\CT\CT_100\PendingReasonType $pendingReason
     * @return self
     */
    public function setPendingReason(\DDEX\CT\CT_100\PendingReasonType $pendingReason)
    {
        $this->pendingReason = $pendingReason;
        return $this;
    }

    /**
     * Gets as proposedActionType
     *
     * A Type of action proposed to the MessageRecipient.
     *
     * @return string
     */
    public function getProposedActionType()
    {
        return $this->proposedActionType;
    }

    /**
     * Sets a new proposedActionType
     *
     * A Type of action proposed to the MessageRecipient.
     *
     * @param string $proposedActionType
     * @return self
     */
    public function setProposedActionType($proposedActionType)
    {
        $this->proposedActionType = $proposedActionType;
        return $this;
    }
}


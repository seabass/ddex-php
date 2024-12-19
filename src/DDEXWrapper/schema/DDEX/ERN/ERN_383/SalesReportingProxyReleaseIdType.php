<?php

namespace DDEX\ERN\ERN_383;

/**
 * Class representing SalesReportingProxyReleaseIdType
 *
 * A Composite containing details of a
 *  SalesReportingProxyReleaseId.
 * XSD Type: SalesReportingProxyReleaseId
 */
class SalesReportingProxyReleaseIdType
{
    /**
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @var \DDEX\ERN\ERN_383\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @var \DDEX\ERN\ERN_383\ReasonType $reason
     */
    private $reason = null;

    /**
     * A Composite containing details of a
     *  ReasonType.
     *
     * @var \DDEX\ERN\ERN_383\ReasonTypeType $reasonType
     */
    private $reasonType = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @return \DDEX\ERN\ERN_383\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of
     *  ReleaseIds. If available, a GRid should always be used.
     *
     * @param \DDEX\ERN\ERN_383\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\ERN\ERN_383\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @return \DDEX\ERN\ERN_383\ReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A Composite containing the textual
     *  Description of the reason for the Identifier being used as a
     *  proxy.
     *
     * @param \DDEX\ERN\ERN_383\ReasonType $reason
     * @return self
     */
    public function setReason(?\DDEX\ERN\ERN_383\ReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as reasonType
     *
     * A Composite containing details of a
     *  ReasonType.
     *
     * @return \DDEX\ERN\ERN_383\ReasonTypeType
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * Sets a new reasonType
     *
     * A Composite containing details of a
     *  ReasonType.
     *
     * @param \DDEX\ERN\ERN_383\ReasonTypeType $reasonType
     * @return self
     */
    public function setReasonType(\DDEX\ERN\ERN_383\ReasonTypeType $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }
}


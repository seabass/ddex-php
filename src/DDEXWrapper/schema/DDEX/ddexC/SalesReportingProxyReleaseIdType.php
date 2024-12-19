<?php

namespace DDEX\ddexC;

/**
 * Class representing SalesReportingProxyReleaseIdType
 *
 * A ddex:Composite containing details of a ddex:SalesReportingProxyReleaseId.
 * XSD Type: SalesReportingProxyReleaseId
 */
class SalesReportingProxyReleaseIdType
{
    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @var \DDEX\ddexC\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @var \DDEX\ddexC\ReasonType $reason
     */
    private $reason = null;

    /**
     * A ddex:Composite containing details of a ReasonType.
     *
     * @var \DDEX\ddexC\ReasonTypeType $reasonType
     */
    private $reasonType = null;

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return \DDEX\ddexC\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param \DDEX\ddexC\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\ddexC\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @return \DDEX\ddexC\ReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A ddex:Composite containing the textual ddex:Description of the reason for the ddex:Identifier being used as a proxy.
     *
     * @param \DDEX\ddexC\ReasonType $reason
     * @return self
     */
    public function setReason(?\DDEX\ddexC\ReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as reasonType
     *
     * A ddex:Composite containing details of a ReasonType.
     *
     * @return \DDEX\ddexC\ReasonTypeType
     */
    public function getReasonType()
    {
        return $this->reasonType;
    }

    /**
     * Sets a new reasonType
     *
     * A ddex:Composite containing details of a ReasonType.
     *
     * @param \DDEX\ddexC\ReasonTypeType $reasonType
     * @return self
     */
    public function setReasonType(\DDEX\ddexC\ReasonTypeType $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }
}


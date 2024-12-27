<?php

namespace DDEX\ERN\ERN_C_WS_160\ReleaseStatusMessage;

/**
 * Class representing ReleaseStatusMessageAnonymousPHPType
 */
class ReleaseStatusMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the ReleaseStatusMessage.
     *
     * @var \DDEX\ERN\ERN_C_WS_160\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\ERN\ERN_C_WS_160\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of the status of the Release.
     *
     * @var \DDEX\ERN\ERN_C_WS_160\SupplyChainStatusType $status
     */
    private $status = null;

    /**
     * A DateTime on which a status was changed.
     *
     * @var \DateTime $statusChangeDateTime
     */
    private $statusChangeDateTime = null;

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the ReleaseStatusMessage.
     *
     * @return \DDEX\ERN\ERN_C_WS_160\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the ReleaseStatusMessage.
     *
     * @param \DDEX\ERN\ERN_C_WS_160\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_C_WS_160\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\ERN\ERN_C_WS_160\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\ERN\ERN_C_WS_160\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\ERN\ERN_C_WS_160\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as status
     *
     * A Composite containing details of the status of the Release.
     *
     * @return \DDEX\ERN\ERN_C_WS_160\SupplyChainStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Composite containing details of the status of the Release.
     *
     * @param \DDEX\ERN\ERN_C_WS_160\SupplyChainStatusType $status
     * @return self
     */
    public function setStatus(\DDEX\ERN\ERN_C_WS_160\SupplyChainStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusChangeDateTime
     *
     * A DateTime on which a status was changed.
     *
     * @return \DateTime
     */
    public function getStatusChangeDateTime()
    {
        return $this->statusChangeDateTime;
    }

    /**
     * Sets a new statusChangeDateTime
     *
     * A DateTime on which a status was changed.
     *
     * @param \DateTime $statusChangeDateTime
     * @return self
     */
    public function setStatusChangeDateTime(\DateTime $statusChangeDateTime)
    {
        $this->statusChangeDateTime = $statusChangeDateTime;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_C_WS_180\AcknowledgementMessage;

/**
 * Class representing AcknowledgementMessageAnonymousPHPType
 */
class AcknowledgementMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Release status.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ReleaseStatusType[] $releaseStatus
     */
    private $releaseStatus = [
        
    ];

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_C_WS_180\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as releaseStatus
     *
     * A Composite containing details of the Release status.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_WS_180\ReleaseStatusType $releaseStatus
     */
    public function addToReleaseStatus(\DDEX\ERN\ERN_C_WS_180\ReleaseStatusType $releaseStatus)
    {
        $this->releaseStatus[] = $releaseStatus;
        return $this;
    }

    /**
     * isset releaseStatus
     *
     * A Composite containing details of the Release status.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseStatus($index)
    {
        return isset($this->releaseStatus[$index]);
    }

    /**
     * unset releaseStatus
     *
     * A Composite containing details of the Release status.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseStatus($index)
    {
        unset($this->releaseStatus[$index]);
    }

    /**
     * Gets as releaseStatus
     *
     * A Composite containing details of the Release status.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ReleaseStatusType[]
     */
    public function getReleaseStatus()
    {
        return $this->releaseStatus;
    }

    /**
     * Sets a new releaseStatus
     *
     * A Composite containing details of the Release status.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ReleaseStatusType[] $releaseStatus
     * @return self
     */
    public function setReleaseStatus(array $releaseStatus = null)
    {
        $this->releaseStatus = $releaseStatus;
        return $this;
    }
}


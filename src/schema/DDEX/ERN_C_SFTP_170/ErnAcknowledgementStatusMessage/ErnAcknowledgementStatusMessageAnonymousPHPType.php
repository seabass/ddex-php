<?php

namespace DDEX\ERN\ERN_C_SFTP_170\ErnAcknowledgementStatusMessage;

/**
 * Class representing ErnAcknowledgementStatusMessageAnonymousPHPType
 */
class ErnAcknowledgementStatusMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the ErnAcknowledgementStatusMessage.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_170\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Release status.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_170\ReleaseStatusType[] $releaseStatus
     */
    private $releaseStatus = [
        
    ];

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the ErnAcknowledgementStatusMessage.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_170\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the ErnAcknowledgementStatusMessage.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_170\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_C_SFTP_170\MessageHeaderType $messageHeader)
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
     * @param \DDEX\ERN\ERN_C_SFTP_170\ReleaseStatusType $releaseStatus
     */
    public function addToReleaseStatus(\DDEX\ERN\ERN_C_SFTP_170\ReleaseStatusType $releaseStatus)
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
     * @return \DDEX\ERN\ERN_C_SFTP_170\ReleaseStatusType[]
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
     * @param \DDEX\ERN\ERN_C_SFTP_170\ReleaseStatusType[] $releaseStatus
     * @return self
     */
    public function setReleaseStatus(array $releaseStatus = null)
    {
        $this->releaseStatus = $releaseStatus;
        return $this;
    }
}


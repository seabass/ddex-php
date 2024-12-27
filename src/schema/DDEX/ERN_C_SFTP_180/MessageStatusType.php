<?php

namespace DDEX\ERN\ERN_C_SFTP_180;

/**
 * Class representing MessageStatusType
 *
 * A Composite containing details of a Message Status.
 * XSD Type: MessageStatus
 */
class MessageStatusType
{
    /**
     * A Composite containing details of the status of the Message.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_180\StatusType $status
     */
    private $status = null;

    /**
     * A Status text for the Message.
     *
     * @var string $information
     */
    private $information = null;

    /**
     * Gets as status
     *
     * A Composite containing details of the status of the Message.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_180\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Composite containing details of the status of the Message.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_180\StatusType $status
     * @return self
     */
    public function setStatus(\DDEX\ERN\ERN_C_SFTP_180\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as information
     *
     * A Status text for the Message.
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * A Status text for the Message.
     *
     * @param string $information
     * @return self
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }
}


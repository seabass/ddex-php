<?php

namespace DDEX\RDR_C\RDR_C_100;

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
     * @var \DDEX\RDR_C\RDR_C_100\FileStatusType $status
     */
    private $status = null;

    /**
     * A Status text for the Message.
     *
     * @var string $information
     */
    private $information = null;

    /**
     * A Description of an Error that was found.
     *
     * @var string $errorDescription
     */
    private $errorDescription = null;

    /**
     * Gets as status
     *
     * A Composite containing details of the status of the Message.
     *
     * @return \DDEX\RDR_C\RDR_C_100\FileStatusType
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
     * @param \DDEX\RDR_C\RDR_C_100\FileStatusType $status
     * @return self
     */
    public function setStatus(\DDEX\RDR_C\RDR_C_100\FileStatusType $status)
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

    /**
     * Gets as errorDescription
     *
     * A Description of an Error that was found.
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * Sets a new errorDescription
     *
     * A Description of an Error that was found.
     *
     * @param string $errorDescription
     * @return self
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;
        return $this;
    }
}


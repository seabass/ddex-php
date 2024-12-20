<?php

namespace DDEX\RDR_C\RDR_C_100;

/**
 * Class representing BatchStatusType
 *
 * A Composite containing details of a Batch Status.
 * XSD Type: BatchStatus
 */
class BatchStatusType
{
    /**
     * A Composite containing details of the status of the Batch.
     *
     * @var \DDEX\RDR_C\RDR_C_100\StatusType $status
     */
    private $status = null;

    /**
     * A Status text for the Batch.
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
     * A Composite containing details of the status of the Batch.
     *
     * @return \DDEX\RDR_C\RDR_C_100\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Composite containing details of the status of the Batch.
     *
     * @param \DDEX\RDR_C\RDR_C_100\StatusType $status
     * @return self
     */
    public function setStatus(\DDEX\RDR_C\RDR_C_100\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as information
     *
     * A Status text for the Batch.
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
     * A Status text for the Batch.
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


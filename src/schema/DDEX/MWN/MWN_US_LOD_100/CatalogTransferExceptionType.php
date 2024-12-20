<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing CatalogTransferExceptionType
 *
 * A Composite containing details of an exception of a CatalogTransfer.
 * XSD Type: CatalogTransferException
 */
class CatalogTransferExceptionType
{
    /**
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     */
    private $catalogTransferId = null;

    /**
     * A Type of reason for the exception.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ExceptionReasonType $exceptionReason
     */
    private $exceptionReason = null;

    /**
     * A Composite containing the textual Description of the reason.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReasonType $reason
     */
    private $reason = null;

    /**
     * A Composite containing details of one or more RightShares that are confirmed and hence excluded from the exceptions.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ExceptionFromDisputeType $exception
     */
    private $exception = null;

    /**
     * Gets as catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType
     */
    public function getCatalogTransferId()
    {
        return $this->catalogTransferId;
    }

    /**
     * Sets a new catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId
     * @return self
     */
    public function setCatalogTransferId(\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $catalogTransferId)
    {
        $this->catalogTransferId = $catalogTransferId;
        return $this;
    }

    /**
     * Gets as exceptionReason
     *
     * A Type of reason for the exception.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ExceptionReasonType
     */
    public function getExceptionReason()
    {
        return $this->exceptionReason;
    }

    /**
     * Sets a new exceptionReason
     *
     * A Type of reason for the exception.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ExceptionReasonType $exceptionReason
     * @return self
     */
    public function setExceptionReason(\DDEX\MWN\MWN_US_LOD_100\ExceptionReasonType $exceptionReason)
    {
        $this->exceptionReason = $exceptionReason;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A Composite containing the textual Description of the reason.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A Composite containing the textual Description of the reason.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReasonType $reason
     * @return self
     */
    public function setReason(?\DDEX\MWN\MWN_US_LOD_100\ReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as exception
     *
     * A Composite containing details of one or more RightShares that are confirmed and hence excluded from the exceptions.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ExceptionFromDisputeType
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Sets a new exception
     *
     * A Composite containing details of one or more RightShares that are confirmed and hence excluded from the exceptions.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ExceptionFromDisputeType $exception
     * @return self
     */
    public function setException(?\DDEX\MWN\MWN_US_LOD_100\ExceptionFromDisputeType $exception = null)
    {
        $this->exception = $exception;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ExceptionFromConfirmationType
 *
 * A Composite containing details of one or more RightShares that are an exception from a confirmation.
 * XSD Type: ExceptionFromConfirmation
 */
class ExceptionFromConfirmationType
{
    /**
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType[] $rightShareId
     */
    private $rightShareId = [
        
    ];

    /**
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\RightShareWithoutReferenceType[] $rightShare
     */
    private $rightShare = [
        
    ];

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
     * Adds as rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $rightShareId
     */
    public function addToRightShareId(\DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType $rightShareId)
    {
        $this->rightShareId[] = $rightShareId;
        return $this;
    }

    /**
     * isset rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareId($index)
    {
        return isset($this->rightShareId[$index]);
    }

    /**
     * unset rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareId($index)
    {
        unset($this->rightShareId[$index]);
    }

    /**
     * Gets as rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType[]
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare. This element is to be used if the RightShare reported in the LoDMessage has a RightShareId.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ProprietaryIdType[] $rightShareId
     * @return self
     */
    public function setRightShareId(array $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Adds as rightShare
     *
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\RightShareWithoutReferenceType $rightShare
     */
    public function addToRightShare(\DDEX\MWN\MWN_US_LOD_100\RightShareWithoutReferenceType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShare($index)
    {
        return isset($this->rightShare[$index]);
    }

    /**
     * unset rightShare
     *
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShare($index)
    {
        unset($this->rightShare[$index]);
    }

    /**
     * Gets as rightShare
     *
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\RightShareWithoutReferenceType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A Composite containing details of the RightShare. This element is to be used if the RightShare reported in the LoDMessage does not have a RightShareId.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\RightShareWithoutReferenceType[] $rightShare
     * @return self
     */
    public function setRightShare(array $rightShare = null)
    {
        $this->rightShare = $rightShare;
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
}


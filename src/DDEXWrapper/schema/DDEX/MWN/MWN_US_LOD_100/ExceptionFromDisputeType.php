<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ExceptionFromDisputeType
 *
 * A Composite containing details of one or more RightShares that are an exception from a dispute.
 * XSD Type: ExceptionFromDispute
 */
class ExceptionFromDisputeType
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
}


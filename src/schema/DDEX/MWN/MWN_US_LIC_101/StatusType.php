<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing StatusType
 *
 * A Composite containing details of a Status of a MusicalWork.
 * XSD Type: Status
 */
class StatusType
{
    /**
     * A Status of the RightsClaim for the MusicalWork.
     *
     * @var string $claimStatus
     */
    private $claimStatus = null;

    /**
     * A Type of Right referenced by the RightsClaim.
     *
     * @var string[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * The Date on which the claim Status was updated. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $claimStatusDate
     */
    private $claimStatusDate = null;

    /**
     * Gets as claimStatus
     *
     * A Status of the RightsClaim for the MusicalWork.
     *
     * @return string
     */
    public function getClaimStatus()
    {
        return $this->claimStatus;
    }

    /**
     * Sets a new claimStatus
     *
     * A Status of the RightsClaim for the MusicalWork.
     *
     * @param string $claimStatus
     * @return self
     */
    public function setClaimStatus($claimStatus)
    {
        $this->claimStatus = $claimStatus;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right referenced by the RightsClaim.
     *
     * @return self
     * @param string $rightsType
     */
    public function addToRightsType($rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Type of Right referenced by the RightsClaim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A Type of Right referenced by the RightsClaim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A Type of Right referenced by the RightsClaim.
     *
     * @return string[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Type of Right referenced by the RightsClaim.
     *
     * @param string $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as claimStatusDate
     *
     * The Date on which the claim Status was updated. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getClaimStatusDate()
    {
        return $this->claimStatusDate;
    }

    /**
     * Sets a new claimStatusDate
     *
     * The Date on which the claim Status was updated. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $claimStatusDate
     * @return self
     */
    public function setClaimStatusDate($claimStatusDate)
    {
        $this->claimStatusDate = $claimStatusDate;
        return $this;
    }
}


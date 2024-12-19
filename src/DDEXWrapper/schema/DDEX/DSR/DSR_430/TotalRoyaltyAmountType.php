<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing TotalRoyaltyAmountType
 *
 * A Composite containing details of a total RoyaltyAmount.
 * XSD Type: TotalRoyaltyAmount
 */
class TotalRoyaltyAmountType
{
    /**
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
     *
     * @var \DDEX\DSR\DSR_430\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details of the RoyaltyAmount due.
     *
     * @var \DDEX\DSR\DSR_430\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @var \DDEX\DSR\DSR_430\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\DSR\DSR_430\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the ReleaseType for which the RoyaltyAmount is calculated.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\DSR\DSR_430\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
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
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
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
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
     *
     * @return \DDEX\DSR\DSR_430\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Composite containing details of the RightsType for which the RoyaltyAmount is calculated.
     *
     * @param \DDEX\DSR\DSR_430\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as royaltyAmount
     *
     * A Composite containing details of the RoyaltyAmount due.
     *
     * @return \DDEX\DSR\DSR_430\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A Composite containing details of the RoyaltyAmount due.
     *
     * @param \DDEX\DSR\DSR_430\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(\DDEX\DSR\DSR_430\RoyaltyAmountType $royaltyAmount)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\UseTypeType $useType
     */
    public function addToUseType(\DDEX\DSR\DSR_430\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return \DDEX\DSR\DSR_430\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @param \DDEX\DSR\DSR_430\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }
}


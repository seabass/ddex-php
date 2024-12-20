<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing TotalRoyaltyAmountType
 *
 * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
 * XSD Type: TotalRoyaltyAmount
 */
class TotalRoyaltyAmountType
{
    /**
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @var \DDEX\ddexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @var \DDEX\ddexC\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     */
    private $royaltyAmount = null;

    /**
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @var \DDEX\ddexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\ddexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
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
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
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
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return \DDEX\ddexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the ddex:ReleaseType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param \DDEX\ddexC\ReleaseTypeType[] $releaseType
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
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return self
     * @param \DDEX\ddexC\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\ddexC\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
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
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
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
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @return \DDEX\ddexC\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A ddex:Composite containing details of the RightsType for which the ddex:RoyaltyAmount is calculated.
     *
     * @param \DDEX\ddexC\RightsTypeType[] $rightsType
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
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getRoyaltyAmount()
    {
        return $this->royaltyAmount;
    }

    /**
     * Sets a new royaltyAmount
     *
     * A ddex:Composite containing details of the ddex:RoyaltyAmount due.
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $royaltyAmount
     * @return self
     */
    public function setRoyaltyAmount(\DDEX\ddexC\RoyaltyAmountType $royaltyAmount)
    {
        $this->royaltyAmount = $royaltyAmount;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return self
     * @param \DDEX\ddexC\UseTypeType $useType
     */
    public function addToUseType(\DDEX\ddexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return \DDEX\ddexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param \DDEX\ddexC\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }
}


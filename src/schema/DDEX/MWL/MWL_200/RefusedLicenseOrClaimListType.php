<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing RefusedLicenseOrClaimListType
 *
 * A ddex:Composite containing details of ddex:Licenses or ddex:Claims that are refused.
 * XSD Type: RefusedLicenseOrClaimList
 */
class RefusedLicenseOrClaimListType
{
    /**
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @var \DDEX\MWL\MWL_200\RefusedLicenseOrClaimType[] $refusedLicenseOrClaim
     */
    private $refusedLicenseOrClaim = [
        
    ];

    /**
     * Adds as refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\RefusedLicenseOrClaimType $refusedLicenseOrClaim
     */
    public function addToRefusedLicenseOrClaim(\DDEX\MWL\MWL_200\RefusedLicenseOrClaimType $refusedLicenseOrClaim)
    {
        $this->refusedLicenseOrClaim[] = $refusedLicenseOrClaim;
        return $this;
    }

    /**
     * isset refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusedLicenseOrClaim($index)
    {
        return isset($this->refusedLicenseOrClaim[$index]);
    }

    /**
     * unset refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusedLicenseOrClaim($index)
    {
        unset($this->refusedLicenseOrClaim[$index]);
    }

    /**
     * Gets as refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @return \DDEX\MWL\MWL_200\RefusedLicenseOrClaimType[]
     */
    public function getRefusedLicenseOrClaim()
    {
        return $this->refusedLicenseOrClaim;
    }

    /**
     * Sets a new refusedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is refused.
     *
     * @param \DDEX\MWL\MWL_200\RefusedLicenseOrClaimType[] $refusedLicenseOrClaim
     * @return self
     */
    public function setRefusedLicenseOrClaim(array $refusedLicenseOrClaim)
    {
        $this->refusedLicenseOrClaim = $refusedLicenseOrClaim;
        return $this;
    }
}


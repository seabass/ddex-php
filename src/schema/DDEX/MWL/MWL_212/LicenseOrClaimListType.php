<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing LicenseOrClaimListType
 *
 * A ddex:Composite containing details of
 *  ddex:Licenses or ddex:Claims.
 * XSD Type: LicenseOrClaimList
 */
class LicenseOrClaimListType
{
    /**
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_212\LicenseOrClaimType[] $licenseOrClaim
     */
    private $licenseOrClaim = [
        
    ];

    /**
     * Adds as licenseOrClaim
     *
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim
     */
    public function addToLicenseOrClaim(\DDEX\MWL\MWL_212\LicenseOrClaimType $licenseOrClaim)
    {
        $this->licenseOrClaim[] = $licenseOrClaim;
        return $this;
    }

    /**
     * isset licenseOrClaim
     *
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaim($index)
    {
        return isset($this->licenseOrClaim[$index]);
    }

    /**
     * unset licenseOrClaim
     *
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaim($index)
    {
        unset($this->licenseOrClaim[$index]);
    }

    /**
     * Gets as licenseOrClaim
     *
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_212\LicenseOrClaimType[]
     */
    public function getLicenseOrClaim()
    {
        return $this->licenseOrClaim;
    }

    /**
     * Sets a new licenseOrClaim
     *
     * A ddex:Composite containing details of the
     *  ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_212\LicenseOrClaimType[] $licenseOrClaim
     * @return self
     */
    public function setLicenseOrClaim(array $licenseOrClaim)
    {
        $this->licenseOrClaim = $licenseOrClaim;
        return $this;
    }
}


<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing LicenseOrClaimRequestListType
 *
 * A ddex:Composite containing details of one or more requests for a ddex:License or ddex:Claim.
 * XSD Type: LicenseOrClaimRequestList
 */
class LicenseOrClaimRequestListType
{
    /**
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @var \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[] $licenseOrClaimRequest
     */
    private $licenseOrClaimRequest = [
        
    ];

    /**
     * Adds as licenseOrClaimRequest
     *
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRequestType $licenseOrClaimRequest
     */
    public function addToLicenseOrClaimRequest(\DDEX\MWL\MWL_200\LicenseOrClaimRequestType $licenseOrClaimRequest)
    {
        $this->licenseOrClaimRequest[] = $licenseOrClaimRequest;
        return $this;
    }

    /**
     * isset licenseOrClaimRequest
     *
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRequest($index)
    {
        return isset($this->licenseOrClaimRequest[$index]);
    }

    /**
     * unset licenseOrClaimRequest
     *
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRequest($index)
    {
        unset($this->licenseOrClaimRequest[$index]);
    }

    /**
     * Gets as licenseOrClaimRequest
     *
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @return \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[]
     */
    public function getLicenseOrClaimRequest()
    {
        return $this->licenseOrClaimRequest;
    }

    /**
     * Sets a new licenseOrClaimRequest
     *
     * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
     *
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRequestType[] $licenseOrClaimRequest
     * @return self
     */
    public function setLicenseOrClaimRequest(array $licenseOrClaimRequest)
    {
        $this->licenseOrClaimRequest = $licenseOrClaimRequest;
        return $this;
    }
}


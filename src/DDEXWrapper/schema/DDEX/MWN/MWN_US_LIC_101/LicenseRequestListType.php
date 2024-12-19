<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing LicenseRequestListType
 *
 * A Composite containing details of one or more Requests for a License.
 * XSD Type: LicenseRequestList
 */
class LicenseRequestListType
{
    /**
     * A Composite containing details of a License Request.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LicenseRequestType[] $licenseRequest
     */
    private $licenseRequest = [
        
    ];

    /**
     * Adds as licenseRequest
     *
     * A Composite containing details of a License Request.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseRequestType $licenseRequest
     */
    public function addToLicenseRequest(\DDEX\MWN\MWN_US_LIC_101\LicenseRequestType $licenseRequest)
    {
        $this->licenseRequest[] = $licenseRequest;
        return $this;
    }

    /**
     * isset licenseRequest
     *
     * A Composite containing details of a License Request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseRequest($index)
    {
        return isset($this->licenseRequest[$index]);
    }

    /**
     * unset licenseRequest
     *
     * A Composite containing details of a License Request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseRequest($index)
    {
        unset($this->licenseRequest[$index]);
    }

    /**
     * Gets as licenseRequest
     *
     * A Composite containing details of a License Request.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LicenseRequestType[]
     */
    public function getLicenseRequest()
    {
        return $this->licenseRequest;
    }

    /**
     * Sets a new licenseRequest
     *
     * A Composite containing details of a License Request.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseRequestType[] $licenseRequest
     * @return self
     */
    public function setLicenseRequest(array $licenseRequest)
    {
        $this->licenseRequest = $licenseRequest;
        return $this;
    }
}


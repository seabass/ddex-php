<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing LicenseListType
 *
 * A Composite containing details of one or more Licenses.
 * XSD Type: LicenseList
 */
class LicenseListType
{
    /**
     * A Composite containing details of a License.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LicenseType[] $license
     */
    private $license = [
        
    ];

    /**
     * A Composite containing details of a License rejection.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LicenseRejectionType[] $licenseRejection
     */
    private $licenseRejection = [
        
    ];

    /**
     * Adds as license
     *
     * A Composite containing details of a License.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseType $license
     */
    public function addToLicense(\DDEX\MWN\MWN_US_LIC_101\LicenseType $license)
    {
        $this->license[] = $license;
        return $this;
    }

    /**
     * isset license
     *
     * A Composite containing details of a License.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicense($index)
    {
        return isset($this->license[$index]);
    }

    /**
     * unset license
     *
     * A Composite containing details of a License.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicense($index)
    {
        unset($this->license[$index]);
    }

    /**
     * Gets as license
     *
     * A Composite containing details of a License.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LicenseType[]
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Sets a new license
     *
     * A Composite containing details of a License.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseType[] $license
     * @return self
     */
    public function setLicense(array $license = null)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * Adds as licenseRejection
     *
     * A Composite containing details of a License rejection.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseRejectionType $licenseRejection
     */
    public function addToLicenseRejection(\DDEX\MWN\MWN_US_LIC_101\LicenseRejectionType $licenseRejection)
    {
        $this->licenseRejection[] = $licenseRejection;
        return $this;
    }

    /**
     * isset licenseRejection
     *
     * A Composite containing details of a License rejection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseRejection($index)
    {
        return isset($this->licenseRejection[$index]);
    }

    /**
     * unset licenseRejection
     *
     * A Composite containing details of a License rejection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseRejection($index)
    {
        unset($this->licenseRejection[$index]);
    }

    /**
     * Gets as licenseRejection
     *
     * A Composite containing details of a License rejection.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LicenseRejectionType[]
     */
    public function getLicenseRejection()
    {
        return $this->licenseRejection;
    }

    /**
     * Sets a new licenseRejection
     *
     * A Composite containing details of a License rejection.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseRejectionType[] $licenseRejection
     * @return self
     */
    public function setLicenseRejection(array $licenseRejection = null)
    {
        $this->licenseRejection = $licenseRejection;
        return $this;
    }
}


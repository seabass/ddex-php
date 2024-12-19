<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing LicenseRejectionType
 *
 * A Composite containing details of a License Rejection.
 * XSD Type: LicenseRejection
 */
class LicenseRejectionType
{
    /**
     * A Composite containing details of an Identifier of the License Rejection.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRejectionId
     */
    private $licenseRejectionId = null;

    /**
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId
     */
    private $licenseRequestId = null;

    /**
     * A Composite containing a reason for rejecting a License.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LicenseRejectionReasonType $licenseRejectionReason
     */
    private $licenseRejectionReason = null;

    /**
     * A Comment that provides additional information to the LicenseRejectionReason.
     *
     * @var string $additionalInformation
     */
    private $additionalInformation = null;

    /**
     * Gets as licenseRejectionId
     *
     * A Composite containing details of an Identifier of the License Rejection.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType
     */
    public function getLicenseRejectionId()
    {
        return $this->licenseRejectionId;
    }

    /**
     * Sets a new licenseRejectionId
     *
     * A Composite containing details of an Identifier of the License Rejection.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRejectionId
     * @return self
     */
    public function setLicenseRejectionId(\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRejectionId)
    {
        $this->licenseRejectionId = $licenseRejectionId;
        return $this;
    }

    /**
     * Gets as licenseRequestId
     *
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType
     */
    public function getLicenseRequestId()
    {
        return $this->licenseRequestId;
    }

    /**
     * Sets a new licenseRequestId
     *
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId
     * @return self
     */
    public function setLicenseRequestId(\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId)
    {
        $this->licenseRequestId = $licenseRequestId;
        return $this;
    }

    /**
     * Gets as licenseRejectionReason
     *
     * A Composite containing a reason for rejecting a License.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\LicenseRejectionReasonType
     */
    public function getLicenseRejectionReason()
    {
        return $this->licenseRejectionReason;
    }

    /**
     * Sets a new licenseRejectionReason
     *
     * A Composite containing a reason for rejecting a License.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseRejectionReasonType $licenseRejectionReason
     * @return self
     */
    public function setLicenseRejectionReason(\DDEX\MWN\MWN_US_LIC_100\LicenseRejectionReasonType $licenseRejectionReason)
    {
        $this->licenseRejectionReason = $licenseRejectionReason;
        return $this;
    }

    /**
     * Gets as additionalInformation
     *
     * A Comment that provides additional information to the LicenseRejectionReason.
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * A Comment that provides additional information to the LicenseRejectionReason.
     *
     * @param string $additionalInformation
     * @return self
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
}


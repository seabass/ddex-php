<?php

namespace DDEX\ddexC;

/**
 * Class representing RelatedLicenseOrClaimRequestIdType
 *
 * A ddex:Composite containing details of a RelatedLicenseOrClaimRequestId.
 * XSD Type: RelatedLicenseOrClaimRequestId
 */
class RelatedLicenseOrClaimRequestIdType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = null;

    /**
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @var \DDEX\ddexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason
     */
    private $licenseOrClaimRequestUpdateReason = null;

    /**
     * Gets as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @return \DDEX\ddexC\ProprietaryIdType
     */
    public function getLicenseOrClaimRequestId()
    {
        return $this->licenseOrClaimRequestId;
    }

    /**
     * Sets a new licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @param \DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(?\DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId = null)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * Gets as licenseOrClaimRequestUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @return \DDEX\ddexC\LicenseOrClaimRequestUpdateReasonType
     */
    public function getLicenseOrClaimRequestUpdateReason()
    {
        return $this->licenseOrClaimRequestUpdateReason;
    }

    /**
     * Sets a new licenseOrClaimRequestUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaimRequest.
     *
     * @param \DDEX\ddexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason
     * @return self
     */
    public function setLicenseOrClaimRequestUpdateReason(?\DDEX\ddexC\LicenseOrClaimRequestUpdateReasonType $licenseOrClaimRequestUpdateReason = null)
    {
        $this->licenseOrClaimRequestUpdateReason = $licenseOrClaimRequestUpdateReason;
        return $this;
    }
}


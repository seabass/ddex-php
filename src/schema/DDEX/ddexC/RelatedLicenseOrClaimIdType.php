<?php

namespace DDEX\ddexC;

/**
 * Class representing RelatedLicenseOrClaimIdType
 *
 * A ddex:Composite containing details of a RelatedLicenseOrClaimId.
 * XSD Type: RelatedLicenseOrClaimId
 */
class RelatedLicenseOrClaimIdType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @var \DDEX\ddexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason
     */
    private $licenseOrClaimUpdateReason = null;

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getLicenseOrClaimId()
    {
        return $this->licenseOrClaimId;
    }

    /**
     * Sets a new licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     * @return self
     */
    public function setLicenseOrClaimId(?\DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId = null)
    {
        $this->licenseOrClaimId = $licenseOrClaimId;
        return $this;
    }

    /**
     * Gets as licenseOrClaimUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @return \DDEX\ddexC\LicenseOrClaimUpdateReasonType
     */
    public function getLicenseOrClaimUpdateReason()
    {
        return $this->licenseOrClaimUpdateReason;
    }

    /**
     * Sets a new licenseOrClaimUpdateReason
     *
     * A ddex:Composite containing details of a reason for an updated mwl:LicenseOrClaim.
     *
     * @param \DDEX\ddexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason
     * @return self
     */
    public function setLicenseOrClaimUpdateReason(?\DDEX\ddexC\LicenseOrClaimUpdateReasonType $licenseOrClaimUpdateReason = null)
    {
        $this->licenseOrClaimUpdateReason = $licenseOrClaimUpdateReason;
        return $this;
    }
}


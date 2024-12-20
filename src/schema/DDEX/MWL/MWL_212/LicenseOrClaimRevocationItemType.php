<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing LicenseOrClaimRevocationItemType
 *
 * A ddex:Composite containing details of a
 *  ddex:License or ddex:Claim that is revoked.
 * XSD Type: LicenseOrClaimRevocationItem
 */
class LicenseOrClaimRevocationItemType
{
    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim that is being
     *  revoked.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * The ddex:DateTime at which the
     *  ddex:License is revoked (in ISO 8601:2004 format:
     *  YYYY-MM-DDThh:mm:ssZ).
     *
     * @var \DateTime $revocationDate
     */
    private $revocationDate = null;

    /**
     * A ddex:Composite containing details of the
     *  reason for the revocation.
     *
     * @var \DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason
     */
    private $reason = null;

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim that is being
     *  revoked.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim that is being
     *  revoked.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     * @return self
     */
    public function setLicenseOrClaimId(\DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId)
    {
        $this->licenseOrClaimId = $licenseOrClaimId;
        return $this;
    }

    /**
     * Gets as revocationDate
     *
     * The ddex:DateTime at which the
     *  ddex:License is revoked (in ISO 8601:2004 format:
     *  YYYY-MM-DDThh:mm:ssZ).
     *
     * @return \DateTime
     */
    public function getRevocationDate()
    {
        return $this->revocationDate;
    }

    /**
     * Sets a new revocationDate
     *
     * The ddex:DateTime at which the
     *  ddex:License is revoked (in ISO 8601:2004 format:
     *  YYYY-MM-DDThh:mm:ssZ).
     *
     * @param \DateTime $revocationDate
     * @return self
     */
    public function setRevocationDate(\DateTime $revocationDate)
    {
        $this->revocationDate = $revocationDate;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A ddex:Composite containing details of the
     *  reason for the revocation.
     *
     * @return \DDEX\ddexC\LicenseOrClaimRefusalReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A ddex:Composite containing details of the
     *  reason for the revocation.
     *
     * @param \DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason
     * @return self
     */
    public function setReason(?\DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }
}


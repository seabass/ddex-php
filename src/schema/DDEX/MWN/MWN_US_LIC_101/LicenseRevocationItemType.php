<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing LicenseRevocationItemType
 *
 * A Composite containing details of a License or Claim that is revoked.
 * XSD Type: LicenseRevocationItem
 */
class LicenseRevocationItemType
{
    /**
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $licenseId
     */
    private $licenseId = null;

    /**
     * The DateTime at which the License is revoked (in ISO 8601:2004 format: YYYY-MM-DDThh:mm:ssZ).
     *
     * @var \DateTime $revocationDate
     */
    private $revocationDate = null;

    /**
     * A Composite containing details of the reason for the revocation.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LicenseRefusalReasonType $reason
     */
    private $reason = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $proprietaryId
     */
    public function addToLicenseId(\DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $proprietaryId)
    {
        $this->licenseId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset licenseId
     *
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseId($index)
    {
        return isset($this->licenseId[$index]);
    }

    /**
     * unset licenseId
     *
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseId($index)
    {
        unset($this->licenseId[$index]);
    }

    /**
     * Gets as licenseId
     *
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[]
     */
    public function getLicenseId()
    {
        return $this->licenseId;
    }

    /**
     * Sets a new licenseId
     *
     * A Composite containing details of an Identifier of the License or Claim that is being revoked.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $licenseId
     * @return self
     */
    public function setLicenseId(array $licenseId)
    {
        $this->licenseId = $licenseId;
        return $this;
    }

    /**
     * Gets as revocationDate
     *
     * The DateTime at which the License is revoked (in ISO 8601:2004 format: YYYY-MM-DDThh:mm:ssZ).
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
     * The DateTime at which the License is revoked (in ISO 8601:2004 format: YYYY-MM-DDThh:mm:ssZ).
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
     * A Composite containing details of the reason for the revocation.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LicenseRefusalReasonType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A Composite containing details of the reason for the revocation.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseRefusalReasonType $reason
     * @return self
     */
    public function setReason(?\DDEX\MWN\MWN_US_LIC_101\LicenseRefusalReasonType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }
}


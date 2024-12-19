<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing LicensingProcessStatusItemType
 *
 * A ddex:Composite containing details of the status of a licensing process.
 * XSD Type: LicensingProcessStatusItem
 */
class LicensingProcessStatusItemType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of the process status item of the ddex:License or ddex:Claim request.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $licensingProcessStatusId
     */
    private $licensingProcessStatusId = null;

    /**
     * The operational status of the licensing process.
     *
     * @var string $licensingProcessStatus
     */
    private $licensingProcessStatus = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = [
        
    ];

    /**
     * Gets as licensingProcessStatusId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the process status item of the ddex:License or ddex:Claim request.
     *
     * @return \DDEX\ddexC\ProprietaryIdType
     */
    public function getLicensingProcessStatusId()
    {
        return $this->licensingProcessStatusId;
    }

    /**
     * Sets a new licensingProcessStatusId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the process status item of the ddex:License or ddex:Claim request.
     *
     * @param \DDEX\ddexC\ProprietaryIdType $licensingProcessStatusId
     * @return self
     */
    public function setLicensingProcessStatusId(\DDEX\ddexC\ProprietaryIdType $licensingProcessStatusId)
    {
        $this->licensingProcessStatusId = $licensingProcessStatusId;
        return $this;
    }

    /**
     * Gets as licensingProcessStatus
     *
     * The operational status of the licensing process.
     *
     * @return string
     */
    public function getLicensingProcessStatus()
    {
        return $this->licensingProcessStatus;
    }

    /**
     * Sets a new licensingProcessStatus
     *
     * The operational status of the licensing process.
     *
     * @param string $licensingProcessStatus
     * @return self
     */
    public function setLicensingProcessStatus($licensingProcessStatus)
    {
        $this->licensingProcessStatus = $licensingProcessStatus;
        return $this;
    }

    /**
     * Adds as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @return self
     * @param \DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId
     */
    public function addToLicenseOrClaimRequestId(\DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId)
    {
        $this->licenseOrClaimRequestId[] = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * isset licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRequestId($index)
    {
        return isset($this->licenseOrClaimRequestId[$index]);
    }

    /**
     * unset licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRequestId($index)
    {
        unset($this->licenseOrClaimRequestId[$index]);
    }

    /**
     * Gets as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @return \DDEX\ddexC\ProprietaryIdType[]
     */
    public function getLicenseOrClaimRequestId()
    {
        return $this->licenseOrClaimRequestId;
    }

    /**
     * Sets a new licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(array $licenseOrClaimRequestId = null)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }
}


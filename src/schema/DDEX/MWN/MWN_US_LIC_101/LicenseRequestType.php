<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing LicenseRequestType
 *
 * A Composite containing details of a request for a License.
 * XSD Type: LicenseRequest
 */
class LicenseRequestType
{
    /**
     * A Composite containing details of an Identifier of the LicenseRequest.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $licenseRequestId
     */
    private $licenseRequestId = null;

    /**
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $relatedLicenseRequestId
     */
    private $relatedLicenseRequestId = [
        
    ];

    /**
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string $requestRightShareReference
     */
    private $requestRightShareReference = null;

    /**
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $requestReleaseReference
     */
    private $requestReleaseReference = [
        
    ];

    /**
     * A Reference for a LicenseCondition (specific to this Message). This is a LocalLicenseConditionAnchorReference starting with the letter E.
     *
     * @var string $requestConditionReference
     */
    private $requestConditionReference = null;

    /**
     * Gets as licenseRequestId
     *
     * A Composite containing details of an Identifier of the LicenseRequest.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType
     */
    public function getLicenseRequestId()
    {
        return $this->licenseRequestId;
    }

    /**
     * Sets a new licenseRequestId
     *
     * A Composite containing details of an Identifier of the LicenseRequest.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $licenseRequestId
     * @return self
     */
    public function setLicenseRequestId(\DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $licenseRequestId)
    {
        $this->licenseRequestId = $licenseRequestId;
        return $this;
    }

    /**
     * Adds as relatedLicenseRequestId
     *
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $relatedLicenseRequestId
     */
    public function addToRelatedLicenseRequestId(\DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $relatedLicenseRequestId)
    {
        $this->relatedLicenseRequestId[] = $relatedLicenseRequestId;
        return $this;
    }

    /**
     * isset relatedLicenseRequestId
     *
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedLicenseRequestId($index)
    {
        return isset($this->relatedLicenseRequestId[$index]);
    }

    /**
     * unset relatedLicenseRequestId
     *
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedLicenseRequestId($index)
    {
        unset($this->relatedLicenseRequestId[$index]);
    }

    /**
     * Gets as relatedLicenseRequestId
     *
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[]
     */
    public function getRelatedLicenseRequestId()
    {
        return $this->relatedLicenseRequestId;
    }

    /**
     * Sets a new relatedLicenseRequestId
     *
     * A Composite containing details of an Identifier of a LicenseRequest that is replaced or updated by the present LicenseRequest.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $relatedLicenseRequestId
     * @return self
     */
    public function setRelatedLicenseRequestId(array $relatedLicenseRequestId = null)
    {
        $this->relatedLicenseRequestId = $relatedLicenseRequestId;
        return $this;
    }

    /**
     * Gets as requestRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string
     */
    public function getRequestRightShareReference()
    {
        return $this->requestRightShareReference;
    }

    /**
     * Sets a new requestRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $requestRightShareReference
     * @return self
     */
    public function setRequestRightShareReference($requestRightShareReference)
    {
        $this->requestRightShareReference = $requestRightShareReference;
        return $this;
    }

    /**
     * Adds as requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $requestReleaseReference
     */
    public function addToRequestReleaseReference($requestReleaseReference)
    {
        $this->requestReleaseReference[] = $requestReleaseReference;
        return $this;
    }

    /**
     * isset requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestReleaseReference($index)
    {
        return isset($this->requestReleaseReference[$index]);
    }

    /**
     * unset requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestReleaseReference($index)
    {
        unset($this->requestReleaseReference[$index]);
    }

    /**
     * Gets as requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getRequestReleaseReference()
    {
        return $this->requestReleaseReference;
    }

    /**
     * Sets a new requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $requestReleaseReference
     * @return self
     */
    public function setRequestReleaseReference(array $requestReleaseReference = null)
    {
        $this->requestReleaseReference = $requestReleaseReference;
        return $this;
    }

    /**
     * Gets as requestConditionReference
     *
     * A Reference for a LicenseCondition (specific to this Message). This is a LocalLicenseConditionAnchorReference starting with the letter E.
     *
     * @return string
     */
    public function getRequestConditionReference()
    {
        return $this->requestConditionReference;
    }

    /**
     * Sets a new requestConditionReference
     *
     * A Reference for a LicenseCondition (specific to this Message). This is a LocalLicenseConditionAnchorReference starting with the letter E.
     *
     * @param string $requestConditionReference
     * @return self
     */
    public function setRequestConditionReference($requestConditionReference)
    {
        $this->requestConditionReference = $requestConditionReference;
        return $this;
    }
}


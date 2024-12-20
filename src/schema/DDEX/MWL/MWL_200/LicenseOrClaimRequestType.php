<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing LicenseOrClaimRequestType
 *
 * A ddex:Composite containing details of a request for a ddex:License or ddex:Claim.
 * XSD Type: LicenseOrClaimRequest
 */
class LicenseOrClaimRequestType
{
    /**
     * A ddex:Composite containing details of an ddex:Identifier of mwl:LicenseOrClaimRequest.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = null;

    /**
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string[] $requestWorkReference
     */
    private $requestWorkReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $requestResourceReference
     */
    private $requestResourceReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $requestReleaseReference
     */
    private $requestReleaseReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $requestRightShareReference
     */
    private $requestRightShareReference = [
        
    ];

    /**
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @var string[] $requestConditionReference
     */
    private $requestConditionReference = [
        
    ];

    /**
     * A Date by which the requestor suggests the ddex:Licensor provides Licenses or ddex:Claims (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DateTime $timeFrame
     */
    private $timeFrame = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType[] $relatedLicenseOrClaimId
     */
    private $relatedLicenseOrClaimId = [
        
    ];

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
    public function setLicenseOrClaimRequestId(\DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * Adds as requestWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return self
     * @param string $requestWorkReference
     */
    public function addToRequestWorkReference($requestWorkReference)
    {
        $this->requestWorkReference[] = $requestWorkReference;
        return $this;
    }

    /**
     * isset requestWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestWorkReference($index)
    {
        return isset($this->requestWorkReference[$index]);
    }

    /**
     * unset requestWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestWorkReference($index)
    {
        unset($this->requestWorkReference[$index]);
    }

    /**
     * Gets as requestWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string[]
     */
    public function getRequestWorkReference()
    {
        return $this->requestWorkReference;
    }

    /**
     * Sets a new requestWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $requestWorkReference
     * @return self
     */
    public function setRequestWorkReference(array $requestWorkReference = null)
    {
        $this->requestWorkReference = $requestWorkReference;
        return $this;
    }

    /**
     * Adds as requestResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $requestResourceReference
     */
    public function addToRequestResourceReference($requestResourceReference)
    {
        $this->requestResourceReference[] = $requestResourceReference;
        return $this;
    }

    /**
     * isset requestResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestResourceReference($index)
    {
        return isset($this->requestResourceReference[$index]);
    }

    /**
     * unset requestResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestResourceReference($index)
    {
        unset($this->requestResourceReference[$index]);
    }

    /**
     * Gets as requestResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getRequestResourceReference()
    {
        return $this->requestResourceReference;
    }

    /**
     * Sets a new requestResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $requestResourceReference
     * @return self
     */
    public function setRequestResourceReference(array $requestResourceReference = null)
    {
        $this->requestResourceReference = $requestResourceReference;
        return $this;
    }

    /**
     * Adds as requestReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
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
     * Adds as requestRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $requestRightShareReference
     */
    public function addToRequestRightShareReference($requestRightShareReference)
    {
        $this->requestRightShareReference[] = $requestRightShareReference;
        return $this;
    }

    /**
     * isset requestRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestRightShareReference($index)
    {
        return isset($this->requestRightShareReference[$index]);
    }

    /**
     * unset requestRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestRightShareReference($index)
    {
        unset($this->requestRightShareReference[$index]);
    }

    /**
     * Gets as requestRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getRequestRightShareReference()
    {
        return $this->requestRightShareReference;
    }

    /**
     * Sets a new requestRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $requestRightShareReference
     * @return self
     */
    public function setRequestRightShareReference(array $requestRightShareReference = null)
    {
        $this->requestRightShareReference = $requestRightShareReference;
        return $this;
    }

    /**
     * Adds as requestConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @return self
     * @param string $requestConditionReference
     */
    public function addToRequestConditionReference($requestConditionReference)
    {
        $this->requestConditionReference[] = $requestConditionReference;
        return $this;
    }

    /**
     * isset requestConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestConditionReference($index)
    {
        return isset($this->requestConditionReference[$index]);
    }

    /**
     * unset requestConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestConditionReference($index)
    {
        unset($this->requestConditionReference[$index]);
    }

    /**
     * Gets as requestConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @return string[]
     */
    public function getRequestConditionReference()
    {
        return $this->requestConditionReference;
    }

    /**
     * Sets a new requestConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message). This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param string $requestConditionReference
     * @return self
     */
    public function setRequestConditionReference(array $requestConditionReference = null)
    {
        $this->requestConditionReference = $requestConditionReference;
        return $this;
    }

    /**
     * Gets as timeFrame
     *
     * A Date by which the requestor suggests the ddex:Licensor provides Licenses or ddex:Claims (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DateTime
     */
    public function getTimeFrame()
    {
        return $this->timeFrame;
    }

    /**
     * Sets a new timeFrame
     *
     * A Date by which the requestor suggests the ddex:Licensor provides Licenses or ddex:Claims (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DateTime $timeFrame
     * @return self
     */
    public function setTimeFrame(?\DateTime $timeFrame = null)
    {
        $this->timeFrame = $timeFrame;
        return $this;
    }

    /**
     * Adds as relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @return self
     * @param \DDEX\ddexC\RightsAgreementIdType $relatedLicenseOrClaimId
     */
    public function addToRelatedLicenseOrClaimId(\DDEX\ddexC\RightsAgreementIdType $relatedLicenseOrClaimId)
    {
        $this->relatedLicenseOrClaimId[] = $relatedLicenseOrClaimId;
        return $this;
    }

    /**
     * isset relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedLicenseOrClaimId($index)
    {
        return isset($this->relatedLicenseOrClaimId[$index]);
    }

    /**
     * unset relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedLicenseOrClaimId($index)
    {
        unset($this->relatedLicenseOrClaimId[$index]);
    }

    /**
     * Gets as relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType[]
     */
    public function getRelatedLicenseOrClaimId()
    {
        return $this->relatedLicenseOrClaimId;
    }

    /**
     * Sets a new relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim that has previously been granted and that may be relevant in the current licensing context.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType[] $relatedLicenseOrClaimId
     * @return self
     */
    public function setRelatedLicenseOrClaimId(array $relatedLicenseOrClaimId = null)
    {
        $this->relatedLicenseOrClaimId = $relatedLicenseOrClaimId;
        return $this;
    }
}


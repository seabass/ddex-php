<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing RejectedLicenseOrClaimType
 *
 * A ddex:Composite containing details of a
 *  ddex:License or ddex:Claim that is rejected.
 * XSD Type: RejectedLicenseOrClaim
 */
class RejectedLicenseOrClaimType
{
    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the rejected ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @var string[] $rejectionWorkReference
     */
    private $rejectionWorkReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @var string[] $rejectionResourceReference
     */
    private $rejectionResourceReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @var string[] $rejectionReleaseReference
     */
    private $rejectionReleaseReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @var string[] $rejectionRightShareReference
     */
    private $rejectionRightShareReference = [
        
    ];

    /**
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @var string[] $rejectionConditionReference
     */
    private $rejectionConditionReference = [
        
    ];

    /**
     * A ddex:Composite containing a reason for a
     *  rejecting a ddex:License.
     *
     * @var \DDEX\ddexC\LicenseRejectionReasonType $licenseRejectionReason
     */
    private $licenseRejectionReason = null;

    /**
     * A ddex:Flag indicating that all
     *  ddex:MusicalWorks subject to the rejected ddex:License or ddex:Claim are in the
     *  ddex:PublicDomain (=Yes) or not (=No).
     *
     * @var bool $isPublicDomainWork
     */
    private $isPublicDomainWork = null;

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the rejected ddex:License or ddex:Claim.
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
     *  ddex:Identifier of the rejected ddex:License or ddex:Claim.
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
     * Adds as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request that is referred
     *  to.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(array $licenseOrClaimRequestId = null)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * Adds as rejectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return self
     * @param string $rejectionWorkReference
     */
    public function addToRejectionWorkReference($rejectionWorkReference)
    {
        $this->rejectionWorkReference[] = $rejectionWorkReference;
        return $this;
    }

    /**
     * isset rejectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionWorkReference($index)
    {
        return isset($this->rejectionWorkReference[$index]);
    }

    /**
     * unset rejectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionWorkReference($index)
    {
        unset($this->rejectionWorkReference[$index]);
    }

    /**
     * Gets as rejectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return string[]
     */
    public function getRejectionWorkReference()
    {
        return $this->rejectionWorkReference;
    }

    /**
     * Sets a new rejectionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param string $rejectionWorkReference
     * @return self
     */
    public function setRejectionWorkReference(array $rejectionWorkReference = null)
    {
        $this->rejectionWorkReference = $rejectionWorkReference;
        return $this;
    }

    /**
     * Adds as rejectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @return self
     * @param string $rejectionResourceReference
     */
    public function addToRejectionResourceReference($rejectionResourceReference)
    {
        $this->rejectionResourceReference[] = $rejectionResourceReference;
        return $this;
    }

    /**
     * isset rejectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionResourceReference($index)
    {
        return isset($this->rejectionResourceReference[$index]);
    }

    /**
     * unset rejectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionResourceReference($index)
    {
        unset($this->rejectionResourceReference[$index]);
    }

    /**
     * Gets as rejectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @return string[]
     */
    public function getRejectionResourceReference()
    {
        return $this->rejectionResourceReference;
    }

    /**
     * Sets a new rejectionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in the
     *  ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting
     *  with the letter A.
     *
     * @param string $rejectionResourceReference
     * @return self
     */
    public function setRejectionResourceReference(array $rejectionResourceReference = null)
    {
        $this->rejectionResourceReference = $rejectionResourceReference;
        return $this;
    }

    /**
     * Adds as rejectionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @return self
     * @param string $rejectionReleaseReference
     */
    public function addToRejectionReleaseReference($rejectionReleaseReference)
    {
        $this->rejectionReleaseReference[] = $rejectionReleaseReference;
        return $this;
    }

    /**
     * isset rejectionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionReleaseReference($index)
    {
        return isset($this->rejectionReleaseReference[$index]);
    }

    /**
     * unset rejectionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionReleaseReference($index)
    {
        unset($this->rejectionReleaseReference[$index]);
    }

    /**
     * Gets as rejectionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @return string[]
     */
    public function getRejectionReleaseReference()
    {
        return $this->rejectionReleaseReference;
    }

    /**
     * Sets a new rejectionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param string $rejectionReleaseReference
     * @return self
     */
    public function setRejectionReleaseReference(array $rejectionReleaseReference = null)
    {
        $this->rejectionReleaseReference = $rejectionReleaseReference;
        return $this;
    }

    /**
     * Adds as rejectionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @return self
     * @param string $rejectionRightShareReference
     */
    public function addToRejectionRightShareReference($rejectionRightShareReference)
    {
        $this->rejectionRightShareReference[] = $rejectionRightShareReference;
        return $this;
    }

    /**
     * isset rejectionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionRightShareReference($index)
    {
        return isset($this->rejectionRightShareReference[$index]);
    }

    /**
     * unset rejectionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionRightShareReference($index)
    {
        unset($this->rejectionRightShareReference[$index]);
    }

    /**
     * Gets as rejectionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @return string[]
     */
    public function getRejectionRightShareReference()
    {
        return $this->rejectionRightShareReference;
    }

    /**
     * Sets a new rejectionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param string $rejectionRightShareReference
     * @return self
     */
    public function setRejectionRightShareReference(array $rejectionRightShareReference = null)
    {
        $this->rejectionRightShareReference = $rejectionRightShareReference;
        return $this;
    }

    /**
     * Adds as rejectionConditionReference
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @return self
     * @param string $rejectionConditionReference
     */
    public function addToRejectionConditionReference($rejectionConditionReference)
    {
        $this->rejectionConditionReference[] = $rejectionConditionReference;
        return $this;
    }

    /**
     * isset rejectionConditionReference
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectionConditionReference($index)
    {
        return isset($this->rejectionConditionReference[$index]);
    }

    /**
     * unset rejectionConditionReference
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectionConditionReference($index)
    {
        unset($this->rejectionConditionReference[$index]);
    }

    /**
     * Gets as rejectionConditionReference
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @return string[]
     */
    public function getRejectionConditionReference()
    {
        return $this->rejectionConditionReference;
    }

    /**
     * Sets a new rejectionConditionReference
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @param string $rejectionConditionReference
     * @return self
     */
    public function setRejectionConditionReference(array $rejectionConditionReference = null)
    {
        $this->rejectionConditionReference = $rejectionConditionReference;
        return $this;
    }

    /**
     * Gets as licenseRejectionReason
     *
     * A ddex:Composite containing a reason for a
     *  rejecting a ddex:License.
     *
     * @return \DDEX\ddexC\LicenseRejectionReasonType
     */
    public function getLicenseRejectionReason()
    {
        return $this->licenseRejectionReason;
    }

    /**
     * Sets a new licenseRejectionReason
     *
     * A ddex:Composite containing a reason for a
     *  rejecting a ddex:License.
     *
     * @param \DDEX\ddexC\LicenseRejectionReasonType $licenseRejectionReason
     * @return self
     */
    public function setLicenseRejectionReason(\DDEX\ddexC\LicenseRejectionReasonType $licenseRejectionReason)
    {
        $this->licenseRejectionReason = $licenseRejectionReason;
        return $this;
    }

    /**
     * Gets as isPublicDomainWork
     *
     * A ddex:Flag indicating that all
     *  ddex:MusicalWorks subject to the rejected ddex:License or ddex:Claim are in the
     *  ddex:PublicDomain (=Yes) or not (=No).
     *
     * @return bool
     */
    public function getIsPublicDomainWork()
    {
        return $this->isPublicDomainWork;
    }

    /**
     * Sets a new isPublicDomainWork
     *
     * A ddex:Flag indicating that all
     *  ddex:MusicalWorks subject to the rejected ddex:License or ddex:Claim are in the
     *  ddex:PublicDomain (=Yes) or not (=No).
     *
     * @param bool $isPublicDomainWork
     * @return self
     */
    public function setIsPublicDomainWork($isPublicDomainWork)
    {
        $this->isPublicDomainWork = $isPublicDomainWork;
        return $this;
    }
}


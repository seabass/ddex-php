<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing RefusedLicenseOrClaimType
 *
 * A ddex:Composite containing details of a ddex:License or ddex:Claim that is refused.
 * XSD Type: RefusedLicenseOrClaim
 */
class RefusedLicenseOrClaimType
{
    /**
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
     *
     * @var \DDEX\ddexC\RelatedLicenseOrClaimIdType[] $relatedLicenseOrClaimId
     */
    private $relatedLicenseOrClaimId = [
        
    ];

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the refused ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string[] $refusalWorkReference
     */
    private $refusalWorkReference = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $refusalResourceReference
     */
    private $refusalResourceReference = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\ResourceIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $refusalReleaseReference
     */
    private $refusalReleaseReference = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $refusalRightShareReference
     */
    private $refusalRightShareReference = [
        
    ];

    /**
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @var string[] $refusalConditionReference
     */
    private $refusalConditionReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the reason for the refusal.
     *
     * @var \DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason
     */
    private $reason = null;

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
     *
     * @return self
     * @param \DDEX\ddexC\RelatedLicenseOrClaimIdType $relatedLicenseOrClaimId
     */
    public function addToRelatedLicenseOrClaimId(\DDEX\ddexC\RelatedLicenseOrClaimIdType $relatedLicenseOrClaimId)
    {
        $this->relatedLicenseOrClaimId[] = $relatedLicenseOrClaimId;
        return $this;
    }

    /**
     * isset relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
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
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
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
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
     *
     * @return \DDEX\ddexC\RelatedLicenseOrClaimIdType[]
     */
    public function getRelatedLicenseOrClaimId()
    {
        return $this->relatedLicenseOrClaimId;
    }

    /**
     * Sets a new relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present request.
     *
     * @param \DDEX\ddexC\RelatedLicenseOrClaimIdType[] $relatedLicenseOrClaimId
     * @return self
     */
    public function setRelatedLicenseOrClaimId(array $relatedLicenseOrClaimId = null)
    {
        $this->relatedLicenseOrClaimId = $relatedLicenseOrClaimId;
        return $this;
    }

    /**
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the refused ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of an ddex:Identifier of the refused ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
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
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is referred to.
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
     * Adds as refusalWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return self
     * @param string $refusalWorkReference
     */
    public function addToRefusalWorkReference($refusalWorkReference)
    {
        $this->refusalWorkReference[] = $refusalWorkReference;
        return $this;
    }

    /**
     * isset refusalWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusalWorkReference($index)
    {
        return isset($this->refusalWorkReference[$index]);
    }

    /**
     * unset refusalWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusalWorkReference($index)
    {
        unset($this->refusalWorkReference[$index]);
    }

    /**
     * Gets as refusalWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string[]
     */
    public function getRefusalWorkReference()
    {
        return $this->refusalWorkReference;
    }

    /**
     * Sets a new refusalWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $refusalWorkReference
     * @return self
     */
    public function setRefusalWorkReference(array $refusalWorkReference = null)
    {
        $this->refusalWorkReference = $refusalWorkReference;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\ddexC\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkId($index)
    {
        return isset($this->musicalWorkId[$index]);
    }

    /**
     * unset musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkId($index)
    {
        unset($this->musicalWorkId[$index]);
    }

    /**
     * Gets as musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Adds as refusalResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $refusalResourceReference
     */
    public function addToRefusalResourceReference($refusalResourceReference)
    {
        $this->refusalResourceReference[] = $refusalResourceReference;
        return $this;
    }

    /**
     * isset refusalResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusalResourceReference($index)
    {
        return isset($this->refusalResourceReference[$index]);
    }

    /**
     * unset refusalResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusalResourceReference($index)
    {
        unset($this->refusalResourceReference[$index]);
    }

    /**
     * Gets as refusalResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getRefusalResourceReference()
    {
        return $this->refusalResourceReference;
    }

    /**
     * Sets a new refusalResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message) that is part of the Release(s) referred to in the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $refusalResourceReference
     * @return self
     */
    public function setRefusalResourceReference(array $refusalResourceReference = null)
    {
        $this->refusalResourceReference = $refusalResourceReference;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceIdType $resourceId
     */
    public function addToResourceId(\DDEX\ddexC\ResourceIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceId($index)
    {
        return isset($this->resourceId[$index]);
    }

    /**
     * unset resourceId
     *
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceId($index)
    {
        unset($this->resourceId[$index]);
    }

    /**
     * Gets as resourceId
     *
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @return \DDEX\ddexC\ResourceIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A ddex:Composite containing details of ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to in the ddex:License or ddex:Claim.
     *
     * @param \DDEX\ddexC\ResourceIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId = null)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as refusalReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $refusalReleaseReference
     */
    public function addToRefusalReleaseReference($refusalReleaseReference)
    {
        $this->refusalReleaseReference[] = $refusalReleaseReference;
        return $this;
    }

    /**
     * isset refusalReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusalReleaseReference($index)
    {
        return isset($this->refusalReleaseReference[$index]);
    }

    /**
     * unset refusalReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusalReleaseReference($index)
    {
        unset($this->refusalReleaseReference[$index]);
    }

    /**
     * Gets as refusalReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getRefusalReleaseReference()
    {
        return $this->refusalReleaseReference;
    }

    /**
     * Sets a new refusalReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $refusalReleaseReference
     * @return self
     */
    public function setRefusalReleaseReference(array $refusalReleaseReference = null)
    {
        $this->refusalReleaseReference = $refusalReleaseReference;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\ddexC\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DDEX\ddexC\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or ddex:Claim. If available, a ddex:GRid should always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DDEX\ddexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as refusalRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $refusalRightShareReference
     */
    public function addToRefusalRightShareReference($refusalRightShareReference)
    {
        $this->refusalRightShareReference[] = $refusalRightShareReference;
        return $this;
    }

    /**
     * isset refusalRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusalRightShareReference($index)
    {
        return isset($this->refusalRightShareReference[$index]);
    }

    /**
     * unset refusalRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusalRightShareReference($index)
    {
        unset($this->refusalRightShareReference[$index]);
    }

    /**
     * Gets as refusalRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getRefusalRightShareReference()
    {
        return $this->refusalRightShareReference;
    }

    /**
     * Sets a new refusalRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare (specific to this ddex:Message) that is referred to in the ddex:License or ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $refusalRightShareReference
     * @return self
     */
    public function setRefusalRightShareReference(array $refusalRightShareReference = null)
    {
        $this->refusalRightShareReference = $refusalRightShareReference;
        return $this;
    }

    /**
     * Adds as refusalConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @return self
     * @param string $refusalConditionReference
     */
    public function addToRefusalConditionReference($refusalConditionReference)
    {
        $this->refusalConditionReference[] = $refusalConditionReference;
        return $this;
    }

    /**
     * isset refusalConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefusalConditionReference($index)
    {
        return isset($this->refusalConditionReference[$index]);
    }

    /**
     * unset refusalConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefusalConditionReference($index)
    {
        unset($this->refusalConditionReference[$index]);
    }

    /**
     * Gets as refusalConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @return string[]
     */
    public function getRefusalConditionReference()
    {
        return $this->refusalConditionReference;
    }

    /**
     * Sets a new refusalConditionReference
     *
     * A ddex:Reference for a LicenseOrClaimCondition (specific to this ddex:Message) that is part of the ddex:License or ddex:Claim. This is a ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter E.
     *
     * @param string $refusalConditionReference
     * @return self
     */
    public function setRefusalConditionReference(array $refusalConditionReference = null)
    {
        $this->refusalConditionReference = $refusalConditionReference;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A ddex:Composite containing details of the reason for the refusal.
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
     * A ddex:Composite containing details of the reason for the refusal.
     *
     * @param \DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason
     * @return self
     */
    public function setReason(\DDEX\ddexC\LicenseOrClaimRefusalReasonType $reason)
    {
        $this->reason = $reason;
        return $this;
    }
}


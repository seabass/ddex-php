<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing LicenseOrClaimType
 *
 * A ddex:Composite containing details of a
 *  ddex:License or ddex:Claim.
 * XSD Type: LicenseOrClaim
 */
class LicenseOrClaimType
{
    /**
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $licenseOrClaimId
     */
    private $licenseOrClaimId = null;

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
     *
     * @var \DDEX\ddexC\RelatedLicenseOrClaimIdType[] $relatedLicenseOrClaimId
     */
    private $relatedLicenseOrClaimId = [
        
    ];

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
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the LicenseOrClaim within the ddex:Release or ddex:Creation which
     *  contains it. This is a ddex:LocalLicenseOrClaimAnchor starting with the letter
     *  L.
     *
     * @var string $licenseOrClaimReference
     */
    private $licenseOrClaimReference = null;

    /**
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @var string[] $licenseOrClaimWorkReference
     */
    private $licenseOrClaimWorkReference = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @var string[] $licenseOrClaimResourceReference
     */
    private $licenseOrClaimResourceReference = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
     *
     * @var \DDEX\ddexC\ResourceIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @var string[] $licenseOrClaimReleaseReference
     */
    private $licenseOrClaimReleaseReference = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @var string[] $licenseOrClaimRightShareReference
     */
    private $licenseOrClaimRightShareReference = [
        
    ];

    /**
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @var string[] $licenseOrClaimReferenceToLicenseOrClaimCondition
     */
    private $licenseOrClaimReferenceToLicenseOrClaimCondition = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddex:License or ddex:Claim details do not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * Gets as licenseOrClaimId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim.
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
     *  ddex:Identifier of the ddex:License or ddex:Claim.
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
     * Adds as relatedLicenseOrClaimId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
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
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:License or ddex:Claim replaced or updated by the present
     *  request.
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
     * Gets as licenseOrClaimReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the LicenseOrClaim within the ddex:Release or ddex:Creation which
     *  contains it. This is a ddex:LocalLicenseOrClaimAnchor starting with the letter
     *  L.
     *
     * @return string
     */
    public function getLicenseOrClaimReference()
    {
        return $this->licenseOrClaimReference;
    }

    /**
     * Sets a new licenseOrClaimReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the LicenseOrClaim within the ddex:Release or ddex:Creation which
     *  contains it. This is a ddex:LocalLicenseOrClaimAnchor starting with the letter
     *  L.
     *
     * @param string $licenseOrClaimReference
     * @return self
     */
    public function setLicenseOrClaimReference($licenseOrClaimReference)
    {
        $this->licenseOrClaimReference = $licenseOrClaimReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimWorkReference
     *
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return self
     * @param string $licenseOrClaimWorkReference
     */
    public function addToLicenseOrClaimWorkReference($licenseOrClaimWorkReference)
    {
        $this->licenseOrClaimWorkReference[] = $licenseOrClaimWorkReference;
        return $this;
    }

    /**
     * isset licenseOrClaimWorkReference
     *
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimWorkReference($index)
    {
        return isset($this->licenseOrClaimWorkReference[$index]);
    }

    /**
     * unset licenseOrClaimWorkReference
     *
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimWorkReference($index)
    {
        unset($this->licenseOrClaimWorkReference[$index]);
    }

    /**
     * Gets as licenseOrClaimWorkReference
     *
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @return string[]
     */
    public function getLicenseOrClaimWorkReference()
    {
        return $this->licenseOrClaimWorkReference;
    }

    /**
     * Sets a new licenseOrClaimWorkReference
     *
     * A ddex:Reference for a ddex:Work
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalMusicalWorkAnchorReference
     *  starting with the letter W.
     *
     * @param string $licenseOrClaimWorkReference
     * @return self
     */
    public function setLicenseOrClaimWorkReference(array $licenseOrClaimWorkReference = null)
    {
        $this->licenseOrClaimWorkReference = $licenseOrClaimWorkReference;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  a ddex:MusicalWorkId of a ddex:MusicalWork that is part of the Release(s)
     *  referred to in the ddex:License or ddex:Claim.
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
     * Adds as licenseOrClaimResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @return self
     * @param string $licenseOrClaimResourceReference
     */
    public function addToLicenseOrClaimResourceReference($licenseOrClaimResourceReference)
    {
        $this->licenseOrClaimResourceReference[] = $licenseOrClaimResourceReference;
        return $this;
    }

    /**
     * isset licenseOrClaimResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimResourceReference($index)
    {
        return isset($this->licenseOrClaimResourceReference[$index]);
    }

    /**
     * unset licenseOrClaimResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimResourceReference($index)
    {
        unset($this->licenseOrClaimResourceReference[$index]);
    }

    /**
     * Gets as licenseOrClaimResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @return string[]
     */
    public function getLicenseOrClaimResourceReference()
    {
        return $this->licenseOrClaimResourceReference;
    }

    /**
     * Sets a new licenseOrClaimResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message) that is part of the Release(s) referred to in
     *  the ddex:License or ddex:Claim. This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param string $licenseOrClaimResourceReference
     * @return self
     */
    public function setLicenseOrClaimResourceReference(array $licenseOrClaimResourceReference = null)
    {
        $this->licenseOrClaimResourceReference = $licenseOrClaimResourceReference;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
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
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource that is part of the Release(s) referred to
     *  in the ddex:License or ddex:Claim.
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
     * Adds as licenseOrClaimReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @return self
     * @param string $licenseOrClaimReleaseReference
     */
    public function addToLicenseOrClaimReleaseReference($licenseOrClaimReleaseReference)
    {
        $this->licenseOrClaimReleaseReference[] = $licenseOrClaimReleaseReference;
        return $this;
    }

    /**
     * isset licenseOrClaimReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimReleaseReference($index)
    {
        return isset($this->licenseOrClaimReleaseReference[$index]);
    }

    /**
     * unset licenseOrClaimReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimReleaseReference($index)
    {
        unset($this->licenseOrClaimReleaseReference[$index]);
    }

    /**
     * Gets as licenseOrClaimReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @return string[]
     */
    public function getLicenseOrClaimReleaseReference()
    {
        return $this->licenseOrClaimReleaseReference;
    }

    /**
     * Sets a new licenseOrClaimReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalReleaseAnchorReference starting with the letter
     *  R.
     *
     * @param string $licenseOrClaimReleaseReference
     * @return self
     */
    public function setLicenseOrClaimReleaseReference(array $licenseOrClaimReleaseReference = null)
    {
        $this->licenseOrClaimReleaseReference = $licenseOrClaimReleaseReference;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release that is referred to in the ddex:License or
     *  ddex:Claim. If available, a ddex:GRid should always to be used. If the
     *  ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction
     *  of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of
     *  the ddex:PhysicalProduct may be used instead.
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
     * Adds as licenseOrClaimRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @return self
     * @param string $licenseOrClaimRightShareReference
     */
    public function addToLicenseOrClaimRightShareReference($licenseOrClaimRightShareReference)
    {
        $this->licenseOrClaimRightShareReference[] = $licenseOrClaimRightShareReference;
        return $this;
    }

    /**
     * isset licenseOrClaimRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRightShareReference($index)
    {
        return isset($this->licenseOrClaimRightShareReference[$index]);
    }

    /**
     * unset licenseOrClaimRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRightShareReference($index)
    {
        unset($this->licenseOrClaimRightShareReference[$index]);
    }

    /**
     * Gets as licenseOrClaimRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @return string[]
     */
    public function getLicenseOrClaimRightShareReference()
    {
        return $this->licenseOrClaimRightShareReference;
    }

    /**
     * Sets a new licenseOrClaimRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message) that is referred to in the ddex:License or
     *  ddex:Claim. This is a ddex:LocalRightShareAnchorReference starting with the letter
     *  S.
     *
     * @param string $licenseOrClaimRightShareReference
     * @return self
     */
    public function setLicenseOrClaimRightShareReference(array $licenseOrClaimRightShareReference = null)
    {
        $this->licenseOrClaimRightShareReference = $licenseOrClaimRightShareReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimReferenceToLicenseOrClaimCondition
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @return self
     * @param string $licenseOrClaimReferenceToLicenseOrClaimCondition
     */
    public function addToLicenseOrClaimReferenceToLicenseOrClaimCondition($licenseOrClaimReferenceToLicenseOrClaimCondition)
    {
        $this->licenseOrClaimReferenceToLicenseOrClaimCondition[] = $licenseOrClaimReferenceToLicenseOrClaimCondition;
        return $this;
    }

    /**
     * isset licenseOrClaimReferenceToLicenseOrClaimCondition
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
    public function issetLicenseOrClaimReferenceToLicenseOrClaimCondition($index)
    {
        return isset($this->licenseOrClaimReferenceToLicenseOrClaimCondition[$index]);
    }

    /**
     * unset licenseOrClaimReferenceToLicenseOrClaimCondition
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
    public function unsetLicenseOrClaimReferenceToLicenseOrClaimCondition($index)
    {
        unset($this->licenseOrClaimReferenceToLicenseOrClaimCondition[$index]);
    }

    /**
     * Gets as licenseOrClaimReferenceToLicenseOrClaimCondition
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @return string[]
     */
    public function getLicenseOrClaimReferenceToLicenseOrClaimCondition()
    {
        return $this->licenseOrClaimReferenceToLicenseOrClaimCondition;
    }

    /**
     * Sets a new licenseOrClaimReferenceToLicenseOrClaimCondition
     *
     * A ddex:Reference for a
     *  LicenseOrClaimCondition (specific to this ddex:Message) that is part of the
     *  ddex:License or ddex:Claim. This is a
     *  ddex:LocalLicenseOrClaimConditionAnchorReference starting with the letter
     *  E.
     *
     * @param string $licenseOrClaimReferenceToLicenseOrClaimCondition
     * @return self
     */
    public function setLicenseOrClaimReferenceToLicenseOrClaimCondition(array $licenseOrClaimReferenceToLicenseOrClaimCondition = null)
    {
        $this->licenseOrClaimReferenceToLicenseOrClaimCondition = $licenseOrClaimReferenceToLicenseOrClaimCondition;
        return $this;
    }
}


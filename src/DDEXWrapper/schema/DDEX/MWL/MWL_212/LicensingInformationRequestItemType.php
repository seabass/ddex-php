<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing LicensingInformationRequestItemType
 *
 * A ddex:Composite containing details of a request
 *  for licensing information to be provided to augment any information previously
 *  communicated.
 * XSD Type: LicensingInformationRequestItem
 */
class LicensingInformationRequestItemType
{
    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the LicensingInformationRequestItem as defined in IETF RfC 4646. The
     *  default is the same as indicated for the containing composite. ddex:Language and
     *  Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the LicensingInformationRequestItem.
     *
     * @var \DDEX\ddexC\ProprietaryIdType $informationRequestItemId
     */
    private $informationRequestItemId = null;

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = [
        
    ];

    /**
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $rightShareId
     */
    private $rightShareId = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
     *
     * @var \DDEX\ddexC\ResourceIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing a description
     *  of the nature of the additional information requested.
     *
     * @var \DDEX\ddexC\AnnotationType $informationRequested
     */
    private $informationRequested = null;

    /**
     * A ddex:Composite containing a description
     *  of the reason for the additional information requested.
     *
     * @var \DDEX\ddexC\ReasonType $reasonForInformationRequest
     */
    private $reasonForInformationRequest = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the
     *  ddex:Elements of the LicensingInformationRequestItem as defined in IETF RfC 4646. The
     *  default is the same as indicated for the containing composite. ddex:Language and
     *  Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the
     *  ddex:Elements of the LicensingInformationRequestItem as defined in IETF RfC 4646. The
     *  default is the same as indicated for the containing composite. ddex:Language and
     *  Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as informationRequestItemId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the LicensingInformationRequestItem.
     *
     * @return \DDEX\ddexC\ProprietaryIdType
     */
    public function getInformationRequestItemId()
    {
        return $this->informationRequestItemId;
    }

    /**
     * Sets a new informationRequestItemId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the LicensingInformationRequestItem.
     *
     * @param \DDEX\ddexC\ProprietaryIdType $informationRequestItemId
     * @return self
     */
    public function setInformationRequestItemId(\DDEX\ddexC\ProprietaryIdType $informationRequestItemId)
    {
        $this->informationRequestItemId = $informationRequestItemId;
        return $this;
    }

    /**
     * Adds as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
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
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
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
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
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
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
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
     *  ddex:Identifier of the ddex:License or ddex:Claim request for which additional
     *  information is requested.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(array $licenseOrClaimRequestId)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * Adds as rightShareId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @return self
     * @param \DDEX\ddexC\ProprietaryIdType $rightShareId
     */
    public function addToRightShareId(\DDEX\ddexC\ProprietaryIdType $rightShareId)
    {
        $this->rightShareId[] = $rightShareId;
        return $this;
    }

    /**
     * isset rightShareId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareId($index)
    {
        return isset($this->rightShareId[$index]);
    }

    /**
     * unset rightShareId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareId($index)
    {
        unset($this->rightShareId[$index]);
    }

    /**
     * Gets as rightShareId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @return \DDEX\ddexC\ProprietaryIdType[]
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A ddex:Composite containing details of an
     *  ddex:Identifier of a ddex:RightShare for which additional information is
     *  requested.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $rightShareId
     * @return self
     */
    public function setRightShareId(array $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
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
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
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
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
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
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
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
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of a ddex:MusicalWork for which additional information is
     *  requested.
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
     * Adds as resourceId
     *
     * A ddex:Composite containing details of
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
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
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
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
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
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
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
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
     *  ddex:ResourceIds of a ddex:Resource for which additional information is
     *  requested.
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
     * Adds as releaseId
     *
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
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
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
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
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
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
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
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
     *  ddex:ReleaseIds of a ddex:Release for which additional information is requested.
     *  If available, a ddex:GRid should always to be used. If the ddex:Release contains
     *  only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used
     *  instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct
     *  (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used
     *  instead.
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
     * Gets as informationRequested
     *
     * A ddex:Composite containing a description
     *  of the nature of the additional information requested.
     *
     * @return \DDEX\ddexC\AnnotationType
     */
    public function getInformationRequested()
    {
        return $this->informationRequested;
    }

    /**
     * Sets a new informationRequested
     *
     * A ddex:Composite containing a description
     *  of the nature of the additional information requested.
     *
     * @param \DDEX\ddexC\AnnotationType $informationRequested
     * @return self
     */
    public function setInformationRequested(\DDEX\ddexC\AnnotationType $informationRequested)
    {
        $this->informationRequested = $informationRequested;
        return $this;
    }

    /**
     * Gets as reasonForInformationRequest
     *
     * A ddex:Composite containing a description
     *  of the reason for the additional information requested.
     *
     * @return \DDEX\ddexC\ReasonType
     */
    public function getReasonForInformationRequest()
    {
        return $this->reasonForInformationRequest;
    }

    /**
     * Sets a new reasonForInformationRequest
     *
     * A ddex:Composite containing a description
     *  of the reason for the additional information requested.
     *
     * @param \DDEX\ddexC\ReasonType $reasonForInformationRequest
     * @return self
     */
    public function setReasonForInformationRequest(\DDEX\ddexC\ReasonType $reasonForInformationRequest)
    {
        $this->reasonForInformationRequest = $reasonForInformationRequest;
        return $this;
    }
}


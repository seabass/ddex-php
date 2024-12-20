<?php

namespace DDEX\ddexC;

/**
 * Class representing RelatedReleaseType
 *
 * A ddex:Composite containing details of a ddex:Release (or a ddex:PhysicalProduct or a ddex:DigitalProduct derived from such a ddex:Release) which is related to a ddex:Resource, ddex:Release or ddex:Product.
 * XSD Type: RelatedRelease
 */
class RelatedReleaseType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ReleatedRelease as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ddex:Release.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @var \DDEX\ddexC\ReleaseSummaryDetailsByTerritoryType[] $releaseSummaryDetailsByTerritory
     */
    private $releaseSummaryDetailsByTerritory = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the relationship between the two ddex:Releases.
     *
     * @var \DDEX\ddexC\ReleaseRelationshipTypeType $releaseRelationshipType
     */
    private $releaseRelationshipType = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ReleatedRelease as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ReleatedRelease as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @param \DDEX\ddexC\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ddex:Release.
     *
     * @return \DDEX\ddexC\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the ddex:Release.
     *
     * @param \DDEX\ddexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DDEX\ddexC\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseSummaryDetailsByTerritory
     *
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseSummaryDetailsByTerritoryType $releaseSummaryDetailsByTerritory
     */
    public function addToReleaseSummaryDetailsByTerritory(\DDEX\ddexC\ReleaseSummaryDetailsByTerritoryType $releaseSummaryDetailsByTerritory)
    {
        $this->releaseSummaryDetailsByTerritory[] = $releaseSummaryDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseSummaryDetailsByTerritory
     *
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseSummaryDetailsByTerritory($index)
    {
        return isset($this->releaseSummaryDetailsByTerritory[$index]);
    }

    /**
     * unset releaseSummaryDetailsByTerritory
     *
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseSummaryDetailsByTerritory($index)
    {
        unset($this->releaseSummaryDetailsByTerritory[$index]);
    }

    /**
     * Gets as releaseSummaryDetailsByTerritory
     *
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @return \DDEX\ddexC\ReleaseSummaryDetailsByTerritoryType[]
     */
    public function getReleaseSummaryDetailsByTerritory()
    {
        return $this->releaseSummaryDetailsByTerritory;
    }

    /**
     * Sets a new releaseSummaryDetailsByTerritory
     *
     * A ddex:Composite containing summary details of ddex:Descriptors and other attributes of the ddex:Release which may vary according to ddex:Territory of ddex:Release. ddex:Territory of ddex:Release may be the world.
     *
     * @param \DDEX\ddexC\ReleaseSummaryDetailsByTerritoryType[] $releaseSummaryDetailsByTerritory
     * @return self
     */
    public function setReleaseSummaryDetailsByTerritory(array $releaseSummaryDetailsByTerritory = null)
    {
        $this->releaseSummaryDetailsByTerritory = $releaseSummaryDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ddexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Gets as releaseRelationshipType
     *
     * A ddex:Composite containing details of the ddex:Type of the relationship between the two ddex:Releases.
     *
     * @return \DDEX\ddexC\ReleaseRelationshipTypeType
     */
    public function getReleaseRelationshipType()
    {
        return $this->releaseRelationshipType;
    }

    /**
     * Sets a new releaseRelationshipType
     *
     * A ddex:Composite containing details of the ddex:Type of the relationship between the two ddex:Releases.
     *
     * @param \DDEX\ddexC\ReleaseRelationshipTypeType $releaseRelationshipType
     * @return self
     */
    public function setReleaseRelationshipType(\DDEX\ddexC\ReleaseRelationshipTypeType $releaseRelationshipType)
    {
        $this->releaseRelationshipType = $releaseRelationshipType;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the related ddex:Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DDEX\ddexC\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the collection of tracks for the ddex:Release (e.g. the equivalent physical album on vinyl) was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DDEX\ddexC\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }
}


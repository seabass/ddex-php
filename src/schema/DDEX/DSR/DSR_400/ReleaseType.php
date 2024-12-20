<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing ReleaseType
 *
 * A ddex:Composite containing details of a ddex:DDEX ddex:Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the dsr:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @var string[] $releaseReference
     */
    private $releaseReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the dsr:Release.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @var \DDEX\ddexC\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @var \DDEX\ddexC\ReleaseCollectionReferenceType[] $releaseCollectionReference
     */
    private $releaseCollectionReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @var \DDEX\ddexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @var \DDEX\ddexC\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     */
    private $releaseDetailsByTerritory = [
        
    ];

    /**
     * The sum of the ddex:Durations of all ddex:Resources contained in the dsr:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the dsr:Release.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @var \DDEX\ddexC\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @var \DDEX\ddexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:URL from which the dsr:Release was sold.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was created.
     *
     * @var \DDEX\ddexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * The orignal ddex:Language of the dsr:Release (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @var string $originalLanguage
     */
    private $originalLanguage = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the dsr:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the dsr:Release as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the dsr:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the dsr:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * Adds as releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @return self
     * @param string $releaseReference
     */
    public function addToReleaseReference($releaseReference)
    {
        $this->releaseReference[] = $releaseReference;
        return $this;
    }

    /**
     * isset releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseReference($index)
    {
        return isset($this->releaseReference[$index]);
    }

    /**
     * unset releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseReference($index)
    {
        unset($this->releaseReference[$index]);
    }

    /**
     * Gets as releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @return string[]
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the dsr:Release. This is a ddex:LocalReleaseAnchor starting with the letter R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference(array $releaseReference = null)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the dsr:Release.
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
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the dsr:Release.
     *
     * @param \DDEX\ddexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\ddexC\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseResourceReference
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DDEX\ddexC\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReferenceList[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseResourceReferenceList($index)
    {
        return isset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * unset releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseResourceReferenceList($index)
    {
        unset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * Gets as releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @return \DDEX\ddexC\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReferenceList()
    {
        return $this->releaseResourceReferenceList;
    }

    /**
     * Sets a new releaseResourceReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Resources contained in the dsr:Release.
     *
     * @param \DDEX\ddexC\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     * @return self
     */
    public function setReleaseResourceReferenceList(array $releaseResourceReferenceList = null)
    {
        $this->releaseResourceReferenceList = $releaseResourceReferenceList;
        return $this;
    }

    /**
     * Adds as releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseCollectionReferenceType $releaseCollectionReference
     */
    public function addToReleaseCollectionReference(\DDEX\ddexC\ReleaseCollectionReferenceType $releaseCollectionReference)
    {
        $this->releaseCollectionReference[] = $releaseCollectionReference;
        return $this;
    }

    /**
     * isset releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseCollectionReference($index)
    {
        return isset($this->releaseCollectionReference[$index]);
    }

    /**
     * unset releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseCollectionReference($index)
    {
        unset($this->releaseCollectionReference[$index]);
    }

    /**
     * Gets as releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @return \DDEX\ddexC\ReleaseCollectionReferenceType[]
     */
    public function getReleaseCollectionReference()
    {
        return $this->releaseCollectionReference;
    }

    /**
     * Sets a new releaseCollectionReference
     *
     * A ddex:Composite containing a ddex:Reference for a ddex:Collection (specific to this ddex:Message). The ddex:LocalAnchorReference in this ddex:Composite is a xs:string starting with the letter X.
     *
     * @param \DDEX\ddexC\ReleaseCollectionReferenceType[] $releaseCollectionReference
     * @return self
     */
    public function setReleaseCollectionReference(array $releaseCollectionReference = null)
    {
        $this->releaseCollectionReference = $releaseCollectionReference;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\ddexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @return \DDEX\ddexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the dsr:Release to ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory ddex:Composite.
     *
     * @param \DDEX\ddexC\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Adds as releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DDEX\ddexC\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory[] = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDetailsByTerritory($index)
    {
        return isset($this->releaseDetailsByTerritory[$index]);
    }

    /**
     * unset releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDetailsByTerritory($index)
    {
        unset($this->releaseDetailsByTerritory[$index]);
    }

    /**
     * Gets as releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @return \DDEX\ddexC\ReleaseDetailsByTerritoryType[]
     */
    public function getReleaseDetailsByTerritory()
    {
        return $this->releaseDetailsByTerritory;
    }

    /**
     * Sets a new releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the dsr:Release which may vary according to ddex:Territory of release.
     *
     * @param \DDEX\ddexC\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     * @return self
     */
    public function setReleaseDetailsByTerritory(array $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The sum of the ddex:Durations of all ddex:Resources contained in the dsr:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The sum of the ddex:Durations of all ddex:Resources contained in the dsr:Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as durationOfMusicalContent
     *
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getDurationOfMusicalContent()
    {
        return $this->durationOfMusicalContent;
    }

    /**
     * Sets a new durationOfMusicalContent
     *
     * The ddex:Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $durationOfMusicalContent
     * @return self
     */
    public function setDurationOfMusicalContent(?\DateInterval $durationOfMusicalContent = null)
    {
        $this->durationOfMusicalContent = $durationOfMusicalContent;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the dsr:Release.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the dsr:Release.
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
     * Adds as pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @return self
     * @param \DDEX\ddexC\PLineType $pLine
     */
    public function addToPLine(\DDEX\ddexC\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @return \DDEX\ddexC\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the dsr:Release.
     *
     * @param \DDEX\ddexC\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @return self
     * @param \DDEX\ddexC\CLineType $cLine
     */
    public function addToCLine(\DDEX\ddexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @return \DDEX\ddexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the dsr:Release.
     *
     * @param \DDEX\ddexC\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A ddex:URL from which the dsr:Release was sold.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A ddex:URL from which the dsr:Release was sold.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was created.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was created.
     *
     * @param \DDEX\ddexC\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\ddexC\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the dsr:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DDEX\ddexC\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalLanguage
     *
     * The orignal ddex:Language of the dsr:Release (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @return string
     */
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * Sets a new originalLanguage
     *
     * The orignal ddex:Language of the dsr:Release (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param string $originalLanguage
     * @return self
     */
    public function setOriginalLanguage($originalLanguage)
    {
        $this->originalLanguage = $originalLanguage;
        return $this;
    }
}


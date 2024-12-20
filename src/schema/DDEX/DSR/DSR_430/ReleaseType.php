<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing ReleaseType
 *
 * A Composite containing details of a DDEX Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=True) or not (=False). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMainRelease
     */
    private $isMainRelease = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string[] $releaseReference
     */
    private $releaseReference = [
        
    ];

    /**
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @var \DDEX\DSR\DSR_430\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[] $releaseCollectionReferenceList
     */
    private $releaseCollectionReferenceList = null;

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     */
    private $releaseDetailsByTerritory = [
        
    ];

    /**
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * The Duration of the video content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $durationOfVideoContent
     */
    private $durationOfVideoContent = null;

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @var \DDEX\DSR\DSR_430\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of the PLine for the Release.
     *
     * @var \DDEX\DSR\DSR_430\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Release.
     *
     * @var \DDEX\DSR\DSR_430\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A URL from which the Release was sold.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\DSR\DSR_430\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\DSR\DSR_430\EventDateType $originalReleaseDate
     */
    private $originalReleaseDate = null;

    /**
     * The orignal Language of the Release (represented by an ISO 639-2 LanguageCode).
     *
     * @var string $originalLanguage
     */
    private $originalLanguage = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Release as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isMainRelease
     *
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=True) or not (=False). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsMainRelease()
    {
        return $this->isMainRelease;
    }

    /**
     * Sets a new isMainRelease
     *
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=True) or not (=False). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isMainRelease
     * @return self
     */
    public function setIsMainRelease($isMainRelease)
    {
        $this->isMainRelease = $isMainRelease;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\DSR\DSR_430\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
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
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseIdType[] $releaseId
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
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
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
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
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
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
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
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
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
     * The Identifier (specific to the Message) of the Release. This is a LocalReleaseAnchor starting with the letter R.
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
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @return \DDEX\DSR\DSR_430\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @param \DDEX\DSR\DSR_430\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\DSR\DSR_430\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as releaseResourceReference
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DDEX\DSR\DSR_430\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReferenceList[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
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
     * A Composite containing details of one or more Resources contained in the Release.
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
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReferenceList()
    {
        return $this->releaseResourceReferenceList;
    }

    /**
     * Sets a new releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseResourceReferenceType[] $releaseResourceReferenceList
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
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType $releaseCollectionReference
     */
    public function addToReleaseCollectionReferenceList(\DDEX\DSR\DSR_430\ReleaseCollectionReferenceType $releaseCollectionReference)
    {
        $this->releaseCollectionReferenceList[] = $releaseCollectionReference;
        return $this;
    }

    /**
     * isset releaseCollectionReferenceList
     *
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseCollectionReferenceList($index)
    {
        return isset($this->releaseCollectionReferenceList[$index]);
    }

    /**
     * unset releaseCollectionReferenceList
     *
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseCollectionReferenceList($index)
    {
        unset($this->releaseCollectionReferenceList[$index]);
    }

    /**
     * Gets as releaseCollectionReferenceList
     *
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[]
     */
    public function getReleaseCollectionReferenceList()
    {
        return $this->releaseCollectionReferenceList;
    }

    /**
     * Sets a new releaseCollectionReferenceList
     *
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[] $releaseCollectionReferenceList
     * @return self
     */
    public function setReleaseCollectionReferenceList(array $releaseCollectionReferenceList = null)
    {
        $this->releaseCollectionReferenceList = $releaseCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\DSR\DSR_430\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
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
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
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
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseTypeType[] $releaseType
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
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DDEX\DSR\DSR_430\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory[] = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseDetailsByTerritoryType[]
     */
    public function getReleaseDetailsByTerritory()
    {
        return $this->releaseDetailsByTerritory;
    }

    /**
     * Sets a new releaseDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
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
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The sum of the Durations of all Resources contained in the Release (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Gets as durationOfVideoContent
     *
     * The Duration of the video content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDurationOfVideoContent()
    {
        return $this->durationOfVideoContent;
    }

    /**
     * Sets a new durationOfVideoContent
     *
     * The Duration of the video content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $durationOfVideoContent
     * @return self
     */
    public function setDurationOfVideoContent(?\DateInterval $durationOfVideoContent = null)
    {
        $this->durationOfVideoContent = $durationOfVideoContent;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @return \DDEX\DSR\DSR_430\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @param \DDEX\DSR\DSR_430\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\DSR\DSR_430\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\PLineType $pLine
     */
    public function addToPLine(\DDEX\DSR\DSR_430\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the Release.
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
     * A Composite containing details of the PLine for the Release.
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
     * A Composite containing details of the PLine for the Release.
     *
     * @return \DDEX\DSR\DSR_430\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @param \DDEX\DSR\DSR_430\PLineType[] $pLine
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
     * A Composite containing details of the CLine for the Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\CLineType $cLine
     */
    public function addToCLine(\DDEX\DSR\DSR_430\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Release.
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
     * A Composite containing details of the CLine for the Release.
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
     * A Composite containing details of the CLine for the Release.
     *
     * @return \DDEX\DSR\DSR_430\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @param \DDEX\DSR\DSR_430\CLineType[] $cLine
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
     * A URL from which the Release was sold.
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
     * A URL from which the Release was sold.
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
     * A Composite containing details of the Date and Place of the Event in which the Release was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\DSR\DSR_430\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\DSR\DSR_430\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\DSR\DSR_430\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\DSR\DSR_430\EventDateType
     */
    public function getOriginalReleaseDate()
    {
        return $this->originalReleaseDate;
    }

    /**
     * Sets a new originalReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\DSR\DSR_430\EventDateType $originalReleaseDate
     * @return self
     */
    public function setOriginalReleaseDate(?\DDEX\DSR\DSR_430\EventDateType $originalReleaseDate = null)
    {
        $this->originalReleaseDate = $originalReleaseDate;
        return $this;
    }

    /**
     * Gets as originalLanguage
     *
     * The orignal Language of the Release (represented by an ISO 639-2 LanguageCode).
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
     * The orignal Language of the Release (represented by an ISO 639-2 LanguageCode).
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


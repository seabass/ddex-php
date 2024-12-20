<?php

namespace DDEX\MWN\MWN_100;

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
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @var \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     */
    private $releaseCollectionReferenceList = null;

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A Composite containing details of Descriptors and other attributes of the Release which may vary according to Territory of release.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
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
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @var \DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of the PLine for the Release.
     *
     * @var \DDEX\MWN\MWN_100\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Release.
     *
     * @var \DDEX\MWN\MWN_100\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

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
     * Adds as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\MWN\MWN_100\ReleaseIdType $releaseId)
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
     * @return \DDEX\MWN\MWN_100\ReleaseIdType[]
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
     * @param \DDEX\MWN\MWN_100\ReleaseIdType[] $releaseId
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
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @return \DDEX\MWN\MWN_100\ReferenceTitleType
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
     * @param \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle)
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
     * @param \DDEX\MWN\MWN_100\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DDEX\MWN\MWN_100\ReleaseResourceReferenceType $releaseResourceReference)
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
     * @return \DDEX\MWN\MWN_100\ReleaseResourceReferenceType[]
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
     * @param \DDEX\MWN\MWN_100\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     * @return self
     */
    public function setReleaseResourceReferenceList(array $releaseResourceReferenceList = null)
    {
        $this->releaseResourceReferenceList = $releaseResourceReferenceList;
        return $this;
    }

    /**
     * Gets as releaseCollectionReferenceList
     *
     * A Composite containing details of one or more Collections contained in the Release.
     *
     * @return \DDEX\MWN\MWN_100\ReleaseCollectionReferenceListType
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
     * @param \DDEX\MWN\MWN_100\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     * @return self
     */
    public function setReleaseCollectionReferenceList(?\DDEX\MWN\MWN_100\ReleaseCollectionReferenceListType $releaseCollectionReferenceList = null)
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
     * @param \DDEX\MWN\MWN_100\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\MWN\MWN_100\ReleaseTypeType $releaseType)
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
     * @return \DDEX\MWN\MWN_100\ReleaseTypeType[]
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
     * @param \DDEX\MWN\MWN_100\ReleaseTypeType[] $releaseType
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
     * @param \DDEX\MWN\MWN_100\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DDEX\MWN\MWN_100\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
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
     * @return \DDEX\MWN\MWN_100\ReleaseDetailsByTerritoryType[]
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
     * @param \DDEX\MWN\MWN_100\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
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
     * Gets as rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Release.
     *
     * @return \DDEX\MWN\MWN_100\RightsAgreementIdType
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
     * @param \DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId = null)
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
     * @param \DDEX\MWN\MWN_100\PLineType $pLine
     */
    public function addToPLine(\DDEX\MWN\MWN_100\PLineType $pLine)
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
     * @return \DDEX\MWN\MWN_100\PLineType[]
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
     * @param \DDEX\MWN\MWN_100\PLineType[] $pLine
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
     * @param \DDEX\MWN\MWN_100\CLineType $cLine
     */
    public function addToCLine(\DDEX\MWN\MWN_100\CLineType $cLine)
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
     * @return \DDEX\MWN\MWN_100\CLineType[]
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
     * @param \DDEX\MWN\MWN_100\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }
}


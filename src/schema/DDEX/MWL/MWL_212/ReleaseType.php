<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing ReleaseType
 *
 * A ddex:Composite containing details of a
 *  ddex:DDEX ddex:Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the ddexC:Release as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Flag indicating whether the
     *  ddex:Release ddex:Element was updated (=True) or not (=False). The ddex:Flag may only
     *  be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:Release data with the now provided
     *  data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of the
     *  ddex:ReferenceTitle of the ddexC:Release.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
     *
     * @var \DDEX\ddexC\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of one
     *  or more ddex:Collections contained in the ddexC:Release.
     *
     * @var \DDEX\ddexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     */
    private $releaseCollectionReferenceList = null;

    /**
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
     *
     * @var \DDEX\ddexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
     *
     * @var \DDEX\MWL\MWL_212\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
     */
    private $releaseDetailsByTerritory = [
        
    ];

    /**
     * The sum of the ddex:Durations of all
     *  ddex:Resources contained in the ddexC:Release (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ddex:Duration of the musical content
     *  (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for
     *  the MusicalWork(s) used in the ddexC:Release.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
     *
     * @var \DDEX\ddexC\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
     *
     * @var \DDEX\ddexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:Release. Used to link the ddex:Release to one or more
     *  Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter
     *  R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the ddex:Release was or will be first made
     *  globally available for Usage in its current form, whether for physical or
     *  electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $globalReleaseDate
     */
    private $globalReleaseDate = null;

    /**
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the collection of tracks for the ddex:Release
     *  (e.g. the equivalent physical album on vinyl) was or will be first made globally
     *  available for Usage, whether for physical or electronic/online distribution (in
     *  ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $globalOriginalReleaseDate
     */
    private $globalOriginalReleaseDate = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the
     *  ddex:Elements of the ddexC:Release as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
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
     *  ddex:Elements of the ddexC:Release as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
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
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the
     *  ddex:Release ddex:Element was updated (=True) or not (=False). The ddex:Flag may only
     *  be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:Release data with the now provided
     *  data.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The ddex:Flag indicating whether the
     *  ddex:Release ddex:Element was updated (=True) or not (=False). The ddex:Flag may only
     *  be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:Release data with the now provided
     *  data.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A ddex:Composite containing details of
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
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
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
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
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
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
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
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
     *  ddex:ReleaseIds. If available, a ddex:GRid shall always to be used. If the
     *  ddexC:Release contains only one ddex:SoundRecording, the ddex:ISRC of the
     *  ddex:SoundRecording may be used instead. If the ddexC:Release is an abstraction of
     *  a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the
     *  ddex:PhysicalProduct may be used instead. More than one of these identifiers may
     *  be provided.
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
     * A ddex:Composite containing details of the
     *  ddex:ReferenceTitle of the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:ReferenceTitle of the ddexC:Release.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Resources contained in the ddexC:Release.
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
     * Gets as releaseCollectionReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:Collections contained in the ddexC:Release.
     *
     * @return \DDEX\ddexC\ReleaseCollectionReferenceListType
     */
    public function getReleaseCollectionReferenceList()
    {
        return $this->releaseCollectionReferenceList;
    }

    /**
     * Sets a new releaseCollectionReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:Collections contained in the ddexC:Release.
     *
     * @param \DDEX\ddexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList
     * @return self
     */
    public function setReleaseCollectionReferenceList(?\DDEX\ddexC\ReleaseCollectionReferenceListType $releaseCollectionReferenceList = null)
    {
        $this->releaseCollectionReferenceList = $releaseCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
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
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
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
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
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
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
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
     * A ddex:Composite containing details of the
     *  form in which a ddex:ReleaseCreator anticipates offering the ddexC:Release to
     *  ddex:Consumers. This may be overridden by the ddex:ReleaseType for specific
     *  Territories as specified in the ReleaseDetailsByTerritory
     *  ddex:Composite.
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
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\MWL\MWL_212\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory
     */
    public function addToReleaseDetailsByTerritory(\DDEX\MWL\MWL_212\ReleaseDetailsByTerritoryType $releaseDetailsByTerritory)
    {
        $this->releaseDetailsByTerritory[] = $releaseDetailsByTerritory;
        return $this;
    }

    /**
     * isset releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
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
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
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
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
     *
     * @return \DDEX\MWL\MWL_212\ReleaseDetailsByTerritoryType[]
     */
    public function getReleaseDetailsByTerritory()
    {
        return $this->releaseDetailsByTerritory;
    }

    /**
     * Sets a new releaseDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddexC:Release which may vary
     *  according to ddex:Territory of release.
     *
     * @param \DDEX\MWL\MWL_212\ReleaseDetailsByTerritoryType[] $releaseDetailsByTerritory
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
     * The sum of the ddex:Durations of all
     *  ddex:Resources contained in the ddexC:Release (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S).
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
     * The sum of the ddex:Durations of all
     *  ddex:Resources contained in the ddexC:Release (using the ISO 8601:2004
     *  PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case
     *  characters are part of the xs:string, e.g. one hour, two minutes and three seconds
     *  would be PT1H2M3S).
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
     * The ddex:Duration of the musical content
     *  (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the musical content
     *  (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters
     *  indicate variables, upper case characters are part of the xs:string, e.g. one
     *  hour, two minutes and three seconds would be PT1H2M3S).
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
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for
     *  the MusicalWork(s) used in the ddexC:Release.
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
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for
     *  the MusicalWork(s) used in the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:PLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
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
     * A ddex:Composite containing details of the
     *  ddex:CLine for the ddexC:Release.
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
     * Gets as releaseReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:Release. Used to link the ddex:Release to one or more
     *  Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter
     *  R.
     *
     * @return string
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:Release. Used to link the ddex:Release to one or more
     *  Deal(s). This is a ddex:LocalReleaseAnchor starting with the letter
     *  R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference($releaseReference)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Adds as musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @return self
     * @param string $musicalWorkRightsClaimType
     */
    public function addToMusicalWorkRightsClaimType($musicalWorkRightsClaimType)
    {
        $this->musicalWorkRightsClaimType[] = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * isset musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkRightsClaimType($index)
    {
        return isset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * unset musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkRightsClaimType($index)
    {
        unset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * Gets as musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @return string[]
     */
    public function getMusicalWorkRightsClaimType()
    {
        return $this->musicalWorkRightsClaimType;
    }

    /**
     * Sets a new musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @param string $musicalWorkRightsClaimType
     * @return self
     */
    public function setMusicalWorkRightsClaimType(array $musicalWorkRightsClaimType = null)
    {
        $this->musicalWorkRightsClaimType = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * Gets as globalReleaseDate
     *
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the ddex:Release was or will be first made
     *  globally available for Usage in its current form, whether for physical or
     *  electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getGlobalReleaseDate()
    {
        return $this->globalReleaseDate;
    }

    /**
     * Sets a new globalReleaseDate
     *
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the ddex:Release was or will be first made
     *  globally available for Usage in its current form, whether for physical or
     *  electronic/online distribution (in ISO 8601:2004 format:
     *  YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $globalReleaseDate
     * @return self
     */
    public function setGlobalReleaseDate(?\DDEX\ddexC\EventDateType $globalReleaseDate = null)
    {
        $this->globalReleaseDate = $globalReleaseDate;
        return $this;
    }

    /**
     * Gets as globalOriginalReleaseDate
     *
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the collection of tracks for the ddex:Release
     *  (e.g. the equivalent physical album on vinyl) was or will be first made globally
     *  available for Usage, whether for physical or electronic/online distribution (in
     *  ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getGlobalOriginalReleaseDate()
    {
        return $this->globalOriginalReleaseDate;
    }

    /**
     * Sets a new globalOriginalReleaseDate
     *
     * A ddex:Composite containing details of the
     *  Date of the ddex:Event in which the collection of tracks for the ddex:Release
     *  (e.g. the equivalent physical album on vinyl) was or will be first made globally
     *  available for Usage, whether for physical or electronic/online distribution (in
     *  ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $globalOriginalReleaseDate
     * @return self
     */
    public function setGlobalOriginalReleaseDate(?\DDEX\ddexC\EventDateType $globalOriginalReleaseDate = null)
    {
        $this->globalOriginalReleaseDate = $globalOriginalReleaseDate;
        return $this;
    }
}


<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing VideoType
 *
 * A ddex:Composite containing details of a ddex:Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the mwl:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided mwl:Video data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the mwl:Video.
     *
     * @var \DDEX\ddexC\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @var \DDEX\ddexC\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $indirectVideoId
     */
    private $indirectVideoId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the mwl:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the mwl:Video.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @var \DDEX\ddexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the mwl:Video.
     *
     * @var \DDEX\ddexC\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * The ddex:Flag indicating whether a ddex:Work used in the ddex:Video is a ddex:Medley (=True) or not (=False).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is a ddex:Potpourri (=True) or not (=False).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is instrumental (=True) or not (=False).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is used as background to other audio or audiovisual material (=True) or not (=False).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The ddex:Flag indicating whether the mwl:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
     *
     * @var bool $performerInformationRequired
     */
    private $performerInformationRequired = null;

    /**
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The ddex:Duration of the mwl:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the mwl:Video.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @var \DDEX\ddexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     */
    private $videoCollectionReferenceList = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @var \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @var \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was created.
     *
     * @var \DDEX\ddexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was originally mastered (either in analogue or digital form).
     *
     * @var \DDEX\ddexC\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @var \DDEX\ddexC\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
    ];

    /**
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the mwl:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Flag indicating whether the mwl:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided mwl:Video data with the now provided data.
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
     * The ddex:Flag indicating whether the mwl:Video ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided mwl:Video data with the now provided data.
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
     * Gets as videoType
     *
     * A ddex:Composite containing details of the ddex:Type of the mwl:Video.
     *
     * @return \DDEX\ddexC\VideoTypeType
     */
    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * Sets a new videoType
     *
     * A ddex:Composite containing details of the ddex:Type of the mwl:Video.
     *
     * @param \DDEX\ddexC\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DDEX\ddexC\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the mwl:Video is related to an ddex:Artist (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsArtistRelated()
    {
        return $this->isArtistRelated;
    }

    /**
     * Sets a new isArtistRelated
     *
     * The ddex:Flag indicating whether the mwl:Video is related to an ddex:Artist (=True) or not (=False).
     *
     * @param bool $isArtistRelated
     * @return self
     */
    public function setIsArtistRelated($isArtistRelated)
    {
        $this->isArtistRelated = $isArtistRelated;
        return $this;
    }

    /**
     * Adds as videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @return self
     * @param \DDEX\ddexC\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\ddexC\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoId($index)
    {
        return isset($this->videoId[$index]);
    }

    /**
     * unset videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoId($index)
    {
        unset($this->videoId[$index]);
    }

    /**
     * Gets as videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @return \DDEX\ddexC\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the mwl:Video.
     *
     * @param \DDEX\ddexC\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId = null)
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * Adds as indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $indirectVideoId
     */
    public function addToIndirectVideoId(\DDEX\ddexC\MusicalWorkIdType $indirectVideoId)
    {
        $this->indirectVideoId[] = $indirectVideoId;
        return $this;
    }

    /**
     * isset indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectVideoId($index)
    {
        return isset($this->indirectVideoId[$index]);
    }

    /**
     * unset indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectVideoId($index)
    {
        unset($this->indirectVideoId[$index]);
    }

    /**
     * Gets as indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getIndirectVideoId()
    {
        return $this->indirectVideoId;
    }

    /**
     * Sets a new indirectVideoId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the mwl:Video.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $indirectVideoId
     * @return self
     */
    public function setIndirectVideoId(array $indirectVideoId = null)
    {
        $this->indirectVideoId = $indirectVideoId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the mwl:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the mwl:Video within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the mwl:Video.
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
     * A ddex:Composite containing details of the ddex:ReferenceTitle of the mwl:Video.
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
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @return self
     * @param \DDEX\ddexC\TitleType $title
     */
    public function addToTitle(\DDEX\ddexC\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @return \DDEX\ddexC\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the mwl:Video.
     *
     * @param \DDEX\ddexC\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as instrumentationDescription
     *
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the mwl:Video.
     *
     * @return \DDEX\ddexC\DescriptionType
     */
    public function getInstrumentationDescription()
    {
        return $this->instrumentationDescription;
    }

    /**
     * Sets a new instrumentationDescription
     *
     * A ddex:Composite containing a ddex:Description of the ddex:Type of instrumentation of the MusicalWork(s) in the mwl:Video.
     *
     * @param \DDEX\ddexC\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DDEX\ddexC\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The ddex:Flag indicating whether a ddex:Work used in the ddex:Video is a ddex:Medley (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsMedley()
    {
        return $this->isMedley;
    }

    /**
     * Sets a new isMedley
     *
     * The ddex:Flag indicating whether a ddex:Work used in the ddex:Video is a ddex:Medley (=True) or not (=False).
     *
     * @param bool $isMedley
     * @return self
     */
    public function setIsMedley($isMedley)
    {
        $this->isMedley = $isMedley;
        return $this;
    }

    /**
     * Gets as isPotpourri
     *
     * The ddex:Flag indicating whether the mwl:Video is a ddex:Potpourri (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsPotpourri()
    {
        return $this->isPotpourri;
    }

    /**
     * Sets a new isPotpourri
     *
     * The ddex:Flag indicating whether the mwl:Video is a ddex:Potpourri (=True) or not (=False).
     *
     * @param bool $isPotpourri
     * @return self
     */
    public function setIsPotpourri($isPotpourri)
    {
        $this->isPotpourri = $isPotpourri;
        return $this;
    }

    /**
     * Gets as isInstrumental
     *
     * The ddex:Flag indicating whether the mwl:Video is instrumental (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsInstrumental()
    {
        return $this->isInstrumental;
    }

    /**
     * Sets a new isInstrumental
     *
     * The ddex:Flag indicating whether the mwl:Video is instrumental (=True) or not (=False).
     *
     * @param bool $isInstrumental
     * @return self
     */
    public function setIsInstrumental($isInstrumental)
    {
        $this->isInstrumental = $isInstrumental;
        return $this;
    }

    /**
     * Gets as isBackground
     *
     * The ddex:Flag indicating whether the mwl:Video is used as background to other audio or audiovisual material (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsBackground()
    {
        return $this->isBackground;
    }

    /**
     * Sets a new isBackground
     *
     * The ddex:Flag indicating whether the mwl:Video is used as background to other audio or audiovisual material (=True) or not (=False).
     *
     * @param bool $isBackground
     * @return self
     */
    public function setIsBackground($isBackground)
    {
        $this->isBackground = $isBackground;
        return $this;
    }

    /**
     * Gets as isHiddenResource
     *
     * The ddex:Flag indicating whether the mwl:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsHiddenResource()
    {
        return $this->isHiddenResource;
    }

    /**
     * Sets a new isHiddenResource
     *
     * The ddex:Flag indicating whether the mwl:Video is hidden in some way from the ddex:Consumer (=True) or not (=False).
     *
     * @param bool $isHiddenResource
     * @return self
     */
    public function setIsHiddenResource($isHiddenResource)
    {
        $this->isHiddenResource = $isHiddenResource;
        return $this;
    }

    /**
     * Gets as isBonusResource
     *
     * The ddex:Flag indicating whether the mwl:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsBonusResource()
    {
        return $this->isBonusResource;
    }

    /**
     * Sets a new isBonusResource
     *
     * The ddex:Flag indicating whether the mwl:Video is additional to those on the original ddex:Release of which this is a ddex:Version (=True) or not (=False).
     *
     * @param bool $isBonusResource
     * @return self
     */
    public function setIsBonusResource($isBonusResource)
    {
        $this->isBonusResource = $isBonusResource;
        return $this;
    }

    /**
     * Gets as performerInformationRequired
     *
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
     *
     * @return bool
     */
    public function getPerformerInformationRequired()
    {
        return $this->performerInformationRequired;
    }

    /**
     * Sets a new performerInformationRequired
     *
     * A ddex:Flag indicating whether performer information is required (=True) or not (=False) when communicating details of the ern:Video.
     *
     * @param bool $performerInformationRequired
     * @return self
     */
    public function setPerformerInformationRequired($performerInformationRequired)
    {
        $this->performerInformationRequired = $performerInformationRequired;
        return $this;
    }

    /**
     * Adds as languageOfPerformance
     *
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @return self
     * @param string $languageOfPerformance
     */
    public function addToLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance[] = $languageOfPerformance;
        return $this;
    }

    /**
     * isset languageOfPerformance
     *
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageOfPerformance($index)
    {
        return isset($this->languageOfPerformance[$index]);
    }

    /**
     * unset languageOfPerformance
     *
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageOfPerformance($index)
    {
        unset($this->languageOfPerformance[$index]);
    }

    /**
     * Gets as languageOfPerformance
     *
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @return string[]
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The ddex:Language of the ddex:Performance recorded in the mwl:Video (represented by an ISO 639-2 iso639a2:LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance(array $languageOfPerformance = null)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The ddex:Duration of the mwl:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The ddex:Duration of the mwl:Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the mwl:Video.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the mwl:Video.
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
     * Gets as videoCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @return \DDEX\ddexC\SoundRecordingCollectionReferenceListType
     */
    public function getVideoCollectionReferenceList()
    {
        return $this->videoCollectionReferenceList;
    }

    /**
     * Sets a new videoCollectionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:Collections. The referenced ddex:Collection has to be of ddex:CollectionType ddex:VideoChapter.
     *
     * @param \DDEX\ddexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     * @return self
     */
    public function setVideoCollectionReferenceList(?\DDEX\ddexC\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList = null)
    {
        $this->videoCollectionReferenceList = $videoCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\ddexC\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @return \DDEX\ddexC\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the mwl:Video.
     *
     * @param \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as resourceContainedResourceReference
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DDEX\ddexC\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContainedResourceReferenceList($index)
    {
        return isset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * unset resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContainedResourceReferenceList($index)
    {
        unset($this->resourceContainedResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @return \DDEX\ddexC\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current mwl:Video.
     *
     * @param \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was created.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was created.
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
     * Gets as masteredDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was originally mastered (either in analogue or digital form).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the mwl:Video was originally mastered (either in analogue or digital form).
     *
     * @param \DDEX\ddexC\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DDEX\ddexC\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Adds as videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ddexC\VideoDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DDEX\ddexC\VideoDetailsByTerritoryType $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory[] = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * isset videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoDetailsByTerritory($index)
    {
        return isset($this->videoDetailsByTerritory[$index]);
    }

    /**
     * unset videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoDetailsByTerritory($index)
    {
        unset($this->videoDetailsByTerritory[$index]);
    }

    /**
     * Gets as videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @return \DDEX\ddexC\VideoDetailsByTerritoryType[]
     */
    public function getVideoDetailsByTerritory()
    {
        return $this->videoDetailsByTerritory;
    }

    /**
     * Sets a new videoDetailsByTerritory
     *
     * A ddex:Composite containing details of ddex:Descriptors and other attributes of the mwl:Video which may vary according to ddex:Territory of release.
     *
     * @param \DDEX\ddexC\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * Adds as musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim related to a ddex:MusicalWork.
     *
     * @param string $musicalWorkRightsClaimType
     * @return self
     */
    public function setMusicalWorkRightsClaimType(array $musicalWorkRightsClaimType = null)
    {
        $this->musicalWorkRightsClaimType = $musicalWorkRightsClaimType;
        return $this;
    }
}


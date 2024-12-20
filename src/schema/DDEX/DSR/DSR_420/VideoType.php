<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The Language and script for the Elements of the Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the Type of the Video.
     *
     * @var \DDEX\DSR\DSR_420\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * The Flag indicating whether the Video is related to an Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of an Identifier of the Video.
     *
     * @var \DDEX\DSR\DSR_420\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @var \DDEX\DSR\DSR_420\MusicalWorkIdType[] $indirectVideoId
     */
    private $indirectVideoId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @var \DDEX\DSR\DSR_420\VideoCueSheetReferenceType[] $videoCueSheetReference
     */
    private $videoCueSheetReference = [
        
    ];

    /**
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @var \DDEX\DSR\DSR_420\ReasonType $reasonForCueSheetAbsence
     */
    private $reasonForCueSheetAbsence = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @var \DDEX\DSR\DSR_420\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of a Title of the Video.
     *
     * @var \DDEX\DSR\DSR_420\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @var \DDEX\DSR\DSR_420\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * The Flag indicating whether the Video is a Medley (=True) or not (=False).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The Flag indicating whether the Video is a Potpourri (=True) or not (=False).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The Flag indicating whether the Video is instrumental (=True) or not (=False).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the Video is used as background to other audio or audiovisual material (=True) or not (=False).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=True) or not (=False).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=True) or not (=False).
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
     *
     * @var string[] $languageOfPerformance
     */
    private $languageOfPerformance = [
        
    ];

    /**
     * The Duration of the Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $durationOfMusicalContent
     */
    private $durationOfMusicalContent = null;

    /**
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Video.
     *
     * @var \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @var \DDEX\DSR\DSR_420\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @var \DDEX\DSR\DSR_420\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was created.
     *
     * @var \DDEX\DSR\DSR_420\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (either in analogue or digital form).
     *
     * @var \DDEX\DSR\DSR_420\EventDateType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @var \DDEX\DSR\DSR_420\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
    ];

    /**
     * A URL from which the Video was sold.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Resource was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\DSR\DSR_420\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * The orignal Language of the Video (represented by an ISO 639-2 LanguageCode).
     *
     * @var string $originalLanguage
     */
    private $originalLanguage = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Video as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as videoType
     *
     * A Composite containing details of the Type of the Video.
     *
     * @return \DDEX\DSR\DSR_420\VideoTypeType
     */
    public function getVideoType()
    {
        return $this->videoType;
    }

    /**
     * Sets a new videoType
     *
     * A Composite containing details of the Type of the Video.
     *
     * @param \DDEX\DSR\DSR_420\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DDEX\DSR\DSR_420\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Video is related to an Artist (=True) or not (=False).
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
     * The Flag indicating whether the Video is related to an Artist (=True) or not (=False).
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
     * A Composite containing details of an Identifier of the Video.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\DSR\DSR_420\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of an Identifier of the Video.
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
     * A Composite containing details of an Identifier of the Video.
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
     * A Composite containing details of an Identifier of the Video.
     *
     * @return \DDEX\DSR\DSR_420\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of an Identifier of the Video.
     *
     * @param \DDEX\DSR\DSR_420\VideoIdType[] $videoId
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\MusicalWorkIdType $indirectVideoId
     */
    public function addToIndirectVideoId(\DDEX\DSR\DSR_420\MusicalWorkIdType $indirectVideoId)
    {
        $this->indirectVideoId[] = $indirectVideoId;
        return $this;
    }

    /**
     * isset indirectVideoId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return \DDEX\DSR\DSR_420\MusicalWorkIdType[]
     */
    public function getIndirectVideoId()
    {
        return $this->indirectVideoId;
    }

    /**
     * Sets a new indirectVideoId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @param \DDEX\DSR\DSR_420\MusicalWorkIdType[] $indirectVideoId
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
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * Adds as videoCueSheetReference
     *
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\VideoCueSheetReferenceType $videoCueSheetReference
     */
    public function addToVideoCueSheetReference(\DDEX\DSR\DSR_420\VideoCueSheetReferenceType $videoCueSheetReference)
    {
        $this->videoCueSheetReference[] = $videoCueSheetReference;
        return $this;
    }

    /**
     * isset videoCueSheetReference
     *
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoCueSheetReference($index)
    {
        return isset($this->videoCueSheetReference[$index]);
    }

    /**
     * unset videoCueSheetReference
     *
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoCueSheetReference($index)
    {
        unset($this->videoCueSheetReference[$index]);
    }

    /**
     * Gets as videoCueSheetReference
     *
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @return \DDEX\DSR\DSR_420\VideoCueSheetReferenceType[]
     */
    public function getVideoCueSheetReference()
    {
        return $this->videoCueSheetReference;
    }

    /**
     * Sets a new videoCueSheetReference
     *
     * A Composite containing a VideoCueSheetReference for a CueSheet (specific to this Message).
     *
     * @param \DDEX\DSR\DSR_420\VideoCueSheetReferenceType[] $videoCueSheetReference
     * @return self
     */
    public function setVideoCueSheetReference(array $videoCueSheetReference = null)
    {
        $this->videoCueSheetReference = $videoCueSheetReference;
        return $this;
    }

    /**
     * Gets as reasonForCueSheetAbsence
     *
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @return \DDEX\DSR\DSR_420\ReasonType
     */
    public function getReasonForCueSheetAbsence()
    {
        return $this->reasonForCueSheetAbsence;
    }

    /**
     * Sets a new reasonForCueSheetAbsence
     *
     * A Composite containing the textual Description of the reason for the Identifier being used as a proxy.
     *
     * @param \DDEX\DSR\DSR_420\ReasonType $reasonForCueSheetAbsence
     * @return self
     */
    public function setReasonForCueSheetAbsence(?\DDEX\DSR\DSR_420\ReasonType $reasonForCueSheetAbsence = null)
    {
        $this->reasonForCueSheetAbsence = $reasonForCueSheetAbsence;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @return \DDEX\DSR\DSR_420\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @param \DDEX\DSR\DSR_420\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\DSR\DSR_420\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the Video.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TitleType $title
     */
    public function addToTitle(\DDEX\DSR\DSR_420\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Video.
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
     * A Composite containing details of a Title of the Video.
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
     * A Composite containing details of a Title of the Video.
     *
     * @return \DDEX\DSR\DSR_420\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Video.
     *
     * @param \DDEX\DSR\DSR_420\TitleType[] $title
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
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @return \DDEX\DSR\DSR_420\DescriptionType
     */
    public function getInstrumentationDescription()
    {
        return $this->instrumentationDescription;
    }

    /**
     * Sets a new instrumentationDescription
     *
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @param \DDEX\DSR\DSR_420\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DDEX\DSR\DSR_420\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the Video is a Medley (=True) or not (=False).
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
     * The Flag indicating whether the Video is a Medley (=True) or not (=False).
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
     * The Flag indicating whether the Video is a Potpourri (=True) or not (=False).
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
     * The Flag indicating whether the Video is a Potpourri (=True) or not (=False).
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
     * The Flag indicating whether the Video is instrumental (=True) or not (=False).
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
     * The Flag indicating whether the Video is instrumental (=True) or not (=False).
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
     * The Flag indicating whether the Video is used as background to other audio or audiovisual material (=True) or not (=False).
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
     * The Flag indicating whether the Video is used as background to other audio or audiovisual material (=True) or not (=False).
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
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=True) or not (=False).
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
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=True) or not (=False).
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
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=True) or not (=False).
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
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=True) or not (=False).
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
     * Adds as languageOfPerformance
     *
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
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
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
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
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
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
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
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
     * The Language of the Performance recorded in the Video (represented by an ISO 639-2 LanguageCode).
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
     * The Duration of the Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The Duration of the Video (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * Gets as durationOfMusicalContent
     *
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The Duration of the musical content (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Video.
     *
     * @return \DDEX\DSR\DSR_420\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License, Claim, RightShare or contract for the MusicalWork(s) used in the Video.
     *
     * @param \DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\DSR\DSR_420\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\DSR\DSR_420\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Video.
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
     * A Composite containing details of one or more MusicalWorks contained in the Video.
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
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @return \DDEX\DSR\DSR_420\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @param \DDEX\DSR\DSR_420\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DDEX\DSR\DSR_420\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
    {
        $this->resourceContainedResourceReferenceList[] = $resourceContainedResourceReference;
        return $this;
    }

    /**
     * isset resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
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
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @return \DDEX\DSR\DSR_420\ResourceContainedResourceReferenceType[]
     */
    public function getResourceContainedResourceReferenceList()
    {
        return $this->resourceContainedResourceReferenceList;
    }

    /**
     * Sets a new resourceContainedResourceReferenceList
     *
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @param \DDEX\DSR\DSR_420\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
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
     * A Composite containing details of the Date and Place of the Event in which the Video was created.
     *
     * @return \DDEX\DSR\DSR_420\EventDateType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created.
     *
     * @param \DDEX\DSR\DSR_420\EventDateType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\DSR\DSR_420\EventDateType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (either in analogue or digital form).
     *
     * @return \DDEX\DSR\DSR_420\EventDateType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (either in analogue or digital form).
     *
     * @param \DDEX\DSR\DSR_420\EventDateType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DDEX\DSR\DSR_420\EventDateType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Adds as videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\VideoDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DDEX\DSR\DSR_420\VideoDetailsByTerritoryType $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory[] = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * isset videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @return \DDEX\DSR\DSR_420\VideoDetailsByTerritoryType[]
     */
    public function getVideoDetailsByTerritory()
    {
        return $this->videoDetailsByTerritory;
    }

    /**
     * Sets a new videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @param \DDEX\DSR\DSR_420\VideoDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL from which the Video was sold.
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
     * A URL from which the Video was sold.
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
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Resource was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\DSR\DSR_420\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Resource was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\DSR\DSR_420\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DDEX\DSR\DSR_420\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Gets as originalLanguage
     *
     * The orignal Language of the Video (represented by an ISO 639-2 LanguageCode).
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
     * The orignal Language of the Video (represented by an ISO 639-2 LanguageCode).
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


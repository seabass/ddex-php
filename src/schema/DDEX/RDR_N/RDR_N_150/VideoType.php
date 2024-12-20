<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The Flag indicating whether the Video Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Video data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Date that specifies the last time a record was changed, so that a recipient can decide when they ingest the record if they need to update their local system data. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $recordLastUpdatedDate
     */
    private $recordLastUpdatedDate = null;

    /**
     * An Identifier of a society that is repertoire manager of the metadata for the Video in VRDB2 (the Virtual Recording Database operated by SCAPR). This is represented in an XML schema as an XML Attribute.
     *
     * @var string $repertoireManagerCode
     */
    private $repertoireManagerCode = null;

    /**
     * The Flag indicating whether information in this Video composite is subject to a Dispute that is currently being resolved (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $metadataIsUnderReview
     */
    private $metadataIsUnderReview = null;

    /**
     * The Flag indicating to the recipient whether information in this Video composite is restricted in the context of communications with the VRDB2 (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $metadataIsAccessRestricted
     */
    private $metadataIsAccessRestricted = null;

    /**
     * A Composite containing details of the Type of the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VersionTypeType[] $versionType
     */
    private $versionType = [
        
    ];

    /**
     * The primary intended Purpose for which the Video was commissioned by the InitialProducer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\OriginalPurposeType $originalPurpose
     */
    private $originalPurpose = null;

    /**
     * The Flag indicating whether the Video is related to an Artist (=true) or not (=false).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A Composite containing details of a VideoId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DescriptionType $instrumentationDescription
     */
    private $instrumentationDescription = null;

    /**
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @var \DDEX\RDR_N\RDR_N_150\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * The Flag indicating whether the Video is a Medley (=true) or not (=false).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * The Flag indicating whether the Video is a Potpourri (=true) or not (=false).
     *
     * @var bool $isPotpourri
     */
    private $isPotpourri = null;

    /**
     * The Flag indicating whether the Video is instrumental (=true) or not (=false).
     *
     * @var bool $isInstrumental
     */
    private $isInstrumental = null;

    /**
     * The Flag indicating whether the Video is used as background to other audio or audio-visual material (=true) or not (=false).
     *
     * @var bool $isBackground
     */
    private $isBackground = null;

    /**
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $isHiddenResource
     */
    private $isHiddenResource = null;

    /**
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
     *
     * @var bool $isBonusResource
     */
    private $isBonusResource = null;

    /**
     * The Flag indicating whether the Video is generated by a computer (=true) or not (=false).
     *
     * @var bool $isComputerGenerated
     */
    private $isComputerGenerated = null;

    /**
     * The Flag indicating whether the Video is preceded by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceBefore
     */
    private $noSilenceBefore = null;

    /**
     * The Flag indicating whether the Video is followed by a period of silence (=false) or not (=true).
     *
     * @var bool $noSilenceAfter
     */
    private $noSilenceAfter = null;

    /**
     * A Composite containing details of the territories in which the Video is available for sale and/or distribution to the general public. If this Composite is absent, it is assumed that the Video is commercially available if OriginalPurpose is set to CommercialRelease; and that it is not commercially available if OriginalPurpose has a different value.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CommercialAvailbilityType $commercialAvailbility
     */
    private $commercialAvailbility = null;

    /**
     * The Language of the Performance recorded in the Video (represented by an ISO 639 LanguageCode).
     *
     * @var string $languageOfPerformance
     */
    private $languageOfPerformance = null;

    /**
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of one or more Collections. The referenced Collection has to be of CollectionType VideoChapter.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     */
    private $videoCollectionReferenceList = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of ResourceContainedResourceReferences referring to a Resource that is contained in the current Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType[] $creationDate
     */
    private $creationDate = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $masteredDate
     */
    private $masteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $remasteredDate
     */
    private $remasteredDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateType[] $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = [
        
    ];

    /**
     * The Flag indicating whether the Video is a remastered version of another Video (=true) or not (=false).
     *
     * @var bool $isRemastered
     */
    private $isRemastered = null;

    /**
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
     *
     * @var \DDEX\RDR_N\RDR_N_150\SoundRecordingDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
    ];

    /**
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PerformingContributorType[] $performingContributor
     */
    private $performingContributor = [
        
    ];

    /**
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @var \DDEX\RDR_N\RDR_N_150\OtherContributorType[] $otherContributor
     */
    private $otherContributor = [
        
    ];

    /**
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @var \DDEX\RDR_N\RDR_N_150\InitialProducerType[] $initialProducer
     */
    private $initialProducer = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @var \DDEX\RDR_N\RDR_N_150\TechnicalVideoDetailsType[] $technicalVideoDetails
     */
    private $technicalVideoDetails = [
        
    ];

    /**
     * The number of featured Contributors associated with the Video.
     *
     * @var int $numberOfFeaturedPerformingContributors
     */
    private $numberOfFeaturedPerformingContributors = null;

    /**
     * The Flag indicating whether the featured line up is complete (=true) or not (=false).
     *
     * @var bool $featuredLineUpComplete
     */
    private $featuredLineUpComplete = null;

    /**
     * The number of non-featured Contributors associated with the Video.
     *
     * @var int $numberOfNonFeaturedPerformingContributors
     */
    private $numberOfNonFeaturedPerformingContributors = null;

    /**
     * The Flag indicating whether the non-featured line up is complete (=true) or not (=false).
     *
     * @var bool $nonFeaturedLineUpComplete
     */
    private $nonFeaturedLineUpComplete = null;

    /**
     * The number of MainCharacters associated with the Video.
     *
     * @var int $numberOfMainCharacters
     */
    private $numberOfMainCharacters = null;

    /**
     * The Flag indicating whether the line up of MainCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @var bool $mainCharacterLineUpComplete
     */
    private $mainCharacterLineUpComplete = null;

    /**
     * The number of SupportingCharacters associated with the Video.
     *
     * @var int $numberOfSupportingCharacters
     */
    private $numberOfSupportingCharacters = null;

    /**
     * The Flag indicating whether the line up of SupportingCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @var bool $supportingCharacterLineUpComplete
     */
    private $supportingCharacterLineUpComplete = null;

    /**
     * The number of OtherCharacters associated with the Video.
     *
     * @var int $numberOfOtherCharacters
     */
    private $numberOfOtherCharacters = null;

    /**
     * The Flag indicating whether the line up of OtherCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @var bool $otherCharacterLineUpComplete
     */
    private $otherCharacterLineUpComplete = null;

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Video Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Video data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the Video Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Video data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Video as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as recordLastUpdatedDate
     *
     * A Date that specifies the last time a record was changed, so that a recipient can decide when they ingest the record if they need to update their local system data. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getRecordLastUpdatedDate()
    {
        return $this->recordLastUpdatedDate;
    }

    /**
     * Sets a new recordLastUpdatedDate
     *
     * A Date that specifies the last time a record was changed, so that a recipient can decide when they ingest the record if they need to update their local system data. This is a string with the syntax YYYY[-MM[-DD]]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $recordLastUpdatedDate
     * @return self
     */
    public function setRecordLastUpdatedDate($recordLastUpdatedDate)
    {
        $this->recordLastUpdatedDate = $recordLastUpdatedDate;
        return $this;
    }

    /**
     * Gets as repertoireManagerCode
     *
     * An Identifier of a society that is repertoire manager of the metadata for the Video in VRDB2 (the Virtual Recording Database operated by SCAPR). This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getRepertoireManagerCode()
    {
        return $this->repertoireManagerCode;
    }

    /**
     * Sets a new repertoireManagerCode
     *
     * An Identifier of a society that is repertoire manager of the metadata for the Video in VRDB2 (the Virtual Recording Database operated by SCAPR). This is represented in an XML schema as an XML Attribute.
     *
     * @param string $repertoireManagerCode
     * @return self
     */
    public function setRepertoireManagerCode($repertoireManagerCode)
    {
        $this->repertoireManagerCode = $repertoireManagerCode;
        return $this;
    }

    /**
     * Gets as metadataIsUnderReview
     *
     * The Flag indicating whether information in this Video composite is subject to a Dispute that is currently being resolved (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getMetadataIsUnderReview()
    {
        return $this->metadataIsUnderReview;
    }

    /**
     * Sets a new metadataIsUnderReview
     *
     * The Flag indicating whether information in this Video composite is subject to a Dispute that is currently being resolved (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $metadataIsUnderReview
     * @return self
     */
    public function setMetadataIsUnderReview($metadataIsUnderReview)
    {
        $this->metadataIsUnderReview = $metadataIsUnderReview;
        return $this;
    }

    /**
     * Gets as metadataIsAccessRestricted
     *
     * The Flag indicating to the recipient whether information in this Video composite is restricted in the context of communications with the VRDB2 (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getMetadataIsAccessRestricted()
    {
        return $this->metadataIsAccessRestricted;
    }

    /**
     * Sets a new metadataIsAccessRestricted
     *
     * The Flag indicating to the recipient whether information in this Video composite is restricted in the context of communications with the VRDB2 (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $metadataIsAccessRestricted
     * @return self
     */
    public function setMetadataIsAccessRestricted($metadataIsAccessRestricted)
    {
        $this->metadataIsAccessRestricted = $metadataIsAccessRestricted;
        return $this;
    }

    /**
     * Gets as videoType
     *
     * A Composite containing details of the Type of the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoTypeType
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
     * @param \DDEX\RDR_N\RDR_N_150\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DDEX\RDR_N\RDR_N_150\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Adds as versionType
     *
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\VersionTypeType $versionType
     */
    public function addToVersionType(\DDEX\RDR_N\RDR_N_150\VersionTypeType $versionType)
    {
        $this->versionType[] = $versionType;
        return $this;
    }

    /**
     * isset versionType
     *
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVersionType($index)
    {
        return isset($this->versionType[$index]);
    }

    /**
     * unset versionType
     *
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVersionType($index)
    {
        unset($this->versionType[$index]);
    }

    /**
     * Gets as versionType
     *
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VersionTypeType[]
     */
    public function getVersionType()
    {
        return $this->versionType;
    }

    /**
     * Sets a new versionType
     *
     * A Type of Version given by the releasing party to characterise and differentiate one Video from another with identical or similar Title metadata.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VersionTypeType[] $versionType
     * @return self
     */
    public function setVersionType(array $versionType = null)
    {
        $this->versionType = $versionType;
        return $this;
    }

    /**
     * Gets as originalPurpose
     *
     * The primary intended Purpose for which the Video was commissioned by the InitialProducer.
     *
     * @return \DDEX\RDR_N\RDR_N_150\OriginalPurposeType
     */
    public function getOriginalPurpose()
    {
        return $this->originalPurpose;
    }

    /**
     * Sets a new originalPurpose
     *
     * The primary intended Purpose for which the Video was commissioned by the InitialProducer.
     *
     * @param \DDEX\RDR_N\RDR_N_150\OriginalPurposeType $originalPurpose
     * @return self
     */
    public function setOriginalPurpose(?\DDEX\RDR_N\RDR_N_150\OriginalPurposeType $originalPurpose = null)
    {
        $this->originalPurpose = $originalPurpose;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The Flag indicating whether the Video is related to an Artist (=true) or not (=false).
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
     * The Flag indicating whether the Video is related to an Artist (=true) or not (=false).
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
     * A Composite containing details of a VideoId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\RDR_N\RDR_N_150\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of a VideoId.
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
     * A Composite containing details of a VideoId.
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
     * A Composite containing details of a VideoId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId)
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * Adds as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\RDR_N\RDR_N_150\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
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
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of a MusicalWork used in the Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
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
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReferenceTitleType
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
     * @param \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as instrumentationDescription
     *
     * A Composite containing a Description of the Type of instrumentation of the MusicalWork(s) in the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DescriptionType
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
     * @param \DDEX\RDR_N\RDR_N_150\DescriptionType $instrumentationDescription
     * @return self
     */
    public function setInstrumentationDescription(?\DDEX\RDR_N\RDR_N_150\DescriptionType $instrumentationDescription = null)
    {
        $this->instrumentationDescription = $instrumentationDescription;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\RDR_N\RDR_N_150\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @return \DDEX\RDR_N\RDR_N_150\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Video containing Keywords.
     *
     * @param \DDEX\RDR_N\RDR_N_150\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\RDR_N\RDR_N_150\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the Video is a Medley (=true) or not (=false).
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
     * The Flag indicating whether the Video is a Medley (=true) or not (=false).
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
     * The Flag indicating whether the Video is a Potpourri (=true) or not (=false).
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
     * The Flag indicating whether the Video is a Potpourri (=true) or not (=false).
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
     * The Flag indicating whether the Video is instrumental (=true) or not (=false).
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
     * The Flag indicating whether the Video is instrumental (=true) or not (=false).
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
     * The Flag indicating whether the Video is used as background to other audio or audio-visual material (=true) or not (=false).
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
     * The Flag indicating whether the Video is used as background to other audio or audio-visual material (=true) or not (=false).
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
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the Video is hidden in some way from the Consumer (=true) or not (=false).
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
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
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
     * The Flag indicating whether the Video is additional to those on the original Release of which this is a Version (=true) or not (=false). This element is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it. The IsBonusResource element in ResourceGroupContentItem should be used instead.
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
     * Gets as isComputerGenerated
     *
     * The Flag indicating whether the Video is generated by a computer (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsComputerGenerated()
    {
        return $this->isComputerGenerated;
    }

    /**
     * Sets a new isComputerGenerated
     *
     * The Flag indicating whether the Video is generated by a computer (=true) or not (=false).
     *
     * @param bool $isComputerGenerated
     * @return self
     */
    public function setIsComputerGenerated($isComputerGenerated)
    {
        $this->isComputerGenerated = $isComputerGenerated;
        return $this;
    }

    /**
     * Gets as noSilenceBefore
     *
     * The Flag indicating whether the Video is preceded by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceBefore()
    {
        return $this->noSilenceBefore;
    }

    /**
     * Sets a new noSilenceBefore
     *
     * The Flag indicating whether the Video is preceded by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceBefore
     * @return self
     */
    public function setNoSilenceBefore($noSilenceBefore)
    {
        $this->noSilenceBefore = $noSilenceBefore;
        return $this;
    }

    /**
     * Gets as noSilenceAfter
     *
     * The Flag indicating whether the Video is followed by a period of silence (=false) or not (=true).
     *
     * @return bool
     */
    public function getNoSilenceAfter()
    {
        return $this->noSilenceAfter;
    }

    /**
     * Sets a new noSilenceAfter
     *
     * The Flag indicating whether the Video is followed by a period of silence (=false) or not (=true).
     *
     * @param bool $noSilenceAfter
     * @return self
     */
    public function setNoSilenceAfter($noSilenceAfter)
    {
        $this->noSilenceAfter = $noSilenceAfter;
        return $this;
    }

    /**
     * Gets as commercialAvailbility
     *
     * A Composite containing details of the territories in which the Video is available for sale and/or distribution to the general public. If this Composite is absent, it is assumed that the Video is commercially available if OriginalPurpose is set to CommercialRelease; and that it is not commercially available if OriginalPurpose has a different value.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CommercialAvailbilityType
     */
    public function getCommercialAvailbility()
    {
        return $this->commercialAvailbility;
    }

    /**
     * Sets a new commercialAvailbility
     *
     * A Composite containing details of the territories in which the Video is available for sale and/or distribution to the general public. If this Composite is absent, it is assumed that the Video is commercially available if OriginalPurpose is set to CommercialRelease; and that it is not commercially available if OriginalPurpose has a different value.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CommercialAvailbilityType $commercialAvailbility
     * @return self
     */
    public function setCommercialAvailbility(?\DDEX\RDR_N\RDR_N_150\CommercialAvailbilityType $commercialAvailbility = null)
    {
        $this->commercialAvailbility = $commercialAvailbility;
        return $this;
    }

    /**
     * Gets as languageOfPerformance
     *
     * The Language of the Performance recorded in the Video (represented by an ISO 639 LanguageCode).
     *
     * @return string
     */
    public function getLanguageOfPerformance()
    {
        return $this->languageOfPerformance;
    }

    /**
     * Sets a new languageOfPerformance
     *
     * The Language of the Performance recorded in the Video (represented by an ISO 639 LanguageCode).
     *
     * @param string $languageOfPerformance
     * @return self
     */
    public function setLanguageOfPerformance($languageOfPerformance)
    {
        $this->languageOfPerformance = $languageOfPerformance;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Gets as videoCollectionReferenceList
     *
     * A Composite containing details of one or more Collections. The referenced Collection has to be of CollectionType VideoChapter.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SoundRecordingCollectionReferenceListType
     */
    public function getVideoCollectionReferenceList()
    {
        return $this->videoCollectionReferenceList;
    }

    /**
     * Sets a new videoCollectionReferenceList
     *
     * A Composite containing details of one or more Collections. The referenced Collection has to be of CollectionType VideoChapter.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList
     * @return self
     */
    public function setVideoCollectionReferenceList(?\DDEX\RDR_N\RDR_N_150\SoundRecordingCollectionReferenceListType $videoCollectionReferenceList = null)
    {
        $this->videoCollectionReferenceList = $videoCollectionReferenceList;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
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
     * @return \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     * @param \DDEX\RDR_N\RDR_N_150\ResourceContainedResourceReferenceType $resourceContainedResourceReference
     */
    public function addToResourceContainedResourceReferenceList(\DDEX\RDR_N\RDR_N_150\ResourceContainedResourceReferenceType $resourceContainedResourceReference)
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
     * @return \DDEX\RDR_N\RDR_N_150\ResourceContainedResourceReferenceType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     * @return self
     */
    public function setResourceContainedResourceReferenceList(array $resourceContainedResourceReferenceList = null)
    {
        $this->resourceContainedResourceReferenceList = $resourceContainedResourceReferenceList;
        return $this;
    }

    /**
     * Adds as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $creationDate
     */
    public function addToCreationDate(\DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $creationDate)
    {
        $this->creationDate[] = $creationDate;
        return $this;
    }

    /**
     * isset creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreationDate($index)
    {
        return isset($this->creationDate[$index]);
    }

    /**
     * unset creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreationDate($index)
    {
        unset($this->creationDate[$index]);
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType[]
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType[] $creationDate
     * @return self
     */
    public function setCreationDate(array $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType
     */
    public function getMasteredDate()
    {
        return $this->masteredDate;
    }

    /**
     * Sets a new masteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally mastered (in either analogue or digital form). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $masteredDate
     * @return self
     */
    public function setMasteredDate(?\DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $masteredDate = null)
    {
        $this->masteredDate = $masteredDate;
        return $this;
    }

    /**
     * Gets as remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType
     */
    public function getRemasteredDate()
    {
        return $this->remasteredDate;
    }

    /**
     * Sets a new remasteredDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was re-mastered (usually digitally). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $remasteredDate
     * @return self
     */
    public function setRemasteredDate(?\DDEX\RDR_N\RDR_N_150\EventDateNoWorldwideType $remasteredDate = null)
    {
        $this->remasteredDate = $remasteredDate;
        return $this;
    }

    /**
     * Adds as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\EventDateType $originalResourceReleaseDate
     */
    public function addToOriginalResourceReleaseDate(\DDEX\RDR_N\RDR_N_150\EventDateType $originalResourceReleaseDate)
    {
        $this->originalResourceReleaseDate[] = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * isset originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginalResourceReleaseDate($index)
    {
        return isset($this->originalResourceReleaseDate[$index]);
    }

    /**
     * unset originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginalResourceReleaseDate($index)
    {
        unset($this->originalResourceReleaseDate[$index]);
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateType[]
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Video was originally published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]]. If one OriginalResourceReleaseDate is specified, the TerritoryCode attribute is not mandatory, but if more than one OriginalResourceReleaseDate is provided, all of these need to have a TerritoryCode attribute.
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateType[] $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(array $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Gets as isRemastered
     *
     * The Flag indicating whether the Video is a remastered version of another Video (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsRemastered()
    {
        return $this->isRemastered;
    }

    /**
     * Sets a new isRemastered
     *
     * The Flag indicating whether the Video is a remastered version of another Video (=true) or not (=false).
     *
     * @param bool $isRemastered
     * @return self
     */
    public function setIsRemastered($isRemastered)
    {
        $this->isRemastered = $isRemastered;
        return $this;
    }

    /**
     * Adds as videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DDEX\RDR_N\RDR_N_150\SoundRecordingDetailsByTerritoryType $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory[] = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * isset videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
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
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
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
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
     *
     * @return \DDEX\RDR_N\RDR_N_150\SoundRecordingDetailsByTerritoryType[]
     */
    public function getVideoDetailsByTerritory()
    {
        return $this->videoDetailsByTerritory;
    }

    /**
     * Sets a new videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/territorial-variations-in-release-descriptions
     *
     * @param \DDEX\RDR_N\RDR_N_150\SoundRecordingDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }

    /**
     * Adds as performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PerformingContributorType $performingContributor
     */
    public function addToPerformingContributor(\DDEX\RDR_N\RDR_N_150\PerformingContributorType $performingContributor)
    {
        $this->performingContributor[] = $performingContributor;
        return $this;
    }

    /**
     * isset performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformingContributor($index)
    {
        return isset($this->performingContributor[$index]);
    }

    /**
     * unset performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformingContributor($index)
    {
        unset($this->performingContributor[$index]);
    }

    /**
     * Gets as performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PerformingContributorType[]
     */
    public function getPerformingContributor()
    {
        return $this->performingContributor;
    }

    /**
     * Sets a new performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PerformingContributorType[] $performingContributor
     * @return self
     */
    public function setPerformingContributor(array $performingContributor = null)
    {
        $this->performingContributor = $performingContributor;
        return $this;
    }

    /**
     * Adds as otherContributor
     *
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\OtherContributorType $otherContributor
     */
    public function addToOtherContributor(\DDEX\RDR_N\RDR_N_150\OtherContributorType $otherContributor)
    {
        $this->otherContributor[] = $otherContributor;
        return $this;
    }

    /**
     * isset otherContributor
     *
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherContributor($index)
    {
        return isset($this->otherContributor[$index]);
    }

    /**
     * unset otherContributor
     *
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherContributor($index)
    {
        unset($this->otherContributor[$index]);
    }

    /**
     * Gets as otherContributor
     *
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return \DDEX\RDR_N\RDR_N_150\OtherContributorType[]
     */
    public function getOtherContributor()
    {
        return $this->otherContributor;
    }

    /**
     * Sets a new otherContributor
     *
     * A Composite containing details of a Contributor that is not a performing Contributor to the Video, according to the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param \DDEX\RDR_N\RDR_N_150\OtherContributorType[] $otherContributor
     * @return self
     */
    public function setOtherContributor(array $otherContributor = null)
    {
        $this->otherContributor = $otherContributor;
        return $this;
    }

    /**
     * Adds as initialProducer
     *
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\InitialProducerType $initialProducer
     */
    public function addToInitialProducer(\DDEX\RDR_N\RDR_N_150\InitialProducerType $initialProducer)
    {
        $this->initialProducer[] = $initialProducer;
        return $this;
    }

    /**
     * isset initialProducer
     *
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInitialProducer($index)
    {
        return isset($this->initialProducer[$index]);
    }

    /**
     * unset initialProducer
     *
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInitialProducer($index)
    {
        unset($this->initialProducer[$index]);
    }

    /**
     * Gets as initialProducer
     *
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @return \DDEX\RDR_N\RDR_N_150\InitialProducerType[]
     */
    public function getInitialProducer()
    {
        return $this->initialProducer;
    }

    /**
     * Sets a new initialProducer
     *
     * A Composite containing details of an InitialProducer for the Video, which is a Party that initiates the creation of the Video and is sometimes referred to as a commissioning rights holder. An InitialProducer may be a Person or an Organization and the term contrasts with the role of a StudioProducer. An InitialProducer may be described through Name and Identifier.
     *
     * @param \DDEX\RDR_N\RDR_N_150\InitialProducerType[] $initialProducer
     * @return self
     */
    public function setInitialProducer(array $initialProducer = null)
    {
        $this->initialProducer = $initialProducer;
        return $this;
    }

    /**
     * Adds as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\RDR_N\RDR_N_150\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of RightsController of Rights in the Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Adds as technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\TechnicalVideoDetailsType $technicalVideoDetails
     */
    public function addToTechnicalVideoDetails(\DDEX\RDR_N\RDR_N_150\TechnicalVideoDetailsType $technicalVideoDetails)
    {
        $this->technicalVideoDetails[] = $technicalVideoDetails;
        return $this;
    }

    /**
     * isset technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalVideoDetails($index)
    {
        return isset($this->technicalVideoDetails[$index]);
    }

    /**
     * unset technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalVideoDetails($index)
    {
        unset($this->technicalVideoDetails[$index]);
    }

    /**
     * Gets as technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @return \DDEX\RDR_N\RDR_N_150\TechnicalVideoDetailsType[]
     */
    public function getTechnicalVideoDetails()
    {
        return $this->technicalVideoDetails;
    }

    /**
     * Sets a new technicalVideoDetails
     *
     * A Composite containing technical details of the Video.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-binaries/communicating-binaries
     *
     * @param \DDEX\RDR_N\RDR_N_150\TechnicalVideoDetailsType[] $technicalVideoDetails
     * @return self
     */
    public function setTechnicalVideoDetails(array $technicalVideoDetails = null)
    {
        $this->technicalVideoDetails = $technicalVideoDetails;
        return $this;
    }

    /**
     * Gets as numberOfFeaturedPerformingContributors
     *
     * The number of featured Contributors associated with the Video.
     *
     * @return int
     */
    public function getNumberOfFeaturedPerformingContributors()
    {
        return $this->numberOfFeaturedPerformingContributors;
    }

    /**
     * Sets a new numberOfFeaturedPerformingContributors
     *
     * The number of featured Contributors associated with the Video.
     *
     * @param int $numberOfFeaturedPerformingContributors
     * @return self
     */
    public function setNumberOfFeaturedPerformingContributors($numberOfFeaturedPerformingContributors)
    {
        $this->numberOfFeaturedPerformingContributors = $numberOfFeaturedPerformingContributors;
        return $this;
    }

    /**
     * Gets as featuredLineUpComplete
     *
     * The Flag indicating whether the featured line up is complete (=true) or not (=false).
     *
     * @return bool
     */
    public function getFeaturedLineUpComplete()
    {
        return $this->featuredLineUpComplete;
    }

    /**
     * Sets a new featuredLineUpComplete
     *
     * The Flag indicating whether the featured line up is complete (=true) or not (=false).
     *
     * @param bool $featuredLineUpComplete
     * @return self
     */
    public function setFeaturedLineUpComplete($featuredLineUpComplete)
    {
        $this->featuredLineUpComplete = $featuredLineUpComplete;
        return $this;
    }

    /**
     * Gets as numberOfNonFeaturedPerformingContributors
     *
     * The number of non-featured Contributors associated with the Video.
     *
     * @return int
     */
    public function getNumberOfNonFeaturedPerformingContributors()
    {
        return $this->numberOfNonFeaturedPerformingContributors;
    }

    /**
     * Sets a new numberOfNonFeaturedPerformingContributors
     *
     * The number of non-featured Contributors associated with the Video.
     *
     * @param int $numberOfNonFeaturedPerformingContributors
     * @return self
     */
    public function setNumberOfNonFeaturedPerformingContributors($numberOfNonFeaturedPerformingContributors)
    {
        $this->numberOfNonFeaturedPerformingContributors = $numberOfNonFeaturedPerformingContributors;
        return $this;
    }

    /**
     * Gets as nonFeaturedLineUpComplete
     *
     * The Flag indicating whether the non-featured line up is complete (=true) or not (=false).
     *
     * @return bool
     */
    public function getNonFeaturedLineUpComplete()
    {
        return $this->nonFeaturedLineUpComplete;
    }

    /**
     * Sets a new nonFeaturedLineUpComplete
     *
     * The Flag indicating whether the non-featured line up is complete (=true) or not (=false).
     *
     * @param bool $nonFeaturedLineUpComplete
     * @return self
     */
    public function setNonFeaturedLineUpComplete($nonFeaturedLineUpComplete)
    {
        $this->nonFeaturedLineUpComplete = $nonFeaturedLineUpComplete;
        return $this;
    }

    /**
     * Gets as numberOfMainCharacters
     *
     * The number of MainCharacters associated with the Video.
     *
     * @return int
     */
    public function getNumberOfMainCharacters()
    {
        return $this->numberOfMainCharacters;
    }

    /**
     * Sets a new numberOfMainCharacters
     *
     * The number of MainCharacters associated with the Video.
     *
     * @param int $numberOfMainCharacters
     * @return self
     */
    public function setNumberOfMainCharacters($numberOfMainCharacters)
    {
        $this->numberOfMainCharacters = $numberOfMainCharacters;
        return $this;
    }

    /**
     * Gets as mainCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of MainCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @return bool
     */
    public function getMainCharacterLineUpComplete()
    {
        return $this->mainCharacterLineUpComplete;
    }

    /**
     * Sets a new mainCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of MainCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @param bool $mainCharacterLineUpComplete
     * @return self
     */
    public function setMainCharacterLineUpComplete($mainCharacterLineUpComplete)
    {
        $this->mainCharacterLineUpComplete = $mainCharacterLineUpComplete;
        return $this;
    }

    /**
     * Gets as numberOfSupportingCharacters
     *
     * The number of SupportingCharacters associated with the Video.
     *
     * @return int
     */
    public function getNumberOfSupportingCharacters()
    {
        return $this->numberOfSupportingCharacters;
    }

    /**
     * Sets a new numberOfSupportingCharacters
     *
     * The number of SupportingCharacters associated with the Video.
     *
     * @param int $numberOfSupportingCharacters
     * @return self
     */
    public function setNumberOfSupportingCharacters($numberOfSupportingCharacters)
    {
        $this->numberOfSupportingCharacters = $numberOfSupportingCharacters;
        return $this;
    }

    /**
     * Gets as supportingCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of SupportingCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @return bool
     */
    public function getSupportingCharacterLineUpComplete()
    {
        return $this->supportingCharacterLineUpComplete;
    }

    /**
     * Sets a new supportingCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of SupportingCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @param bool $supportingCharacterLineUpComplete
     * @return self
     */
    public function setSupportingCharacterLineUpComplete($supportingCharacterLineUpComplete)
    {
        $this->supportingCharacterLineUpComplete = $supportingCharacterLineUpComplete;
        return $this;
    }

    /**
     * Gets as numberOfOtherCharacters
     *
     * The number of OtherCharacters associated with the Video.
     *
     * @return int
     */
    public function getNumberOfOtherCharacters()
    {
        return $this->numberOfOtherCharacters;
    }

    /**
     * Sets a new numberOfOtherCharacters
     *
     * The number of OtherCharacters associated with the Video.
     *
     * @param int $numberOfOtherCharacters
     * @return self
     */
    public function setNumberOfOtherCharacters($numberOfOtherCharacters)
    {
        $this->numberOfOtherCharacters = $numberOfOtherCharacters;
        return $this;
    }

    /**
     * Gets as otherCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of OtherCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @return bool
     */
    public function getOtherCharacterLineUpComplete()
    {
        return $this->otherCharacterLineUpComplete;
    }

    /**
     * Sets a new otherCharacterLineUpComplete
     *
     * The Flag indicating whether the line up of OtherCharacters is complete (=true) or not (=false). If no value is provided, no information about completeness is available.
     *
     * @param bool $otherCharacterLineUpComplete
     * @return self
     */
    public function setOtherCharacterLineUpComplete($otherCharacterLineUpComplete)
    {
        $this->otherCharacterLineUpComplete = $otherCharacterLineUpComplete;
        return $this;
    }
}


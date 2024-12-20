<?php

namespace DDEX\ERN\ERN_411;

/**
 * Class representing TrackReleaseType
 *
 * A Composite containing details of a DDEX Release.
 * XSD Type: TrackRelease
 */
class TrackReleaseType
{
    /**
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isMainRelease
     */
    private $isMainRelease = null;

    /**
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\ERN\ERN_411\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DDEX\ERN\ERN_411\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DDEX\ERN\ERN_411\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DDEX\ERN\ERN_411\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @var string $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @var \DDEX\ERN\ERN_411\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     */
    private $linkedReleaseResourceReference = [
        
    ];

    /**
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var \DDEX\ERN\ERN_411\ReleaseLabelReferenceType[] $releaseLabelReference
     */
    private $releaseLabelReference = [
        
    ];

    /**
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @var \DDEX\ERN\ERN_411\GenreWithTerritoryType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @var \DDEX\ERN\ERN_411\KeywordsWithTerritoryType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Release.
     *
     * @var \DDEX\ERN\ERN_411\SynopsisWithTerritoryType[] $synopsis
     */
    private $synopsis = [
        
    ];

    /**
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @var \DDEX\ERN\ERN_411\MarketingCommentType[] $marketingComment
     */
    private $marketingComment = [
        
    ];

    /**
     * Gets as isMainRelease
     *
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
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
     * The Flag indicating whether the Release is a main one as defined in the relevant Profile Standard (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
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
     * Gets as releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
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
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
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
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\ERN\ERN_411\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\ERN\ERN_411\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\ERN\ERN_411\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DDEX\ERN\ERN_411\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitleText($index)
    {
        return isset($this->displayTitleText[$index]);
    }

    /**
     * unset displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitleText($index)
    {
        unset($this->displayTitleText[$index]);
    }

    /**
     * Gets as displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DDEX\ERN\ERN_411\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DDEX\ERN\ERN_411\DisplayTitleTextType[] $displayTitleText
     * @return self
     */
    public function setDisplayTitleText(array $displayTitleText = null)
    {
        $this->displayTitleText = $displayTitleText;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DDEX\ERN\ERN_411\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitle($index)
    {
        return isset($this->displayTitle[$index]);
    }

    /**
     * unset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitle($index)
    {
        unset($this->displayTitle[$index]);
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DDEX\ERN\ERN_411\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DDEX\ERN\ERN_411\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DDEX\ERN\ERN_411\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTitle($index)
    {
        return isset($this->additionalTitle[$index]);
    }

    /**
     * unset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTitle($index)
    {
        unset($this->additionalTitle[$index]);
    }

    /**
     * Gets as additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DDEX\ERN\ERN_411\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Release. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DDEX\ERN\ERN_411\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle = null)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Gets as releaseResourceReference
     *
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return string
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A ReleaseResourceReference for the Release (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @param string $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference($releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }

    /**
     * Adds as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference
     */
    public function addToLinkedReleaseResourceReference(\DDEX\ERN\ERN_411\LinkedReleaseResourceReferenceType $linkedReleaseResourceReference)
    {
        $this->linkedReleaseResourceReference[] = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * isset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkedReleaseResourceReference($index)
    {
        return isset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * unset linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkedReleaseResourceReference($index)
    {
        unset($this->linkedReleaseResourceReference[$index]);
    }

    /**
     * Gets as linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @return \DDEX\ERN\ERN_411\LinkedReleaseResourceReferenceType[]
     */
    public function getLinkedReleaseResourceReference()
    {
        return $this->linkedReleaseResourceReference;
    }

    /**
     * Sets a new linkedReleaseResourceReference
     *
     * A Composite containing details of a ReleaseResourceReference (specific to this Message) for a Resource which is linked to this Release. Example: an Image, Text or NonMusicalWorkVideo associated with a SoundRecording. This LocalAnchorReference is a xs:string starting with the letter A.
     *
     * @param \DDEX\ERN\ERN_411\LinkedReleaseResourceReferenceType[] $linkedReleaseResourceReference
     * @return self
     */
    public function setLinkedReleaseResourceReference(array $linkedReleaseResourceReference = null)
    {
        $this->linkedReleaseResourceReference = $linkedReleaseResourceReference;
        return $this;
    }

    /**
     * Adds as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\ReleaseLabelReferenceType $releaseLabelReference
     */
    public function addToReleaseLabelReference(\DDEX\ERN\ERN_411\ReleaseLabelReferenceType $releaseLabelReference)
    {
        $this->releaseLabelReference[] = $releaseLabelReference;
        return $this;
    }

    /**
     * isset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseLabelReference($index)
    {
        return isset($this->releaseLabelReference[$index]);
    }

    /**
     * unset releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseLabelReference($index)
    {
        unset($this->releaseLabelReference[$index]);
    }

    /**
     * Gets as releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return \DDEX\ERN\ERN_411\ReleaseLabelReferenceType[]
     */
    public function getReleaseLabelReference()
    {
        return $this->releaseLabelReference;
    }

    /**
     * Sets a new releaseLabelReference
     *
     * A Reference for a label of the Release (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param \DDEX\ERN\ERN_411\ReleaseLabelReferenceType[] $releaseLabelReference
     * @return self
     */
    public function setReleaseLabelReference(array $releaseLabelReference)
    {
        $this->releaseLabelReference = $releaseLabelReference;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\GenreWithTerritoryType $genre
     */
    public function addToGenre(\DDEX\ERN\ERN_411\GenreWithTerritoryType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return \DDEX\ERN\ERN_411\GenreWithTerritoryType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param \DDEX\ERN\ERN_411\GenreWithTerritoryType[] $genre
     * @return self
     */
    public function setGenre(array $genre)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\KeywordsWithTerritoryType $keywords
     */
    public function addToKeywords(\DDEX\ERN\ERN_411\KeywordsWithTerritoryType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
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
     * A Composite containing details of a Description of the Release containing Keywords.
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
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @return \DDEX\ERN\ERN_411\KeywordsWithTerritoryType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Release containing Keywords.
     *
     * @param \DDEX\ERN\ERN_411\KeywordsWithTerritoryType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Adds as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\SynopsisWithTerritoryType $synopsis
     */
    public function addToSynopsis(\DDEX\ERN\ERN_411\SynopsisWithTerritoryType $synopsis)
    {
        $this->synopsis[] = $synopsis;
        return $this;
    }

    /**
     * isset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSynopsis($index)
    {
        return isset($this->synopsis[$index]);
    }

    /**
     * unset synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSynopsis($index)
    {
        unset($this->synopsis[$index]);
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @return \DDEX\ERN\ERN_411\SynopsisWithTerritoryType[]
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Release.
     *
     * @param \DDEX\ERN\ERN_411\SynopsisWithTerritoryType[] $synopsis
     * @return self
     */
    public function setSynopsis(array $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\MarketingCommentType $marketingComment
     */
    public function addToMarketingComment(\DDEX\ERN\ERN_411\MarketingCommentType $marketingComment)
    {
        $this->marketingComment[] = $marketingComment;
        return $this;
    }

    /**
     * isset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingComment($index)
    {
        return isset($this->marketingComment[$index]);
    }

    /**
     * unset marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingComment($index)
    {
        unset($this->marketingComment[$index]);
    }

    /**
     * Gets as marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @return \DDEX\ERN\ERN_411\MarketingCommentType[]
     */
    public function getMarketingComment()
    {
        return $this->marketingComment;
    }

    /**
     * Sets a new marketingComment
     *
     * A Composite containing a Comment about the promotion and marketing of the Release.
     *
     * @param \DDEX\ERN\ERN_411\MarketingCommentType[] $marketingComment
     * @return self
     */
    public function setMarketingComment(array $marketingComment = null)
    {
        $this->marketingComment = $marketingComment;
        return $this;
    }
}


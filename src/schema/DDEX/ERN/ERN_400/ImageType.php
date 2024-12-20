<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing ImageType
 *
 * A Composite containing details of an Image.
 * XSD Type: Image
 */
class ImageType
{
    /**
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Image is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isSupplemental
     */
    private $isSupplemental = null;

    /**
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the Image.
     *
     * @var \DDEX\ERN\ERN_400\ImageTypeType $type
     */
    private $type = null;

    /**
     * A Composite containing details of Identifiers of the Image.
     *
     * @var \DDEX\ERN\ERN_400\ResourceProprietaryIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @var \DDEX\ERN\ERN_400\DisplayTitleTextType[] $displayTitleText
     */
    private $displayTitleText = [
        
    ];

    /**
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DDEX\ERN\ERN_400\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @var \DDEX\ERN\ERN_400\AdditionalTitleType[] $additionalTitle
     */
    private $additionalTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @var \DDEX\ERN\ERN_400\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\ERN\ERN_400\DisplayArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the Image.
     *
     * @var \DDEX\ERN\ERN_400\ContributorType[] $contributor
     */
    private $contributor = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @var \DDEX\ERN\ERN_400\ResourceRightsControllerType[] $resourceRightsController
     */
    private $resourceRightsController = [
        
    ];

    /**
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @var \DDEX\ERN\ERN_400\WorkRightsControllerType[] $workRightsController
     */
    private $workRightsController = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Image.
     *
     * @var \DDEX\ERN\ERN_400\CLineWithDefaultType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @var \DDEX\ERN\ERN_400\CourtesyLineWithDefaultType[] $courtesyLine
     */
    private $courtesyLine = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\ERN\ERN_400\EventDateWithoutTerritoryType $creationDate
     */
    private $creationDate = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\ERN\ERN_400\FulfillmentDateWithTerritoryType[] $firstPublicationDate
     */
    private $firstPublicationDate = [
        
    ];

    /**
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ERN\ERN_400\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @var \DDEX\ERN\ERN_400\RelatedReleaseWithReferenceType[] $relatedRelease
     */
    private $relatedRelease = [
        
    ];

    /**
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @var \DDEX\ERN\ERN_400\RelatedResourceType[] $relatedResource
     */
    private $relatedResource = [
        
    ];

    /**
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @var bool $containsHiddenContent
     */
    private $containsHiddenContent = null;

    /**
     * A Composite containing a Description of the subject of the Image.
     *
     * @var \DDEX\ERN\ERN_400\DescriptionWithTerritoryType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Composite containing details of a Description of the Image containing Keywords.
     *
     * @var \DDEX\ERN\ERN_400\KeywordsWithTerritoryType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the Image.
     *
     * @var \DDEX\ERN\ERN_400\SynopsisWithTerritoryType[] $synopsis
     */
    private $synopsis = [
        
    ];

    /**
     * A Composite containing technical details of the Image.
     *
     * @var \DDEX\ERN\ERN_400\TechnicalImageDetailsType[] $technicalDetails
     */
    private $technicalDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Image as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isSupplemental
     *
     * The Flag indicating whether the Image is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsSupplemental()
    {
        return $this->isSupplemental;
    }

    /**
     * Sets a new isSupplemental
     *
     * The Flag indicating whether the Image is provided in a addition to the Resources that form part of the Release (=true) or not (=false). If the flag is set to false (or absent) the Image is part of at least one Release in the message. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isSupplemental
     * @return self
     */
    public function setIsSupplemental($isSupplemental)
    {
        $this->isSupplemental = $isSupplemental;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Image within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * Gets as type
     *
     * A Composite containing details of the Type of the Image.
     *
     * @return \DDEX\ERN\ERN_400\ImageTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param \DDEX\ERN\ERN_400\ImageTypeType $type
     * @return self
     */
    public function setType(\DDEX\ERN\ERN_400\ImageTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as resourceId
     *
     * A Composite containing details of Identifiers of the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ResourceProprietaryIdType $resourceId
     */
    public function addToResourceId(\DDEX\ERN\ERN_400\ResourceProprietaryIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
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
     * A Composite containing details of Identifiers of the Image.
     *
     * @return \DDEX\ERN\ERN_400\ResourceProprietaryIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of Identifiers of the Image.
     *
     * @param \DDEX\ERN\ERN_400\ResourceProprietaryIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DisplayTitleTextType $displayTitleText
     */
    public function addToDisplayTitleText(\DDEX\ERN\ERN_400\DisplayTitleTextType $displayTitleText)
    {
        $this->displayTitleText[] = $displayTitleText;
        return $this;
    }

    /**
     * isset displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @return \DDEX\ERN\ERN_400\DisplayTitleTextType[]
     */
    public function getDisplayTitleText()
    {
        return $this->displayTitleText;
    }

    /**
     * Sets a new displayTitleText
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode. One such element is required for each DisplayTitle element and its content typically provides the same information as the concatenation of the DisplayTitle's sub-elements.
     *
     * @param \DDEX\ERN\ERN_400\DisplayTitleTextType[] $displayTitleText
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DDEX\ERN\ERN_400\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
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
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DDEX\ERN\ERN_400\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Image as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DDEX\ERN\ERN_400\DisplayTitleType[] $displayTitle
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
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\AdditionalTitleType $additionalTitle
     */
    public function addToAdditionalTitle(\DDEX\ERN\ERN_400\AdditionalTitleType $additionalTitle)
    {
        $this->additionalTitle[] = $additionalTitle;
        return $this;
    }

    /**
     * isset additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
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
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @return \DDEX\ERN\ERN_400\AdditionalTitleType[]
     */
    public function getAdditionalTitle()
    {
        return $this->additionalTitle;
    }

    /**
     * Sets a new additionalTitle
     *
     * A Composite containing details of an AdditionalTitle of the Image. If multiple instances with an ApplicableTerritoryCode are provided, then the first one provides the default that is then superseded by subsequent instances.
     *
     * @param \DDEX\ERN\ERN_400\AdditionalTitleType[] $additionalTitle
     * @return self
     */
    public function setAdditionalTitle(array $additionalTitle = null)
    {
        $this->additionalTitle = $additionalTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\ERN\ERN_400\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return \DDEX\ERN\ERN_400\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param \DDEX\ERN\ERN_400\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\ERN\ERN_400\DisplayArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\ERN\ERN_400\DisplayArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the Image. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\ERN\ERN_400\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ContributorType $contributor
     */
    public function addToContributor(\DDEX\ERN\ERN_400\ContributorType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @return \DDEX\ERN\ERN_400\ContributorType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * A Composite containing details of a Contributor to the Image.
     *
     * @param \DDEX\ERN\ERN_400\ContributorType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor = null)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ResourceRightsControllerType $resourceRightsController
     */
    public function addToResourceRightsController(\DDEX\ERN\ERN_400\ResourceRightsControllerType $resourceRightsController)
    {
        $this->resourceRightsController[] = $resourceRightsController;
        return $this;
    }

    /**
     * isset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceRightsController($index)
    {
        return isset($this->resourceRightsController[$index]);
    }

    /**
     * unset resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceRightsController($index)
    {
        unset($this->resourceRightsController[$index]);
    }

    /**
     * Gets as resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @return \DDEX\ERN\ERN_400\ResourceRightsControllerType[]
     */
    public function getResourceRightsController()
    {
        return $this->resourceRightsController;
    }

    /**
     * Sets a new resourceRightsController
     *
     * A Composite containing details of RightsController of Rights in the Image.
     *
     * @param \DDEX\ERN\ERN_400\ResourceRightsControllerType[] $resourceRightsController
     * @return self
     */
    public function setResourceRightsController(array $resourceRightsController = null)
    {
        $this->resourceRightsController = $resourceRightsController;
        return $this;
    }

    /**
     * Adds as workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\WorkRightsControllerType $workRightsController
     */
    public function addToWorkRightsController(\DDEX\ERN\ERN_400\WorkRightsControllerType $workRightsController)
    {
        $this->workRightsController[] = $workRightsController;
        return $this;
    }

    /**
     * isset workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkRightsController($index)
    {
        return isset($this->workRightsController[$index]);
    }

    /**
     * unset workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkRightsController($index)
    {
        unset($this->workRightsController[$index]);
    }

    /**
     * Gets as workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @return \DDEX\ERN\ERN_400\WorkRightsControllerType[]
     */
    public function getWorkRightsController()
    {
        return $this->workRightsController;
    }

    /**
     * Sets a new workRightsController
     *
     * A Composite containing details of RightsController of Rights in the Work.
     *
     * @param \DDEX\ERN\ERN_400\WorkRightsControllerType[] $workRightsController
     * @return self
     */
    public function setWorkRightsController(array $workRightsController = null)
    {
        $this->workRightsController = $workRightsController;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\CLineWithDefaultType $cLine
     */
    public function addToCLine(\DDEX\ERN\ERN_400\CLineWithDefaultType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Image.
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
     * A Composite containing details of the CLine for the Image.
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
     * A Composite containing details of the CLine for the Image.
     *
     * @return \DDEX\ERN\ERN_400\CLineWithDefaultType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Image.
     *
     * @param \DDEX\ERN\ERN_400\CLineWithDefaultType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Adds as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\CourtesyLineWithDefaultType $courtesyLine
     */
    public function addToCourtesyLine(\DDEX\ERN\ERN_400\CourtesyLineWithDefaultType $courtesyLine)
    {
        $this->courtesyLine[] = $courtesyLine;
        return $this;
    }

    /**
     * isset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCourtesyLine($index)
    {
        return isset($this->courtesyLine[$index]);
    }

    /**
     * unset courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCourtesyLine($index)
    {
        unset($this->courtesyLine[$index]);
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @return \DDEX\ERN\ERN_400\CourtesyLineWithDefaultType[]
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured on the Image.
     *
     * @param \DDEX\ERN\ERN_400\CourtesyLineWithDefaultType[] $courtesyLine
     * @return self
     */
    public function setCourtesyLine(array $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\ERN\ERN_400\EventDateWithoutTerritoryType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was created. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\ERN\ERN_400\EventDateWithoutTerritoryType $creationDate
     * @return self
     */
    public function setCreationDate(?\DDEX\ERN\ERN_400\EventDateWithoutTerritoryType $creationDate = null)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Adds as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\FulfillmentDateWithTerritoryType $firstPublicationDate
     */
    public function addToFirstPublicationDate(\DDEX\ERN\ERN_400\FulfillmentDateWithTerritoryType $firstPublicationDate)
    {
        $this->firstPublicationDate[] = $firstPublicationDate;
        return $this;
    }

    /**
     * isset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFirstPublicationDate($index)
    {
        return isset($this->firstPublicationDate[$index]);
    }

    /**
     * unset firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFirstPublicationDate($index)
    {
        unset($this->firstPublicationDate[$index]);
    }

    /**
     * Gets as firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\ERN\ERN_400\FulfillmentDateWithTerritoryType[]
     */
    public function getFirstPublicationDate()
    {
        return $this->firstPublicationDate;
    }

    /**
     * Sets a new firstPublicationDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Image was first published, whether for physical or electronic/online distribution. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\ERN\ERN_400\FulfillmentDateWithTerritoryType[] $firstPublicationDate
     * @return self
     */
    public function setFirstPublicationDate(array $firstPublicationDate = null)
    {
        $this->firstPublicationDate = $firstPublicationDate;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ParentalWarningTypeWithTerritoryType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ERN\ERN_400\ParentalWarningTypeWithTerritoryType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentalWarningType($index)
    {
        return isset($this->parentalWarningType[$index]);
    }

    /**
     * unset parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentalWarningType($index)
    {
        unset($this->parentalWarningType[$index]);
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ERN\ERN_400\ParentalWarningTypeWithTerritoryType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ERN\ERN_400\ParentalWarningTypeWithTerritoryType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\RelatedReleaseWithReferenceType $relatedRelease
     */
    public function addToRelatedRelease(\DDEX\ERN\ERN_400\RelatedReleaseWithReferenceType $relatedRelease)
    {
        $this->relatedRelease[] = $relatedRelease;
        return $this;
    }

    /**
     * isset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRelease($index)
    {
        return isset($this->relatedRelease[$index]);
    }

    /**
     * unset relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRelease($index)
    {
        unset($this->relatedRelease[$index]);
    }

    /**
     * Gets as relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @return \DDEX\ERN\ERN_400\RelatedReleaseWithReferenceType[]
     */
    public function getRelatedRelease()
    {
        return $this->relatedRelease;
    }

    /**
     * Sets a new relatedRelease
     *
     * A Composite containing details of a Release (or a PhysicalProduct or a DigitalProduct derived from such a Release) which is related to current Image.
     *
     * @param \DDEX\ERN\ERN_400\RelatedReleaseWithReferenceType[] $relatedRelease
     * @return self
     */
    public function setRelatedRelease(array $relatedRelease = null)
    {
        $this->relatedRelease = $relatedRelease;
        return $this;
    }

    /**
     * Adds as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\RelatedResourceType $relatedResource
     */
    public function addToRelatedResource(\DDEX\ERN\ERN_400\RelatedResourceType $relatedResource)
    {
        $this->relatedResource[] = $relatedResource;
        return $this;
    }

    /**
     * isset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedResource($index)
    {
        return isset($this->relatedResource[$index]);
    }

    /**
     * unset relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedResource($index)
    {
        unset($this->relatedResource[$index]);
    }

    /**
     * Gets as relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @return \DDEX\ERN\ERN_400\RelatedResourceType[]
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a ResourceRelatedResourceReference referring to a Resource that is related to the current Image.
     *
     * @param \DDEX\ERN\ERN_400\RelatedResourceType[] $relatedResource
     * @return self
     */
    public function setRelatedResource(array $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Gets as containsHiddenContent
     *
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @return bool
     */
    public function getContainsHiddenContent()
    {
        return $this->containsHiddenContent;
    }

    /**
     * Sets a new containsHiddenContent
     *
     * The Flag indicating whether the Image contains content that is hidden in some way from the Consumer (=true) or not (=false).
     *
     * @param bool $containsHiddenContent
     * @return self
     */
    public function setContainsHiddenContent($containsHiddenContent)
    {
        $this->containsHiddenContent = $containsHiddenContent;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\DescriptionWithTerritoryType $description
     */
    public function addToDescription(\DDEX\ERN\ERN_400\DescriptionWithTerritoryType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @return \DDEX\ERN\ERN_400\DescriptionWithTerritoryType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the subject of the Image.
     *
     * @param \DDEX\ERN\ERN_400\DescriptionWithTerritoryType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A Composite containing details of a Description of the Image containing Keywords.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\KeywordsWithTerritoryType $keywords
     */
    public function addToKeywords(\DDEX\ERN\ERN_400\KeywordsWithTerritoryType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the Image containing Keywords.
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
     * A Composite containing details of a Description of the Image containing Keywords.
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
     * A Composite containing details of a Description of the Image containing Keywords.
     *
     * @return \DDEX\ERN\ERN_400\KeywordsWithTerritoryType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the Image containing Keywords.
     *
     * @param \DDEX\ERN\ERN_400\KeywordsWithTerritoryType[] $keywords
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
     * A Composite containing details of a Synopsis of the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\SynopsisWithTerritoryType $synopsis
     */
    public function addToSynopsis(\DDEX\ERN\ERN_400\SynopsisWithTerritoryType $synopsis)
    {
        $this->synopsis[] = $synopsis;
        return $this;
    }

    /**
     * isset synopsis
     *
     * A Composite containing details of a Synopsis of the Image.
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
     * A Composite containing details of a Synopsis of the Image.
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
     * A Composite containing details of a Synopsis of the Image.
     *
     * @return \DDEX\ERN\ERN_400\SynopsisWithTerritoryType[]
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the Image.
     *
     * @param \DDEX\ERN\ERN_400\SynopsisWithTerritoryType[] $synopsis
     * @return self
     */
    public function setSynopsis(array $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as technicalDetails
     *
     * A Composite containing technical details of the Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\TechnicalImageDetailsType $technicalDetails
     */
    public function addToTechnicalDetails(\DDEX\ERN\ERN_400\TechnicalImageDetailsType $technicalDetails)
    {
        $this->technicalDetails[] = $technicalDetails;
        return $this;
    }

    /**
     * isset technicalDetails
     *
     * A Composite containing technical details of the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalDetails($index)
    {
        return isset($this->technicalDetails[$index]);
    }

    /**
     * unset technicalDetails
     *
     * A Composite containing technical details of the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalDetails($index)
    {
        unset($this->technicalDetails[$index]);
    }

    /**
     * Gets as technicalDetails
     *
     * A Composite containing technical details of the Image.
     *
     * @return \DDEX\ERN\ERN_400\TechnicalImageDetailsType[]
     */
    public function getTechnicalDetails()
    {
        return $this->technicalDetails;
    }

    /**
     * Sets a new technicalDetails
     *
     * A Composite containing technical details of the Image.
     *
     * @param \DDEX\ERN\ERN_400\TechnicalImageDetailsType[] $technicalDetails
     * @return self
     */
    public function setTechnicalDetails(array $technicalDetails = null)
    {
        $this->technicalDetails = $technicalDetails;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_350;

/**
 * Class representing ResourceGroupType
 *
 * A ddex:Composite containing details of a ddex:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
 * XSD Type: ResourceGroup
 */
class ResourceGroupType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
     *
     * @var \DDEX\ddexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ddexC\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ddexC\ArtistType[] $displayConductor
     */
    private $displayConductor = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @var \DDEX\ddexC\ArtistType[] $displayComposer
     */
    private $displayComposer = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @var \DDEX\ERN\ERN_350\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @var \DDEX\ddexC\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @var \DDEX\ERN\ERN_350\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @var \DDEX\ddexC\ResourceGroupContentItemType[] $resourceGroupContentItem
     */
    private $resourceGroupContentItem = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @var string[] $resourceGroupResourceReferenceList
     */
    private $resourceGroupResourceReferenceList = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string $resourceGroupReleaseReference
     */
    private $resourceGroupReleaseReference = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DDEX\ddexC\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ern:ResourceGroup as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * A ddex:Composite containing details of a ddex:Title of the ern:ResourceGroup. Typically this will apply to 'sub' ddex:ResourceGroups within a hierarchy, e.g., different ddex:Albums in a ddex:Set.
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
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ern:ResourceGroup within all ddex:ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ern:ResourceGroup occurring at a particular level. The ddex:SequenceNumber is unique within its ddex:ResourceGroupLevelNumber.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\ddexC\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
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
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ddexC\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A ddex:Composite containing details of the ddex:DisplayArtist for the ern:ResourceGroup. The ddex:DisplayArtist may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ddexC\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistType $displayConductor
     */
    public function addToDisplayConductor(\DDEX\ddexC\ArtistType $displayConductor)
    {
        $this->displayConductor[] = $displayConductor;
        return $this;
    }

    /**
     * isset displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayConductor($index)
    {
        return isset($this->displayConductor[$index]);
    }

    /**
     * unset displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayConductor($index)
    {
        unset($this->displayConductor[$index]);
    }

    /**
     * Gets as displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ddexC\ArtistType[]
     */
    public function getDisplayConductor()
    {
        return $this->displayConductor;
    }

    /**
     * Sets a new displayConductor
     *
     * A ddex:Composite containing details of a ddex:DisplayConductor for the ern:ResourceGroup. A ddex:DisplayConductor may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ddexC\ArtistType[] $displayConductor
     * @return self
     */
    public function setDisplayConductor(array $displayConductor = null)
    {
        $this->displayConductor = $displayConductor;
        return $this;
    }

    /**
     * Adds as displayComposer
     *
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return self
     * @param \DDEX\ddexC\ArtistType $displayComposer
     */
    public function addToDisplayComposer(\DDEX\ddexC\ArtistType $displayComposer)
    {
        $this->displayComposer[] = $displayComposer;
        return $this;
    }

    /**
     * isset displayComposer
     *
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayComposer($index)
    {
        return isset($this->displayComposer[$index]);
    }

    /**
     * unset displayComposer
     *
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayComposer($index)
    {
        unset($this->displayComposer[$index]);
    }

    /**
     * Gets as displayComposer
     *
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @return \DDEX\ddexC\ArtistType[]
     */
    public function getDisplayComposer()
    {
        return $this->displayComposer;
    }

    /**
     * Sets a new displayComposer
     *
     * A ddex:Composite containing details of a ddex:DisplayComposer for the ern:ResourceGroup. A ddex:DisplayComposer may be described through ddex:Name, ddex:Identifier and Roles.
     *
     * @param \DDEX\ddexC\ArtistType[] $displayComposer
     * @return self
     */
    public function setDisplayComposer(array $displayComposer = null)
    {
        $this->displayComposer = $displayComposer;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @return self
     * @param \DDEX\ERN\ERN_350\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DDEX\ERN\ERN_350\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @return \DDEX\ERN\ERN_350\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to this ern:ResourceGroup. This includes roles such as the compiler of the ern:ResourceGroup, and may summarize details of ddex:Contributors to individual ddex:SoundRecordings or other content.
     *
     * @param \DDEX\ERN\ERN_350\ResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @return self
     * @param \DDEX\ddexC\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DDEX\ddexC\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @return \DDEX\ddexC\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to this ern:ResourceGroup.
     *
     * @param \DDEX\ddexC\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_350\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DDEX\ERN\ERN_350\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroup($index)
    {
        return isset($this->resourceGroup[$index]);
    }

    /**
     * unset resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroup($index)
    {
        unset($this->resourceGroup[$index]);
    }

    /**
     * Gets as resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @return \DDEX\ERN\ERN_350\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ern:ResourceGroup contained within this ern:ResourceGroup. ResourceGroups are used to signal groupings or sequences of ddex:Resources within a ddex:Release. Examples include individual carriers in a multi-carrier ddex:Release or classical ddex:Work groupings as well as the default order of ddex:Resources within a ddex:Release.
     *
     * @param \DDEX\ERN\ERN_350\ResourceGroupType[] $resourceGroup
     * @return self
     */
    public function setResourceGroup(array $resourceGroup = null)
    {
        $this->resourceGroup = $resourceGroup;
        return $this;
    }

    /**
     * Adds as resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceGroupContentItemType $resourceGroupContentItem
     */
    public function addToResourceGroupContentItem(\DDEX\ddexC\ResourceGroupContentItemType $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem[] = $resourceGroupContentItem;
        return $this;
    }

    /**
     * isset resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroupContentItem($index)
    {
        return isset($this->resourceGroupContentItem[$index]);
    }

    /**
     * unset resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroupContentItem($index)
    {
        unset($this->resourceGroupContentItem[$index]);
    }

    /**
     * Gets as resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return \DDEX\ddexC\ResourceGroupContentItemType[]
     */
    public function getResourceGroupContentItem()
    {
        return $this->resourceGroupContentItem;
    }

    /**
     * Sets a new resourceGroupContentItem
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param \DDEX\ddexC\ResourceGroupContentItemType[] $resourceGroupContentItem
     * @return self
     */
    public function setResourceGroupContentItem(array $resourceGroupContentItem = null)
    {
        $this->resourceGroupContentItem = $resourceGroupContentItem;
        return $this;
    }

    /**
     * Adds as resourceGroupResourceReference
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return self
     * @param string $resourceGroupResourceReference
     */
    public function addToResourceGroupResourceReferenceList($resourceGroupResourceReference)
    {
        $this->resourceGroupResourceReferenceList[] = $resourceGroupResourceReference;
        return $this;
    }

    /**
     * isset resourceGroupResourceReferenceList
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceGroupResourceReferenceList($index)
    {
        return isset($this->resourceGroupResourceReferenceList[$index]);
    }

    /**
     * unset resourceGroupResourceReferenceList
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceGroupResourceReferenceList($index)
    {
        unset($this->resourceGroupResourceReferenceList[$index]);
    }

    /**
     * Gets as resourceGroupResourceReferenceList
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @return string[]
     */
    public function getResourceGroupResourceReferenceList()
    {
        return $this->resourceGroupResourceReferenceList;
    }

    /**
     * Sets a new resourceGroupResourceReferenceList
     *
     * A ddex:Composite containing details of a ddex:Resource contained in the ern:ResourceGroup.
     *
     * @param string $resourceGroupResourceReferenceList
     * @return self
     */
    public function setResourceGroupResourceReferenceList(array $resourceGroupResourceReferenceList = null)
    {
        $this->resourceGroupResourceReferenceList = $resourceGroupResourceReferenceList;
        return $this;
    }

    /**
     * Gets as resourceGroupReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string
     */
    public function getResourceGroupReleaseReference()
    {
        return $this->resourceGroupReleaseReference;
    }

    /**
     * Sets a new resourceGroupReleaseReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of a ddex:Release which has the same content as the ern:ResourceGroup. This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $resourceGroupReleaseReference
     * @return self
     */
    public function setResourceGroupReleaseReference($resourceGroupReleaseReference)
    {
        $this->resourceGroupReleaseReference = $resourceGroupReleaseReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DDEX\ddexC\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds of a ddex:Release which has the same content as the ern:ResourceGroup. If available, a ddex:GRid has to be used. If the ddex:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ddex:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DDEX\ddexC\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\ddexC\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }
}


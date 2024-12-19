<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing ResourceGroupType
 *
 * A Composite containing details of a ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
 * XSD Type: ResourceGroup
 */
class ResourceGroupType
{
    /**
     * The Language and script for the Elements of the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
     *
     * @var \DDEX\DSR\DSR_430\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The number indicating the order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\DSR\DSR_430\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @var \DDEX\DSR\DSR_430\ResourceGroupType[] $resourceGroup
     */
    private $resourceGroup = [
        
    ];

    /**
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @var \DDEX\DSR\DSR_430\ResourceGroupContentItemType[] $resourceGroupContentItem
     */
    private $resourceGroupContentItem = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ResourceGroup as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\TitleType $title
     */
    public function addToTitle(\DDEX\DSR\DSR_430\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
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
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
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
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
     *
     * @return \DDEX\DSR\DSR_430\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the ResourceGroup. Typically this will apply to 'sub' ResourceGroups within a hierarchy, e.g., different Albums in a Set.
     *
     * @param \DDEX\DSR\DSR_430\TitleType[] $title
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
     * The number indicating the order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
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
     * The number indicating the order of the ResourceGroup within all ResourceGroups at this level. The default value is 1, and the value must be incremented by 1 for each ResourceGroup occurring at a particular level.
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
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\DSR\DSR_430\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\DSR\DSR_430\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the ResourceGroup. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\DSR\DSR_430\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ResourceGroupType $resourceGroup
     */
    public function addToResourceGroup(\DDEX\DSR\DSR_430\ResourceGroupType $resourceGroup)
    {
        $this->resourceGroup[] = $resourceGroup;
        return $this;
    }

    /**
     * isset resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
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
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
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
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @return \DDEX\DSR\DSR_430\ResourceGroupType[]
     */
    public function getResourceGroup()
    {
        return $this->resourceGroup;
    }

    /**
     * Sets a new resourceGroup
     *
     * A ResourceGroup contained within this ResourceGroup. ResourceGroups are used to signal groupings or sequences of Resources within a Release. Examples include individual carriers in a multi-carrier Release or classical Work groupings as well as the default order of Resources within a Release.
     *
     * @param \DDEX\DSR\DSR_430\ResourceGroupType[] $resourceGroup
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ResourceGroupContentItemType $resourceGroupContentItem
     */
    public function addToResourceGroupContentItem(\DDEX\DSR\DSR_430\ResourceGroupContentItemType $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem[] = $resourceGroupContentItem;
        return $this;
    }

    /**
     * isset resourceGroupContentItem
     *
     * A Composite containing details of a Resource contained in the ResourceGroup.
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
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
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @return \DDEX\DSR\DSR_430\ResourceGroupContentItemType[]
     */
    public function getResourceGroupContentItem()
    {
        return $this->resourceGroupContentItem;
    }

    /**
     * Sets a new resourceGroupContentItem
     *
     * A Composite containing details of a Resource contained in the ResourceGroup.
     *
     * @param \DDEX\DSR\DSR_430\ResourceGroupContentItemType[] $resourceGroupContentItem
     * @return self
     */
    public function setResourceGroupContentItem(array $resourceGroupContentItem)
    {
        $this->resourceGroupContentItem = $resourceGroupContentItem;
        return $this;
    }
}


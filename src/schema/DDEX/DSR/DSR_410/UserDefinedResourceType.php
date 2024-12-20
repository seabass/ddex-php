<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing UserDefinedResourceType
 *
 * A ddex:Composite containing details of a ddex:UserDefinedResource.
 * XSD Type: UserDefinedResource
 */
class UserDefinedResourceType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\UserDefinedResourceTypeType $userDefinedResourceType
     */
    private $userDefinedResourceType = null;

    /**
     * The ddex:Flag indicating whether the ddexC:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\UserDefinedResourceIdType[] $userDefinedResourceId
     */
    private $userDefinedResourceId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $indirectUserDefinedResourceId
     */
    private $indirectUserDefinedResourceId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
     *
     * @var \DDEX\ddexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @var \DDEX\ddexC\UserDefinedValueType[] $userDefinedValue
     */
    private $userDefinedValue = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @var \DDEX\ddexC\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     */
    private $userDefinedResourceDetailsByTerritory = [
        
    ];

    /**
     * A ddex:URL from which the dsr:UserDefinedResource was sold.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResource as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as userDefinedResourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:UserDefinedResource.
     *
     * @return \DDEX\ddexC\UserDefinedResourceTypeType
     */
    public function getUserDefinedResourceType()
    {
        return $this->userDefinedResourceType;
    }

    /**
     * Sets a new userDefinedResourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:UserDefinedResource.
     *
     * @param \DDEX\ddexC\UserDefinedResourceTypeType $userDefinedResourceType
     * @return self
     */
    public function setUserDefinedResourceType(?\DDEX\ddexC\UserDefinedResourceTypeType $userDefinedResourceType = null)
    {
        $this->userDefinedResourceType = $userDefinedResourceType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ddexC:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ddexC:UserDefinedResource is related to an ddex:Artist (=True) or not (=False).
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
     * Adds as userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ddexC\UserDefinedResourceIdType $userDefinedResourceId
     */
    public function addToUserDefinedResourceId(\DDEX\ddexC\UserDefinedResourceIdType $userDefinedResourceId)
    {
        $this->userDefinedResourceId[] = $userDefinedResourceId;
        return $this;
    }

    /**
     * isset userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResourceId($index)
    {
        return isset($this->userDefinedResourceId[$index]);
    }

    /**
     * unset userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResourceId($index)
    {
        unset($this->userDefinedResourceId[$index]);
    }

    /**
     * Gets as userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @return \DDEX\ddexC\UserDefinedResourceIdType[]
     */
    public function getUserDefinedResourceId()
    {
        return $this->userDefinedResourceId;
    }

    /**
     * Sets a new userDefinedResourceId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:UserDefinedResource.
     *
     * @param \DDEX\ddexC\UserDefinedResourceIdType[] $userDefinedResourceId
     * @return self
     */
    public function setUserDefinedResourceId(array $userDefinedResourceId)
    {
        $this->userDefinedResourceId = $userDefinedResourceId;
        return $this;
    }

    /**
     * Adds as indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $indirectUserDefinedResourceId
     */
    public function addToIndirectUserDefinedResourceId(\DDEX\ddexC\MusicalWorkIdType $indirectUserDefinedResourceId)
    {
        $this->indirectUserDefinedResourceId[] = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * isset indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectUserDefinedResourceId($index)
    {
        return isset($this->indirectUserDefinedResourceId[$index]);
    }

    /**
     * unset indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectUserDefinedResourceId($index)
    {
        unset($this->indirectUserDefinedResourceId[$index]);
    }

    /**
     * Gets as indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getIndirectUserDefinedResourceId()
    {
        return $this->indirectUserDefinedResourceId;
    }

    /**
     * Sets a new indirectUserDefinedResourceId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:UserDefinedResource.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $indirectUserDefinedResourceId
     * @return self
     */
    public function setIndirectUserDefinedResourceId(array $indirectUserDefinedResourceId = null)
    {
        $this->indirectUserDefinedResourceId = $indirectUserDefinedResourceId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:UserDefinedResource within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * Adds as resourceMusicalWorkReference
     *
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:UserDefinedResource.
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
     * Adds as title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:UserDefinedResource.
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
     * Adds as userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return self
     * @param \DDEX\ddexC\UserDefinedValueType $userDefinedValue
     */
    public function addToUserDefinedValue(\DDEX\ddexC\UserDefinedValueType $userDefinedValue)
    {
        $this->userDefinedValue[] = $userDefinedValue;
        return $this;
    }

    /**
     * isset userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedValue($index)
    {
        return isset($this->userDefinedValue[$index]);
    }

    /**
     * unset userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedValue($index)
    {
        unset($this->userDefinedValue[$index]);
    }

    /**
     * Gets as userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return \DDEX\ddexC\UserDefinedValueType[]
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @param \DDEX\ddexC\UserDefinedValueType[] $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue(array $userDefinedValue = null)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Adds as userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ddexC\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory
     */
    public function addToUserDefinedResourceDetailsByTerritory(\DDEX\ddexC\UserDefinedResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory[] = $userDefinedResourceDetailsByTerritory;
        return $this;
    }

    /**
     * isset userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResourceDetailsByTerritory($index)
    {
        return isset($this->userDefinedResourceDetailsByTerritory[$index]);
    }

    /**
     * unset userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResourceDetailsByTerritory($index)
    {
        unset($this->userDefinedResourceDetailsByTerritory[$index]);
    }

    /**
     * Gets as userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @return \DDEX\ddexC\UserDefinedResourceDetailsByTerritoryType[]
     */
    public function getUserDefinedResourceDetailsByTerritory()
    {
        return $this->userDefinedResourceDetailsByTerritory;
    }

    /**
     * Sets a new userDefinedResourceDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:UserDefinedResource which may vary according to ddex:Territory of release.
     *
     * @param \DDEX\ddexC\UserDefinedResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     * @return self
     */
    public function setUserDefinedResourceDetailsByTerritory(array $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory = $userDefinedResourceDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A ddex:URL from which the dsr:UserDefinedResource was sold.
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
     * A ddex:URL from which the dsr:UserDefinedResource was sold.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }
}


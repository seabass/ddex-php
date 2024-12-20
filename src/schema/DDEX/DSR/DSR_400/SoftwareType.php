<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SoftwareType
 *
 * A ddex:Composite containing details of a ddex:Software.
 * XSD Type: Software
 */
class SoftwareType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddexC:Software.
     *
     * @var \DDEX\ddexC\SoftwareTypeType $softwareType
     */
    private $softwareType = null;

    /**
     * The ddex:Flag indicating whether the ddexC:Software is related to an ddex:Artist (=True) or not (=False).
     *
     * @var bool $isArtistRelated
     */
    private $isArtistRelated = null;

    /**
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @var \DDEX\ddexC\SoftwareIdType[] $softwareId
     */
    private $softwareId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $indirectSoftwareId
     */
    private $indirectSoftwareId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
     *
     * @var \DDEX\ddexC\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
     *
     * @var \DDEX\ddexC\ResourceContainedResourceReferenceType[] $resourceContainedResourceReferenceList
     */
    private $resourceContainedResourceReferenceList = null;

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
     *
     * @var \DDEX\ddexC\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddexC:Software was created.
     *
     * @var \DDEX\ddexC\EventDateType $creationDate
     */
    private $creationDate = null;

    /**
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @var \DDEX\ddexC\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     */
    private $softwareDetailsByTerritory = [
        
    ];

    /**
     * A ddex:URL from which the dsr:Software was sold.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:Software as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as softwareType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:Software.
     *
     * @return \DDEX\ddexC\SoftwareTypeType
     */
    public function getSoftwareType()
    {
        return $this->softwareType;
    }

    /**
     * Sets a new softwareType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddexC:Software.
     *
     * @param \DDEX\ddexC\SoftwareTypeType $softwareType
     * @return self
     */
    public function setSoftwareType(?\DDEX\ddexC\SoftwareTypeType $softwareType = null)
    {
        $this->softwareType = $softwareType;
        return $this;
    }

    /**
     * Gets as isArtistRelated
     *
     * The ddex:Flag indicating whether the ddexC:Software is related to an ddex:Artist (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ddexC:Software is related to an ddex:Artist (=True) or not (=False).
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
     * Adds as softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @return self
     * @param \DDEX\ddexC\SoftwareIdType $softwareId
     */
    public function addToSoftwareId(\DDEX\ddexC\SoftwareIdType $softwareId)
    {
        $this->softwareId[] = $softwareId;
        return $this;
    }

    /**
     * isset softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftwareId($index)
    {
        return isset($this->softwareId[$index]);
    }

    /**
     * unset softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftwareId($index)
    {
        unset($this->softwareId[$index]);
    }

    /**
     * Gets as softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @return \DDEX\ddexC\SoftwareIdType[]
     */
    public function getSoftwareId()
    {
        return $this->softwareId;
    }

    /**
     * Sets a new softwareId
     *
     * A ddex:Composite containing details of ddex:Identifiers of the ddexC:Software.
     *
     * @param \DDEX\ddexC\SoftwareIdType[] $softwareId
     * @return self
     */
    public function setSoftwareId(array $softwareId)
    {
        $this->softwareId = $softwareId;
        return $this;
    }

    /**
     * Adds as indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $indirectSoftwareId
     */
    public function addToIndirectSoftwareId(\DDEX\ddexC\MusicalWorkIdType $indirectSoftwareId)
    {
        $this->indirectSoftwareId[] = $indirectSoftwareId;
        return $this;
    }

    /**
     * isset indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectSoftwareId($index)
    {
        return isset($this->indirectSoftwareId[$index]);
    }

    /**
     * unset indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectSoftwareId($index)
    {
        unset($this->indirectSoftwareId[$index]);
    }

    /**
     * Gets as indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getIndirectSoftwareId()
    {
        return $this->indirectSoftwareId;
    }

    /**
     * Sets a new indirectSoftwareId
     *
     * A ddex:Composite containing details of a ddex:MusicalWorkId of a ddex:MusicalWork used in the ddexC:Software.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $indirectSoftwareId
     * @return self
     */
    public function setIndirectSoftwareId(array $indirectSoftwareId = null)
    {
        $this->indirectSoftwareId = $indirectSoftwareId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * The ddex:Identifier (specific to the ddex:Message) of the ddexC:Software within the ddex:Release which contains it. This is a ddex:LocalResourceAnchor starting with the letter A.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
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
     * A ddex:Composite containing details of one or more ddex:MusicalWorks contained in the ddexC:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
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
     * A ddex:Composite containing details of ddex:ResourceContainedResourceReferences referring to a ddex:Resource that is contained in the current ddexC:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
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
     * A ddex:Composite containing details of a ddex:Title of the ddexC:Software.
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
     * Gets as creationDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddexC:Software was created.
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddexC:Software was created.
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
     * Adds as softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ddexC\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory
     */
    public function addToSoftwareDetailsByTerritory(\DDEX\ddexC\SoftwareDetailsByTerritoryType $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory[] = $softwareDetailsByTerritory;
        return $this;
    }

    /**
     * isset softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftwareDetailsByTerritory($index)
    {
        return isset($this->softwareDetailsByTerritory[$index]);
    }

    /**
     * unset softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftwareDetailsByTerritory($index)
    {
        unset($this->softwareDetailsByTerritory[$index]);
    }

    /**
     * Gets as softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @return \DDEX\ddexC\SoftwareDetailsByTerritoryType[]
     */
    public function getSoftwareDetailsByTerritory()
    {
        return $this->softwareDetailsByTerritory;
    }

    /**
     * Sets a new softwareDetailsByTerritory
     *
     * A ddex:Composite containing details of the ddexC:Software which may vary according to ddex:Territory of release.
     *
     * @param \DDEX\ddexC\SoftwareDetailsByTerritoryType[] $softwareDetailsByTerritory
     * @return self
     */
    public function setSoftwareDetailsByTerritory(array $softwareDetailsByTerritory)
    {
        $this->softwareDetailsByTerritory = $softwareDetailsByTerritory;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A ddex:URL from which the dsr:Software was sold.
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
     * A ddex:URL from which the dsr:Software was sold.
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


<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing UserDefinedResourceType
 *
 * A Composite containing details of a UserDefinedResource.
 * XSD Type: UserDefinedResource
 */
class UserDefinedResourceType
{
    /**
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of Identifiers of the mwninedResource.
     *
     * @var \DDEX\MWN\MWN_100\ResourceProprietaryIdType[] $userDefinedResourceId
     */
    private $userDefinedResourceId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @var \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @var \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
     *
     * @var \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     */
    private $userDefinedResourceDetailsByTerritory = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as userDefinedResourceId
     *
     * A Composite containing details of Identifiers of the mwninedResource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceProprietaryIdType $userDefinedResourceId
     */
    public function addToUserDefinedResourceId(\DDEX\MWN\MWN_100\ResourceProprietaryIdType $userDefinedResourceId)
    {
        $this->userDefinedResourceId[] = $userDefinedResourceId;
        return $this;
    }

    /**
     * isset userDefinedResourceId
     *
     * A Composite containing details of Identifiers of the mwninedResource.
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
     * A Composite containing details of Identifiers of the mwninedResource.
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
     * A Composite containing details of Identifiers of the mwninedResource.
     *
     * @return \DDEX\MWN\MWN_100\ResourceProprietaryIdType[]
     */
    public function getUserDefinedResourceId()
    {
        return $this->userDefinedResourceId;
    }

    /**
     * Sets a new userDefinedResourceId
     *
     * A Composite containing details of Identifiers of the mwninedResource.
     *
     * @param \DDEX\MWN\MWN_100\ResourceProprietaryIdType[] $userDefinedResourceId
     * @return self
     */
    public function setUserDefinedResourceId(array $userDefinedResourceId)
    {
        $this->userDefinedResourceId = $userDefinedResourceId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @return \DDEX\MWN\MWN_100\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @param \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\TitleType $title
     */
    public function addToTitle(\DDEX\MWN\MWN_100\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
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
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
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
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @return \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory
     */
    public function addToUserDefinedResourceDetailsByTerritory(\DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $userDefinedResourceDetailsByTerritory)
    {
        $this->userDefinedResourceDetailsByTerritory[] = $userDefinedResourceDetailsByTerritory;
        return $this;
    }

    /**
     * isset userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
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
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
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
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
     *
     * @return \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[]
     */
    public function getUserDefinedResourceDetailsByTerritory()
    {
        return $this->userDefinedResourceDetailsByTerritory;
    }

    /**
     * Sets a new userDefinedResourceDetailsByTerritory
     *
     * A Composite containing details of the mwninedResource which may vary according to Territory of release.
     *
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $userDefinedResourceDetailsByTerritory
     * @return self
     */
    public function setUserDefinedResourceDetailsByTerritory(array $userDefinedResourceDetailsByTerritory = null)
    {
        $this->userDefinedResourceDetailsByTerritory = $userDefinedResourceDetailsByTerritory;
        return $this;
    }
}


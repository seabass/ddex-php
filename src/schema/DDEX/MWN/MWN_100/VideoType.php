<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of an Identifier of the Video.
     *
     * @var \DDEX\MWN\MWN_100\VideoIdType[] $videoId
     */
    private $videoId = [
        
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
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @var \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $videoDetailsByTerritory
     */
    private $videoDetailsByTerritory = [
        
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
     * Adds as videoId
     *
     * A Composite containing details of an Identifier of the Video.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\MWN\MWN_100\VideoIdType $videoId)
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
     * @return \DDEX\MWN\MWN_100\VideoIdType[]
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
     * @param \DDEX\MWN\MWN_100\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId)
    {
        $this->videoId = $videoId;
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
     * Adds as videoDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the Video which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $videoDetailsByTerritory
     */
    public function addToVideoDetailsByTerritory(\DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $videoDetailsByTerritory)
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
     * @return \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[]
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
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $videoDetailsByTerritory
     * @return self
     */
    public function setVideoDetailsByTerritory(array $videoDetailsByTerritory = null)
    {
        $this->videoDetailsByTerritory = $videoDetailsByTerritory;
        return $this;
    }
}


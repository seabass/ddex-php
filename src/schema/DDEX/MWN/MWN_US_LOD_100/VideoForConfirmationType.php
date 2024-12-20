<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing VideoForConfirmationType
 *
 * A Composite containing details of a Video.
 * Explanatory Note: This Composite is named VideoForConfirmation to disambiguate it from the basic Video Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: VideoForConfirmation
 */
class VideoForConfirmationType
{
    /**
     * The Identifier (specific to the Message) of the Video within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the Type of the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\VideoTypeType $videoType
     */
    private $videoType = null;

    /**
     * A Composite containing details of an Identifier of the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\VideoIdType $videoId
     */
    private $videoId = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     */
    private $title = null;

    /**
     * A Description that contains information for disambiguating Resources.
     *
     * @var string $disambiguationDescription
     */
    private $disambiguationDescription = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\DisplayArtistNameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of the PLine for the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PLineWithTerritoryType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the CLine for the Video.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CLineWithTerritoryType $cLine
     */
    private $cLine = null;

    /**
     * The Duration of the Video (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

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
     * Gets as videoType
     *
     * A Composite containing details of the Type of the Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\VideoTypeType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\VideoTypeType $videoType
     * @return self
     */
    public function setVideoType(?\DDEX\MWN\MWN_US_LOD_100\VideoTypeType $videoType = null)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Gets as videoId
     *
     * A Composite containing details of an Identifier of the Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\VideoIdType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\VideoIdType $videoId
     * @return self
     */
    public function setVideoId(\DDEX\MWN\MWN_US_LOD_100\VideoIdType $videoId)
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     * @return self
     */
    public function setTitle(?\DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as disambiguationDescription
     *
     * A Description that contains information for disambiguating Resources.
     *
     * @return string
     */
    public function getDisambiguationDescription()
    {
        return $this->disambiguationDescription;
    }

    /**
     * Sets a new disambiguationDescription
     *
     * A Description that contains information for disambiguating Resources.
     *
     * @param string $disambiguationDescription
     * @return self
     */
    public function setDisambiguationDescription($disambiguationDescription)
    {
        $this->disambiguationDescription = $disambiguationDescription;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\DisplayArtistNameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\DisplayArtistNameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?\DDEX\MWN\MWN_US_LOD_100\DisplayArtistNameType $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the Video.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\MWN\MWN_US_LOD_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\ResourceMusicalWorkReferenceType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\PLineWithTerritoryType
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Video.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\PLineWithTerritoryType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\MWN\MWN_US_LOD_100\PLineWithTerritoryType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the Video.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CLineWithTerritoryType
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Video.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CLineWithTerritoryType $cLine
     * @return self
     */
    public function setCLine(?\DDEX\MWN\MWN_US_LOD_100\CLineWithTerritoryType $cLine = null)
    {
        $this->cLine = $cLine;
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
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }
}


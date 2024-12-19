<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing SoundRecordingType
 *
 * A Composite containing details of a SoundRecording.
 * XSD Type: SoundRecording
 */
class SoundRecordingType
{
    /**
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of SoundRecordingIds.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\SoundRecordingIdType $soundRecordingId
     */
    private $soundRecordingId = null;

    /**
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/referencetitle-of-a-soundrecording
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ReferenceTitleType $title
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
     * @var \DDEX\MWN\MWN_US_LIC_101\DisplayArtistNameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LabelType[] $label
     */
    private $label = [
        
    ];

    /**
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PLineWithTerritoryType $pLine
     */
    private $pLine = null;

    /**
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * The Identifier (specific to the Message) of the SoundRecording within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
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
     * Gets as soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\SoundRecordingIdType
     */
    public function getSoundRecordingId()
    {
        return $this->soundRecordingId;
    }

    /**
     * Sets a new soundRecordingId
     *
     * A Composite containing details of SoundRecordingIds.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\SoundRecordingIdType $soundRecordingId
     * @return self
     */
    public function setSoundRecordingId(\DDEX\MWN\MWN_US_LIC_101\SoundRecordingIdType $soundRecordingId)
    {
        $this->soundRecordingId = $soundRecordingId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/referencetitle-of-a-soundrecording
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ReferenceTitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of the ReferenceTitle of the SoundRecording.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/referencetitle-of-a-soundrecording
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ReferenceTitleType $title
     * @return self
     */
    public function setTitle(\DDEX\MWN\MWN_US_LIC_101\ReferenceTitleType $title)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\DisplayArtistNameType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\DisplayArtistNameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?\DDEX\MWN\MWN_US_LIC_101\DisplayArtistNameType $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as label
     *
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\LabelType $label
     */
    public function addToLabel(\DDEX\MWN\MWN_US_LIC_101\LabelType $label)
    {
        $this->label[] = $label;
        return $this;
    }

    /**
     * isset label
     *
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label
     *
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabel($index)
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label
     *
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LabelType[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A Composite containing a Label under which the Release is to be marketed.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LabelType[] $label
     * @return self
     */
    public function setLabel(array $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\MWN\MWN_US_LIC_101\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
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
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
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
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the SoundRecording.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
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
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PLineWithTerritoryType
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the SoundRecording.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\PLineWithTerritoryType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\MWN\MWN_US_LIC_101\PLineWithTerritoryType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
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


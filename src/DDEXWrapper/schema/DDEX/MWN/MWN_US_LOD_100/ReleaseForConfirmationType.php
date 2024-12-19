<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ReleaseForConfirmationType
 *
 * A Composite containing details of a DDEX Release.
 * Explanatory Note: This Composite is named ReleaseForConfirmation to disambiguate it from the basic mc-us-lic:Release Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: ReleaseForConfirmation
 */
class ReleaseForConfirmationType
{
    /**
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseTypeType $releaseType
     */
    private $releaseType = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseIdForNotificationType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReferenceTitleType $title
     */
    private $title = null;

    /**
     * A Description that contains information for disambiguating Releases.
     *
     * @var string $disambiguationDescription
     */
    private $disambiguationDescription = null;

    /**
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     */
    private $releaseResourceReferenceList = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\DisplayArtistNameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of the PLine for the Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PLineType $pLine
     */
    private $pLine = null;

    /**
     * A Composite containing details of the CLine for the Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CLineType $cLine
     */
    private $cLine = null;

    /**
     * The sum of the total Durations of all linear media assets contained in the Release (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). Note that this Duration may differ from the Duration of the Resources included in the Message.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY[-MM[-DD]]).
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\EventDateType $releaseDate
     */
    private $releaseDate = null;

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
     * Gets as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseTypeType
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers. This may be overridden by the ReleaseType for specific Territories as specified in the ReleaseDetailsByTerritory Composite.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseTypeType $releaseType
     * @return self
     */
    public function setReleaseType(?\DDEX\MWN\MWN_US_LOD_100\ReleaseTypeType $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseIdForNotificationType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseIdForNotificationType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\MWN\MWN_US_LOD_100\ReleaseIdForNotificationType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of the ReferenceTitle of the Release.
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
     * A Composite containing details of the ReferenceTitle of the Release.
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
     * A Description that contains information for disambiguating Releases.
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
     * A Description that contains information for disambiguating Releases.
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
     * Adds as releaseResourceReference
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReferenceList(\DDEX\MWN\MWN_US_LOD_100\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReferenceList[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseResourceReferenceList($index)
    {
        return isset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * unset releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseResourceReferenceList($index)
    {
        unset($this->releaseResourceReferenceList[$index]);
    }

    /**
     * Gets as releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReferenceList()
    {
        return $this->releaseResourceReferenceList;
    }

    /**
     * Sets a new releaseResourceReferenceList
     *
     * A Composite containing details of one or more Resources contained in the Release.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseResourceReferenceType[] $releaseResourceReferenceList
     * @return self
     */
    public function setReleaseResourceReferenceList(array $releaseResourceReferenceList)
    {
        $this->releaseResourceReferenceList = $releaseResourceReferenceList;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
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
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\PLineType
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\PLineType $pLine
     * @return self
     */
    public function setPLine(?\DDEX\MWN\MWN_US_LOD_100\PLineType $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CLineType
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CLineType $cLine
     * @return self
     */
    public function setCLine(?\DDEX\MWN\MWN_US_LOD_100\CLineType $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The sum of the total Durations of all linear media assets contained in the Release (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). Note that this Duration may differ from the Duration of the Resources included in the Message.
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
     * The sum of the total Durations of all linear media assets contained in the Release (using the ISO 8601 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S). Note that this Duration may differ from the Duration of the Resources included in the Message.
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
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY[-MM[-DD]]).
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage in its current form, whether for physical or electronic/online distribution (in ISO 8601 format: YYYY[-MM[-DD]]).
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(?\DDEX\MWN\MWN_US_LOD_100\EventDateType $releaseDate = null)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}


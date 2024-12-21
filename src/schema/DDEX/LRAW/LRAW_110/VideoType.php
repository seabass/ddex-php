<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing VideoType
 *
 * A Composite containing details of a Video.
 * XSD Type: Video
 */
class VideoType
{
    /**
     * A Composite containing details of VideoIds.
     *
     * @var \DDEX\LRAW\LRAW_110\VideoIdType[] $resourceId
     */
    private $resourceId = [
        
    ];

    /**
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @var \DDEX\LRAW\LRAW_110\ReferenceTitleTextType[] $referenceTitleText
     */
    private $referenceTitleText = [
        
    ];

    /**
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @var \DDEX\LRAW\LRAW_110\ReferenceTitleType[] $referenceTitle
     */
    private $referenceTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @var \DDEX\LRAW\LRAW_110\NameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\LRAW\LRAW_110\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * The Duration of the SoundRecording (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The Year of the PLine.
     *
     * @var int $pLineYear
     */
    private $pLineYear = null;

    /**
     * Adds as resourceId
     *
     * A Composite containing details of VideoIds.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\VideoIdType $resourceId
     */
    public function addToResourceId(\DDEX\LRAW\LRAW_110\VideoIdType $resourceId)
    {
        $this->resourceId[] = $resourceId;
        return $this;
    }

    /**
     * isset resourceId
     *
     * A Composite containing details of VideoIds.
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
     * A Composite containing details of VideoIds.
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
     * A Composite containing details of VideoIds.
     *
     * @return \DDEX\LRAW\LRAW_110\VideoIdType[]
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of VideoIds.
     *
     * @param \DDEX\LRAW\LRAW_110\VideoIdType[] $resourceId
     * @return self
     */
    public function setResourceId(array $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as referenceTitleText
     *
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\ReferenceTitleTextType $referenceTitleText
     */
    public function addToReferenceTitleText(\DDEX\LRAW\LRAW_110\ReferenceTitleTextType $referenceTitleText)
    {
        $this->referenceTitleText[] = $referenceTitleText;
        return $this;
    }

    /**
     * isset referenceTitleText
     *
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTitleText($index)
    {
        return isset($this->referenceTitleText[$index]);
    }

    /**
     * unset referenceTitleText
     *
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTitleText($index)
    {
        unset($this->referenceTitleText[$index]);
    }

    /**
     * Gets as referenceTitleText
     *
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @return \DDEX\LRAW\LRAW_110\ReferenceTitleTextType[]
     */
    public function getReferenceTitleText()
    {
        return $this->referenceTitleText;
    }

    /**
     * Sets a new referenceTitleText
     *
     * A Composite containing details of the Title of the SoundRecording.
     *
     * @param \DDEX\LRAW\LRAW_110\ReferenceTitleTextType[] $referenceTitleText
     * @return self
     */
    public function setReferenceTitleText(array $referenceTitleText)
    {
        $this->referenceTitleText = $referenceTitleText;
        return $this;
    }

    /**
     * Adds as referenceTitle
     *
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\ReferenceTitleType $referenceTitle
     */
    public function addToReferenceTitle(\DDEX\LRAW\LRAW_110\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle[] = $referenceTitle;
        return $this;
    }

    /**
     * isset referenceTitle
     *
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceTitle($index)
    {
        return isset($this->referenceTitle[$index]);
    }

    /**
     * unset referenceTitle
     *
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceTitle($index)
    {
        unset($this->referenceTitle[$index]);
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @return \DDEX\LRAW\LRAW_110\ReferenceTitleType[]
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of a structured Title of the SoundRecording.
     *
     * @param \DDEX\LRAW\LRAW_110\ReferenceTitleType[] $referenceTitle
     * @return self
     */
    public function setReferenceTitle(array $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @return \DDEX\LRAW\LRAW_110\NameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer. A Resource-level DisplayArtistName shall only be provided if it differs from the DisplayArtistName for a Release that contains the Resource and is communicated in the same XML message.
     *
     * @param \DDEX\LRAW\LRAW_110\NameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(?\DDEX\LRAW\LRAW_110\NameType $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\LRAW\LRAW_110\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
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
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\LRAW\LRAW_110\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of the DisplayArtist for the SoundRecording. The DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\LRAW\LRAW_110\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
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

    /**
     * Gets as pLineYear
     *
     * The Year of the PLine.
     *
     * @return int
     */
    public function getPLineYear()
    {
        return $this->pLineYear;
    }

    /**
     * Sets a new pLineYear
     *
     * The Year of the PLine.
     *
     * @param int $pLineYear
     * @return self
     */
    public function setPLineYear($pLineYear)
    {
        $this->pLineYear = $pLineYear;
        return $this;
    }
}


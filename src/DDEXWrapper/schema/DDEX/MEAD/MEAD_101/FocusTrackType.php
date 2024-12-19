<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing FocusTrackType
 *
 * A Composite containing details of a focus track.
 * XSD Type: FocusTrack
 */
class FocusTrackType
{
    /**
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @var \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\MEAD\MEAD_101\DisplayArtistNameWithPronunciationType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * The number indicating the order of the focus Track in a group of Tracks. It should not be provided unless more than one focus track is provided for a specific Artist.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @var \DDEX\MEAD\MEAD_101\PeriodWithTimeType[] $periodOfBeingFocusTrack
     */
    private $periodOfBeingFocusTrack = [
        
    ];

    /**
     * A Comment regarding the focus track.
     *
     * @var \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return string[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceIdType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of ResourceIds for the Resource.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(\DDEX\MEAD\MEAD_101\ResourceIdType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\TitleWithPronunciationType $title
     */
    public function addToTitle(\DDEX\MEAD\MEAD_101\TitleWithPronunciationType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
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
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
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
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @return \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Work as the MessageSender suggests it should be shown to the Consumer.
     *
     * @param \DDEX\MEAD\MEAD_101\TitleWithPronunciationType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistNameWithPronunciationType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\MEAD\MEAD_101\DisplayArtistNameWithPronunciationType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return \DDEX\MEAD\MEAD_101\DisplayArtistNameWithPronunciationType[]
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
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistNameWithPronunciationType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the focus Track in a group of Tracks. It should not be provided unless more than one focus track is provided for a specific Artist.
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
     * The number indicating the order of the focus Track in a group of Tracks. It should not be provided unless more than one focus track is provided for a specific Artist.
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
     * Adds as periodOfBeingFocusTrack
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PeriodWithTimeType $periodOfBeingFocusTrack
     */
    public function addToPeriodOfBeingFocusTrack(\DDEX\MEAD\MEAD_101\PeriodWithTimeType $periodOfBeingFocusTrack)
    {
        $this->periodOfBeingFocusTrack[] = $periodOfBeingFocusTrack;
        return $this;
    }

    /**
     * isset periodOfBeingFocusTrack
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriodOfBeingFocusTrack($index)
    {
        return isset($this->periodOfBeingFocusTrack[$index]);
    }

    /**
     * unset periodOfBeingFocusTrack
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriodOfBeingFocusTrack($index)
    {
        unset($this->periodOfBeingFocusTrack[$index]);
    }

    /**
     * Gets as periodOfBeingFocusTrack
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return \DDEX\MEAD\MEAD_101\PeriodWithTimeType[]
     */
    public function getPeriodOfBeingFocusTrack()
    {
        return $this->periodOfBeingFocusTrack;
    }

    /**
     * Sets a new periodOfBeingFocusTrack
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param \DDEX\MEAD\MEAD_101\PeriodWithTimeType[] $periodOfBeingFocusTrack
     * @return self
     */
    public function setPeriodOfBeingFocusTrack(array $periodOfBeingFocusTrack = null)
    {
        $this->periodOfBeingFocusTrack = $periodOfBeingFocusTrack;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Comment regarding the focus track.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType $comment
     */
    public function addToComment(\DDEX\MEAD\MEAD_101\TextWithoutTerritoryType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A Comment regarding the focus track.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A Comment regarding the focus track.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A Comment regarding the focus track.
     *
     * @return \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Comment regarding the focus track.
     *
     * @param \DDEX\MEAD\MEAD_101\TextWithoutTerritoryType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing FocusType
 *
 * A Composite containing details of a focus track.
 * XSD Type: Focus
 */
class FocusType
{
    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a Resource.
     *
     * @var \DDEX\PIE\PIE_100\ResourceSummaryType $focusTrack
     */
    private $focusTrack = null;

    /**
     * A Composite containing details of a Release.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseSummaryType $focusRelease
     */
    private $focusRelease = null;

    /**
     * A Composite containing details of a MusicalWork.
     *
     * @var \DDEX\PIE\PIE_100\WorkSummaryType $focusWork
     */
    private $focusWork = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $writer
     */
    private $writer = [
        
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
     * @var \DDEX\PIE\PIE_100\PeriodWithTimeType[] $periodOfBeingFocus
     */
    private $periodOfBeingFocus = [
        
    ];

    /**
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string[] $territoryOfBeingFocusTrackDescription
     */
    private $territoryOfBeingFocusTrackDescription = [
        
    ];

    /**
     * A Comment regarding the focus track.
     *
     * @var \DDEX\PIE\PIE_100\TextWithoutTerritoryType[] $comment
     */
    private $comment = [
        
    ];

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
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
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
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as focusTrack
     *
     * A Composite containing details of a Resource.
     *
     * @return \DDEX\PIE\PIE_100\ResourceSummaryType
     */
    public function getFocusTrack()
    {
        return $this->focusTrack;
    }

    /**
     * Sets a new focusTrack
     *
     * A Composite containing details of a Resource.
     *
     * @param \DDEX\PIE\PIE_100\ResourceSummaryType $focusTrack
     * @return self
     */
    public function setFocusTrack(?\DDEX\PIE\PIE_100\ResourceSummaryType $focusTrack = null)
    {
        $this->focusTrack = $focusTrack;
        return $this;
    }

    /**
     * Gets as focusRelease
     *
     * A Composite containing details of a Release.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseSummaryType
     */
    public function getFocusRelease()
    {
        return $this->focusRelease;
    }

    /**
     * Sets a new focusRelease
     *
     * A Composite containing details of a Release.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseSummaryType $focusRelease
     * @return self
     */
    public function setFocusRelease(?\DDEX\PIE\PIE_100\ReleaseSummaryType $focusRelease = null)
    {
        $this->focusRelease = $focusRelease;
        return $this;
    }

    /**
     * Gets as focusWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @return \DDEX\PIE\PIE_100\WorkSummaryType
     */
    public function getFocusWork()
    {
        return $this->focusWork;
    }

    /**
     * Sets a new focusWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @param \DDEX\PIE\PIE_100\WorkSummaryType $focusWork
     * @return self
     */
    public function setFocusWork(?\DDEX\PIE\PIE_100\WorkSummaryType $focusWork = null)
    {
        $this->focusWork = $focusWork;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType $displayArtistName)
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
     * @return \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[]
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
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist.
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
     * A Composite containing details of a DisplayArtist.
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
     * A Composite containing details of a DisplayArtist.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $writer
     */
    public function addToWriter(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $writer)
    {
        $this->writer[] = $writer;
        return $this;
    }

    /**
     * isset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWriter($index)
    {
        return isset($this->writer[$index]);
    }

    /**
     * unset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWriter($index)
    {
        unset($this->writer[$index]);
    }

    /**
     * Gets as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[]
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $writer
     * @return self
     */
    public function setWriter(array $writer = null)
    {
        $this->writer = $writer;
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
     * Adds as periodOfBeingFocus
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PeriodWithTimeType $periodOfBeingFocus
     */
    public function addToPeriodOfBeingFocus(\DDEX\PIE\PIE_100\PeriodWithTimeType $periodOfBeingFocus)
    {
        $this->periodOfBeingFocus[] = $periodOfBeingFocus;
        return $this;
    }

    /**
     * isset periodOfBeingFocus
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriodOfBeingFocus($index)
    {
        return isset($this->periodOfBeingFocus[$index]);
    }

    /**
     * unset periodOfBeingFocus
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriodOfBeingFocus($index)
    {
        unset($this->periodOfBeingFocus[$index]);
    }

    /**
     * Gets as periodOfBeingFocus
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @return \DDEX\PIE\PIE_100\PeriodWithTimeType[]
     */
    public function getPeriodOfBeingFocus()
    {
        return $this->periodOfBeingFocus;
    }

    /**
     * Sets a new periodOfBeingFocus
     *
     * A Composite containing details about a focus track period. StartDate and EndDate are deprecated and StartDateTime/EndDateTime should be used instead. DDEX advises that StartDate and EndDate may be removed at a future date and therefore recommends against using them.
     *
     * @param \DDEX\PIE\PIE_100\PeriodWithTimeType[] $periodOfBeingFocus
     * @return self
     */
    public function setPeriodOfBeingFocus(array $periodOfBeingFocus = null)
    {
        $this->periodOfBeingFocus = $periodOfBeingFocus;
        return $this;
    }

    /**
     * Adds as territoryOfBeingFocusTrackDescription
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param string $territoryOfBeingFocusTrackDescription
     */
    public function addToTerritoryOfBeingFocusTrackDescription($territoryOfBeingFocusTrackDescription)
    {
        $this->territoryOfBeingFocusTrackDescription[] = $territoryOfBeingFocusTrackDescription;
        return $this;
    }

    /**
     * isset territoryOfBeingFocusTrackDescription
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfBeingFocusTrackDescription($index)
    {
        return isset($this->territoryOfBeingFocusTrackDescription[$index]);
    }

    /**
     * unset territoryOfBeingFocusTrackDescription
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfBeingFocusTrackDescription($index)
    {
        unset($this->territoryOfBeingFocusTrackDescription[$index]);
    }

    /**
     * Gets as territoryOfBeingFocusTrackDescription
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string[]
     */
    public function getTerritoryOfBeingFocusTrackDescription()
    {
        return $this->territoryOfBeingFocusTrackDescription;
    }

    /**
     * Sets a new territoryOfBeingFocusTrackDescription
     *
     * A Territory to which the focus track applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $territoryOfBeingFocusTrackDescription
     * @return self
     */
    public function setTerritoryOfBeingFocusTrackDescription(array $territoryOfBeingFocusTrackDescription = null)
    {
        $this->territoryOfBeingFocusTrackDescription = $territoryOfBeingFocusTrackDescription;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Comment regarding the focus track.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\TextWithoutTerritoryType $comment
     */
    public function addToComment(\DDEX\PIE\PIE_100\TextWithoutTerritoryType $comment)
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
     * @return \DDEX\PIE\PIE_100\TextWithoutTerritoryType[]
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
     * @param \DDEX\PIE\PIE_100\TextWithoutTerritoryType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


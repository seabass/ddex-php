<?php

namespace DDEX\ERN\ERN_37D2;

/**
 * Class representing CatalogItemType
 *
 * A Composite containing details of a Release which is an item of a catalog.
 * XSD Type: CatalogItem
 */
class CatalogItemType
{
    /**
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\ERN\ERN_37D2\AllTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\ERN\ERN_37D2\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A Composite containing details of a Title of the Release.
     *
     * @var \DDEX\ERN\ERN_37D2\TitleType $title
     */
    private $title = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @var \DDEX\ERN\ERN_37D2\NameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @var \DDEX\ERN\ERN_37D2\NameType[] $contributorName
     */
    private $contributorName = [
        
    ];

    /**
     * A Composite containing details of a DisplayTitle of the Release.
     *
     * @var \DDEX\ERN\ERN_37D2\ReferenceTitleType $displayTitle
     */
    private $displayTitle = null;

    /**
     * A Composite containing the Name of the Label for the Release.
     *
     * @var \DDEX\ERN\ERN_37D2\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @var \DDEX\ERN\ERN_37D2\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the PLine for the Release.
     *
     * @var \DDEX\ERN\ERN_37D2\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the Release.
     *
     * @var \DDEX\ERN\ERN_37D2\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ERN\ERN_37D2\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * Adds as territoryCode
     *
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\AllTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\ERN\ERN_37D2\AllTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\ERN\ERN_37D2\AllTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory for the Release. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\ERN\ERN_37D2\AllTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\ERN\ERN_37D2\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseId($index)
    {
        return isset($this->releaseId[$index]);
    }

    /**
     * unset releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseId($index)
    {
        unset($this->releaseId[$index]);
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\ERN\ERN_37D2\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\ERN\ERN_37D2\ReleaseIdType[] $releaseId
     * @return self
     */
    public function setReleaseId(array $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @return \DDEX\ERN\ERN_37D2\TitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the Release.
     *
     * @param \DDEX\ERN\ERN_37D2\TitleType $title
     * @return self
     */
    public function setTitle(\DDEX\ERN\ERN_37D2\TitleType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @return \DDEX\ERN\ERN_37D2\NameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     *
     * @param \DDEX\ERN\ERN_37D2\NameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DDEX\ERN\ERN_37D2\NameType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as contributorName
     *
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\NameType $contributorName
     */
    public function addToContributorName(\DDEX\ERN\ERN_37D2\NameType $contributorName)
    {
        $this->contributorName[] = $contributorName;
        return $this;
    }

    /**
     * isset contributorName
     *
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributorName($index)
    {
        return isset($this->contributorName[$index]);
    }

    /**
     * unset contributorName
     *
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributorName($index)
    {
        unset($this->contributorName[$index]);
    }

    /**
     * Gets as contributorName
     *
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @return \DDEX\ERN\ERN_37D2\NameType[]
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * Sets a new contributorName
     *
     * A Composite containing details of a Contributor to the catalog, i.e. to at least one of the included Releases.
     *
     * @param \DDEX\ERN\ERN_37D2\NameType[] $contributorName
     * @return self
     */
    public function setContributorName(array $contributorName)
    {
        $this->contributorName = $contributorName;
        return $this;
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a DisplayTitle of the Release.
     *
     * @return \DDEX\ERN\ERN_37D2\ReferenceTitleType
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a DisplayTitle of the Release.
     *
     * @param \DDEX\ERN\ERN_37D2\ReferenceTitleType $displayTitle
     * @return self
     */
    public function setDisplayTitle(\DDEX\ERN\ERN_37D2\ReferenceTitleType $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\ERN\ERN_37D2\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabelName($index)
    {
        return isset($this->labelName[$index]);
    }

    /**
     * unset labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabelName($index)
    {
        unset($this->labelName[$index]);
    }

    /**
     * Gets as labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @return \DDEX\ERN\ERN_37D2\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A Composite containing the Name of the Label for the Release.
     *
     * @param \DDEX\ERN\ERN_37D2\LabelNameType[] $labelName
     * @return self
     */
    public function setLabelName(array $labelName)
    {
        $this->labelName = $labelName;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\GenreType $genre
     */
    public function addToGenre(\DDEX\ERN\ERN_37D2\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @return \DDEX\ERN\ERN_37D2\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the Release belongs.
     *
     * @param \DDEX\ERN\ERN_37D2\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\PLineType $pLine
     */
    public function addToPLine(\DDEX\ERN\ERN_37D2\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the Release.
     *
     * @return \DDEX\ERN\ERN_37D2\PLineType[]
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
     * @param \DDEX\ERN\ERN_37D2\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @return self
     * @param \DDEX\ERN\ERN_37D2\CLineType $cLine
     */
    public function addToCLine(\DDEX\ERN\ERN_37D2\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the Release.
     *
     * @return \DDEX\ERN\ERN_37D2\CLineType[]
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
     * @param \DDEX\ERN\ERN_37D2\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ERN\ERN_37D2\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ERN\ERN_37D2\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(\DDEX\ERN\ERN_37D2\EventDateType $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}


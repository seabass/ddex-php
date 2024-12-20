<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing CatalogItemType
 *
 * A ddex:Composite containing details of a ddex:Release which is an item of a catalog.
 * XSD Type: CatalogItem
 */
class CatalogItemType
{
    /**
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $releaseId
     */
    private $releaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @var \DDEX\ddexC\TitleType $title
     */
    private $title = null;

    /**
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @var \DDEX\ddexC\NameType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @var \DDEX\ddexC\NameType[] $contributorName
     */
    private $contributorName = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $displayTitle
     */
    private $displayTitle = null;

    /**
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @var \DDEX\ddexC\LabelNameType[] $labelName
     */
    private $labelName = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @var \DDEX\ddexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @var \DDEX\ddexC\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @var \DDEX\ddexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\ddexC\EventDateType $releaseDate
     */
    private $releaseDate = null;

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
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
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
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
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory for the ddex:Release (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param string $territoryCode
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseIdType $releaseId
     */
    public function addToReleaseId(\DDEX\ddexC\ReleaseIdType $releaseId)
    {
        $this->releaseId[] = $releaseId;
        return $this;
    }

    /**
     * isset releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @return \DDEX\ddexC\ReleaseIdType[]
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid has to be used. If the ern:Release contains only one ddex:SoundRecording, the ddex:ISRC of the ddex:SoundRecording may be used instead. If the ern:Release is an abstraction of a complete ddex:PhysicalProduct (such as a CD ddex:Album), the ddex:ICPN of the ddex:PhysicalProduct may be used instead.
     *
     * @param \DDEX\ddexC\ReleaseIdType[] $releaseId
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
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @return \DDEX\ddexC\TitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A ddex:Composite containing details of a ddex:Title of the ddex:Release.
     *
     * @param \DDEX\ddexC\TitleType $title
     * @return self
     */
    public function setTitle(\DDEX\ddexC\TitleType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @return \DDEX\ddexC\NameType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A ddex:Composite containing the ddex:Name to be used by a ddex:DSP when presenting ddex:Artist details of the ddex:Release to a ddex:Consumer.
     *
     * @param \DDEX\ddexC\NameType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DDEX\ddexC\NameType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @return self
     * @param \DDEX\ddexC\NameType $contributorName
     */
    public function addToContributorName(\DDEX\ddexC\NameType $contributorName)
    {
        $this->contributorName[] = $contributorName;
        return $this;
    }

    /**
     * isset contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
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
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
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
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @return \DDEX\ddexC\NameType[]
     */
    public function getContributorName()
    {
        return $this->contributorName;
    }

    /**
     * Sets a new contributorName
     *
     * A ddex:Composite containing details of a ddex:Contributor to the catalog, i.e. to at least one of the included ddex:Releases.
     *
     * @param \DDEX\ddexC\NameType[] $contributorName
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
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @return \DDEX\ddexC\ReferenceTitleType
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A ddex:Composite containing details of a ddex:DisplayTitle of the ddex:Release.
     *
     * @param \DDEX\ddexC\ReferenceTitleType $displayTitle
     * @return self
     */
    public function setDisplayTitle(\DDEX\ddexC\ReferenceTitleType $displayTitle)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\LabelNameType $labelName
     */
    public function addToLabelName(\DDEX\ddexC\LabelNameType $labelName)
    {
        $this->labelName[] = $labelName;
        return $this;
    }

    /**
     * isset labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
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
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @return \DDEX\ddexC\LabelNameType[]
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Sets a new labelName
     *
     * A ddex:Composite containing the ddex:Name of the ddex:Label for the ddex:Release.
     *
     * @param \DDEX\ddexC\LabelNameType[] $labelName
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @return self
     * @param \DDEX\ddexC\GenreType $genre
     */
    public function addToGenre(\DDEX\ddexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @return \DDEX\ddexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Release belongs.
     *
     * @param \DDEX\ddexC\GenreType[] $genre
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
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @return self
     * @param \DDEX\ddexC\PLineType $pLine
     */
    public function addToPLine(\DDEX\ddexC\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @return \DDEX\ddexC\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ern:Release.
     *
     * @param \DDEX\ddexC\PLineType[] $pLine
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @return self
     * @param \DDEX\ddexC\CLineType $cLine
     */
    public function addToCLine(\DDEX\ddexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
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
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @return \DDEX\ddexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ern:Release.
     *
     * @param \DDEX\ddexC\CLineType[] $cLine
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Sets a new releaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Release was or will be first made available for Usage, whether for physical or electronic/online distribution (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\ddexC\EventDateType $releaseDate
     * @return self
     */
    public function setReleaseDate(\DDEX\ddexC\EventDateType $releaseDate)
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}


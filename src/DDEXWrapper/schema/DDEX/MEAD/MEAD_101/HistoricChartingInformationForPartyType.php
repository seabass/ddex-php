<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing HistoricChartingInformationForPartyType
 *
 * A Composite containing details of historic charting information.
 * Explanatory Note: This Composite is named HistoricChartingInformationForParty to disambiguate it from the basic HistoricChartingInformation Composite.
 * XSD Type: HistoricChartingInformationForParty
 */
class HistoricChartingInformationForPartyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Territory of the charts. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MEAD\MEAD_101\CurrentTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * A Name of the charts.
     *
     * @var \DDEX\MEAD\MEAD_101\ChartNameType[] $chartName
     */
    private $chartName = [
        
    ];

    /**
     * The Duration for which the Creation or the Party was in the charts.
     *
     * @var \DDEX\MEAD\MEAD_101\DurationType $durationInCharts
     */
    private $durationInCharts = null;

    /**
     * The top position in the charts.
     *
     * @var int $topPosition
     */
    private $topPosition = null;

    /**
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_101\ChartEntryType[] $chartEntry
     */
    private $chartEntry = [
        
    ];

    /**
     * A Comment regarding the charts.
     *
     * @var \DDEX\MEAD\MEAD_101\TextWithFormatType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * A Composite containing details of a charted Work.
     *
     * @var \DDEX\MEAD\MEAD_101\WorkType $chartedWork
     */
    private $chartedWork = null;

    /**
     * A Composite containing details of a charted Resource.
     *
     * @var \DDEX\MEAD\MEAD_101\ResourceType $chartedResource
     */
    private $chartedResource = null;

    /**
     * A Composite containing details of a charted Release.
     *
     * @var \DDEX\MEAD\MEAD_101\ReleaseType $chartedRelease
     */
    private $chartedRelease = null;

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
     * Gets as territoryCode
     *
     * A Territory of the charts. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MEAD\MEAD_101\CurrentTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory of the charts. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MEAD\MEAD_101\CurrentTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(\DDEX\MEAD\MEAD_101\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as chartName
     *
     * A Name of the charts.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ChartNameType $chartName
     */
    public function addToChartName(\DDEX\MEAD\MEAD_101\ChartNameType $chartName)
    {
        $this->chartName[] = $chartName;
        return $this;
    }

    /**
     * isset chartName
     *
     * A Name of the charts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChartName($index)
    {
        return isset($this->chartName[$index]);
    }

    /**
     * unset chartName
     *
     * A Name of the charts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChartName($index)
    {
        unset($this->chartName[$index]);
    }

    /**
     * Gets as chartName
     *
     * A Name of the charts.
     *
     * @return \DDEX\MEAD\MEAD_101\ChartNameType[]
     */
    public function getChartName()
    {
        return $this->chartName;
    }

    /**
     * Sets a new chartName
     *
     * A Name of the charts.
     *
     * @param \DDEX\MEAD\MEAD_101\ChartNameType[] $chartName
     * @return self
     */
    public function setChartName(array $chartName)
    {
        $this->chartName = $chartName;
        return $this;
    }

    /**
     * Gets as durationInCharts
     *
     * The Duration for which the Creation or the Party was in the charts.
     *
     * @return \DDEX\MEAD\MEAD_101\DurationType
     */
    public function getDurationInCharts()
    {
        return $this->durationInCharts;
    }

    /**
     * Sets a new durationInCharts
     *
     * The Duration for which the Creation or the Party was in the charts.
     *
     * @param \DDEX\MEAD\MEAD_101\DurationType $durationInCharts
     * @return self
     */
    public function setDurationInCharts(?\DDEX\MEAD\MEAD_101\DurationType $durationInCharts = null)
    {
        $this->durationInCharts = $durationInCharts;
        return $this;
    }

    /**
     * Gets as topPosition
     *
     * The top position in the charts.
     *
     * @return int
     */
    public function getTopPosition()
    {
        return $this->topPosition;
    }

    /**
     * Sets a new topPosition
     *
     * The top position in the charts.
     *
     * @param int $topPosition
     * @return self
     */
    public function setTopPosition($topPosition)
    {
        $this->topPosition = $topPosition;
        return $this;
    }

    /**
     * Adds as chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\ChartEntryType $chartEntry
     */
    public function addToChartEntry(\DDEX\MEAD\MEAD_101\ChartEntryType $chartEntry)
    {
        $this->chartEntry[] = $chartEntry;
        return $this;
    }

    /**
     * isset chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChartEntry($index)
    {
        return isset($this->chartEntry[$index]);
    }

    /**
     * unset chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChartEntry($index)
    {
        unset($this->chartEntry[$index]);
    }

    /**
     * Gets as chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_101\ChartEntryType[]
     */
    public function getChartEntry()
    {
        return $this->chartEntry;
    }

    /**
     * Sets a new chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_101\ChartEntryType[] $chartEntry
     * @return self
     */
    public function setChartEntry(array $chartEntry = null)
    {
        $this->chartEntry = $chartEntry;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Comment regarding the charts.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType $comment
     */
    public function addToComment(\DDEX\MEAD\MEAD_101\TextWithFormatType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A Comment regarding the charts.
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
     * A Comment regarding the charts.
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
     * A Comment regarding the charts.
     *
     * @return \DDEX\MEAD\MEAD_101\TextWithFormatType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Comment regarding the charts.
     *
     * @param \DDEX\MEAD\MEAD_101\TextWithFormatType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as chartedWork
     *
     * A Composite containing details of a charted Work.
     *
     * @return \DDEX\MEAD\MEAD_101\WorkType
     */
    public function getChartedWork()
    {
        return $this->chartedWork;
    }

    /**
     * Sets a new chartedWork
     *
     * A Composite containing details of a charted Work.
     *
     * @param \DDEX\MEAD\MEAD_101\WorkType $chartedWork
     * @return self
     */
    public function setChartedWork(?\DDEX\MEAD\MEAD_101\WorkType $chartedWork = null)
    {
        $this->chartedWork = $chartedWork;
        return $this;
    }

    /**
     * Gets as chartedResource
     *
     * A Composite containing details of a charted Resource.
     *
     * @return \DDEX\MEAD\MEAD_101\ResourceType
     */
    public function getChartedResource()
    {
        return $this->chartedResource;
    }

    /**
     * Sets a new chartedResource
     *
     * A Composite containing details of a charted Resource.
     *
     * @param \DDEX\MEAD\MEAD_101\ResourceType $chartedResource
     * @return self
     */
    public function setChartedResource(?\DDEX\MEAD\MEAD_101\ResourceType $chartedResource = null)
    {
        $this->chartedResource = $chartedResource;
        return $this;
    }

    /**
     * Gets as chartedRelease
     *
     * A Composite containing details of a charted Release.
     *
     * @return \DDEX\MEAD\MEAD_101\ReleaseType
     */
    public function getChartedRelease()
    {
        return $this->chartedRelease;
    }

    /**
     * Sets a new chartedRelease
     *
     * A Composite containing details of a charted Release.
     *
     * @param \DDEX\MEAD\MEAD_101\ReleaseType $chartedRelease
     * @return self
     */
    public function setChartedRelease(?\DDEX\MEAD\MEAD_101\ReleaseType $chartedRelease = null)
    {
        $this->chartedRelease = $chartedRelease;
        return $this;
    }
}


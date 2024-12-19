<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing HistoricChartingInformationType
 *
 * A Composite containing details of historic charting information.
 * XSD Type: HistoricChartingInformation
 */
class HistoricChartingInformationType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Territory of the charts. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MEAD\MEAD_110\CurrentTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * A Name of the charts.
     *
     * @var \DDEX\MEAD\MEAD_110\NameWithPronunciationAndScriptCodeType[] $chartName
     */
    private $chartName = [
        
    ];

    /**
     * The Duration for which the Creation or the Party was in the charts.
     *
     * @var \DDEX\MEAD\MEAD_110\DurationType $durationInCharts
     */
    private $durationInCharts = null;

    /**
     * The top position in the charts.
     *
     * @var int $topPosition
     */
    private $topPosition = null;

    /**
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_110\ChartEntryType[] $chartEntry
     */
    private $chartEntry = [
        
    ];

    /**
     * A Comment regarding the charts.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithFormatType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[]
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
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
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
     * @return \DDEX\MEAD\MEAD_110\CurrentTerritoryCodeType
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
     * @param \DDEX\MEAD\MEAD_110\CurrentTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(\DDEX\MEAD\MEAD_110\CurrentTerritoryCodeType $territoryCode)
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
     * @param \DDEX\MEAD\MEAD_110\NameWithPronunciationAndScriptCodeType $chartName
     */
    public function addToChartName(\DDEX\MEAD\MEAD_110\NameWithPronunciationAndScriptCodeType $chartName)
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
     * @return \DDEX\MEAD\MEAD_110\NameWithPronunciationAndScriptCodeType[]
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
     * @param \DDEX\MEAD\MEAD_110\NameWithPronunciationAndScriptCodeType[] $chartName
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
     * @return \DDEX\MEAD\MEAD_110\DurationType
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
     * @param \DDEX\MEAD\MEAD_110\DurationType $durationInCharts
     * @return self
     */
    public function setDurationInCharts(?\DDEX\MEAD\MEAD_110\DurationType $durationInCharts = null)
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
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ChartEntryType $chartEntry
     */
    public function addToChartEntry(\DDEX\MEAD\MEAD_110\ChartEntryType $chartEntry)
    {
        $this->chartEntry[] = $chartEntry;
        return $this;
    }

    /**
     * isset chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
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
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
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
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_110\ChartEntryType[]
     */
    public function getChartEntry()
    {
        return $this->chartEntry;
    }

    /**
     * Sets a new chartEntry
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_110\ChartEntryType[] $chartEntry
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
     * @param \DDEX\MEAD\MEAD_110\TextWithFormatType $comment
     */
    public function addToComment(\DDEX\MEAD\MEAD_110\TextWithFormatType $comment)
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
     * @return \DDEX\MEAD\MEAD_110\TextWithFormatType[]
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
     * @param \DDEX\MEAD\MEAD_110\TextWithFormatType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


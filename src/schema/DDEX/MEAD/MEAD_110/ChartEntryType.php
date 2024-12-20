<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ChartEntryType
 *
 * A Composite containing details of an entry in the charts.
 * XSD Type: ChartEntry
 */
class ChartEntryType
{
    /**
     * The position in the charts.
     *
     * @var int $position
     */
    private $position = null;

    /**
     * The Date of the chart entry (in ISO 8601 format: YYYY-MM-DD).
     *
     * @var string $date
     */
    private $date = null;

    /**
     * The Duration for which the Creation or the Party was in this position in the charts.
     *
     * @var \DDEX\MEAD\MEAD_110\DurationType $duration
     */
    private $duration = null;

    /**
     * A Comment regarding the charts.
     *
     * @var \DDEX\MEAD\MEAD_110\TextWithFormatType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Gets as position
     *
     * The position in the charts.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The position in the charts.
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as date
     *
     * The Date of the chart entry (in ISO 8601 format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The Date of the chart entry (in ISO 8601 format: YYYY-MM-DD).
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration for which the Creation or the Party was in this position in the charts.
     *
     * @return \DDEX\MEAD\MEAD_110\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration for which the Creation or the Party was in this position in the charts.
     *
     * @param \DDEX\MEAD\MEAD_110\DurationType $duration
     * @return self
     */
    public function setDuration(?\DDEX\MEAD\MEAD_110\DurationType $duration = null)
    {
        $this->duration = $duration;
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


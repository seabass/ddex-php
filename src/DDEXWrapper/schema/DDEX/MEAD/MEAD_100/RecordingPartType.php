<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing RecordingPartType
 *
 * A Composite containing details of a Recording part.
 * XSD Type: RecordingPart
 */
class RecordingPartType
{
    /**
     * A number indicating the order of the Recording part in a group of parts. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A UnitOfMeasure used for the specification of the cue points.
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * The start point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @var float $startPoint
     */
    private $startPoint = null;

    /**
     * The end point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @var float $endPoint
     */
    private $endPoint = null;

    /**
     * A Composite containing details of a part of the Recording identified by the cue point.
     *
     * @var \DDEX\MEAD\MEAD_100\RecordingPartTypeType $recordingPartType
     */
    private $recordingPartType = null;

    /**
     * A Comment on the Recording part.
     *
     * @var \DDEX\MEAD\MEAD_100\AnnotationType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * An Annotation providing information on the usage of the Recording.
     *
     * @var \DDEX\MEAD\MEAD_100\TextWithFormatType[] $usageInformation
     */
    private $usageInformation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * A number indicating the order of the Recording part in a group of parts. This is represented in an XML schema as an XML Attribute.
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
     * A number indicating the order of the Recording part in a group of parts. This is represented in an XML schema as an XML Attribute.
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
     * Gets as unit
     *
     * A UnitOfMeasure used for the specification of the cue points.
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * A UnitOfMeasure used for the specification of the cue points.
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as startPoint
     *
     * The start point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @return float
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }

    /**
     * Sets a new startPoint
     *
     * The start point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @param float $startPoint
     * @return self
     */
    public function setStartPoint($startPoint)
    {
        $this->startPoint = $startPoint;
        return $this;
    }

    /**
     * Gets as endPoint
     *
     * The end point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @return float
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * Sets a new endPoint
     *
     * The end point of the recording part measured in the specified unit from the start of the Recording. Seconds may include fractions (e.g. 30.5 seconds would be 30.5).
     *
     * @param float $endPoint
     * @return self
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * Gets as recordingPartType
     *
     * A Composite containing details of a part of the Recording identified by the cue point.
     *
     * @return \DDEX\MEAD\MEAD_100\RecordingPartTypeType
     */
    public function getRecordingPartType()
    {
        return $this->recordingPartType;
    }

    /**
     * Sets a new recordingPartType
     *
     * A Composite containing details of a part of the Recording identified by the cue point.
     *
     * @param \DDEX\MEAD\MEAD_100\RecordingPartTypeType $recordingPartType
     * @return self
     */
    public function setRecordingPartType(?\DDEX\MEAD\MEAD_100\RecordingPartTypeType $recordingPartType = null)
    {
        $this->recordingPartType = $recordingPartType;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Comment on the Recording part.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\AnnotationType $comment
     */
    public function addToComment(\DDEX\MEAD\MEAD_100\AnnotationType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A Comment on the Recording part.
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
     * A Comment on the Recording part.
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
     * A Comment on the Recording part.
     *
     * @return \DDEX\MEAD\MEAD_100\AnnotationType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Comment on the Recording part.
     *
     * @param \DDEX\MEAD\MEAD_100\AnnotationType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as usageInformation
     *
     * An Annotation providing information on the usage of the Recording.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TextWithFormatType $usageInformation
     */
    public function addToUsageInformation(\DDEX\MEAD\MEAD_100\TextWithFormatType $usageInformation)
    {
        $this->usageInformation[] = $usageInformation;
        return $this;
    }

    /**
     * isset usageInformation
     *
     * An Annotation providing information on the usage of the Recording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageInformation($index)
    {
        return isset($this->usageInformation[$index]);
    }

    /**
     * unset usageInformation
     *
     * An Annotation providing information on the usage of the Recording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageInformation($index)
    {
        unset($this->usageInformation[$index]);
    }

    /**
     * Gets as usageInformation
     *
     * An Annotation providing information on the usage of the Recording.
     *
     * @return \DDEX\MEAD\MEAD_100\TextWithFormatType[]
     */
    public function getUsageInformation()
    {
        return $this->usageInformation;
    }

    /**
     * Sets a new usageInformation
     *
     * An Annotation providing information on the usage of the Recording.
     *
     * @param \DDEX\MEAD\MEAD_100\TextWithFormatType[] $usageInformation
     * @return self
     */
    public function setUsageInformation(array $usageInformation = null)
    {
        $this->usageInformation = $usageInformation;
        return $this;
    }
}


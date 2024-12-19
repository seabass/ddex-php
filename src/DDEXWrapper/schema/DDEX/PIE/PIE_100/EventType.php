<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing EventType
 *
 * A Composite containing details of an Event.
 * XSD Type: Event
 */
class EventType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event. The StartDate must be no later than the EndDate if both are provided.
     *
     * @var \DDEX\PIE\PIE_100\EventDateType $date
     */
    private $date = null;

    /**
     * A Composite containing details of the Date and Place of the beginning of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @var \DDEX\PIE\PIE_100\EventDateType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of the end of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @var \DDEX\PIE\PIE_100\EventDateType $endDate
     */
    private $endDate = null;

    /**
     * The Type of the Event.
     *
     * @var \DDEX\PIE\PIE_100\EventTypeType $eventType
     */
    private $eventType = null;

    /**
     * A Composite containing details of a Description of the Event.
     *
     * @var \DDEX\PIE\PIE_100\DescriptionType[] $eventDescription
     */
    private $eventDescription = [
        
    ];

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
     * Gets as date
     *
     * A Composite containing details of the Date and Place of the Event. The StartDate must be no later than the EndDate if both are provided.
     *
     * @return \DDEX\PIE\PIE_100\EventDateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A Composite containing details of the Date and Place of the Event. The StartDate must be no later than the EndDate if both are provided.
     *
     * @param \DDEX\PIE\PIE_100\EventDateType $date
     * @return self
     */
    public function setDate(?\DDEX\PIE\PIE_100\EventDateType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of the beginning of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @return \DDEX\PIE\PIE_100\EventDateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of the beginning of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @param \DDEX\PIE\PIE_100\EventDateType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\PIE\PIE_100\EventDateType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of the end of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @return \DDEX\PIE\PIE_100\EventDateType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the Date and Place of the end of the Period in which the Event occurs (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @param \DDEX\PIE\PIE_100\EventDateType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\PIE\PIE_100\EventDateType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as eventType
     *
     * The Type of the Event.
     *
     * @return \DDEX\PIE\PIE_100\EventTypeType
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * The Type of the Event.
     *
     * @param \DDEX\PIE\PIE_100\EventTypeType $eventType
     * @return self
     */
    public function setEventType(\DDEX\PIE\PIE_100\EventTypeType $eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Adds as eventDescription
     *
     * A Composite containing details of a Description of the Event.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DescriptionType $eventDescription
     */
    public function addToEventDescription(\DDEX\PIE\PIE_100\DescriptionType $eventDescription)
    {
        $this->eventDescription[] = $eventDescription;
        return $this;
    }

    /**
     * isset eventDescription
     *
     * A Composite containing details of a Description of the Event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventDescription($index)
    {
        return isset($this->eventDescription[$index]);
    }

    /**
     * unset eventDescription
     *
     * A Composite containing details of a Description of the Event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventDescription($index)
    {
        unset($this->eventDescription[$index]);
    }

    /**
     * Gets as eventDescription
     *
     * A Composite containing details of a Description of the Event.
     *
     * @return \DDEX\PIE\PIE_100\DescriptionType[]
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Sets a new eventDescription
     *
     * A Composite containing details of a Description of the Event.
     *
     * @param \DDEX\PIE\PIE_100\DescriptionType[] $eventDescription
     * @return self
     */
    public function setEventDescription(array $eventDescription = null)
    {
        $this->eventDescription = $eventDescription;
        return $this;
    }
}


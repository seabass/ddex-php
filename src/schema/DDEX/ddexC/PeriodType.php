<?php

namespace DDEX\ddexC;

/**
 * Class representing PeriodType
 *
 * A ddex:Composite containing details about a ddex:Period of ddex:Time. ddex:Periods are typically described by at least a ddex:StartDate or ddex:EndDate.
 * XSD Type: Period
 */
class PeriodType
{
    /**
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:StartDate must be earlier than the ddex:EndDate if both are provided.
     *
     * @var \DDEX\ddexC\EventDateType $startDate
     */
    private $startDate = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:EndDate must be later than the ddex:StartDate if both are provided.
     *
     * @var \DDEX\ddexC\EventDateType $endDate
     */
    private $endDate = null;

    /**
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @var \DDEX\ddexC\EventDateTimeType $startDateTime
     */
    private $startDateTime = null;

    /**
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must be later than the StartDateTime if both are provided.
     *
     * @var \DDEX\ddexC\EventDateTimeType $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:StartDate must be earlier than the ddex:EndDate if both are provided.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:StartDate must be earlier than the ddex:EndDate if both are provided.
     *
     * @param \DDEX\ddexC\EventDateType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\ddexC\EventDateType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:EndDate must be later than the ddex:StartDate if both are provided.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-MM-DD). The ddex:EndDate must be later than the ddex:StartDate if both are provided.
     *
     * @param \DDEX\ddexC\EventDateType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\ddexC\EventDateType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @return \DDEX\ddexC\EventDateTimeType
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the beginning of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @param \DDEX\ddexC\EventDateTimeType $startDateTime
     * @return self
     */
    public function setStartDateTime(?\DDEX\ddexC\EventDateTimeType $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must be later than the StartDateTime if both are provided.
     *
     * @return \DDEX\ddexC\EventDateTimeType
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * A ddex:Composite containing details of the ddex:DateTime and ddex:Place of an ddex:Event that marks the end of the ddexC:Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must be later than the StartDateTime if both are provided.
     *
     * @param \DDEX\ddexC\EventDateTimeType $endDateTime
     * @return self
     */
    public function setEndDateTime(?\DDEX\ddexC\EventDateTimeType $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}


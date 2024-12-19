<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing PeriodWithoutFlagsType
 *
 * A Composite containing details about a Period of Time. Periods are typically describedby at least a StartDate or EndDate (or StartDateTime or EndDateTime) where the StartDate(Time) and EndDate(Time) are included in the Period. Thus a one-day period can be described by using the same date in the StartDate and EndDate.
 * XSD Type: PeriodWithoutFlags
 */
class PeriodWithoutFlagsType
{
    /**
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate if both are provided.
     *
     * @var \DDEX\ERN\ERN_400\EventDateWithoutFlagsType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @var \DDEX\ERN\ERN_400\EventDateWithoutFlagsType $endDate
     */
    private $endDate = null;

    /**
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @var \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $startDateTime
     */
    private $startDateTime = null;

    /**
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @var \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate if both are provided.
     *
     * @return \DDEX\ERN\ERN_400\EventDateWithoutFlagsType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be earlier than the EndDate if both are provided.
     *
     * @param \DDEX\ERN\ERN_400\EventDateWithoutFlagsType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\ERN\ERN_400\EventDateWithoutFlagsType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @return \DDEX\ERN\ERN_400\EventDateWithoutFlagsType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @param \DDEX\ERN\ERN_400\EventDateWithoutFlagsType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\ERN\ERN_400\EventDateWithoutFlagsType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as startDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @return \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The StartDateTime must be earlier than the EndDateTime if both are provided.
     *
     * @param \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $startDateTime
     * @return self
     */
    public function setStartDateTime(?\DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @return \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * A Composite containing details of the DateTime and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-DD-MMThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @param \DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $endDateTime
     * @return self
     */
    public function setEndDateTime(?\DDEX\ERN\ERN_400\EventDateTimeWithoutFlagsType $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}


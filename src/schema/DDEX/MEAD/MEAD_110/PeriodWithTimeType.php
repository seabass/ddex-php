<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing PeriodWithTimeType
 *
 * A Composite containing details about a Period of Time. Periods are typically describedby at least a StartDate or EndDate (or StartDateTime or EndDateTime) where the StartDate(Time) and EndDate(Time) are included in the Period. Thus a one-day period can be described by using the same date in the StartDate and EndDate. If two subsequent Periods form a continuum (i.e. with no break in-between) there are two ways to express this: (a) if using dates, the EndDate of the first Period must be one day before the StartDate of the second Period; (b) if using date times, the EndDateTime of the first Period must be the same as the StartDateTime of the second Period.
 * Explanatory Note: This Composite is named PeriodWithTime to disambiguate it from the basic Period Composite.
 * XSD Type: PeriodWithTime
 */
class PeriodWithTimeType
{
    /**
     * The DateTime of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * The DateTime of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @var \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * Gets as startDateTime
     *
     * The DateTime of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * The DateTime of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The StartDateTime must be no later than the EndDateTime if both are provided.
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(?\DateTime $startDateTime = null)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * The DateTime of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * The DateTime of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DDThh:mm:ss). The EndDateTime must not be earlier than the StartDateTime if both are provided.
     *
     * @param \DateTime $endDateTime
     * @return self
     */
    public function setEndDateTime(?\DateTime $endDateTime = null)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing UsagePeriodType
 *
 * A Composite containing details about a Period of Time. Periods are typically describedby at least a StartDate or EndDate (or StartDateTime or EndDateTime) where the StartDate(Time) and EndDate(Time) are included in the Period. Thus a one-day period can be described by using the same date in the StartDate and EndDate. If two subsequent Periods form a continuum (i.e. with no break in-between) there are two ways to express this: (a) if using dates, the EndDate of the first Period must be one day before the StartDate of the second Period; (b) if using date times, the EndDateTime of the first Period must be the same as the StartDateTime of the second Period.
 * XSD Type: UsagePeriod
 */
class UsagePeriodType
{
    /**
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @var \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @var \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $endDate
     */
    private $endDate = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @return \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @param \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @return \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @param \DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\MEAD\MEAD_110\EventDateWithoutFlagsType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }
}


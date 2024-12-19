<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing ValidityPeriodType
 *
 * A Composite containing details about a ValidityPeriod of Time. Periods are typically describedby at least a StartDate or EndDate where the StartDate and EndDate are included in the Period. Thus a one-day period can be described by using the same date in the StartDate and EndDate.
 * XSD Type: ValidityPeriod
 */
class ValidityPeriodType
{
    /**
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @var \DDEX\RIN\RIN11F\EventDateType $startDate
     */
    private $startDate = null;

    /**
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @var \DDEX\RIN\RIN11F\EventDateType $endDate
     */
    private $endDate = null;

    /**
     * Gets as startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @return \DDEX\RIN\RIN11F\EventDateType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the beginning of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The StartDate must be no later than the EndDate if both are provided.
     *
     * @param \DDEX\RIN\RIN11F\EventDateType $startDate
     * @return self
     */
    public function setStartDate(?\DDEX\RIN\RIN11F\EventDateType $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * A Composite containing details of the Date and Place of an Event that marks the end of the Period (in ISO 8601:2004 format: YYYY-MM-DD). The EndDate must not be earlier than the StartDate if both are provided.
     *
     * @return \DDEX\RIN\RIN11F\EventDateType
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
     * @param \DDEX\RIN\RIN11F\EventDateType $endDate
     * @return self
     */
    public function setEndDate(?\DDEX\RIN\RIN11F\EventDateType $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }
}


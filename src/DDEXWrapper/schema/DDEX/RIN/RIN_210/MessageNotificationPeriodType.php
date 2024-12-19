<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing MessageNotificationPeriodType
 *
 * A Composite containing details of a reporting Period covered by a Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
 * XSD Type: MessageNotificationPeriod
 */
class MessageNotificationPeriodType
{
    /**
     * The Date that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * The Date that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * Gets as startDate
     *
     * The Date that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The Date that marks the beginning of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The Date that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The Date that marks the end of the Period (in ISO 8601 format: YYYY-MM-DD). This cannot be a Date in the future.
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
}


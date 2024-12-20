<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ReportedUsageType
 *
 * A Composite containing details of one or more Usages for a Resource.
 * XSD Type: ReportedUsage
 */
class ReportedUsageType
{
    /**
     * A Type of Revenue according to the recipient of the payment.
     *
     * @var string $recipientRevenueType
     */
    private $recipientRevenueType = null;

    /**
     * A Type of Revenue earned by the SoundRecording, according to the way the Revenue is generated.
     *
     * @var string $revenueSourceType
     */
    private $revenueSourceType = null;

    /**
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PeriodType $usagePeriod
     */
    private $usagePeriod = null;

    /**
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RevenueByUsageType[] $revenueByUsage
     */
    private $revenueByUsage = [
        
    ];

    /**
     * Gets as recipientRevenueType
     *
     * A Type of Revenue according to the recipient of the payment.
     *
     * @return string
     */
    public function getRecipientRevenueType()
    {
        return $this->recipientRevenueType;
    }

    /**
     * Sets a new recipientRevenueType
     *
     * A Type of Revenue according to the recipient of the payment.
     *
     * @param string $recipientRevenueType
     * @return self
     */
    public function setRecipientRevenueType($recipientRevenueType)
    {
        $this->recipientRevenueType = $recipientRevenueType;
        return $this;
    }

    /**
     * Gets as revenueSourceType
     *
     * A Type of Revenue earned by the SoundRecording, according to the way the Revenue is generated.
     *
     * @return string
     */
    public function getRevenueSourceType()
    {
        return $this->revenueSourceType;
    }

    /**
     * Sets a new revenueSourceType
     *
     * A Type of Revenue earned by the SoundRecording, according to the way the Revenue is generated.
     *
     * @param string $revenueSourceType
     * @return self
     */
    public function setRevenueSourceType($revenueSourceType)
    {
        $this->revenueSourceType = $revenueSourceType;
        return $this;
    }

    /**
     * Gets as usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PeriodType
     */
    public function getUsagePeriod()
    {
        return $this->usagePeriod;
    }

    /**
     * Sets a new usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PeriodType $usagePeriod
     * @return self
     */
    public function setUsagePeriod(\DDEX\RDR_N\RDR_N_150\PeriodType $usagePeriod)
    {
        $this->usagePeriod = $usagePeriod;
        return $this;
    }

    /**
     * Adds as revenueByUsage
     *
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RevenueByUsageType $revenueByUsage
     */
    public function addToRevenueByUsage(\DDEX\RDR_N\RDR_N_150\RevenueByUsageType $revenueByUsage)
    {
        $this->revenueByUsage[] = $revenueByUsage;
        return $this;
    }

    /**
     * isset revenueByUsage
     *
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueByUsage($index)
    {
        return isset($this->revenueByUsage[$index]);
    }

    /**
     * unset revenueByUsage
     *
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueByUsage($index)
    {
        unset($this->revenueByUsage[$index]);
    }

    /**
     * Gets as revenueByUsage
     *
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RevenueByUsageType[]
     */
    public function getRevenueByUsage()
    {
        return $this->revenueByUsage;
    }

    /**
     * Sets a new revenueByUsage
     *
     * A Composite containing details of a Revenue specified for a UseType.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RevenueByUsageType[] $revenueByUsage
     * @return self
     */
    public function setRevenueByUsage(array $revenueByUsage)
    {
        $this->revenueByUsage = $revenueByUsage;
        return $this;
    }
}


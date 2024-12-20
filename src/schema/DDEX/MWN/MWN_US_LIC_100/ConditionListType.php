<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing ConditionListType
 *
 * A Composite containing details of a list of conditions and/or limitations for Usages.
 * XSD Type: ConditionList
 */
class ConditionListType
{
    /**
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * Adds as condition
     *
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType $condition
     */
    public function addToCondition(\DDEX\MWN\MWN_US_LIC_100\LicenseConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of conditions and/or limitations for Usages.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}


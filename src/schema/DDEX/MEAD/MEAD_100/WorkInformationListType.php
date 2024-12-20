<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing WorkInformationListType
 *
 * A Composite containing detailed information about one or more Works
 * XSD Type: WorkInformationList
 */
class WorkInformationListType
{
    /**
     * A Composite containing detailed information about a Work.
     *
     * @var \DDEX\MEAD\MEAD_100\WorkInformationType[] $workInformation
     */
    private $workInformation = [
        
    ];

    /**
     * Adds as workInformation
     *
     * A Composite containing detailed information about a Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\WorkInformationType $workInformation
     */
    public function addToWorkInformation(\DDEX\MEAD\MEAD_100\WorkInformationType $workInformation)
    {
        $this->workInformation[] = $workInformation;
        return $this;
    }

    /**
     * isset workInformation
     *
     * A Composite containing detailed information about a Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkInformation($index)
    {
        return isset($this->workInformation[$index]);
    }

    /**
     * unset workInformation
     *
     * A Composite containing detailed information about a Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkInformation($index)
    {
        unset($this->workInformation[$index]);
    }

    /**
     * Gets as workInformation
     *
     * A Composite containing detailed information about a Work.
     *
     * @return \DDEX\MEAD\MEAD_100\WorkInformationType[]
     */
    public function getWorkInformation()
    {
        return $this->workInformation;
    }

    /**
     * Sets a new workInformation
     *
     * A Composite containing detailed information about a Work.
     *
     * @param \DDEX\MEAD\MEAD_100\WorkInformationType[] $workInformation
     * @return self
     */
    public function setWorkInformation(array $workInformation)
    {
        $this->workInformation = $workInformation;
        return $this;
    }
}


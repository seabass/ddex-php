<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing TotalSalesByReleaseTypeType
 *
 * A Composite containing details of total sales of Releases of a specific Type.
 * XSD Type: TotalSalesByReleaseType
 */
class TotalSalesByReleaseTypeType
{
    /**
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @var \DDEX\DSR\DSR_420\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * The total number of Releases sold of the ReleaseType.
     *
     * @var int $unitsSoldTotal
     */
    private $unitsSoldTotal = null;

    /**
     * Adds as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\DSR\DSR_420\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseType($index)
    {
        return isset($this->releaseType[$index]);
    }

    /**
     * unset releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseType($index)
    {
        unset($this->releaseType[$index]);
    }

    /**
     * Gets as releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @return \DDEX\DSR\DSR_420\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A Composite containing details of the form in which a ReleaseCreator anticipates offering the Release to Consumers.
     *
     * @param \DDEX\DSR\DSR_420\ReleaseTypeType[] $releaseType
     * @return self
     */
    public function setReleaseType(array $releaseType = null)
    {
        $this->releaseType = $releaseType;
        return $this;
    }

    /**
     * Gets as unitsSoldTotal
     *
     * The total number of Releases sold of the ReleaseType.
     *
     * @return int
     */
    public function getUnitsSoldTotal()
    {
        return $this->unitsSoldTotal;
    }

    /**
     * Sets a new unitsSoldTotal
     *
     * The total number of Releases sold of the ReleaseType.
     *
     * @param int $unitsSoldTotal
     * @return self
     */
    public function setUnitsSoldTotal($unitsSoldTotal)
    {
        $this->unitsSoldTotal = $unitsSoldTotal;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing TotalSalesByReleaseTypeType
 *
 * A ddex:Composite containing details of total sales of ddex:Releases of a specific ddex:Type.
 * XSD Type: TotalSalesByReleaseType
 */
class TotalSalesByReleaseTypeType
{
    /**
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
     *
     * @var \DDEX\ddexC\ReleaseTypeType[] $releaseType
     */
    private $releaseType = [
        
    ];

    /**
     * The total number of ddex:Releases sold of the ddex:ReleaseType.
     *
     * @var int $unitsSoldTotal
     */
    private $unitsSoldTotal = null;

    /**
     * Adds as releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseTypeType $releaseType
     */
    public function addToReleaseType(\DDEX\ddexC\ReleaseTypeType $releaseType)
    {
        $this->releaseType[] = $releaseType;
        return $this;
    }

    /**
     * isset releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
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
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
     *
     * @return \DDEX\ddexC\ReleaseTypeType[]
     */
    public function getReleaseType()
    {
        return $this->releaseType;
    }

    /**
     * Sets a new releaseType
     *
     * A ddex:Composite containing details of the form in which a ddex:ReleaseCreator anticipates offering the ddex:Release to ddex:Consumers.
     *
     * @param \DDEX\ddexC\ReleaseTypeType[] $releaseType
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
     * The total number of ddex:Releases sold of the ddex:ReleaseType.
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
     * The total number of ddex:Releases sold of the ddex:ReleaseType.
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


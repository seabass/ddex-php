<?php

namespace DDEX\ERN\ERN_411;

/**
 * Class representing DealListType
 *
 * A Composite containing details of one or more Deals.
 * XSD Type: DealList
 */
class DealListType
{
    /**
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @var \DDEX\ERN\ERN_411\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @return self
     * @param \DDEX\ERN\ERN_411\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DDEX\ERN\ERN_411\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseDeal($index)
    {
        return isset($this->releaseDeal[$index]);
    }

    /**
     * unset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseDeal($index)
    {
        unset($this->releaseDeal[$index]);
    }

    /**
     * Gets as releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @return \DDEX\ERN\ERN_411\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases.
     *
     * @param \DDEX\ERN\ERN_411\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }
}


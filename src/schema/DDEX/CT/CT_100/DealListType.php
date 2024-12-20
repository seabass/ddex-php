<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing DealListType
 *
 * A Composite containing details of one or more Deals.
 * XSD Type: DealList
 */
class DealListType
{
    /**
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
     *
     * @var \DDEX\CT\CT_100\ReleaseDealType[] $releaseDeal
     */
    private $releaseDeal = [
        
    ];

    /**
     * Adds as releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ReleaseDealType $releaseDeal
     */
    public function addToReleaseDeal(\DDEX\CT\CT_100\ReleaseDealType $releaseDeal)
    {
        $this->releaseDeal[] = $releaseDeal;
        return $this;
    }

    /**
     * isset releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
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
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
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
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
     *
     * @return \DDEX\CT\CT_100\ReleaseDealType[]
     */
    public function getReleaseDeal()
    {
        return $this->releaseDeal;
    }

    /**
     * Sets a new releaseDeal
     *
     * A Composite containing details of one or more Deals pertaining to one or more Releases contained in the CatalogTransfer.
     *
     * @param \DDEX\CT\CT_100\ReleaseDealType[] $releaseDeal
     * @return self
     */
    public function setReleaseDeal(array $releaseDeal)
    {
        $this->releaseDeal = $releaseDeal;
        return $this;
    }
}


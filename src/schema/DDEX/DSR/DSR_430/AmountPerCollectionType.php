<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing AmountPerCollectionType
 *
 * A Composite containing details of an Amount that has to be paid per Collection.
 * XSD Type: AmountPerCollection
 */
class AmountPerCollectionType
{
    /**
     * The Amount specified for the CollectionType.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * A Composite containing details of the Type of the Collection.
     *
     * @var \DDEX\DSR\DSR_430\CollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * Gets as amount
     *
     * The Amount specified for the CollectionType.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The Amount specified for the CollectionType.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as collectionType
     *
     * A Composite containing details of the Type of the Collection.
     *
     * @return \DDEX\DSR\DSR_430\CollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType
     *
     * A Composite containing details of the Type of the Collection.
     *
     * @param \DDEX\DSR\DSR_430\CollectionTypeType $collectionType
     * @return self
     */
    public function setCollectionType(\DDEX\DSR\DSR_430\CollectionTypeType $collectionType)
    {
        $this->collectionType = $collectionType;
        return $this;
    }
}


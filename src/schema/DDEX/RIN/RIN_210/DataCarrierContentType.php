<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DataCarrierContentType
 *
 * A Composite containing details of items located on a DataCarrier.
 * XSD Type: DataCarrierContent
 */
class DataCarrierContentType
{
    /**
     * A Composite containing details of a DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\DataCarrierContentItemType[] $dataCarrierContentItem
     */
    private $dataCarrierContentItem = [
        
    ];

    /**
     * Adds as dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\DataCarrierContentItemType $dataCarrierContentItem
     */
    public function addToDataCarrierContentItem(\DDEX\RIN\RIN_210\DataCarrierContentItemType $dataCarrierContentItem)
    {
        $this->dataCarrierContentItem[] = $dataCarrierContentItem;
        return $this;
    }

    /**
     * isset dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrierContentItem($index)
    {
        return isset($this->dataCarrierContentItem[$index]);
    }

    /**
     * unset dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrierContentItem($index)
    {
        unset($this->dataCarrierContentItem[$index]);
    }

    /**
     * Gets as dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\DataCarrierContentItemType[]
     */
    public function getDataCarrierContentItem()
    {
        return $this->dataCarrierContentItem;
    }

    /**
     * Sets a new dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\DataCarrierContentItemType[] $dataCarrierContentItem
     * @return self
     */
    public function setDataCarrierContentItem(array $dataCarrierContentItem)
    {
        $this->dataCarrierContentItem = $dataCarrierContentItem;
        return $this;
    }
}


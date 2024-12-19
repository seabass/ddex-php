<?php

namespace DDEX\RIN\RIN11F;

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
     * @var \DDEX\RIN\RIN11F\DataCarrierContentItemType[] $dataCarrierContentItem
     */
    private $dataCarrierContentItem = [
        
    ];

    /**
     * Adds as dataCarrierContentItem
     *
     * A Composite containing details of a DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\DataCarrierContentItemType $dataCarrierContentItem
     */
    public function addToDataCarrierContentItem(\DDEX\RIN\RIN11F\DataCarrierContentItemType $dataCarrierContentItem)
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
     * @return \DDEX\RIN\RIN11F\DataCarrierContentItemType[]
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
     * @param \DDEX\RIN\RIN11F\DataCarrierContentItemType[] $dataCarrierContentItem
     * @return self
     */
    public function setDataCarrierContentItem(array $dataCarrierContentItem)
    {
        $this->dataCarrierContentItem = $dataCarrierContentItem;
        return $this;
    }
}


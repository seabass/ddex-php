<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing ElementDataCarrierReferenceType
 *
 * A Composite containing details of a DataCarrier in which an Element is used.
 * XSD Type: ElementDataCarrierReference
 */
class ElementDataCarrierReferenceType
{
    /**
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @var string[] $elementDataCarrierReference
     */
    private $elementDataCarrierReference = [
        
    ];

    /**
     * The format of the DataCarrier.
     *
     * @var string $dataCarrierFormat
     */
    private $dataCarrierFormat = null;

    /**
     * Adds as elementDataCarrierReference
     *
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return self
     * @param string $elementDataCarrierReference
     */
    public function addToElementDataCarrierReference($elementDataCarrierReference)
    {
        $this->elementDataCarrierReference[] = $elementDataCarrierReference;
        return $this;
    }

    /**
     * isset elementDataCarrierReference
     *
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElementDataCarrierReference($index)
    {
        return isset($this->elementDataCarrierReference[$index]);
    }

    /**
     * unset elementDataCarrierReference
     *
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElementDataCarrierReference($index)
    {
        unset($this->elementDataCarrierReference[$index]);
    }

    /**
     * Gets as elementDataCarrierReference
     *
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return string[]
     */
    public function getElementDataCarrierReference()
    {
        return $this->elementDataCarrierReference;
    }

    /**
     * Sets a new elementDataCarrierReference
     *
     * A Reference for a DataCarrier in which an Element is used (specific to this Message). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param string $elementDataCarrierReference
     * @return self
     */
    public function setElementDataCarrierReference(array $elementDataCarrierReference = null)
    {
        $this->elementDataCarrierReference = $elementDataCarrierReference;
        return $this;
    }

    /**
     * Gets as dataCarrierFormat
     *
     * The format of the DataCarrier.
     *
     * @return string
     */
    public function getDataCarrierFormat()
    {
        return $this->dataCarrierFormat;
    }

    /**
     * Sets a new dataCarrierFormat
     *
     * The format of the DataCarrier.
     *
     * @param string $dataCarrierFormat
     * @return self
     */
    public function setDataCarrierFormat($dataCarrierFormat)
    {
        $this->dataCarrierFormat = $dataCarrierFormat;
        return $this;
    }
}


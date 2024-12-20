<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing TransferSourceType
 *
 * A Composite containing details of a source of a Transfer.
 * XSD Type: TransferSource
 */
class TransferSourceType
{
    /**
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @var string[] $transferDataCarrierReference
     */
    private $transferDataCarrierReference = [
        
    ];

    /**
     * A Composite containing further details of the Transfer.
     *
     * @var \DDEX\RIN\RIN_200\DetailsType[] $details
     */
    private $details = [
        
    ];

    /**
     * Adds as transferDataCarrierReference
     *
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return self
     * @param string $transferDataCarrierReference
     */
    public function addToTransferDataCarrierReference($transferDataCarrierReference)
    {
        $this->transferDataCarrierReference[] = $transferDataCarrierReference;
        return $this;
    }

    /**
     * isset transferDataCarrierReference
     *
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferDataCarrierReference($index)
    {
        return isset($this->transferDataCarrierReference[$index]);
    }

    /**
     * unset transferDataCarrierReference
     *
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferDataCarrierReference($index)
    {
        unset($this->transferDataCarrierReference[$index]);
    }

    /**
     * Gets as transferDataCarrierReference
     *
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @return string[]
     */
    public function getTransferDataCarrierReference()
    {
        return $this->transferDataCarrierReference;
    }

    /**
     * Sets a new transferDataCarrierReference
     *
     * A Reference for a DataCarrier used as a source for the Transfer (specific to this File). This is a LocalDataCarrierAnchorReference starting with the letter D.
     *
     * @param string $transferDataCarrierReference
     * @return self
     */
    public function setTransferDataCarrierReference(array $transferDataCarrierReference)
    {
        $this->transferDataCarrierReference = $transferDataCarrierReference;
        return $this;
    }

    /**
     * Adds as details
     *
     * A Composite containing further details of the Transfer.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\DetailsType $details
     */
    public function addToDetails(\DDEX\RIN\RIN_200\DetailsType $details)
    {
        $this->details[] = $details;
        return $this;
    }

    /**
     * isset details
     *
     * A Composite containing further details of the Transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetails($index)
    {
        return isset($this->details[$index]);
    }

    /**
     * unset details
     *
     * A Composite containing further details of the Transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetails($index)
    {
        unset($this->details[$index]);
    }

    /**
     * Gets as details
     *
     * A Composite containing further details of the Transfer.
     *
     * @return \DDEX\RIN\RIN_200\DetailsType[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * A Composite containing further details of the Transfer.
     *
     * @param \DDEX\RIN\RIN_200\DetailsType[] $details
     * @return self
     */
    public function setDetails(array $details = null)
    {
        $this->details = $details;
        return $this;
    }
}


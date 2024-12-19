<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DataCarrierIdType
 *
 * A Composite containing details of DataCarrierIds.
 * XSD Type: DataCarrierId
 */
class DataCarrierIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


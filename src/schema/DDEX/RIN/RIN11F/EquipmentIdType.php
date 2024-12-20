<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing EquipmentIdType
 *
 * A Composite containing details of EquipmentIds.
 * XSD Type: EquipmentId
 */
class EquipmentIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
     *
     * @var \DDEX\RIN\RIN11F\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
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
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
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
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
     *
     * @return \DDEX\RIN\RIN11F\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Equipment.
     *
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


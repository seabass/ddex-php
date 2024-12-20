<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing ElementIdType
 *
 * A Composite containing details of ElementIds.
 * XSD Type: ElementId
 */
class ElementIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the Element.
     *
     * @var \DDEX\RIN\RIN_200\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Element.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Element.
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
     * A Composite containing details of a ProprietaryIdentifier of the Element.
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
     * A Composite containing details of a ProprietaryIdentifier of the Element.
     *
     * @return \DDEX\RIN\RIN_200\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Element.
     *
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


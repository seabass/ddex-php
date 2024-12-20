<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing ProjectIdType
 *
 * A Composite containing details of ProjectIds.
 * XSD Type: ProjectId
 */
class ProjectIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the Project.
     *
     * @var \DDEX\RIN\RIN10F\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Project.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\RIN\RIN10F\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Project.
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
     * A Composite containing details of a ProprietaryIdentifier of the Project.
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
     * A Composite containing details of a ProprietaryIdentifier of the Project.
     *
     * @return \DDEX\RIN\RIN10F\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Project.
     *
     * @param \DDEX\RIN\RIN10F\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


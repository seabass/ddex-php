<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing RecordingComponentIdType
 *
 * A Composite containing details of RecordingComponentIds.
 * XSD Type: RecordingComponentId
 */
class RecordingComponentIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
     *
     * @var \DDEX\RIN\RIN10M\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\RIN\RIN10M\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
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
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
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
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
     *
     * @return \DDEX\RIN\RIN10M\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the RecordingComponent.
     *
     * @param \DDEX\RIN\RIN10M\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


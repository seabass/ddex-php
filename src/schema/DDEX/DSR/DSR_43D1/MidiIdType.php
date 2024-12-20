<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing MidiIdType
 *
 * A Composite containing details of Identifiers of a Midi.
 * XSD Type: MidiId
 */
class MidiIdType
{
    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=True) or not (=False). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
     *
     * @var \DDEX\DSR\DSR_43D1\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=True) or not (=False). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @return bool
     */
    public function getIsReplaced()
    {
        return $this->isReplaced;
    }

    /**
     * Sets a new isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=True) or not (=False). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @param bool $isReplaced
     * @return self
     */
    public function setIsReplaced($isReplaced)
    {
        $this->isReplaced = $isReplaced;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\DSR\DSR_43D1\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
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
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
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
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
     *
     * @return \DDEX\DSR\DSR_43D1\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Midi.
     *
     * @param \DDEX\DSR\DSR_43D1\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


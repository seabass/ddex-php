<?php

namespace DDEX\ERN\ERN_431;

/**
 * Class representing ContributorRoleType
 *
 * A Composite containing details of a ContributorRole. Note: this can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself.
 * XSD Type: ContributorRole
 */
class ContributorRoleType
{
    /**
     * The value of the ContributorRole.
     *
     * @var \DDEX\ERN\ERN_431\ContributorRoleValueType $value
     */
    private $value = null;

    /**
     * A Type of musical Instrument played by the Contributor.
     *
     * @var \DDEX\ERN\ERN_431\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * Gets as value
     *
     * The value of the ContributorRole.
     *
     * @return \DDEX\ERN\ERN_431\ContributorRoleValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the ContributorRole.
     *
     * @param \DDEX\ERN\ERN_431\ContributorRoleValueType $value
     * @return self
     */
    public function setValue(\DDEX\ERN\ERN_431\ContributorRoleValueType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @return self
     * @param \DDEX\ERN\ERN_431\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\ERN\ERN_431\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentType($index)
    {
        return isset($this->instrumentType[$index]);
    }

    /**
     * unset instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentType($index)
    {
        unset($this->instrumentType[$index]);
    }

    /**
     * Gets as instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @return \DDEX\ERN\ERN_431\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @param \DDEX\ERN\ERN_431\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }
}


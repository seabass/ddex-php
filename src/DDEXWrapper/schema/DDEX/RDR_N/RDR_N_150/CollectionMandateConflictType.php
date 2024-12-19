<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing CollectionMandateConflictType
 *
 * A Composite containing details of a Rights Conflict.
 * XSD Type: CollectionMandateConflict
 */
class CollectionMandateConflictType
{
    /**
     * A Party involved in the Conflict.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ConflictingPartyType[] $conflictingParty
     */
    private $conflictingParty = [
        
    ];

    /**
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @var \DDEX\RDR_N\RDR_N_150\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PeriodType[] $period
     */
    private $period = [
        
    ];

    /**
     * Adds as conflictingParty
     *
     * A Party involved in the Conflict.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ConflictingPartyType $conflictingParty
     */
    public function addToConflictingParty(\DDEX\RDR_N\RDR_N_150\ConflictingPartyType $conflictingParty)
    {
        $this->conflictingParty[] = $conflictingParty;
        return $this;
    }

    /**
     * isset conflictingParty
     *
     * A Party involved in the Conflict.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConflictingParty($index)
    {
        return isset($this->conflictingParty[$index]);
    }

    /**
     * unset conflictingParty
     *
     * A Party involved in the Conflict.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConflictingParty($index)
    {
        unset($this->conflictingParty[$index]);
    }

    /**
     * Gets as conflictingParty
     *
     * A Party involved in the Conflict.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ConflictingPartyType[]
     */
    public function getConflictingParty()
    {
        return $this->conflictingParty;
    }

    /**
     * Sets a new conflictingParty
     *
     * A Party involved in the Conflict.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ConflictingPartyType[] $conflictingParty
     * @return self
     */
    public function setConflictingParty(array $conflictingParty = null)
    {
        $this->conflictingParty = $conflictingParty;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType $useType
     */
    public function addToUseType(\DDEX\RDR_N\RDR_N_150\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @return \DDEX\RDR_N\RDR_N_150\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a usage for which the Conflict is reported.
     *
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory for which Conflict is reported. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AllTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as period
     *
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PeriodType $period
     */
    public function addToPeriod(\DDEX\RDR_N\RDR_N_150\PeriodType $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PeriodType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * A Composite containing details about the Period of Time for which the Conflict is reported.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PeriodType[] $period
     * @return self
     */
    public function setPeriod(array $period = null)
    {
        $this->period = $period;
        return $this;
    }
}


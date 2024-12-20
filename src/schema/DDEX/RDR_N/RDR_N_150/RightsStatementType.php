<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RightsStatementType
 *
 * A Composite containing details of rights controlled by a RightsController.
 * XSD Type: RightsStatement
 */
class RightsStatementType
{
    /**
     * A Composite containing details of the use for which Rights are delegated.
     *
     * @var \DDEX\RDR_N\RDR_N_150\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @var \DDEX\RDR_N\RDR_N_150\UseTypeType[] $excludedUseType
     */
    private $excludedUseType = [
        
    ];

    /**
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PeriodType $period
     */
    private $period = null;

    /**
     * A Territory for which the delegation of usage rights applies.
     *
     * @var string[] $territory
     */
    private $territory = [
        
    ];

    /**
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @var string[] $excludedTerritory
     */
    private $excludedTerritory = [
        
    ];

    /**
     * Adds as useType
     *
     * A Composite containing details of the use for which Rights are delegated.
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
     * A Composite containing details of the use for which Rights are delegated.
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
     * A Composite containing details of the use for which Rights are delegated.
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
     * A Composite containing details of the use for which Rights are delegated.
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
     * A Composite containing details of the use for which Rights are delegated.
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
     * Adds as excludedUseType
     *
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType $excludedUseType
     */
    public function addToExcludedUseType(\DDEX\RDR_N\RDR_N_150\UseTypeType $excludedUseType)
    {
        $this->excludedUseType[] = $excludedUseType;
        return $this;
    }

    /**
     * isset excludedUseType
     *
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedUseType($index)
    {
        return isset($this->excludedUseType[$index]);
    }

    /**
     * unset excludedUseType
     *
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedUseType($index)
    {
        unset($this->excludedUseType[$index]);
    }

    /**
     * Gets as excludedUseType
     *
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @return \DDEX\RDR_N\RDR_N_150\UseTypeType[]
     */
    public function getExcludedUseType()
    {
        return $this->excludedUseType;
    }

    /**
     * Sets a new excludedUseType
     *
     * A Composite containing details of the use for which Rights are not delegated.
     *
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType[] $excludedUseType
     * @return self
     */
    public function setExcludedUseType(array $excludedUseType = null)
    {
        $this->excludedUseType = $excludedUseType;
        return $this;
    }

    /**
     * Gets as period
     *
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * A Composite containing details about a Period of Time for which the delegation of usage Rights applies. Periods are typically described by at least a StartDate or EndDate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PeriodType $period
     * @return self
     */
    public function setPeriod(\DDEX\RDR_N\RDR_N_150\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as territory
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @return self
     * @param string $territory
     */
    public function addToTerritory($territory)
    {
        $this->territory[] = $territory;
        return $this;
    }

    /**
     * isset territory
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritory($index)
    {
        return isset($this->territory[$index]);
    }

    /**
     * unset territory
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritory($index)
    {
        unset($this->territory[$index]);
    }

    /**
     * Gets as territory
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @return string[]
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Sets a new territory
     *
     * A Territory for which the delegation of usage rights applies.
     *
     * @param string $territory
     * @return self
     */
    public function setTerritory(array $territory = null)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Adds as excludedTerritory
     *
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @return self
     * @param string $excludedTerritory
     */
    public function addToExcludedTerritory($excludedTerritory)
    {
        $this->excludedTerritory[] = $excludedTerritory;
        return $this;
    }

    /**
     * isset excludedTerritory
     *
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritory($index)
    {
        return isset($this->excludedTerritory[$index]);
    }

    /**
     * unset excludedTerritory
     *
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritory($index)
    {
        unset($this->excludedTerritory[$index]);
    }

    /**
     * Gets as excludedTerritory
     *
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @return string[]
     */
    public function getExcludedTerritory()
    {
        return $this->excludedTerritory;
    }

    /**
     * Sets a new excludedTerritory
     *
     * A Territory for which the delegation of usage rights does not apply.
     *
     * @param string $excludedTerritory
     * @return self
     */
    public function setExcludedTerritory(array $excludedTerritory = null)
    {
        $this->excludedTerritory = $excludedTerritory;
        return $this;
    }
}


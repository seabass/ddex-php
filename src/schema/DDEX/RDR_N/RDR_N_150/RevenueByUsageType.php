<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RevenueByUsageType
 *
 * A Composite containing details of a Revenue specified for a UseType.
 * XSD Type: RevenueByUsage
 */
class RevenueByUsageType
{
    /**
     * A Composite containing details of a nature of a usage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\UseTypeType $useType
     */
    private $useType = null;

    /**
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RevenueByTerritoryType[] $revenueByTerritory
     */
    private $revenueByTerritory = [
        
    ];

    /**
     * Gets as useType
     *
     * A Composite containing details of a nature of a usage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\UseTypeType
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a usage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType $useType
     * @return self
     */
    public function setUseType(\DDEX\RDR_N\RDR_N_150\UseTypeType $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as revenueByTerritory
     *
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RevenueByTerritoryType $revenueByTerritory
     */
    public function addToRevenueByTerritory(\DDEX\RDR_N\RDR_N_150\RevenueByTerritoryType $revenueByTerritory)
    {
        $this->revenueByTerritory[] = $revenueByTerritory;
        return $this;
    }

    /**
     * isset revenueByTerritory
     *
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueByTerritory($index)
    {
        return isset($this->revenueByTerritory[$index]);
    }

    /**
     * unset revenueByTerritory
     *
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueByTerritory($index)
    {
        unset($this->revenueByTerritory[$index]);
    }

    /**
     * Gets as revenueByTerritory
     *
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RevenueByTerritoryType[]
     */
    public function getRevenueByTerritory()
    {
        return $this->revenueByTerritory;
    }

    /**
     * Sets a new revenueByTerritory
     *
     * A Composite containing details of a Revenue specified for a Territory.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RevenueByTerritoryType[] $revenueByTerritory
     * @return self
     */
    public function setRevenueByTerritory(array $revenueByTerritory)
    {
        $this->revenueByTerritory = $revenueByTerritory;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing CommercialAvailbilityType
 *
 * A Composite containing details of the territories in which the Resource is available for sale and/or distribution to the general public.
 * XSD Type: CommercialAvailbility
 */
class CommercialAvailbilityType
{
    /**
     * A Territory to which the commercial availability applies.
     *
     * @var \DDEX\RDR_N\RDR_N_150\TerritoryCodeWithDateType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * The Flag indicating whether the Resource is commercially available (=true) or not (=false).
     *
     * @var bool $isCommerciallyAvailable
     */
    private $isCommerciallyAvailable = null;

    /**
     * Adds as territoryCode
     *
     * A Territory to which the commercial availability applies.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\TerritoryCodeWithDateType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\RDR_N\RDR_N_150\TerritoryCodeWithDateType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the commercial availability applies.
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
     * A Territory to which the commercial availability applies.
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
     * A Territory to which the commercial availability applies.
     *
     * @return \DDEX\RDR_N\RDR_N_150\TerritoryCodeWithDateType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the commercial availability applies.
     *
     * @param \DDEX\RDR_N\RDR_N_150\TerritoryCodeWithDateType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as isCommerciallyAvailable
     *
     * The Flag indicating whether the Resource is commercially available (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsCommerciallyAvailable()
    {
        return $this->isCommerciallyAvailable;
    }

    /**
     * Sets a new isCommerciallyAvailable
     *
     * The Flag indicating whether the Resource is commercially available (=true) or not (=false).
     *
     * @param bool $isCommerciallyAvailable
     * @return self
     */
    public function setIsCommerciallyAvailable($isCommerciallyAvailable)
    {
        $this->isCommerciallyAvailable = $isCommerciallyAvailable;
        return $this;
    }
}


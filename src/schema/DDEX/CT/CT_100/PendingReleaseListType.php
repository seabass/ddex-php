<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing PendingReleaseListType
 *
 * A Composite containing details of one or more Releases that are still being processed.
 * XSD Type: PendingReleaseList
 */
class PendingReleaseListType
{
    /**
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a pending Release.
     *
     * @var \DDEX\CT\CT_100\PendingReleaseType[] $pendingRelease
     */
    private $pendingRelease = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
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
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
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
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the pending status applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the pending status does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the pending status applies to the territories specified for the catalog transfer.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as pendingRelease
     *
     * A Composite containing details of a pending Release.
     *
     * @return self
     * @param \DDEX\CT\CT_100\PendingReleaseType $pendingRelease
     */
    public function addToPendingRelease(\DDEX\CT\CT_100\PendingReleaseType $pendingRelease)
    {
        $this->pendingRelease[] = $pendingRelease;
        return $this;
    }

    /**
     * isset pendingRelease
     *
     * A Composite containing details of a pending Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPendingRelease($index)
    {
        return isset($this->pendingRelease[$index]);
    }

    /**
     * unset pendingRelease
     *
     * A Composite containing details of a pending Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPendingRelease($index)
    {
        unset($this->pendingRelease[$index]);
    }

    /**
     * Gets as pendingRelease
     *
     * A Composite containing details of a pending Release.
     *
     * @return \DDEX\CT\CT_100\PendingReleaseType[]
     */
    public function getPendingRelease()
    {
        return $this->pendingRelease;
    }

    /**
     * Sets a new pendingRelease
     *
     * A Composite containing details of a pending Release.
     *
     * @param \DDEX\CT\CT_100\PendingReleaseType[] $pendingRelease
     * @return self
     */
    public function setPendingRelease(array $pendingRelease)
    {
        $this->pendingRelease = $pendingRelease;
        return $this;
    }
}


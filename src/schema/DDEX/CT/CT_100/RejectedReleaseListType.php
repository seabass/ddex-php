<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing RejectedReleaseListType
 *
 * A Composite containing details of one or more Releases that are rejected from inclusion in a CatalogTransfer.
 * XSD Type: RejectedReleaseList
 */
class RejectedReleaseListType
{
    /**
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a rejected Release.
     *
     * @var \DDEX\CT\CT_100\RejectedReleaseType[] $rejectedRelease
     */
    private $rejectedRelease = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * A Territory to which the rejection does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the rejection applies to the territories specified for the catalog transfer.
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
     * Adds as rejectedRelease
     *
     * A Composite containing details of a rejected Release.
     *
     * @return self
     * @param \DDEX\CT\CT_100\RejectedReleaseType $rejectedRelease
     */
    public function addToRejectedRelease(\DDEX\CT\CT_100\RejectedReleaseType $rejectedRelease)
    {
        $this->rejectedRelease[] = $rejectedRelease;
        return $this;
    }

    /**
     * isset rejectedRelease
     *
     * A Composite containing details of a rejected Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectedRelease($index)
    {
        return isset($this->rejectedRelease[$index]);
    }

    /**
     * unset rejectedRelease
     *
     * A Composite containing details of a rejected Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectedRelease($index)
    {
        unset($this->rejectedRelease[$index]);
    }

    /**
     * Gets as rejectedRelease
     *
     * A Composite containing details of a rejected Release.
     *
     * @return \DDEX\CT\CT_100\RejectedReleaseType[]
     */
    public function getRejectedRelease()
    {
        return $this->rejectedRelease;
    }

    /**
     * Sets a new rejectedRelease
     *
     * A Composite containing details of a rejected Release.
     *
     * @param \DDEX\CT\CT_100\RejectedReleaseType[] $rejectedRelease
     * @return self
     */
    public function setRejectedRelease(array $rejectedRelease)
    {
        $this->rejectedRelease = $rejectedRelease;
        return $this;
    }
}


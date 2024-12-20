<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing ConfirmedReleaseListType
 *
 * A Composite containing details of one or more Releases that are confirmed to be included in a CatalogTransfer.
 * XSD Type: ConfirmedReleaseList
 */
class ConfirmedReleaseListType
{
    /**
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a confirmed Release.
     *
     * @var \DDEX\CT\CT_100\ConfirmedReleaseType[] $confirmedRelease
     */
    private $confirmedRelease = [
        
    ];

    /**
     * Adds as territoryCode
     *
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation applies. Either this Element or ExcludedTerritory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * A Territory to which the confirmation does not apply. Either this Element or Territory shall be present, but not both. If no Territory is specified, the confirmation applies to the territories specified for the catalog transfer.
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
     * Adds as confirmedRelease
     *
     * A Composite containing details of a confirmed Release.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ConfirmedReleaseType $confirmedRelease
     */
    public function addToConfirmedRelease(\DDEX\CT\CT_100\ConfirmedReleaseType $confirmedRelease)
    {
        $this->confirmedRelease[] = $confirmedRelease;
        return $this;
    }

    /**
     * isset confirmedRelease
     *
     * A Composite containing details of a confirmed Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfirmedRelease($index)
    {
        return isset($this->confirmedRelease[$index]);
    }

    /**
     * unset confirmedRelease
     *
     * A Composite containing details of a confirmed Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfirmedRelease($index)
    {
        unset($this->confirmedRelease[$index]);
    }

    /**
     * Gets as confirmedRelease
     *
     * A Composite containing details of a confirmed Release.
     *
     * @return \DDEX\CT\CT_100\ConfirmedReleaseType[]
     */
    public function getConfirmedRelease()
    {
        return $this->confirmedRelease;
    }

    /**
     * Sets a new confirmedRelease
     *
     * A Composite containing details of a confirmed Release.
     *
     * @param \DDEX\CT\CT_100\ConfirmedReleaseType[] $confirmedRelease
     * @return self
     */
    public function setConfirmedRelease(array $confirmedRelease)
    {
        $this->confirmedRelease = $confirmedRelease;
        return $this;
    }
}


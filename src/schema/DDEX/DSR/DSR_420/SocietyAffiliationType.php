<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing SocietyAffiliationType
 *
 * A Composite containing details of a society affiliation.
 * XSD Type: SocietyAffiliation
 */
class SocietyAffiliationType
{
    /**
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a MusicRightsSociety.
     *
     * @var \DDEX\DSR\DSR_420\PartyDescriptorType $musicRightsSociety
     */
    private $musicRightsSociety = null;

    /**
     * Adds as territoryCode
     *
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the affiliation details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the affiliation details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * Gets as musicRightsSociety
     *
     * A Composite containing details of a MusicRightsSociety.
     *
     * @return \DDEX\DSR\DSR_420\PartyDescriptorType
     */
    public function getMusicRightsSociety()
    {
        return $this->musicRightsSociety;
    }

    /**
     * Sets a new musicRightsSociety
     *
     * A Composite containing details of a MusicRightsSociety.
     *
     * @param \DDEX\DSR\DSR_420\PartyDescriptorType $musicRightsSociety
     * @return self
     */
    public function setMusicRightsSociety(\DDEX\DSR\DSR_420\PartyDescriptorType $musicRightsSociety)
    {
        $this->musicRightsSociety = $musicRightsSociety;
        return $this;
    }
}


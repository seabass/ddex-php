<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing SocietyAffiliationType
 *
 * A Composite containing details of a society affiliation.
 * XSD Type: SocietyAffiliation
 */
class SocietyAffiliationType
{
    /**
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a RightsType.
     *
     * @var \DDEX\MWN\MWN_100\RightsTypeType $rightsType
     */
    private $rightsType = null;

    /**
     * A Reference for a MusicRightsSociety (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $musicRightsSociety
     */
    private $musicRightsSociety = null;

    /**
     * A Composite containing details about the Period of Time for which the SocietyAffiliation is valid.
     *
     * @var \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Adds as territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\MWN\MWN_100\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\MWN\MWN_100\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Gets as rightsType
     *
     * A Composite containing details of a RightsType.
     *
     * @return \DDEX\MWN\MWN_100\RightsTypeType
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Composite containing details of a RightsType.
     *
     * @param \DDEX\MWN\MWN_100\RightsTypeType $rightsType
     * @return self
     */
    public function setRightsType(\DDEX\MWN\MWN_100\RightsTypeType $rightsType)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as musicRightsSociety
     *
     * A Reference for a MusicRightsSociety (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getMusicRightsSociety()
    {
        return $this->musicRightsSociety;
    }

    /**
     * Sets a new musicRightsSociety
     *
     * A Reference for a MusicRightsSociety (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $musicRightsSociety
     * @return self
     */
    public function setMusicRightsSociety($musicRightsSociety)
    {
        $this->musicRightsSociety = $musicRightsSociety;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the SocietyAffiliation is valid.
     *
     * @return \DDEX\MWN\MWN_100\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the SocietyAffiliation is valid.
     *
     * @param \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DDEX\MWN\MWN_100\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing SocietyAffiliationType
 *
 * A Composite containing details of a society affiliation.
 * XSD Type: SocietyAffiliation
 */
class SocietyAffiliationType
{
    /**
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a rights type.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\SimpleRightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ValidityPeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @var float $percentage
     */
    private $percentage = null;

    /**
     * A Reference for a MusicRightsSociety (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $musicRightsSociety
     */
    private $musicRightsSociety = null;

    /**
     * Adds as territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the affiliation details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the affiliation details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\SimpleRightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\MWN\MWN_US_LIC_100\SimpleRightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\SimpleRightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Composite containing details of a rights type.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\SimpleRightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ValidityPeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the society affiliation is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ValidityPeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DDEX\MWN\MWN_US_LIC_100\ValidityPeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * Percentage of the specific Right that is represented by the society. A quarter share is represented by '25' (and not 0.25).
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
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
}


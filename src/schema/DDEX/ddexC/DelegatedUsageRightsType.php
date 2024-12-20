<?php

namespace DDEX\ddexC;

/**
 * Class representing DelegatedUsageRightsType
 *
 * A ddex:Composite containing details of the kinds of usage for which rights have been delegated.
 * XSD Type: DelegatedUsageRights
 */
class DelegatedUsageRightsType
{
    /**
     * A ddex:Composite containing details of the use for which rights are delegated.
     *
     * @var \DDEX\ddexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @var \DDEX\ddexC\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A ddex:Composite containing details about a ddex:Period of ddex:Time for which the delegation of usage rights applies. ddex:Periods are typically described by at least a ddex:StartDate or ddex:EndDate.
     *
     * @var \DDEX\ddexC\PeriodType $periodOfRightsDelegation
     */
    private $periodOfRightsDelegation = null;

    /**
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @var string[] $territoryOfRightsDelegation
     */
    private $territoryOfRightsDelegation = [
        
    ];

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of the use for which rights are delegated.
     *
     * @return self
     * @param \DDEX\ddexC\UseTypeType $useType
     */
    public function addToUseType(\DDEX\ddexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of the use for which rights are delegated.
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
     * A ddex:Composite containing details of the use for which rights are delegated.
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
     * A ddex:Composite containing details of the use for which rights are delegated.
     *
     * @return \DDEX\ddexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of the use for which rights are delegated.
     *
     * @param \DDEX\ddexC\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DDEX\ddexC\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserInterfaceType($index)
    {
        return isset($this->userInterfaceType[$index]);
    }

    /**
     * unset userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserInterfaceType($index)
    {
        unset($this->userInterfaceType[$index]);
    }

    /**
     * Gets as userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return \DDEX\ddexC\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @param \DDEX\ddexC\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType = null)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Gets as periodOfRightsDelegation
     *
     * A ddex:Composite containing details about a ddex:Period of ddex:Time for which the delegation of usage rights applies. ddex:Periods are typically described by at least a ddex:StartDate or ddex:EndDate.
     *
     * @return \DDEX\ddexC\PeriodType
     */
    public function getPeriodOfRightsDelegation()
    {
        return $this->periodOfRightsDelegation;
    }

    /**
     * Sets a new periodOfRightsDelegation
     *
     * A ddex:Composite containing details about a ddex:Period of ddex:Time for which the delegation of usage rights applies. ddex:Periods are typically described by at least a ddex:StartDate or ddex:EndDate.
     *
     * @param \DDEX\ddexC\PeriodType $periodOfRightsDelegation
     * @return self
     */
    public function setPeriodOfRightsDelegation(\DDEX\ddexC\PeriodType $periodOfRightsDelegation)
    {
        $this->periodOfRightsDelegation = $periodOfRightsDelegation;
        return $this;
    }

    /**
     * Adds as territoryOfRightsDelegation
     *
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return self
     * @param string $territoryOfRightsDelegation
     */
    public function addToTerritoryOfRightsDelegation($territoryOfRightsDelegation)
    {
        $this->territoryOfRightsDelegation[] = $territoryOfRightsDelegation;
        return $this;
    }

    /**
     * isset territoryOfRightsDelegation
     *
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryOfRightsDelegation($index)
    {
        return isset($this->territoryOfRightsDelegation[$index]);
    }

    /**
     * unset territoryOfRightsDelegation
     *
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryOfRightsDelegation($index)
    {
        unset($this->territoryOfRightsDelegation[$index]);
    }

    /**
     * Gets as territoryOfRightsDelegation
     *
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @return string[]
     */
    public function getTerritoryOfRightsDelegation()
    {
        return $this->territoryOfRightsDelegation;
    }

    /**
     * Sets a new territoryOfRightsDelegation
     *
     * A ddex:Territory for which the delegation of usage rights applies (represented by an ISO 3166-1 iso3166a2:TerritoryCode).
     *
     * @param string $territoryOfRightsDelegation
     * @return self
     */
    public function setTerritoryOfRightsDelegation(array $territoryOfRightsDelegation)
    {
        $this->territoryOfRightsDelegation = $territoryOfRightsDelegation;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing RightsControllerType
 *
 * A Composite containing details of a RightsController. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: RightsController
 */
class RightsControllerType
{
    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $partyPartyReference
     */
    private $partyPartyReference = null;

    /**
     * A role that describes the Party involved in the administration of Rights.
     *
     * @var string[] $rightsControllerRole
     */
    private $rightsControllerRole = [
        
    ];

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * The country of control.
     *
     * @var \DDEX\RIN\RIN11M\AllTerritoryCodeType $territory
     */
    private $territory = null;

    /**
     * A Composite containing details about a ValidityPeriod.
     *
     * @var string $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Gets as partyPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getPartyPartyReference()
    {
        return $this->partyPartyReference;
    }

    /**
     * Sets a new partyPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $partyPartyReference
     * @return self
     */
    public function setPartyPartyReference($partyPartyReference)
    {
        $this->partyPartyReference = $partyPartyReference;
        return $this;
    }

    /**
     * Adds as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return self
     * @param string $rightsControllerRole
     */
    public function addToRightsControllerRole($rightsControllerRole)
    {
        $this->rightsControllerRole[] = $rightsControllerRole;
        return $this;
    }

    /**
     * isset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsControllerRole($index)
    {
        return isset($this->rightsControllerRole[$index]);
    }

    /**
     * unset rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsControllerRole($index)
    {
        unset($this->rightsControllerRole[$index]);
    }

    /**
     * Gets as rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @return string[]
     */
    public function getRightsControllerRole()
    {
        return $this->rightsControllerRole;
    }

    /**
     * Sets a new rightsControllerRole
     *
     * A role that describes the Party involved in the administration of Rights.
     *
     * @param string $rightsControllerRole
     * @return self
     */
    public function setRightsControllerRole(array $rightsControllerRole = null)
    {
        $this->rightsControllerRole = $rightsControllerRole;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=true) or not (=false).
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @return float
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Gets as territory
     *
     * The country of control.
     *
     * @return \DDEX\RIN\RIN11M\AllTerritoryCodeType
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Sets a new territory
     *
     * The country of control.
     *
     * @param \DDEX\RIN\RIN11M\AllTerritoryCodeType $territory
     * @return self
     */
    public function setTerritory(?\DDEX\RIN\RIN11M\AllTerritoryCodeType $territory = null)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about a ValidityPeriod.
     *
     * @return string
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about a ValidityPeriod.
     *
     * @param string $validityPeriod
     * @return self
     */
    public function setValidityPeriod($validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }
}


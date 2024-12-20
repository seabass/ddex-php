<?php

namespace DDEX\ddexC;

/**
 * Class representing RightsControllerType
 *
 * A ddex:Composite containing details of a ddex:RightsController. ddex:RightsControllers are typicallydescribed by ddex:Name, ddex:Identifier and role(s).
 * XSD Type: RightsController
 */
class RightsControllerType
{
    /**
     * The number indicating the order of the ddexC:RightsController in a group of ddex:RightsControllers. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @var \DDEX\ddexC\PartyIdType $partyId
     */
    private $partyId = null;

    /**
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @var \DDEX\ddexC\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
     *
     * @var string[] $rightsControllerRole
     */
    private $rightsControllerRole = [
        
    ];

    /**
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the ddexC:RightsController. ddex:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @var string $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:RightsController in a group of ddex:RightsControllers. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ddexC:RightsController in a group of ddex:RightsControllers. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @return \DDEX\ddexC\PartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A ddex:Composite containing details of the ddex:PartyId for the ddex:Party. If no ddex:Namespace is given, the ddex:Identifier is a ddex:DdexPartyId (DPID). Note that DPIDs are not normally used to identify ddex:Artists, ddex:Producers or other ddex:Creators.
     *
     * @param \DDEX\ddexC\PartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\ddexC\PartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DDEX\ddexC\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\ddexC\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @return \DDEX\ddexC\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A ddex:Composite containing details of the PartyName(s).
     *
     * @param \DDEX\ddexC\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as rightsControllerRole
     *
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
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
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
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
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
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
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
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
     * A role that describes the ddex:Party involved in the administration of ddex:Rights.
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
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
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
     * The ddex:Flag indicating whether the ddex:RightSharePercentage is unknown (=True) or not (=False).
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
     * The share of the licensed Rights owned by the ddexC:RightsController. ddex:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @return string
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the ddexC:RightsController. ddex:RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%). If no information is given, 100% is assumed.
     *
     * @param string $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }
}


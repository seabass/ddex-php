<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RightsControllerType
 *
 * A Composite containing details of a RightsController. RightsControllers are typicallydescribed by Name, Identifier and role(s).
 * XSD Type: RightsController
 */
class RightsControllerType
{
    /**
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $rightsControllerPartyReference
     */
    private $rightsControllerPartyReference = null;

    /**
     * A role that describes the Party involved in the administration of Rights.
     *
     * @var string[] $rightsControllerRole
     */
    private $rightsControllerRole = [
        
    ];

    /**
     * A type of the RightsController.
     *
     * @var string $rightsControllerType
     */
    private $rightsControllerType = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the RightsController in a group of RightsControllers. This is represented in an XML schema as an XML Attribute.
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
     * Gets as rightsControllerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getRightsControllerPartyReference()
    {
        return $this->rightsControllerPartyReference;
    }

    /**
     * Sets a new rightsControllerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $rightsControllerPartyReference
     * @return self
     */
    public function setRightsControllerPartyReference($rightsControllerPartyReference)
    {
        $this->rightsControllerPartyReference = $rightsControllerPartyReference;
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
     * Gets as rightsControllerType
     *
     * A type of the RightsController.
     *
     * @return string
     */
    public function getRightsControllerType()
    {
        return $this->rightsControllerType;
    }

    /**
     * Sets a new rightsControllerType
     *
     * A type of the RightsController.
     *
     * @param string $rightsControllerType
     * @return self
     */
    public function setRightsControllerType($rightsControllerType)
    {
        $this->rightsControllerType = $rightsControllerType;
        return $this;
    }
}


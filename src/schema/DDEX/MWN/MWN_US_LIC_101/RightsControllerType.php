<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing RightsControllerType
 *
 * A Composite containing details of a RightsController. RightsControllers are typically described by Name, Identifier and Role(s).
 * XSD Type: RightsController
 */
class RightsControllerType
{
    /**
     * The Flag indicating whether this Party is a rights owner (=true) or not (=false). This Flag must not be set to true if IsAgent is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isOwner
     */
    private $isOwner = null;

    /**
     * The Flag indicating whether this Party is a licensing agent (=true) or not (=false). This Flag must not be set to true if IsOwner is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isAgent
     */
    private $isAgent = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $rightsControllerPartyReference
     */
    private $rightsControllerPartyReference = null;

    /**
     * Gets as isOwner
     *
     * The Flag indicating whether this Party is a rights owner (=true) or not (=false). This Flag must not be set to true if IsAgent is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsOwner()
    {
        return $this->isOwner;
    }

    /**
     * Sets a new isOwner
     *
     * The Flag indicating whether this Party is a rights owner (=true) or not (=false). This Flag must not be set to true if IsAgent is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isOwner
     * @return self
     */
    public function setIsOwner($isOwner)
    {
        $this->isOwner = $isOwner;
        return $this;
    }

    /**
     * Gets as isAgent
     *
     * The Flag indicating whether this Party is a licensing agent (=true) or not (=false). This Flag must not be set to true if IsOwner is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsAgent()
    {
        return $this->isAgent;
    }

    /**
     * Sets a new isAgent
     *
     * The Flag indicating whether this Party is a licensing agent (=true) or not (=false). This Flag must not be set to true if IsOwner is set to true. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isAgent
     * @return self
     */
    public function setIsAgent($isAgent)
    {
        $this->isAgent = $isAgent;
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
}


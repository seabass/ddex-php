<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing ResourceContributorType
 *
 * A Composite containing details of the Name, Identifier and role(s) of a Contributor to a Resource.
 * XSD Type: ResourceContributor
 */
class ResourceContributorType
{
    /**
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $resourceContributorPartyReference
     */
    private $resourceContributorPartyReference = null;

    /**
     * A Composite containing details of a role played by the Contributor.
     *
     * @var \DDEX\MWN\MWN_100\ResourceContributorRoleType[] $resourceContributorRole
     */
    private $resourceContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Gets as resourceContributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getResourceContributorPartyReference()
    {
        return $this->resourceContributorPartyReference;
    }

    /**
     * Sets a new resourceContributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $resourceContributorPartyReference
     * @return self
     */
    public function setResourceContributorPartyReference($resourceContributorPartyReference)
    {
        $this->resourceContributorPartyReference = $resourceContributorPartyReference;
        return $this;
    }

    /**
     * Adds as resourceContributorRole
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceContributorRoleType $resourceContributorRole
     */
    public function addToResourceContributorRole(\DDEX\MWN\MWN_100\ResourceContributorRoleType $resourceContributorRole)
    {
        $this->resourceContributorRole[] = $resourceContributorRole;
        return $this;
    }

    /**
     * isset resourceContributorRole
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributorRole($index)
    {
        return isset($this->resourceContributorRole[$index]);
    }

    /**
     * unset resourceContributorRole
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributorRole($index)
    {
        unset($this->resourceContributorRole[$index]);
    }

    /**
     * Gets as resourceContributorRole
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @return \DDEX\MWN\MWN_100\ResourceContributorRoleType[]
     */
    public function getResourceContributorRole()
    {
        return $this->resourceContributorRole;
    }

    /**
     * Sets a new resourceContributorRole
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @param \DDEX\MWN\MWN_100\ResourceContributorRoleType[] $resourceContributorRole
     * @return self
     */
    public function setResourceContributorRole(array $resourceContributorRole = null)
    {
        $this->resourceContributorRole = $resourceContributorRole;
        return $this;
    }
}


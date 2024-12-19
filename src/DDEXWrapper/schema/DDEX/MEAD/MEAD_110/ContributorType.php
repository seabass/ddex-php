<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ContributorType
 *
 * A Composite containing details of a Contributor.
 * XSD Type: Contributor
 */
class ContributorType
{
    /**
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\MEAD\MEAD_110\DetailedPartyIdType $identifier
     */
    private $identifier = null;

    /**
     * A Composite containing details of a Name of the Contributor.
     *
     * @var \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType $name
     */
    private $name = null;

    /**
     * A Role played by the Contributor.
     *
     * @var \DDEX\MEAD\MEAD_110\ResourceContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * Gets as identifier
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\MEAD\MEAD_110\DetailedPartyIdType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A Composite containing details of the PartyId for the Contributor. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\MEAD\MEAD_110\DetailedPartyIdType $identifier
     * @return self
     */
    public function setIdentifier(?\DDEX\MEAD\MEAD_110\DetailedPartyIdType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * A Composite containing details of a Name of the Contributor.
     *
     * @return \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A Composite containing details of a Name of the Contributor.
     *
     * @param \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType $name
     * @return self
     */
    public function setName(?\DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Role played by the Contributor.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ResourceContributorRoleType $role
     */
    public function addToRole(\DDEX\MEAD\MEAD_110\ResourceContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Role played by the Contributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * A Role played by the Contributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * A Role played by the Contributor.
     *
     * @return \DDEX\MEAD\MEAD_110\ResourceContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Role played by the Contributor.
     *
     * @param \DDEX\MEAD\MEAD_110\ResourceContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }
}


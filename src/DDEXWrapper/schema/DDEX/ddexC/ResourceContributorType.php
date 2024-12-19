<?php

namespace DDEX\ddexC;

/**
 * Class representing ResourceContributorType
 *
 * A ddex:Composite containing details of the ddex:Name, ddex:Identifier and role(s) of a ddex:Contributor to a ddex:Resource.
 * XSD Type: ResourceContributor
 */
class ResourceContributorType
{
    /**
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @var \DDEX\ddexC\ResourceContributorRoleType[] $resourceContributorRole
     */
    private $resourceContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the ddexC:ResourceContributor in a group of ResourceContributors that have contributed to a ddex:Resource. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @return self
     * @param \DDEX\ddexC\ResourceContributorRoleType $resourceContributorRole
     */
    public function addToResourceContributorRole(\DDEX\ddexC\ResourceContributorRoleType $resourceContributorRole)
    {
        $this->resourceContributorRole[] = $resourceContributorRole;
        return $this;
    }

    /**
     * isset resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
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
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
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
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @return \DDEX\ddexC\ResourceContributorRoleType[]
     */
    public function getResourceContributorRole()
    {
        return $this->resourceContributorRole;
    }

    /**
     * Sets a new resourceContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor.
     *
     * @param \DDEX\ddexC\ResourceContributorRoleType[] $resourceContributorRole
     * @return self
     */
    public function setResourceContributorRole(array $resourceContributorRole = null)
    {
        $this->resourceContributorRole = $resourceContributorRole;
        return $this;
    }
}


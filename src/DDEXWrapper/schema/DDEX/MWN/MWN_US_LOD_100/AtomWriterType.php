<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing AtomWriterType
 *
 * A Composite containing details a MusicalWorkContributor.
 * XSD Type: AtomWriter
 */
class AtomWriterType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CreativeMusicalWorkContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\MWN\MWN_US_LOD_100\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\MWN\MWN_US_LOD_100\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CreativeMusicalWorkContributorRoleType $role
     */
    public function addToRole(\DDEX\MWN\MWN_US_LOD_100\CreativeMusicalWorkContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CreativeMusicalWorkContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CreativeMusicalWorkContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }
}


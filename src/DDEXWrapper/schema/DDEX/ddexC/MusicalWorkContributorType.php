<?php

namespace DDEX\ddexC;

/**
 * Class representing MusicalWorkContributorType
 *
 * A ddex:Composite containing details a ddex:MusicalWorkContributor.
 * XSD Type: MusicalWorkContributor
 */
class MusicalWorkContributorType
{
    /**
     * The number indicating the order of the ddexC:MusicalWorkContributor in a group of ddex:MusicalWorkContributors that have contributed to a ddex:MusicalWork. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     */
    private $musicalWorkContributorRole = [
        
    ];

    /**
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @var \DDEX\ddexC\SocietyAffiliationType[] $societyAffiliation
     */
    private $societyAffiliation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ddexC:MusicalWorkContributor in a group of ddex:MusicalWorkContributors that have contributed to a ddex:MusicalWork. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The number indicating the order of the ddexC:MusicalWorkContributor in a group of ddex:MusicalWorkContributors that have contributed to a ddex:MusicalWork. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as musicalWorkContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkContributorRoleType $musicalWorkContributorRole
     */
    public function addToMusicalWorkContributorRole(\DDEX\ddexC\MusicalWorkContributorRoleType $musicalWorkContributorRole)
    {
        $this->musicalWorkContributorRole[] = $musicalWorkContributorRole;
        return $this;
    }

    /**
     * isset musicalWorkContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkContributorRole($index)
    {
        return isset($this->musicalWorkContributorRole[$index]);
    }

    /**
     * unset musicalWorkContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkContributorRole($index)
    {
        unset($this->musicalWorkContributorRole[$index]);
    }

    /**
     * Gets as musicalWorkContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\MusicalWorkContributorRoleType[]
     */
    public function getMusicalWorkContributorRole()
    {
        return $this->musicalWorkContributorRole;
    }

    /**
     * Sets a new musicalWorkContributorRole
     *
     * A ddex:Composite containing details of a role played by the ddex:Contributor in relation to the ddex:MusicalWork. Note: This can be used in a ddex:DdexMessage in relation to any ddex:Work, ddex:Performance or ddex:Fixation any of which may form the whole or part of the ddex:Resource itself. Example: if an 'AssociatedPerformer' is shown as a ddex:Contributor to a ddex:MusicalWork it refers to a performer of a ddex:Resource (e.g. a ddex:SoundRecording) expressing the ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     * @return self
     */
    public function setMusicalWorkContributorRole(array $musicalWorkContributorRole = null)
    {
        $this->musicalWorkContributorRole = $musicalWorkContributorRole;
        return $this;
    }

    /**
     * Adds as societyAffiliation
     *
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @return self
     * @param \DDEX\ddexC\SocietyAffiliationType $societyAffiliation
     */
    public function addToSocietyAffiliation(\DDEX\ddexC\SocietyAffiliationType $societyAffiliation)
    {
        $this->societyAffiliation[] = $societyAffiliation;
        return $this;
    }

    /**
     * isset societyAffiliation
     *
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocietyAffiliation($index)
    {
        return isset($this->societyAffiliation[$index]);
    }

    /**
     * unset societyAffiliation
     *
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocietyAffiliation($index)
    {
        unset($this->societyAffiliation[$index]);
    }

    /**
     * Gets as societyAffiliation
     *
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @return \DDEX\ddexC\SocietyAffiliationType[]
     */
    public function getSocietyAffiliation()
    {
        return $this->societyAffiliation;
    }

    /**
     * Sets a new societyAffiliation
     *
     * A ddex:Composite containing details of a society affiliation for the ddexC:MusicalWorkContributor.
     *
     * @param \DDEX\ddexC\SocietyAffiliationType[] $societyAffiliation
     * @return self
     */
    public function setSocietyAffiliation(array $societyAffiliation = null)
    {
        $this->societyAffiliation = $societyAffiliation;
        return $this;
    }
}


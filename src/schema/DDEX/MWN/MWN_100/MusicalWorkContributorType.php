<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing MusicalWorkContributorType
 *
 * A Composite containing details a MusicalWorkContributor.
 * XSD Type: MusicalWorkContributor
 */
class MusicalWorkContributorType
{
    /**
     * The number indicating the order of the MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to a MusicalWork. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $musicalWorkContributorPartyReference
     */
    private $musicalWorkContributorPartyReference = null;

    /**
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     */
    private $musicalWorkContributorRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to a MusicalWork. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to a MusicalWork. This is represented in an XML schema as an XML Attribute.
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
     * Gets as musicalWorkContributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getMusicalWorkContributorPartyReference()
    {
        return $this->musicalWorkContributorPartyReference;
    }

    /**
     * Sets a new musicalWorkContributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $musicalWorkContributorPartyReference
     * @return self
     */
    public function setMusicalWorkContributorPartyReference($musicalWorkContributorPartyReference)
    {
        $this->musicalWorkContributorPartyReference = $musicalWorkContributorPartyReference;
        return $this;
    }

    /**
     * Adds as musicalWorkContributorRole
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MusicalWorkContributorRoleType $musicalWorkContributorRole
     */
    public function addToMusicalWorkContributorRole(\DDEX\MWN\MWN_100\MusicalWorkContributorRoleType $musicalWorkContributorRole)
    {
        $this->musicalWorkContributorRole[] = $musicalWorkContributorRole;
        return $this;
    }

    /**
     * isset musicalWorkContributorRole
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\MusicalWorkContributorRoleType[]
     */
    public function getMusicalWorkContributorRole()
    {
        return $this->musicalWorkContributorRole;
    }

    /**
     * Sets a new musicalWorkContributorRole
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     * @return self
     */
    public function setMusicalWorkContributorRole(array $musicalWorkContributorRole = null)
    {
        $this->musicalWorkContributorRole = $musicalWorkContributorRole;
        return $this;
    }
}


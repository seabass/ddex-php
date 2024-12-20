<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing MusicalWorkContributorReferenceType
 *
 * A Composite containing details of a MusicalWorkContributor to a MusicalWork.
 * XSD Type: MusicalWorkContributorReference
 */
class MusicalWorkContributorReferenceType
{
    /**
     * The number indicating the order of the MusicalWorkContributor in a group of MusicalWorkContributors that have contributed to a MusicalWork. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a MusicalWorkContributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $musicalWorkContributorReference
     */
    private $musicalWorkContributorReference = null;

    /**
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @var \DDEX\RIN\RIN10F\MusicalWorkContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * Percentage of the MusicalWork described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

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
     * Gets as musicalWorkContributorReference
     *
     * A Reference for a MusicalWorkContributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getMusicalWorkContributorReference()
    {
        return $this->musicalWorkContributorReference;
    }

    /**
     * Sets a new musicalWorkContributorReference
     *
     * A Reference for a MusicalWorkContributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $musicalWorkContributorReference
     * @return self
     */
    public function setMusicalWorkContributorReference($musicalWorkContributorReference)
    {
        $this->musicalWorkContributorReference = $musicalWorkContributorReference;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\MusicalWorkContributorRoleType $role
     */
    public function addToRole(\DDEX\RIN\RIN10F\MusicalWorkContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
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
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return \DDEX\RIN\RIN10F\MusicalWorkContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the MusicalWorkContributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @param \DDEX\RIN\RIN10F\MusicalWorkContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * Percentage of the MusicalWork described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
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
     * Percentage of the MusicalWork described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     *
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }
}


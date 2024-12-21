<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing MusicalWorkContributorType
 *
 * A Composite containing details a MusicalWorkContributor.
 * XSD Type: MusicalWorkContributor
 */
class MusicalWorkContributorType
{
    /**
     * A Reference for a MusicalWorkContributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $musicalWorkContributorReference
     */
    private $musicalWorkContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @var \DDEX\LRAW\LRAW_110\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     */
    private $musicalWorkContributorRole = [
        
    ];

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
     * Adds as musicalWorkContributorRole
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\MusicalWorkContributorRoleType $musicalWorkContributorRole
     */
    public function addToMusicalWorkContributorRole(\DDEX\LRAW\LRAW_110\MusicalWorkContributorRoleType $musicalWorkContributorRole)
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
     * @return \DDEX\LRAW\LRAW_110\MusicalWorkContributorRoleType[]
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
     * @param \DDEX\LRAW\LRAW_110\MusicalWorkContributorRoleType[] $musicalWorkContributorRole
     * @return self
     */
    public function setMusicalWorkContributorRole(array $musicalWorkContributorRole = null)
    {
        $this->musicalWorkContributorRole = $musicalWorkContributorRole;
        return $this;
    }
}


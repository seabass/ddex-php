<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing WriterType
 *
 * A Composite containing details a MusicalWorkContributor.
 * XSD Type: Writer
 */
class WriterType
{
    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $writerPartyReference
     */
    private $writerPartyReference = null;

    /**
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\CreativeMusicalWorkContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * Gets as writerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getWriterPartyReference()
    {
        return $this->writerPartyReference;
    }

    /**
     * Sets a new writerPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $writerPartyReference
     * @return self
     */
    public function setWriterPartyReference($writerPartyReference)
    {
        $this->writerPartyReference = $writerPartyReference;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a role played by the Contributor in relation to the MusicalWork. Note: This can be used in a DdexMessage in relation to any Work, Performance or Fixation any of which may form the whole or part of the Resource itself. Example: if an 'AssociatedPerformer' is shown as a Contributor to a MusicalWork it refers to a performer of a Resource (e.g. a SoundRecording) expressing the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\CreativeMusicalWorkContributorRoleType $role
     */
    public function addToRole(\DDEX\MWN\MWN_US_LIC_100\CreativeMusicalWorkContributorRoleType $role)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\CreativeMusicalWorkContributorRoleType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\CreativeMusicalWorkContributorRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }
}


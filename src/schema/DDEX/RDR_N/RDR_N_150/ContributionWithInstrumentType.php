<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ContributionWithInstrumentType
 *
 * A Composite containing details of a contribution.
 * Explanatory Note: This Composite is named ContributionWithInstrument to disambiguate it from the basic Contribution Composite.
 * XSD Type: ContributionWithInstrument
 */
class ContributionWithInstrumentType
{
    /**
     * A Composite containing details of a Role played by the Contributor in the creation of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DDEX\RDR_N\RDR_N_150\ResourceContributorRoleType $role
     */
    private $role = null;

    /**
     * A Flag indicating whether the contribution (role) is the primary contribution (role) that a Party makes in the creation of the Resource (=true) or not (=false).
     *
     * @var bool $isPrimaryRole
     */
    private $isPrimaryRole = null;

    /**
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is a featured Artist (=true) or not (=false).
     *
     * @var bool $hasMadeFeaturedContribution
     */
    private $hasMadeFeaturedContribution = null;

    /**
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is an Artist that has a contract for its part in creating a Resource (=true) or not (=false).
     *
     * @var bool $hasMadeContractedContribution
     */
    private $hasMadeContractedContribution = null;

    /**
     * A Composite containing details of the Date of the Event in which the contribution to the creation of the Resource was made. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var \DDEX\RDR_N\RDR_N_150\EventDateType $event
     */
    private $event = null;

    /**
     * A Type of (musical) Instrument primarily played by the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\InstrumentTypeType $primaryInstrumentType
     */
    private $primaryInstrumentType = null;

    /**
     * A Type of (musical) Instrument played by the Artist.
     *
     * @var \DDEX\RDR_N\RDR_N_150\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * Gets as role
     *
     * A Composite containing details of a Role played by the Contributor in the creation of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DDEX\RDR_N\RDR_N_150\ResourceContributorRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a Role played by the Contributor in the creation of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DDEX\RDR_N\RDR_N_150\ResourceContributorRoleType $role
     * @return self
     */
    public function setRole(?\DDEX\RDR_N\RDR_N_150\ResourceContributorRoleType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as isPrimaryRole
     *
     * A Flag indicating whether the contribution (role) is the primary contribution (role) that a Party makes in the creation of the Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPrimaryRole()
    {
        return $this->isPrimaryRole;
    }

    /**
     * Sets a new isPrimaryRole
     *
     * A Flag indicating whether the contribution (role) is the primary contribution (role) that a Party makes in the creation of the Resource (=true) or not (=false).
     *
     * @param bool $isPrimaryRole
     * @return self
     */
    public function setIsPrimaryRole($isPrimaryRole)
    {
        $this->isPrimaryRole = $isPrimaryRole;
        return $this;
    }

    /**
     * Gets as hasMadeFeaturedContribution
     *
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is a featured Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMadeFeaturedContribution()
    {
        return $this->hasMadeFeaturedContribution;
    }

    /**
     * Sets a new hasMadeFeaturedContribution
     *
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is a featured Artist (=true) or not (=false).
     *
     * @param bool $hasMadeFeaturedContribution
     * @return self
     */
    public function setHasMadeFeaturedContribution($hasMadeFeaturedContribution)
    {
        $this->hasMadeFeaturedContribution = $hasMadeFeaturedContribution;
        return $this;
    }

    /**
     * Gets as hasMadeContractedContribution
     *
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is an Artist that has a contract for its part in creating a Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasMadeContractedContribution()
    {
        return $this->hasMadeContractedContribution;
    }

    /**
     * Sets a new hasMadeContractedContribution
     *
     * A Flag indicating whether the contribution in the creation of the Resource is made by a Party that is an Artist that has a contract for its part in creating a Resource (=true) or not (=false).
     *
     * @param bool $hasMadeContractedContribution
     * @return self
     */
    public function setHasMadeContractedContribution($hasMadeContractedContribution)
    {
        $this->hasMadeContractedContribution = $hasMadeContractedContribution;
        return $this;
    }

    /**
     * Gets as event
     *
     * A Composite containing details of the Date of the Event in which the contribution to the creation of the Resource was made. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return \DDEX\RDR_N\RDR_N_150\EventDateType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * A Composite containing details of the Date of the Event in which the contribution to the creation of the Resource was made. This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param \DDEX\RDR_N\RDR_N_150\EventDateType $event
     * @return self
     */
    public function setEvent(?\DDEX\RDR_N\RDR_N_150\EventDateType $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as primaryInstrumentType
     *
     * A Type of (musical) Instrument primarily played by the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\InstrumentTypeType
     */
    public function getPrimaryInstrumentType()
    {
        return $this->primaryInstrumentType;
    }

    /**
     * Sets a new primaryInstrumentType
     *
     * A Type of (musical) Instrument primarily played by the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\InstrumentTypeType $primaryInstrumentType
     * @return self
     */
    public function setPrimaryInstrumentType(?\DDEX\RDR_N\RDR_N_150\InstrumentTypeType $primaryInstrumentType = null)
    {
        $this->primaryInstrumentType = $primaryInstrumentType;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Type of (musical) Instrument played by the Artist.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\RDR_N\RDR_N_150\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of (musical) Instrument played by the Artist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentType($index)
    {
        return isset($this->instrumentType[$index]);
    }

    /**
     * unset instrumentType
     *
     * A Type of (musical) Instrument played by the Artist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentType($index)
    {
        unset($this->instrumentType[$index]);
    }

    /**
     * Gets as instrumentType
     *
     * A Type of (musical) Instrument played by the Artist.
     *
     * @return \DDEX\RDR_N\RDR_N_150\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of (musical) Instrument played by the Artist.
     *
     * @param \DDEX\RDR_N\RDR_N_150\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }
}


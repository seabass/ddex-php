<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing ProjectContributorReferenceType
 *
 * A Composite containing a ProjectContributorReference.
 * XSD Type: ProjectContributorReference
 */
class ProjectContributorReferenceType
{
    /**
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a Project. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $projectContributorReference
     */
    private $projectContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @var \DDEX\RIN\RIN_210\ResourceContributorRoleType $role
     */
    private $role = null;

    /**
     * A Role and instrumentation for which a Party is credited.
     *
     * @var \DDEX\RIN\RIN_210\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @var bool $hasMadeFeaturedContribution
     */
    private $hasMadeFeaturedContribution = null;

    /**
     * A Flag indicating whether the Contributor is an Artist that is meant to be credited for his or her Performance (=true) or not (=false).
     *
     * @var bool $isCreditedArtist
     */
    private $isCreditedArtist = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a Project. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a Project. This is represented in an XML schema as an XML Attribute.
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
     * Gets as projectContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getProjectContributorReference()
    {
        return $this->projectContributorReference;
    }

    /**
     * Sets a new projectContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $projectContributorReference
     * @return self
     */
    public function setProjectContributorReference($projectContributorReference)
    {
        $this->projectContributorReference = $projectContributorReference;
        return $this;
    }

    /**
     * Gets as role
     *
     * A Composite containing details of a role played by the Contributor.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @return \DDEX\RIN\RIN_210\ResourceContributorRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @param \DDEX\RIN\RIN_210\ResourceContributorRoleType $role
     * @return self
     */
    public function setRole(?\DDEX\RIN\RIN_210\ResourceContributorRoleType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DDEX\RIN\RIN_210\DisplayCreditsType $displayCredits)
    {
        $this->displayCredits[] = $displayCredits;
        return $this;
    }

    /**
     * isset displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayCredits($index)
    {
        return isset($this->displayCredits[$index]);
    }

    /**
     * unset displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayCredits($index)
    {
        unset($this->displayCredits[$index]);
    }

    /**
     * Gets as displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @return \DDEX\RIN\RIN_210\DisplayCreditsType[]
     */
    public function getDisplayCredits()
    {
        return $this->displayCredits;
    }

    /**
     * Sets a new displayCredits
     *
     * A Role and instrumentation for which a Party is credited.
     *
     * @param \DDEX\RIN\RIN_210\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits = null)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }

    /**
     * Gets as hasMadeFeaturedContribution
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
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
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
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
     * Gets as isCreditedArtist
     *
     * A Flag indicating whether the Contributor is an Artist that is meant to be credited for his or her Performance (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsCreditedArtist()
    {
        return $this->isCreditedArtist;
    }

    /**
     * Sets a new isCreditedArtist
     *
     * A Flag indicating whether the Contributor is an Artist that is meant to be credited for his or her Performance (=true) or not (=false).
     *
     * @param bool $isCreditedArtist
     * @return self
     */
    public function setIsCreditedArtist($isCreditedArtist)
    {
        $this->isCreditedArtist = $isCreditedArtist;
        return $this;
    }
}


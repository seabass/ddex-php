<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing ProjectContributorReferenceType
 *
 * A Composite containing a ProjectContributorReference.
 * XSD Type: ProjectContributorReference
 */
class ProjectContributorReferenceType
{
    /**
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $projectContributorReference
     */
    private $projectContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor.
     *
     * @var \DDEX\RIN\RIN10M\StudioRoleType $role
     */
    private $role = null;

    /**
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @var bool $isFeaturedArtist
     */
    private $isFeaturedArtist = null;

    /**
     * A Flag indicating whether the Contributor is an Artist that is meant to be credited for his or her Performance (=true) or not (=false).
     *
     * @var bool $isCreditedArtist
     */
    private $isCreditedArtist = null;

    /**
     * A Flag indicating whether the Contributor is an Artist whose contribution is meant to not be documented on public product descriptions (=true) or not (=false).
     *
     * @var bool $isPrivateArtist
     */
    private $isPrivateArtist = null;

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
     *
     * @return \DDEX\RIN\RIN10M\StudioRoleType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor.
     *
     * @param \DDEX\RIN\RIN10M\StudioRoleType $role
     * @return self
     */
    public function setRole(?\DDEX\RIN\RIN10M\StudioRoleType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as isFeaturedArtist
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsFeaturedArtist()
    {
        return $this->isFeaturedArtist;
    }

    /**
     * Sets a new isFeaturedArtist
     *
     * A Flag indicating whether the Contributor is a featured Artist (=true) or not (=false).
     *
     * @param bool $isFeaturedArtist
     * @return self
     */
    public function setIsFeaturedArtist($isFeaturedArtist)
    {
        $this->isFeaturedArtist = $isFeaturedArtist;
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

    /**
     * Gets as isPrivateArtist
     *
     * A Flag indicating whether the Contributor is an Artist whose contribution is meant to not be documented on public product descriptions (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPrivateArtist()
    {
        return $this->isPrivateArtist;
    }

    /**
     * Sets a new isPrivateArtist
     *
     * A Flag indicating whether the Contributor is an Artist whose contribution is meant to not be documented on public product descriptions (=true) or not (=false).
     *
     * @param bool $isPrivateArtist
     * @return self
     */
    public function setIsPrivateArtist($isPrivateArtist)
    {
        $this->isPrivateArtist = $isPrivateArtist;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing SessionContributorReferenceType
 *
 * A Composite containing a SessionContributorReference.
 * XSD Type: SessionContributorReference
 */
class SessionContributorReferenceType
{
    /**
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $sessionContributorReference
     */
    private $sessionContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor during the Session.
     *
     * @var \DDEX\RIN\RIN10M\StudioRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Description of an Instrument played by the Contributor during the Session.
     *
     * @var \DDEX\RIN\RIN10M\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

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
     * Gets as sessionContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getSessionContributorReference()
    {
        return $this->sessionContributorReference;
    }

    /**
     * Sets a new sessionContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $sessionContributorReference
     * @return self
     */
    public function setSessionContributorReference($sessionContributorReference)
    {
        $this->sessionContributorReference = $sessionContributorReference;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a role played by the Contributor during the Session.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\StudioRoleType $role
     */
    public function addToRole(\DDEX\RIN\RIN10M\StudioRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a role played by the Contributor during the Session.
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
     * A Composite containing details of a role played by the Contributor during the Session.
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
     * A Composite containing details of a role played by the Contributor during the Session.
     *
     * @return \DDEX\RIN\RIN10M\StudioRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor during the Session.
     *
     * @param \DDEX\RIN\RIN10M\StudioRoleType[] $role
     * @return self
     */
    public function setRole(array $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as instrumentType
     *
     * A Description of an Instrument played by the Contributor during the Session.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\RIN\RIN10M\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Description of an Instrument played by the Contributor during the Session.
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
     * A Description of an Instrument played by the Contributor during the Session.
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
     * A Description of an Instrument played by the Contributor during the Session.
     *
     * @return \DDEX\RIN\RIN10M\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Description of an Instrument played by the Contributor during the Session.
     *
     * @param \DDEX\RIN\RIN10M\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
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


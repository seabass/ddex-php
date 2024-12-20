<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing SessionContributorReferenceType
 *
 * A Composite containing a SessionContributorReference.
 * XSD Type: SessionContributorReference
 */
class SessionContributorReferenceType
{
    /**
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a SoundRecording. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $sessionContributorReference
     */
    private $sessionContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor during the Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @var \DDEX\RIN\RIN_210\ResourceContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
     *
     * @var \DDEX\RIN\RIN_210\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @var \DDEX\RIN\RIN_210\EquipmentReferenceType[] $contributorEquipmentReference
     */
    private $contributorEquipmentReference = [
        
    ];

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
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $hasMadeContractedContribution
     */
    private $hasMadeContractedContribution = null;

    /**
     * A Flag indicating whether the Contributor is an Artist that is meant to be credited for his or her Performance (=true) or not (=false).
     *
     * @var bool $isCreditedArtist
     */
    private $isCreditedArtist = null;

    /**
     * Percentage of the MusicalWork that is being recorded in the Resource described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a SoundRecording. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Contributor in a group of Contributors that have contributed to a SoundRecording. This is represented in an XML schema as an XML Attribute.
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\ResourceContributorRoleType $role
     */
    public function addToRole(\DDEX\RIN\RIN_210\ResourceContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a role played by the Contributor during the Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @return \DDEX\RIN\RIN_210\ResourceContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor during the Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/one-artist-with-two-roles
     *
     * @param \DDEX\RIN\RIN_210\ResourceContributorRoleType[] $role
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
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\RIN\RIN_210\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
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
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
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
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
     *
     * @return \DDEX\RIN\RIN_210\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
     *
     * @param \DDEX\RIN\RIN_210\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Adds as contributorEquipmentReference
     *
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\EquipmentReferenceType $contributorEquipmentReference
     */
    public function addToContributorEquipmentReference(\DDEX\RIN\RIN_210\EquipmentReferenceType $contributorEquipmentReference)
    {
        $this->contributorEquipmentReference[] = $contributorEquipmentReference;
        return $this;
    }

    /**
     * isset contributorEquipmentReference
     *
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributorEquipmentReference($index)
    {
        return isset($this->contributorEquipmentReference[$index]);
    }

    /**
     * unset contributorEquipmentReference
     *
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributorEquipmentReference($index)
    {
        unset($this->contributorEquipmentReference[$index]);
    }

    /**
     * Gets as contributorEquipmentReference
     *
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @return \DDEX\RIN\RIN_210\EquipmentReferenceType[]
     */
    public function getContributorEquipmentReference()
    {
        return $this->contributorEquipmentReference;
    }

    /**
     * Sets a new contributorEquipmentReference
     *
     * A Reference for Equipment used by the Contributor (specific to this Message). This is predominantly for musical Instruments. This is a LocalEquipmentAnchorReference starting with the letter I.
     *
     * @param \DDEX\RIN\RIN_210\EquipmentReferenceType[] $contributorEquipmentReference
     * @return self
     */
    public function setContributorEquipmentReference(array $contributorEquipmentReference = null)
    {
        $this->contributorEquipmentReference = $contributorEquipmentReference;
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
     * Gets as hasMadeContractedContribution
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
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
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
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
     * Gets as rightSharePercentage
     *
     * Percentage of the MusicalWork that is being recorded in the Resource described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
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
     * Percentage of the MusicalWork that is being recorded in the Resource described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
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


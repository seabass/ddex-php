<?php

namespace DDEX\ERN\ERN_432;

/**
 * Class representing ContributorType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a Contributor to a Resource.
 * XSD Type: Contributor
 */
class ContributorType
{
    /**
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $contributorPartyReference
     */
    private $contributorPartyReference = null;

    /**
     * A special Type of Contributor.
     *
     * @var \DDEX\ERN\ERN_432\SpecialContributorTypeType $specialContributor
     */
    private $specialContributor = null;

    /**
     * A Composite containing details of a Role played by the Contributor.
     *
     * @var \DDEX\ERN\ERN_432\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
     *
     * @var \DDEX\ERN\ERN_432\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Type indicating the contribution of GenerativeAI. This element defaults to All if SpecialContributor is GenerativeAI. In all other cases, the contribution of GenerativeAI can be None or Partly.
     *
     * @var string $aiContribution
     */
    private $aiContribution = null;

    /**
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
     *
     * @var bool $hasMadeFeaturedContribution
     */
    private $hasMadeFeaturedContribution = null;

    /**
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $hasMadeContractedContribution
     */
    private $hasMadeContractedContribution = null;

    /**
     * A Flag indicating whether the Contributor is credited as having played a role in creating the Recording (=true) or not (=false).
     *
     * @var \DDEX\ERN\ERN_432\IsCreditedType $isCredited
     */
    private $isCredited = null;

    /**
     * A Role for which the Party is credited.
     *
     * @var \DDEX\ERN\ERN_432\DisplayCreditsType[] $displayCredits
     */
    private $displayCredits = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the ResourceContributor in a group of ResourceContributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Gets as contributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getContributorPartyReference()
    {
        return $this->contributorPartyReference;
    }

    /**
     * Sets a new contributorPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $contributorPartyReference
     * @return self
     */
    public function setContributorPartyReference($contributorPartyReference)
    {
        $this->contributorPartyReference = $contributorPartyReference;
        return $this;
    }

    /**
     * Gets as specialContributor
     *
     * A special Type of Contributor.
     *
     * @return \DDEX\ERN\ERN_432\SpecialContributorTypeType
     */
    public function getSpecialContributor()
    {
        return $this->specialContributor;
    }

    /**
     * Sets a new specialContributor
     *
     * A special Type of Contributor.
     *
     * @param \DDEX\ERN\ERN_432\SpecialContributorTypeType $specialContributor
     * @return self
     */
    public function setSpecialContributor(?\DDEX\ERN\ERN_432\SpecialContributorTypeType $specialContributor = null)
    {
        $this->specialContributor = $specialContributor;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return self
     * @param \DDEX\ERN\ERN_432\ContributorRoleType $role
     */
    public function addToRole(\DDEX\ERN\ERN_432\ContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a Role played by the Contributor.
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
     * A Composite containing details of a Role played by the Contributor.
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
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return \DDEX\ERN\ERN_432\ContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @param \DDEX\ERN\ERN_432\ContributorRoleType[] $role
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
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
     *
     * @return self
     * @param \DDEX\ERN\ERN_432\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\ERN\ERN_432\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
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
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
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
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
     *
     * @return \DDEX\ERN\ERN_432\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical Instrument played by the Contributor whose Role is a Performer role such as Musician or Soloist. This element is deprecated and the Role element should be used instead to specify an Instrument. DDEX advises that this element may be removed at a future date and therefore recommends against using it.
     *
     * @param \DDEX\ERN\ERN_432\InstrumentTypeType[] $instrumentType
     * @return self
     */
    public function setInstrumentType(array $instrumentType = null)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as aiContribution
     *
     * A Type indicating the contribution of GenerativeAI. This element defaults to All if SpecialContributor is GenerativeAI. In all other cases, the contribution of GenerativeAI can be None or Partly.
     *
     * @return string
     */
    public function getAiContribution()
    {
        return $this->aiContribution;
    }

    /**
     * Sets a new aiContribution
     *
     * A Type indicating the contribution of GenerativeAI. This element defaults to All if SpecialContributor is GenerativeAI. In all other cases, the contribution of GenerativeAI can be None or Partly.
     *
     * @param string $aiContribution
     * @return self
     */
    public function setAiContribution($aiContribution)
    {
        $this->aiContribution = $aiContribution;
        return $this;
    }

    /**
     * Gets as hasMadeFeaturedContribution
     *
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
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
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
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
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
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
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
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
     * Gets as isCredited
     *
     * A Flag indicating whether the Contributor is credited as having played a role in creating the Recording (=true) or not (=false).
     *
     * @return \DDEX\ERN\ERN_432\IsCreditedType
     */
    public function getIsCredited()
    {
        return $this->isCredited;
    }

    /**
     * Sets a new isCredited
     *
     * A Flag indicating whether the Contributor is credited as having played a role in creating the Recording (=true) or not (=false).
     *
     * @param \DDEX\ERN\ERN_432\IsCreditedType $isCredited
     * @return self
     */
    public function setIsCredited(?\DDEX\ERN\ERN_432\IsCreditedType $isCredited = null)
    {
        $this->isCredited = $isCredited;
        return $this;
    }

    /**
     * Adds as displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @return self
     * @param \DDEX\ERN\ERN_432\DisplayCreditsType $displayCredits
     */
    public function addToDisplayCredits(\DDEX\ERN\ERN_432\DisplayCreditsType $displayCredits)
    {
        $this->displayCredits[] = $displayCredits;
        return $this;
    }

    /**
     * isset displayCredits
     *
     * A Role for which the Party is credited.
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
     * A Role for which the Party is credited.
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
     * A Role for which the Party is credited.
     *
     * @return \DDEX\ERN\ERN_432\DisplayCreditsType[]
     */
    public function getDisplayCredits()
    {
        return $this->displayCredits;
    }

    /**
     * Sets a new displayCredits
     *
     * A Role for which the Party is credited.
     *
     * @param \DDEX\ERN\ERN_432\DisplayCreditsType[] $displayCredits
     * @return self
     */
    public function setDisplayCredits(array $displayCredits = null)
    {
        $this->displayCredits = $displayCredits;
        return $this;
    }
}


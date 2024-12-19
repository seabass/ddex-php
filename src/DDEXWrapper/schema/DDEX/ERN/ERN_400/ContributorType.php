<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing ContributorType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a Contributor to a Resource.
 * XSD Type: Contributor
 */
class ContributorType
{
    /**
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of a Role played by the Contributor.
     *
     * @var \DDEX\ERN\ERN_400\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Type of musical Instrument played by the Contributor.
     *
     * @var \DDEX\ERN\ERN_400\InstrumentTypeType[] $instrumentType
     */
    private $instrumentType = [
        
    ];

    /**
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
     *
     * @var bool $isFeaturedArtist
     */
    private $isFeaturedArtist = null;

    /**
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $isContractedArtist
     */
    private $isContractedArtist = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Resource Contributor in a group of Resource Contributors that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Adds as role
     *
     * A Composite containing details of a Role played by the Contributor.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ContributorRoleType $role
     */
    public function addToRole(\DDEX\ERN\ERN_400\ContributorRoleType $role)
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
     * @return \DDEX\ERN\ERN_400\ContributorRoleType[]
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
     * @param \DDEX\ERN\ERN_400\ContributorRoleType[] $role
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
     * A Type of musical Instrument played by the Contributor.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\InstrumentTypeType $instrumentType
     */
    public function addToInstrumentType(\DDEX\ERN\ERN_400\InstrumentTypeType $instrumentType)
    {
        $this->instrumentType[] = $instrumentType;
        return $this;
    }

    /**
     * isset instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
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
     * A Type of musical Instrument played by the Contributor.
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
     * A Type of musical Instrument played by the Contributor.
     *
     * @return \DDEX\ERN\ERN_400\InstrumentTypeType[]
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * A Type of musical Instrument played by the Contributor.
     *
     * @param \DDEX\ERN\ERN_400\InstrumentTypeType[] $instrumentType
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
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
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
     * A Flag indicating whether the Party is a featured Artist (=true) or not (=false).
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
     * Gets as isContractedArtist
     *
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsContractedArtist()
    {
        return $this->isContractedArtist;
    }

    /**
     * Sets a new isContractedArtist
     *
     * A Flag indicating whether the Party is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @param bool $isContractedArtist
     * @return self
     */
    public function setIsContractedArtist($isContractedArtist)
    {
        $this->isContractedArtist = $isContractedArtist;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing RecordingComponentContributorReferenceType
 *
 * A Composite containing a RecordingComponentContributorReference.
 * XSD Type: RecordingComponentContributorReference
 */
class RecordingComponentContributorReferenceType
{
    /**
     * The number indicating the order of the Contributor in a group of Contributors. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $recordingComponentContributorReference
     */
    private $recordingComponentContributorReference = null;

    /**
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
     *
     * @var \DDEX\RIN\RIN10M\ContributorRoleType[] $role
     */
    private $role = [
        
    ];

    /**
     * A Composite containing details of an Instrument played by the Contributor in relation to the Resource.
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
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @var bool $isContractedArtist
     */
    private $isContractedArtist = null;

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
     * Percentage of the MusicalWork that is being recorded in the Resource described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Contributor in a group of Contributors. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Contributor in a group of Contributors. This is represented in an XML schema as an XML Attribute.
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
     * Gets as recordingComponentContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getRecordingComponentContributorReference()
    {
        return $this->recordingComponentContributorReference;
    }

    /**
     * Sets a new recordingComponentContributorReference
     *
     * A Reference for a Contributor (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $recordingComponentContributorReference
     * @return self
     */
    public function setRecordingComponentContributorReference($recordingComponentContributorReference)
    {
        $this->recordingComponentContributorReference = $recordingComponentContributorReference;
        return $this;
    }

    /**
     * Adds as role
     *
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\ContributorRoleType $role
     */
    public function addToRole(\DDEX\RIN\RIN10M\ContributorRoleType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
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
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
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
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
     *
     * @return \DDEX\RIN\RIN10M\ContributorRoleType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A Composite containing details of a role played by the Contributor in relation to the Resource.
     *
     * @param \DDEX\RIN\RIN10M\ContributorRoleType[] $role
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
     * @return \DDEX\RIN\RIN10M\InstrumentTypeType[]
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
     * Gets as isContractedArtist
     *
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
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
     * A Flag indicating whether the Contributor is an Artist that has a contract for its part in creating the Resource (=true) or not (=false).
     *
     * @param bool $isContractedArtist
     * @return self
     */
    public function setIsContractedArtist($isContractedArtist)
    {
        $this->isContractedArtist = $isContractedArtist;
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

    /**
     * Gets as rightSharePercentage
     *
     * Percentage of the MusicalWork that is being recorded in the Resource described by the parent composite that is owned by the Contributor. A quarter share is represented by '25' (and not 0.25).
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


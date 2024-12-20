<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * A Composite containing details of the PartyId for the Party.
     *
     * @var \DDEX\MWN\MWN_100\PartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Party within the Release which contains it. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DDEX\MWN\MWN_100\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a society affiliation for the Party.
     *
     * @var \DDEX\MWN\MWN_100\SocietyAffiliationType[] $societyAffiliation
     */
    private $societyAffiliation = [
        
    ];

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\PartyIdType $partyId
     */
    public function addToPartyId(\DDEX\MWN\MWN_100\PartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @return \DDEX\MWN\MWN_100\PartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @param \DDEX\MWN\MWN_100\PartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyReference
     *
     * The Identifier (specific to the Message) of the Party within the Release which contains it. This is a LocalPartyAnchor starting with the letter P.
     *
     * @return string
     */
    public function getPartyReference()
    {
        return $this->partyReference;
    }

    /**
     * Sets a new partyReference
     *
     * The Identifier (specific to the Message) of the Party within the Release which contains it. This is a LocalPartyAnchor starting with the letter P.
     *
     * @param string $partyReference
     * @return self
     */
    public function setPartyReference($partyReference)
    {
        $this->partyReference = $partyReference;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\MWN\MWN_100\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return \DDEX\MWN\MWN_100\PartyNameType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DDEX\MWN\MWN_100\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\SocietyAffiliationType $societyAffiliation
     */
    public function addToSocietyAffiliation(\DDEX\MWN\MWN_100\SocietyAffiliationType $societyAffiliation)
    {
        $this->societyAffiliation[] = $societyAffiliation;
        return $this;
    }

    /**
     * isset societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSocietyAffiliation($index)
    {
        return isset($this->societyAffiliation[$index]);
    }

    /**
     * unset societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSocietyAffiliation($index)
    {
        unset($this->societyAffiliation[$index]);
    }

    /**
     * Gets as societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @return \DDEX\MWN\MWN_100\SocietyAffiliationType[]
     */
    public function getSocietyAffiliation()
    {
        return $this->societyAffiliation;
    }

    /**
     * Sets a new societyAffiliation
     *
     * A Composite containing details of a society affiliation for the Party.
     *
     * @param \DDEX\MWN\MWN_100\SocietyAffiliationType[] $societyAffiliation
     * @return self
     */
    public function setSocietyAffiliation(array $societyAffiliation = null)
    {
        $this->societyAffiliation = $societyAffiliation;
        return $this;
    }
}


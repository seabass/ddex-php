<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing PartyType
 *
 * A Composite containing details of a Party.
 * XSD Type: Party
 */
class PartyType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PartyIdForNotificationType $partyId
     */
    private $partyId = null;

    /**
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
     *
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PartyNameForNotificationType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a society affiliation for the Party.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\SocietyAffiliationType[] $societyAffiliation
     */
    private $societyAffiliation = [
        
    ];

    /**
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @var bool $isOrganization
     */
    private $isOrganization = null;

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\PartyIdForNotificationType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\PartyIdForNotificationType $partyId
     * @return self
     */
    public function setPartyId(\DDEX\MWN\MWN_US_LIC_100\PartyIdForNotificationType $partyId)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyReference
     *
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
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
     * The Identifier (specific to the Message) of the Party. This is a LocalPartyAnchor starting with the letter P.
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\PartyNameForNotificationType $partyName
     */
    public function addToPartyName(\DDEX\MWN\MWN_US_LIC_100\PartyNameForNotificationType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\PartyNameForNotificationType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\PartyNameForNotificationType[] $partyName
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
     * @param \DDEX\MWN\MWN_US_LIC_100\SocietyAffiliationType $societyAffiliation
     */
    public function addToSocietyAffiliation(\DDEX\MWN\MWN_US_LIC_100\SocietyAffiliationType $societyAffiliation)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\SocietyAffiliationType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\SocietyAffiliationType[] $societyAffiliation
     * @return self
     */
    public function setSocietyAffiliation(array $societyAffiliation = null)
    {
        $this->societyAffiliation = $societyAffiliation;
        return $this;
    }

    /**
     * Gets as isOrganization
     *
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @return bool
     */
    public function getIsOrganization()
    {
        return $this->isOrganization;
    }

    /**
     * Sets a new isOrganization
     *
     * A Flag indicating whether the Party is an Organization (=true) or a Person (=false).
     *
     * @param bool $isOrganization
     * @return self
     */
    public function setIsOrganization($isOrganization)
    {
        $this->isOrganization = $isOrganization;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ConflictingPartyType
 *
 * A Composite containing details of a Party involved in a Conflict. Parties are typically described through Names and/or Identifiers.
 * XSD Type: ConflictingParty
 */
class ConflictingPartyType
{
    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @var \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PostalAddressType $postalAddress
     */
    private $postalAddress = null;

    /**
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PhoneNumberType $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @var \DDEX\RDR_N\RDR_N_150\EmailAddressType $emailAddress
     */
    private $emailAddress = null;

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
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
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[]
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
     * @param \DDEX\RDR_N\RDR_N_150\ExtendedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType $partyName
     */
    public function addToPartyName(\DDEX\RDR_N\RDR_N_150\PartyNameType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @return \DDEX\RDR_N\RDR_N_150\PartyNameType[]
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
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
     *
     * @param \DDEX\RDR_N\RDR_N_150\PartyNameType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PostalAddressType
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * A Composite containing details of a PostalAddress of the Party.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PostalAddressType $postalAddress
     * @return self
     */
    public function setPostalAddress(?\DDEX\RDR_N\RDR_N_150\PostalAddressType $postalAddress = null)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PhoneNumberType
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * A Composite containing details of a PhoneNumber of the Party.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PhoneNumberType $phoneNumber
     * @return self
     */
    public function setPhoneNumber(?\DDEX\RDR_N\RDR_N_150\PhoneNumberType $phoneNumber = null)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Gets as emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @return \DDEX\RDR_N\RDR_N_150\EmailAddressType
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * A Composite containing details of an EmailAddress of the Party.
     *
     * @param \DDEX\RDR_N\RDR_N_150\EmailAddressType $emailAddress
     * @return self
     */
    public function setEmailAddress(?\DDEX\RDR_N\RDR_N_150\EmailAddressType $emailAddress = null)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
}


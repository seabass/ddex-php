<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing PartyDescriptorForEntryType
 *
 * A Composite containing details of a Party.
 * Explanatory Note: This Composite is named PartyDescriptorForEntry to disambiguate it from the basic PartyDescriptor Composite.
 * XSD Type: PartyDescriptorForEntry
 */
class PartyDescriptorForEntryType
{
    /**
     * A Composite containing details of a PartyId.
     *
     * @var \DDEX\PIE\PIE_100\DetailedPartyIdType $partyId
     */
    private $partyId = null;

    /**
     * The Name of the Party for which information is provided.
     *
     * @var string $partyName
     */
    private $partyName = null;

    /**
     * Gets as partyId
     *
     * A Composite containing details of a PartyId.
     *
     * @return \DDEX\PIE\PIE_100\DetailedPartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of a PartyId.
     *
     * @param \DDEX\PIE\PIE_100\DetailedPartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\PIE\PIE_100\DetailedPartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * The Name of the Party for which information is provided.
     *
     * @return string
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * The Name of the Party for which information is provided.
     *
     * @param string $partyName
     * @return self
     */
    public function setPartyName($partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }
}


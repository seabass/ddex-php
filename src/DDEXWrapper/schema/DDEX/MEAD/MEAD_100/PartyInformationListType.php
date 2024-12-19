<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing PartyInformationListType
 *
 * A Composite containing detailed information about one or more Parties.
 * XSD Type: PartyInformationList
 */
class PartyInformationListType
{
    /**
     * A Composite containing detailed information about a Party.
     *
     * @var \DDEX\MEAD\MEAD_100\PartyInformationType[] $partyInformation
     */
    private $partyInformation = [
        
    ];

    /**
     * Adds as partyInformation
     *
     * A Composite containing detailed information about a Party.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\PartyInformationType $partyInformation
     */
    public function addToPartyInformation(\DDEX\MEAD\MEAD_100\PartyInformationType $partyInformation)
    {
        $this->partyInformation[] = $partyInformation;
        return $this;
    }

    /**
     * isset partyInformation
     *
     * A Composite containing detailed information about a Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyInformation($index)
    {
        return isset($this->partyInformation[$index]);
    }

    /**
     * unset partyInformation
     *
     * A Composite containing detailed information about a Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyInformation($index)
    {
        unset($this->partyInformation[$index]);
    }

    /**
     * Gets as partyInformation
     *
     * A Composite containing detailed information about a Party.
     *
     * @return \DDEX\MEAD\MEAD_100\PartyInformationType[]
     */
    public function getPartyInformation()
    {
        return $this->partyInformation;
    }

    /**
     * Sets a new partyInformation
     *
     * A Composite containing detailed information about a Party.
     *
     * @param \DDEX\MEAD\MEAD_100\PartyInformationType[] $partyInformation
     * @return self
     */
    public function setPartyInformation(array $partyInformation)
    {
        $this->partyInformation = $partyInformation;
        return $this;
    }
}


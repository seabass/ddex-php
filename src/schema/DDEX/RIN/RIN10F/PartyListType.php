<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing PartyListType
 *
 * A Composite containing details of one or more Parties.
 * XSD Type: PartyList
 */
class PartyListType
{
    /**
     * A Composite containing details of a Party.
     *
     * @var \DDEX\RIN\RIN10F\PartyType[] $party
     */
    private $party = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\PartyType $party
     */
    public function addToParty(\DDEX\RIN\RIN10F\PartyType $party)
    {
        $this->party[] = $party;
        return $this;
    }

    /**
     * isset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParty($index)
    {
        return isset($this->party[$index]);
    }

    /**
     * unset party
     *
     * A Composite containing details of a Party.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParty($index)
    {
        unset($this->party[$index]);
    }

    /**
     * Gets as party
     *
     * A Composite containing details of a Party.
     *
     * @return \DDEX\RIN\RIN10F\PartyType[]
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * A Composite containing details of a Party.
     *
     * @param \DDEX\RIN\RIN10F\PartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_432;

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
     * @var \DDEX\ERN\ERN_432\PartyType[] $party
     */
    private $party = [
        
    ];

    /**
     * A Composite containing details of a Brand.
     *
     * @var \DDEX\ERN\ERN_432\BrandType[] $brand
     */
    private $brand = [
        
    ];

    /**
     * Adds as party
     *
     * A Composite containing details of a Party.
     *
     * @return self
     * @param \DDEX\ERN\ERN_432\PartyType $party
     */
    public function addToParty(\DDEX\ERN\ERN_432\PartyType $party)
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
     * @return \DDEX\ERN\ERN_432\PartyType[]
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
     * @param \DDEX\ERN\ERN_432\PartyType[] $party
     * @return self
     */
    public function setParty(array $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Adds as brand
     *
     * A Composite containing details of a Brand.
     *
     * @return self
     * @param \DDEX\ERN\ERN_432\BrandType $brand
     */
    public function addToBrand(\DDEX\ERN\ERN_432\BrandType $brand)
    {
        $this->brand[] = $brand;
        return $this;
    }

    /**
     * isset brand
     *
     * A Composite containing details of a Brand.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBrand($index)
    {
        return isset($this->brand[$index]);
    }

    /**
     * unset brand
     *
     * A Composite containing details of a Brand.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBrand($index)
    {
        unset($this->brand[$index]);
    }

    /**
     * Gets as brand
     *
     * A Composite containing details of a Brand.
     *
     * @return \DDEX\ERN\ERN_432\BrandType[]
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * A Composite containing details of a Brand.
     *
     * @param \DDEX\ERN\ERN_432\BrandType[] $brand
     * @return self
     */
    public function setBrand(array $brand = null)
    {
        $this->brand = $brand;
        return $this;
    }
}


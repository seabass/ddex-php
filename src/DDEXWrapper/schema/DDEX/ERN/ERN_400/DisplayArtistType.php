<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing DisplayArtistType
 *
 * A Composite containing details of the Name, Identifier and Role(s) of a DisplayArtist of a Resource.
 * XSD Type: DisplayArtist
 */
class DisplayArtistType
{
    /**
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $artistPartyReference
     */
    private $artistPartyReference = null;

    /**
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @var \DDEX\ERN\ERN_400\DisplayArtistRoleType $displayArtistRole
     */
    private $displayArtistRole = null;

    /**
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @var \DDEX\ERN\ERN_400\ContributorRoleType[] $artisticRole
     */
    private $artisticRole = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the Resource DisplayArtist in a group of Artists that have contributed to a Resource. This is represented in an XML schema as an XML Attribute.
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
     * Gets as artistPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getArtistPartyReference()
    {
        return $this->artistPartyReference;
    }

    /**
     * Sets a new artistPartyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $artistPartyReference
     * @return self
     */
    public function setArtistPartyReference($artistPartyReference)
    {
        $this->artistPartyReference = $artistPartyReference;
        return $this;
    }

    /**
     * Gets as displayArtistRole
     *
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @return \DDEX\ERN\ERN_400\DisplayArtistRoleType
     */
    public function getDisplayArtistRole()
    {
        return $this->displayArtistRole;
    }

    /**
     * Sets a new displayArtistRole
     *
     * A Composite containing details of a Role played by the DisplayArtist.
     *
     * @param \DDEX\ERN\ERN_400\DisplayArtistRoleType $displayArtistRole
     * @return self
     */
    public function setDisplayArtistRole(?\DDEX\ERN\ERN_400\DisplayArtistRoleType $displayArtistRole = null)
    {
        $this->displayArtistRole = $displayArtistRole;
        return $this;
    }

    /**
     * Adds as artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\ContributorRoleType $artisticRole
     */
    public function addToArtisticRole(\DDEX\ERN\ERN_400\ContributorRoleType $artisticRole)
    {
        $this->artisticRole[] = $artisticRole;
        return $this;
    }

    /**
     * isset artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArtisticRole($index)
    {
        return isset($this->artisticRole[$index]);
    }

    /**
     * unset artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArtisticRole($index)
    {
        unset($this->artisticRole[$index]);
    }

    /**
     * Gets as artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return \DDEX\ERN\ERN_400\ContributorRoleType[]
     */
    public function getArtisticRole()
    {
        return $this->artisticRole;
    }

    /**
     * Sets a new artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @param \DDEX\ERN\ERN_400\ContributorRoleType[] $artisticRole
     * @return self
     */
    public function setArtisticRole(array $artisticRole = null)
    {
        $this->artisticRole = $artisticRole;
        return $this;
    }
}


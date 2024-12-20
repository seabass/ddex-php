<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing DisplayArtistType
 *
 * A Composite containing details of a DisplayArtist of a Resource.
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
     * @var string $partyReference
     */
    private $partyReference = null;

    /**
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @var \DDEX\RIN\RIN11F\TitleDisplayInformationType[] $titleDisplayInformation
     */
    private $titleDisplayInformation = [
        
    ];

    /**
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @var \DDEX\RIN\RIN11F\ContributorRoleType[] $artisticRole
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
     * Gets as partyReference
     *
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
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
     * A Reference for a Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
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
     * Adds as titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\TitleDisplayInformationType $titleDisplayInformation
     */
    public function addToTitleDisplayInformation(\DDEX\RIN\RIN11F\TitleDisplayInformationType $titleDisplayInformation)
    {
        $this->titleDisplayInformation[] = $titleDisplayInformation;
        return $this;
    }

    /**
     * isset titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitleDisplayInformation($index)
    {
        return isset($this->titleDisplayInformation[$index]);
    }

    /**
     * unset titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitleDisplayInformation($index)
    {
        unset($this->titleDisplayInformation[$index]);
    }

    /**
     * Gets as titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @return \DDEX\RIN\RIN11F\TitleDisplayInformationType[]
     */
    public function getTitleDisplayInformation()
    {
        return $this->titleDisplayInformation;
    }

    /**
     * Sets a new titleDisplayInformation
     *
     * A Composite containing information on how a RecordCompany wishes Artist information to be presented to Consumers as part of the Title (and in addition to displaying the DisplayArtist information).
     *
     * @param \DDEX\RIN\RIN11F\TitleDisplayInformationType[] $titleDisplayInformation
     * @return self
     */
    public function setTitleDisplayInformation(array $titleDisplayInformation = null)
    {
        $this->titleDisplayInformation = $titleDisplayInformation;
        return $this;
    }

    /**
     * Adds as artisticRole
     *
     * A Composite containing details of a ContributorRole played by the DisplayArtist.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ContributorRoleType $artisticRole
     */
    public function addToArtisticRole(\DDEX\RIN\RIN11F\ContributorRoleType $artisticRole)
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
     * @return \DDEX\RIN\RIN11F\ContributorRoleType[]
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
     * @param \DDEX\RIN\RIN11F\ContributorRoleType[] $artisticRole
     * @return self
     */
    public function setArtisticRole(array $artisticRole)
    {
        $this->artisticRole = $artisticRole;
        return $this;
    }
}


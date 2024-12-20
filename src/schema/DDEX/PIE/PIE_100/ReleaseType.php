<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing ReleaseType
 *
 * A Composite containing details of a DDEX Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The GRid identifying the Release for which information is provided.
     *
     * @var string $gRid
     */
    private $gRid = null;

    /**
     * The ICPN (bar code) of the Release for which information is provided.
     *
     * @var string $iCPN
     */
    private $iCPN = null;

    /**
     * A ProprietaryIdentifier of the Release for which information is provided.
     *
     * @var string $proprietaryReleaseId
     */
    private $proprietaryReleaseId = null;

    /**
     * The Title of the Release for which information is provided.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseTitleType[] $releaseTitle
     */
    private $releaseTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * Gets as gRid
     *
     * The GRid identifying the Release for which information is provided.
     *
     * @return string
     */
    public function getGRid()
    {
        return $this->gRid;
    }

    /**
     * Sets a new gRid
     *
     * The GRid identifying the Release for which information is provided.
     *
     * @param string $gRid
     * @return self
     */
    public function setGRid($gRid)
    {
        $this->gRid = $gRid;
        return $this;
    }

    /**
     * Gets as iCPN
     *
     * The ICPN (bar code) of the Release for which information is provided.
     *
     * @return string
     */
    public function getICPN()
    {
        return $this->iCPN;
    }

    /**
     * Sets a new iCPN
     *
     * The ICPN (bar code) of the Release for which information is provided.
     *
     * @param string $iCPN
     * @return self
     */
    public function setICPN($iCPN)
    {
        $this->iCPN = $iCPN;
        return $this;
    }

    /**
     * Gets as proprietaryReleaseId
     *
     * A ProprietaryIdentifier of the Release for which information is provided.
     *
     * @return string
     */
    public function getProprietaryReleaseId()
    {
        return $this->proprietaryReleaseId;
    }

    /**
     * Sets a new proprietaryReleaseId
     *
     * A ProprietaryIdentifier of the Release for which information is provided.
     *
     * @param string $proprietaryReleaseId
     * @return self
     */
    public function setProprietaryReleaseId($proprietaryReleaseId)
    {
        $this->proprietaryReleaseId = $proprietaryReleaseId;
        return $this;
    }

    /**
     * Adds as releaseTitle
     *
     * The Title of the Release for which information is provided.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ReleaseTitleType $releaseTitle
     */
    public function addToReleaseTitle(\DDEX\PIE\PIE_100\ReleaseTitleType $releaseTitle)
    {
        $this->releaseTitle[] = $releaseTitle;
        return $this;
    }

    /**
     * isset releaseTitle
     *
     * The Title of the Release for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseTitle($index)
    {
        return isset($this->releaseTitle[$index]);
    }

    /**
     * unset releaseTitle
     *
     * The Title of the Release for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseTitle($index)
    {
        unset($this->releaseTitle[$index]);
    }

    /**
     * Gets as releaseTitle
     *
     * The Title of the Release for which information is provided.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseTitleType[]
     */
    public function getReleaseTitle()
    {
        return $this->releaseTitle;
    }

    /**
     * Sets a new releaseTitle
     *
     * The Title of the Release for which information is provided.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseTitleType[] $releaseTitle
     * @return self
     */
    public function setReleaseTitle(array $releaseTitle)
    {
        $this->releaseTitle = $releaseTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param \DDEX\PIE\PIE_100\DisplayArtistNameWithPronunciationType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_101;

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
     * @var \DDEX\MEAD\MEAD_101\ReleaseTitleType[] $releaseTitle
     */
    private $releaseTitle = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_101\DisplayArtistType[] $displayArtist
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
     * @param \DDEX\MEAD\MEAD_101\ReleaseTitleType $releaseTitle
     */
    public function addToReleaseTitle(\DDEX\MEAD\MEAD_101\ReleaseTitleType $releaseTitle)
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
     * @return \DDEX\MEAD\MEAD_101\ReleaseTitleType[]
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
     * @param \DDEX\MEAD\MEAD_101\ReleaseTitleType[] $releaseTitle
     * @return self
     */
    public function setReleaseTitle(array $releaseTitle)
    {
        $this->releaseTitle = $releaseTitle;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist of the Release for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\MEAD\MEAD_101\DisplayArtistType $displayArtist)
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
     * @return \DDEX\MEAD\MEAD_101\DisplayArtistType[]
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
     * @param \DDEX\MEAD\MEAD_101\DisplayArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


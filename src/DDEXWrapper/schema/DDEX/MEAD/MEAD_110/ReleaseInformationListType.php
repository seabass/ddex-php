<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ReleaseInformationListType
 *
 * A Composite containing detailed information about one or more Releases.
 * XSD Type: ReleaseInformationList
 */
class ReleaseInformationListType
{
    /**
     * A Composite containing detailed information about a Release.
     *
     * @var \DDEX\MEAD\MEAD_110\ReleaseInformationType[] $releaseInformation
     */
    private $releaseInformation = [
        
    ];

    /**
     * Adds as releaseInformation
     *
     * A Composite containing detailed information about a Release.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ReleaseInformationType $releaseInformation
     */
    public function addToReleaseInformation(\DDEX\MEAD\MEAD_110\ReleaseInformationType $releaseInformation)
    {
        $this->releaseInformation[] = $releaseInformation;
        return $this;
    }

    /**
     * isset releaseInformation
     *
     * A Composite containing detailed information about a Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseInformation($index)
    {
        return isset($this->releaseInformation[$index]);
    }

    /**
     * unset releaseInformation
     *
     * A Composite containing detailed information about a Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseInformation($index)
    {
        unset($this->releaseInformation[$index]);
    }

    /**
     * Gets as releaseInformation
     *
     * A Composite containing detailed information about a Release.
     *
     * @return \DDEX\MEAD\MEAD_110\ReleaseInformationType[]
     */
    public function getReleaseInformation()
    {
        return $this->releaseInformation;
    }

    /**
     * Sets a new releaseInformation
     *
     * A Composite containing detailed information about a Release.
     *
     * @param \DDEX\MEAD\MEAD_110\ReleaseInformationType[] $releaseInformation
     * @return self
     */
    public function setReleaseInformation(array $releaseInformation)
    {
        $this->releaseInformation = $releaseInformation;
        return $this;
    }
}


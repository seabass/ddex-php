<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing ReleaseListType
 *
 * A Composite containing details of one or more Releases.
 * XSD Type: ReleaseList
 */
class ReleaseListType
{
    /**
     * A Composite containing details of a DDEX Release.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ReleaseType[] $release
     */
    private $release = [
        
    ];

    /**
     * Adds as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\ReleaseType $release
     */
    public function addToRelease(\DDEX\MWN\MWN_US_LIC_100\ReleaseType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelease($index)
    {
        return isset($this->release[$index]);
    }

    /**
     * unset release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelease($index)
    {
        unset($this->release[$index]);
    }

    /**
     * Gets as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ReleaseType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ReleaseType[] $release
     * @return self
     */
    public function setRelease(array $release)
    {
        $this->release = $release;
        return $this;
    }
}


<?php

namespace DDEX\ERN\ERN_400;

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
     * @var \DDEX\ERN\ERN_400\ReleaseType $release
     */
    private $release = null;

    /**
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @var \DDEX\ERN\ERN_400\TrackReleaseType[] $trackRelease
     */
    private $trackRelease = [
        
    ];

    /**
     * Gets as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return \DDEX\ERN\ERN_400\ReleaseType
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
     * @param \DDEX\ERN\ERN_400\ReleaseType $release
     * @return self
     */
    public function setRelease(?\DDEX\ERN\ERN_400\ReleaseType $release = null)
    {
        $this->release = $release;
        return $this;
    }

    /**
     * Adds as trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @return self
     * @param \DDEX\ERN\ERN_400\TrackReleaseType $trackRelease
     */
    public function addToTrackRelease(\DDEX\ERN\ERN_400\TrackReleaseType $trackRelease)
    {
        $this->trackRelease[] = $trackRelease;
        return $this;
    }

    /**
     * isset trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrackRelease($index)
    {
        return isset($this->trackRelease[$index]);
    }

    /**
     * unset trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrackRelease($index)
    {
        unset($this->trackRelease[$index]);
    }

    /**
     * Gets as trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @return \DDEX\ERN\ERN_400\TrackReleaseType[]
     */
    public function getTrackRelease()
    {
        return $this->trackRelease;
    }

    /**
     * Sets a new trackRelease
     *
     * A Composite containing details of a DDEX TrackRelease.
     *
     * @param \DDEX\ERN\ERN_400\TrackReleaseType[] $trackRelease
     * @return self
     */
    public function setTrackRelease(array $trackRelease = null)
    {
        $this->trackRelease = $trackRelease;
        return $this;
    }
}


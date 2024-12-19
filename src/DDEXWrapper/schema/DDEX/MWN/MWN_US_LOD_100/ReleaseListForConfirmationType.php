<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ReleaseListForConfirmationType
 *
 * A Composite containing details of one or more Releases.
 * Explanatory Note: This Composite is named ReleaseListForConfirmation to disambiguate it from the basic mc-us-lic:ReleaseList Composite. The name indicates that it is specific for the LoD Confirmation Message.
 * XSD Type: ReleaseListForConfirmation
 */
class ReleaseListForConfirmationType
{
    /**
     * A Composite containing details of a DDEX Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[] $release
     */
    private $release = [
        
    ];

    /**
     * Adds as release
     *
     * A Composite containing details of a DDEX Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType $release
     */
    public function addToRelease(\DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType $release)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\ReleaseForConfirmationType[] $release
     * @return self
     */
    public function setRelease(array $release)
    {
        $this->release = $release;
        return $this;
    }
}


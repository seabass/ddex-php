<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing ConfirmedReleaseType
 *
 * A Composite containing details of a DDEX Release that is confirmed to be included in a CatalogTransfer.
 * XSD Type: ConfirmedRelease
 */
class ConfirmedReleaseType
{
    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\CT\CT_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\CT\CT_100\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\CT\CT_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\CT\CT_100\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }
}


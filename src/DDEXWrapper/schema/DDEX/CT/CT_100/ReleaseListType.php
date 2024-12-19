<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing ReleaseListType
 *
 * A Composite containing details of one or more Releases.
 * XSD Type: ReleaseList
 */
class ReleaseListType
{
    /**
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
     *
     * @var \DDEX\CT\CT_100\ReleaseType[] $release
     */
    private $release = [
        
    ];

    /**
     * Adds as release
     *
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ReleaseType $release
     */
    public function addToRelease(\DDEX\CT\CT_100\ReleaseType $release)
    {
        $this->release[] = $release;
        return $this;
    }

    /**
     * isset release
     *
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
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
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
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
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
     *
     * @return \DDEX\CT\CT_100\ReleaseType[]
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * Sets a new release
     *
     * A Composite containing details of a DDEX Release contained in the CatalogTransfer. The scope of the Release is thus restricted to the territories and date specified for the CatalogTransfer.
     *
     * @param \DDEX\CT\CT_100\ReleaseType[] $release
     * @return self
     */
    public function setRelease(array $release)
    {
        $this->release = $release;
        return $this;
    }
}


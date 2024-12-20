<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing ReleaseResourceReferenceListType
 *
 * A Composite containing a list of ReleaseResourceReferences.
 * XSD Type: ReleaseResourceReferenceList
 */
class ReleaseResourceReferenceListType
{
    /**
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $releaseResourceReference
     */
    private $releaseResourceReference = [
        
    ];

    /**
     * Adds as releaseResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $releaseResourceReference
     */
    public function addToReleaseResourceReference($releaseResourceReference)
    {
        $this->releaseResourceReference[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseResourceReference($index)
    {
        return isset($this->releaseResourceReference[$index]);
    }

    /**
     * unset releaseResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseResourceReference($index)
    {
        unset($this->releaseResourceReference[$index]);
    }

    /**
     * Gets as releaseResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(array $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }
}


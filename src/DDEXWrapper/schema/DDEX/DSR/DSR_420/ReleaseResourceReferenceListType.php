<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing ReleaseResourceReferenceListType
 *
 * A Composite containing a list of ReleaseResourceReferences.
 * XSD Type: ReleaseResourceReferenceList
 */
class ReleaseResourceReferenceListType
{
    /**
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @var \DDEX\DSR\DSR_420\ReleaseResourceReferenceType[] $releaseResourceReference
     */
    private $releaseResourceReference = [
        
    ];

    /**
     * Adds as releaseResourceReference
     *
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ReleaseResourceReferenceType $releaseResourceReference
     */
    public function addToReleaseResourceReference(\DDEX\DSR\DSR_420\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReference[] = $releaseResourceReference;
        return $this;
    }

    /**
     * isset releaseResourceReference
     *
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
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
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
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
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return \DDEX\DSR\DSR_420\ReleaseResourceReferenceType[]
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A Composite containing a Reference for a Resource (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @param \DDEX\DSR\DSR_420\ReleaseResourceReferenceType[] $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(array $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }
}


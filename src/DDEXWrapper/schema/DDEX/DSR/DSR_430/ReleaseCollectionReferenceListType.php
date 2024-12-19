<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing ReleaseCollectionReferenceListType
 *
 * A Composite containing a list of ReleaseCollectionReferences.
 * XSD Type: ReleaseCollectionReferenceList
 */
class ReleaseCollectionReferenceListType
{
    /**
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[] $releaseCollectionReference
     */
    private $releaseCollectionReference = [
        
    ];

    /**
     * Adds as releaseCollectionReference
     *
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType $releaseCollectionReference
     */
    public function addToReleaseCollectionReference(\DDEX\DSR\DSR_430\ReleaseCollectionReferenceType $releaseCollectionReference)
    {
        $this->releaseCollectionReference[] = $releaseCollectionReference;
        return $this;
    }

    /**
     * isset releaseCollectionReference
     *
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseCollectionReference($index)
    {
        return isset($this->releaseCollectionReference[$index]);
    }

    /**
     * unset releaseCollectionReference
     *
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseCollectionReference($index)
    {
        unset($this->releaseCollectionReference[$index]);
    }

    /**
     * Gets as releaseCollectionReference
     *
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[]
     */
    public function getReleaseCollectionReference()
    {
        return $this->releaseCollectionReference;
    }

    /**
     * Sets a new releaseCollectionReference
     *
     * A Composite containing a Reference for a Collection (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter X.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseCollectionReferenceType[] $releaseCollectionReference
     * @return self
     */
    public function setReleaseCollectionReference(array $releaseCollectionReference)
    {
        $this->releaseCollectionReference = $releaseCollectionReference;
        return $this;
    }
}


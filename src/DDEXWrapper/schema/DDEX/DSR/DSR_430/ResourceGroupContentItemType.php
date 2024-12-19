<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing ResourceGroupContentItemType
 *
 * A Composite containing details of a Resource which is a ContentItem of a ResourceGroup.
 * XSD Type: ResourceGroupContentItem
 */
class ResourceGroupContentItemType
{
    /**
     * The number indicating the order of the ContentItem among all Resources within this ResourceGroup. This is analogous to the Track number on a SoundCarrier. Not all ResourceGroups necessarily have SequenceNumbers (it is most applicable to SoundRecordings and MusicalWorkVideos).
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of the Type of the ContentItem.
     *
     * @var \DDEX\DSR\DSR_430\ResourceTypeType[] $resourceType
     */
    private $resourceType = [
        
    ];

    /**
     * A Composite containing a ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @var \DDEX\DSR\DSR_430\ReleaseResourceReferenceType $releaseResourceReference
     */
    private $releaseResourceReference = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the ContentItem among all Resources within this ResourceGroup. This is analogous to the Track number on a SoundCarrier. Not all ResourceGroups necessarily have SequenceNumbers (it is most applicable to SoundRecordings and MusicalWorkVideos).
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the ContentItem among all Resources within this ResourceGroup. This is analogous to the Track number on a SoundCarrier. Not all ResourceGroups necessarily have SequenceNumbers (it is most applicable to SoundRecordings and MusicalWorkVideos).
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as resourceType
     *
     * A Composite containing details of the Type of the ContentItem.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\ResourceTypeType $resourceType
     */
    public function addToResourceType(\DDEX\DSR\DSR_430\ResourceTypeType $resourceType)
    {
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * isset resourceType
     *
     * A Composite containing details of the Type of the ContentItem.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceType($index)
    {
        return isset($this->resourceType[$index]);
    }

    /**
     * unset resourceType
     *
     * A Composite containing details of the Type of the ContentItem.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceType($index)
    {
        unset($this->resourceType[$index]);
    }

    /**
     * Gets as resourceType
     *
     * A Composite containing details of the Type of the ContentItem.
     *
     * @return \DDEX\DSR\DSR_430\ResourceTypeType[]
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A Composite containing details of the Type of the ContentItem.
     *
     * @param \DDEX\DSR\DSR_430\ResourceTypeType[] $resourceType
     * @return self
     */
    public function setResourceType(array $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Gets as releaseResourceReference
     *
     * A Composite containing a ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @return \DDEX\DSR\DSR_430\ReleaseResourceReferenceType
     */
    public function getReleaseResourceReference()
    {
        return $this->releaseResourceReference;
    }

    /**
     * Sets a new releaseResourceReference
     *
     * A Composite containing a ReleaseResourceReference for the ContentItem (specific to this Message). The LocalAnchorReference in this Composite is a xs:string starting with the letter A.
     *
     * @param \DDEX\DSR\DSR_430\ReleaseResourceReferenceType $releaseResourceReference
     * @return self
     */
    public function setReleaseResourceReference(\DDEX\DSR\DSR_430\ReleaseResourceReferenceType $releaseResourceReference)
    {
        $this->releaseResourceReference = $releaseResourceReference;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing ResourceRelationshipType
 *
 * A Composite containing details of a related Resource.
 * XSD Type: ResourceRelationship
 */
class ResourceRelationshipType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of ResourceIds for the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\ResourceIdType $resourceId
     */
    private $resourceId = null;

    /**
     * A Type of the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\RelatedResourceTypeType $relatedResourceType
     */
    private $relatedResourceType = null;

    /**
     * A Composite containing details of a Title of the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\TitleWithPronunciationType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the related Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\MEAD\MEAD_100\DisplayArtistNameWithDefaultType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return string[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of ResourceIds for the related Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\ResourceIdType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of ResourceIds for the related Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\ResourceIdType $resourceId
     * @return self
     */
    public function setResourceId(\DDEX\MEAD\MEAD_100\ResourceIdType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as relatedResourceType
     *
     * A Type of the related Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\RelatedResourceTypeType
     */
    public function getRelatedResourceType()
    {
        return $this->relatedResourceType;
    }

    /**
     * Sets a new relatedResourceType
     *
     * A Type of the related Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\RelatedResourceTypeType $relatedResourceType
     * @return self
     */
    public function setRelatedResourceType(\DDEX\MEAD\MEAD_100\RelatedResourceTypeType $relatedResourceType)
    {
        $this->relatedResourceType = $relatedResourceType;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the related Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TitleWithPronunciationType $title
     */
    public function addToTitle(\DDEX\MEAD\MEAD_100\TitleWithPronunciationType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the related Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the related Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the related Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\TitleWithPronunciationType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the related Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\TitleWithPronunciationType[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the related Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @return \DDEX\MEAD\MEAD_100\DisplayArtistNameWithDefaultType
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the related Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @param \DDEX\MEAD\MEAD_100\DisplayArtistNameWithDefaultType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DDEX\MEAD\MEAD_100\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }
}


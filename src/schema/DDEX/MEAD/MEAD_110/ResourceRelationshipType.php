<?php

namespace DDEX\MEAD\MEAD_110;

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
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of ResourceIds for the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\ResourceIdWithoutFlagType $resourceId
     */
    private $resourceId = null;

    /**
     * A Type of the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\RelatedResourceTypeType $relatedResourceType
     */
    private $relatedResourceType = null;

    /**
     * A Composite containing details of a Title of the related Resource.
     *
     * @var \DDEX\MEAD\MEAD_110\TitleWithPronunciationType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the related Resource to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     *
     * @var \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType $displayArtistName
     */
    private $displayArtistName = null;

    /**
     * A Composite containing details of a DisplayArtist.
     *
     * @var \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[]
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
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
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
     * @return \DDEX\MEAD\MEAD_110\ResourceIdWithoutFlagType
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
     * @param \DDEX\MEAD\MEAD_110\ResourceIdWithoutFlagType $resourceId
     * @return self
     */
    public function setResourceId(\DDEX\MEAD\MEAD_110\ResourceIdWithoutFlagType $resourceId)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as relatedResourceType
     *
     * A Type of the related Resource.
     *
     * @return \DDEX\MEAD\MEAD_110\RelatedResourceTypeType
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
     * @param \DDEX\MEAD\MEAD_110\RelatedResourceTypeType $relatedResourceType
     * @return self
     */
    public function setRelatedResourceType(\DDEX\MEAD\MEAD_110\RelatedResourceTypeType $relatedResourceType)
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
     * @param \DDEX\MEAD\MEAD_110\TitleWithPronunciationType $title
     */
    public function addToTitle(\DDEX\MEAD\MEAD_110\TitleWithPronunciationType $title)
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
     * @return \DDEX\MEAD\MEAD_110\TitleWithPronunciationType[]
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
     * @param \DDEX\MEAD\MEAD_110\TitleWithPronunciationType[] $title
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
     * @return \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType
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
     * @param \DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(\DDEX\MEAD\MEAD_110\DisplayArtistNameWithPronunciationType $displayArtistName)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @return \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist.
     *
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }
}


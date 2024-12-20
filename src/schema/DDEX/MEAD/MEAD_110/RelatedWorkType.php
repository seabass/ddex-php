<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing RelatedWorkType
 *
 * A Composite containing details of a related Work.
 * XSD Type: RelatedWork
 */
class RelatedWorkType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\MEAD\MEAD_110\MusicalWorkIdWithoutFlagType $workId
     */
    private $workId = null;

    /**
     * A Composite containing details of a Title of the Work.
     *
     * @var \DDEX\MEAD\MEAD_110\WorkTitleType[] $workTitle
     */
    private $workTitle = [
        
    ];

    /**
     * A Type of relationship between the two Works.
     *
     * @var \DDEX\MEAD\MEAD_110\WorkRelationshipTypeType $workRelationshipType
     */
    private $workRelationshipType = null;

    /**
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @var \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $writer
     */
    private $writer = [
        
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
     * Gets as workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\MEAD\MEAD_110\MusicalWorkIdWithoutFlagType
     */
    public function getWorkId()
    {
        return $this->workId;
    }

    /**
     * Sets a new workId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\MEAD\MEAD_110\MusicalWorkIdWithoutFlagType $workId
     * @return self
     */
    public function setWorkId(\DDEX\MEAD\MEAD_110\MusicalWorkIdWithoutFlagType $workId)
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * Adds as workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\WorkTitleType $workTitle
     */
    public function addToWorkTitle(\DDEX\MEAD\MEAD_110\WorkTitleType $workTitle)
    {
        $this->workTitle[] = $workTitle;
        return $this;
    }

    /**
     * isset workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkTitle($index)
    {
        return isset($this->workTitle[$index]);
    }

    /**
     * unset workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkTitle($index)
    {
        unset($this->workTitle[$index]);
    }

    /**
     * Gets as workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @return \DDEX\MEAD\MEAD_110\WorkTitleType[]
     */
    public function getWorkTitle()
    {
        return $this->workTitle;
    }

    /**
     * Sets a new workTitle
     *
     * A Composite containing details of a Title of the Work.
     *
     * @param \DDEX\MEAD\MEAD_110\WorkTitleType[] $workTitle
     * @return self
     */
    public function setWorkTitle(array $workTitle = null)
    {
        $this->workTitle = $workTitle;
        return $this;
    }

    /**
     * Gets as workRelationshipType
     *
     * A Type of relationship between the two Works.
     *
     * @return \DDEX\MEAD\MEAD_110\WorkRelationshipTypeType
     */
    public function getWorkRelationshipType()
    {
        return $this->workRelationshipType;
    }

    /**
     * Sets a new workRelationshipType
     *
     * A Type of relationship between the two Works.
     *
     * @param \DDEX\MEAD\MEAD_110\WorkRelationshipTypeType $workRelationshipType
     * @return self
     */
    public function setWorkRelationshipType(\DDEX\MEAD\MEAD_110\WorkRelationshipTypeType $workRelationshipType)
    {
        $this->workRelationshipType = $workRelationshipType;
        return $this;
    }

    /**
     * Adds as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $writer
     */
    public function addToWriter(\DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType $writer)
    {
        $this->writer[] = $writer;
        return $this;
    }

    /**
     * isset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWriter($index)
    {
        return isset($this->writer[$index]);
    }

    /**
     * unset writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWriter($index)
    {
        unset($this->writer[$index]);
    }

    /**
     * Gets as writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @return \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[]
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Sets a new writer
     *
     * A Composite containing details of a writer of the Work for which information is provided.
     *
     * @param \DDEX\MEAD\MEAD_110\PartyDescriptorWithPronunciationType[] $writer
     * @return self
     */
    public function setWriter(array $writer = null)
    {
        $this->writer = $writer;
        return $this;
    }
}


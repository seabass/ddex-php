<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing SimilarWorkType
 *
 * A Composite containing details of a similar Work.
 * XSD Type: SimilarWork
 */
class SimilarWorkType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the Work.
     *
     * @var \DDEX\MEAD\MEAD_100\WorkType $work
     */
    private $work = null;

    /**
     * A Composite containing a Description of the similarity.
     *
     * @var \DDEX\MEAD\MEAD_100\AnnotationType[] $description
     */
    private $description = [
        
    ];

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
     * Gets as work
     *
     * A Composite containing details of the Work.
     *
     * @return \DDEX\MEAD\MEAD_100\WorkType
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Sets a new work
     *
     * A Composite containing details of the Work.
     *
     * @param \DDEX\MEAD\MEAD_100\WorkType $work
     * @return self
     */
    public function setWork(\DDEX\MEAD\MEAD_100\WorkType $work)
    {
        $this->work = $work;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the similarity.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\AnnotationType $description
     */
    public function addToDescription(\DDEX\MEAD\MEAD_100\AnnotationType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the similarity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the similarity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the similarity.
     *
     * @return \DDEX\MEAD\MEAD_100\AnnotationType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the similarity.
     *
     * @param \DDEX\MEAD\MEAD_100\AnnotationType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing BiographyType
 *
 * A Composite containing details of a biography of a Party.
 * XSD Type: Biography
 */
class BiographyType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the biography text.
     *
     * @var \DDEX\PIE\PIE_100\BiographyTextType[] $text
     */
    private $text = [
        
    ];

    /**
     * A Composite containing details of an Author of the biography.
     *
     * @var \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $author
     */
    private $author = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
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
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
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
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Adds as text
     *
     * A Composite containing details of the biography text.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\BiographyTextType $text
     */
    public function addToText(\DDEX\PIE\PIE_100\BiographyTextType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * A Composite containing details of the biography text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * A Composite containing details of the biography text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * A Composite containing details of the biography text.
     *
     * @return \DDEX\PIE\PIE_100\BiographyTextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A Composite containing details of the biography text.
     *
     * @param \DDEX\PIE\PIE_100\BiographyTextType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as author
     *
     * A Composite containing details of an Author of the biography.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $author
     */
    public function addToAuthor(\DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * A Composite containing details of an Author of the biography.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * A Composite containing details of an Author of the biography.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * A Composite containing details of an Author of the biography.
     *
     * @return \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * A Composite containing details of an Author of the biography.
     *
     * @param \DDEX\PIE\PIE_100\PartyDescriptorWithPronunciationType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
    {
        $this->author = $author;
        return $this;
    }
}


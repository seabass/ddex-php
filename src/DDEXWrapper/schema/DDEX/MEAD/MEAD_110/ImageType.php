<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ImageType
 *
 * A Composite containing details of an Image.
 * XSD Type: Image
 */
class ImageType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a File containing the Image.
     *
     * @var \DDEX\MEAD\MEAD_110\FileType $file
     */
    private $file = null;

    /**
     * A Composite containing details of the Type of the Image.
     *
     * @var \DDEX\MEAD\MEAD_110\ImageTypeType[] $imageType
     */
    private $imageType = [
        
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
     * Gets as file
     *
     * A Composite containing details of a File containing the Image.
     *
     * @return \DDEX\MEAD\MEAD_110\FileType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File containing the Image.
     *
     * @param \DDEX\MEAD\MEAD_110\FileType $file
     * @return self
     */
    public function setFile(\DDEX\MEAD\MEAD_110\FileType $file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Adds as imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ImageTypeType $imageType
     */
    public function addToImageType(\DDEX\MEAD\MEAD_110\ImageTypeType $imageType)
    {
        $this->imageType[] = $imageType;
        return $this;
    }

    /**
     * isset imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageType($index)
    {
        return isset($this->imageType[$index]);
    }

    /**
     * unset imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageType($index)
    {
        unset($this->imageType[$index]);
    }

    /**
     * Gets as imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @return \DDEX\MEAD\MEAD_110\ImageTypeType[]
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Sets a new imageType
     *
     * A Composite containing details of the Type of the Image.
     *
     * @param \DDEX\MEAD\MEAD_110\ImageTypeType[] $imageType
     * @return self
     */
    public function setImageType(array $imageType = null)
    {
        $this->imageType = $imageType;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing GenderType
 *
 * A Composite containing details of a Gender.
 * XSD Type: Gender
 */
class GenderType
{
    /**
     * A Flag indicating whether gender information shall not be displayed (=true) or not (=false). Absence of this Flag means that the information may be displayed. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $doNotDisplay
     */
    private $doNotDisplay = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The value of the Gender, based on self-identification.
     *
     * @var \DDEX\PIE\PIE_100\GenderValueType $value
     */
    private $value = null;

    /**
     * Gets as doNotDisplay
     *
     * A Flag indicating whether gender information shall not be displayed (=true) or not (=false). Absence of this Flag means that the information may be displayed. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getDoNotDisplay()
    {
        return $this->doNotDisplay;
    }

    /**
     * Sets a new doNotDisplay
     *
     * A Flag indicating whether gender information shall not be displayed (=true) or not (=false). Absence of this Flag means that the information may be displayed. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $doNotDisplay
     * @return self
     */
    public function setDoNotDisplay($doNotDisplay)
    {
        $this->doNotDisplay = $doNotDisplay;
        return $this;
    }

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
     * Gets as value
     *
     * The value of the Gender, based on self-identification.
     *
     * @return \DDEX\PIE\PIE_100\GenderValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the Gender, based on self-identification.
     *
     * @param \DDEX\PIE\PIE_100\GenderValueType $value
     * @return self
     */
    public function setValue(\DDEX\PIE\PIE_100\GenderValueType $value)
    {
        $this->value = $value;
        return $this;
    }
}


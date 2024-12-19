<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing InstrumentUsedType
 *
 * A Composite containing details of an Instrument.
 * XSD Type: InstrumentUsed
 */
class InstrumentUsedType
{
    /**
     * The Flag indicating whether the Instrument is featured (=true). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isFeatured
     */
    private $isFeatured = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The value of the instrument.
     *
     * @var \DDEX\MEAD\MEAD_110\InstrumentValueType $value
     */
    private $value = null;

    /**
     * Gets as isFeatured
     *
     * The Flag indicating whether the Instrument is featured (=true). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsFeatured()
    {
        return $this->isFeatured;
    }

    /**
     * Sets a new isFeatured
     *
     * The Flag indicating whether the Instrument is featured (=true). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isFeatured
     * @return self
     */
    public function setIsFeatured($isFeatured)
    {
        $this->isFeatured = $isFeatured;
        return $this;
    }

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
     * Gets as value
     *
     * The value of the instrument.
     *
     * @return \DDEX\MEAD\MEAD_110\InstrumentValueType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value of the instrument.
     *
     * @param \DDEX\MEAD\MEAD_110\InstrumentValueType $value
     * @return self
     */
    public function setValue(\DDEX\MEAD\MEAD_110\InstrumentValueType $value)
    {
        $this->value = $value;
        return $this;
    }
}


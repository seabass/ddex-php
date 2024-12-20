<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing MetadataSourceListType
 *
 * A Composite containing details of one or more Parties that created the metadata.
 * XSD Type: MetadataSourceList
 */
class MetadataSourceListType
{
    /**
     * A Composite containing details of a metadata source.
     *
     * @var \DDEX\MEAD\MEAD_100\MetadataSourceType[] $metadataSource
     */
    private $metadataSource = [
        
    ];

    /**
     * Adds as metadataSource
     *
     * A Composite containing details of a metadata source.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\MetadataSourceType $metadataSource
     */
    public function addToMetadataSource(\DDEX\MEAD\MEAD_100\MetadataSourceType $metadataSource)
    {
        $this->metadataSource[] = $metadataSource;
        return $this;
    }

    /**
     * isset metadataSource
     *
     * A Composite containing details of a metadata source.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSource($index)
    {
        return isset($this->metadataSource[$index]);
    }

    /**
     * unset metadataSource
     *
     * A Composite containing details of a metadata source.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSource($index)
    {
        unset($this->metadataSource[$index]);
    }

    /**
     * Gets as metadataSource
     *
     * A Composite containing details of a metadata source.
     *
     * @return \DDEX\MEAD\MEAD_100\MetadataSourceType[]
     */
    public function getMetadataSource()
    {
        return $this->metadataSource;
    }

    /**
     * Sets a new metadataSource
     *
     * A Composite containing details of a metadata source.
     *
     * @param \DDEX\MEAD\MEAD_100\MetadataSourceType[] $metadataSource
     * @return self
     */
    public function setMetadataSource(array $metadataSource)
    {
        $this->metadataSource = $metadataSource;
        return $this;
    }
}


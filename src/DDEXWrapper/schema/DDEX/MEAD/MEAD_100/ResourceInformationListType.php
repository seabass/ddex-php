<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing ResourceInformationListType
 *
 * A Composite containing detailed information about one or more Resources.
 * XSD Type: ResourceInformationList
 */
class ResourceInformationListType
{
    /**
     * A Composite containing detailed information about a Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\ResourceInformationType[] $resourceInformation
     */
    private $resourceInformation = [
        
    ];

    /**
     * Adds as resourceInformation
     *
     * A Composite containing detailed information about a Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\ResourceInformationType $resourceInformation
     */
    public function addToResourceInformation(\DDEX\MEAD\MEAD_100\ResourceInformationType $resourceInformation)
    {
        $this->resourceInformation[] = $resourceInformation;
        return $this;
    }

    /**
     * isset resourceInformation
     *
     * A Composite containing detailed information about a Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceInformation($index)
    {
        return isset($this->resourceInformation[$index]);
    }

    /**
     * unset resourceInformation
     *
     * A Composite containing detailed information about a Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceInformation($index)
    {
        unset($this->resourceInformation[$index]);
    }

    /**
     * Gets as resourceInformation
     *
     * A Composite containing detailed information about a Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\ResourceInformationType[]
     */
    public function getResourceInformation()
    {
        return $this->resourceInformation;
    }

    /**
     * Sets a new resourceInformation
     *
     * A Composite containing detailed information about a Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\ResourceInformationType[] $resourceInformation
     * @return self
     */
    public function setResourceInformation(array $resourceInformation)
    {
        $this->resourceInformation = $resourceInformation;
        return $this;
    }
}


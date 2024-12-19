<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing LoDResourceListType
 *
 * A Composite containing a list of CatalogResourceReferences for Resources included in a CatalogTransfer.
 * XSD Type: LoDResourceList
 */
class LoDResourceListType
{
    /**
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $catalogResourceReference
     */
    private $catalogResourceReference = [
        
    ];

    /**
     * Adds as catalogResourceReference
     *
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $catalogResourceReference
     */
    public function addToCatalogResourceReference($catalogResourceReference)
    {
        $this->catalogResourceReference[] = $catalogResourceReference;
        return $this;
    }

    /**
     * isset catalogResourceReference
     *
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogResourceReference($index)
    {
        return isset($this->catalogResourceReference[$index]);
    }

    /**
     * unset catalogResourceReference
     *
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogResourceReference($index)
    {
        unset($this->catalogResourceReference[$index]);
    }

    /**
     * Gets as catalogResourceReference
     *
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getCatalogResourceReference()
    {
        return $this->catalogResourceReference;
    }

    /**
     * Sets a new catalogResourceReference
     *
     * A Reference for a Resource (specific to this Message) that is part of the catalog. This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $catalogResourceReference
     * @return self
     */
    public function setCatalogResourceReference(array $catalogResourceReference)
    {
        $this->catalogResourceReference = $catalogResourceReference;
        return $this;
    }
}


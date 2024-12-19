<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing CatalogNameType
 *
 * A Composite containing details of a CatalogName.
 * XSD Type: CatalogName
 */
class CatalogNameType
{
    /**
     * The Namespace of the CatalogName. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * The Name of the Catalog.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A textual Description of the Catalog.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CatalogType[] $subCatalog
     */
    private $subCatalog = [
        
    ];

    /**
     * Gets as namespace
     *
     * The Namespace of the CatalogName. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Sets a new namespace
     *
     * The Namespace of the CatalogName. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * Gets as name
     *
     * The Name of the Catalog.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The Name of the Catalog.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A textual Description of the Catalog.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A textual Description of the Catalog.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as subCatalog
     *
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogType $subCatalog
     */
    public function addToSubCatalog(\DDEX\MWN\MWN_US_LOD_100\CatalogType $subCatalog)
    {
        $this->subCatalog[] = $subCatalog;
        return $this;
    }

    /**
     * isset subCatalog
     *
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubCatalog($index)
    {
        return isset($this->subCatalog[$index]);
    }

    /**
     * unset subCatalog
     *
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubCatalog($index)
    {
        unset($this->subCatalog[$index]);
    }

    /**
     * Gets as subCatalog
     *
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CatalogType[]
     */
    public function getSubCatalog()
    {
        return $this->subCatalog;
    }

    /**
     * Sets a new subCatalog
     *
     * A Composite containing details of another Catalog that is part of this Catalog. It is not permissible to have more than nine SubCatalog levels.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CatalogType[] $subCatalog
     * @return self
     */
    public function setSubCatalog(array $subCatalog = null)
    {
        $this->subCatalog = $subCatalog;
        return $this;
    }
}


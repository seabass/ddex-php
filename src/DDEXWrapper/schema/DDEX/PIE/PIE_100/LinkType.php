<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing LinkType
 *
 * A Composite containing details of a link. The Atom link construct is defined in section 3.4 of the format spec.
 * XSD Type: Link
 */
class LinkType
{
    /**
     * The href. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @var string $href
     */
    private $href = null;

    /**
     * The rel. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $rel
     */
    private $rel = null;

    /**
     * The type. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The href lang. This is represented in an XML schema as an XML Attribute of type NMTOKEN.
     *
     * @var string $hreflang
     */
    private $hreflang = null;

    /**
     * The title. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The length. This is represented in an XML schema as an XML Attribute of type PositiveInteger.
     *
     * @var int $length
     */
    private $length = null;

    /**
     * Gets as href
     *
     * The href. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * The href. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as rel
     *
     * The rel. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * Sets a new rel
     *
     * The rel. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $rel
     * @return self
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as hreflang
     *
     * The href lang. This is represented in an XML schema as an XML Attribute of type NMTOKEN.
     *
     * @return string
     */
    public function getHreflang()
    {
        return $this->hreflang;
    }

    /**
     * Sets a new hreflang
     *
     * The href lang. This is represented in an XML schema as an XML Attribute of type NMTOKEN.
     *
     * @param string $hreflang
     * @return self
     */
    public function setHreflang($hreflang)
    {
        $this->hreflang = $hreflang;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The title. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as length
     *
     * The length. This is represented in an XML schema as an XML Attribute of type PositiveInteger.
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length. This is represented in an XML schema as an XML Attribute of type PositiveInteger.
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }
}


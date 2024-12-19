<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing ContentType
 *
 * A Composite containing details of a content. The Atom content construct is defined in section 4.1.3 of the format spec.
 * XSD Type: Content
 */
class ContentType
{
    /**
     * The type. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The source. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @var string $src
     */
    private $src = null;

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
     * Gets as src
     *
     * The source. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Sets a new src
     *
     * The source. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @param string $src
     * @return self
     */
    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }
}


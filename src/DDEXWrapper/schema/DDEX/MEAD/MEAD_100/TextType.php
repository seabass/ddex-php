<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing TextType
 *
 * A Composite containing details of a text. The Atom text construct is defined in section 3.1 of the format spec.
 * XSD Type: Text
 */
class TextType
{
    /**
     * The type. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $type
     */
    private $type = null;

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
}


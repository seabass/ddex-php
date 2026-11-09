<?php

namespace DDEX\ERN\ERN_C_WS_180;

/**
 * Class representing GeneratorType
 *
 * A Composite containing details of a generator. The Atom generator element is defined in section 4.2.4 of the format spec.
 * XSD Type: Generator
 */
class GeneratorType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The URI. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @var string $uri
     */
    private $uri = null;

    /**
     * The Identifier of the Version of the generator. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as uri
     *
     * The URI. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * The URI. This is represented in an XML schema as an XML Attribute of type AnyURI.
     *
     * @param string $uri
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the generator. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the generator. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ProprietaryIdType
 *
 * A Composite containing details of a ProprietaryIdentifier.
 * XSD Type: ProprietaryId
 */
class ProprietaryIdType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the ProprietaryIdentifier. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * The Flag indicating to the MessageRecipient whether this ProprietaryIdentifier is preferred (for a given Creation or Party) by the MessageSender (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isPreferred
     */
    private $isPreferred = null;

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
     * Gets as namespace
     *
     * The Namespace of the ProprietaryIdentifier. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the ProprietaryIdentifier. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isPreferred
     *
     * The Flag indicating to the MessageRecipient whether this ProprietaryIdentifier is preferred (for a given Creation or Party) by the MessageSender (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsPreferred()
    {
        return $this->isPreferred;
    }

    /**
     * Sets a new isPreferred
     *
     * The Flag indicating to the MessageRecipient whether this ProprietaryIdentifier is preferred (for a given Creation or Party) by the MessageSender (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isPreferred
     * @return self
     */
    public function setIsPreferred($isPreferred)
    {
        $this->isPreferred = $isPreferred;
        return $this;
    }
}


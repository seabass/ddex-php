<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing EmailAddressType
 *
 * A Composite containing details of an EmailAddress.
 * XSD Type: EmailAddress
 */
class EmailAddressType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The number indicating the order of the EmailAddress in a group of EmailAddresses. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

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
     * Gets as sequenceNumber
     *
     * The number indicating the order of the EmailAddress in a group of EmailAddresses. This is represented in an XML schema as an XML Attribute.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the EmailAddress in a group of EmailAddresses. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }
}


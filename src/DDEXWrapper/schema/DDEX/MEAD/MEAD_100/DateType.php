<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing DateType
 *
 * A Composite containing details of a Date.
 * XSD Type: Date
 */
class DateType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isApproximate
     */
    private $isApproximate = null;

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
     * Gets as isApproximate
     *
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsApproximate()
    {
        return $this->isApproximate;
    }

    /**
     * Sets a new isApproximate
     *
     * The Flag indicating whether the reported Date is approximate (=true) or exact (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isApproximate
     * @return self
     */
    public function setIsApproximate($isApproximate)
    {
        $this->isApproximate = $isApproximate;
        return $this;
    }
}


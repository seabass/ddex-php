<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing AsserterType
 *
 * A Composite containing details of an Asserter.
 * XSD Type: Asserter
 */
class AsserterType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The type of the Asserter.
     *
     * @var string $asserterType
     */
    private $asserterType = null;

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
     * Gets as asserterType
     *
     * The type of the Asserter.
     *
     * @return string
     */
    public function getAsserterType()
    {
        return $this->asserterType;
    }

    /**
     * Sets a new asserterType
     *
     * The type of the Asserter.
     *
     * @param string $asserterType
     * @return self
     */
    public function setAsserterType($asserterType)
    {
        $this->asserterType = $asserterType;
        return $this;
    }
}


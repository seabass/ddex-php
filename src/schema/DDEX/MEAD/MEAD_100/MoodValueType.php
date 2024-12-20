<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing MoodValueType
 *
 * A Composite containing details of a mood value.
 * XSD Type: MoodValue
 */
class MoodValueType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The Namespace of the element. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the element. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * A Flag indicating whether the mood value applies to the composition (=true) or not (=false).
     *
     * @var bool $appliesToComposition
     */
    private $appliesToComposition = null;

    /**
     * A Flag indicating whether the mood value applies to the lyrics (=true) or not (=false).
     *
     * @var bool $appliesToLyrics
     */
    private $appliesToLyrics = null;

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
     * The Namespace of the element. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the element. This is represented in an XML schema as an XML Attribute.
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
     * Gets as userDefinedValue
     *
     * A UserDefined value of the element. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A UserDefined value of the element. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue($userDefinedValue)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Gets as appliesToComposition
     *
     * A Flag indicating whether the mood value applies to the composition (=true) or not (=false).
     *
     * @return bool
     */
    public function getAppliesToComposition()
    {
        return $this->appliesToComposition;
    }

    /**
     * Sets a new appliesToComposition
     *
     * A Flag indicating whether the mood value applies to the composition (=true) or not (=false).
     *
     * @param bool $appliesToComposition
     * @return self
     */
    public function setAppliesToComposition($appliesToComposition)
    {
        $this->appliesToComposition = $appliesToComposition;
        return $this;
    }

    /**
     * Gets as appliesToLyrics
     *
     * A Flag indicating whether the mood value applies to the lyrics (=true) or not (=false).
     *
     * @return bool
     */
    public function getAppliesToLyrics()
    {
        return $this->appliesToLyrics;
    }

    /**
     * Sets a new appliesToLyrics
     *
     * A Flag indicating whether the mood value applies to the lyrics (=true) or not (=false).
     *
     * @param bool $appliesToLyrics
     * @return self
     */
    public function setAppliesToLyrics($appliesToLyrics)
    {
        $this->appliesToLyrics = $appliesToLyrics;
        return $this;
    }
}


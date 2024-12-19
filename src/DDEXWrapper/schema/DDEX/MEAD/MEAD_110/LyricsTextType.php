<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing LyricsTextType
 *
 * A Composite containing details of Lyrics.
 * XSD Type: LyricsText
 */
class LyricsTextType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The format of the Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $format
     */
    private $format = null;

    /**
     * The Namespace of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $formatNamespace
     */
    private $formatNamespace = null;

    /**
     * A UserDefined value of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $formatUserDefinedValue
     */
    private $formatUserDefinedValue = null;

    /**
     * The Flag indicating whether the Lyrics text is complete (=true) or not (=false).
     *
     * @var bool $isComplete
     */
    private $isComplete = null;

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
     * Gets as format
     *
     * The format of the Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * The format of the Lyrics. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as formatNamespace
     *
     * The Namespace of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getFormatNamespace()
    {
        return $this->formatNamespace;
    }

    /**
     * Sets a new formatNamespace
     *
     * The Namespace of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $formatNamespace
     * @return self
     */
    public function setFormatNamespace($formatNamespace)
    {
        $this->formatNamespace = $formatNamespace;
        return $this;
    }

    /**
     * Gets as formatUserDefinedValue
     *
     * A UserDefined value of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getFormatUserDefinedValue()
    {
        return $this->formatUserDefinedValue;
    }

    /**
     * Sets a new formatUserDefinedValue
     *
     * A UserDefined value of the Format. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $formatUserDefinedValue
     * @return self
     */
    public function setFormatUserDefinedValue($formatUserDefinedValue)
    {
        $this->formatUserDefinedValue = $formatUserDefinedValue;
        return $this;
    }

    /**
     * Gets as isComplete
     *
     * The Flag indicating whether the Lyrics text is complete (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }

    /**
     * Sets a new isComplete
     *
     * The Flag indicating whether the Lyrics text is complete (=true) or not (=false).
     *
     * @param bool $isComplete
     * @return self
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;
        return $this;
    }
}


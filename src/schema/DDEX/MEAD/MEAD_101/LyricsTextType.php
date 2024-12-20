<?php

namespace DDEX\MEAD\MEAD_101;

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
     * The Language and script of the Lyrics as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

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
     * Gets as languageAndScriptCode
     *
     * The Language and script of the Lyrics as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script of the Lyrics as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as applicableTerritoryCode
     *
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which this Element applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
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


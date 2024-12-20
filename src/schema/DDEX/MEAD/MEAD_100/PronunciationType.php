<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing PronunciationType
 *
 * A Composite containing details of a pronunciation of a Name.
 * XSD Type: Pronunciation
 */
class PronunciationType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A Flag indicating whether the pronunciation is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isCanonical
     */
    private $isCanonical = null;

    /**
     * The Language for which the pronunciation is valid, as defined in IETF RfC 5646. This is provided as lang[-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageCode
     */
    private $languageCode = null;

    /**
     * A Type of encoding system used for the pronunciation respelling. If this attribute is missing, then the International Phonetic Alphabet without opening or closing dashes or brackets is used.
     *
     * @var string $encodingType
     */
    private $encodingType = null;

    /**
     * The Namespace of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $encodingNamespace
     */
    private $encodingNamespace = null;

    /**
     * A UserDefined value of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $encodingUserDefinedValue
     */
    private $encodingUserDefinedValue = null;

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
     * Gets as isCanonical
     *
     * A Flag indicating whether the pronunciation is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsCanonical()
    {
        return $this->isCanonical;
    }

    /**
     * Sets a new isCanonical
     *
     * A Flag indicating whether the pronunciation is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isCanonical
     * @return self
     */
    public function setIsCanonical($isCanonical)
    {
        $this->isCanonical = $isCanonical;
        return $this;
    }

    /**
     * Gets as languageCode
     *
     * The Language for which the pronunciation is valid, as defined in IETF RfC 5646. This is provided as lang[-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * The Language for which the pronunciation is valid, as defined in IETF RfC 5646. This is provided as lang[-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Gets as encodingType
     *
     * A Type of encoding system used for the pronunciation respelling. If this attribute is missing, then the International Phonetic Alphabet without opening or closing dashes or brackets is used.
     *
     * @return string
     */
    public function getEncodingType()
    {
        return $this->encodingType;
    }

    /**
     * Sets a new encodingType
     *
     * A Type of encoding system used for the pronunciation respelling. If this attribute is missing, then the International Phonetic Alphabet without opening or closing dashes or brackets is used.
     *
     * @param string $encodingType
     * @return self
     */
    public function setEncodingType($encodingType)
    {
        $this->encodingType = $encodingType;
        return $this;
    }

    /**
     * Gets as encodingNamespace
     *
     * The Namespace of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getEncodingNamespace()
    {
        return $this->encodingNamespace;
    }

    /**
     * Sets a new encodingNamespace
     *
     * The Namespace of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $encodingNamespace
     * @return self
     */
    public function setEncodingNamespace($encodingNamespace)
    {
        $this->encodingNamespace = $encodingNamespace;
        return $this;
    }

    /**
     * Gets as encodingUserDefinedValue
     *
     * A UserDefined value of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getEncodingUserDefinedValue()
    {
        return $this->encodingUserDefinedValue;
    }

    /**
     * Sets a new encodingUserDefinedValue
     *
     * A UserDefined value of the EncodingType. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $encodingUserDefinedValue
     * @return self
     */
    public function setEncodingUserDefinedValue($encodingUserDefinedValue)
    {
        $this->encodingUserDefinedValue = $encodingUserDefinedValue;
        return $this;
    }
}


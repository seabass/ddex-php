<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing ElementListType
 *
 * A Composite containing details of one or more Elements.
 * XSD Type: ElementList
 */
class ElementListType
{
    /**
     * The Language and script for the Elements of the ElementList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Element.
     *
     * @var \DDEX\RIN\RIN11F\ElementType[] $element
     */
    private $element = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ElementList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ElementList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as element
     *
     * A Composite containing details of a Element.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ElementType $element
     */
    public function addToElement(\DDEX\RIN\RIN11F\ElementType $element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * isset element
     *
     * A Composite containing details of a Element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElement($index)
    {
        return isset($this->element[$index]);
    }

    /**
     * unset element
     *
     * A Composite containing details of a Element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElement($index)
    {
        unset($this->element[$index]);
    }

    /**
     * Gets as element
     *
     * A Composite containing details of a Element.
     *
     * @return \DDEX\RIN\RIN11F\ElementType[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * A Composite containing details of a Element.
     *
     * @param \DDEX\RIN\RIN11F\ElementType[] $element
     * @return self
     */
    public function setElement(array $element)
    {
        $this->element = $element;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_101;

/**
 * Class representing DisplaySubTitleType
 *
 * A Composite containing details of a SubTitle.
 * Explanatory Note: This Composite is named DisplaySubTitle to disambiguate it from the basic SubTitle Composite.
 * XSD Type: DisplaySubTitle
 */
class DisplaySubTitleType
{
    /**
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDisplayedInTitle
     */
    private $isDisplayedInTitle = null;

    /**
     * The Namespace of the SubTitleType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the SubTitleType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @var mixed $subTitleType
     */
    private $subTitleType = null;

    /**
     * The Title string.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The string describing the pronunciation.
     *
     * @var \DDEX\MEAD\MEAD_101\PronunciationType[] $pronunciation
     */
    private $pronunciation = [
        
    ];

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the SubTitle in a group of SubTitles. This is represented in an XML schema as an XML Attribute.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as isDisplayedInTitle
     *
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDisplayedInTitle()
    {
        return $this->isDisplayedInTitle;
    }

    /**
     * Sets a new isDisplayedInTitle
     *
     * A Flag indicating whether the SubTitle is displayed in the Title (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDisplayedInTitle
     * @return self
     */
    public function setIsDisplayedInTitle($isDisplayedInTitle)
    {
        $this->isDisplayedInTitle = $isDisplayedInTitle;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The Namespace of the SubTitleType. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the SubTitleType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the SubTitleType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the SubTitleType. This is represented in an XML schema as an XML Attribute.
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
     * Gets as subTitleType
     *
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @return mixed
     */
    public function getSubTitleType()
    {
        return $this->subTitleType;
    }

    /**
     * Sets a new subTitleType
     *
     * A Type of the SubTitle which defines its origin or the function it fulfils. This is represented in an XML schema as an XML Attribute.
     *
     * @param mixed $subTitleType
     * @return self
     */
    public function setSubTitleType($subTitleType)
    {
        $this->subTitleType = $subTitleType;
        return $this;
    }

    /**
     * Gets as title
     *
     * The Title string.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The Title string.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_101\PronunciationType $pronunciation
     */
    public function addToPronunciation(\DDEX\MEAD\MEAD_101\PronunciationType $pronunciation)
    {
        $this->pronunciation[] = $pronunciation;
        return $this;
    }

    /**
     * isset pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPronunciation($index)
    {
        return isset($this->pronunciation[$index]);
    }

    /**
     * unset pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPronunciation($index)
    {
        unset($this->pronunciation[$index]);
    }

    /**
     * Gets as pronunciation
     *
     * The string describing the pronunciation.
     *
     * @return \DDEX\MEAD\MEAD_101\PronunciationType[]
     */
    public function getPronunciation()
    {
        return $this->pronunciation;
    }

    /**
     * Sets a new pronunciation
     *
     * The string describing the pronunciation.
     *
     * @param \DDEX\MEAD\MEAD_101\PronunciationType[] $pronunciation
     * @return self
     */
    public function setPronunciation(array $pronunciation = null)
    {
        $this->pronunciation = $pronunciation;
        return $this;
    }
}


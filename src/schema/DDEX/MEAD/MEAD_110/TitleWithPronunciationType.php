<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing TitleWithPronunciationType
 *
 * A Composite containing details of a Title.
 * Explanatory Note: This Composite is named TitleWithPronunciation to disambiguate it from the basic Title Composite.
 * XSD Type: TitleWithPronunciation
 */
class TitleWithPronunciationType
{
    /**
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $titleType
     */
    private $titleType = null;

    /**
     * The Namespace of the TitleType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $namespace
     */
    private $namespace = null;

    /**
     * A UserDefined value of the TitleType. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $userDefinedValue
     */
    private $userDefinedValue = null;

    /**
     * The text of the Title.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var \DDEX\MEAD\MEAD_110\TitleTextType $titleText
     */
    private $titleText = null;

    /**
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @var \DDEX\MEAD\MEAD_110\TitleTextType $subTitle
     */
    private $subTitle = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as titleType
     *
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getTitleType()
    {
        return $this->titleType;
    }

    /**
     * Sets a new titleType
     *
     * A Type of the Title which defines its origin or the function it fulfils in relation to a Creation. Note: A Title may fulfil more than one role. Example: 'Help' may be both the OriginalTitle and the DisplayTitle for the well-known Beatles song. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $titleType
     * @return self
     */
    public function setTitleType($titleType)
    {
        $this->titleType = $titleType;
        return $this;
    }

    /**
     * Gets as namespace
     *
     * The Namespace of the TitleType. This is represented in an XML schema as an XML Attribute.
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
     * The Namespace of the TitleType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the TitleType. This is represented in an XML schema as an XML Attribute.
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
     * A UserDefined value of the TitleType. This is represented in an XML schema as an XML Attribute.
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
     * Gets as titleText
     *
     * The text of the Title.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return \DDEX\MEAD\MEAD_110\TitleTextType
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * The text of the Title.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @param \DDEX\MEAD\MEAD_110\TitleTextType $titleText
     * @return self
     */
    public function setTitleText(\DDEX\MEAD\MEAD_110\TitleTextType $titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Gets as subTitle
     *
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return \DDEX\MEAD\MEAD_110\TitleTextType
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param \DDEX\MEAD\MEAD_110\TitleTextType $subTitle
     * @return self
     */
    public function setSubTitle(?\DDEX\MEAD\MEAD_110\TitleTextType $subTitle = null)
    {
        $this->subTitle = $subTitle;
        return $this;
    }
}


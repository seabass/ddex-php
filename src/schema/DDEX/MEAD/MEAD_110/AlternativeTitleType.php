<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing AlternativeTitleType
 *
 * A Composite containing details of an AlternativeTitle.
 * XSD Type: AlternativeTitle
 */
class AlternativeTitleType
{
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
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

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
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @var string[] $languageAndScriptOfTitle
     */
    private $languageAndScriptOfTitle = [
        
    ];

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
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\MEAD\MEAD_110\MetadataSourceReferenceType $metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
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

    /**
     * Adds as languageAndScriptOfTitle
     *
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return self
     * @param string $languageAndScriptOfTitle
     */
    public function addToLanguageAndScriptOfTitle($languageAndScriptOfTitle)
    {
        $this->languageAndScriptOfTitle[] = $languageAndScriptOfTitle;
        return $this;
    }

    /**
     * isset languageAndScriptOfTitle
     *
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageAndScriptOfTitle($index)
    {
        return isset($this->languageAndScriptOfTitle[$index]);
    }

    /**
     * unset languageAndScriptOfTitle
     *
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageAndScriptOfTitle($index)
    {
        unset($this->languageAndScriptOfTitle[$index]);
    }

    /**
     * Gets as languageAndScriptOfTitle
     *
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @return string[]
     */
    public function getLanguageAndScriptOfTitle()
    {
        return $this->languageAndScriptOfTitle;
    }

    /**
     * Sets a new languageAndScriptOfTitle
     *
     * A Language and script of the Title as defined in IETF RfC 5646, provided as lang[-script][-region][-variant].
     *
     * @param string[] $languageAndScriptOfTitle
     * @return self
     */
    public function setLanguageAndScriptOfTitle(array $languageAndScriptOfTitle = null)
    {
        $this->languageAndScriptOfTitle = $languageAndScriptOfTitle;
        return $this;
    }
}


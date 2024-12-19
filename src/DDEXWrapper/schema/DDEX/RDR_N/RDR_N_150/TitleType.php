<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing TitleType
 *
 * A Composite containing details of a Title.
 * XSD Type: Title
 */
class TitleType
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
     * The text of the Title.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var string $titleText
     */
    private $titleText = null;

    /**
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SubTitleType[] $subTitle
     */
    private $subTitle = [
        
    ];

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
     * Gets as titleText
     *
     * The text of the Title.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @return string
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
     * @param string $titleText
     * @return self
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Adds as subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SubTitleType $subTitle
     */
    public function addToSubTitle(\DDEX\RDR_N\RDR_N_150\SubTitleType $subTitle)
    {
        $this->subTitle[] = $subTitle;
        return $this;
    }

    /**
     * isset subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTitle($index)
    {
        return isset($this->subTitle[$index]);
    }

    /**
     * unset subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTitle($index)
    {
        unset($this->subTitle[$index]);
    }

    /**
     * Gets as subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SubTitleType[]
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SubTitleType[] $subTitle
     * @return self
     */
    public function setSubTitle(array $subTitle = null)
    {
        $this->subTitle = $subTitle;
        return $this;
    }
}


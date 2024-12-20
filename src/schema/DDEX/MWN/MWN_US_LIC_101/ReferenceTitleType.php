<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing ReferenceTitleType
 *
 * A Composite containing details of a ReferenceTitle.
 * XSD Type: ReferenceTitle
 */
class ReferenceTitleType
{
    /**
     * The Language and script for the Elements of the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The text of the ReferenceTitle.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
     *
     * @var string $titleText
     */
    private $titleText = null;

    /**
     * A SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets (where the SubTitle is called Version Title).
     *
     * @var string $subTitle
     */
    private $subTitle = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ReferenceTitle as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as titleText
     *
     * The text of the ReferenceTitle.
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
     * The text of the ReferenceTitle.
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
     * Gets as subTitle
     *
     * A SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets (where the SubTitle is called Version Title).
     *
     * @return string
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A SubTitle of the ReferenceTitle, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets (where the SubTitle is called Version Title).
     *
     * @param string $subTitle
     * @return self
     */
    public function setSubTitle($subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }
}


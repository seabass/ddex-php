<?php

namespace DDEX\ddexC;

/**
 * Class representing ReferenceTitleType
 *
 * A ddex:Composite containing details of a ddex:ReferenceTitle.
 * XSD Type: ReferenceTitle
 */
class ReferenceTitleType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReferenceTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing the text of the ddexC:ReferenceTitle.
     *
     * @var \DDEX\ddexC\TitleTextType $titleText
     */
    private $titleText = null;

    /**
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:ReferenceTitle, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets (where the SubTitle is called ddex:Version ddex:Title).
     *
     * @var \DDEX\ddexC\SubTitleType $subTitle
     */
    private $subTitle = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReferenceTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:ReferenceTitle as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing the text of the ddexC:ReferenceTitle.
     *
     * @return \DDEX\ddexC\TitleTextType
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * A ddex:Composite containing the text of the ddexC:ReferenceTitle.
     *
     * @param \DDEX\ddexC\TitleTextType $titleText
     * @return self
     */
    public function setTitleText(\DDEX\ddexC\TitleTextType $titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Gets as subTitle
     *
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:ReferenceTitle, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets (where the SubTitle is called ddex:Version ddex:Title).
     *
     * @return \DDEX\ddexC\SubTitleType
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A ddex:Composite containing details of a ddex:SubTitle of the ddexC:ReferenceTitle, including ddex:Titles of ddex:Versions used to differentiate different versions of the same ddex:Title, as required by the ddex:GRid and ddex:ISRC ddex:ReferenceDescriptiveMetadataSets (where the SubTitle is called ddex:Version ddex:Title).
     *
     * @param \DDEX\ddexC\SubTitleType $subTitle
     * @return self
     */
    public function setSubTitle(?\DDEX\ddexC\SubTitleType $subTitle = null)
    {
        $this->subTitle = $subTitle;
        return $this;
    }
}


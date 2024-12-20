<?php

namespace DDEX\ddexC;

/**
 * Class representing GenreType
 *
 * A ddex:Composite containing details of a ddex:Genre.
 * XSD Type: Genre
 */
class GenreType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:Genre as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing a ddex:Description of a genre or style (such as Musical, literary or audio-visual) with which a ddex:Creation is associated.
     *
     * @var \DDEX\ddexC\DescriptionType $genreText
     */
    private $genreText = null;

    /**
     * A ddex:Composite containing a ddex:Description of a secondary genre or style with which a ddex:Creation is associated.
     *
     * @var \DDEX\ddexC\DescriptionType $subGenre
     */
    private $subGenre = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:Genre as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:Genre as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as genreText
     *
     * A ddex:Composite containing a ddex:Description of a genre or style (such as Musical, literary or audio-visual) with which a ddex:Creation is associated.
     *
     * @return \DDEX\ddexC\DescriptionType
     */
    public function getGenreText()
    {
        return $this->genreText;
    }

    /**
     * Sets a new genreText
     *
     * A ddex:Composite containing a ddex:Description of a genre or style (such as Musical, literary or audio-visual) with which a ddex:Creation is associated.
     *
     * @param \DDEX\ddexC\DescriptionType $genreText
     * @return self
     */
    public function setGenreText(\DDEX\ddexC\DescriptionType $genreText)
    {
        $this->genreText = $genreText;
        return $this;
    }

    /**
     * Gets as subGenre
     *
     * A ddex:Composite containing a ddex:Description of a secondary genre or style with which a ddex:Creation is associated.
     *
     * @return \DDEX\ddexC\DescriptionType
     */
    public function getSubGenre()
    {
        return $this->subGenre;
    }

    /**
     * Sets a new subGenre
     *
     * A ddex:Composite containing a ddex:Description of a secondary genre or style with which a ddex:Creation is associated.
     *
     * @param \DDEX\ddexC\DescriptionType $subGenre
     * @return self
     */
    public function setSubGenre(?\DDEX\ddexC\DescriptionType $subGenre = null)
    {
        $this->subGenre = $subGenre;
        return $this;
    }
}


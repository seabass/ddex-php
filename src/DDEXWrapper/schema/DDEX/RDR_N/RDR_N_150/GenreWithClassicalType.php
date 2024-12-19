<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing GenreWithClassicalType
 *
 * A Composite containing details of a Genre.
 * Explanatory Note: This Composite is named GenreWithClassical to disambiguate it from the basic Genre Composite.
 * XSD Type: GenreWithClassical
 */
class GenreWithClassicalType
{
    /**
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the Genre is considered by the MessageSender to be a classical music one (=true) or not (=false). Mandatory for classical recordings.
     *
     * @var bool $isClassical
     */
    private $isClassical = null;

    /**
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @var string $genreText
     */
    private $genreText = null;

    /**
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @var string $subGenre
     */
    private $subGenre = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Genre as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isClassical
     *
     * The Flag indicating whether the Genre is considered by the MessageSender to be a classical music one (=true) or not (=false). Mandatory for classical recordings.
     *
     * @return bool
     */
    public function getIsClassical()
    {
        return $this->isClassical;
    }

    /**
     * Sets a new isClassical
     *
     * The Flag indicating whether the Genre is considered by the MessageSender to be a classical music one (=true) or not (=false). Mandatory for classical recordings.
     *
     * @param bool $isClassical
     * @return self
     */
    public function setIsClassical($isClassical)
    {
        $this->isClassical = $isClassical;
        return $this;
    }

    /**
     * Gets as genreText
     *
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @return string
     */
    public function getGenreText()
    {
        return $this->genreText;
    }

    /**
     * Sets a new genreText
     *
     * A Description of a genre or style (such as Musical, literary or audio-visual) with which a Creation is associated.
     *
     * @param string $genreText
     * @return self
     */
    public function setGenreText($genreText)
    {
        $this->genreText = $genreText;
        return $this;
    }

    /**
     * Gets as subGenre
     *
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @return string
     */
    public function getSubGenre()
    {
        return $this->subGenre;
    }

    /**
     * Sets a new subGenre
     *
     * A Description of a secondary genre or style with which a Creation is associated.
     *
     * @param string $subGenre
     * @return self
     */
    public function setSubGenre($subGenre)
    {
        $this->subGenre = $subGenre;
        return $this;
    }
}


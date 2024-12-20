<?php

namespace DDEX\RIN\RIN10F;

/**
 * Class representing MusicalWorkListType
 *
 * A Composite containing details of one or more Works.
 * XSD Type: MusicalWorkList
 */
class MusicalWorkListType
{
    /**
     * The Language and script for the Elements of the MusicalWorkList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a MusicalWork.
     *
     * @var \DDEX\RIN\RIN10F\MusicalWorkType[] $musicalWork
     */
    private $musicalWork = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWorkList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the MusicalWorkList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @return self
     * @param \DDEX\RIN\RIN10F\MusicalWorkType $musicalWork
     */
    public function addToMusicalWork(\DDEX\RIN\RIN10F\MusicalWorkType $musicalWork)
    {
        $this->musicalWork[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWork($index)
    {
        return isset($this->musicalWork[$index]);
    }

    /**
     * unset musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWork($index)
    {
        unset($this->musicalWork[$index]);
    }

    /**
     * Gets as musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @return \DDEX\RIN\RIN10F\MusicalWorkType[]
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A Composite containing details of a MusicalWork.
     *
     * @param \DDEX\RIN\RIN10F\MusicalWorkType[] $musicalWork
     * @return self
     */
    public function setMusicalWork(array $musicalWork)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}


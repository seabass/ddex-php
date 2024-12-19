<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing RightShareListType
 *
 * A ddex:Composite containing details of one or more ddex:RightShares.
 * XSD Type: RightShareList
 */
class RightShareListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the mwl:RightShareList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @var \DDEX\MWL\MWL_211\RightShareType[] $rightShare
     */
    private $rightShare = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the mwl:RightShareList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:RightShareList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\RightShareType $rightShare
     */
    public function addToRightShare(\DDEX\MWL\MWL_211\RightShareType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShare($index)
    {
        return isset($this->rightShare[$index]);
    }

    /**
     * unset rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShare($index)
    {
        unset($this->rightShare[$index]);
    }

    /**
     * Gets as rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @return \DDEX\MWL\MWL_211\RightShareType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A ddex:Composite containing details of a ddex:RightShare.
     *
     * @param \DDEX\MWL\MWL_211\RightShareType[] $rightShare
     * @return self
     */
    public function setRightShare(array $rightShare)
    {
        $this->rightShare = $rightShare;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RightShareListType
 *
 * A Composite containing details of one or more RightShares.
 * XSD Type: RightShareList
 */
class RightShareListType
{
    /**
     * The Language and script for the Elements of the RightShareList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a RightShare.
     *
     * @var \DDEX\MWN\MWN_100\RightShareType[] $rightShare
     */
    private $rightShare = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the RightShareList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RightShareList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of a RightShare.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RightShareType $rightShare
     */
    public function addToRightShare(\DDEX\MWN\MWN_100\RightShareType $rightShare)
    {
        $this->rightShare[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShare
     *
     * A Composite containing details of a RightShare.
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
     * A Composite containing details of a RightShare.
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
     * A Composite containing details of a RightShare.
     *
     * @return \DDEX\MWN\MWN_100\RightShareType[]
     */
    public function getRightShare()
    {
        return $this->rightShare;
    }

    /**
     * Sets a new rightShare
     *
     * A Composite containing details of a RightShare.
     *
     * @param \DDEX\MWN\MWN_100\RightShareType[] $rightShare
     * @return self
     */
    public function setRightShare(array $rightShare)
    {
        $this->rightShare = $rightShare;
        return $this;
    }
}


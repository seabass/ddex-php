<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing SessionListType
 *
 * A Composite containing details of one or more Sessions.
 * XSD Type: SessionList
 */
class SessionListType
{
    /**
     * The Language and script for the Elements of the SessionList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @var \DDEX\RIN\RIN_200\SessionType[] $session
     */
    private $session = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SessionList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SessionList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as session
     *
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\SessionType $session
     */
    public function addToSession(\DDEX\RIN\RIN_200\SessionType $session)
    {
        $this->session[] = $session;
        return $this;
    }

    /**
     * isset session
     *
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSession($index)
    {
        return isset($this->session[$index]);
    }

    /**
     * unset session
     *
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSession($index)
    {
        unset($this->session[$index]);
    }

    /**
     * Gets as session
     *
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @return \DDEX\RIN\RIN_200\SessionType[]
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets a new session
     *
     * A Composite containing details of a Session.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors,-artists-and-writers/contributors,-artists-and-writers/
     *
     * @param \DDEX\RIN\RIN_200\SessionType[] $session
     * @return self
     */
    public function setSession(array $session)
    {
        $this->session = $session;
        return $this;
    }
}


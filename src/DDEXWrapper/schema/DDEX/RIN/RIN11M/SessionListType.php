<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing SessionListType
 *
 * A Composite containing details of one or more Sessions.
 * XSD Type: SessionList
 */
class SessionListType
{
    /**
     * A Composite containing details of a Session.
     *
     * @var \DDEX\RIN\RIN11M\SessionType[] $session
     */
    private $session = [
        
    ];

    /**
     * Adds as session
     *
     * A Composite containing details of a Session.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\SessionType $session
     */
    public function addToSession(\DDEX\RIN\RIN11M\SessionType $session)
    {
        $this->session[] = $session;
        return $this;
    }

    /**
     * isset session
     *
     * A Composite containing details of a Session.
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
     *
     * @return \DDEX\RIN\RIN11M\SessionType[]
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets a new session
     *
     * A Composite containing details of a Session.
     *
     * @param \DDEX\RIN\RIN11M\SessionType[] $session
     * @return self
     */
    public function setSession(array $session)
    {
        $this->session = $session;
        return $this;
    }
}


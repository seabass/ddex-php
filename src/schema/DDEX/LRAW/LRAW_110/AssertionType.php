<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing AssertionType
 *
 * A Composite containing details of an Assertion.
 * XSD Type: Assertion
 */
class AssertionType
{
    /**
     * A Reference for a Party (specific to this Message) asserting the link between a sound recording and the work(s) it uses. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var \DDEX\LRAW\LRAW_110\AsserterType $asserter
     */
    private $asserter = null;

    /**
     * A Flag indicating whether the Assertion is positive (=true) or not (=false).
     *
     * @var bool $isTrue
     */
    private $isTrue = null;

    /**
     * An element that allows the sender to indicate why they do not have a link.
     *
     * @var \DDEX\LRAW\LRAW_110\MissingLinkReasonType $missingLinkReason
     */
    private $missingLinkReason = null;

    /**
     * The DateTime of the Assertion, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @var \DateTime $assertionDateTime
     */
    private $assertionDateTime = null;

    /**
     * Gets as asserter
     *
     * A Reference for a Party (specific to this Message) asserting the link between a sound recording and the work(s) it uses. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return \DDEX\LRAW\LRAW_110\AsserterType
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Sets a new asserter
     *
     * A Reference for a Party (specific to this Message) asserting the link between a sound recording and the work(s) it uses. This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param \DDEX\LRAW\LRAW_110\AsserterType $asserter
     * @return self
     */
    public function setAsserter(\DDEX\LRAW\LRAW_110\AsserterType $asserter)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Gets as isTrue
     *
     * A Flag indicating whether the Assertion is positive (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsTrue()
    {
        return $this->isTrue;
    }

    /**
     * Sets a new isTrue
     *
     * A Flag indicating whether the Assertion is positive (=true) or not (=false).
     *
     * @param bool $isTrue
     * @return self
     */
    public function setIsTrue($isTrue)
    {
        $this->isTrue = $isTrue;
        return $this;
    }

    /**
     * Gets as missingLinkReason
     *
     * An element that allows the sender to indicate why they do not have a link.
     *
     * @return \DDEX\LRAW\LRAW_110\MissingLinkReasonType
     */
    public function getMissingLinkReason()
    {
        return $this->missingLinkReason;
    }

    /**
     * Sets a new missingLinkReason
     *
     * An element that allows the sender to indicate why they do not have a link.
     *
     * @param \DDEX\LRAW\LRAW_110\MissingLinkReasonType $missingLinkReason
     * @return self
     */
    public function setMissingLinkReason(?\DDEX\LRAW\LRAW_110\MissingLinkReasonType $missingLinkReason = null)
    {
        $this->missingLinkReason = $missingLinkReason;
        return $this;
    }

    /**
     * Gets as assertionDateTime
     *
     * The DateTime of the Assertion, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @return \DateTime
     */
    public function getAssertionDateTime()
    {
        return $this->assertionDateTime;
    }

    /**
     * Sets a new assertionDateTime
     *
     * The DateTime of the Assertion, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @param \DateTime $assertionDateTime
     * @return self
     */
    public function setAssertionDateTime(\DateTime $assertionDateTime)
    {
        $this->assertionDateTime = $assertionDateTime;
        return $this;
    }
}


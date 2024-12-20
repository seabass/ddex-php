<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SalesReportMessageReferenceType
 *
 * A ddex:Composite containing details of ddex:Identifiers of a sales reporting ddex:DdexMessage.
 * XSD Type: SalesReportMessageReference
 */
class SalesReportMessageReferenceType
{
    /**
     * An ddex:Identifier of the sales reporting ddex:Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * An ddex:Identifier of the ddex:Message thread. Typically used to track the progress and history (from ddex:Party to ddex:Party) of the sales reporting ddex:Message.
     *
     * @var string $messageThreadId
     */
    private $messageThreadId = null;

    /**
     * Gets as messageId
     *
     * An ddex:Identifier of the sales reporting ddex:Message.
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Sets a new messageId
     *
     * An ddex:Identifier of the sales reporting ddex:Message.
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Gets as messageThreadId
     *
     * An ddex:Identifier of the ddex:Message thread. Typically used to track the progress and history (from ddex:Party to ddex:Party) of the sales reporting ddex:Message.
     *
     * @return string
     */
    public function getMessageThreadId()
    {
        return $this->messageThreadId;
    }

    /**
     * Sets a new messageThreadId
     *
     * An ddex:Identifier of the ddex:Message thread. Typically used to track the progress and history (from ddex:Party to ddex:Party) of the sales reporting ddex:Message.
     *
     * @param string $messageThreadId
     * @return self
     */
    public function setMessageThreadId($messageThreadId)
    {
        $this->messageThreadId = $messageThreadId;
        return $this;
    }
}


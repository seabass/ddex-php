<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing SalesReportMessageReferenceType
 *
 * A Composite containing details of Identifiers of a sales reporting DdexMessage.
 * XSD Type: SalesReportMessageReference
 */
class SalesReportMessageReferenceType
{
    /**
     * An Identifier of the sales reporting Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * An Identifier of the Message thread. Typically used to track the progress and history (from Party to Party) of the sales reporting Message.
     *
     * @var string $messageThreadId
     */
    private $messageThreadId = null;

    /**
     * Gets as messageId
     *
     * An Identifier of the sales reporting Message.
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
     * An Identifier of the sales reporting Message.
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
     * An Identifier of the Message thread. Typically used to track the progress and history (from Party to Party) of the sales reporting Message.
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
     * An Identifier of the Message thread. Typically used to track the progress and history (from Party to Party) of the sales reporting Message.
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


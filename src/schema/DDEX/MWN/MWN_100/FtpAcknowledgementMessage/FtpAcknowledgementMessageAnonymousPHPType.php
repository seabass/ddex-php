<?php

namespace DDEX\MWN\MWN_100\FtpAcknowledgementMessage;

/**
 * Class representing FtpAcknowledgementMessageAnonymousPHPType
 */
class FtpAcknowledgementMessageAnonymousPHPType
{
    /**
     * The Version of the Message.
     *
     * @var string $messageVersionId
     */
    private $messageVersionId = null;

    /**
     * The MessageHeader for the Message.
     *
     * @var \DDEX\MWN\MWN_100\FtpMessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @var \DDEX\MWN\MWN_100\ReceivedFileType[] $receivedFile
     */
    private $receivedFile = [
        
    ];

    /**
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @var string $errorText
     */
    private $errorText = null;

    /**
     * Gets as messageVersionId
     *
     * The Version of the Message.
     *
     * @return string
     */
    public function getMessageVersionId()
    {
        return $this->messageVersionId;
    }

    /**
     * Sets a new messageVersionId
     *
     * The Version of the Message.
     *
     * @param string $messageVersionId
     * @return self
     */
    public function setMessageVersionId($messageVersionId)
    {
        $this->messageVersionId = $messageVersionId;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the Message.
     *
     * @return \DDEX\MWN\MWN_100\FtpMessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the Message.
     *
     * @param \DDEX\MWN\MWN_100\FtpMessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_100\FtpMessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as receivedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ReceivedFileType $receivedFile
     */
    public function addToReceivedFile(\DDEX\MWN\MWN_100\ReceivedFileType $receivedFile)
    {
        $this->receivedFile[] = $receivedFile;
        return $this;
    }

    /**
     * isset receivedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceivedFile($index)
    {
        return isset($this->receivedFile[$index]);
    }

    /**
     * unset receivedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceivedFile($index)
    {
        unset($this->receivedFile[$index]);
    }

    /**
     * Gets as receivedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @return \DDEX\MWN\MWN_100\ReceivedFileType[]
     */
    public function getReceivedFile()
    {
        return $this->receivedFile;
    }

    /**
     * Sets a new receivedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @param \DDEX\MWN\MWN_100\ReceivedFileType[] $receivedFile
     * @return self
     */
    public function setReceivedFile(array $receivedFile)
    {
        $this->receivedFile = $receivedFile;
        return $this;
    }

    /**
     * Gets as errorText
     *
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }

    /**
     * Sets a new errorText
     *
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @param string $errorText
     * @return self
     */
    public function setErrorText($errorText)
    {
        $this->errorText = $errorText;
        return $this;
    }
}


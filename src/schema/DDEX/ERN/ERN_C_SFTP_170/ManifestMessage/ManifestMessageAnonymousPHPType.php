<?php

namespace DDEX\ERN\ERN_C_SFTP_170\ManifestMessage;

/**
 * Class representing ManifestMessageAnonymousPHPType
 */
class ManifestMessageAnonymousPHPType
{
    /**
     * The Version of the Message.
     *
     * @var string $messageVersionId
     */
    private $messageVersionId = null;

    /**
     * The MessageHeader for the ManifestMessage.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_170\FtpMessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The Flag indicating whether the Message is a TestMessage (=true) or a LiveMessage (=false).
     *
     * @var bool $isTestFlag
     */
    private $isTestFlag = null;

    /**
     * An Identifier of the root directory of all Messages in the batch communicated through the ManifestMessage.
     *
     * @var string $rootDirectory
     */
    private $rootDirectory = null;

    /**
     * The number of Messages in the batch communicated through the ManifestMessage.
     *
     * @var int $numberOfMessages
     */
    private $numberOfMessages = null;

    /**
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_170\ErnMessageInBatchType[] $messageInBatch
     */
    private $messageInBatch = [
        
    ];

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
     * The MessageHeader for the ManifestMessage.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_170\FtpMessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the ManifestMessage.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_170\FtpMessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_C_SFTP_170\FtpMessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as isTestFlag
     *
     * The Flag indicating whether the Message is a TestMessage (=true) or a LiveMessage (=false).
     *
     * @return bool
     */
    public function getIsTestFlag()
    {
        return $this->isTestFlag;
    }

    /**
     * Sets a new isTestFlag
     *
     * The Flag indicating whether the Message is a TestMessage (=true) or a LiveMessage (=false).
     *
     * @param bool $isTestFlag
     * @return self
     */
    public function setIsTestFlag($isTestFlag)
    {
        $this->isTestFlag = $isTestFlag;
        return $this;
    }

    /**
     * Gets as rootDirectory
     *
     * An Identifier of the root directory of all Messages in the batch communicated through the ManifestMessage.
     *
     * @return string
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory;
    }

    /**
     * Sets a new rootDirectory
     *
     * An Identifier of the root directory of all Messages in the batch communicated through the ManifestMessage.
     *
     * @param string $rootDirectory
     * @return self
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * Gets as numberOfMessages
     *
     * The number of Messages in the batch communicated through the ManifestMessage.
     *
     * @return int
     */
    public function getNumberOfMessages()
    {
        return $this->numberOfMessages;
    }

    /**
     * Sets a new numberOfMessages
     *
     * The number of Messages in the batch communicated through the ManifestMessage.
     *
     * @param int $numberOfMessages
     * @return self
     */
    public function setNumberOfMessages($numberOfMessages)
    {
        $this->numberOfMessages = $numberOfMessages;
        return $this;
    }

    /**
     * Adds as messageInBatch
     *
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_170\ErnMessageInBatchType $messageInBatch
     */
    public function addToMessageInBatch(\DDEX\ERN\ERN_C_SFTP_170\ErnMessageInBatchType $messageInBatch)
    {
        $this->messageInBatch[] = $messageInBatch;
        return $this;
    }

    /**
     * isset messageInBatch
     *
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageInBatch($index)
    {
        return isset($this->messageInBatch[$index]);
    }

    /**
     * unset messageInBatch
     *
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageInBatch($index)
    {
        unset($this->messageInBatch[$index]);
    }

    /**
     * Gets as messageInBatch
     *
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_170\ErnMessageInBatchType[]
     */
    public function getMessageInBatch()
    {
        return $this->messageInBatch;
    }

    /**
     * Sets a new messageInBatch
     *
     * A Composite containing details of a Release Notification Message in the batch.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_170\ErnMessageInBatchType[] $messageInBatch
     * @return self
     */
    public function setMessageInBatch(array $messageInBatch)
    {
        $this->messageInBatch = $messageInBatch;
        return $this;
    }
}


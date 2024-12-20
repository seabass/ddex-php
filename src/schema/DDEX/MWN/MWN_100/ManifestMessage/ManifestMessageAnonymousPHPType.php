<?php

namespace DDEX\MWN\MWN_100\ManifestMessage;

/**
 * Class representing ManifestMessageAnonymousPHPType
 */
class ManifestMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The MessageHeader for the ManifestMessage.
     *
     * @var \DDEX\MWN\MWN_100\FtpMessageHeaderType $ftpMessageHeader
     */
    private $ftpMessageHeader = null;

    /**
     * The Flag indicating whether the Message is a TestMessage (=True) or a LiveMessage (=False).
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
     * A Composite containing details of a Message in the batch.
     *
     * @var \DDEX\MWN\MWN_100\MessageInBatchType[] $messageInBatch
     */
    private $messageInBatch = [
        
    ];

    /**
     * Gets as businessProfileVersionId
     *
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getBusinessProfileVersionId()
    {
        return $this->businessProfileVersionId;
    }

    /**
     * Sets a new businessProfileVersionId
     *
     * The Identifier of the Version of the business profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $businessProfileVersionId
     * @return self
     */
    public function setBusinessProfileVersionId($businessProfileVersionId)
    {
        $this->businessProfileVersionId = $businessProfileVersionId;
        return $this;
    }

    /**
     * Gets as releaseProfileVersionId
     *
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getReleaseProfileVersionId()
    {
        return $this->releaseProfileVersionId;
    }

    /**
     * Sets a new releaseProfileVersionId
     *
     * The Identifier of the Version of the release profile used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $releaseProfileVersionId
     * @return self
     */
    public function setReleaseProfileVersionId($releaseProfileVersionId)
    {
        $this->releaseProfileVersionId = $releaseProfileVersionId;
        return $this;
    }

    /**
     * Gets as ftpMessageHeader
     *
     * The MessageHeader for the ManifestMessage.
     *
     * @return \DDEX\MWN\MWN_100\FtpMessageHeaderType
     */
    public function getFtpMessageHeader()
    {
        return $this->ftpMessageHeader;
    }

    /**
     * Sets a new ftpMessageHeader
     *
     * The MessageHeader for the ManifestMessage.
     *
     * @param \DDEX\MWN\MWN_100\FtpMessageHeaderType $ftpMessageHeader
     * @return self
     */
    public function setFtpMessageHeader(\DDEX\MWN\MWN_100\FtpMessageHeaderType $ftpMessageHeader)
    {
        $this->ftpMessageHeader = $ftpMessageHeader;
        return $this;
    }

    /**
     * Gets as isTestFlag
     *
     * The Flag indicating whether the Message is a TestMessage (=True) or a LiveMessage (=False).
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
     * The Flag indicating whether the Message is a TestMessage (=True) or a LiveMessage (=False).
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
     * A Composite containing details of a Message in the batch.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MessageInBatchType $messageInBatch
     */
    public function addToMessageInBatch(\DDEX\MWN\MWN_100\MessageInBatchType $messageInBatch)
    {
        $this->messageInBatch[] = $messageInBatch;
        return $this;
    }

    /**
     * isset messageInBatch
     *
     * A Composite containing details of a Message in the batch.
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
     * A Composite containing details of a Message in the batch.
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
     * A Composite containing details of a Message in the batch.
     *
     * @return \DDEX\MWN\MWN_100\MessageInBatchType[]
     */
    public function getMessageInBatch()
    {
        return $this->messageInBatch;
    }

    /**
     * Sets a new messageInBatch
     *
     * A Composite containing details of a Message in the batch.
     *
     * @param \DDEX\MWN\MWN_100\MessageInBatchType[] $messageInBatch
     * @return self
     */
    public function setMessageInBatch(array $messageInBatch)
    {
        $this->messageInBatch = $messageInBatch;
        return $this;
    }
}


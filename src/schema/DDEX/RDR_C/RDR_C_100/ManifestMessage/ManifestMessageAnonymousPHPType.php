<?php

namespace DDEX\RDR_C\RDR_C_100\ManifestMessage;

/**
 * Class representing ManifestMessageAnonymousPHPType
 */
class ManifestMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the ManifestMessage.
     *
     * @var \DDEX\RDR_C\RDR_C_100\FtpMessageHeaderType $ftpMessageHeader
     */
    private $ftpMessageHeader = null;

    /**
     * The Flag indicating whether the Message is a TestMessage (=true) or a LiveMessage (=false).
     *
     * @var bool $isTestFlag
     */
    private $isTestFlag = null;

    /**
     * An Identifier of the root directory of all Messages in the Batch communicated through the ManifestMessage.
     *
     * @var string $rootDirectory
     */
    private $rootDirectory = null;

    /**
     * The number of Messages in the Batch communicated through the ManifestMessage.
     *
     * @var int $numberOfMessages
     */
    private $numberOfMessages = null;

    /**
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @var \DDEX\RDR_C\RDR_C_100\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A Composite containing details of a Message in the Batch.
     *
     * @var \DDEX\RDR_C\RDR_C_100\MessageInBatchType[] $messageInBatch
     */
    private $messageInBatch = [
        
    ];

    /**
     * Gets as ftpMessageHeader
     *
     * The MessageHeader for the ManifestMessage.
     *
     * @return \DDEX\RDR_C\RDR_C_100\FtpMessageHeaderType
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
     * @param \DDEX\RDR_C\RDR_C_100\FtpMessageHeaderType $ftpMessageHeader
     * @return self
     */
    public function setFtpMessageHeader(\DDEX\RDR_C\RDR_C_100\FtpMessageHeaderType $ftpMessageHeader)
    {
        $this->ftpMessageHeader = $ftpMessageHeader;
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
     * An Identifier of the root directory of all Messages in the Batch communicated through the ManifestMessage.
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
     * An Identifier of the root directory of all Messages in the Batch communicated through the ManifestMessage.
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
     * The number of Messages in the Batch communicated through the ManifestMessage.
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
     * The number of Messages in the Batch communicated through the ManifestMessage.
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
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @return \DDEX\RDR_C\RDR_C_100\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @param \DDEX\RDR_C\RDR_C_100\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(?\DDEX\RDR_C\RDR_C_100\MessageNotificationPeriodType $messageNotificationPeriod = null)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Adds as messageInBatch
     *
     * A Composite containing details of a Message in the Batch.
     *
     * @return self
     * @param \DDEX\RDR_C\RDR_C_100\MessageInBatchType $messageInBatch
     */
    public function addToMessageInBatch(\DDEX\RDR_C\RDR_C_100\MessageInBatchType $messageInBatch)
    {
        $this->messageInBatch[] = $messageInBatch;
        return $this;
    }

    /**
     * isset messageInBatch
     *
     * A Composite containing details of a Message in the Batch.
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
     * A Composite containing details of a Message in the Batch.
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
     * A Composite containing details of a Message in the Batch.
     *
     * @return \DDEX\RDR_C\RDR_C_100\MessageInBatchType[]
     */
    public function getMessageInBatch()
    {
        return $this->messageInBatch;
    }

    /**
     * Sets a new messageInBatch
     *
     * A Composite containing details of a Message in the Batch.
     *
     * @param \DDEX\RDR_C\RDR_C_100\MessageInBatchType[] $messageInBatch
     * @return self
     */
    public function setMessageInBatch(array $messageInBatch)
    {
        $this->messageInBatch = $messageInBatch;
        return $this;
    }
}


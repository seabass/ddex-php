<?php

namespace DDEX\MWN\MWN_US_LOD_100\ManifestMessage;

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
     * @var \DDEX\MWN\MWN_US_LOD_100\FtpMessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The Flag indicating whether the Message is a TestMessage (=true) or a LiveMessage (=false).
     *
     * @var bool $isTestFlag
     */
    private $isTestFlag = null;

    /**
     * A Composite containing details of a reporting Period covered by the Messages. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

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
     * A Composite containing details of a Message in the Batch.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\MessageInBatchType[] $messageInBatch
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
     * @return \DDEX\MWN\MWN_US_LOD_100\FtpMessageHeaderType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\FtpMessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_US_LOD_100\FtpMessageHeaderType $messageHeader)
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
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Messages. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Messages. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(\DDEX\MWN\MWN_US_LOD_100\MessageNotificationPeriodType $messageNotificationPeriod)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
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
     * A Composite containing details of a Message in the Batch.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\MessageInBatchType $messageInBatch
     */
    public function addToMessageInBatch(\DDEX\MWN\MWN_US_LOD_100\MessageInBatchType $messageInBatch)
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
     * @return \DDEX\MWN\MWN_US_LOD_100\MessageInBatchType[]
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
     * @param \DDEX\MWN\MWN_US_LOD_100\MessageInBatchType[] $messageInBatch
     * @return self
     */
    public function setMessageInBatch(array $messageInBatch)
    {
        $this->messageInBatch = $messageInBatch;
        return $this;
    }
}


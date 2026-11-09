<?php

namespace DDEX\ERN\ERN_C_SFTP_160\FtpAcknowledgementMessage;

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
     * @var \DDEX\ERN\ERN_C_SFTP_160\BasicFtpMessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\AcknowledgedFileType $acknowledgedFile
     */
    private $acknowledgedFile = null;

    /**
     * A Composite containing details of the FileStatus.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\FileStatusType $fileStatus
     */
    private $fileStatus = null;

    /**
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @var string $errorText
     */
    private $errorText = null;

    /**
     * A Composite containing details of the Type of action that is proposed.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\ProposedActionTypeType $proposedActionType
     */
    private $proposedActionType = null;

    /**
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @var bool $manualCheckRequired
     */
    private $manualCheckRequired = null;

    /**
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\ResourceIdType[] $affectedResource
     */
    private $affectedResource = [
        
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
     * The MessageHeader for the Message.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\BasicFtpMessageHeaderType
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
     * @param \DDEX\ERN\ERN_C_SFTP_160\BasicFtpMessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_C_SFTP_160\BasicFtpMessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as acknowledgedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\AcknowledgedFileType
     */
    public function getAcknowledgedFile()
    {
        return $this->acknowledgedFile;
    }

    /**
     * Sets a new acknowledgedFile
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\AcknowledgedFileType $acknowledgedFile
     * @return self
     */
    public function setAcknowledgedFile(\DDEX\ERN\ERN_C_SFTP_160\AcknowledgedFileType $acknowledgedFile)
    {
        $this->acknowledgedFile = $acknowledgedFile;
        return $this;
    }

    /**
     * Gets as fileStatus
     *
     * A Composite containing details of the FileStatus.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\FileStatusType
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    /**
     * Sets a new fileStatus
     *
     * A Composite containing details of the FileStatus.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\FileStatusType $fileStatus
     * @return self
     */
    public function setFileStatus(\DDEX\ERN\ERN_C_SFTP_160\FileStatusType $fileStatus)
    {
        $this->fileStatus = $fileStatus;
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

    /**
     * Gets as proposedActionType
     *
     * A Composite containing details of the Type of action that is proposed.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\ProposedActionTypeType
     */
    public function getProposedActionType()
    {
        return $this->proposedActionType;
    }

    /**
     * Sets a new proposedActionType
     *
     * A Composite containing details of the Type of action that is proposed.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\ProposedActionTypeType $proposedActionType
     * @return self
     */
    public function setProposedActionType(?\DDEX\ERN\ERN_C_SFTP_160\ProposedActionTypeType $proposedActionType = null)
    {
        $this->proposedActionType = $proposedActionType;
        return $this;
    }

    /**
     * Gets as manualCheckRequired
     *
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @return bool
     */
    public function getManualCheckRequired()
    {
        return $this->manualCheckRequired;
    }

    /**
     * Sets a new manualCheckRequired
     *
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @param bool $manualCheckRequired
     * @return self
     */
    public function setManualCheckRequired($manualCheckRequired)
    {
        $this->manualCheckRequired = $manualCheckRequired;
        return $this;
    }

    /**
     * Adds as affectedResource
     *
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_160\ResourceIdType $affectedResource
     */
    public function addToAffectedResource(\DDEX\ERN\ERN_C_SFTP_160\ResourceIdType $affectedResource)
    {
        $this->affectedResource[] = $affectedResource;
        return $this;
    }

    /**
     * isset affectedResource
     *
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedResource($index)
    {
        return isset($this->affectedResource[$index]);
    }

    /**
     * unset affectedResource
     *
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedResource($index)
    {
        unset($this->affectedResource[$index]);
    }

    /**
     * Gets as affectedResource
     *
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\ResourceIdType[]
     */
    public function getAffectedResource()
    {
        return $this->affectedResource;
    }

    /**
     * Sets a new affectedResource
     *
     * A Composite containing details of ResourceIds for hte Resources that are affected.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\ResourceIdType[] $affectedResource
     * @return self
     */
    public function setAffectedResource(array $affectedResource = null)
    {
        $this->affectedResource = $affectedResource;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LIC_101\FtpAcknowledgementMessage;

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
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The MessageHeader for the Message.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\BasicFtpMessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @var string $acknowledgedMessageId
     */
    private $acknowledgedMessageId = null;

    /**
     * A Composite containing details of the File Status.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\FileStatusType $fileStatus
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
     * @var \DDEX\MWN\MWN_US_LIC_101\ProposedActionTypeType $proposedActionType
     */
    private $proposedActionType = null;

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
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the Message.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\BasicFtpMessageHeaderType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\BasicFtpMessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_US_LIC_101\BasicFtpMessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as acknowledgedMessageId
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @return string
     */
    public function getAcknowledgedMessageId()
    {
        return $this->acknowledgedMessageId;
    }

    /**
     * Sets a new acknowledgedMessageId
     *
     * A Composite containing details of the Message Files whose receipt is acknowledged.
     *
     * @param string $acknowledgedMessageId
     * @return self
     */
    public function setAcknowledgedMessageId($acknowledgedMessageId)
    {
        $this->acknowledgedMessageId = $acknowledgedMessageId;
        return $this;
    }

    /**
     * Gets as fileStatus
     *
     * A Composite containing details of the File Status.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\FileStatusType
     */
    public function getFileStatus()
    {
        return $this->fileStatus;
    }

    /**
     * Sets a new fileStatus
     *
     * A Composite containing details of the File Status.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\FileStatusType $fileStatus
     * @return self
     */
    public function setFileStatus(\DDEX\MWN\MWN_US_LIC_101\FileStatusType $fileStatus)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\ProposedActionTypeType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\ProposedActionTypeType $proposedActionType
     * @return self
     */
    public function setProposedActionType(?\DDEX\MWN\MWN_US_LIC_101\ProposedActionTypeType $proposedActionType = null)
    {
        $this->proposedActionType = $proposedActionType;
        return $this;
    }
}


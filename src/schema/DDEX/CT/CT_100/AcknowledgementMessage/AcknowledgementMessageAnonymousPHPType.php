<?php

namespace DDEX\CT\CT_100\AcknowledgementMessage;

/**
 * Class representing AcknowledgementMessageAnonymousPHPType
 */
class AcknowledgementMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @var \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Name of a File.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * A Status.
     *
     * @var string $status
     */
    private $status = null;

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
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @return \DDEX\CT\CT_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the AcknowledgementMessage.
     *
     * @param \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\CT\CT_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * A Name of a File.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * A Name of a File.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as status
     *
     * A Status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Status.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}


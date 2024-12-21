<?php

namespace DDEX\LRAW\LRAW_100\LinkAcknowledgementMessage;

/**
 * Class representing LinkAcknowledgementMessageAnonymousPHPType
 */
class LinkAcknowledgementMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the LinkAcknowledgementMessage.
     *
     * @var \DDEX\LRAW\LRAW_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @var \DDEX\LRAW\LRAW_100\LinkIdType[] $linkId
     */
    private $linkId = [
        
    ];

    /**
     * A Status that is acknowledged.
     *
     * @var \DDEX\LRAW\LRAW_100\StatusType $status
     */
    private $status = null;

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the LinkAcknowledgementMessage.
     *
     * @return \DDEX\LRAW\LRAW_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the LinkAcknowledgementMessage.
     *
     * @param \DDEX\LRAW\LRAW_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\LRAW\LRAW_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as linkId
     *
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_100\LinkIdType $linkId
     */
    public function addToLinkId(\DDEX\LRAW\LRAW_100\LinkIdType $linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * isset linkId
     *
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkId($index)
    {
        return isset($this->linkId[$index]);
    }

    /**
     * unset linkId
     *
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkId($index)
    {
        unset($this->linkId[$index]);
    }

    /**
     * Gets as linkId
     *
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @return \DDEX\LRAW\LRAW_100\LinkIdType[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * A Composite containing details of Identifiers of the link that is acknowledged.
     *
     * @param \DDEX\LRAW\LRAW_100\LinkIdType[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as status
     *
     * A Status that is acknowledged.
     *
     * @return \DDEX\LRAW\LRAW_100\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Status that is acknowledged.
     *
     * @param \DDEX\LRAW\LRAW_100\StatusType $status
     * @return self
     */
    public function setStatus(\DDEX\LRAW\LRAW_100\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }
}


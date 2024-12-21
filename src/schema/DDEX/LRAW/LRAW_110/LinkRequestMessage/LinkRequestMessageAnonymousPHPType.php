<?php

namespace DDEX\LRAW\LRAW_110\LinkRequestMessage;

/**
 * Class representing LinkRequestMessageAnonymousPHPType
 */
class LinkRequestMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the LinkRequestMessage.
     *
     * @var \DDEX\LRAW\LRAW_110\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @var \DDEX\LRAW\LRAW_110\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A link that is requested.
     *
     * @var \DDEX\LRAW\LRAW_110\LinkRequestType[] $linkRequest
     */
    private $linkRequest = [
        
    ];

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the LinkRequestMessage.
     *
     * @return \DDEX\LRAW\LRAW_110\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the LinkRequestMessage.
     *
     * @param \DDEX\LRAW\LRAW_110\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\LRAW\LRAW_110\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\PartyType $party
     */
    public function addToPartyList(\DDEX\LRAW\LRAW_110\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyList($index)
    {
        return isset($this->partyList[$index]);
    }

    /**
     * unset partyList
     *
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyList($index)
    {
        unset($this->partyList[$index]);
    }

    /**
     * Gets as partyList
     *
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @return \DDEX\LRAW\LRAW_110\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing details of one or more Parties relating to the requested links.
     *
     * @param \DDEX\LRAW\LRAW_110\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as linkRequest
     *
     * A link that is requested.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\LinkRequestType $linkRequest
     */
    public function addToLinkRequest(\DDEX\LRAW\LRAW_110\LinkRequestType $linkRequest)
    {
        $this->linkRequest[] = $linkRequest;
        return $this;
    }

    /**
     * isset linkRequest
     *
     * A link that is requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkRequest($index)
    {
        return isset($this->linkRequest[$index]);
    }

    /**
     * unset linkRequest
     *
     * A link that is requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkRequest($index)
    {
        unset($this->linkRequest[$index]);
    }

    /**
     * Gets as linkRequest
     *
     * A link that is requested.
     *
     * @return \DDEX\LRAW\LRAW_110\LinkRequestType[]
     */
    public function getLinkRequest()
    {
        return $this->linkRequest;
    }

    /**
     * Sets a new linkRequest
     *
     * A link that is requested.
     *
     * @param \DDEX\LRAW\LRAW_110\LinkRequestType[] $linkRequest
     * @return self
     */
    public function setLinkRequest(array $linkRequest)
    {
        $this->linkRequest = $linkRequest;
        return $this;
    }
}


<?php

namespace DDEX\LRAW\LRAW_110\LinkResourceAndWorkMessage;

/**
 * Class representing LinkResourceAndWorkMessageAnonymousPHPType
 */
class LinkResourceAndWorkMessageAnonymousPHPType
{
    /**
     * The MessageHeader for the LinkResourceAndWorkMessage.
     *
     * @var \DDEX\LRAW\LRAW_110\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\LRAW\LRAW_110\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @var \DDEX\LRAW\LRAW_110\AssertedLinkType[] $assertedLink
     */
    private $assertedLink = [
        
    ];

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the LinkResourceAndWorkMessage.
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
     * The MessageHeader for the LinkResourceAndWorkMessage.
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
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
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
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
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
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
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
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
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
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
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
     * Adds as assertedLink
     *
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\AssertedLinkType $assertedLink
     */
    public function addToAssertedLink(\DDEX\LRAW\LRAW_110\AssertedLinkType $assertedLink)
    {
        $this->assertedLink[] = $assertedLink;
        return $this;
    }

    /**
     * isset assertedLink
     *
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssertedLink($index)
    {
        return isset($this->assertedLink[$index]);
    }

    /**
     * unset assertedLink
     *
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssertedLink($index)
    {
        unset($this->assertedLink[$index]);
    }

    /**
     * Gets as assertedLink
     *
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @return \DDEX\LRAW\LRAW_110\AssertedLinkType[]
     */
    public function getAssertedLink()
    {
        return $this->assertedLink;
    }

    /**
     * Sets a new assertedLink
     *
     * A Composite containing details of the link between a SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param \DDEX\LRAW\LRAW_110\AssertedLinkType[] $assertedLink
     * @return self
     */
    public function setAssertedLink(array $assertedLink)
    {
        $this->assertedLink = $assertedLink;
        return $this;
    }
}


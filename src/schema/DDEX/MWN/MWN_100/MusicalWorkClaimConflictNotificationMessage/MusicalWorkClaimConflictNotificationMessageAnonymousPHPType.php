<?php

namespace DDEX\MWN\MWN_100\MusicalWorkClaimConflictNotificationMessage;

/**
 * Class representing MusicalWorkClaimConflictNotificationMessageAnonymousPHPType
 */
class MusicalWorkClaimConflictNotificationMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

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
     * The Language and script for the Elements of the MusicalWorkClaimConflictNotificationMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the MusicalWorkClaimConflictNotificationMessage.
     *
     * @var \DDEX\MWN\MWN_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported conflicts.
     *
     * @var \DDEX\MWN\MWN_100\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more Works relating to the reported conflicts.
     *
     * @var \DDEX\MWN\MWN_100\WorkListType $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of RightShares relating to the reported conflicts.
     *
     * @var \DDEX\MWN\MWN_100\RightShareListType $rightShareList
     */
    private $rightShareList = null;

    /**
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @var \DDEX\MWN\MWN_100\RightShareConflictType[] $conflictList
     */
    private $conflictList = null;

    /**
     * Gets as messageSchemaVersionId
     *
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getMessageSchemaVersionId()
    {
        return $this->messageSchemaVersionId;
    }

    /**
     * Sets a new messageSchemaVersionId
     *
     * The Identifier of the Version of the XML schema used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $messageSchemaVersionId
     * @return self
     */
    public function setMessageSchemaVersionId($messageSchemaVersionId)
    {
        $this->messageSchemaVersionId = $messageSchemaVersionId;
        return $this;
    }

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
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWorkClaimConflictNotificationMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The Language and script for the Elements of the MusicalWorkClaimConflictNotificationMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the MusicalWorkClaimConflictNotificationMessage.
     *
     * @return \DDEX\MWN\MWN_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the MusicalWorkClaimConflictNotificationMessage.
     *
     * @param \DDEX\MWN\MWN_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported conflicts.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\PartyType $party
     */
    public function addToPartyList(\DDEX\MWN\MWN_100\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported conflicts.
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
     * A Composite containing details of one or more Parties relating to the reported conflicts.
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
     * A Composite containing details of one or more Parties relating to the reported conflicts.
     *
     * @return \DDEX\MWN\MWN_100\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing details of one or more Parties relating to the reported conflicts.
     *
     * @param \DDEX\MWN\MWN_100\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A Composite containing details of one or more Works relating to the reported conflicts.
     *
     * @return \DDEX\MWN\MWN_100\WorkListType
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A Composite containing details of one or more Works relating to the reported conflicts.
     *
     * @param \DDEX\MWN\MWN_100\WorkListType $workList
     * @return self
     */
    public function setWorkList(\DDEX\MWN\MWN_100\WorkListType $workList)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Gets as rightShareList
     *
     * A Composite containing details of RightShares relating to the reported conflicts.
     *
     * @return \DDEX\MWN\MWN_100\RightShareListType
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A Composite containing details of RightShares relating to the reported conflicts.
     *
     * @param \DDEX\MWN\MWN_100\RightShareListType $rightShareList
     * @return self
     */
    public function setRightShareList(\DDEX\MWN\MWN_100\RightShareListType $rightShareList)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Adds as conflict
     *
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RightShareConflictType $conflict
     */
    public function addToConflictList(\DDEX\MWN\MWN_100\RightShareConflictType $conflict)
    {
        $this->conflictList[] = $conflict;
        return $this;
    }

    /**
     * isset conflictList
     *
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConflictList($index)
    {
        return isset($this->conflictList[$index]);
    }

    /**
     * unset conflictList
     *
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConflictList($index)
    {
        unset($this->conflictList[$index]);
    }

    /**
     * Gets as conflictList
     *
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @return \DDEX\MWN\MWN_100\RightShareConflictType[]
     */
    public function getConflictList()
    {
        return $this->conflictList;
    }

    /**
     * Sets a new conflictList
     *
     * A Composite containing details of RightShare conflicts reported in this Message.
     *
     * @param \DDEX\MWN\MWN_100\RightShareConflictType[] $conflictList
     * @return self
     */
    public function setConflictList(array $conflictList)
    {
        $this->conflictList = $conflictList;
        return $this;
    }
}


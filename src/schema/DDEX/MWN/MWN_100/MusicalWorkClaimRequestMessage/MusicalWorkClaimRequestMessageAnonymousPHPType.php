<?php

namespace DDEX\MWN\MWN_100\MusicalWorkClaimRequestMessage;

/**
 * Class representing MusicalWorkClaimRequestMessageAnonymousPHPType
 */
class MusicalWorkClaimRequestMessageAnonymousPHPType
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
     * The Language and script for the Elements of the MusicalWorkClaimRequestMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the MusicalWorkClaimRequestMessage.
     *
     * @var \DDEX\MWN\MWN_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the requests.
     *
     * @var \DDEX\MWN\MWN_100\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more Works relating to the requests.
     *
     * @var \DDEX\MWN\MWN_100\WorkListType $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of one or more Resources relating to the requests.
     *
     * @var \DDEX\MWN\MWN_100\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @var \DDEX\MWN\MWN_100\ReleaseListType $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of requests for claims for RightShares.
     *
     * @var \DDEX\MWN\MWN_100\RequestType[] $requestList
     */
    private $requestList = null;

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
     * The Language and script for the Elements of the MusicalWorkClaimRequestMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the MusicalWorkClaimRequestMessage as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the MusicalWorkClaimRequestMessage.
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
     * The MessageHeader for the MusicalWorkClaimRequestMessage.
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
     * A Composite containing details of one or more Parties relating to the requests.
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
     * A Composite containing details of one or more Parties relating to the requests.
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
     * A Composite containing details of one or more Parties relating to the requests.
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
     * A Composite containing details of one or more Parties relating to the requests.
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
     * A Composite containing details of one or more Parties relating to the requests.
     *
     * @param \DDEX\MWN\MWN_100\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList = null)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Gets as workList
     *
     * A Composite containing details of one or more Works relating to the requests.
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
     * A Composite containing details of one or more Works relating to the requests.
     *
     * @param \DDEX\MWN\MWN_100\WorkListType $workList
     * @return self
     */
    public function setWorkList(?\DDEX\MWN\MWN_100\WorkListType $workList = null)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources relating to the requests.
     *
     * @return \DDEX\MWN\MWN_100\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources relating to the requests.
     *
     * @param \DDEX\MWN\MWN_100\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWN\MWN_100\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @return \DDEX\MWN\MWN_100\ReleaseListType
     */
    public function getReleaseList()
    {
        return $this->releaseList;
    }

    /**
     * Sets a new releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param \DDEX\MWN\MWN_100\ReleaseListType $releaseList
     * @return self
     */
    public function setReleaseList(?\DDEX\MWN\MWN_100\ReleaseListType $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as request
     *
     * A Composite containing details of requests for claims for RightShares.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RequestType $request
     */
    public function addToRequestList(\DDEX\MWN\MWN_100\RequestType $request)
    {
        $this->requestList[] = $request;
        return $this;
    }

    /**
     * isset requestList
     *
     * A Composite containing details of requests for claims for RightShares.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestList($index)
    {
        return isset($this->requestList[$index]);
    }

    /**
     * unset requestList
     *
     * A Composite containing details of requests for claims for RightShares.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestList($index)
    {
        unset($this->requestList[$index]);
    }

    /**
     * Gets as requestList
     *
     * A Composite containing details of requests for claims for RightShares.
     *
     * @return \DDEX\MWN\MWN_100\RequestType[]
     */
    public function getRequestList()
    {
        return $this->requestList;
    }

    /**
     * Sets a new requestList
     *
     * A Composite containing details of requests for claims for RightShares.
     *
     * @param \DDEX\MWN\MWN_100\RequestType[] $requestList
     * @return self
     */
    public function setRequestList(array $requestList)
    {
        $this->requestList = $requestList;
        return $this;
    }
}


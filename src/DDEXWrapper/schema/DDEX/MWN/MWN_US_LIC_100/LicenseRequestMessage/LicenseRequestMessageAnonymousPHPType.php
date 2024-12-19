<?php

namespace DDEX\MWN\MWN_US_LIC_100\LicenseRequestMessage;

/**
 * Class representing LicenseRequestMessageAnonymousPHPType
 */
class LicenseRequestMessageAnonymousPHPType
{
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
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the LicenseRequestMessage.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The purpose of the LicenseRequestMessage, which can be used to request a License or to notify the MessageRecipient of the intent to use a Work.
     *
     * @var string $messagePurpose
     */
    private $messagePurpose = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\MusicalWorkType[] $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ReleaseType[] $releaseList
     */
    private $releaseList = null;

    /**
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\RightShareType[] $rightShareList
     */
    private $rightShareList = null;

    /**
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[] $conditionList
     */
    private $conditionList = null;

    /**
     * A Composite containing details of one or more Requests for a License.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LicenseRequestType[] $licenseRequestList
     */
    private $licenseRequestList = null;

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
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the LicenseRequestMessage.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the LicenseRequestMessage.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_US_LIC_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messagePurpose
     *
     * The purpose of the LicenseRequestMessage, which can be used to request a License or to notify the MessageRecipient of the intent to use a Work.
     *
     * @return string
     */
    public function getMessagePurpose()
    {
        return $this->messagePurpose;
    }

    /**
     * Sets a new messagePurpose
     *
     * The purpose of the LicenseRequestMessage, which can be used to request a License or to notify the MessageRecipient of the intent to use a Work.
     *
     * @param string $messagePurpose
     * @return self
     */
    public function setMessagePurpose($messagePurpose)
    {
        $this->messagePurpose = $messagePurpose;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\PartyType $party
     */
    public function addToPartyList(\DDEX\MWN\MWN_US_LIC_100\PartyType $party)
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
     * @return \DDEX\MWN\MWN_US_LIC_100\PartyType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\MusicalWorkType $musicalWork
     */
    public function addToWorkList(\DDEX\MWN\MWN_US_LIC_100\MusicalWorkType $musicalWork)
    {
        $this->workList[] = $musicalWork;
        return $this;
    }

    /**
     * isset workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkList($index)
    {
        return isset($this->workList[$index]);
    }

    /**
     * unset workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkList($index)
    {
        unset($this->workList[$index]);
    }

    /**
     * Gets as workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\MusicalWorkType[]
     */
    public function getWorkList()
    {
        return $this->workList;
    }

    /**
     * Sets a new workList
     *
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\MusicalWorkType[] $workList
     * @return self
     */
    public function setWorkList(array $workList)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources for the reported MusicalWorks.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\MWN\MWN_US_LIC_100\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Adds as release
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\ReleaseType $release
     */
    public function addToReleaseList(\DDEX\MWN\MWN_US_LIC_100\ReleaseType $release)
    {
        $this->releaseList[] = $release;
        return $this;
    }

    /**
     * isset releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseList($index)
    {
        return isset($this->releaseList[$index]);
    }

    /**
     * unset releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseList($index)
    {
        unset($this->releaseList[$index]);
    }

    /**
     * Gets as releaseList
     *
     * A Composite containing details of one or more Releases relating to the requests.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ReleaseType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_100\ReleaseType[] $releaseList
     * @return self
     */
    public function setReleaseList(array $releaseList = null)
    {
        $this->releaseList = $releaseList;
        return $this;
    }

    /**
     * Adds as rightShare
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\RightShareType $rightShare
     */
    public function addToRightShareList(\DDEX\MWN\MWN_US_LIC_100\RightShareType $rightShare)
    {
        $this->rightShareList[] = $rightShare;
        return $this;
    }

    /**
     * isset rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareList($index)
    {
        return isset($this->rightShareList[$index]);
    }

    /**
     * unset rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareList($index)
    {
        unset($this->rightShareList[$index]);
    }

    /**
     * Gets as rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\RightShareType[]
     */
    public function getRightShareList()
    {
        return $this->rightShareList;
    }

    /**
     * Sets a new rightShareList
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\RightShareType[] $rightShareList
     * @return self
     */
    public function setRightShareList(array $rightShareList)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Adds as condition
     *
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType $condition
     */
    public function addToConditionList(\DDEX\MWN\MWN_US_LIC_100\LicenseConditionType $condition)
    {
        $this->conditionList[] = $condition;
        return $this;
    }

    /**
     * isset conditionList
     *
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionList($index)
    {
        return isset($this->conditionList[$index]);
    }

    /**
     * unset conditionList
     *
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionList($index)
    {
        unset($this->conditionList[$index]);
    }

    /**
     * Gets as conditionList
     *
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[]
     */
    public function getConditionList()
    {
        return $this->conditionList;
    }

    /**
     * Sets a new conditionList
     *
     * A Composite containing details of a list of conditions and/or limitations for Usages.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseConditionType[] $conditionList
     * @return self
     */
    public function setConditionList(array $conditionList)
    {
        $this->conditionList = $conditionList;
        return $this;
    }

    /**
     * Adds as licenseRequest
     *
     * A Composite containing details of one or more Requests for a License.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseRequestType $licenseRequest
     */
    public function addToLicenseRequestList(\DDEX\MWN\MWN_US_LIC_100\LicenseRequestType $licenseRequest)
    {
        $this->licenseRequestList[] = $licenseRequest;
        return $this;
    }

    /**
     * isset licenseRequestList
     *
     * A Composite containing details of one or more Requests for a License.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseRequestList($index)
    {
        return isset($this->licenseRequestList[$index]);
    }

    /**
     * unset licenseRequestList
     *
     * A Composite containing details of one or more Requests for a License.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseRequestList($index)
    {
        unset($this->licenseRequestList[$index]);
    }

    /**
     * Gets as licenseRequestList
     *
     * A Composite containing details of one or more Requests for a License.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\LicenseRequestType[]
     */
    public function getLicenseRequestList()
    {
        return $this->licenseRequestList;
    }

    /**
     * Sets a new licenseRequestList
     *
     * A Composite containing details of one or more Requests for a License.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseRequestType[] $licenseRequestList
     * @return self
     */
    public function setLicenseRequestList(array $licenseRequestList)
    {
        $this->licenseRequestList = $licenseRequestList;
        return $this;
    }
}


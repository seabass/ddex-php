<?php

namespace DDEX\MWN\MWN_US_LIC_101\LicenseMessage;

/**
 * Class representing LicenseMessageAnonymousPHPType
 */
class LicenseMessageAnonymousPHPType
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
     * The MessageHeader for the LicenseMessage.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * The purpose of the LicenseMessage, which can be used to grant a License or to acknowledge the Notification of the intent to use a Work.
     *
     * @var string $messagePurpose
     */
    private $messagePurpose = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more MusicalWorks reported in this Message.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\MusicalWorkType[] $workList
     */
    private $workList = null;

    /**
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RightShareType[] $rightShareList
     */
    private $rightShareList = null;

    /**
     * A Composite containing details of one or more Licenses.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\LicenseListType $licenseList
     */
    private $licenseList = null;

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
     * The MessageHeader for the LicenseMessage.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the LicenseMessage.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MWN\MWN_US_LIC_101\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messagePurpose
     *
     * The purpose of the LicenseMessage, which can be used to grant a License or to acknowledge the Notification of the intent to use a Work.
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
     * The purpose of the LicenseMessage, which can be used to grant a License or to acknowledge the Notification of the intent to use a Work.
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
     * @param \DDEX\MWN\MWN_US_LIC_101\PartyType $party
     */
    public function addToPartyList(\DDEX\MWN\MWN_US_LIC_101\PartyType $party)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\PartyType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\PartyType[] $partyList
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
     * @param \DDEX\MWN\MWN_US_LIC_101\MusicalWorkType $musicalWork
     */
    public function addToWorkList(\DDEX\MWN\MWN_US_LIC_101\MusicalWorkType $musicalWork)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\MusicalWorkType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\MusicalWorkType[] $workList
     * @return self
     */
    public function setWorkList(array $workList)
    {
        $this->workList = $workList;
        return $this;
    }

    /**
     * Adds as rightShare
     *
     * A Composite containing details of RightShares for the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\RightShareType $rightShare
     */
    public function addToRightShareList(\DDEX\MWN\MWN_US_LIC_101\RightShareType $rightShare)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\RightShareType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\RightShareType[] $rightShareList
     * @return self
     */
    public function setRightShareList(array $rightShareList)
    {
        $this->rightShareList = $rightShareList;
        return $this;
    }

    /**
     * Gets as licenseList
     *
     * A Composite containing details of one or more Licenses.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\LicenseListType
     */
    public function getLicenseList()
    {
        return $this->licenseList;
    }

    /**
     * Sets a new licenseList
     *
     * A Composite containing details of one or more Licenses.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\LicenseListType $licenseList
     * @return self
     */
    public function setLicenseList(\DDEX\MWN\MWN_US_LIC_101\LicenseListType $licenseList)
    {
        $this->licenseList = $licenseList;
        return $this;
    }
}


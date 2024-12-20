<?php

namespace DDEX\MWN\MWN_US_LIC_100\LicenseRevocationMessage;

/**
 * Class representing LicenseRevocationMessageAnonymousPHPType
 */
class LicenseRevocationMessageAnonymousPHPType
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
     * The MessageHeader for the LicenseRevocationMessage.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\LicenseRevocationItemType[] $licenseRevocationItem
     */
    private $licenseRevocationItem = [
        
    ];

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
     * The MessageHeader for the LicenseRevocationMessage.
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
     * The MessageHeader for the LicenseRevocationMessage.
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
     * Adds as licenseRevocationItem
     *
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseRevocationItemType $licenseRevocationItem
     */
    public function addToLicenseRevocationItem(\DDEX\MWN\MWN_US_LIC_100\LicenseRevocationItemType $licenseRevocationItem)
    {
        $this->licenseRevocationItem[] = $licenseRevocationItem;
        return $this;
    }

    /**
     * isset licenseRevocationItem
     *
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseRevocationItem($index)
    {
        return isset($this->licenseRevocationItem[$index]);
    }

    /**
     * unset licenseRevocationItem
     *
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseRevocationItem($index)
    {
        unset($this->licenseRevocationItem[$index]);
    }

    /**
     * Gets as licenseRevocationItem
     *
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\LicenseRevocationItemType[]
     */
    public function getLicenseRevocationItem()
    {
        return $this->licenseRevocationItem;
    }

    /**
     * Sets a new licenseRevocationItem
     *
     * A Composite containing details of the License or Claim that is being revoked.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\LicenseRevocationItemType[] $licenseRevocationItem
     * @return self
     */
    public function setLicenseRevocationItem(array $licenseRevocationItem)
    {
        $this->licenseRevocationItem = $licenseRevocationItem;
        return $this;
    }
}


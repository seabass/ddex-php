<?php

namespace DDEX\MWL\MWL_200\LicenseOrClaimRevocationMessage;

/**
 * Class representing LicenseOrClaimRevocationMessageAnonymousPHPType
 */
class LicenseOrClaimRevocationMessageAnonymousPHPType
{
    /**
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRevocationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the mwl:LicenseOrClaimRevocationMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @var \DDEX\MWL\MWL_200\LicenseOrClaimRevocationItemType[] $licenseOrClaimRevocationItem
     */
    private $licenseOrClaimRevocationItem = [
        
    ];

    /**
     * Gets as messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the XML schema used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the business profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of the release profile used for the ddex:Message. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRevocationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRevocationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the mwl:LicenseOrClaimRevocationMessage.
     *
     * @return \DDEX\ddexC\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the mwl:LicenseOrClaimRevocationMessage.
     *
     * @param \DDEX\ddexC\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ddexC\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as licenseOrClaimRevocationItem
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRevocationItemType $licenseOrClaimRevocationItem
     */
    public function addToLicenseOrClaimRevocationItem(\DDEX\MWL\MWL_200\LicenseOrClaimRevocationItemType $licenseOrClaimRevocationItem)
    {
        $this->licenseOrClaimRevocationItem[] = $licenseOrClaimRevocationItem;
        return $this;
    }

    /**
     * isset licenseOrClaimRevocationItem
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRevocationItem($index)
    {
        return isset($this->licenseOrClaimRevocationItem[$index]);
    }

    /**
     * unset licenseOrClaimRevocationItem
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRevocationItem($index)
    {
        unset($this->licenseOrClaimRevocationItem[$index]);
    }

    /**
     * Gets as licenseOrClaimRevocationItem
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @return \DDEX\MWL\MWL_200\LicenseOrClaimRevocationItemType[]
     */
    public function getLicenseOrClaimRevocationItem()
    {
        return $this->licenseOrClaimRevocationItem;
    }

    /**
     * Sets a new licenseOrClaimRevocationItem
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is being revoked.
     *
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimRevocationItemType[] $licenseOrClaimRevocationItem
     * @return self
     */
    public function setLicenseOrClaimRevocationItem(array $licenseOrClaimRevocationItem)
    {
        $this->licenseOrClaimRevocationItem = $licenseOrClaimRevocationItem;
        return $this;
    }
}


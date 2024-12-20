<?php

namespace DDEX\MWL\MWL_200\LicenseOrClaimRequestCancellationMessage;

/**
 * Class representing LicenseOrClaimRequestCancellationMessageAnonymousPHPType
 */
class LicenseOrClaimRequestCancellationMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestCancellationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the mwl:LicenseOrClaimRequestCancellationMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @var \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     */
    private $licenseOrClaimRequestId = [
        
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestCancellationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimRequestCancellationMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the mwl:LicenseOrClaimRequestCancellationMessage.
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
     * The MessageHeader for the mwl:LicenseOrClaimRequestCancellationMessage.
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
     * Adds as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @return self
     * @param \DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId
     */
    public function addToLicenseOrClaimRequestId(\DDEX\ddexC\ProprietaryIdType $licenseOrClaimRequestId)
    {
        $this->licenseOrClaimRequestId[] = $licenseOrClaimRequestId;
        return $this;
    }

    /**
     * isset licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimRequestId($index)
    {
        return isset($this->licenseOrClaimRequestId[$index]);
    }

    /**
     * unset licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimRequestId($index)
    {
        unset($this->licenseOrClaimRequestId[$index]);
    }

    /**
     * Gets as licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @return \DDEX\ddexC\ProprietaryIdType[]
     */
    public function getLicenseOrClaimRequestId()
    {
        return $this->licenseOrClaimRequestId;
    }

    /**
     * Sets a new licenseOrClaimRequestId
     *
     * A ddex:Composite containing details of an ddex:Identifier of the ddex:License or ddex:Claim request that is being cancelled.
     *
     * @param \DDEX\ddexC\ProprietaryIdType[] $licenseOrClaimRequestId
     * @return self
     */
    public function setLicenseOrClaimRequestId(array $licenseOrClaimRequestId)
    {
        $this->licenseOrClaimRequestId = $licenseOrClaimRequestId;
        return $this;
    }
}


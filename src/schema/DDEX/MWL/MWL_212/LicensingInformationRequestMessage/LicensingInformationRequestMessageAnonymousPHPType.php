<?php

namespace DDEX\MWL\MWL_212\LicensingInformationRequestMessage;

/**
 * Class representing LicensingInformationRequestMessageAnonymousPHPType
 */
class LicensingInformationRequestMessageAnonymousPHPType
{
    /**
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
     *
     * @var string $messageSchemaVersionId
     */
    private $messageSchemaVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @var string $businessProfileVersionId
     */
    private $businessProfileVersionId = null;

    /**
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
     *
     * @var string $releaseProfileVersionId
     */
    private $releaseProfileVersionId = null;

    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicensingInformationRequestMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the
     *  mwl:LicensingInformationRequestMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @var \DDEX\MWL\MWL_212\LicensingInformationRequestItemType[] $licensingInformationRequestItem
     */
    private $licensingInformationRequestItem = [
        
    ];

    /**
     * Gets as messageSchemaVersionId
     *
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the XML schema used for the ddex:Message. This is represented in an XML schema as
     *  an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the business profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Identifier of the ddex:Version of
     *  the release profile used for the ddex:Message. This is represented in an XML
     *  schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicensingInformationRequestMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the
     *  ddex:Elements of the mwl:LicensingInformationRequestMessage as defined in IETF RfC
     *  4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant].
     *  This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the
     *  mwl:LicensingInformationRequestMessage.
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
     * The MessageHeader for the
     *  mwl:LicensingInformationRequestMessage.
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
     * Adds as licensingInformationRequestItem
     *
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @return self
     * @param \DDEX\MWL\MWL_212\LicensingInformationRequestItemType $licensingInformationRequestItem
     */
    public function addToLicensingInformationRequestItem(\DDEX\MWL\MWL_212\LicensingInformationRequestItemType $licensingInformationRequestItem)
    {
        $this->licensingInformationRequestItem[] = $licensingInformationRequestItem;
        return $this;
    }

    /**
     * isset licensingInformationRequestItem
     *
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicensingInformationRequestItem($index)
    {
        return isset($this->licensingInformationRequestItem[$index]);
    }

    /**
     * unset licensingInformationRequestItem
     *
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicensingInformationRequestItem($index)
    {
        unset($this->licensingInformationRequestItem[$index]);
    }

    /**
     * Gets as licensingInformationRequestItem
     *
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @return \DDEX\MWL\MWL_212\LicensingInformationRequestItemType[]
     */
    public function getLicensingInformationRequestItem()
    {
        return $this->licensingInformationRequestItem;
    }

    /**
     * Sets a new licensingInformationRequestItem
     *
     * A ddex:Composite containing details of
     *  a request for additional information not previously contained in a
     *  mwl:LicenseOrClaimRequestMessage.
     *
     * @param \DDEX\MWL\MWL_212\LicensingInformationRequestItemType[] $licensingInformationRequestItem
     * @return self
     */
    public function setLicensingInformationRequestItem(array $licensingInformationRequestItem)
    {
        $this->licensingInformationRequestItem = $licensingInformationRequestItem;
        return $this;
    }
}


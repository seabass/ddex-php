<?php

namespace DDEX\MWL\MWL_200\LicensingProcessStatusMessage;

/**
 * Class representing LicensingProcessStatusMessageAnonymousPHPType
 */
class LicensingProcessStatusMessageAnonymousPHPType
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicensingProcessStatusMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the mwl:LicensingProcessStatusMessage.
     *
     * @var \DDEX\ddexC\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @var \DDEX\MWL\MWL_200\LicensingProcessStatusItemType[] $licensingProcessStatusItem
     */
    private $licensingProcessStatusItem = [
        
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicensingProcessStatusMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:LicensingProcessStatusMessage as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The MessageHeader for the mwl:LicensingProcessStatusMessage.
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
     * The MessageHeader for the mwl:LicensingProcessStatusMessage.
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
     * Adds as licensingProcessStatusItem
     *
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\LicensingProcessStatusItemType $licensingProcessStatusItem
     */
    public function addToLicensingProcessStatusItem(\DDEX\MWL\MWL_200\LicensingProcessStatusItemType $licensingProcessStatusItem)
    {
        $this->licensingProcessStatusItem[] = $licensingProcessStatusItem;
        return $this;
    }

    /**
     * isset licensingProcessStatusItem
     *
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicensingProcessStatusItem($index)
    {
        return isset($this->licensingProcessStatusItem[$index]);
    }

    /**
     * unset licensingProcessStatusItem
     *
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicensingProcessStatusItem($index)
    {
        unset($this->licensingProcessStatusItem[$index]);
    }

    /**
     * Gets as licensingProcessStatusItem
     *
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @return \DDEX\MWL\MWL_200\LicensingProcessStatusItemType[]
     */
    public function getLicensingProcessStatusItem()
    {
        return $this->licensingProcessStatusItem;
    }

    /**
     * Sets a new licensingProcessStatusItem
     *
     * A ddex:Composite containing details of the process status of a ddex:License or ddex:Claim request.
     *
     * @param \DDEX\MWL\MWL_200\LicensingProcessStatusItemType[] $licensingProcessStatusItem
     * @return self
     */
    public function setLicensingProcessStatusItem(array $licensingProcessStatusItem = null)
    {
        $this->licensingProcessStatusItem = $licensingProcessStatusItem;
        return $this;
    }
}


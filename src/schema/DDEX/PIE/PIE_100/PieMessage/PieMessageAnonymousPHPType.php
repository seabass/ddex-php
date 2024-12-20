<?php

namespace DDEX\PIE\PIE_100\PieMessage;

/**
 * Class representing PieMessageAnonymousPHPType
 */
class PieMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this File as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the PieMessage.
     *
     * @var \DDEX\PIE\PIE_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceType[] $metadataSourceList
     */
    private $metadataSourceList = null;

    /**
     * A Composite containing detailed information about one or more Parties.
     *
     * @var \DDEX\PIE\PIE_100\PartyType[] $partyList
     */
    private $partyList = null;

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
     * The Language and script for the Elements of this File as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this File as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the PieMessage.
     *
     * @return \DDEX\PIE\PIE_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the PieMessage.
     *
     * @param \DDEX\PIE\PIE_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\PIE\PIE_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as metadataSource
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceType $metadataSource
     */
    public function addToMetadataSourceList(\DDEX\PIE\PIE_100\MetadataSourceType $metadataSource)
    {
        $this->metadataSourceList[] = $metadataSource;
        return $this;
    }

    /**
     * isset metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceList($index)
    {
        return isset($this->metadataSourceList[$index]);
    }

    /**
     * unset metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceList($index)
    {
        unset($this->metadataSourceList[$index]);
    }

    /**
     * Gets as metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @return \DDEX\PIE\PIE_100\MetadataSourceType[]
     */
    public function getMetadataSourceList()
    {
        return $this->metadataSourceList;
    }

    /**
     * Sets a new metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param \DDEX\PIE\PIE_100\MetadataSourceType[] $metadataSourceList
     * @return self
     */
    public function setMetadataSourceList(array $metadataSourceList = null)
    {
        $this->metadataSourceList = $metadataSourceList;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing detailed information about one or more Parties.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyType $party
     */
    public function addToPartyList(\DDEX\PIE\PIE_100\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing detailed information about one or more Parties.
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
     * A Composite containing detailed information about one or more Parties.
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
     * A Composite containing detailed information about one or more Parties.
     *
     * @return \DDEX\PIE\PIE_100\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing detailed information about one or more Parties.
     *
     * @param \DDEX\PIE\PIE_100\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList)
    {
        $this->partyList = $partyList;
        return $this;
    }
}


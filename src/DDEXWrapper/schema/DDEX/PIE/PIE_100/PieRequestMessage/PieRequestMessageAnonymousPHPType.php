<?php

namespace DDEX\PIE\PIE_100\PieRequestMessage;

/**
 * Class representing PieRequestMessageAnonymousPHPType
 */
class PieRequestMessageAnonymousPHPType
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
     * The MessageHeader for the PieRequestMessage.
     *
     * @var \DDEX\PIE\PIE_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a Party for which information is requested.
     *
     * @var \DDEX\PIE\PIE_100\RequestedPartyType[] $requestedParty
     */
    private $requestedParty = [
        
    ];

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
     * The MessageHeader for the PieRequestMessage.
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
     * The MessageHeader for the PieRequestMessage.
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
     * Adds as requestedParty
     *
     * A Composite containing details of a Party for which information is requested.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\RequestedPartyType $requestedParty
     */
    public function addToRequestedParty(\DDEX\PIE\PIE_100\RequestedPartyType $requestedParty)
    {
        $this->requestedParty[] = $requestedParty;
        return $this;
    }

    /**
     * isset requestedParty
     *
     * A Composite containing details of a Party for which information is requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedParty($index)
    {
        return isset($this->requestedParty[$index]);
    }

    /**
     * unset requestedParty
     *
     * A Composite containing details of a Party for which information is requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedParty($index)
    {
        unset($this->requestedParty[$index]);
    }

    /**
     * Gets as requestedParty
     *
     * A Composite containing details of a Party for which information is requested.
     *
     * @return \DDEX\PIE\PIE_100\RequestedPartyType[]
     */
    public function getRequestedParty()
    {
        return $this->requestedParty;
    }

    /**
     * Sets a new requestedParty
     *
     * A Composite containing details of a Party for which information is requested.
     *
     * @param \DDEX\PIE\PIE_100\RequestedPartyType[] $requestedParty
     * @return self
     */
    public function setRequestedParty(array $requestedParty)
    {
        $this->requestedParty = $requestedParty;
        return $this;
    }
}


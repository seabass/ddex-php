<?php

namespace DDEX\RDR_N\RDR_N_150\RightsClaimStatusUpdateMessage;

/**
 * Class representing RightsClaimStatusUpdateMessageAnonymousPHPType
 */
class RightsClaimStatusUpdateMessageAnonymousPHPType
{
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
     * The MessageHeader for the RightsClaimStatusUpdateMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a RightsClaim.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RightsClaimType[] $rightsClaim
     */
    private $rightsClaim = [
        
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
     * The MessageHeader for the RightsClaimStatusUpdateMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the RightsClaimStatusUpdateMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as rightsClaim
     *
     * A Composite containing details of a RightsClaim.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RightsClaimType $rightsClaim
     */
    public function addToRightsClaim(\DDEX\RDR_N\RDR_N_150\RightsClaimType $rightsClaim)
    {
        $this->rightsClaim[] = $rightsClaim;
        return $this;
    }

    /**
     * isset rightsClaim
     *
     * A Composite containing details of a RightsClaim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsClaim($index)
    {
        return isset($this->rightsClaim[$index]);
    }

    /**
     * unset rightsClaim
     *
     * A Composite containing details of a RightsClaim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsClaim($index)
    {
        unset($this->rightsClaim[$index]);
    }

    /**
     * Gets as rightsClaim
     *
     * A Composite containing details of a RightsClaim.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RightsClaimType[]
     */
    public function getRightsClaim()
    {
        return $this->rightsClaim;
    }

    /**
     * Sets a new rightsClaim
     *
     * A Composite containing details of a RightsClaim.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RightsClaimType[] $rightsClaim
     * @return self
     */
    public function setRightsClaim(array $rightsClaim)
    {
        $this->rightsClaim = $rightsClaim;
        return $this;
    }
}


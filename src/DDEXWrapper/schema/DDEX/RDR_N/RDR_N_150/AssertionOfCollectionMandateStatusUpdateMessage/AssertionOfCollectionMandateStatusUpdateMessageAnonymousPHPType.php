<?php

namespace DDEX\RDR_N\RDR_N_150\AssertionOfCollectionMandateStatusUpdateMessage;

/**
 * Class representing AssertionOfCollectionMandateStatusUpdateMessageAnonymousPHPType
 */
class AssertionOfCollectionMandateStatusUpdateMessageAnonymousPHPType
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
     * The MessageHeader for the AssertionOfCollectionMandateStatusUpdateMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a collection Mandate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CollectionMandateType[] $collectionMandate
     */
    private $collectionMandate = [
        
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
     * The MessageHeader for the AssertionOfCollectionMandateStatusUpdateMessage.
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
     * The MessageHeader for the AssertionOfCollectionMandateStatusUpdateMessage.
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
     * Adds as collectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateType $collectionMandate
     */
    public function addToCollectionMandate(\DDEX\RDR_N\RDR_N_150\CollectionMandateType $collectionMandate)
    {
        $this->collectionMandate[] = $collectionMandate;
        return $this;
    }

    /**
     * isset collectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionMandate($index)
    {
        return isset($this->collectionMandate[$index]);
    }

    /**
     * unset collectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionMandate($index)
    {
        unset($this->collectionMandate[$index]);
    }

    /**
     * Gets as collectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CollectionMandateType[]
     */
    public function getCollectionMandate()
    {
        return $this->collectionMandate;
    }

    /**
     * Sets a new collectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateType[] $collectionMandate
     * @return self
     */
    public function setCollectionMandate(array $collectionMandate)
    {
        $this->collectionMandate = $collectionMandate;
        return $this;
    }
}


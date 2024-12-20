<?php

namespace DDEX\RDR_N\RDR_N_150\AssertionOfCollectionMandateMessage;

/**
 * Class representing AssertionOfCollectionMandateMessageAnonymousPHPType
 */
class AssertionOfCollectionMandateMessageAnonymousPHPType
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
     * The MessageHeader for the AssertionOfCollectionMandateMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CollectionMandateAssertionType[] $collectionMandateAssertion
     */
    private $collectionMandateAssertion = [
        
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
     * The MessageHeader for the AssertionOfCollectionMandateMessage.
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
     * The MessageHeader for the AssertionOfCollectionMandateMessage.
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
     * Adds as collectionMandateAssertion
     *
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateAssertionType $collectionMandateAssertion
     */
    public function addToCollectionMandateAssertion(\DDEX\RDR_N\RDR_N_150\CollectionMandateAssertionType $collectionMandateAssertion)
    {
        $this->collectionMandateAssertion[] = $collectionMandateAssertion;
        return $this;
    }

    /**
     * isset collectionMandateAssertion
     *
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionMandateAssertion($index)
    {
        return isset($this->collectionMandateAssertion[$index]);
    }

    /**
     * unset collectionMandateAssertion
     *
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionMandateAssertion($index)
    {
        unset($this->collectionMandateAssertion[$index]);
    }

    /**
     * Gets as collectionMandateAssertion
     *
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CollectionMandateAssertionType[]
     */
    public function getCollectionMandateAssertion()
    {
        return $this->collectionMandateAssertion;
    }

    /**
     * Sets a new collectionMandateAssertion
     *
     * A Composite containing details of an Assertion of collection Mandates.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateAssertionType[] $collectionMandateAssertion
     * @return self
     */
    public function setCollectionMandateAssertion(array $collectionMandateAssertion)
    {
        $this->collectionMandateAssertion = $collectionMandateAssertion;
        return $this;
    }
}


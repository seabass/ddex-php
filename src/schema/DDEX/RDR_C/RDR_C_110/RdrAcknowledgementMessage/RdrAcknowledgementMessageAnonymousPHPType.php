<?php

namespace DDEX\RDR_C\RDR_C_110\RdrAcknowledgementMessage;

/**
 * Class representing RdrAcknowledgementMessageAnonymousPHPType
 */
class RdrAcknowledgementMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The MessageHeader for the RdrAcknowledgementMessage.
     *
     * @var \DDEX\RDR_C\RDR_C_110\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @var \DDEX\RDR_C\RDR_C_110\BatchAcknowledgementType[] $batchAcknowledgement
     */
    private $batchAcknowledgement = [
        
    ];

    /**
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @var \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[] $messageAcknowledgement
     */
    private $messageAcknowledgement = [
        
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
     * Gets as messageHeader
     *
     * The MessageHeader for the RdrAcknowledgementMessage.
     *
     * @return \DDEX\RDR_C\RDR_C_110\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the RdrAcknowledgementMessage.
     *
     * @param \DDEX\RDR_C\RDR_C_110\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\RDR_C\RDR_C_110\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Adds as batchAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @return self
     * @param \DDEX\RDR_C\RDR_C_110\BatchAcknowledgementType $batchAcknowledgement
     */
    public function addToBatchAcknowledgement(\DDEX\RDR_C\RDR_C_110\BatchAcknowledgementType $batchAcknowledgement)
    {
        $this->batchAcknowledgement[] = $batchAcknowledgement;
        return $this;
    }

    /**
     * isset batchAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBatchAcknowledgement($index)
    {
        return isset($this->batchAcknowledgement[$index]);
    }

    /**
     * unset batchAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBatchAcknowledgement($index)
    {
        unset($this->batchAcknowledgement[$index]);
    }

    /**
     * Gets as batchAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @return \DDEX\RDR_C\RDR_C_110\BatchAcknowledgementType[]
     */
    public function getBatchAcknowledgement()
    {
        return $this->batchAcknowledgement;
    }

    /**
     * Sets a new batchAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Batch.
     *
     * @param \DDEX\RDR_C\RDR_C_110\BatchAcknowledgementType[] $batchAcknowledgement
     * @return self
     */
    public function setBatchAcknowledgement(array $batchAcknowledgement = null)
    {
        $this->batchAcknowledgement = $batchAcknowledgement;
        return $this;
    }

    /**
     * Adds as messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @return self
     * @param \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType $messageAcknowledgement
     */
    public function addToMessageAcknowledgement(\DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType $messageAcknowledgement)
    {
        $this->messageAcknowledgement[] = $messageAcknowledgement;
        return $this;
    }

    /**
     * isset messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageAcknowledgement($index)
    {
        return isset($this->messageAcknowledgement[$index]);
    }

    /**
     * unset messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageAcknowledgement($index)
    {
        unset($this->messageAcknowledgement[$index]);
    }

    /**
     * Gets as messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @return \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[]
     */
    public function getMessageAcknowledgement()
    {
        return $this->messageAcknowledgement;
    }

    /**
     * Sets a new messageAcknowledgement
     *
     * A Composite containing details of an Acknowledgement for a Message.
     *
     * @param \DDEX\RDR_C\RDR_C_110\MessageAcknowledgementType[] $messageAcknowledgement
     * @return self
     */
    public function setMessageAcknowledgement(array $messageAcknowledgement = null)
    {
        $this->messageAcknowledgement = $messageAcknowledgement;
        return $this;
    }
}


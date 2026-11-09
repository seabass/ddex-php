<?php

namespace DDEX\ERN\ERN_C_SFTP_160;

/**
 * Class representing ErnMessageInBatchType
 *
 * A Composite containing details of a Release Notification Message in a Batch.
 * XSD Type: ErnMessageInBatch
 */
class ErnMessageInBatchType
{
    /**
     * The Type of Message.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * An Identifier of the Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * A URL of the Message.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\ReleaseIdType[] $includedReleaseId
     */
    private $includedReleaseId = [
        
    ];

    /**
     * A Composite containing details of the Type of action that the MessageSender applies to the Message.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\MessageActionTypeType $deliveryType
     */
    private $deliveryType = null;

    /**
     * A Composite containing details of the Type of a Product defining which kinds of Products are within the delivered batch. Each batch may only contain one type of Products.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\ProductTypeType $productType
     */
    private $productType = null;

    /**
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_160\HashSumType $hashSum
     */
    private $hashSum = null;

    /**
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @var string $signature
     */
    private $signature = null;

    /**
     * Gets as messageType
     *
     * The Type of Message.
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * The Type of Message.
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as messageId
     *
     * An Identifier of the Message.
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Sets a new messageId
     *
     * An Identifier of the Message.
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL of the Message.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A URL of the Message.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Adds as includedReleaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_160\ReleaseIdType $includedReleaseId
     */
    public function addToIncludedReleaseId(\DDEX\ERN\ERN_C_SFTP_160\ReleaseIdType $includedReleaseId)
    {
        $this->includedReleaseId[] = $includedReleaseId;
        return $this;
    }

    /**
     * isset includedReleaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncludedReleaseId($index)
    {
        return isset($this->includedReleaseId[$index]);
    }

    /**
     * unset includedReleaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncludedReleaseId($index)
    {
        unset($this->includedReleaseId[$index]);
    }

    /**
     * Gets as includedReleaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\ReleaseIdType[]
     */
    public function getIncludedReleaseId()
    {
        return $this->includedReleaseId;
    }

    /**
     * Sets a new includedReleaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid should always be used.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\ReleaseIdType[] $includedReleaseId
     * @return self
     */
    public function setIncludedReleaseId(array $includedReleaseId)
    {
        $this->includedReleaseId = $includedReleaseId;
        return $this;
    }

    /**
     * Gets as deliveryType
     *
     * A Composite containing details of the Type of action that the MessageSender applies to the Message.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\MessageActionTypeType
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * Sets a new deliveryType
     *
     * A Composite containing details of the Type of action that the MessageSender applies to the Message.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\MessageActionTypeType $deliveryType
     * @return self
     */
    public function setDeliveryType(\DDEX\ERN\ERN_C_SFTP_160\MessageActionTypeType $deliveryType)
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * Gets as productType
     *
     * A Composite containing details of the Type of a Product defining which kinds of Products are within the delivered batch. Each batch may only contain one type of Products.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\ProductTypeType
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * A Composite containing details of the Type of a Product defining which kinds of Products are within the delivered batch. Each batch may only contain one type of Products.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\ProductTypeType $productType
     * @return self
     */
    public function setProductType(\DDEX\ERN\ERN_C_SFTP_160\ProductTypeType $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_160\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A Composite containing a HashSum of the File and information about the algorithm with which it has been generated.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_160\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\ERN\ERN_C_SFTP_160\HashSumType $hashSum = null)
    {
        $this->hashSum = $hashSum;
        return $this;
    }

    /**
     * Gets as signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * A digital signature in accordance with DDEX-DSIG.
     *
     * @param string $signature
     * @return self
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }
}


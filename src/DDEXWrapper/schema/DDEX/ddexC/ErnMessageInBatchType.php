<?php

namespace DDEX\ddexC;

/**
 * Class representing ErnMessageInBatchType
 *
 * A ddex:Composite containing details of an Release Notification ddex:Message in a ddex:Batch.
 * XSD Type: ErnMessageInBatch
 */
class ErnMessageInBatchType
{
    /**
     * The ddex:Type of ddex:Message.
     *
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * An ddex:Identifier of the ddex:Message.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * A ddex:URL of the ddex:Message.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @var \DDEX\ddexC\ReleaseIdType[] $includedReleaseId
     */
    private $includedReleaseId = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Type of action that the ddex:MessageSender applies to the ddex:Message.
     *
     * @var \DDEX\ddexC\MessageActionTypeType $deliveryType
     */
    private $deliveryType = null;

    /**
     * A ddex:Composite containing details of the ddex:Type of a ddex:Product defining which kinds of ddex:Products are within the delivered batch. Each batch may only contain one type of ddex:Products.
     *
     * @var \DDEX\ddexC\ProductTypeType $productType
     */
    private $productType = null;

    /**
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @var \DDEX\ddexC\HashSumType $hashSum
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
     * The ddex:Type of ddex:Message.
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
     * The ddex:Type of ddex:Message.
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
     * An ddex:Identifier of the ddex:Message.
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
     * An ddex:Identifier of the ddex:Message.
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
     * A ddex:URL of the ddex:Message.
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
     * A ddex:URL of the ddex:Message.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return self
     * @param \DDEX\ddexC\ReleaseIdType $includedReleaseId
     */
    public function addToIncludedReleaseId(\DDEX\ddexC\ReleaseIdType $includedReleaseId)
    {
        $this->includedReleaseId[] = $includedReleaseId;
        return $this;
    }

    /**
     * isset includedReleaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
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
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @return \DDEX\ddexC\ReleaseIdType[]
     */
    public function getIncludedReleaseId()
    {
        return $this->includedReleaseId;
    }

    /**
     * Sets a new includedReleaseId
     *
     * A ddex:Composite containing details of ddex:ReleaseIds. If available, a ddex:GRid should always be used.
     *
     * @param \DDEX\ddexC\ReleaseIdType[] $includedReleaseId
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
     * A ddex:Composite containing details of the ddex:Type of action that the ddex:MessageSender applies to the ddex:Message.
     *
     * @return \DDEX\ddexC\MessageActionTypeType
     */
    public function getDeliveryType()
    {
        return $this->deliveryType;
    }

    /**
     * Sets a new deliveryType
     *
     * A ddex:Composite containing details of the ddex:Type of action that the ddex:MessageSender applies to the ddex:Message.
     *
     * @param \DDEX\ddexC\MessageActionTypeType $deliveryType
     * @return self
     */
    public function setDeliveryType(\DDEX\ddexC\MessageActionTypeType $deliveryType)
    {
        $this->deliveryType = $deliveryType;
        return $this;
    }

    /**
     * Gets as productType
     *
     * A ddex:Composite containing details of the ddex:Type of a ddex:Product defining which kinds of ddex:Products are within the delivered batch. Each batch may only contain one type of ddex:Products.
     *
     * @return \DDEX\ddexC\ProductTypeType
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Sets a new productType
     *
     * A ddex:Composite containing details of the ddex:Type of a ddex:Product defining which kinds of ddex:Products are within the delivered batch. Each batch may only contain one type of ddex:Products.
     *
     * @param \DDEX\ddexC\ProductTypeType $productType
     * @return self
     */
    public function setProductType(\DDEX\ddexC\ProductTypeType $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * Gets as hashSum
     *
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @return \DDEX\ddexC\HashSumType
     */
    public function getHashSum()
    {
        return $this->hashSum;
    }

    /**
     * Sets a new hashSum
     *
     * A ddex:Composite containing a ddex:HashSum of the ddexC:File and information about the algorithm with which it has been generated.
     *
     * @param \DDEX\ddexC\HashSumType $hashSum
     * @return self
     */
    public function setHashSum(?\DDEX\ddexC\HashSumType $hashSum = null)
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


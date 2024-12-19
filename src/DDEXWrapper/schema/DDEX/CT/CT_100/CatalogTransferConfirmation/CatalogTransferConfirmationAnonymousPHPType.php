<?php

namespace DDEX\CT\CT_100\CatalogTransferConfirmation;

/**
 * Class representing CatalogTransferConfirmationAnonymousPHPType
 */
class CatalogTransferConfirmationAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The MessageHeader for the CatalogTransferConfirmation.
     *
     * @var \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @var \DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId
     */
    private $catalogTransferId = null;

    /**
     * A Status of the CatalogTransfer indicating to the MessageRecipient whether the CatalogTransfer is confirmed for all Releases or not.
     *
     * @var string $catalogTransferStatus
     */
    private $catalogTransferStatus = null;

    /**
     * A Composite containing details of one or more Releases that are confirmed to be included in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @var \DDEX\CT\CT_100\ConfirmedReleaseListType $confirmedReleaseList
     */
    private $confirmedReleaseList = null;

    /**
     * A Composite containing details of one or more Releases that are rejected from inclusion in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @var \DDEX\CT\CT_100\RejectedReleaseListType $rejectedReleaseList
     */
    private $rejectedReleaseList = null;

    /**
     * A Composite containing details of one or more Releases that have not yet been processed.
     *
     * @var \DDEX\CT\CT_100\PendingReleaseListType $pendingReleaseList
     */
    private $pendingReleaseList = null;

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
     * The MessageHeader for the CatalogTransferConfirmation.
     *
     * @return \DDEX\CT\CT_100\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the CatalogTransferConfirmation.
     *
     * @param \DDEX\CT\CT_100\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\CT\CT_100\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @return \DDEX\CT\CT_100\ProprietaryIdType
     */
    public function getCatalogTransferId()
    {
        return $this->catalogTransferId;
    }

    /**
     * Sets a new catalogTransferId
     *
     * A Composite containing details of an Identifier of the CatalogTransfer.
     *
     * @param \DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId
     * @return self
     */
    public function setCatalogTransferId(\DDEX\CT\CT_100\ProprietaryIdType $catalogTransferId)
    {
        $this->catalogTransferId = $catalogTransferId;
        return $this;
    }

    /**
     * Gets as catalogTransferStatus
     *
     * A Status of the CatalogTransfer indicating to the MessageRecipient whether the CatalogTransfer is confirmed for all Releases or not.
     *
     * @return string
     */
    public function getCatalogTransferStatus()
    {
        return $this->catalogTransferStatus;
    }

    /**
     * Sets a new catalogTransferStatus
     *
     * A Status of the CatalogTransfer indicating to the MessageRecipient whether the CatalogTransfer is confirmed for all Releases or not.
     *
     * @param string $catalogTransferStatus
     * @return self
     */
    public function setCatalogTransferStatus($catalogTransferStatus)
    {
        $this->catalogTransferStatus = $catalogTransferStatus;
        return $this;
    }

    /**
     * Gets as confirmedReleaseList
     *
     * A Composite containing details of one or more Releases that are confirmed to be included in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @return \DDEX\CT\CT_100\ConfirmedReleaseListType
     */
    public function getConfirmedReleaseList()
    {
        return $this->confirmedReleaseList;
    }

    /**
     * Sets a new confirmedReleaseList
     *
     * A Composite containing details of one or more Releases that are confirmed to be included in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @param \DDEX\CT\CT_100\ConfirmedReleaseListType $confirmedReleaseList
     * @return self
     */
    public function setConfirmedReleaseList(?\DDEX\CT\CT_100\ConfirmedReleaseListType $confirmedReleaseList = null)
    {
        $this->confirmedReleaseList = $confirmedReleaseList;
        return $this;
    }

    /**
     * Gets as rejectedReleaseList
     *
     * A Composite containing details of one or more Releases that are rejected from inclusion in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @return \DDEX\CT\CT_100\RejectedReleaseListType
     */
    public function getRejectedReleaseList()
    {
        return $this->rejectedReleaseList;
    }

    /**
     * Sets a new rejectedReleaseList
     *
     * A Composite containing details of one or more Releases that are rejected from inclusion in the CatalogTransfer. At least one of the Elements ConfirmedReleaseList and RejectedReleaseList needs to be provided.
     *
     * @param \DDEX\CT\CT_100\RejectedReleaseListType $rejectedReleaseList
     * @return self
     */
    public function setRejectedReleaseList(?\DDEX\CT\CT_100\RejectedReleaseListType $rejectedReleaseList = null)
    {
        $this->rejectedReleaseList = $rejectedReleaseList;
        return $this;
    }

    /**
     * Gets as pendingReleaseList
     *
     * A Composite containing details of one or more Releases that have not yet been processed.
     *
     * @return \DDEX\CT\CT_100\PendingReleaseListType
     */
    public function getPendingReleaseList()
    {
        return $this->pendingReleaseList;
    }

    /**
     * Sets a new pendingReleaseList
     *
     * A Composite containing details of one or more Releases that have not yet been processed.
     *
     * @param \DDEX\CT\CT_100\PendingReleaseListType $pendingReleaseList
     * @return self
     */
    public function setPendingReleaseList(?\DDEX\CT\CT_100\PendingReleaseListType $pendingReleaseList = null)
    {
        $this->pendingReleaseList = $pendingReleaseList;
        return $this;
    }
}


<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing SupplementalDocumentType
 *
 * A Composite containing details of a document.
 * XSD Type: SupplementalDocument
 */
class SupplementalDocumentType
{
    /**
     * A Type of document sent in this Message.
     *
     * @var string $documentType
     */
    private $documentType = null;

    /**
     * A Composite containing details of an Identifier of a previously sent document.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $referencedDocumentId
     */
    private $referencedDocumentId = null;

    /**
     * A URL of the PDF File of the contract.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A Composite containing details of the Identifier of the document sent in this Message, for future reference.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $documentId
     */
    private $documentId = null;

    /**
     * Gets as documentType
     *
     * A Type of document sent in this Message.
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * A Type of document sent in this Message.
     *
     * @param string $documentType
     * @return self
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Gets as referencedDocumentId
     *
     * A Composite containing details of an Identifier of a previously sent document.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType
     */
    public function getReferencedDocumentId()
    {
        return $this->referencedDocumentId;
    }

    /**
     * Sets a new referencedDocumentId
     *
     * A Composite containing details of an Identifier of a previously sent document.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $referencedDocumentId
     * @return self
     */
    public function setReferencedDocumentId(?\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $referencedDocumentId = null)
    {
        $this->referencedDocumentId = $referencedDocumentId;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL of the PDF File of the contract.
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
     * A URL of the PDF File of the contract.
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
     * Gets as documentId
     *
     * A Composite containing details of the Identifier of the document sent in this Message, for future reference.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Sets a new documentId
     *
     * A Composite containing details of the Identifier of the document sent in this Message, for future reference.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $documentId
     * @return self
     */
    public function setDocumentId(?\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $documentId = null)
    {
        $this->documentId = $documentId;
        return $this;
    }
}


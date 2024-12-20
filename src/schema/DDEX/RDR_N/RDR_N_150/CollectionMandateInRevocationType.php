<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing CollectionMandateInRevocationType
 *
 * A Composite containing details of a collection Mandate.
 * XSD Type: CollectionMandateInRevocation
 */
class CollectionMandateInRevocationType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ProprietaryIdType[] $mandateId
     */
    private $mandateId = [
        
    ];

    /**
     * A Composite containing details of an assignee of a collection Mandate (this will be a CollectiveManagementOrganization).
     *
     * @var \DDEX\RDR_N\RDR_N_150\CollectionMandateAssigneeType $collectionMandateAssignee
     */
    private $collectionMandateAssignee = null;

    /**
     * A Type of the collection Mandate.
     *
     * @var string $collectionMandateType
     */
    private $collectionMandateType = null;

    /**
     * Adds as mandateId
     *
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ProprietaryIdType $mandateId
     */
    public function addToMandateId(\DDEX\RDR_N\RDR_N_150\ProprietaryIdType $mandateId)
    {
        $this->mandateId[] = $mandateId;
        return $this;
    }

    /**
     * isset mandateId
     *
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMandateId($index)
    {
        return isset($this->mandateId[$index]);
    }

    /**
     * unset mandateId
     *
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMandateId($index)
    {
        unset($this->mandateId[$index]);
    }

    /**
     * Gets as mandateId
     *
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ProprietaryIdType[]
     */
    public function getMandateId()
    {
        return $this->mandateId;
    }

    /**
     * Sets a new mandateId
     *
     * A Composite containing details of a ProprietaryIdentifier of the collection Mandate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ProprietaryIdType[] $mandateId
     * @return self
     */
    public function setMandateId(array $mandateId = null)
    {
        $this->mandateId = $mandateId;
        return $this;
    }

    /**
     * Gets as collectionMandateAssignee
     *
     * A Composite containing details of an assignee of a collection Mandate (this will be a CollectiveManagementOrganization).
     *
     * @return \DDEX\RDR_N\RDR_N_150\CollectionMandateAssigneeType
     */
    public function getCollectionMandateAssignee()
    {
        return $this->collectionMandateAssignee;
    }

    /**
     * Sets a new collectionMandateAssignee
     *
     * A Composite containing details of an assignee of a collection Mandate (this will be a CollectiveManagementOrganization).
     *
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateAssigneeType $collectionMandateAssignee
     * @return self
     */
    public function setCollectionMandateAssignee(\DDEX\RDR_N\RDR_N_150\CollectionMandateAssigneeType $collectionMandateAssignee)
    {
        $this->collectionMandateAssignee = $collectionMandateAssignee;
        return $this;
    }

    /**
     * Gets as collectionMandateType
     *
     * A Type of the collection Mandate.
     *
     * @return string
     */
    public function getCollectionMandateType()
    {
        return $this->collectionMandateType;
    }

    /**
     * Sets a new collectionMandateType
     *
     * A Type of the collection Mandate.
     *
     * @param string $collectionMandateType
     * @return self
     */
    public function setCollectionMandateType($collectionMandateType)
    {
        $this->collectionMandateType = $collectionMandateType;
        return $this;
    }
}


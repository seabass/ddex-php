<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing CollectionMandateAssertionType
 *
 * A Composite containing details of an Assertion of collection Mandates.
 * XSD Type: CollectionMandateAssertion
 */
class CollectionMandateAssertionType
{
    /**
     * A Composite containing details of an assigner of a collection Mandate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CollectionMandateAssignerType $collectionMandateAssigner
     */
    private $collectionMandateAssigner = null;

    /**
     * A Composite containing details of a collection Mandate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\AssignedCollectionMandateType[] $assignedCollectionMandate
     */
    private $assignedCollectionMandate = [
        
    ];

    /**
     * Gets as collectionMandateAssigner
     *
     * A Composite containing details of an assigner of a collection Mandate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CollectionMandateAssignerType
     */
    public function getCollectionMandateAssigner()
    {
        return $this->collectionMandateAssigner;
    }

    /**
     * Sets a new collectionMandateAssigner
     *
     * A Composite containing details of an assigner of a collection Mandate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateAssignerType $collectionMandateAssigner
     * @return self
     */
    public function setCollectionMandateAssigner(\DDEX\RDR_N\RDR_N_150\CollectionMandateAssignerType $collectionMandateAssigner)
    {
        $this->collectionMandateAssigner = $collectionMandateAssigner;
        return $this;
    }

    /**
     * Adds as assignedCollectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\AssignedCollectionMandateType $assignedCollectionMandate
     */
    public function addToAssignedCollectionMandate(\DDEX\RDR_N\RDR_N_150\AssignedCollectionMandateType $assignedCollectionMandate)
    {
        $this->assignedCollectionMandate[] = $assignedCollectionMandate;
        return $this;
    }

    /**
     * isset assignedCollectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignedCollectionMandate($index)
    {
        return isset($this->assignedCollectionMandate[$index]);
    }

    /**
     * unset assignedCollectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignedCollectionMandate($index)
    {
        unset($this->assignedCollectionMandate[$index]);
    }

    /**
     * Gets as assignedCollectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\AssignedCollectionMandateType[]
     */
    public function getAssignedCollectionMandate()
    {
        return $this->assignedCollectionMandate;
    }

    /**
     * Sets a new assignedCollectionMandate
     *
     * A Composite containing details of a collection Mandate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\AssignedCollectionMandateType[] $assignedCollectionMandate
     * @return self
     */
    public function setAssignedCollectionMandate(array $assignedCollectionMandate)
    {
        $this->assignedCollectionMandate = $assignedCollectionMandate;
        return $this;
    }
}


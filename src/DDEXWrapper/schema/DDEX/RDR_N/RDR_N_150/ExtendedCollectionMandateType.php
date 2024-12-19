<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing ExtendedCollectionMandateType
 *
 * A Composite containing details of a collection Mandate.
 * XSD Type: ExtendedCollectionMandate
 */
class ExtendedCollectionMandateType
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
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @var \DDEX\RDR_N\RDR_N_150\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * The StartDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $collectionMandateStartDate
     */
    private $collectionMandateStartDate = null;

    /**
     * The EndDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @var string $collectionMandateEndDate
     */
    private $collectionMandateEndDate = null;

    /**
     * A Status of the collection Mandate.
     *
     * @var string $collectionMandateStatus
     */
    private $collectionMandateStatus = null;

    /**
     * An Annotation of the collection Mandate.
     *
     * @var string $collectionMandateNote
     */
    private $collectionMandateNote = null;

    /**
     * A Composite containing details of a Conflict.
     *
     * @var \DDEX\RDR_N\RDR_N_150\CollectionMandateConflictType[] $collectionMandateConflict
     */
    private $collectionMandateConflict = [
        
    ];

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

    /**
     * Adds as territoryCode
     *
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the collection Mandate details apply. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the collection Mandate details do not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType $useType
     */
    public function addToUseType(\DDEX\RDR_N\RDR_N_150\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseType($index)
    {
        return isset($this->useType[$index]);
    }

    /**
     * unset useType
     *
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseType($index)
    {
        unset($this->useType[$index]);
    }

    /**
     * Gets as useType
     *
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @return \DDEX\RDR_N\RDR_N_150\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a usage associated with the collection Mandate.
     *
     * @param \DDEX\RDR_N\RDR_N_150\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Gets as collectionMandateStartDate
     *
     * The StartDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getCollectionMandateStartDate()
    {
        return $this->collectionMandateStartDate;
    }

    /**
     * Sets a new collectionMandateStartDate
     *
     * The StartDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $collectionMandateStartDate
     * @return self
     */
    public function setCollectionMandateStartDate($collectionMandateStartDate)
    {
        $this->collectionMandateStartDate = $collectionMandateStartDate;
        return $this;
    }

    /**
     * Gets as collectionMandateEndDate
     *
     * The EndDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @return string
     */
    public function getCollectionMandateEndDate()
    {
        return $this->collectionMandateEndDate;
    }

    /**
     * Sets a new collectionMandateEndDate
     *
     * The EndDate of the collection Mandate (in ISO 8601 format). This is a string with the syntax YYYY[-MM[-DD]].
     *
     * @param string $collectionMandateEndDate
     * @return self
     */
    public function setCollectionMandateEndDate($collectionMandateEndDate)
    {
        $this->collectionMandateEndDate = $collectionMandateEndDate;
        return $this;
    }

    /**
     * Gets as collectionMandateStatus
     *
     * A Status of the collection Mandate.
     *
     * @return string
     */
    public function getCollectionMandateStatus()
    {
        return $this->collectionMandateStatus;
    }

    /**
     * Sets a new collectionMandateStatus
     *
     * A Status of the collection Mandate.
     *
     * @param string $collectionMandateStatus
     * @return self
     */
    public function setCollectionMandateStatus($collectionMandateStatus)
    {
        $this->collectionMandateStatus = $collectionMandateStatus;
        return $this;
    }

    /**
     * Gets as collectionMandateNote
     *
     * An Annotation of the collection Mandate.
     *
     * @return string
     */
    public function getCollectionMandateNote()
    {
        return $this->collectionMandateNote;
    }

    /**
     * Sets a new collectionMandateNote
     *
     * An Annotation of the collection Mandate.
     *
     * @param string $collectionMandateNote
     * @return self
     */
    public function setCollectionMandateNote($collectionMandateNote)
    {
        $this->collectionMandateNote = $collectionMandateNote;
        return $this;
    }

    /**
     * Adds as collectionMandateConflict
     *
     * A Composite containing details of a Conflict.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateConflictType $collectionMandateConflict
     */
    public function addToCollectionMandateConflict(\DDEX\RDR_N\RDR_N_150\CollectionMandateConflictType $collectionMandateConflict)
    {
        $this->collectionMandateConflict[] = $collectionMandateConflict;
        return $this;
    }

    /**
     * isset collectionMandateConflict
     *
     * A Composite containing details of a Conflict.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionMandateConflict($index)
    {
        return isset($this->collectionMandateConflict[$index]);
    }

    /**
     * unset collectionMandateConflict
     *
     * A Composite containing details of a Conflict.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionMandateConflict($index)
    {
        unset($this->collectionMandateConflict[$index]);
    }

    /**
     * Gets as collectionMandateConflict
     *
     * A Composite containing details of a Conflict.
     *
     * @return \DDEX\RDR_N\RDR_N_150\CollectionMandateConflictType[]
     */
    public function getCollectionMandateConflict()
    {
        return $this->collectionMandateConflict;
    }

    /**
     * Sets a new collectionMandateConflict
     *
     * A Composite containing details of a Conflict.
     *
     * @param \DDEX\RDR_N\RDR_N_150\CollectionMandateConflictType[] $collectionMandateConflict
     * @return self
     */
    public function setCollectionMandateConflict(array $collectionMandateConflict = null)
    {
        $this->collectionMandateConflict = $collectionMandateConflict;
        return $this;
    }
}


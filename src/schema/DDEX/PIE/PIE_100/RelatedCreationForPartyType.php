<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing RelatedCreationForPartyType
 *
 * A Composite containing details of a related Creation (a Work, a Release or a Resource).
 * Explanatory Note: This Composite is named RelatedCreationForParty to disambiguate it from the basic RelatedCreation Composite.
 * XSD Type: RelatedCreationForParty
 */
class RelatedCreationForPartyType
{
    /**
     * A Flag indicating whether the relationship to the Creation is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
     *
     * @var bool $isFalse
     */
    private $isFalse = null;

    /**
     * A Flag indicating whether the relationship to the Creation is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
     *
     * @var bool $isConfidential
     */
    private $isConfidential = null;

    /**
     * A Flag indicating whether the Creation is the first one to which the relationship applies (=true) or not (=false).
     *
     * @var bool $isFirstCreation
     */
    private $isFirstCreation = null;

    /**
     * A Flag indicating whether the Creation is the last one to which the relationship applies (=true) or not (=false).
     *
     * @var bool $isLastCreation
     */
    private $isLastCreation = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * The Type of the Creation.
     *
     * @var string $creationType
     */
    private $creationType = null;

    /**
     * A Composite containing details of the Party's contribution.
     *
     * @var \DDEX\PIE\PIE_100\ContributionType $contribution
     */
    private $contribution = null;

    /**
     * A Composite containing details of a ReleaseId.
     *
     * @var \DDEX\PIE\PIE_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a ResourceId.
     *
     * @var \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId
     */
    private $resourceId = null;

    /**
     * A Composite containing details of a MusicalWorkId.
     *
     * @var \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId
     */
    private $musicalWorkId = null;

    /**
     * A Composite containing details of a Description for the Creation.
     *
     * @var \DDEX\PIE\PIE_100\CreationDescriptionType $creationDescription
     */
    private $creationDescription = null;

    /**
     * A Composite containing details of a Description for the relationship.
     *
     * @var \DDEX\PIE\PIE_100\DescriptionType[] $relationshipDescription
     */
    private $relationshipDescription = [
        
    ];

    /**
     * A Contract in which the Party and the related Creation are involved.
     *
     * @var string $contract
     */
    private $contract = null;

    /**
     * Gets as isFalse
     *
     * A Flag indicating whether the relationship to the Creation is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
     *
     * @return bool
     */
    public function getIsFalse()
    {
        return $this->isFalse;
    }

    /**
     * Sets a new isFalse
     *
     * A Flag indicating whether the relationship to the Creation is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
     *
     * @param bool $isFalse
     * @return self
     */
    public function setIsFalse($isFalse)
    {
        $this->isFalse = $isFalse;
        return $this;
    }

    /**
     * Gets as isConfidential
     *
     * A Flag indicating whether the relationship to the Creation is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
     *
     * @return bool
     */
    public function getIsConfidential()
    {
        return $this->isConfidential;
    }

    /**
     * Sets a new isConfidential
     *
     * A Flag indicating whether the relationship to the Creation is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
     *
     * @param bool $isConfidential
     * @return self
     */
    public function setIsConfidential($isConfidential)
    {
        $this->isConfidential = $isConfidential;
        return $this;
    }

    /**
     * Gets as isFirstCreation
     *
     * A Flag indicating whether the Creation is the first one to which the relationship applies (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsFirstCreation()
    {
        return $this->isFirstCreation;
    }

    /**
     * Sets a new isFirstCreation
     *
     * A Flag indicating whether the Creation is the first one to which the relationship applies (=true) or not (=false).
     *
     * @param bool $isFirstCreation
     * @return self
     */
    public function setIsFirstCreation($isFirstCreation)
    {
        $this->isFirstCreation = $isFirstCreation;
        return $this;
    }

    /**
     * Gets as isLastCreation
     *
     * A Flag indicating whether the Creation is the last one to which the relationship applies (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsLastCreation()
    {
        return $this->isLastCreation;
    }

    /**
     * Sets a new isLastCreation
     *
     * A Flag indicating whether the Creation is the last one to which the relationship applies (=true) or not (=false).
     *
     * @param bool $isLastCreation
     * @return self
     */
    public function setIsLastCreation($isLastCreation)
    {
        $this->isLastCreation = $isLastCreation;
        return $this;
    }

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as creationType
     *
     * The Type of the Creation.
     *
     * @return string
     */
    public function getCreationType()
    {
        return $this->creationType;
    }

    /**
     * Sets a new creationType
     *
     * The Type of the Creation.
     *
     * @param string $creationType
     * @return self
     */
    public function setCreationType($creationType)
    {
        $this->creationType = $creationType;
        return $this;
    }

    /**
     * Gets as contribution
     *
     * A Composite containing details of the Party's contribution.
     *
     * @return \DDEX\PIE\PIE_100\ContributionType
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Sets a new contribution
     *
     * A Composite containing details of the Party's contribution.
     *
     * @param \DDEX\PIE\PIE_100\ContributionType $contribution
     * @return self
     */
    public function setContribution(\DDEX\PIE\PIE_100\ContributionType $contribution)
    {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @return \DDEX\PIE\PIE_100\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of a ReleaseId.
     *
     * @param \DDEX\PIE\PIE_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\PIE\PIE_100\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @return \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Sets a new resourceId
     *
     * A Composite containing details of a ResourceId.
     *
     * @param \DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId
     * @return self
     */
    public function setResourceId(?\DDEX\PIE\PIE_100\ResourceIdWithoutFlagType $resourceId = null)
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * Gets as musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @return \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId.
     *
     * @param \DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(?\DDEX\PIE\PIE_100\MusicalWorkIdWithoutFlagType $musicalWorkId = null)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as creationDescription
     *
     * A Composite containing details of a Description for the Creation.
     *
     * @return \DDEX\PIE\PIE_100\CreationDescriptionType
     */
    public function getCreationDescription()
    {
        return $this->creationDescription;
    }

    /**
     * Sets a new creationDescription
     *
     * A Composite containing details of a Description for the Creation.
     *
     * @param \DDEX\PIE\PIE_100\CreationDescriptionType $creationDescription
     * @return self
     */
    public function setCreationDescription(?\DDEX\PIE\PIE_100\CreationDescriptionType $creationDescription = null)
    {
        $this->creationDescription = $creationDescription;
        return $this;
    }

    /**
     * Adds as relationshipDescription
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DescriptionType $relationshipDescription
     */
    public function addToRelationshipDescription(\DDEX\PIE\PIE_100\DescriptionType $relationshipDescription)
    {
        $this->relationshipDescription[] = $relationshipDescription;
        return $this;
    }

    /**
     * isset relationshipDescription
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelationshipDescription($index)
    {
        return isset($this->relationshipDescription[$index]);
    }

    /**
     * unset relationshipDescription
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelationshipDescription($index)
    {
        unset($this->relationshipDescription[$index]);
    }

    /**
     * Gets as relationshipDescription
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @return \DDEX\PIE\PIE_100\DescriptionType[]
     */
    public function getRelationshipDescription()
    {
        return $this->relationshipDescription;
    }

    /**
     * Sets a new relationshipDescription
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param \DDEX\PIE\PIE_100\DescriptionType[] $relationshipDescription
     * @return self
     */
    public function setRelationshipDescription(array $relationshipDescription = null)
    {
        $this->relationshipDescription = $relationshipDescription;
        return $this;
    }

    /**
     * Gets as contract
     *
     * A Contract in which the Party and the related Creation are involved.
     *
     * @return string
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * A Contract in which the Party and the related Creation are involved.
     *
     * @param string $contract
     * @return self
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
        return $this;
    }
}


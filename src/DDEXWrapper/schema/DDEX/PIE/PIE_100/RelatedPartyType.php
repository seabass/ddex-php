<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing RelatedPartyType
 *
 * A Composite containing details of a related Party.
 * XSD Type: RelatedParty
 */
class RelatedPartyType
{
    /**
     * A Flag indicating whether the relationship to the Party is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
     *
     * @var bool $isFalse
     */
    private $isFalse = null;

    /**
     * A Flag indicating whether the relationship to the Party is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
     *
     * @var bool $isConfidential
     */
    private $isConfidential = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Type of relationship between two Parties.
     *
     * @var \DDEX\PIE\PIE_100\PartyRelationshipTypeType $partyRelationshipType
     */
    private $partyRelationshipType = null;

    /**
     * A business Purpose for which the two Parties can be treated as the same.
     *
     * @var string $businessPurpose
     */
    private $businessPurpose = null;

    /**
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @var string $partyRelatedPartyReference
     */
    private $partyRelatedPartyReference = null;

    /**
     * A Composite containing details of the PartyId for the Party.
     *
     * @var \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType $partyId
     */
    private $partyId = null;

    /**
     * A Composite containing details of a PartyName.
     *
     * @var \DDEX\PIE\PIE_100\PartyNameType $partyName
     */
    private $partyName = null;

    /**
     * A Composite containing details of a Description for the relationship.
     *
     * @var \DDEX\PIE\PIE_100\DescriptionType[] $description
     */
    private $description = [
        
    ];

    /**
     * A Contract in which the Party and the related Party are involved.
     *
     * @var string $contract
     */
    private $contract = null;

    /**
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\PIE\PIE_100\ValidityPeriodType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @var \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     */
    private $relatedCreation = [
        
    ];

    /**
     * Gets as isFalse
     *
     * A Flag indicating whether the relationship to the Party is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
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
     * A Flag indicating whether the relationship to the Party is not true (=true) or whether it is (=false). Absence of this Flag means that the relationship is true.
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
     * A Flag indicating whether the relationship to the Party is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
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
     * A Flag indicating whether the relationship to the Party is confidential (=true) or not (=false). Absence of this Flag means that the relationship is not confidential.
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
     * Gets as partyRelationshipType
     *
     * A Type of relationship between two Parties.
     *
     * @return \DDEX\PIE\PIE_100\PartyRelationshipTypeType
     */
    public function getPartyRelationshipType()
    {
        return $this->partyRelationshipType;
    }

    /**
     * Sets a new partyRelationshipType
     *
     * A Type of relationship between two Parties.
     *
     * @param \DDEX\PIE\PIE_100\PartyRelationshipTypeType $partyRelationshipType
     * @return self
     */
    public function setPartyRelationshipType(\DDEX\PIE\PIE_100\PartyRelationshipTypeType $partyRelationshipType)
    {
        $this->partyRelationshipType = $partyRelationshipType;
        return $this;
    }

    /**
     * Gets as businessPurpose
     *
     * A business Purpose for which the two Parties can be treated as the same.
     *
     * @return string
     */
    public function getBusinessPurpose()
    {
        return $this->businessPurpose;
    }

    /**
     * Sets a new businessPurpose
     *
     * A business Purpose for which the two Parties can be treated as the same.
     *
     * @param string $businessPurpose
     * @return self
     */
    public function setBusinessPurpose($businessPurpose)
    {
        $this->businessPurpose = $businessPurpose;
        return $this;
    }

    /**
     * Gets as partyRelatedPartyReference
     *
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @return string
     */
    public function getPartyRelatedPartyReference()
    {
        return $this->partyRelatedPartyReference;
    }

    /**
     * Sets a new partyRelatedPartyReference
     *
     * A Reference for a related Party (specific to this Message). This is a LocalPartyAnchorReference starting with the letter P.
     *
     * @param string $partyRelatedPartyReference
     * @return self
     */
    public function setPartyRelatedPartyReference($partyRelatedPartyReference)
    {
        $this->partyRelatedPartyReference = $partyRelatedPartyReference;
        return $this;
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @return \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party.
     *
     * @param \DDEX\PIE\PIE_100\DetailedPartyIdForPartyType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\PIE\PIE_100\DetailedPartyIdForPartyType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of a PartyName.
     *
     * @return \DDEX\PIE\PIE_100\PartyNameType
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of a PartyName.
     *
     * @param \DDEX\PIE\PIE_100\PartyNameType $partyName
     * @return self
     */
    public function setPartyName(?\DDEX\PIE\PIE_100\PartyNameType $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\DescriptionType $description
     */
    public function addToDescription(\DDEX\PIE\PIE_100\DescriptionType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @return \DDEX\PIE\PIE_100\DescriptionType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing details of a Description for the relationship.
     *
     * @param \DDEX\PIE\PIE_100\DescriptionType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as contract
     *
     * A Contract in which the Party and the related Party are involved.
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
     * A Contract in which the Party and the related Party are involved.
     *
     * @param string $contract
     * @return self
     */
    public function setContract($contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ValidityPeriodType $validityPeriod
     */
    public function addToValidityPeriod(\DDEX\PIE\PIE_100\ValidityPeriodType $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\PIE\PIE_100\ValidityPeriodType[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the relationship is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\PIE\PIE_100\ValidityPeriodType[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation
     */
    public function addToRelatedCreation(\DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation)
    {
        $this->relatedCreation[] = $relatedCreation;
        return $this;
    }

    /**
     * isset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedCreation($index)
    {
        return isset($this->relatedCreation[$index]);
    }

    /**
     * unset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedCreation($index)
    {
        unset($this->relatedCreation[$index]);
    }

    /**
     * Gets as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @return \DDEX\PIE\PIE_100\RelatedCreationForPartyType[]
     */
    public function getRelatedCreation()
    {
        return $this->relatedCreation;
    }

    /**
     * Sets a new relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     * @return self
     */
    public function setRelatedCreation(array $relatedCreation = null)
    {
        $this->relatedCreation = $relatedCreation;
        return $this;
    }
}


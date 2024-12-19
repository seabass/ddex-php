<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing ConditionWithSupplementalDocumentType
 *
 * A Composite containing details of conditions and/or limitations.
 * Explanatory Note: This Composite is named ConditionWithSupplementalDocument to disambiguate it from the basic Condition Composite.
 * XSD Type: ConditionWithSupplementalDocument
 */
class ConditionWithSupplementalDocumentType
{
    /**
     * A Territory to which the Condition applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CurrentTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * The EffectiveTransferDate for which the Condition is valid.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\EventDateType $effectiveTransferDate
     */
    private $effectiveTransferDate = null;

    /**
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\RetentionType[] $retention
     */
    private $retention = [
        
    ];

    /**
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod
     */
    private $collectionPeriod = null;

    /**
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @var string[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @var string[] $resourceType
     */
    private $resourceType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\UseTypeForWorksNotificationLicensingType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\CommercialModelTypeForWorksNotificationLicensingType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\PhysicalCarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\SupplementalDocumentType[] $supplementalDocument
     */
    private $supplementalDocument = [
        
    ];

    /**
     * Gets as territoryCode
     *
     * A Territory to which the Condition applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CurrentTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the Condition applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CurrentTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(\DDEX\MWN\MWN_US_LOD_100\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Gets as effectiveTransferDate
     *
     * The EffectiveTransferDate for which the Condition is valid.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\EventDateType
     */
    public function getEffectiveTransferDate()
    {
        return $this->effectiveTransferDate;
    }

    /**
     * Sets a new effectiveTransferDate
     *
     * The EffectiveTransferDate for which the Condition is valid.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\EventDateType $effectiveTransferDate
     * @return self
     */
    public function setEffectiveTransferDate(\DDEX\MWN\MWN_US_LOD_100\EventDateType $effectiveTransferDate)
    {
        $this->effectiveTransferDate = $effectiveTransferDate;
        return $this;
    }

    /**
     * Adds as retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\RetentionType $retention
     */
    public function addToRetention(\DDEX\MWN\MWN_US_LOD_100\RetentionType $retention)
    {
        $this->retention[] = $retention;
        return $this;
    }

    /**
     * isset retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetention($index)
    {
        return isset($this->retention[$index]);
    }

    /**
     * unset retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetention($index)
    {
        unset($this->retention[$index]);
    }

    /**
     * Gets as retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\RetentionType[]
     */
    public function getRetention()
    {
        return $this->retention;
    }

    /**
     * Sets a new retention
     *
     * A Composite containing details about a retention date applying to MusicalWorks in the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher retains rights for certain MusicalWorks in the Catalog.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\RetentionType[] $retention
     * @return self
     */
    public function setRetention(array $retention = null)
    {
        $this->retention = $retention;
        return $this;
    }

    /**
     * Gets as collectionPeriod
     *
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType
     */
    public function getCollectionPeriod()
    {
        return $this->collectionPeriod;
    }

    /**
     * Sets a new collectionPeriod
     *
     * A Composite containing details about the CollectionPeriod applying to the CatalogTransfer. This information should be provided by the AcquiringPublisher if it knows that the RelinquishingPublisher is collecting royalties for a period after the EffectiveTransferDate.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod
     * @return self
     */
    public function setCollectionPeriod(?\DDEX\MWN\MWN_US_LOD_100\ValidityPeriodType $collectionPeriod = null)
    {
        $this->collectionPeriod = $collectionPeriod;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @return self
     * @param string $rightsType
     */
    public function addToRightsType($rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsType($index)
    {
        return isset($this->rightsType[$index]);
    }

    /**
     * unset rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsType($index)
    {
        unset($this->rightsType[$index]);
    }

    /**
     * Gets as rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @return string[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @param string $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Adds as resourceType
     *
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @return self
     * @param string $resourceType
     */
    public function addToResourceType($resourceType)
    {
        $this->resourceType[] = $resourceType;
        return $this;
    }

    /**
     * isset resourceType
     *
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceType($index)
    {
        return isset($this->resourceType[$index]);
    }

    /**
     * unset resourceType
     *
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceType($index)
    {
        unset($this->resourceType[$index]);
    }

    /**
     * Gets as resourceType
     *
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @return string[]
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A Type of the Resource.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/resource-types
     *
     * @param string $resourceType
     * @return self
     */
    public function setResourceType(array $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\UseTypeForWorksNotificationLicensingType $useType
     */
    public function addToUseType(\DDEX\MWN\MWN_US_LOD_100\UseTypeForWorksNotificationLicensingType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\UseTypeForWorksNotificationLicensingType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\UseTypeForWorksNotificationLicensingType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\CommercialModelTypeForWorksNotificationLicensingType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\MWN\MWN_US_LOD_100\CommercialModelTypeForWorksNotificationLicensingType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommercialModelType($index)
    {
        return isset($this->commercialModelType[$index]);
    }

    /**
     * unset commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommercialModelType($index)
    {
        unset($this->commercialModelType[$index]);
    }

    /**
     * Gets as commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\CommercialModelTypeForWorksNotificationLicensingType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\CommercialModelTypeForWorksNotificationLicensingType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\PhysicalCarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\MWN\MWN_US_LOD_100\PhysicalCarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierType($index)
    {
        return isset($this->carrierType[$index]);
    }

    /**
     * unset carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierType($index)
    {
        unset($this->carrierType[$index]);
    }

    /**
     * Gets as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\PhysicalCarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\PhysicalCarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LOD_100\SupplementalDocumentType $supplementalDocument
     */
    public function addToSupplementalDocument(\DDEX\MWN\MWN_US_LOD_100\SupplementalDocumentType $supplementalDocument)
    {
        $this->supplementalDocument[] = $supplementalDocument;
        return $this;
    }

    /**
     * isset supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalDocument($index)
    {
        return isset($this->supplementalDocument[$index]);
    }

    /**
     * unset supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalDocument($index)
    {
        unset($this->supplementalDocument[$index]);
    }

    /**
     * Gets as supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\SupplementalDocumentType[]
     */
    public function getSupplementalDocument()
    {
        return $this->supplementalDocument;
    }

    /**
     * Sets a new supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the condition.
     *
     * @param \DDEX\MWN\MWN_US_LOD_100\SupplementalDocumentType[] $supplementalDocument
     * @return self
     */
    public function setSupplementalDocument(array $supplementalDocument = null)
    {
        $this->supplementalDocument = $supplementalDocument;
        return $this;
    }
}


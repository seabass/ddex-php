<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing ConditionType
 *
 * A Composite containing details of conditions and/or limitations for Usages.
 * XSD Type: Condition
 */
class ConditionType
{
    /**
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @var \DDEX\MWN\MWN_100\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @var \DDEX\MWN\MWN_100\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @var \DDEX\MWN\MWN_100\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @var \DDEX\MWN\MWN_100\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DDEX\MWN\MWN_100\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DDEX\MWN\MWN_100\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the Condition is valid.
     *
     * @var \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Adds as territoryCode
     *
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\MWN\MWN_100\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the Condition applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $territoryCode
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
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode(\DDEX\MWN\MWN_100\CurrentTerritoryCodeType $excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the Condition does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right covered by the Condition. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\MWN\MWN_100\RightsTypeType $rightsType)
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
     * @return \DDEX\MWN\MWN_100\RightsTypeType[]
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
     * @param \DDEX\MWN\MWN_100\RightsTypeType[] $rightsType
     * @return self
     */
    public function setRightsType(array $rightsType = null)
    {
        $this->rightsType = $rightsType;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\UseTypeType $useType
     */
    public function addToUseType(\DDEX\MWN\MWN_100\UseTypeType $useType)
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
     * @return \DDEX\MWN\MWN_100\UseTypeType[]
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
     * @param \DDEX\MWN\MWN_100\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DDEX\MWN\MWN_100\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserInterfaceType($index)
    {
        return isset($this->userInterfaceType[$index]);
    }

    /**
     * unset userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserInterfaceType($index)
    {
        unset($this->userInterfaceType[$index]);
    }

    /**
     * Gets as userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @return \DDEX\MWN\MWN_100\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @param \DDEX\MWN\MWN_100\UserInterfaceTypeType[] $userInterfaceType
     * @return self
     */
    public function setUserInterfaceType(array $userInterfaceType = null)
    {
        $this->userInterfaceType = $userInterfaceType;
        return $this;
    }

    /**
     * Adds as distributionChannelType
     *
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DDEX\MWN\MWN_100\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributionChannelType($index)
    {
        return isset($this->distributionChannelType[$index]);
    }

    /**
     * unset distributionChannelType
     *
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributionChannelType($index)
    {
        unset($this->distributionChannelType[$index]);
    }

    /**
     * Gets as distributionChannelType
     *
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @return \DDEX\MWN\MWN_100\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @param \DDEX\MWN\MWN_100\DistributionChannelTypeType[] $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType = null)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\MWN\MWN_100\CarrierTypeType $carrierType)
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
     * @return \DDEX\MWN\MWN_100\CarrierTypeType[]
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
     * @param \DDEX\MWN\MWN_100\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Adds as commercialModelType
     *
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\MWN\MWN_100\CommercialModelTypeType $commercialModelType)
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
     * @return \DDEX\MWN\MWN_100\CommercialModelTypeType[]
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
     * @param \DDEX\MWN\MWN_100\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the Condition is valid.
     *
     * @return \DDEX\MWN\MWN_100\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the Condition is valid.
     *
     * @param \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DDEX\MWN\MWN_100\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }
}


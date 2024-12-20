<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SalesTransactionToSocietyType
 *
 * A ddex:Composite containing details of a ddex:SalesTransactions for specified Usages of a ddex:Release.
 * XSD Type: SalesTransactionToSociety
 */
class SalesTransactionToSocietyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddex:SalesTransaction as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @var \DDEX\ddexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @var \DDEX\ddexC\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @var \DDEX\ddexC\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @var \DDEX\ddexC\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Deal under which sales were transacted. The reported figures are based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient (the default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_400\DealForSocietiesType $deal
     */
    private $deal = null;

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @var \DDEX\DSR\DSR_400\SalesDataToSocietyType[] $salesData
     */
    private $salesData = [
        
    ];

    /**
     * A ddex:Flag indicating whether the ddex:SalesTransaction applies to an upgraded ddex:Release (=True) or not (=False).
     *
     * @var bool $isUpgrade
     */
    private $isUpgrade = null;

    /**
     * A ddex:Composite containing details of a ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Tariff.
     *
     * @var \DDEX\ddexC\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddex:SalesTransaction as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddex:SalesTransaction as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return self
     * @param \DDEX\ddexC\UseTypeType $useType
     */
    public function addToUseType(\DDEX\ddexC\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
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
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @return \DDEX\ddexC\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A ddex:Composite containing details of a nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer.
     *
     * @param \DDEX\ddexC\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DDEX\ddexC\UserInterfaceTypeType $userInterfaceType)
    {
        $this->userInterfaceType[] = $userInterfaceType;
        return $this;
    }

    /**
     * isset userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @return \DDEX\ddexC\UserInterfaceTypeType[]
     */
    public function getUserInterfaceType()
    {
        return $this->userInterfaceType;
    }

    /**
     * Sets a new userInterfaceType
     *
     * A ddex:Composite containing details of a physical interface by which a ddex:Consumer uses a ddex:Service or ddex:Release.
     *
     * @param \DDEX\ddexC\UserInterfaceTypeType[] $userInterfaceType
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
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return self
     * @param \DDEX\ddexC\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DDEX\ddexC\DistributionChannelTypeType $distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
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
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @return \DDEX\ddexC\DistributionChannelTypeType[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A ddex:Composite containing details of a distribution channel used to disseminate a ddex:Service or ddex:Release to a ddex:Consumer.
     *
     * @param \DDEX\ddexC\DistributionChannelTypeType[] $distributionChannelType
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
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return self
     * @param \DDEX\ddexC\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\ddexC\CarrierTypeType $carrierType)
    {
        $this->carrierType[] = $carrierType;
        return $this;
    }

    /**
     * isset carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
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
     * A ddex:Composite containing details of a ddex:Carrier.
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
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @return \DDEX\ddexC\CarrierTypeType[]
     */
    public function getCarrierType()
    {
        return $this->carrierType;
    }

    /**
     * Sets a new carrierType
     *
     * A ddex:Composite containing details of a ddex:Carrier.
     *
     * @param \DDEX\ddexC\CarrierTypeType[] $carrierType
     * @return self
     */
    public function setCarrierType(array $carrierType = null)
    {
        $this->carrierType = $carrierType;
        return $this;
    }

    /**
     * Gets as deal
     *
     * A ddex:Composite containing details of the ddex:Deal under which sales were transacted. The reported figures are based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient (the default is that 100% ownership is assumed).
     *
     * @return \DDEX\DSR\DSR_400\DealForSocietiesType
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A ddex:Composite containing details of the ddex:Deal under which sales were transacted. The reported figures are based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient (the default is that 100% ownership is assumed).
     *
     * @param \DDEX\DSR\DSR_400\DealForSocietiesType $deal
     * @return self
     */
    public function setDeal(?\DDEX\DSR\DSR_400\DealForSocietiesType $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * Adds as salesData
     *
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @return self
     * @param \DDEX\DSR\DSR_400\SalesDataToSocietyType $salesData
     */
    public function addToSalesData(\DDEX\DSR\DSR_400\SalesDataToSocietyType $salesData)
    {
        $this->salesData[] = $salesData;
        return $this;
    }

    /**
     * isset salesData
     *
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesData($index)
    {
        return isset($this->salesData[$index]);
    }

    /**
     * unset salesData
     *
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesData($index)
    {
        unset($this->salesData[$index]);
    }

    /**
     * Gets as salesData
     *
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @return \DDEX\DSR\DSR_400\SalesDataToSocietyType[]
     */
    public function getSalesData()
    {
        return $this->salesData;
    }

    /**
     * Sets a new salesData
     *
     * A ddex:Composite containing details of ddex:SalesTransactions of the ddex:Release governed by the ddex:Deal.
     *
     * @param \DDEX\DSR\DSR_400\SalesDataToSocietyType[] $salesData
     * @return self
     */
    public function setSalesData(array $salesData)
    {
        $this->salesData = $salesData;
        return $this;
    }

    /**
     * Gets as isUpgrade
     *
     * A ddex:Flag indicating whether the ddex:SalesTransaction applies to an upgraded ddex:Release (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsUpgrade()
    {
        return $this->isUpgrade;
    }

    /**
     * Sets a new isUpgrade
     *
     * A ddex:Flag indicating whether the ddex:SalesTransaction applies to an upgraded ddex:Release (=True) or not (=False).
     *
     * @param bool $isUpgrade
     * @return self
     */
    public function setIsUpgrade($isUpgrade)
    {
        $this->isUpgrade = $isUpgrade;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A ddex:Composite containing details of a ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Tariff.
     *
     * @return \DDEX\ddexC\TariffReferenceType
     */
    public function getTariffReference()
    {
        return $this->tariffReference;
    }

    /**
     * Sets a new tariffReference
     *
     * A ddex:Composite containing details of a ddex:Reference (in the form of an ddex:Identifier, ddex:Name or ddex:Description) to a ddex:TextDocument containing details of the ddex:Tariff.
     *
     * @param \DDEX\ddexC\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DDEX\ddexC\TariffReferenceType $tariffReference = null)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }
}


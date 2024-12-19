<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing SalesTransactionToRecordCompanyType
 *
 * A Composite containing details of a SalesTransaction for specified Usages of a Release.
 * XSD Type: SalesTransactionToRecordCompany
 */
class SalesTransactionToRecordCompanyType
{
    /**
     * The Language and script for the Elements of the SalesTransaction as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @var \DDEX\DSR\DSR_430\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @var \DDEX\DSR\DSR_430\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @var \DDEX\DSR\DSR_430\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DDEX\DSR\DSR_430\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_430\DealForRecordCompaniesType $deal
     */
    private $deal = null;

    /**
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
     *
     * @var \DDEX\DSR\DSR_430\SalesDataToRecordCompanyType[] $salesData
     */
    private $salesData = [
        
    ];

    /**
     * A Flag indicating whether the SalesTransaction applies to an upgraded Release (=True) or not (=False).
     *
     * @var bool $isUpgrade
     */
    private $isUpgrade = null;

    /**
     * The Flag indicating whether sales data will be forwarded by the DSP (or any Organization reporting on behalf of the DSP) to the appropriate MusicalWork Licensor (=False) or if this has to be done by the MessageRecipient (=True).
     *
     * @var bool $dataToBeForwarded
     */
    private $dataToBeForwarded = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SalesTransaction as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesTransaction as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\UseTypeType $useType
     */
    public function addToUseType(\DDEX\DSR\DSR_430\UseTypeType $useType)
    {
        $this->useType[] = $useType;
        return $this;
    }

    /**
     * isset useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
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
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @return \DDEX\DSR\DSR_430\UseTypeType[]
     */
    public function getUseType()
    {
        return $this->useType;
    }

    /**
     * Sets a new useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer.
     *
     * @param \DDEX\DSR\DSR_430\UseTypeType[] $useType
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
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DDEX\DSR\DSR_430\UserInterfaceTypeType $userInterfaceType)
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
     * @return \DDEX\DSR\DSR_430\UserInterfaceTypeType[]
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
     * @param \DDEX\DSR\DSR_430\UserInterfaceTypeType[] $userInterfaceType
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
     * @param \DDEX\DSR\DSR_430\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DDEX\DSR\DSR_430\DistributionChannelTypeType $distributionChannelType)
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
     * @return \DDEX\DSR\DSR_430\DistributionChannelTypeType[]
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
     * @param \DDEX\DSR\DSR_430\DistributionChannelTypeType[] $distributionChannelType
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
     * @param \DDEX\DSR\DSR_430\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\DSR\DSR_430\CarrierTypeType $carrierType)
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
     * @return \DDEX\DSR\DSR_430\CarrierTypeType[]
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
     * @param \DDEX\DSR\DSR_430\CarrierTypeType[] $carrierType
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
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @return \DDEX\DSR\DSR_430\DealForRecordCompaniesType
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @param \DDEX\DSR\DSR_430\DealForRecordCompaniesType $deal
     * @return self
     */
    public function setDeal(?\DDEX\DSR\DSR_430\DealForRecordCompaniesType $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * Adds as salesData
     *
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\SalesDataToRecordCompanyType $salesData
     */
    public function addToSalesData(\DDEX\DSR\DSR_430\SalesDataToRecordCompanyType $salesData)
    {
        $this->salesData[] = $salesData;
        return $this;
    }

    /**
     * isset salesData
     *
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
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
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
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
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
     *
     * @return \DDEX\DSR\DSR_430\SalesDataToRecordCompanyType[]
     */
    public function getSalesData()
    {
        return $this->salesData;
    }

    /**
     * Sets a new salesData
     *
     * A Composite containing details of SalesTransactions of the Release governed by the Deal.
     *
     * @param \DDEX\DSR\DSR_430\SalesDataToRecordCompanyType[] $salesData
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
     * A Flag indicating whether the SalesTransaction applies to an upgraded Release (=True) or not (=False).
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
     * A Flag indicating whether the SalesTransaction applies to an upgraded Release (=True) or not (=False).
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
     * Gets as dataToBeForwarded
     *
     * The Flag indicating whether sales data will be forwarded by the DSP (or any Organization reporting on behalf of the DSP) to the appropriate MusicalWork Licensor (=False) or if this has to be done by the MessageRecipient (=True).
     *
     * @return bool
     */
    public function getDataToBeForwarded()
    {
        return $this->dataToBeForwarded;
    }

    /**
     * Sets a new dataToBeForwarded
     *
     * The Flag indicating whether sales data will be forwarded by the DSP (or any Organization reporting on behalf of the DSP) to the appropriate MusicalWork Licensor (=False) or if this has to be done by the MessageRecipient (=True).
     *
     * @param bool $dataToBeForwarded
     * @return self
     */
    public function setDataToBeForwarded($dataToBeForwarded)
    {
        $this->dataToBeForwarded = $dataToBeForwarded;
        return $this;
    }
}


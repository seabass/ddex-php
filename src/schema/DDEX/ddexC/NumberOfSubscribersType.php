<?php

namespace DDEX\ddexC;

/**
 * Class representing NumberOfSubscribersType
 *
 * A ddex:Composite containing a ddex:NumberOfSubscribers (applicable only where a ddex:Subscription ddex:Service is employed).
 * XSD Type: NumberOfSubscribers
 */
class NumberOfSubscribersType
{
    /**
     * The number of ddex:Consumers using the ddex:DSP service specified for the ddex:UseType.
     *
     * @var int $quantity
     */
    private $quantity = null;

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
     * Gets as quantity
     *
     * The number of ddex:Consumers using the ddex:DSP service specified for the ddex:UseType.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of ddex:Consumers using the ddex:DSP service specified for the ddex:UseType.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
}


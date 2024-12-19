<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SalesDataGroupingToSocietyType
 *
 * A ddex:Composite containing details of the criteria by which sales reports to societies are grouped.
 * XSD Type: SalesDataGroupingToSociety
 */
class SalesDataGroupingToSocietyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:StartDate or actual Date of the sales report.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The ddex:EndDate of the sales report if different from ddex:EndDate of the transaction ddex:Period which is given in the MessageHeader.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @var string[] $postCode
     */
    private $postCode = [
        
    ];

    /**
     * The ddex:MinimumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $minimumDuration
     */
    private $minimumDuration = null;

    /**
     * The ddex:MaximumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $maximumDuration
     */
    private $maximumDuration = null;

    /**
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
     *
     * @var string[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @var string[] $customerId
     */
    private $customerId = [
        
    ];

    /**
     * The DSP's ddex:Identifier for the ddex:SalesTransaction by the ddex:Consumer in relation to the ddex:Release.
     *
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * A ddex:Composite containing the ddex:Descriptor (typically an xs:ID assigned by the ddex:DSP) of the store in which the ddex:Kiosk is located.
     *
     * @var \DDEX\ddexC\StoreLocationDescriptorType $storeLocationDescriptor
     */
    private $storeLocationDescriptor = null;

    /**
     * A ddex:Composite containing the freetext ddex:Description of a promotional activity.
     *
     * @var \DDEX\ddexC\DescriptionType $promotionalActivityDescription
     */
    private $promotionalActivityDescription = null;

    /**
     * A ddex:Composite containing details of the ddex:Deal under which sales were transacted. The reported figures are based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient (the default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_400\DealForSocietiesType $deal
     */
    private $deal = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as startDate
     *
     * The ddex:StartDate or actual Date of the sales report.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The ddex:StartDate or actual Date of the sales report.
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * The ddex:EndDate of the sales report if different from ddex:EndDate of the transaction ddex:Period which is given in the MessageHeader.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The ddex:EndDate of the sales report if different from ddex:EndDate of the transaction ddex:Period which is given in the MessageHeader.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(?\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Adds as postCode
     *
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @return self
     * @param string $postCode
     */
    public function addToPostCode($postCode)
    {
        $this->postCode[] = $postCode;
        return $this;
    }

    /**
     * isset postCode
     *
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPostCode($index)
    {
        return isset($this->postCode[$index]);
    }

    /**
     * unset postCode
     *
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPostCode($index)
    {
        unset($this->postCode[$index]);
    }

    /**
     * Gets as postCode
     *
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @return string[]
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Sets a new postCode
     *
     * A ddex:PostCode or zip code of a ddex:Consumer of the ddex:Releases.
     *
     * @param string[] $postCode
     * @return self
     */
    public function setPostCode(array $postCode = null)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * Gets as minimumDuration
     *
     * The ddex:MinimumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getMinimumDuration()
    {
        return $this->minimumDuration;
    }

    /**
     * Sets a new minimumDuration
     *
     * The ddex:MinimumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $minimumDuration
     * @return self
     */
    public function setMinimumDuration(?\DateInterval $minimumDuration = null)
    {
        $this->minimumDuration = $minimumDuration;
        return $this;
    }

    /**
     * Gets as maximumDuration
     *
     * The ddex:MaximumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getMaximumDuration()
    {
        return $this->maximumDuration;
    }

    /**
     * Sets a new maximumDuration
     *
     * The ddex:MaximumDuration of the ddex:Release contained in the SalesDataGrouping (applicable only to ddex:Release containing a single ddex:SoundRecording or ddex:MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $maximumDuration
     * @return self
     */
    public function setMaximumDuration(?\DateInterval $maximumDuration = null)
    {
        $this->maximumDuration = $maximumDuration;
        return $this;
    }

    /**
     * Adds as distributionChannelType
     *
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
     *
     * @return self
     * @param string $distributionChannelType
     */
    public function addToDistributionChannelType($distributionChannelType)
    {
        $this->distributionChannelType[] = $distributionChannelType;
        return $this;
    }

    /**
     * isset distributionChannelType
     *
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
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
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
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
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
     *
     * @return string[]
     */
    public function getDistributionChannelType()
    {
        return $this->distributionChannelType;
    }

    /**
     * Sets a new distributionChannelType
     *
     * A ddex:Type of telecommunication technology used by a ddex:Consumer to receive the ddex:Release.
     *
     * @param string $distributionChannelType
     * @return self
     */
    public function setDistributionChannelType(array $distributionChannelType = null)
    {
        $this->distributionChannelType = $distributionChannelType;
        return $this;
    }

    /**
     * Adds as customerId
     *
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @return self
     * @param string $customerId
     */
    public function addToCustomerId($customerId)
    {
        $this->customerId[] = $customerId;
        return $this;
    }

    /**
     * isset customerId
     *
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomerId($index)
    {
        return isset($this->customerId[$index]);
    }

    /**
     * unset customerId
     *
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomerId($index)
    {
        unset($this->customerId[$index]);
    }

    /**
     * Gets as customerId
     *
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @return string[]
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets a new customerId
     *
     * A DSP's ddex:Identifier for a ddex:Consumer of the ddex:Releases sold.
     *
     * @param string[] $customerId
     * @return self
     */
    public function setCustomerId(array $customerId = null)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * Gets as transactionId
     *
     * The DSP's ddex:Identifier for the ddex:SalesTransaction by the ddex:Consumer in relation to the ddex:Release.
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Sets a new transactionId
     *
     * The DSP's ddex:Identifier for the ddex:SalesTransaction by the ddex:Consumer in relation to the ddex:Release.
     *
     * @param string $transactionId
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * Gets as storeLocationDescriptor
     *
     * A ddex:Composite containing the ddex:Descriptor (typically an xs:ID assigned by the ddex:DSP) of the store in which the ddex:Kiosk is located.
     *
     * @return \DDEX\ddexC\StoreLocationDescriptorType
     */
    public function getStoreLocationDescriptor()
    {
        return $this->storeLocationDescriptor;
    }

    /**
     * Sets a new storeLocationDescriptor
     *
     * A ddex:Composite containing the ddex:Descriptor (typically an xs:ID assigned by the ddex:DSP) of the store in which the ddex:Kiosk is located.
     *
     * @param \DDEX\ddexC\StoreLocationDescriptorType $storeLocationDescriptor
     * @return self
     */
    public function setStoreLocationDescriptor(?\DDEX\ddexC\StoreLocationDescriptorType $storeLocationDescriptor = null)
    {
        $this->storeLocationDescriptor = $storeLocationDescriptor;
        return $this;
    }

    /**
     * Gets as promotionalActivityDescription
     *
     * A ddex:Composite containing the freetext ddex:Description of a promotional activity.
     *
     * @return \DDEX\ddexC\DescriptionType
     */
    public function getPromotionalActivityDescription()
    {
        return $this->promotionalActivityDescription;
    }

    /**
     * Sets a new promotionalActivityDescription
     *
     * A ddex:Composite containing the freetext ddex:Description of a promotional activity.
     *
     * @param \DDEX\ddexC\DescriptionType $promotionalActivityDescription
     * @return self
     */
    public function setPromotionalActivityDescription(?\DDEX\ddexC\DescriptionType $promotionalActivityDescription = null)
    {
        $this->promotionalActivityDescription = $promotionalActivityDescription;
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
}


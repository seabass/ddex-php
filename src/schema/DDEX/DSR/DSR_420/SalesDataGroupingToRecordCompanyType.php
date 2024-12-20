<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing SalesDataGroupingToRecordCompanyType
 *
 * A Composite containing details of the criteria by which sales reports to record companies are grouped.
 * XSD Type: SalesDataGroupingToRecordCompany
 */
class SalesDataGroupingToRecordCompanyType
{
    /**
     * The Language and script for the Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The StartDate or actual Date of the sales transaction.
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The EndDate of the sales report if different from EndDate of the transaction Period which is given in the MessageHeader.
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * A PostCode or zip code of a Consumer of the Releases.
     *
     * @var string[] $postCode
     */
    private $postCode = [
        
    ];

    /**
     * The MinimumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $minimumDuration
     */
    private $minimumDuration = null;

    /**
     * The MaximumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $maximumDuration
     */
    private $maximumDuration = null;

    /**
     * A Type of telecommunication technology used by a Consumer to receive the Release.
     *
     * @var string[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A DSP's Identifier for a Consumer of the Releases sold.
     *
     * @var string[] $customerId
     */
    private $customerId = [
        
    ];

    /**
     * The DSP's Identifier for the SalesTransaction by the Consumer in relation to the Release.
     *
     * @var string $transactionId
     */
    private $transactionId = null;

    /**
     * A Composite containing the Descriptor (typically an xs:ID assigned by the DSP) of the store in which the Kiosk is located.
     *
     * @var \DDEX\DSR\DSR_420\StoreLocationDescriptorType $storeLocationDescriptor
     */
    private $storeLocationDescriptor = null;

    /**
     * A Composite containing the freetext Description of a promotional activity.
     *
     * @var \DDEX\DSR\DSR_420\DescriptionType $promotionalActivityDescription
     */
    private $promotionalActivityDescription = null;

    /**
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_420\DealForRecordCompaniesType $deal
     */
    private $deal = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesDataGrouping as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The StartDate or actual Date of the sales transaction.
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
     * The StartDate or actual Date of the sales transaction.
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
     * The EndDate of the sales report if different from EndDate of the transaction Period which is given in the MessageHeader.
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
     * The EndDate of the sales report if different from EndDate of the transaction Period which is given in the MessageHeader.
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
     * A PostCode or zip code of a Consumer of the Releases.
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
     * A PostCode or zip code of a Consumer of the Releases.
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
     * A PostCode or zip code of a Consumer of the Releases.
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
     * A PostCode or zip code of a Consumer of the Releases.
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
     * A PostCode or zip code of a Consumer of the Releases.
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
     * The MinimumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The MinimumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The MaximumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The MaximumDuration of the Release contained in the SalesDataGrouping (applicable only to Release containing a single SoundRecording or MusicalWorkVideo) (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * A Type of telecommunication technology used by a Consumer to receive the Release.
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
     * A Type of telecommunication technology used by a Consumer to receive the Release.
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
     * A Type of telecommunication technology used by a Consumer to receive the Release.
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
     * A Type of telecommunication technology used by a Consumer to receive the Release.
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
     * A Type of telecommunication technology used by a Consumer to receive the Release.
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
     * A DSP's Identifier for a Consumer of the Releases sold.
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
     * A DSP's Identifier for a Consumer of the Releases sold.
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
     * A DSP's Identifier for a Consumer of the Releases sold.
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
     * A DSP's Identifier for a Consumer of the Releases sold.
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
     * A DSP's Identifier for a Consumer of the Releases sold.
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
     * The DSP's Identifier for the SalesTransaction by the Consumer in relation to the Release.
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
     * The DSP's Identifier for the SalesTransaction by the Consumer in relation to the Release.
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
     * A Composite containing the Descriptor (typically an xs:ID assigned by the DSP) of the store in which the Kiosk is located.
     *
     * @return \DDEX\DSR\DSR_420\StoreLocationDescriptorType
     */
    public function getStoreLocationDescriptor()
    {
        return $this->storeLocationDescriptor;
    }

    /**
     * Sets a new storeLocationDescriptor
     *
     * A Composite containing the Descriptor (typically an xs:ID assigned by the DSP) of the store in which the Kiosk is located.
     *
     * @param \DDEX\DSR\DSR_420\StoreLocationDescriptorType $storeLocationDescriptor
     * @return self
     */
    public function setStoreLocationDescriptor(?\DDEX\DSR\DSR_420\StoreLocationDescriptorType $storeLocationDescriptor = null)
    {
        $this->storeLocationDescriptor = $storeLocationDescriptor;
        return $this;
    }

    /**
     * Gets as promotionalActivityDescription
     *
     * A Composite containing the freetext Description of a promotional activity.
     *
     * @return \DDEX\DSR\DSR_420\DescriptionType
     */
    public function getPromotionalActivityDescription()
    {
        return $this->promotionalActivityDescription;
    }

    /**
     * Sets a new promotionalActivityDescription
     *
     * A Composite containing the freetext Description of a promotional activity.
     *
     * @param \DDEX\DSR\DSR_420\DescriptionType $promotionalActivityDescription
     * @return self
     */
    public function setPromotionalActivityDescription(?\DDEX\DSR\DSR_420\DescriptionType $promotionalActivityDescription = null)
    {
        $this->promotionalActivityDescription = $promotionalActivityDescription;
        return $this;
    }

    /**
     * Gets as deal
     *
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @return \DDEX\DSR\DSR_420\DealForRecordCompaniesType
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
     * @param \DDEX\DSR\DSR_420\DealForRecordCompaniesType $deal
     * @return self
     */
    public function setDeal(?\DDEX\DSR\DSR_420\DealForRecordCompaniesType $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }
}


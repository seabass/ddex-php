<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing LicenseOrClaimConditionType
 *
 * A ddex:Composite containing details of conditions and/or limitations for Usages.
 * XSD Type: LicenseOrClaimCondition
 */
class LicenseOrClaimConditionType
{
    /**
     * The ddex:Flag indicating whether the LicenseOrClaimCondition ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided LicenseOrClaimCondition data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the ddex:Elements of the LicenseOrClaimCondition as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Identifier (specific to the ddex:Message) of the LicenseOrClaimCondition within the ddex:Release or ddex:Creation which contains it. This is a ddex:LocalLicenseOrClaimConditionAnchor starting with the letter E.
     *
     * @var string $licenseOrClaimConditionReference
     */
    private $licenseOrClaimConditionReference = null;

    /**
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @var \DDEX\ddexC\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @var \DDEX\MWL\MWL_211\RoyaltyRateType[] $royaltyRate
     */
    private $royaltyRate = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @var \DDEX\MWL\MWL_211\PercentageRateType[] $percentageRate
     */
    private $percentageRate = [
        
    ];

    /**
     * An ddex:Amount which is paid in advance.
     *
     * @var \DDEX\ddexC\RoyaltyAmountType $advanceAmount
     */
    private $advanceAmount = null;

    /**
     * An ddex:Amount which is guaranteed,
     *
     * @var \DDEX\ddexC\GuaranteedAmountType $guaranteedAmount
     */
    private $guaranteedAmount = null;

    /**
     * A minimum fee to be paid per use.
     *
     * @var float $minimumFeePerUse
     */
    private $minimumFeePerUse = null;

    /**
     * A ddex:Flag indicating whether the ddex:MusicalWork is an Arrangement of a ddex:Work in the ddex:PublicDomain (=Yes) or not (=No).
     *
     * @var bool $isPdArrangement
     */
    private $isPdArrangement = null;

    /**
     * A ddex:Flag indicating whether a clause is a controlled composition clause (=True) or not (=False).
     *
     * @var bool $isControlledCompositionClause
     */
    private $isControlledCompositionClause = null;

    /**
     * A ddex:Composite containing details of a controlled composition clause.
     *
     * @var \DDEX\MWL\MWL_211\ControlledCompositionClauseType $controlledCompositionClause
     */
    private $controlledCompositionClause = null;

    /**
     * A ddex:Flag indicating whether all the rate fields are to be paid per use (=True) or as a one-off payment (=False).
     *
     * @var bool $isPerUseRoyaltyPayment
     */
    private $isPerUseRoyaltyPayment = null;

    /**
     * A ddex:Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=True) or not (=False).
     *
     * @var bool $isFavoredNationClause
     */
    private $isFavoredNationClause = null;

    /**
     * A ddex:Flag indicating whether conditions are applicable to predominantly musical ddex:Releases only (=True) or not (=False).
     *
     * @var bool $isApplicableToPredominantlyMusicReleasesOnly
     */
    private $isApplicableToPredominantlyMusicReleasesOnly = null;

    /**
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid.
     *
     * @var \DDEX\ddexC\TaxRateType $taxRate
     */
    private $taxRate = null;

    /**
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @var \DDEX\ddexC\CalculationTypeType[] $calculationType
     */
    private $calculationType = [
        
    ];

    /**
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @var \DDEX\ddexC\AdditionalInformationType[] $documentationReference
     */
    private $documentationReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the context (such as ddex:Dates, number of uses) in which the ddex:Rate is valid. The default is that the ddex:Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @var \DDEX\MWL\MWL_211\RateValidityType $rateValidity
     */
    private $rateValidity = null;

    /**
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) regarding the Usage.
     *
     * @var \DDEX\ddexC\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * A ddex:Composite containing details of a ddex:Price at which the ddex:Release is to be offered.
     *
     * @var \DDEX\ddexC\PriceInformationType $priceInformation
     */
    private $priceInformation = null;

    /**
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
     *
     * @var bool $isPromotional
     */
    private $isPromotional = null;

    /**
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @var \DDEX\ddexC\PromotionalCodeType $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * A ddex:Composite containing supporting information on the Usage.
     *
     * @var \DDEX\ddexC\AdditionalInformationType $additionalInformation
     */
    private $additionalInformation = null;

    /**
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @var \DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * A ddex:Composite containing details of one or more ddex:References contained in the mwl:LicenseOrClaimCondition. The condition only applies when the ddex:Work is used in the context of the ddex:Releases or ddex:Resources referenced in this element.
     *
     * @var \DDEX\MWL\MWL_211\LicenseOrClaimConditionReferenceListType $licenseOrClaimConditionReferenceList
     */
    private $licenseOrClaimConditionReferenceList = null;

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the LicenseOrClaimCondition ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided LicenseOrClaimCondition data with the now provided data.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The ddex:Flag indicating whether the LicenseOrClaimCondition ddex:Element was updated (=True) or not (=False). The ddex:Flag may only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to replace any previously provided LicenseOrClaimCondition data with the now provided data.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the LicenseOrClaimCondition as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the LicenseOrClaimCondition as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as licenseOrClaimConditionReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the LicenseOrClaimCondition within the ddex:Release or ddex:Creation which contains it. This is a ddex:LocalLicenseOrClaimConditionAnchor starting with the letter E.
     *
     * @return string
     */
    public function getLicenseOrClaimConditionReference()
    {
        return $this->licenseOrClaimConditionReference;
    }

    /**
     * Sets a new licenseOrClaimConditionReference
     *
     * The ddex:Identifier (specific to the ddex:Message) of the LicenseOrClaimCondition within the ddex:Release or ddex:Creation which contains it. This is a ddex:LocalLicenseOrClaimConditionAnchor starting with the letter E.
     *
     * @param string $licenseOrClaimConditionReference
     * @return self
     */
    public function setLicenseOrClaimConditionReference($licenseOrClaimConditionReference)
    {
        $this->licenseOrClaimConditionReference = $licenseOrClaimConditionReference;
        return $this;
    }

    /**
     * Adds as usage
     *
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\UsageType $usage
     */
    public function addToUsage(\DDEX\ddexC\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsage($index)
    {
        return isset($this->usage[$index]);
    }

    /**
     * unset usage
     *
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsage($index)
    {
        unset($this->usage[$index]);
    }

    /**
     * Gets as usage
     *
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @return \DDEX\ddexC\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A ddex:Composite containing ddex:Types and number of Usages of the ddex:Release.
     *
     * @param \DDEX\ddexC\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Adds as royaltyRate
     *
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\RoyaltyRateType $royaltyRate
     */
    public function addToRoyaltyRate(\DDEX\MWL\MWL_211\RoyaltyRateType $royaltyRate)
    {
        $this->royaltyRate[] = $royaltyRate;
        return $this;
    }

    /**
     * isset royaltyRate
     *
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoyaltyRate($index)
    {
        return isset($this->royaltyRate[$index]);
    }

    /**
     * unset royaltyRate
     *
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoyaltyRate($index)
    {
        unset($this->royaltyRate[$index]);
    }

    /**
     * Gets as royaltyRate
     *
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @return \DDEX\MWL\MWL_211\RoyaltyRateType[]
     */
    public function getRoyaltyRate()
    {
        return $this->royaltyRate;
    }

    /**
     * Sets a new royaltyRate
     *
     * A ddex:Composite containing details of a ddex:RoyaltyRate.
     *
     * @param \DDEX\MWL\MWL_211\RoyaltyRateType[] $royaltyRate
     * @return self
     */
    public function setRoyaltyRate(array $royaltyRate = null)
    {
        $this->royaltyRate = $royaltyRate;
        return $this;
    }

    /**
     * Adds as percentageRate
     *
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\PercentageRateType $percentageRate
     */
    public function addToPercentageRate(\DDEX\MWL\MWL_211\PercentageRateType $percentageRate)
    {
        $this->percentageRate[] = $percentageRate;
        return $this;
    }

    /**
     * isset percentageRate
     *
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPercentageRate($index)
    {
        return isset($this->percentageRate[$index]);
    }

    /**
     * unset percentageRate
     *
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPercentageRate($index)
    {
        unset($this->percentageRate[$index]);
    }

    /**
     * Gets as percentageRate
     *
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @return \DDEX\MWL\MWL_211\PercentageRateType[]
     */
    public function getPercentageRate()
    {
        return $this->percentageRate;
    }

    /**
     * Sets a new percentageRate
     *
     * A ddex:Composite containing details of a ddex:PercentageRate.
     *
     * @param \DDEX\MWL\MWL_211\PercentageRateType[] $percentageRate
     * @return self
     */
    public function setPercentageRate(array $percentageRate = null)
    {
        $this->percentageRate = $percentageRate;
        return $this;
    }

    /**
     * Gets as advanceAmount
     *
     * An ddex:Amount which is paid in advance.
     *
     * @return \DDEX\ddexC\RoyaltyAmountType
     */
    public function getAdvanceAmount()
    {
        return $this->advanceAmount;
    }

    /**
     * Sets a new advanceAmount
     *
     * An ddex:Amount which is paid in advance.
     *
     * @param \DDEX\ddexC\RoyaltyAmountType $advanceAmount
     * @return self
     */
    public function setAdvanceAmount(?\DDEX\ddexC\RoyaltyAmountType $advanceAmount = null)
    {
        $this->advanceAmount = $advanceAmount;
        return $this;
    }

    /**
     * Gets as guaranteedAmount
     *
     * An ddex:Amount which is guaranteed,
     *
     * @return \DDEX\ddexC\GuaranteedAmountType
     */
    public function getGuaranteedAmount()
    {
        return $this->guaranteedAmount;
    }

    /**
     * Sets a new guaranteedAmount
     *
     * An ddex:Amount which is guaranteed,
     *
     * @param \DDEX\ddexC\GuaranteedAmountType $guaranteedAmount
     * @return self
     */
    public function setGuaranteedAmount(?\DDEX\ddexC\GuaranteedAmountType $guaranteedAmount = null)
    {
        $this->guaranteedAmount = $guaranteedAmount;
        return $this;
    }

    /**
     * Gets as minimumFeePerUse
     *
     * A minimum fee to be paid per use.
     *
     * @return float
     */
    public function getMinimumFeePerUse()
    {
        return $this->minimumFeePerUse;
    }

    /**
     * Sets a new minimumFeePerUse
     *
     * A minimum fee to be paid per use.
     *
     * @param float $minimumFeePerUse
     * @return self
     */
    public function setMinimumFeePerUse($minimumFeePerUse)
    {
        $this->minimumFeePerUse = $minimumFeePerUse;
        return $this;
    }

    /**
     * Gets as isPdArrangement
     *
     * A ddex:Flag indicating whether the ddex:MusicalWork is an Arrangement of a ddex:Work in the ddex:PublicDomain (=Yes) or not (=No).
     *
     * @return bool
     */
    public function getIsPdArrangement()
    {
        return $this->isPdArrangement;
    }

    /**
     * Sets a new isPdArrangement
     *
     * A ddex:Flag indicating whether the ddex:MusicalWork is an Arrangement of a ddex:Work in the ddex:PublicDomain (=Yes) or not (=No).
     *
     * @param bool $isPdArrangement
     * @return self
     */
    public function setIsPdArrangement($isPdArrangement)
    {
        $this->isPdArrangement = $isPdArrangement;
        return $this;
    }

    /**
     * Gets as isControlledCompositionClause
     *
     * A ddex:Flag indicating whether a clause is a controlled composition clause (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsControlledCompositionClause()
    {
        return $this->isControlledCompositionClause;
    }

    /**
     * Sets a new isControlledCompositionClause
     *
     * A ddex:Flag indicating whether a clause is a controlled composition clause (=True) or not (=False).
     *
     * @param bool $isControlledCompositionClause
     * @return self
     */
    public function setIsControlledCompositionClause($isControlledCompositionClause)
    {
        $this->isControlledCompositionClause = $isControlledCompositionClause;
        return $this;
    }

    /**
     * Gets as controlledCompositionClause
     *
     * A ddex:Composite containing details of a controlled composition clause.
     *
     * @return \DDEX\MWL\MWL_211\ControlledCompositionClauseType
     */
    public function getControlledCompositionClause()
    {
        return $this->controlledCompositionClause;
    }

    /**
     * Sets a new controlledCompositionClause
     *
     * A ddex:Composite containing details of a controlled composition clause.
     *
     * @param \DDEX\MWL\MWL_211\ControlledCompositionClauseType $controlledCompositionClause
     * @return self
     */
    public function setControlledCompositionClause(?\DDEX\MWL\MWL_211\ControlledCompositionClauseType $controlledCompositionClause = null)
    {
        $this->controlledCompositionClause = $controlledCompositionClause;
        return $this;
    }

    /**
     * Gets as isPerUseRoyaltyPayment
     *
     * A ddex:Flag indicating whether all the rate fields are to be paid per use (=True) or as a one-off payment (=False).
     *
     * @return bool
     */
    public function getIsPerUseRoyaltyPayment()
    {
        return $this->isPerUseRoyaltyPayment;
    }

    /**
     * Sets a new isPerUseRoyaltyPayment
     *
     * A ddex:Flag indicating whether all the rate fields are to be paid per use (=True) or as a one-off payment (=False).
     *
     * @param bool $isPerUseRoyaltyPayment
     * @return self
     */
    public function setIsPerUseRoyaltyPayment($isPerUseRoyaltyPayment)
    {
        $this->isPerUseRoyaltyPayment = $isPerUseRoyaltyPayment;
        return $this;
    }

    /**
     * Gets as isFavoredNationClause
     *
     * A ddex:Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsFavoredNationClause()
    {
        return $this->isFavoredNationClause;
    }

    /**
     * Sets a new isFavoredNationClause
     *
     * A ddex:Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=True) or not (=False).
     *
     * @param bool $isFavoredNationClause
     * @return self
     */
    public function setIsFavoredNationClause($isFavoredNationClause)
    {
        $this->isFavoredNationClause = $isFavoredNationClause;
        return $this;
    }

    /**
     * Gets as isApplicableToPredominantlyMusicReleasesOnly
     *
     * A ddex:Flag indicating whether conditions are applicable to predominantly musical ddex:Releases only (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsApplicableToPredominantlyMusicReleasesOnly()
    {
        return $this->isApplicableToPredominantlyMusicReleasesOnly;
    }

    /**
     * Sets a new isApplicableToPredominantlyMusicReleasesOnly
     *
     * A ddex:Flag indicating whether conditions are applicable to predominantly musical ddex:Releases only (=True) or not (=False).
     *
     * @param bool $isApplicableToPredominantlyMusicReleasesOnly
     * @return self
     */
    public function setIsApplicableToPredominantlyMusicReleasesOnly($isApplicableToPredominantlyMusicReleasesOnly)
    {
        $this->isApplicableToPredominantlyMusicReleasesOnly = $isApplicableToPredominantlyMusicReleasesOnly;
        return $this;
    }

    /**
     * Gets as taxRate
     *
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid.
     *
     * @return \DDEX\ddexC\TaxRateType
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * A ddex:Composite containing details of a ddex:TaxRate applicable to the total ddex:Amount to be paid.
     *
     * @param \DDEX\ddexC\TaxRateType $taxRate
     * @return self
     */
    public function setTaxRate(?\DDEX\ddexC\TaxRateType $taxRate = null)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Adds as calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return self
     * @param \DDEX\ddexC\CalculationTypeType $calculationType
     */
    public function addToCalculationType(\DDEX\ddexC\CalculationTypeType $calculationType)
    {
        $this->calculationType[] = $calculationType;
        return $this;
    }

    /**
     * isset calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalculationType($index)
    {
        return isset($this->calculationType[$index]);
    }

    /**
     * unset calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalculationType($index)
    {
        unset($this->calculationType[$index]);
    }

    /**
     * Gets as calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @return \DDEX\ddexC\CalculationTypeType[]
     */
    public function getCalculationType()
    {
        return $this->calculationType;
    }

    /**
     * Sets a new calculationType
     *
     * A ddex:Composite containing details of a ddex:Type of ddex:Calculation method used by which the royalties are to be determined. This is a text string with no prescribed allowed values.
     *
     * @param \DDEX\ddexC\CalculationTypeType[] $calculationType
     * @return self
     */
    public function setCalculationType(array $calculationType = null)
    {
        $this->calculationType = $calculationType;
        return $this;
    }

    /**
     * Adds as documentationReference
     *
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @return self
     * @param \DDEX\ddexC\AdditionalInformationType $documentationReference
     */
    public function addToDocumentationReference(\DDEX\ddexC\AdditionalInformationType $documentationReference)
    {
        $this->documentationReference[] = $documentationReference;
        return $this;
    }

    /**
     * isset documentationReference
     *
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentationReference($index)
    {
        return isset($this->documentationReference[$index]);
    }

    /**
     * unset documentationReference
     *
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentationReference($index)
    {
        unset($this->documentationReference[$index]);
    }

    /**
     * Gets as documentationReference
     *
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @return \DDEX\ddexC\AdditionalInformationType[]
     */
    public function getDocumentationReference()
    {
        return $this->documentationReference;
    }

    /**
     * Sets a new documentationReference
     *
     * A ddex:Composite containing an ddex:Annotation referring to documentation.
     *
     * @param \DDEX\ddexC\AdditionalInformationType[] $documentationReference
     * @return self
     */
    public function setDocumentationReference(array $documentationReference = null)
    {
        $this->documentationReference = $documentationReference;
        return $this;
    }

    /**
     * Gets as rateValidity
     *
     * A ddex:Composite containing details of the context (such as ddex:Dates, number of uses) in which the ddex:Rate is valid. The default is that the ddex:Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @return \DDEX\MWL\MWL_211\RateValidityType
     */
    public function getRateValidity()
    {
        return $this->rateValidity;
    }

    /**
     * Sets a new rateValidity
     *
     * A ddex:Composite containing details of the context (such as ddex:Dates, number of uses) in which the ddex:Rate is valid. The default is that the ddex:Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @param \DDEX\MWL\MWL_211\RateValidityType $rateValidity
     * @return self
     */
    public function setRateValidity(?\DDEX\MWL\MWL_211\RateValidityType $rateValidity = null)
    {
        $this->rateValidity = $rateValidity;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) regarding the Usage.
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
     * A ddex:Composite containing details of a ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the form of an ddex:Identifier, ddex:Name or ddex:Description) regarding the Usage.
     *
     * @param \DDEX\ddexC\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DDEX\ddexC\TariffReferenceType $tariffReference = null)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }

    /**
     * Gets as priceInformation
     *
     * A ddex:Composite containing details of a ddex:Price at which the ddex:Release is to be offered.
     *
     * @return \DDEX\ddexC\PriceInformationType
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A ddex:Composite containing details of a ddex:Price at which the ddex:Release is to be offered.
     *
     * @param \DDEX\ddexC\PriceInformationType $priceInformation
     * @return self
     */
    public function setPriceInformation(?\DDEX\ddexC\PriceInformationType $priceInformation = null)
    {
        $this->priceInformation = $priceInformation;
        return $this;
    }

    /**
     * Gets as isPromotional
     *
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
     *
     * @return bool
     */
    public function getIsPromotional()
    {
        return $this->isPromotional;
    }

    /**
     * Sets a new isPromotional
     *
     * The ddex:Flag indicating whether a special ddex:Deal is made between the ddex:Licensor and the ddex:Licensee (=True) or not (=False) regarding the royalties or payments due to be paid for Releases distributed under this ddex:Deal.
     *
     * @param bool $isPromotional
     * @return self
     */
    public function setIsPromotional($isPromotional)
    {
        $this->isPromotional = $isPromotional;
        return $this;
    }

    /**
     * Gets as promotionalCode
     *
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @return \DDEX\ddexC\PromotionalCodeType
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * A ddex:Composite containing details of a ddex:PromotionalCode.
     *
     * @param \DDEX\ddexC\PromotionalCodeType $promotionalCode
     * @return self
     */
    public function setPromotionalCode(?\DDEX\ddexC\PromotionalCodeType $promotionalCode = null)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Gets as additionalInformation
     *
     * A ddex:Composite containing supporting information on the Usage.
     *
     * @return \DDEX\ddexC\AdditionalInformationType
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * A ddex:Composite containing supporting information on the Usage.
     *
     * @param \DDEX\ddexC\AdditionalInformationType $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(?\DDEX\ddexC\AdditionalInformationType $additionalInformation = null)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @return \DDEX\ddexC\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A ddex:Composite containing technical details of the ddex:Release.
     *
     * @param \DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DDEX\ddexC\TechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }

    /**
     * Gets as licenseOrClaimConditionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:References contained in the mwl:LicenseOrClaimCondition. The condition only applies when the ddex:Work is used in the context of the ddex:Releases or ddex:Resources referenced in this element.
     *
     * @return \DDEX\MWL\MWL_211\LicenseOrClaimConditionReferenceListType
     */
    public function getLicenseOrClaimConditionReferenceList()
    {
        return $this->licenseOrClaimConditionReferenceList;
    }

    /**
     * Sets a new licenseOrClaimConditionReferenceList
     *
     * A ddex:Composite containing details of one or more ddex:References contained in the mwl:LicenseOrClaimCondition. The condition only applies when the ddex:Work is used in the context of the ddex:Releases or ddex:Resources referenced in this element.
     *
     * @param \DDEX\MWL\MWL_211\LicenseOrClaimConditionReferenceListType $licenseOrClaimConditionReferenceList
     * @return self
     */
    public function setLicenseOrClaimConditionReferenceList(?\DDEX\MWL\MWL_211\LicenseOrClaimConditionReferenceListType $licenseOrClaimConditionReferenceList = null)
    {
        $this->licenseOrClaimConditionReferenceList = $licenseOrClaimConditionReferenceList;
        return $this;
    }
}


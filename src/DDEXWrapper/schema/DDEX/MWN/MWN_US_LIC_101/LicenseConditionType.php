<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing LicenseConditionType
 *
 * A Composite containing details of conditions and/or limitations for Usages.
 * XSD Type: LicenseCondition
 */
class LicenseConditionType
{
    /**
     * The Identifier (specific to the Message) of the LicenseCondition within the Release or Creation which contains it. This is a LocalLicenseConditionAnchor starting with the letter E.
     *
     * @var string $licenseConditionReference
     */
    private $licenseConditionReference = null;

    /**
     * A Type of Right which is covered.
     *
     * @var string[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing Types and number of Usages of the Release.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\UsageType[] $usage
     */
    private $usage = [
        
    ];

    /**
     * A Composite containing details of a RoyaltyRate.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RoyaltyRateType[] $royaltyRate
     */
    private $royaltyRate = [
        
    ];

    /**
     * An Amount which is paid in advance.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RoyaltyAmountType $advanceAmount
     */
    private $advanceAmount = null;

    /**
     * An Amount which is guaranteed,
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\GuaranteedAmountType $guaranteedAmount
     */
    private $guaranteedAmount = null;

    /**
     * A minimum fee to be paid per use.
     *
     * @var float $minimumFeePerUse
     */
    private $minimumFeePerUse = null;

    /**
     * A Flag indicating whether the MusicalWork is an Arrangement of a Work in the PublicDomain (=true) or not (=false).
     *
     * @var bool $isPdArrangement
     */
    private $isPdArrangement = null;

    /**
     * A Flag indicating whether a clause is a controlled composition clause (=true) or not (=false).
     *
     * @var bool $isControlledCompositionClause
     */
    private $isControlledCompositionClause = null;

    /**
     * A Composite containing details of a 'New Digital Media Agreement' clause.
     *
     * @var bool $isNdmaClause
     */
    private $isNdmaClause = null;

    /**
     * A Flag indicating whether all the rate fields are to be paid per use (=true) or as a one-off payment (=false).
     *
     * @var bool $isPerUseRoyaltyPayment
     */
    private $isPerUseRoyaltyPayment = null;

    /**
     * A Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=true) or not (=false).
     *
     * @var bool $isFavoredNationClause
     */
    private $isFavoredNationClause = null;

    /**
     * A Composite containing details of a document that contains information to support the LicenseRequest.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\SupplementalDocumentType[] $supplementalDocument
     */
    private $supplementalDocument = [
        
    ];

    /**
     * A Composite containing details of the context (such as Dates, number of uses) in which the Rate is valid. The default is that the Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RateValidityType $rateValidity
     */
    private $rateValidity = null;

    /**
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) regarding the Usage.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * A Composite containing details of a Price at which the Release is to be offered.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PriceInformationType $priceInformation
     */
    private $priceInformation = null;

    /**
     * A Composite containing technical details of the Release.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\TechnicalInstantiationType $technicalInstantiation
     */
    private $technicalInstantiation = null;

    /**
     * Gets as licenseConditionReference
     *
     * The Identifier (specific to the Message) of the LicenseCondition within the Release or Creation which contains it. This is a LocalLicenseConditionAnchor starting with the letter E.
     *
     * @return string
     */
    public function getLicenseConditionReference()
    {
        return $this->licenseConditionReference;
    }

    /**
     * Sets a new licenseConditionReference
     *
     * The Identifier (specific to the Message) of the LicenseCondition within the Release or Creation which contains it. This is a LocalLicenseConditionAnchor starting with the letter E.
     *
     * @param string $licenseConditionReference
     * @return self
     */
    public function setLicenseConditionReference($licenseConditionReference)
    {
        $this->licenseConditionReference = $licenseConditionReference;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right which is covered.
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
     * A Type of Right which is covered.
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
     * A Type of Right which is covered.
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
     * A Type of Right which is covered.
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
     * A Type of Right which is covered.
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
     * Adds as usage
     *
     * A Composite containing Types and number of Usages of the Release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\UsageType $usage
     */
    public function addToUsage(\DDEX\MWN\MWN_US_LIC_101\UsageType $usage)
    {
        $this->usage[] = $usage;
        return $this;
    }

    /**
     * isset usage
     *
     * A Composite containing Types and number of Usages of the Release.
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
     * A Composite containing Types and number of Usages of the Release.
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
     * A Composite containing Types and number of Usages of the Release.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\UsageType[]
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A Composite containing Types and number of Usages of the Release.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\UsageType[] $usage
     * @return self
     */
    public function setUsage(array $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Adds as royaltyRate
     *
     * A Composite containing details of a RoyaltyRate.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\RoyaltyRateType $royaltyRate
     */
    public function addToRoyaltyRate(\DDEX\MWN\MWN_US_LIC_101\RoyaltyRateType $royaltyRate)
    {
        $this->royaltyRate[] = $royaltyRate;
        return $this;
    }

    /**
     * isset royaltyRate
     *
     * A Composite containing details of a RoyaltyRate.
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
     * A Composite containing details of a RoyaltyRate.
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
     * A Composite containing details of a RoyaltyRate.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RoyaltyRateType[]
     */
    public function getRoyaltyRate()
    {
        return $this->royaltyRate;
    }

    /**
     * Sets a new royaltyRate
     *
     * A Composite containing details of a RoyaltyRate.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RoyaltyRateType[] $royaltyRate
     * @return self
     */
    public function setRoyaltyRate(array $royaltyRate)
    {
        $this->royaltyRate = $royaltyRate;
        return $this;
    }

    /**
     * Gets as advanceAmount
     *
     * An Amount which is paid in advance.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RoyaltyAmountType
     */
    public function getAdvanceAmount()
    {
        return $this->advanceAmount;
    }

    /**
     * Sets a new advanceAmount
     *
     * An Amount which is paid in advance.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RoyaltyAmountType $advanceAmount
     * @return self
     */
    public function setAdvanceAmount(?\DDEX\MWN\MWN_US_LIC_101\RoyaltyAmountType $advanceAmount = null)
    {
        $this->advanceAmount = $advanceAmount;
        return $this;
    }

    /**
     * Gets as guaranteedAmount
     *
     * An Amount which is guaranteed,
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\GuaranteedAmountType
     */
    public function getGuaranteedAmount()
    {
        return $this->guaranteedAmount;
    }

    /**
     * Sets a new guaranteedAmount
     *
     * An Amount which is guaranteed,
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\GuaranteedAmountType $guaranteedAmount
     * @return self
     */
    public function setGuaranteedAmount(?\DDEX\MWN\MWN_US_LIC_101\GuaranteedAmountType $guaranteedAmount = null)
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
     * A Flag indicating whether the MusicalWork is an Arrangement of a Work in the PublicDomain (=true) or not (=false).
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
     * A Flag indicating whether the MusicalWork is an Arrangement of a Work in the PublicDomain (=true) or not (=false).
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
     * A Flag indicating whether a clause is a controlled composition clause (=true) or not (=false).
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
     * A Flag indicating whether a clause is a controlled composition clause (=true) or not (=false).
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
     * Gets as isNdmaClause
     *
     * A Composite containing details of a 'New Digital Media Agreement' clause.
     *
     * @return bool
     */
    public function getIsNdmaClause()
    {
        return $this->isNdmaClause;
    }

    /**
     * Sets a new isNdmaClause
     *
     * A Composite containing details of a 'New Digital Media Agreement' clause.
     *
     * @param bool $isNdmaClause
     * @return self
     */
    public function setIsNdmaClause($isNdmaClause)
    {
        $this->isNdmaClause = $isNdmaClause;
        return $this;
    }

    /**
     * Gets as isPerUseRoyaltyPayment
     *
     * A Flag indicating whether all the rate fields are to be paid per use (=true) or as a one-off payment (=false).
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
     * A Flag indicating whether all the rate fields are to be paid per use (=true) or as a one-off payment (=false).
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
     * A Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=true) or not (=false).
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
     * A Flag indicating that the royalty rate terms will be overridden if someone else is paid more (=true) or not (=false).
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
     * Adds as supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the LicenseRequest.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\SupplementalDocumentType $supplementalDocument
     */
    public function addToSupplementalDocument(\DDEX\MWN\MWN_US_LIC_101\SupplementalDocumentType $supplementalDocument)
    {
        $this->supplementalDocument[] = $supplementalDocument;
        return $this;
    }

    /**
     * isset supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the LicenseRequest.
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
     * A Composite containing details of a document that contains information to support the LicenseRequest.
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
     * A Composite containing details of a document that contains information to support the LicenseRequest.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\SupplementalDocumentType[]
     */
    public function getSupplementalDocument()
    {
        return $this->supplementalDocument;
    }

    /**
     * Sets a new supplementalDocument
     *
     * A Composite containing details of a document that contains information to support the LicenseRequest.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\SupplementalDocumentType[] $supplementalDocument
     * @return self
     */
    public function setSupplementalDocument(array $supplementalDocument = null)
    {
        $this->supplementalDocument = $supplementalDocument;
        return $this;
    }

    /**
     * Gets as rateValidity
     *
     * A Composite containing details of the context (such as Dates, number of uses) in which the Rate is valid. The default is that the Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RateValidityType
     */
    public function getRateValidity()
    {
        return $this->rateValidity;
    }

    /**
     * Sets a new rateValidity
     *
     * A Composite containing details of the context (such as Dates, number of uses) in which the Rate is valid. The default is that the Rate applies indefinitely from the xs:date of issue of the Licence.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RateValidityType $rateValidity
     * @return self
     */
    public function setRateValidity(?\DDEX\MWN\MWN_US_LIC_101\RateValidityType $rateValidity = null)
    {
        $this->rateValidity = $rateValidity;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) regarding the Usage.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\TariffReferenceType
     */
    public function getTariffReference()
    {
        return $this->tariffReference;
    }

    /**
     * Sets a new tariffReference
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) regarding the Usage.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DDEX\MWN\MWN_US_LIC_101\TariffReferenceType $tariffReference = null)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }

    /**
     * Gets as priceInformation
     *
     * A Composite containing details of a Price at which the Release is to be offered.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PriceInformationType
     */
    public function getPriceInformation()
    {
        return $this->priceInformation;
    }

    /**
     * Sets a new priceInformation
     *
     * A Composite containing details of a Price at which the Release is to be offered.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/price-information
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\PriceInformationType $priceInformation
     * @return self
     */
    public function setPriceInformation(?\DDEX\MWN\MWN_US_LIC_101\PriceInformationType $priceInformation = null)
    {
        $this->priceInformation = $priceInformation;
        return $this;
    }

    /**
     * Gets as technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\TechnicalInstantiationType
     */
    public function getTechnicalInstantiation()
    {
        return $this->technicalInstantiation;
    }

    /**
     * Sets a new technicalInstantiation
     *
     * A Composite containing technical details of the Release.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\TechnicalInstantiationType $technicalInstantiation
     * @return self
     */
    public function setTechnicalInstantiation(?\DDEX\MWN\MWN_US_LIC_101\TechnicalInstantiationType $technicalInstantiation = null)
    {
        $this->technicalInstantiation = $technicalInstantiation;
        return $this;
    }
}


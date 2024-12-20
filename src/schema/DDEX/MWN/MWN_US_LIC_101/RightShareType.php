<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing RightShareType
 *
 * A Composite containing details of a RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{
    /**
     * The Flag indicating whether whether the RightShare is a net publisher share (=true) or an income participant publisher share (=false). In the latter case, no writers are expected to be linked to this RightShare. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isNetPublisherShare
     */
    private $isNetPublisherShare = null;

    /**
     * The Identifier (specific to the Message) of the RightShare within the Release which contains it. This is a LocalRightShareAnchor starting with the letter S.
     *
     * @var string $rightShareReference
     */
    private $rightShareReference = null;

    /**
     * A Type of the RightShare.
     *
     * @var string[] $rightShareType
     */
    private $rightShareType = [
        
    ];

    /**
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $rightShareId
     */
    private $rightShareId = null;

    /**
     * A Reference for a Work (specific to this Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string $rightShareWorkReference
     */
    private $rightShareWorkReference = null;

    /**
     * A Flag indicating whether the Work referenced from the RightShare underlies a sampled Recording (=true) or not (=false).
     *
     * @var bool $isWorkRelatedToSample
     */
    private $isWorkRelatedToSample = null;

    /**
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
     *
     * @var string[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RightsControllerType $rightsController
     */
    private $rightsController = null;

    /**
     * A Composite containing details of an agent that acts, for this RightShare, for the RightsController when it comes to licensing.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RightsControllerType $licensingAgent
     */
    private $licensingAgent = null;

    /**
     * A Flag indicating whether a RightsController is unknown (=true) or not (=false).
     *
     * @var bool $rightsControllerUnknown
     */
    private $rightsControllerUnknown = null;

    /**
     * A Name of a RightsController that is displayed.
     *
     * @var string $rightsControllerDisplayName
     */
    private $rightsControllerDisplayName = null;

    /**
     * An Annotation which acknowledges the RightsController.
     *
     * @var string $publisherCredits
     */
    private $publisherCredits = null;

    /**
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ValidityPeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The Flag indicating whether the RightSharePercentage to be collected during the validity period is unknown (=true) or not (=false). This element can be used by publishers if they know that they control rights but have not (yet) established their precise share percentage. The company who sent a MusicalWorkClaimRequestMessage can expect to receive an update with respect to this share at a laster stage.
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * A Flag indicating whether there is no, and never was, a valid Claim (and any Claim that may have been was made in error) (=true) or not (=false).
     *
     * @var bool $rightShareNotClaimed
     */
    private $rightShareNotClaimed = null;

    /**
     * The share of the licensed Rights owned by the RightsController. This is the share to be collected during the validity period (which for manuscript shares and original publisher shares would be =0 but for collection shares would typically be >0). RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=true) or not (=false).
     *
     * @var bool $hasRightsInDispute
     */
    private $hasRightsInDispute = null;

    /**
     * A Composite containing details of a rights claim policy.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\OriginalPublisherShareType $hasOriginalPublisherShare
     */
    private $hasOriginalPublisherShare = null;

    /**
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\IsFollowerInTitleOfType $isFollowerInTitleOf
     */
    private $isFollowerInTitleOf = null;

    /**
     * Gets as isNetPublisherShare
     *
     * The Flag indicating whether whether the RightShare is a net publisher share (=true) or an income participant publisher share (=false). In the latter case, no writers are expected to be linked to this RightShare. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsNetPublisherShare()
    {
        return $this->isNetPublisherShare;
    }

    /**
     * Sets a new isNetPublisherShare
     *
     * The Flag indicating whether whether the RightShare is a net publisher share (=true) or an income participant publisher share (=false). In the latter case, no writers are expected to be linked to this RightShare. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isNetPublisherShare
     * @return self
     */
    public function setIsNetPublisherShare($isNetPublisherShare)
    {
        $this->isNetPublisherShare = $isNetPublisherShare;
        return $this;
    }

    /**
     * Gets as rightShareReference
     *
     * The Identifier (specific to the Message) of the RightShare within the Release which contains it. This is a LocalRightShareAnchor starting with the letter S.
     *
     * @return string
     */
    public function getRightShareReference()
    {
        return $this->rightShareReference;
    }

    /**
     * Sets a new rightShareReference
     *
     * The Identifier (specific to the Message) of the RightShare within the Release which contains it. This is a LocalRightShareAnchor starting with the letter S.
     *
     * @param string $rightShareReference
     * @return self
     */
    public function setRightShareReference($rightShareReference)
    {
        $this->rightShareReference = $rightShareReference;
        return $this;
    }

    /**
     * Adds as rightShareType
     *
     * A Type of the RightShare.
     *
     * @return self
     * @param string $rightShareType
     */
    public function addToRightShareType($rightShareType)
    {
        $this->rightShareType[] = $rightShareType;
        return $this;
    }

    /**
     * isset rightShareType
     *
     * A Type of the RightShare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareType($index)
    {
        return isset($this->rightShareType[$index]);
    }

    /**
     * unset rightShareType
     *
     * A Type of the RightShare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareType($index)
    {
        unset($this->rightShareType[$index]);
    }

    /**
     * Gets as rightShareType
     *
     * A Type of the RightShare.
     *
     * @return string[]
     */
    public function getRightShareType()
    {
        return $this->rightShareType;
    }

    /**
     * Sets a new rightShareType
     *
     * A Type of the RightShare.
     *
     * @param string $rightShareType
     * @return self
     */
    public function setRightShareType(array $rightShareType)
    {
        $this->rightShareType = $rightShareType;
        return $this;
    }

    /**
     * Gets as rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $rightShareId
     * @return self
     */
    public function setRightShareId(?\DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Gets as rightShareWorkReference
     *
     * A Reference for a Work (specific to this Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string
     */
    public function getRightShareWorkReference()
    {
        return $this->rightShareWorkReference;
    }

    /**
     * Sets a new rightShareWorkReference
     *
     * A Reference for a Work (specific to this Message) that is part of the RightShare. This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $rightShareWorkReference
     * @return self
     */
    public function setRightShareWorkReference($rightShareWorkReference)
    {
        $this->rightShareWorkReference = $rightShareWorkReference;
        return $this;
    }

    /**
     * Gets as isWorkRelatedToSample
     *
     * A Flag indicating whether the Work referenced from the RightShare underlies a sampled Recording (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsWorkRelatedToSample()
    {
        return $this->isWorkRelatedToSample;
    }

    /**
     * Sets a new isWorkRelatedToSample
     *
     * A Flag indicating whether the Work referenced from the RightShare underlies a sampled Recording (=true) or not (=false).
     *
     * @param bool $isWorkRelatedToSample
     * @return self
     */
    public function setIsWorkRelatedToSample($isWorkRelatedToSample)
    {
        $this->isWorkRelatedToSample = $isWorkRelatedToSample;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\CurrentTerritoryCodeType $territoryCode
     */
    public function addToTerritoryCode(\DDEX\MWN\MWN_US_LIC_101\CurrentTerritoryCodeType $territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\CurrentTerritoryCodeType[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\CurrentTerritoryCodeType[] $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * Adds as useType
     *
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\UseTypeType $useType
     */
    public function addToUseType(\DDEX\MWN\MWN_US_LIC_101\UseTypeType $useType)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\UseTypeType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\UseTypeType[] $useType
     * @return self
     */
    public function setUseType(array $useType = null)
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * Adds as carrierType
     *
     * A Composite containing details of a Carrier.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\MWN\MWN_US_LIC_101\CarrierTypeType $carrierType)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\CarrierTypeType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\CarrierTypeType[] $carrierType
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
     * @param \DDEX\MWN\MWN_US_LIC_101\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\MWN\MWN_US_LIC_101\CommercialModelTypeType $commercialModelType)
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
     * @return \DDEX\MWN\MWN_US_LIC_101\CommercialModelTypeType[]
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
     * @param \DDEX\MWN\MWN_US_LIC_101\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RightsControllerType
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RightsControllerType $rightsController
     * @return self
     */
    public function setRightsController(?\DDEX\MWN\MWN_US_LIC_101\RightsControllerType $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as licensingAgent
     *
     * A Composite containing details of an agent that acts, for this RightShare, for the RightsController when it comes to licensing.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RightsControllerType
     */
    public function getLicensingAgent()
    {
        return $this->licensingAgent;
    }

    /**
     * Sets a new licensingAgent
     *
     * A Composite containing details of an agent that acts, for this RightShare, for the RightsController when it comes to licensing.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RightsControllerType $licensingAgent
     * @return self
     */
    public function setLicensingAgent(?\DDEX\MWN\MWN_US_LIC_101\RightsControllerType $licensingAgent = null)
    {
        $this->licensingAgent = $licensingAgent;
        return $this;
    }

    /**
     * Gets as rightsControllerUnknown
     *
     * A Flag indicating whether a RightsController is unknown (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightsControllerUnknown()
    {
        return $this->rightsControllerUnknown;
    }

    /**
     * Sets a new rightsControllerUnknown
     *
     * A Flag indicating whether a RightsController is unknown (=true) or not (=false).
     *
     * @param bool $rightsControllerUnknown
     * @return self
     */
    public function setRightsControllerUnknown($rightsControllerUnknown)
    {
        $this->rightsControllerUnknown = $rightsControllerUnknown;
        return $this;
    }

    /**
     * Gets as rightsControllerDisplayName
     *
     * A Name of a RightsController that is displayed.
     *
     * @return string
     */
    public function getRightsControllerDisplayName()
    {
        return $this->rightsControllerDisplayName;
    }

    /**
     * Sets a new rightsControllerDisplayName
     *
     * A Name of a RightsController that is displayed.
     *
     * @param string $rightsControllerDisplayName
     * @return self
     */
    public function setRightsControllerDisplayName($rightsControllerDisplayName)
    {
        $this->rightsControllerDisplayName = $rightsControllerDisplayName;
        return $this;
    }

    /**
     * Gets as publisherCredits
     *
     * An Annotation which acknowledges the RightsController.
     *
     * @return string
     */
    public function getPublisherCredits()
    {
        return $this->publisherCredits;
    }

    /**
     * Sets a new publisherCredits
     *
     * An Annotation which acknowledges the RightsController.
     *
     * @param string $publisherCredits
     * @return self
     */
    public function setPublisherCredits($publisherCredits)
    {
        $this->publisherCredits = $publisherCredits;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ValidityPeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ValidityPeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\DDEX\MWN\MWN_US_LIC_101\ValidityPeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage to be collected during the validity period is unknown (=true) or not (=false). This element can be used by publishers if they know that they control rights but have not (yet) established their precise share percentage. The company who sent a MusicalWorkClaimRequestMessage can expect to receive an update with respect to this share at a laster stage.
     *
     * @return bool
     */
    public function getRightShareUnknown()
    {
        return $this->rightShareUnknown;
    }

    /**
     * Sets a new rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage to be collected during the validity period is unknown (=true) or not (=false). This element can be used by publishers if they know that they control rights but have not (yet) established their precise share percentage. The company who sent a MusicalWorkClaimRequestMessage can expect to receive an update with respect to this share at a laster stage.
     *
     * @param bool $rightShareUnknown
     * @return self
     */
    public function setRightShareUnknown($rightShareUnknown)
    {
        $this->rightShareUnknown = $rightShareUnknown;
        return $this;
    }

    /**
     * Gets as rightShareNotClaimed
     *
     * A Flag indicating whether there is no, and never was, a valid Claim (and any Claim that may have been was made in error) (=true) or not (=false).
     *
     * @return bool
     */
    public function getRightShareNotClaimed()
    {
        return $this->rightShareNotClaimed;
    }

    /**
     * Sets a new rightShareNotClaimed
     *
     * A Flag indicating whether there is no, and never was, a valid Claim (and any Claim that may have been was made in error) (=true) or not (=false).
     *
     * @param bool $rightShareNotClaimed
     * @return self
     */
    public function setRightShareNotClaimed($rightShareNotClaimed)
    {
        $this->rightShareNotClaimed = $rightShareNotClaimed;
        return $this;
    }

    /**
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. This is the share to be collected during the validity period (which for manuscript shares and original publisher shares would be =0 but for collection shares would typically be >0). RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\PercentageType
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. This is the share to be collected during the validity period (which for manuscript shares and original publisher shares would be =0 but for collection shares would typically be >0). RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/communication-of-percentages
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage(?\DDEX\MWN\MWN_US_LIC_101\PercentageType $rightSharePercentage = null)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Gets as hasRightsInDispute
     *
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=true) or not (=false).
     *
     * @return bool
     */
    public function getHasRightsInDispute()
    {
        return $this->hasRightsInDispute;
    }

    /**
     * Sets a new hasRightsInDispute
     *
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=true) or not (=false).
     *
     * @param bool $hasRightsInDispute
     * @return self
     */
    public function setHasRightsInDispute($hasRightsInDispute)
    {
        $this->hasRightsInDispute = $hasRightsInDispute;
        return $this;
    }

    /**
     * Adds as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DDEX\MWN\MWN_US_LIC_101\RightsClaimPolicyType $rightsClaimPolicy)
    {
        $this->rightsClaimPolicy[] = $rightsClaimPolicy;
        return $this;
    }

    /**
     * isset rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsClaimPolicy($index)
    {
        return isset($this->rightsClaimPolicy[$index]);
    }

    /**
     * unset rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsClaimPolicy($index)
    {
        unset($this->rightsClaimPolicy[$index]);
    }

    /**
     * Gets as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\RightsClaimPolicyType[]
     */
    public function getRightsClaimPolicy()
    {
        return $this->rightsClaimPolicy;
    }

    /**
     * Sets a new rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\RightsClaimPolicyType[] $rightsClaimPolicy
     * @return self
     */
    public function setRightsClaimPolicy(array $rightsClaimPolicy = null)
    {
        $this->rightsClaimPolicy = $rightsClaimPolicy;
        return $this;
    }

    /**
     * Gets as hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\OriginalPublisherShareType
     */
    public function getHasOriginalPublisherShare()
    {
        return $this->hasOriginalPublisherShare;
    }

    /**
     * Sets a new hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\OriginalPublisherShareType $hasOriginalPublisherShare
     * @return self
     */
    public function setHasOriginalPublisherShare(?\DDEX\MWN\MWN_US_LIC_101\OriginalPublisherShareType $hasOriginalPublisherShare = null)
    {
        $this->hasOriginalPublisherShare = $hasOriginalPublisherShare;
        return $this;
    }

    /**
     * Gets as isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\IsFollowerInTitleOfType
     */
    public function getIsFollowerInTitleOf()
    {
        return $this->isFollowerInTitleOf;
    }

    /**
     * Sets a new isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\IsFollowerInTitleOfType $isFollowerInTitleOf
     * @return self
     */
    public function setIsFollowerInTitleOf(?\DDEX\MWN\MWN_US_LIC_101\IsFollowerInTitleOfType $isFollowerInTitleOf = null)
    {
        $this->isFollowerInTitleOf = $isFollowerInTitleOf;
        return $this;
    }
}


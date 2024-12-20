<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RightShareType
 *
 * A Composite containing details of a RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{
    /**
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether the RightShare Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided RightShare data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @var \DDEX\MWN\MWN_100\RightsAgreementIdType $rightShareId
     */
    private $rightShareId = null;

    /**
     * The Identifier (specific to the Message) of the RightShare within the Release which contains it. This is a LocalRightShareAnchor starting with the letter S.
     *
     * @var string $rightShareReference
     */
    private $rightShareReference = null;

    /**
     * A Composite containing details of one or more Creations contained in the RightShare.
     *
     * @var \DDEX\MWN\MWN_100\RightShareCreationReferenceListType $rightShareCreationReferenceList
     */
    private $rightShareCreationReferenceList = null;

    /**
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\MWN\MWN_100\CurrentTerritoryCodeType[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Type of the RightShare.
     *
     * @var string $rightShareType
     */
    private $rightShareType = null;

    /**
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A Name of a RightsController that is displayed.
     *
     * @var string $rightsControllerDisplayName
     */
    private $rightsControllerDisplayName = null;

    /**
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @var \DDEX\MWN\MWN_100\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     *
     * @var \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * A Flag indicating whether there is no, and never was, a valid claim (and any claim that may have been was made in error) (=True) or not (=False).
     *
     * @var bool $rightShareNotClaimed
     */
    private $rightShareNotClaimed = null;

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @var float $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) that is to be applied to the RightShare.
     *
     * @var \DDEX\MWN\MWN_100\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * The legal status of a License for the RightShare.
     *
     * @var string $licenseStatus
     */
    private $licenseStatus = null;

    /**
     * The Flag indicating whether a RightsController retains the right of refusal regarding the granting of the first licence for creating a SoundRecording of a Musical Work (=True) or not (=False).
     *
     * @var bool $hasFirstLicenseRefusal
     */
    private $hasFirstLicenseRefusal = null;

    /**
     * A Flag indicating whether the MessageSender assumes that the Work is in the PublicDomain (=Yes) or not (=No) for the specified Territory.
     *
     * @var bool $isAssumedPublicDomainWork
     */
    private $isAssumedPublicDomainWork = null;

    /**
     * The Date at which the the MessageSender assumes that the Work will be in the PublicDomain (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var string $assumedDateOfTransitionIntoPublicDomain
     */
    private $assumedDateOfTransitionIntoPublicDomain = null;

    /**
     * A Flag indicating whether the RightShare description is provided as best knowledge by MessageSender (=Yes) or not (=No) in order to help the MessageRecipient in its licensing activities.
     *
     * @var bool $isBestKnowledge
     */
    private $isBestKnowledge = null;

    /**
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=True) or not (=False).
     *
     * @var bool $hasRightsInDispute
     */
    private $hasRightsInDispute = null;

    /**
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $rightShareRightShareReference
     */
    private $rightShareRightShareReference = [
        
    ];

    /**
     * A Composite containing details of a rights claim policy.
     *
     * @var \DDEX\MWN\MWN_100\RightsClaimPolicyType[] $rightsClaimPolicy
     */
    private $rightsClaimPolicy = [
        
    ];

    /**
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @var \DDEX\MWN\MWN_100\RelatedRightShareType[] $relatedRightShare
     */
    private $relatedRightShare = [
        
    ];

    /**
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @var \DDEX\MWN\MWN_100\OriginalPublisherShareType[] $hasOriginalPublisherShare
     */
    private $hasOriginalPublisherShare = [
        
    ];

    /**
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @var \DDEX\MWN\MWN_100\IsFollowerInTitleOfType[] $isFollowerInTitleOf
     */
    private $isFollowerInTitleOf = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as isUpdated
     *
     * The Flag indicating whether the RightShare Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided RightShare data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the RightShare Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided RightShare data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * Gets as rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @return \DDEX\MWN\MWN_100\RightsAgreementIdType
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
     * @param \DDEX\MWN\MWN_100\RightsAgreementIdType $rightShareId
     * @return self
     */
    public function setRightShareId(?\DDEX\MWN\MWN_100\RightsAgreementIdType $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
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
     * Gets as rightShareCreationReferenceList
     *
     * A Composite containing details of one or more Creations contained in the RightShare.
     *
     * @return \DDEX\MWN\MWN_100\RightShareCreationReferenceListType
     */
    public function getRightShareCreationReferenceList()
    {
        return $this->rightShareCreationReferenceList;
    }

    /**
     * Sets a new rightShareCreationReferenceList
     *
     * A Composite containing details of one or more Creations contained in the RightShare.
     *
     * @param \DDEX\MWN\MWN_100\RightShareCreationReferenceListType $rightShareCreationReferenceList
     * @return self
     */
    public function setRightShareCreationReferenceList(?\DDEX\MWN\MWN_100\RightShareCreationReferenceListType $rightShareCreationReferenceList = null)
    {
        $this->rightShareCreationReferenceList = $rightShareCreationReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare applies. Either this Element or ExcludedTerritory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * A Territory to which the RightShare does not apply. Either this Element or Territory shall be present, but not both. The use of ISO TerritoryCodes (or the term 'Worldwide”) is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
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
     * Gets as rightShareType
     *
     * A Type of the RightShare.
     *
     * @return string
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
    public function setRightShareType($rightShareType)
    {
        $this->rightShareType = $rightShareType;
        return $this;
    }

    /**
     * Adds as rightsType
     *
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present.
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
     * @return \DDEX\MWN\MWN_100\RightsTypeType[]
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
     * Adds as musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @return self
     * @param string $musicalWorkRightsClaimType
     */
    public function addToMusicalWorkRightsClaimType($musicalWorkRightsClaimType)
    {
        $this->musicalWorkRightsClaimType[] = $musicalWorkRightsClaimType;
        return $this;
    }

    /**
     * isset musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkRightsClaimType($index)
    {
        return isset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * unset musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkRightsClaimType($index)
    {
        unset($this->musicalWorkRightsClaimType[$index]);
    }

    /**
     * Gets as musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @return string[]
     */
    public function getMusicalWorkRightsClaimType()
    {
        return $this->musicalWorkRightsClaimType;
    }

    /**
     * Sets a new musicalWorkRightsClaimType
     *
     * A Type of the RightsClaim related to a MusicalWork.
     *
     * @param string $musicalWorkRightsClaimType
     * @return self
     */
    public function setMusicalWorkRightsClaimType(array $musicalWorkRightsClaimType = null)
    {
        $this->musicalWorkRightsClaimType = $musicalWorkRightsClaimType;
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
     * Adds as rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\MWN\MWN_100\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsController($index)
    {
        return isset($this->rightsController[$index]);
    }

    /**
     * unset rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsController($index)
    {
        unset($this->rightsController[$index]);
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @return \DDEX\MWN\MWN_100\RightsControllerType[]
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
     * @param \DDEX\MWN\MWN_100\RightsControllerType[] $rightsController
     * @return self
     */
    public function setRightsController(array $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the RightShare is valid.
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
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     *
     * @param \DDEX\MWN\MWN_100\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DDEX\MWN\MWN_100\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as rightShareNotClaimed
     *
     * A Flag indicating whether there is no, and never was, a valid claim (and any claim that may have been was made in error) (=True) or not (=False).
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
     * A Flag indicating whether there is no, and never was, a valid claim (and any claim that may have been was made in error) (=True) or not (=False).
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
     * Gets as rightShareUnknown
     *
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
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
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
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
     * Gets as rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @return float
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value with up to 6 digits (e.g. '12.5' represents 12.5%).
     *
     * @param float $rightSharePercentage
     * @return self
     */
    public function setRightSharePercentage($rightSharePercentage)
    {
        $this->rightSharePercentage = $rightSharePercentage;
        return $this;
    }

    /**
     * Gets as tariffReference
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) that is to be applied to the RightShare.
     *
     * @return \DDEX\MWN\MWN_100\TariffReferenceType
     */
    public function getTariffReference()
    {
        return $this->tariffReference;
    }

    /**
     * Sets a new tariffReference
     *
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) that is to be applied to the RightShare.
     *
     * @param \DDEX\MWN\MWN_100\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DDEX\MWN\MWN_100\TariffReferenceType $tariffReference = null)
    {
        $this->tariffReference = $tariffReference;
        return $this;
    }

    /**
     * Gets as licenseStatus
     *
     * The legal status of a License for the RightShare.
     *
     * @return string
     */
    public function getLicenseStatus()
    {
        return $this->licenseStatus;
    }

    /**
     * Sets a new licenseStatus
     *
     * The legal status of a License for the RightShare.
     *
     * @param string $licenseStatus
     * @return self
     */
    public function setLicenseStatus($licenseStatus)
    {
        $this->licenseStatus = $licenseStatus;
        return $this;
    }

    /**
     * Gets as hasFirstLicenseRefusal
     *
     * The Flag indicating whether a RightsController retains the right of refusal regarding the granting of the first licence for creating a SoundRecording of a Musical Work (=True) or not (=False).
     *
     * @return bool
     */
    public function getHasFirstLicenseRefusal()
    {
        return $this->hasFirstLicenseRefusal;
    }

    /**
     * Sets a new hasFirstLicenseRefusal
     *
     * The Flag indicating whether a RightsController retains the right of refusal regarding the granting of the first licence for creating a SoundRecording of a Musical Work (=True) or not (=False).
     *
     * @param bool $hasFirstLicenseRefusal
     * @return self
     */
    public function setHasFirstLicenseRefusal($hasFirstLicenseRefusal)
    {
        $this->hasFirstLicenseRefusal = $hasFirstLicenseRefusal;
        return $this;
    }

    /**
     * Gets as isAssumedPublicDomainWork
     *
     * A Flag indicating whether the MessageSender assumes that the Work is in the PublicDomain (=Yes) or not (=No) for the specified Territory.
     *
     * @return bool
     */
    public function getIsAssumedPublicDomainWork()
    {
        return $this->isAssumedPublicDomainWork;
    }

    /**
     * Sets a new isAssumedPublicDomainWork
     *
     * A Flag indicating whether the MessageSender assumes that the Work is in the PublicDomain (=Yes) or not (=No) for the specified Territory.
     *
     * @param bool $isAssumedPublicDomainWork
     * @return self
     */
    public function setIsAssumedPublicDomainWork($isAssumedPublicDomainWork)
    {
        $this->isAssumedPublicDomainWork = $isAssumedPublicDomainWork;
        return $this;
    }

    /**
     * Gets as assumedDateOfTransitionIntoPublicDomain
     *
     * The Date at which the the MessageSender assumes that the Work will be in the PublicDomain (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getAssumedDateOfTransitionIntoPublicDomain()
    {
        return $this->assumedDateOfTransitionIntoPublicDomain;
    }

    /**
     * Sets a new assumedDateOfTransitionIntoPublicDomain
     *
     * The Date at which the the MessageSender assumes that the Work will be in the PublicDomain (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param string $assumedDateOfTransitionIntoPublicDomain
     * @return self
     */
    public function setAssumedDateOfTransitionIntoPublicDomain($assumedDateOfTransitionIntoPublicDomain)
    {
        $this->assumedDateOfTransitionIntoPublicDomain = $assumedDateOfTransitionIntoPublicDomain;
        return $this;
    }

    /**
     * Gets as isBestKnowledge
     *
     * A Flag indicating whether the RightShare description is provided as best knowledge by MessageSender (=Yes) or not (=No) in order to help the MessageRecipient in its licensing activities.
     *
     * @return bool
     */
    public function getIsBestKnowledge()
    {
        return $this->isBestKnowledge;
    }

    /**
     * Sets a new isBestKnowledge
     *
     * A Flag indicating whether the RightShare description is provided as best knowledge by MessageSender (=Yes) or not (=No) in order to help the MessageRecipient in its licensing activities.
     *
     * @param bool $isBestKnowledge
     * @return self
     */
    public function setIsBestKnowledge($isBestKnowledge)
    {
        $this->isBestKnowledge = $isBestKnowledge;
        return $this;
    }

    /**
     * Gets as hasRightsInDispute
     *
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=True) or not (=False).
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
     * A Flag indicating whether some rights in a Creation are in dispute as to ownership and/or share percentage (=True) or not (=False).
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
     * Adds as rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $rightShareRightShareReference
     */
    public function addToRightShareRightShareReference($rightShareRightShareReference)
    {
        $this->rightShareRightShareReference[] = $rightShareRightShareReference;
        return $this;
    }

    /**
     * isset rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightShareRightShareReference($index)
    {
        return isset($this->rightShareRightShareReference[$index]);
    }

    /**
     * unset rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightShareRightShareReference($index)
    {
        unset($this->rightShareRightShareReference[$index]);
    }

    /**
     * Gets as rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getRightShareRightShareReference()
    {
        return $this->rightShareRightShareReference;
    }

    /**
     * Sets a new rightShareRightShareReference
     *
     * A Reference for a RightShare (specific to this Message). This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $rightShareRightShareReference
     * @return self
     */
    public function setRightShareRightShareReference(array $rightShareRightShareReference = null)
    {
        $this->rightShareRightShareReference = $rightShareRightShareReference;
        return $this;
    }

    /**
     * Adds as rightsClaimPolicy
     *
     * A Composite containing details of a rights claim policy.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RightsClaimPolicyType $rightsClaimPolicy
     */
    public function addToRightsClaimPolicy(\DDEX\MWN\MWN_100\RightsClaimPolicyType $rightsClaimPolicy)
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
     * @return \DDEX\MWN\MWN_100\RightsClaimPolicyType[]
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
     * @param \DDEX\MWN\MWN_100\RightsClaimPolicyType[] $rightsClaimPolicy
     * @return self
     */
    public function setRightsClaimPolicy(array $rightsClaimPolicy = null)
    {
        $this->rightsClaimPolicy = $rightsClaimPolicy;
        return $this;
    }

    /**
     * Adds as relatedRightShare
     *
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RelatedRightShareType $relatedRightShare
     */
    public function addToRelatedRightShare(\DDEX\MWN\MWN_100\RelatedRightShareType $relatedRightShare)
    {
        $this->relatedRightShare[] = $relatedRightShare;
        return $this;
    }

    /**
     * isset relatedRightShare
     *
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedRightShare($index)
    {
        return isset($this->relatedRightShare[$index]);
    }

    /**
     * unset relatedRightShare
     *
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedRightShare($index)
    {
        unset($this->relatedRightShare[$index]);
    }

    /**
     * Gets as relatedRightShare
     *
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @return \DDEX\MWN\MWN_100\RelatedRightShareType[]
     */
    public function getRelatedRightShare()
    {
        return $this->relatedRightShare;
    }

    /**
     * Sets a new relatedRightShare
     *
     * A Composite containing details of another RightShare which is related to the RightShare.
     *
     * @param \DDEX\MWN\MWN_100\RelatedRightShareType[] $relatedRightShare
     * @return self
     */
    public function setRelatedRightShare(array $relatedRightShare = null)
    {
        $this->relatedRightShare = $relatedRightShare;
        return $this;
    }

    /**
     * Adds as hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\OriginalPublisherShareType $hasOriginalPublisherShare
     */
    public function addToHasOriginalPublisherShare(\DDEX\MWN\MWN_100\OriginalPublisherShareType $hasOriginalPublisherShare)
    {
        $this->hasOriginalPublisherShare[] = $hasOriginalPublisherShare;
        return $this;
    }

    /**
     * isset hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHasOriginalPublisherShare($index)
    {
        return isset($this->hasOriginalPublisherShare[$index]);
    }

    /**
     * unset hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHasOriginalPublisherShare($index)
    {
        unset($this->hasOriginalPublisherShare[$index]);
    }

    /**
     * Gets as hasOriginalPublisherShare
     *
     * A Composite containing details of an OriginalPublisherShare which is related to the RightShare.
     *
     * @return \DDEX\MWN\MWN_100\OriginalPublisherShareType[]
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
     * @param \DDEX\MWN\MWN_100\OriginalPublisherShareType[] $hasOriginalPublisherShare
     * @return self
     */
    public function setHasOriginalPublisherShare(array $hasOriginalPublisherShare = null)
    {
        $this->hasOriginalPublisherShare = $hasOriginalPublisherShare;
        return $this;
    }

    /**
     * Adds as isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\IsFollowerInTitleOfType $isFollowerInTitleOf
     */
    public function addToIsFollowerInTitleOf(\DDEX\MWN\MWN_100\IsFollowerInTitleOfType $isFollowerInTitleOf)
    {
        $this->isFollowerInTitleOf[] = $isFollowerInTitleOf;
        return $this;
    }

    /**
     * isset isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIsFollowerInTitleOf($index)
    {
        return isset($this->isFollowerInTitleOf[$index]);
    }

    /**
     * unset isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIsFollowerInTitleOf($index)
    {
        unset($this->isFollowerInTitleOf[$index]);
    }

    /**
     * Gets as isFollowerInTitleOf
     *
     * A Composite containing details of a RightShare, of which is the RightShare is the follower in title.
     *
     * @return \DDEX\MWN\MWN_100\IsFollowerInTitleOfType[]
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
     * @param \DDEX\MWN\MWN_100\IsFollowerInTitleOfType[] $isFollowerInTitleOf
     * @return self
     */
    public function setIsFollowerInTitleOf(array $isFollowerInTitleOf = null)
    {
        $this->isFollowerInTitleOf = $isFollowerInTitleOf;
        return $this;
    }
}


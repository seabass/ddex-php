<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing RightShareType
 *
 * A Composite containing details of a RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{
    /**
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @var \DDEX\ERN\ERN_360\RightsAgreementIdType $rightShareId
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
     * @var \DDEX\ERN\ERN_360\RightShareCreationReferenceListType $rightShareCreationReferenceList
     */
    private $rightShareCreationReferenceList = null;

    /**
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @var \DDEX\ERN\ERN_360\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A Composite containing details of a nature of a Service, or a Release, as used by a Consumer. One of the Elements RightsType and UseType must be present.
     *
     * @var \DDEX\ERN\ERN_360\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A Composite containing details of a physical interface by which a Consumer uses a Service or Release.
     *
     * @var \DDEX\ERN\ERN_360\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A Composite containing details of a distribution channel used to disseminate a Service or Release to a Consumer.
     *
     * @var \DDEX\ERN\ERN_360\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A Composite containing details of a Carrier.
     *
     * @var \DDEX\ERN\ERN_360\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A Composite containing details of the fundamental business model which applies (e.g. SubscriptionModel and PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the Service or Release.
     *
     * @var \DDEX\ERN\ERN_360\CommercialModelTypeType[] $commercialModelType
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
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @var \DDEX\ERN\ERN_360\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the RightShare is valid.
     *
     * @var \DDEX\ERN\ERN_360\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The Flag indicating whether the RightSharePercentage is unknown (=True) or not (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @var string $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A Composite containing details of a Reference to a TextDocument containing details of a Tariff (in the form of an Identifier, Name or Description) that is to be applied to the RightShare.
     *
     * @var \DDEX\ERN\ERN_360\TariffReferenceType $tariffReference
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
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RightShare as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as rightShareId
     *
     * A Composite containing details of Identifiers for the RightShare.
     *
     * @return \DDEX\ERN\ERN_360\RightsAgreementIdType
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
     * @param \DDEX\ERN\ERN_360\RightsAgreementIdType $rightShareId
     * @return self
     */
    public function setRightShareId(?\DDEX\ERN\ERN_360\RightsAgreementIdType $rightShareId = null)
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
     * @return \DDEX\ERN\ERN_360\RightShareCreationReferenceListType
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
     * @param \DDEX\ERN\ERN_360\RightShareCreationReferenceListType $rightShareCreationReferenceList
     * @return self
     */
    public function setRightShareCreationReferenceList(?\DDEX\ERN\ERN_360\RightShareCreationReferenceListType $rightShareCreationReferenceList = null)
    {
        $this->rightShareCreationReferenceList = $rightShareCreationReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the RightShare applies (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
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
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the RightShare does not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\ERN\ERN_360\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
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
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @return \DDEX\ERN\ERN_360\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A Type of Right covered by the RightShare. One of the Elements RightsType and UseType must be present. The RightsType is defined according to the jurisdiction of the Territory indicated in the TerritoryCode XmlAttribute.
     *
     * @param \DDEX\ERN\ERN_360\RightsTypeType[] $rightsType
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
     * @param \DDEX\ERN\ERN_360\UseTypeType $useType
     */
    public function addToUseType(\DDEX\ERN\ERN_360\UseTypeType $useType)
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
     * @return \DDEX\ERN\ERN_360\UseTypeType[]
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
     * @param \DDEX\ERN\ERN_360\UseTypeType[] $useType
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
     * @param \DDEX\ERN\ERN_360\UserInterfaceTypeType $userInterfaceType
     */
    public function addToUserInterfaceType(\DDEX\ERN\ERN_360\UserInterfaceTypeType $userInterfaceType)
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
     * @return \DDEX\ERN\ERN_360\UserInterfaceTypeType[]
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
     * @param \DDEX\ERN\ERN_360\UserInterfaceTypeType[] $userInterfaceType
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
     * @param \DDEX\ERN\ERN_360\DistributionChannelTypeType $distributionChannelType
     */
    public function addToDistributionChannelType(\DDEX\ERN\ERN_360\DistributionChannelTypeType $distributionChannelType)
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
     * @return \DDEX\ERN\ERN_360\DistributionChannelTypeType[]
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
     * @param \DDEX\ERN\ERN_360\DistributionChannelTypeType[] $distributionChannelType
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
     * @param \DDEX\ERN\ERN_360\CarrierTypeType $carrierType
     */
    public function addToCarrierType(\DDEX\ERN\ERN_360\CarrierTypeType $carrierType)
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
     * @return \DDEX\ERN\ERN_360\CarrierTypeType[]
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
     * @param \DDEX\ERN\ERN_360\CarrierTypeType[] $carrierType
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
     * @param \DDEX\ERN\ERN_360\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\ERN\ERN_360\CommercialModelTypeType $commercialModelType)
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
     * @return \DDEX\ERN\ERN_360\CommercialModelTypeType[]
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
     * @param \DDEX\ERN\ERN_360\CommercialModelTypeType[] $commercialModelType
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
     * Adds as rightsController
     *
     * A Composite containing details of a RightsController of Rights in a Creation.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\ERN\ERN_360\RightsControllerType $rightsController)
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
     * @return \DDEX\ERN\ERN_360\RightsControllerType[]
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
     * @param \DDEX\ERN\ERN_360\RightsControllerType[] $rightsController
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
     * @return \DDEX\ERN\ERN_360\PeriodType
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
     * @param \DDEX\ERN\ERN_360\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\DDEX\ERN\ERN_360\PeriodType $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
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
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @return string
     */
    public function getRightSharePercentage()
    {
        return $this->rightSharePercentage;
    }

    /**
     * Sets a new rightSharePercentage
     *
     * The share of the licensed Rights owned by the RightsController. RightShare information is given as a xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8' represents 12.5%).
     *
     * @param string $rightSharePercentage
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
     * @return \DDEX\ERN\ERN_360\TariffReferenceType
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
     * @param \DDEX\ERN\ERN_360\TariffReferenceType $tariffReference
     * @return self
     */
    public function setTariffReference(?\DDEX\ERN\ERN_360\TariffReferenceType $tariffReference = null)
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
}


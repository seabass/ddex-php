<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing RightShareType
 *
 * A ddex:Composite containing details of a
 *  ddex:RightShare.
 * XSD Type: RightShare
 */
class RightShareType
{
    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The ddex:Flag indicating whether the
     *  ddex:RightShare ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:RightShare data with the now provided
     *  data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * A ddex:Composite containing details of
     *  ddex:Identifiers for the ddexC:RightShare.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightShareId
     */
    private $rightShareId = null;

    /**
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it.
     *  This is a ddex:LocalRightShareAnchor starting with the letter
     *  S.
     *
     * @var string $rightShareReference
     */
    private $rightShareReference = null;

    /**
     * A ddex:Composite containing details of one
     *  or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @var \DDEX\ddexC\RightShareCreationReferenceListType $rightShareCreationReferenceList
     */
    private $rightShareCreationReferenceList = null;

    /**
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
     *
     * @var \DDEX\ddexC\RightsTypeType[] $rightsType
     */
    private $rightsType = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @var \DDEX\ddexC\UseTypeType[] $useType
     */
    private $useType = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
     *
     * @var \DDEX\ddexC\UserInterfaceTypeType[] $userInterfaceType
     */
    private $userInterfaceType = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
     *
     * @var \DDEX\ddexC\DistributionChannelTypeType[] $distributionChannelType
     */
    private $distributionChannelType = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
     *
     * @var \DDEX\ddexC\CarrierTypeType[] $carrierType
     */
    private $carrierType = [
        
    ];

    /**
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @var \DDEX\ddexC\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
     *
     * @var \DDEX\ddexC\RightsControllerType[] $rightsController
     */
    private $rightsController = [
        
    ];

    /**
     * A ddex:Composite containing details about
     *  the ddex:Period of ddex:Time for which the ddexC:RightShare is
     *  valid.
     *
     * @var \DDEX\ddexC\PeriodType $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * The ddex:Flag indicating whether the
     *  ddex:RightSharePercentage is unknown (=True) or not
     *  (=False).
     *
     * @var bool $rightShareUnknown
     */
    private $rightShareUnknown = null;

    /**
     * The share of the licensed Rights owned
     *  by the ddex:RightsController. ddexC:RightShare information is given as a
     *  xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8'
     *  represents 12.5%).
     *
     * @var string $rightSharePercentage
     */
    private $rightSharePercentage = null;

    /**
     * A ddex:Composite containing details of a
     *  ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the
     *  form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied
     *  to the ddexC:RightShare.
     *
     * @var \DDEX\ddexC\TariffReferenceType $tariffReference
     */
    private $tariffReference = null;

    /**
     * The legal status of a ddex:License for the
     *  ddexC:RightShare.
     *
     * @var string $licenseStatus
     */
    private $licenseStatus = null;

    /**
     * The ddex:Flag indicating whether a
     *  ddex:RightsController retains the right of refusal regarding the granting of the
     *  first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or
     *  not (=False).
     *
     * @var bool $hasFirstLicenseRefusal
     */
    private $hasFirstLicenseRefusal = null;

    /**
     * A ddex:Flag indicating whether the
     *  ddex:MessageSender assumes that the ddex:Work is in the ddex:PublicDomain
     *  (=Yes) or not (=No) for the specified ddex:Territory.
     *
     * @var bool $isAssumedPublicDomainWork
     */
    private $isAssumedPublicDomainWork = null;

    /**
     * The Date at which the the
     *  ddex:MessageSender assumes that the ddex:Work will be in the ddex:PublicDomain
     *  (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DateTime $assumedDateOfTransitionIntoPublicDomain
     */
    private $assumedDateOfTransitionIntoPublicDomain = null;

    /**
     * A ddex:Flag indicating whether the
     *  ddex:RightShare description is provided as best knowledge by ddex:MessageSender
     *  (=Yes) or not (=No) in order to help the ddex:MessageRecipient in its licensing
     *  activities.
     *
     * @var bool $isBestKnowledge
     */
    private $isBestKnowledge = null;

    /**
     * A ddex:Flag indicating whether some
     *  rights in a ddex:Creation are in dispute as to ownership and/or share
     *  percentage (=True) or not (=False).
     *
     * @var bool $hasRightsInDispute
     */
    private $hasRightsInDispute = null;

    /**
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @var string[] $rightShareRightShareReference
     */
    private $rightShareRightShareReference = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the
     *  ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
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
     * The ddex:Language and script for the
     *  ddex:Elements of the ddexC:RightShare as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
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
     * The ddex:Flag indicating whether the
     *  ddex:RightShare ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:RightShare data with the now provided
     *  data.
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
     * The ddex:Flag indicating whether the
     *  ddex:RightShare ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:RightShare data with the now provided
     *  data.
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
     * A ddex:Composite containing details of
     *  ddex:Identifiers for the ddexC:RightShare.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightShareId()
    {
        return $this->rightShareId;
    }

    /**
     * Sets a new rightShareId
     *
     * A ddex:Composite containing details of
     *  ddex:Identifiers for the ddexC:RightShare.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightShareId
     * @return self
     */
    public function setRightShareId(?\DDEX\ddexC\RightsAgreementIdType $rightShareId = null)
    {
        $this->rightShareId = $rightShareId;
        return $this;
    }

    /**
     * Gets as rightShareReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it.
     *  This is a ddex:LocalRightShareAnchor starting with the letter
     *  S.
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
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddexC:RightShare within the ddex:Release which contains it.
     *  This is a ddex:LocalRightShareAnchor starting with the letter
     *  S.
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
     * A ddex:Composite containing details of one
     *  or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @return \DDEX\ddexC\RightShareCreationReferenceListType
     */
    public function getRightShareCreationReferenceList()
    {
        return $this->rightShareCreationReferenceList;
    }

    /**
     * Sets a new rightShareCreationReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:Creations contained in the ddexC:RightShare.
     *
     * @param \DDEX\ddexC\RightShareCreationReferenceListType $rightShareCreationReferenceList
     * @return self
     */
    public function setRightShareCreationReferenceList(?\DDEX\ddexC\RightShareCreationReferenceListType $rightShareCreationReferenceList = null)
    {
        $this->rightShareCreationReferenceList = $rightShareCreationReferenceList;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare applies (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory
     *  shall be present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Territory to which the
     *  ddexC:RightShare does not apply (represented by an ISO 3166-1
     *  iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be
     *  present, but not both.
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
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
     *
     * @return self
     * @param \DDEX\ddexC\RightsTypeType $rightsType
     */
    public function addToRightsType(\DDEX\ddexC\RightsTypeType $rightsType)
    {
        $this->rightsType[] = $rightsType;
        return $this;
    }

    /**
     * isset rightsType
     *
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
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
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
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
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
     *
     * @return \DDEX\ddexC\RightsTypeType[]
     */
    public function getRightsType()
    {
        return $this->rightsType;
    }

    /**
     * Sets a new rightsType
     *
     * A ddex:Type of ddex:Right covered by the
     *  ddexC:RightShare. One of the ddex:Elements RightsType and ddex:UseType must be
     *  present. The RightsType is defined according to the jurisdiction of the
     *  ddex:Territory indicated in the iso3166a2:TerritoryCode
     *  ddex:XmlAttribute.
     *
     * @param \DDEX\ddexC\RightsTypeType[] $rightsType
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
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
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
     * A ddex:Composite containing details of a
     *  nature of a ddex:Service, or a ddex:Release, as used by a ddex:Consumer. One of
     *  the ddex:Elements RightsType and ddex:UseType must be present.
     *
     * @param \DDEX\ddexC\UseTypeType[] $useType
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
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
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
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
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
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
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
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
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
     * A ddex:Composite containing details of a
     *  physical interface by which a ddex:Consumer uses a ddex:Service or
     *  ddex:Release.
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
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
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
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
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
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
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
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
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
     * A ddex:Composite containing details of a
     *  distribution channel used to disseminate a ddex:Service or ddex:Release to a
     *  ddex:Consumer.
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
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
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
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
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
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
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
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
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
     * A ddex:Composite containing details of a
     *  ddex:Carrier.
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
     * Adds as commercialModelType
     *
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @return self
     * @param \DDEX\ddexC\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\ddexC\CommercialModelTypeType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
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
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @return \DDEX\ddexC\CommercialModelTypeType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A ddex:Composite containing details of the
     *  fundamental business model which applies (e.g. ddex:SubscriptionModel and
     *  ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the
     *  ddex:Consumer pays for the ddex:Service or ddex:Release.
     *
     * @param \DDEX\ddexC\CommercialModelTypeType[] $commercialModelType
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
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
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
     * A ddex:Type of the ddex:RightsClaim
     *  related to a ddex:MusicalWork.
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
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
     *
     * @return self
     * @param \DDEX\ddexC\RightsControllerType $rightsController
     */
    public function addToRightsController(\DDEX\ddexC\RightsControllerType $rightsController)
    {
        $this->rightsController[] = $rightsController;
        return $this;
    }

    /**
     * isset rightsController
     *
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
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
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
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
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
     *
     * @return \DDEX\ddexC\RightsControllerType[]
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A ddex:Composite containing details of a
     *  ddex:RightsController of Rights in a ddex:Creation.
     *
     * @param \DDEX\ddexC\RightsControllerType[] $rightsController
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
     * A ddex:Composite containing details about
     *  the ddex:Period of ddex:Time for which the ddexC:RightShare is
     *  valid.
     *
     * @return \DDEX\ddexC\PeriodType
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A ddex:Composite containing details about
     *  the ddex:Period of ddex:Time for which the ddexC:RightShare is
     *  valid.
     *
     * @param \DDEX\ddexC\PeriodType $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\DDEX\ddexC\PeriodType $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as rightShareUnknown
     *
     * The ddex:Flag indicating whether the
     *  ddex:RightSharePercentage is unknown (=True) or not
     *  (=False).
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
     * The ddex:Flag indicating whether the
     *  ddex:RightSharePercentage is unknown (=True) or not
     *  (=False).
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
     * The share of the licensed Rights owned
     *  by the ddex:RightsController. ddexC:RightShare information is given as a
     *  xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8'
     *  represents 12.5%).
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
     * The share of the licensed Rights owned
     *  by the ddex:RightsController. ddexC:RightShare information is given as a
     *  xs:decimal value (e.g. '0.125' represents 12.5%) or as a fraction (e.g. '1/8'
     *  represents 12.5%).
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
     * A ddex:Composite containing details of a
     *  ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the
     *  form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied
     *  to the ddexC:RightShare.
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
     * A ddex:Composite containing details of a
     *  ddex:Reference to a ddex:TextDocument containing details of a ddex:Tariff (in the
     *  form of an ddex:Identifier, ddex:Name or ddex:Description) that is to be applied
     *  to the ddexC:RightShare.
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
     * Gets as licenseStatus
     *
     * The legal status of a ddex:License for the
     *  ddexC:RightShare.
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
     * The legal status of a ddex:License for the
     *  ddexC:RightShare.
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
     * The ddex:Flag indicating whether a
     *  ddex:RightsController retains the right of refusal regarding the granting of the
     *  first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or
     *  not (=False).
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
     * The ddex:Flag indicating whether a
     *  ddex:RightsController retains the right of refusal regarding the granting of the
     *  first licence for creating a ddex:SoundRecording of a Musical ddex:Work (=True) or
     *  not (=False).
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
     * A ddex:Flag indicating whether the
     *  ddex:MessageSender assumes that the ddex:Work is in the ddex:PublicDomain
     *  (=Yes) or not (=No) for the specified ddex:Territory.
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
     * A ddex:Flag indicating whether the
     *  ddex:MessageSender assumes that the ddex:Work is in the ddex:PublicDomain
     *  (=Yes) or not (=No) for the specified ddex:Territory.
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
     * The Date at which the the
     *  ddex:MessageSender assumes that the ddex:Work will be in the ddex:PublicDomain
     *  (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DateTime
     */
    public function getAssumedDateOfTransitionIntoPublicDomain()
    {
        return $this->assumedDateOfTransitionIntoPublicDomain;
    }

    /**
     * Sets a new assumedDateOfTransitionIntoPublicDomain
     *
     * The Date at which the the
     *  ddex:MessageSender assumes that the ddex:Work will be in the ddex:PublicDomain
     *  (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DateTime $assumedDateOfTransitionIntoPublicDomain
     * @return self
     */
    public function setAssumedDateOfTransitionIntoPublicDomain(?\DateTime $assumedDateOfTransitionIntoPublicDomain = null)
    {
        $this->assumedDateOfTransitionIntoPublicDomain = $assumedDateOfTransitionIntoPublicDomain;
        return $this;
    }

    /**
     * Gets as isBestKnowledge
     *
     * A ddex:Flag indicating whether the
     *  ddex:RightShare description is provided as best knowledge by ddex:MessageSender
     *  (=Yes) or not (=No) in order to help the ddex:MessageRecipient in its licensing
     *  activities.
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
     * A ddex:Flag indicating whether the
     *  ddex:RightShare description is provided as best knowledge by ddex:MessageSender
     *  (=Yes) or not (=No) in order to help the ddex:MessageRecipient in its licensing
     *  activities.
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
     * A ddex:Flag indicating whether some
     *  rights in a ddex:Creation are in dispute as to ownership and/or share
     *  percentage (=True) or not (=False).
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
     * A ddex:Flag indicating whether some
     *  rights in a ddex:Creation are in dispute as to ownership and/or share
     *  percentage (=True) or not (=False).
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
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
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
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
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
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
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
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
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
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @param string $rightShareRightShareReference
     * @return self
     */
    public function setRightShareRightShareReference(array $rightShareRightShareReference = null)
    {
        $this->rightShareRightShareReference = $rightShareRightShareReference;
        return $this;
    }
}


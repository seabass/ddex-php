<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing MusicalWorkType
 *
 * A ddex:Composite containing details of a
 *  ddex:MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * The ddex:Flag indicating whether the
     *  ddex:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:MusicalWork data with the now provided
     *  data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The ddex:Language and script for the
     *  ddex:Elements of the ddex:MusicalWork as defined in IETF RfC 4646. The default is the
     *  same as indicated for the containing composite. ddex:Language and Script are provided
     *  as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML
     *  ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:MusicalWork within the ddex:Release which contains it.
     *  This is a ddex:LocalMusicalWorkAnchor starting with the letter
     *  W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A ddex:Composite containing details of a
     *  ddex:ReferenceTitle of the ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * The ddex:Flag indicating whether the
     *  mwl:MusicalWork is a ddex:Medley (=True) or not (=False).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * A ddex:Flag indicating whether some rights
     *  in the mwl:MusicalWork are in dispute as to ownership and/or share percentage
     *  (=True) or not (=False). Absence of this element should not be interpreted as
     *  there being no dispute.
     *
     * @var bool $hasRightsInDispute
     */
    private $hasRightsInDispute = null;

    /**
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License or a ddex:Claim for the
     *  ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @var string[] $workRightShareReferenceList
     */
    private $workRightShareReferenceList = null;

    /**
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\MusicalWorkContributorType[] $musicalWorkContributor
     */
    private $musicalWorkContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @var \DDEX\ddexC\MusicalWorkTypeType[] $musicalWorkType
     */
    private $musicalWorkType = [
        
    ];

    /**
     * A ddex:Type of the ddex:RightsClaim
     *  related to the ddex:MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @var \DDEX\ddexC\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     */
    private $musicalWorkDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The ddex:Flag indicating whether the
     *  ddex:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:MusicalWork data with the now provided
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
     *  ddex:MusicalWork ddex:Element was updated (=True) or not (=False). The ddex:Flag may
     *  only be used when the ddex:UpdateIndicator is set to ddex:UpdateMessage. When this
     *  ddex:Boolean ddex:Flag is set to true, the ddex:MessageRecipient is expected to
     *  replace any previously provided ddex:MusicalWork data with the now provided
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
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the
     *  ddex:Elements of the ddex:MusicalWork as defined in IETF RfC 4646. The default is the
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
     *  ddex:Elements of the ddex:MusicalWork as defined in IETF RfC 4646. The default is the
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
     * Adds as musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\ddexC\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkId($index)
    {
        return isset($this->musicalWorkId[$index]);
    }

    /**
     * unset musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkId($index)
    {
        unset($this->musicalWorkId[$index]);
    }

    /**
     * Gets as musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A ddex:Composite containing details of a
     *  ddex:MusicalWorkId of the ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\MusicalWorkIdType[] $musicalWorkId
     * @return self
     */
    public function setMusicalWorkId(array $musicalWorkId)
    {
        $this->musicalWorkId = $musicalWorkId;
        return $this;
    }

    /**
     * Gets as musicalWorkReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:MusicalWork within the ddex:Release which contains it.
     *  This is a ddex:LocalMusicalWorkAnchor starting with the letter
     *  W.
     *
     * @return string
     */
    public function getMusicalWorkReference()
    {
        return $this->musicalWorkReference;
    }

    /**
     * Sets a new musicalWorkReference
     *
     * The ddex:Identifier (specific to the
     *  ddex:Message) of the ddex:MusicalWork within the ddex:Release which contains it.
     *  This is a ddex:LocalMusicalWorkAnchor starting with the letter
     *  W.
     *
     * @param string $musicalWorkReference
     * @return self
     */
    public function setMusicalWorkReference($musicalWorkReference)
    {
        $this->musicalWorkReference = $musicalWorkReference;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A ddex:Composite containing details of a
     *  ddex:ReferenceTitle of the ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A ddex:Composite containing details of a
     *  ddex:ReferenceTitle of the ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\ddexC\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The ddex:Flag indicating whether the
     *  mwl:MusicalWork is a ddex:Medley (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsMedley()
    {
        return $this->isMedley;
    }

    /**
     * Sets a new isMedley
     *
     * The ddex:Flag indicating whether the
     *  mwl:MusicalWork is a ddex:Medley (=True) or not (=False).
     *
     * @param bool $isMedley
     * @return self
     */
    public function setIsMedley($isMedley)
    {
        $this->isMedley = $isMedley;
        return $this;
    }

    /**
     * Gets as hasRightsInDispute
     *
     * A ddex:Flag indicating whether some rights
     *  in the mwl:MusicalWork are in dispute as to ownership and/or share percentage
     *  (=True) or not (=False). Absence of this element should not be interpreted as
     *  there being no dispute.
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
     * A ddex:Flag indicating whether some rights
     *  in the mwl:MusicalWork are in dispute as to ownership and/or share percentage
     *  (=True) or not (=False). Absence of this element should not be interpreted as
     *  there being no dispute.
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
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License or a ddex:Claim for the
     *  ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A ddex:Composite containing details of
     *  ddex:Identifiers of a ddex:License or a ddex:Claim for the
     *  ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\ddexC\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as workRightShareReference
     *
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @return self
     * @param string $workRightShareReference
     */
    public function addToWorkRightShareReferenceList($workRightShareReference)
    {
        $this->workRightShareReferenceList[] = $workRightShareReference;
        return $this;
    }

    /**
     * isset workRightShareReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkRightShareReferenceList($index)
    {
        return isset($this->workRightShareReferenceList[$index]);
    }

    /**
     * unset workRightShareReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkRightShareReferenceList($index)
    {
        unset($this->workRightShareReferenceList[$index]);
    }

    /**
     * Gets as workRightShareReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @return string[]
     */
    public function getWorkRightShareReferenceList()
    {
        return $this->workRightShareReferenceList;
    }

    /**
     * Sets a new workRightShareReferenceList
     *
     * A ddex:Composite containing details of one
     *  or more ddex:RightShares contained in the ddex:MusicalWork.
     *
     * @param string $workRightShareReferenceList
     * @return self
     */
    public function setWorkRightShareReferenceList(array $workRightShareReferenceList = null)
    {
        $this->workRightShareReferenceList = $workRightShareReferenceList;
        return $this;
    }

    /**
     * Adds as musicalWorkContributor
     *
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkContributorType $musicalWorkContributor
     */
    public function addToMusicalWorkContributor(\DDEX\ddexC\MusicalWorkContributorType $musicalWorkContributor)
    {
        $this->musicalWorkContributor[] = $musicalWorkContributor;
        return $this;
    }

    /**
     * isset musicalWorkContributor
     *
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkContributor($index)
    {
        return isset($this->musicalWorkContributor[$index]);
    }

    /**
     * unset musicalWorkContributor
     *
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkContributor($index)
    {
        unset($this->musicalWorkContributor[$index]);
    }

    /**
     * Gets as musicalWorkContributor
     *
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\MusicalWorkContributorType[]
     */
    public function getMusicalWorkContributor()
    {
        return $this->musicalWorkContributor;
    }

    /**
     * Sets a new musicalWorkContributor
     *
     * A ddex:Composite containing details a
     *  ddex:MusicalWorkContributor to the ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\MusicalWorkContributorType[] $musicalWorkContributor
     * @return self
     */
    public function setMusicalWorkContributor(array $musicalWorkContributor)
    {
        $this->musicalWorkContributor = $musicalWorkContributor;
        return $this;
    }

    /**
     * Adds as musicalWorkType
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkTypeType $musicalWorkType
     */
    public function addToMusicalWorkType(\DDEX\ddexC\MusicalWorkTypeType $musicalWorkType)
    {
        $this->musicalWorkType[] = $musicalWorkType;
        return $this;
    }

    /**
     * isset musicalWorkType
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkType($index)
    {
        return isset($this->musicalWorkType[$index]);
    }

    /**
     * unset musicalWorkType
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkType($index)
    {
        unset($this->musicalWorkType[$index]);
    }

    /**
     * Gets as musicalWorkType
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @return \DDEX\ddexC\MusicalWorkTypeType[]
     */
    public function getMusicalWorkType()
    {
        return $this->musicalWorkType;
    }

    /**
     * Sets a new musicalWorkType
     *
     * A ddex:Composite containing details of the
     *  ddex:Type of the ddex:MusicalWork.
     *
     * @param \DDEX\ddexC\MusicalWorkTypeType[] $musicalWorkType
     * @return self
     */
    public function setMusicalWorkType(array $musicalWorkType = null)
    {
        $this->musicalWorkType = $musicalWorkType;
        return $this;
    }

    /**
     * Adds as musicalWorkRightsClaimType
     *
     * A ddex:Type of the ddex:RightsClaim
     *  related to the ddex:MusicalWork.
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
     *  related to the ddex:MusicalWork.
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
     *  related to the ddex:MusicalWork.
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
     *  related to the ddex:MusicalWork.
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
     *  related to the ddex:MusicalWork.
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
     * Adds as musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @return self
     * @param \DDEX\ddexC\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory
     */
    public function addToMusicalWorkDetailsByTerritory(\DDEX\ddexC\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory)
    {
        $this->musicalWorkDetailsByTerritory[] = $musicalWorkDetailsByTerritory;
        return $this;
    }

    /**
     * isset musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkDetailsByTerritory($index)
    {
        return isset($this->musicalWorkDetailsByTerritory[$index]);
    }

    /**
     * unset musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkDetailsByTerritory($index)
    {
        unset($this->musicalWorkDetailsByTerritory[$index]);
    }

    /**
     * Gets as musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @return \DDEX\ddexC\MusicalWorkDetailsByTerritoryType[]
     */
    public function getMusicalWorkDetailsByTerritory()
    {
        return $this->musicalWorkDetailsByTerritory;
    }

    /**
     * Sets a new musicalWorkDetailsByTerritory
     *
     * A ddex:Composite containing details of
     *  ddex:Descriptors and other attributes of the ddex:MusicalWork which may vary
     *  according to ddex:Territory of release.
     *
     * @param \DDEX\ddexC\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     * @return self
     */
    public function setMusicalWorkDetailsByTerritory(array $musicalWorkDetailsByTerritory = null)
    {
        $this->musicalWorkDetailsByTerritory = $musicalWorkDetailsByTerritory;
        return $this;
    }
}


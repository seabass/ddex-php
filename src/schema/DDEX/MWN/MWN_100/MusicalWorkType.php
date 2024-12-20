<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing MusicalWorkType
 *
 * A Composite containing details of a MusicalWork.
 * XSD Type: MusicalWork
 */
class MusicalWorkType
{
    /**
     * The Flag indicating whether the MusicalWork Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\MusicalWorkIdType[] $musicalWorkId
     */
    private $musicalWorkId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
     *
     * @var string $musicalWorkReference
     */
    private $musicalWorkReference = null;

    /**
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The Flag indicating whether the MusicalWork is a Medley (=True) or not (=False).
     *
     * @var bool $isMedley
     */
    private $isMedley = null;

    /**
     * A Flag indicating whether some rights in the MusicalWork are in dispute as to ownership and/or share percentage (=True) or not (=False). Absence of this element should not be interpreted as there being no dispute.
     *
     * @var bool $hasRightsInDispute
     */
    private $hasRightsInDispute = null;

    /**
     * A Composite containing details of Identifiers of a License or a Claim for the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
     *
     * @var string[] $workRightShareReferenceList
     */
    private $workRightShareReferenceList = null;

    /**
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\MusicalWorkContributorType[] $musicalWorkContributor
     */
    private $musicalWorkContributor = [
        
    ];

    /**
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\MusicalWorkTypeType[] $musicalWorkType
     */
    private $musicalWorkType = [
        
    ];

    /**
     * A Type of the RightsClaim related to the MusicalWork.
     *
     * @var string[] $musicalWorkRightsClaimType
     */
    private $musicalWorkRightsClaimType = [
        
    ];

    /**
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @var \DDEX\MWN\MWN_100\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     */
    private $musicalWorkDetailsByTerritory = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the MusicalWork Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Flag indicating whether the MusicalWork Element was updated (=True) or not (=False). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided MusicalWork data with the now provided data. This attribute is deprecated. DDEX advises that it may be removed at a future date and therefore recommends against using it.
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
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the MusicalWork as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MusicalWorkIdType $musicalWorkId
     */
    public function addToMusicalWorkId(\DDEX\MWN\MWN_100\MusicalWorkIdType $musicalWorkId)
    {
        $this->musicalWorkId[] = $musicalWorkId;
        return $this;
    }

    /**
     * isset musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
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
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
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
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\MusicalWorkIdType[]
     */
    public function getMusicalWorkId()
    {
        return $this->musicalWorkId;
    }

    /**
     * Sets a new musicalWorkId
     *
     * A Composite containing details of a MusicalWorkId of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\MusicalWorkIdType[] $musicalWorkId
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
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
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
     * The Identifier (specific to the Message) of the MusicalWork within the Release which contains it. This is a LocalMusicalWorkAnchor starting with the letter W.
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
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of a ReferenceTitle of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\TitleType $title
     */
    public function addToTitle(\DDEX\MWN\MWN_100\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as isMedley
     *
     * The Flag indicating whether the MusicalWork is a Medley (=True) or not (=False).
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
     * The Flag indicating whether the MusicalWork is a Medley (=True) or not (=False).
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
     * A Flag indicating whether some rights in the MusicalWork are in dispute as to ownership and/or share percentage (=True) or not (=False). Absence of this element should not be interpreted as there being no dispute.
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
     * A Flag indicating whether some rights in the MusicalWork are in dispute as to ownership and/or share percentage (=True) or not (=False). Absence of this element should not be interpreted as there being no dispute.
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
     * A Composite containing details of Identifiers of a License or a Claim for the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\RightsAgreementIdType
     */
    public function getRightsAgreementId()
    {
        return $this->rightsAgreementId;
    }

    /**
     * Sets a new rightsAgreementId
     *
     * A Composite containing details of Identifiers of a License or a Claim for the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId
     * @return self
     */
    public function setRightsAgreementId(?\DDEX\MWN\MWN_100\RightsAgreementIdType $rightsAgreementId = null)
    {
        $this->rightsAgreementId = $rightsAgreementId;
        return $this;
    }

    /**
     * Adds as workRightShareReference
     *
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
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
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
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
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
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
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
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
     * A Composite containing details of one or more RightShares contained in the MusicalWork.
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
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MusicalWorkContributorType $musicalWorkContributor
     */
    public function addToMusicalWorkContributor(\DDEX\MWN\MWN_100\MusicalWorkContributorType $musicalWorkContributor)
    {
        $this->musicalWorkContributor[] = $musicalWorkContributor;
        return $this;
    }

    /**
     * isset musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
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
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
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
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\MusicalWorkContributorType[]
     */
    public function getMusicalWorkContributor()
    {
        return $this->musicalWorkContributor;
    }

    /**
     * Sets a new musicalWorkContributor
     *
     * A Composite containing details a MusicalWorkContributor to the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\MusicalWorkContributorType[] $musicalWorkContributor
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
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MusicalWorkTypeType $musicalWorkType
     */
    public function addToMusicalWorkType(\DDEX\MWN\MWN_100\MusicalWorkTypeType $musicalWorkType)
    {
        $this->musicalWorkType[] = $musicalWorkType;
        return $this;
    }

    /**
     * isset musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
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
     * A Composite containing details of the Type of the MusicalWork.
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
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\MusicalWorkTypeType[]
     */
    public function getMusicalWorkType()
    {
        return $this->musicalWorkType;
    }

    /**
     * Sets a new musicalWorkType
     *
     * A Composite containing details of the Type of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\MusicalWorkTypeType[] $musicalWorkType
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
     * A Type of the RightsClaim related to the MusicalWork.
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
     * A Type of the RightsClaim related to the MusicalWork.
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
     * A Type of the RightsClaim related to the MusicalWork.
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
     * A Type of the RightsClaim related to the MusicalWork.
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
     * A Type of the RightsClaim related to the MusicalWork.
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
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory
     */
    public function addToMusicalWorkDetailsByTerritory(\DDEX\MWN\MWN_100\MusicalWorkDetailsByTerritoryType $musicalWorkDetailsByTerritory)
    {
        $this->musicalWorkDetailsByTerritory[] = $musicalWorkDetailsByTerritory;
        return $this;
    }

    /**
     * isset musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
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
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @return \DDEX\MWN\MWN_100\MusicalWorkDetailsByTerritoryType[]
     */
    public function getMusicalWorkDetailsByTerritory()
    {
        return $this->musicalWorkDetailsByTerritory;
    }

    /**
     * Sets a new musicalWorkDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MusicalWork which may vary according to Territory of release.
     *
     * @param \DDEX\MWN\MWN_100\MusicalWorkDetailsByTerritoryType[] $musicalWorkDetailsByTerritory
     * @return self
     */
    public function setMusicalWorkDetailsByTerritory(array $musicalWorkDetailsByTerritory = null)
    {
        $this->musicalWorkDetailsByTerritory = $musicalWorkDetailsByTerritory;
        return $this;
    }
}


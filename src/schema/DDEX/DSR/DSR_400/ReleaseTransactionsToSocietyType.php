<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing ReleaseTransactionsToSocietyType
 *
 * A ddex:Composite containing details of ddex:SalesTransactions for a ddex:Release or a ddex:Resource, reported by a ddex:DSP to a ddex:WorkLicensor.
 * XSD Type: ReleaseTransactionsToSociety
 */
class ReleaseTransactionsToSocietyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddex:ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $transactionReleaseReference
     */
    private $transactionReleaseReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $transactionResourceReference
     */
    private $transactionResourceReference = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:Type of the ddex:Resource.
     *
     * @var \DDEX\ddexC\ResourceTypeType $resourceType
     */
    private $resourceType = null;

    /**
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal under which sales were transacted. (Note: The ddex:Amount reported in this ddex:Composite is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_400\DetailedDealType $deal
     */
    private $deal = null;

    /**
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @var \DDEX\DSR\DSR_400\SalesTransactionToSocietyType[] $salesTransaction
     */
    private $salesTransaction = [
        
    ];

    /**
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release or ddex:Resource.
     *
     * @var \DDEX\ddexC\RightsAgreementIdType $rightsAgreementId
     */
    private $rightsAgreementId = null;

    /**
     * A ddex:Composite containing the ddex:Comment about the ddex:ReleaseTransactions ddex:Composite.
     *
     * @var \DDEX\ddexC\CommentType $comment
     */
    private $comment = null;

    /**
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @var \DDEX\ddexC\DurationByUseTypeType[] $durationUsed
     */
    private $durationUsed = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddex:ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddex:ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as transactionReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $transactionReleaseReference
     */
    public function addToTransactionReleaseReference($transactionReleaseReference)
    {
        $this->transactionReleaseReference[] = $transactionReleaseReference;
        return $this;
    }

    /**
     * isset transactionReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionReleaseReference($index)
    {
        return isset($this->transactionReleaseReference[$index]);
    }

    /**
     * unset transactionReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionReleaseReference($index)
    {
        unset($this->transactionReleaseReference[$index]);
    }

    /**
     * Gets as transactionReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getTransactionReleaseReference()
    {
        return $this->transactionReleaseReference;
    }

    /**
     * Sets a new transactionReleaseReference
     *
     * A ddex:Reference for a ddex:Release (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $transactionReleaseReference
     * @return self
     */
    public function setTransactionReleaseReference(array $transactionReleaseReference = null)
    {
        $this->transactionReleaseReference = $transactionReleaseReference;
        return $this;
    }

    /**
     * Adds as transactionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $transactionResourceReference
     */
    public function addToTransactionResourceReference($transactionResourceReference)
    {
        $this->transactionResourceReference[] = $transactionResourceReference;
        return $this;
    }

    /**
     * isset transactionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionResourceReference($index)
    {
        return isset($this->transactionResourceReference[$index]);
    }

    /**
     * unset transactionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionResourceReference($index)
    {
        unset($this->transactionResourceReference[$index]);
    }

    /**
     * Gets as transactionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getTransactionResourceReference()
    {
        return $this->transactionResourceReference;
    }

    /**
     * Sets a new transactionResourceReference
     *
     * A ddex:Reference for a ddex:Resource (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $transactionResourceReference
     * @return self
     */
    public function setTransactionResourceReference(array $transactionResourceReference = null)
    {
        $this->transactionResourceReference = $transactionResourceReference;
        return $this;
    }

    /**
     * Gets as resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Resource.
     *
     * @return \DDEX\ddexC\ResourceTypeType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A ddex:Composite containing details of the ddex:Type of the ddex:Resource.
     *
     * @param \DDEX\ddexC\ResourceTypeType $resourceType
     * @return self
     */
    public function setResourceType(?\DDEX\ddexC\ResourceTypeType $resourceType = null)
    {
        $this->resourceType = $resourceType;
        return $this;
    }

    /**
     * Gets as deal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal under which sales were transacted. (Note: The ddex:Amount reported in this ddex:Composite is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @return \DDEX\DSR\DSR_400\DetailedDealType
     */
    public function getDeal()
    {
        return $this->deal;
    }

    /**
     * Sets a new deal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal under which sales were transacted. (Note: The ddex:Amount reported in this ddex:Composite is an estimate based on best knowledge on the side of the ddex:MessageSender with respect to the intellectual property rights controlled by the ddex:MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @param \DDEX\DSR\DSR_400\DetailedDealType $deal
     * @return self
     */
    public function setDeal(?\DDEX\DSR\DSR_400\DetailedDealType $deal = null)
    {
        $this->deal = $deal;
        return $this;
    }

    /**
     * Adds as salesTransaction
     *
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @return self
     * @param \DDEX\DSR\DSR_400\SalesTransactionToSocietyType $salesTransaction
     */
    public function addToSalesTransaction(\DDEX\DSR\DSR_400\SalesTransactionToSocietyType $salesTransaction)
    {
        $this->salesTransaction[] = $salesTransaction;
        return $this;
    }

    /**
     * isset salesTransaction
     *
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesTransaction($index)
    {
        return isset($this->salesTransaction[$index]);
    }

    /**
     * unset salesTransaction
     *
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesTransaction($index)
    {
        unset($this->salesTransaction[$index]);
    }

    /**
     * Gets as salesTransaction
     *
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @return \DDEX\DSR\DSR_400\SalesTransactionToSocietyType[]
     */
    public function getSalesTransaction()
    {
        return $this->salesTransaction;
    }

    /**
     * Sets a new salesTransaction
     *
     * A ddex:Composite containing details of a ddex:SalesTransaction for specified Usages of the ddex:Release or ddex:Resource.
     *
     * @param \DDEX\DSR\DSR_400\SalesTransactionToSocietyType[] $salesTransaction
     * @return self
     */
    public function setSalesTransaction(array $salesTransaction)
    {
        $this->salesTransaction = $salesTransaction;
        return $this;
    }

    /**
     * Gets as rightsAgreementId
     *
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release or ddex:Resource.
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
     * A ddex:Composite containing details of ddex:Identifiers of a ddex:License, ddex:Claim, ddex:RightShare or contract for the MusicalWork(s) used in the ddex:Release or ddex:Resource.
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
     * Gets as comment
     *
     * A ddex:Composite containing the ddex:Comment about the ddex:ReleaseTransactions ddex:Composite.
     *
     * @return \DDEX\ddexC\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A ddex:Composite containing the ddex:Comment about the ddex:ReleaseTransactions ddex:Composite.
     *
     * @param \DDEX\ddexC\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\ddexC\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as durationUsed
     *
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @return self
     * @param \DDEX\ddexC\DurationByUseTypeType $durationUsed
     */
    public function addToDurationUsed(\DDEX\ddexC\DurationByUseTypeType $durationUsed)
    {
        $this->durationUsed[] = $durationUsed;
        return $this;
    }

    /**
     * isset durationUsed
     *
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDurationUsed($index)
    {
        return isset($this->durationUsed[$index]);
    }

    /**
     * unset durationUsed
     *
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDurationUsed($index)
    {
        unset($this->durationUsed[$index]);
    }

    /**
     * Gets as durationUsed
     *
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @return \DDEX\ddexC\DurationByUseTypeType[]
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * A ddex:Composite containing details of the total ddex:Duration of the ddex:Release or ddex:Resource that has been used (this may be less than the total ddex:Duration), specified for a ddex:UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to ddex:Release which are single-Resource ddex:Creations.
     *
     * @param \DDEX\ddexC\DurationByUseTypeType[] $durationUsed
     * @return self
     */
    public function setDurationUsed(array $durationUsed = null)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }
}


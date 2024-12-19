<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing ReleaseTransactionsToRecordCompanyType
 *
 * A Composite containing details of SalesTransactions for a Release or a Resource, reported by a DSP to a record company.
 * XSD Type: ReleaseTransactionsToRecordCompany
 */
class ReleaseTransactionsToRecordCompanyType
{
    /**
     * The Language and script for the Elements of the ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $transactionReleaseReference
     */
    private $transactionReleaseReference = [
        
    ];

    /**
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $transactionResourceReference
     */
    private $transactionResourceReference = [
        
    ];

    /**
     * A Composite containing details of the Type of the Resource.
     *
     * @var \DDEX\DSR\DSR_420\ResourceTypeType $resourceType
     */
    private $resourceType = null;

    /**
     * A Composite containing details of the terms and conditions of the Deal under which sales were transacted. (Note: The Amount reported in this Composite is an estimate based on best knowledge on the side of the MessageSender with respect to the intellectual property rights controlled by the MessageRecipient. The default is that 100% ownership is assumed).
     *
     * @var \DDEX\DSR\DSR_420\DealForRecordCompaniesType $deal
     */
    private $deal = null;

    /**
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @var \DDEX\DSR\DSR_420\SalesTransactionToRecordCompanyType[] $salesTransaction
     */
    private $salesTransaction = [
        
    ];

    /**
     * A Composite containing the Comment about the ReleaseTransactions Composite.
     *
     * @var \DDEX\DSR\DSR_420\CommentType $comment
     */
    private $comment = null;

    /**
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
     *
     * @var \DDEX\DSR\DSR_420\DurationByUseTypeType[] $durationUsed
     */
    private $durationUsed = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ReleaseTransactions as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
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
     * A Composite containing details of the Type of the Resource.
     *
     * @return \DDEX\DSR\DSR_420\ResourceTypeType
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Sets a new resourceType
     *
     * A Composite containing details of the Type of the Resource.
     *
     * @param \DDEX\DSR\DSR_420\ResourceTypeType $resourceType
     * @return self
     */
    public function setResourceType(?\DDEX\DSR\DSR_420\ResourceTypeType $resourceType = null)
    {
        $this->resourceType = $resourceType;
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

    /**
     * Adds as salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\SalesTransactionToRecordCompanyType $salesTransaction
     */
    public function addToSalesTransaction(\DDEX\DSR\DSR_420\SalesTransactionToRecordCompanyType $salesTransaction)
    {
        $this->salesTransaction[] = $salesTransaction;
        return $this;
    }

    /**
     * isset salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
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
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
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
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @return \DDEX\DSR\DSR_420\SalesTransactionToRecordCompanyType[]
     */
    public function getSalesTransaction()
    {
        return $this->salesTransaction;
    }

    /**
     * Sets a new salesTransaction
     *
     * A Composite containing details of a SalesTransaction for specified Usages of the Release or Resource.
     *
     * @param \DDEX\DSR\DSR_420\SalesTransactionToRecordCompanyType[] $salesTransaction
     * @return self
     */
    public function setSalesTransaction(array $salesTransaction)
    {
        $this->salesTransaction = $salesTransaction;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing the Comment about the ReleaseTransactions Composite.
     *
     * @return \DDEX\DSR\DSR_420\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing the Comment about the ReleaseTransactions Composite.
     *
     * @param \DDEX\DSR\DSR_420\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\DSR\DSR_420\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as durationUsed
     *
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\DurationByUseTypeType $durationUsed
     */
    public function addToDurationUsed(\DDEX\DSR\DSR_420\DurationByUseTypeType $durationUsed)
    {
        $this->durationUsed[] = $durationUsed;
        return $this;
    }

    /**
     * isset durationUsed
     *
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
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
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
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
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
     *
     * @return \DDEX\DSR\DSR_420\DurationByUseTypeType[]
     */
    public function getDurationUsed()
    {
        return $this->durationUsed;
    }

    /**
     * Sets a new durationUsed
     *
     * A Composite containing details of the total Duration of the Release or Resource that has been used (this may be less than the total Duration), specified for a UseType (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). This applies only to single-Resource Releases.
     *
     * @param \DDEX\DSR\DSR_420\DurationByUseTypeType[] $durationUsed
     * @return self
     */
    public function setDurationUsed(array $durationUsed = null)
    {
        $this->durationUsed = $durationUsed;
        return $this;
    }
}


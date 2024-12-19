<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing InvoiceSupportInformationListType
 *
 * A ddex:Composite containing a list of details to support invoicing.
 * XSD Type: InvoiceSupportInformationList
 */
class InvoiceSupportInformationListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the mwl:InvoiceSupportInformationList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details to support invoicing.
     *
     * @var \DDEX\MWL\MWL_200\InvoiceSupportInformationType[] $invoiceSupportInformation
     */
    private $invoiceSupportInformation = [
        
    ];

    /**
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @var \DDEX\ddexC\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     */
    private $totalRoyaltyAmount = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the mwl:InvoiceSupportInformationList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the mwl:InvoiceSupportInformationList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as invoiceSupportInformation
     *
     * A ddex:Composite containing details to support invoicing.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\InvoiceSupportInformationType $invoiceSupportInformation
     */
    public function addToInvoiceSupportInformation(\DDEX\MWL\MWL_200\InvoiceSupportInformationType $invoiceSupportInformation)
    {
        $this->invoiceSupportInformation[] = $invoiceSupportInformation;
        return $this;
    }

    /**
     * isset invoiceSupportInformation
     *
     * A ddex:Composite containing details to support invoicing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceSupportInformation($index)
    {
        return isset($this->invoiceSupportInformation[$index]);
    }

    /**
     * unset invoiceSupportInformation
     *
     * A ddex:Composite containing details to support invoicing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceSupportInformation($index)
    {
        unset($this->invoiceSupportInformation[$index]);
    }

    /**
     * Gets as invoiceSupportInformation
     *
     * A ddex:Composite containing details to support invoicing.
     *
     * @return \DDEX\MWL\MWL_200\InvoiceSupportInformationType[]
     */
    public function getInvoiceSupportInformation()
    {
        return $this->invoiceSupportInformation;
    }

    /**
     * Sets a new invoiceSupportInformation
     *
     * A ddex:Composite containing details to support invoicing.
     *
     * @param \DDEX\MWL\MWL_200\InvoiceSupportInformationType[] $invoiceSupportInformation
     * @return self
     */
    public function setInvoiceSupportInformation(array $invoiceSupportInformation)
    {
        $this->invoiceSupportInformation = $invoiceSupportInformation;
        return $this;
    }

    /**
     * Adds as totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @return self
     * @param \DDEX\ddexC\TotalRoyaltyAmountType $totalRoyaltyAmount
     */
    public function addToTotalRoyaltyAmount(\DDEX\ddexC\TotalRoyaltyAmountType $totalRoyaltyAmount)
    {
        $this->totalRoyaltyAmount[] = $totalRoyaltyAmount;
        return $this;
    }

    /**
     * isset totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalRoyaltyAmount($index)
    {
        return isset($this->totalRoyaltyAmount[$index]);
    }

    /**
     * unset totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalRoyaltyAmount($index)
    {
        unset($this->totalRoyaltyAmount[$index]);
    }

    /**
     * Gets as totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @return \DDEX\ddexC\TotalRoyaltyAmountType[]
     */
    public function getTotalRoyaltyAmount()
    {
        return $this->totalRoyaltyAmount;
    }

    /**
     * Sets a new totalRoyaltyAmount
     *
     * A ddex:Composite containing details of a total ddex:RoyaltyAmount.
     *
     * @param \DDEX\ddexC\TotalRoyaltyAmountType[] $totalRoyaltyAmount
     * @return self
     */
    public function setTotalRoyaltyAmount(array $totalRoyaltyAmount = null)
    {
        $this->totalRoyaltyAmount = $totalRoyaltyAmount;
        return $this;
    }
}


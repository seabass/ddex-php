<?php

namespace DDEX\DSR\DSR_410;

/**
 * Class representing SalesReportToRecordCompanyType
 *
 * A ddex:Composite containing details of ddex:SalesTransactions reported to a record company.
 * XSD Type: SalesReportToRecordCompany
 */
class SalesReportToRecordCompanyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:DSP whose ddex:SalesTransactions are being reported.
     *
     * @var \DDEX\ddexC\DSPType $dSP
     */
    private $dSP = null;

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @var \DDEX\DSR\DSR_410\SalesToRecordCompanyByCommercialModelType[] $salesByCommercialModel
     */
    private $salesByCommercialModel = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Gets as dSP
     *
     * A ddex:Composite containing details of the ddex:DSP whose ddex:SalesTransactions are being reported.
     *
     * @return \DDEX\ddexC\DSPType
     */
    public function getDSP()
    {
        return $this->dSP;
    }

    /**
     * Sets a new dSP
     *
     * A ddex:Composite containing details of the ddex:DSP whose ddex:SalesTransactions are being reported.
     *
     * @param \DDEX\ddexC\DSPType $dSP
     * @return self
     */
    public function setDSP(\DDEX\ddexC\DSPType $dSP)
    {
        $this->dSP = $dSP;
        return $this;
    }

    /**
     * Adds as salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @return self
     * @param \DDEX\DSR\DSR_410\SalesToRecordCompanyByCommercialModelType $salesByCommercialModel
     */
    public function addToSalesByCommercialModel(\DDEX\DSR\DSR_410\SalesToRecordCompanyByCommercialModelType $salesByCommercialModel)
    {
        $this->salesByCommercialModel[] = $salesByCommercialModel;
        return $this;
    }

    /**
     * isset salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesByCommercialModel($index)
    {
        return isset($this->salesByCommercialModel[$index]);
    }

    /**
     * unset salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesByCommercialModel($index)
    {
        unset($this->salesByCommercialModel[$index]);
    }

    /**
     * Gets as salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @return \DDEX\DSR\DSR_410\SalesToRecordCompanyByCommercialModelType[]
     */
    public function getSalesByCommercialModel()
    {
        return $this->salesByCommercialModel;
    }

    /**
     * Sets a new salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the record company for a specific ddex:CommercialModelType.
     *
     * @param \DDEX\DSR\DSR_410\SalesToRecordCompanyByCommercialModelType[] $salesByCommercialModel
     * @return self
     */
    public function setSalesByCommercialModel(array $salesByCommercialModel)
    {
        $this->salesByCommercialModel = $salesByCommercialModel;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing SalesReportToRecordCompanyType
 *
 * A Composite containing details of SalesTransactions reported to a record company.
 * XSD Type: SalesReportToRecordCompany
 */
class SalesReportToRecordCompanyType
{
    /**
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the DSP whose SalesTransactions are being reported.
     *
     * @var \DDEX\DSR\DSR_430\DSPType $dSP
     */
    private $dSP = null;

    /**
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
     *
     * @var \DDEX\DSR\DSR_430\SalesToRecordCompanyByCommercialModelType[] $salesByCommercialModel
     */
    private $salesByCommercialModel = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the DSP whose SalesTransactions are being reported.
     *
     * @return \DDEX\DSR\DSR_430\DSPType
     */
    public function getDSP()
    {
        return $this->dSP;
    }

    /**
     * Sets a new dSP
     *
     * A Composite containing details of the DSP whose SalesTransactions are being reported.
     *
     * @param \DDEX\DSR\DSR_430\DSPType $dSP
     * @return self
     */
    public function setDSP(\DDEX\DSR\DSR_430\DSPType $dSP)
    {
        $this->dSP = $dSP;
        return $this;
    }

    /**
     * Adds as salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\SalesToRecordCompanyByCommercialModelType $salesByCommercialModel
     */
    public function addToSalesByCommercialModel(\DDEX\DSR\DSR_430\SalesToRecordCompanyByCommercialModelType $salesByCommercialModel)
    {
        $this->salesByCommercialModel[] = $salesByCommercialModel;
        return $this;
    }

    /**
     * isset salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
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
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
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
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
     *
     * @return \DDEX\DSR\DSR_430\SalesToRecordCompanyByCommercialModelType[]
     */
    public function getSalesByCommercialModel()
    {
        return $this->salesByCommercialModel;
    }

    /**
     * Sets a new salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific CommercialModelType.
     *
     * @param \DDEX\DSR\DSR_430\SalesToRecordCompanyByCommercialModelType[] $salesByCommercialModel
     * @return self
     */
    public function setSalesByCommercialModel(array $salesByCommercialModel)
    {
        $this->salesByCommercialModel = $salesByCommercialModel;
        return $this;
    }
}


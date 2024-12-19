<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing SalesToRecordCompanyByCommercialModelType
 *
 * A Composite containing details of SalesTransactions reported by a DSP to a record company for a specific CommercialModelType.
 * XSD Type: SalesToRecordCompanyByCommercialModel
 */
class SalesToRecordCompanyByCommercialModelType
{
    /**
     * The Language and script for the Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
     *
     * @var \DDEX\DSR\DSR_420\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * The Currency in which the SalesTransactions are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @var string $currencyOfAccounting
     */
    private $currencyOfAccounting = null;

    /**
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @var \DDEX\DSR\DSR_420\SalesToRecordCompanyByTerritoryType[] $salesByTerritory
     */
    private $salesByTerritory = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as commercialModelType
     *
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\CommercialModelTypeType $commercialModelType
     */
    public function addToCommercialModelType(\DDEX\DSR\DSR_420\CommercialModelTypeType $commercialModelType)
    {
        $this->commercialModelType[] = $commercialModelType;
        return $this;
    }

    /**
     * isset commercialModelType
     *
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
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
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
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
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
     *
     * @return \DDEX\DSR\DSR_420\CommercialModelTypeType[]
     */
    public function getCommercialModelType()
    {
        return $this->commercialModelType;
    }

    /**
     * Sets a new commercialModelType
     *
     * A Composite containing details of the fundamental business model of the commercial offering made to the Consumer for which SalesTransactions are reported (e.g. SubscriptionModel or PayAsYouGoModel). The CommercialModelType indicates how the Consumer pays for the service or Release.
     *
     * @param \DDEX\DSR\DSR_420\CommercialModelTypeType[] $commercialModelType
     * @return self
     */
    public function setCommercialModelType(array $commercialModelType = null)
    {
        $this->commercialModelType = $commercialModelType;
        return $this;
    }

    /**
     * Gets as currencyOfAccounting
     *
     * The Currency in which the SalesTransactions are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @return string
     */
    public function getCurrencyOfAccounting()
    {
        return $this->currencyOfAccounting;
    }

    /**
     * Sets a new currencyOfAccounting
     *
     * The Currency in which the SalesTransactions are accounted (represented by an ISO 4217 CurrencyCode).
     *
     * @param string $currencyOfAccounting
     * @return self
     */
    public function setCurrencyOfAccounting($currencyOfAccounting)
    {
        $this->currencyOfAccounting = $currencyOfAccounting;
        return $this;
    }

    /**
     * Adds as salesByTerritory
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\SalesToRecordCompanyByTerritoryType $salesByTerritory
     */
    public function addToSalesByTerritory(\DDEX\DSR\DSR_420\SalesToRecordCompanyByTerritoryType $salesByTerritory)
    {
        $this->salesByTerritory[] = $salesByTerritory;
        return $this;
    }

    /**
     * isset salesByTerritory
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesByTerritory($index)
    {
        return isset($this->salesByTerritory[$index]);
    }

    /**
     * unset salesByTerritory
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesByTerritory($index)
    {
        unset($this->salesByTerritory[$index]);
    }

    /**
     * Gets as salesByTerritory
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @return \DDEX\DSR\DSR_420\SalesToRecordCompanyByTerritoryType[]
     */
    public function getSalesByTerritory()
    {
        return $this->salesByTerritory;
    }

    /**
     * Sets a new salesByTerritory
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the record company for a specific Territory.
     *
     * @param \DDEX\DSR\DSR_420\SalesToRecordCompanyByTerritoryType[] $salesByTerritory
     * @return self
     */
    public function setSalesByTerritory(array $salesByTerritory)
    {
        $this->salesByTerritory = $salesByTerritory;
        return $this;
    }
}


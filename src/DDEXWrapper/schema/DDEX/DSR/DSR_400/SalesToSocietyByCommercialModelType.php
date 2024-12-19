<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SalesToSocietyByCommercialModelType
 *
 * A ddex:Composite containing details of ddex:SalesTransactions reported by a ddex:DSP to a ddex:WorkLicensor for a specific ddex:CommercialModelType.
 * XSD Type: SalesToSocietyByCommercialModel
 */
class SalesToSocietyByCommercialModelType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
     *
     * @var \DDEX\ddexC\CommercialModelTypeType[] $commercialModelType
     */
    private $commercialModelType = [
        
    ];

    /**
     * The ddex:Currency in which the ddex:SalesTransactions are accounted (represented by an ISO 4217 iso4217a:CurrencyCode).
     *
     * @var string $currencyOfAccounting
     */
    private $currencyOfAccounting = null;

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
     *
     * @var \DDEX\DSR\DSR_400\SalesToSocietyByTerritoryType[] $salesByTerritory
     */
    private $salesByTerritory = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the SalesByCommercialModel as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
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
     * A ddex:Composite containing details of the fundamental business model of the commercial offering made to the ddex:Consumer for which ddex:SalesTransactions are reported (e.g. ddex:SubscriptionModel or ddex:PayAsYouGoModel). The ddex:CommercialModelType indicates how the ddex:Consumer pays for the service or ddex:Release.
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
     * Gets as currencyOfAccounting
     *
     * The ddex:Currency in which the ddex:SalesTransactions are accounted (represented by an ISO 4217 iso4217a:CurrencyCode).
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
     * The ddex:Currency in which the ddex:SalesTransactions are accounted (represented by an ISO 4217 iso4217a:CurrencyCode).
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
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
     *
     * @return self
     * @param \DDEX\DSR\DSR_400\SalesToSocietyByTerritoryType $salesByTerritory
     */
    public function addToSalesByTerritory(\DDEX\DSR\DSR_400\SalesToSocietyByTerritoryType $salesByTerritory)
    {
        $this->salesByTerritory[] = $salesByTerritory;
        return $this;
    }

    /**
     * isset salesByTerritory
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
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
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
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
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
     *
     * @return \DDEX\DSR\DSR_400\SalesToSocietyByTerritoryType[]
     */
    public function getSalesByTerritory()
    {
        return $this->salesByTerritory;
    }

    /**
     * Sets a new salesByTerritory
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:Territory.
     *
     * @param \DDEX\DSR\DSR_400\SalesToSocietyByTerritoryType[] $salesByTerritory
     * @return self
     */
    public function setSalesByTerritory(array $salesByTerritory)
    {
        $this->salesByTerritory = $salesByTerritory;
        return $this;
    }
}


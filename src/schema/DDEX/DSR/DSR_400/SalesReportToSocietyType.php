<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing SalesReportToSocietyType
 *
 * A ddex:Composite containing details of ddex:SalesTransactions reported to a ddex:MusicalWork ddex:Licensor.
 * XSD Type: SalesReportToSociety
 */
class SalesReportToSocietyType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:DSP (as ddex:Licensee) whose ddex:SalesTransactions are being reported.
     *
     * @var \DDEX\DSR\DSR_400\DspDetailsForSocietyType $dSP
     */
    private $dSP = null;

    /**
     * A ddex:Composite containing details of the ddex:Party granting the permission for Usage.
     *
     * @var \DDEX\ddexC\PartyDescriptorType $licensor
     */
    private $licensor = null;

    /**
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
     *
     * @var \DDEX\DSR\DSR_400\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
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
     * A ddex:Composite containing details of the ddex:DSP (as ddex:Licensee) whose ddex:SalesTransactions are being reported.
     *
     * @return \DDEX\DSR\DSR_400\DspDetailsForSocietyType
     */
    public function getDSP()
    {
        return $this->dSP;
    }

    /**
     * Sets a new dSP
     *
     * A ddex:Composite containing details of the ddex:DSP (as ddex:Licensee) whose ddex:SalesTransactions are being reported.
     *
     * @param \DDEX\DSR\DSR_400\DspDetailsForSocietyType $dSP
     * @return self
     */
    public function setDSP(\DDEX\DSR\DSR_400\DspDetailsForSocietyType $dSP)
    {
        $this->dSP = $dSP;
        return $this;
    }

    /**
     * Gets as licensor
     *
     * A ddex:Composite containing details of the ddex:Party granting the permission for Usage.
     *
     * @return \DDEX\ddexC\PartyDescriptorType
     */
    public function getLicensor()
    {
        return $this->licensor;
    }

    /**
     * Sets a new licensor
     *
     * A ddex:Composite containing details of the ddex:Party granting the permission for Usage.
     *
     * @param \DDEX\ddexC\PartyDescriptorType $licensor
     * @return self
     */
    public function setLicensor(?\DDEX\ddexC\PartyDescriptorType $licensor = null)
    {
        $this->licensor = $licensor;
        return $this;
    }

    /**
     * Adds as salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
     *
     * @return self
     * @param \DDEX\DSR\DSR_400\SalesToSocietyByCommercialModelType $salesByCommercialModel
     */
    public function addToSalesByCommercialModel(\DDEX\DSR\DSR_400\SalesToSocietyByCommercialModelType $salesByCommercialModel)
    {
        $this->salesByCommercialModel[] = $salesByCommercialModel;
        return $this;
    }

    /**
     * isset salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
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
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
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
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
     *
     * @return \DDEX\DSR\DSR_400\SalesToSocietyByCommercialModelType[]
     */
    public function getSalesByCommercialModel()
    {
        return $this->salesByCommercialModel;
    }

    /**
     * Sets a new salesByCommercialModel
     *
     * A ddex:Composite containing details of ddex:SalesTransactions reported by the ddex:DSP to the ddex:MusicalWork ddex:Licensor for a specific ddex:CommercialModelType.
     *
     * @param \DDEX\DSR\DSR_400\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
     * @return self
     */
    public function setSalesByCommercialModel(array $salesByCommercialModel)
    {
        $this->salesByCommercialModel = $salesByCommercialModel;
        return $this;
    }
}


<?php

namespace DDEX\DSR\DSR_43D1;

/**
 * Class representing SalesReportToSocietyType
 *
 * A Composite containing details of SalesTransactions reported to a MusicalWork Licensor.
 * XSD Type: SalesReportToSociety
 */
class SalesReportToSocietyType
{
    /**
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the DSP (as Licensee) whose SalesTransactions are being reported.
     *
     * @var \DDEX\DSR\DSR_43D1\DspDetailsForSocietyType $dSP
     */
    private $dSP = null;

    /**
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @var \DDEX\DSR\DSR_43D1\PartyDescriptorType $licensor
     */
    private $licensor = null;

    /**
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
     *
     * @var \DDEX\DSR\DSR_43D1\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
     */
    private $salesByCommercialModel = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Composite containing details of the DSP (as Licensee) whose SalesTransactions are being reported.
     *
     * @return \DDEX\DSR\DSR_43D1\DspDetailsForSocietyType
     */
    public function getDSP()
    {
        return $this->dSP;
    }

    /**
     * Sets a new dSP
     *
     * A Composite containing details of the DSP (as Licensee) whose SalesTransactions are being reported.
     *
     * @param \DDEX\DSR\DSR_43D1\DspDetailsForSocietyType $dSP
     * @return self
     */
    public function setDSP(\DDEX\DSR\DSR_43D1\DspDetailsForSocietyType $dSP)
    {
        $this->dSP = $dSP;
        return $this;
    }

    /**
     * Gets as licensor
     *
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @return \DDEX\DSR\DSR_43D1\PartyDescriptorType
     */
    public function getLicensor()
    {
        return $this->licensor;
    }

    /**
     * Sets a new licensor
     *
     * A Composite containing details of the Party granting the permission for Usage.
     *
     * @param \DDEX\DSR\DSR_43D1\PartyDescriptorType $licensor
     * @return self
     */
    public function setLicensor(?\DDEX\DSR\DSR_43D1\PartyDescriptorType $licensor = null)
    {
        $this->licensor = $licensor;
        return $this;
    }

    /**
     * Adds as salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
     *
     * @return self
     * @param \DDEX\DSR\DSR_43D1\SalesToSocietyByCommercialModelType $salesByCommercialModel
     */
    public function addToSalesByCommercialModel(\DDEX\DSR\DSR_43D1\SalesToSocietyByCommercialModelType $salesByCommercialModel)
    {
        $this->salesByCommercialModel[] = $salesByCommercialModel;
        return $this;
    }

    /**
     * isset salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
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
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
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
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
     *
     * @return \DDEX\DSR\DSR_43D1\SalesToSocietyByCommercialModelType[]
     */
    public function getSalesByCommercialModel()
    {
        return $this->salesByCommercialModel;
    }

    /**
     * Sets a new salesByCommercialModel
     *
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
     *
     * @param \DDEX\DSR\DSR_43D1\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
     * @return self
     */
    public function setSalesByCommercialModel(array $salesByCommercialModel)
    {
        $this->salesByCommercialModel = $salesByCommercialModel;
        return $this;
    }
}


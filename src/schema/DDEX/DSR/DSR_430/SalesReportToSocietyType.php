<?php

namespace DDEX\DSR\DSR_430;

/**
 * Class representing SalesReportToSocietyType
 *
 * A Composite containing details of SalesTransactions reported to a MusicalWork Licensor.
 * XSD Type: SalesReportToSociety
 */
class SalesReportToSocietyType
{
    /**
     * The Language and script for the Elements of the SalesReport as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of the DSP (as Licensee) whose SalesTransactions are being reported.
     *
     * @var \DDEX\DSR\DSR_430\DspDetailsForSocietyType $dSP
     */
    private $dSP = null;

    /**
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @var \DDEX\DSR\DSR_430\PartyDescriptorType[] $licensor
     */
    private $licensor = [
        
    ];

    /**
     * A Composite containing details of SalesTransactions reported by the DSP to the MusicalWork Licensor for a specific CommercialModelType.
     *
     * @var \DDEX\DSR\DSR_430\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
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
     * A Composite containing details of the DSP (as Licensee) whose SalesTransactions are being reported.
     *
     * @return \DDEX\DSR\DSR_430\DspDetailsForSocietyType
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
     * @param \DDEX\DSR\DSR_430\DspDetailsForSocietyType $dSP
     * @return self
     */
    public function setDSP(\DDEX\DSR\DSR_430\DspDetailsForSocietyType $dSP)
    {
        $this->dSP = $dSP;
        return $this;
    }

    /**
     * Adds as licensor
     *
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @return self
     * @param \DDEX\DSR\DSR_430\PartyDescriptorType $licensor
     */
    public function addToLicensor(\DDEX\DSR\DSR_430\PartyDescriptorType $licensor)
    {
        $this->licensor[] = $licensor;
        return $this;
    }

    /**
     * isset licensor
     *
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicensor($index)
    {
        return isset($this->licensor[$index]);
    }

    /**
     * unset licensor
     *
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicensor($index)
    {
        unset($this->licensor[$index]);
    }

    /**
     * Gets as licensor
     *
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @return \DDEX\DSR\DSR_430\PartyDescriptorType[]
     */
    public function getLicensor()
    {
        return $this->licensor;
    }

    /**
     * Sets a new licensor
     *
     * A Composite containing details of a Party that may be granting the permission for Usage. Sales reports may be sent to multiple Parties none of which licenses all works reported (but collectively they would). Note that if multiple Licensors are provided, all of them will be able to read this information.
     *
     * @param \DDEX\DSR\DSR_430\PartyDescriptorType[] $licensor
     * @return self
     */
    public function setLicensor(array $licensor)
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
     * @param \DDEX\DSR\DSR_430\SalesToSocietyByCommercialModelType $salesByCommercialModel
     */
    public function addToSalesByCommercialModel(\DDEX\DSR\DSR_430\SalesToSocietyByCommercialModelType $salesByCommercialModel)
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
     * @return \DDEX\DSR\DSR_430\SalesToSocietyByCommercialModelType[]
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
     * @param \DDEX\DSR\DSR_430\SalesToSocietyByCommercialModelType[] $salesByCommercialModel
     * @return self
     */
    public function setSalesByCommercialModel(array $salesByCommercialModel)
    {
        $this->salesByCommercialModel = $salesByCommercialModel;
        return $this;
    }
}


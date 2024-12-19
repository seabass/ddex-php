<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DataCarrierListType
 *
 * A Composite containing details of one or more DataCarriers.
 * XSD Type: DataCarrierList
 */
class DataCarrierListType
{
    /**
     * The Language and script for the Elements of the DataCarrierList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\DataCarrierType[] $dataCarrier
     */
    private $dataCarrier = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the DataCarrierList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the DataCarrierList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as dataCarrier
     *
     * A Composite containing details of a DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\DataCarrierType $dataCarrier
     */
    public function addToDataCarrier(\DDEX\RIN\RIN_210\DataCarrierType $dataCarrier)
    {
        $this->dataCarrier[] = $dataCarrier;
        return $this;
    }

    /**
     * isset dataCarrier
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrier($index)
    {
        return isset($this->dataCarrier[$index]);
    }

    /**
     * unset dataCarrier
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrier($index)
    {
        unset($this->dataCarrier[$index]);
    }

    /**
     * Gets as dataCarrier
     *
     * A Composite containing details of a DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\DataCarrierType[]
     */
    public function getDataCarrier()
    {
        return $this->dataCarrier;
    }

    /**
     * Sets a new dataCarrier
     *
     * A Composite containing details of a DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\DataCarrierType[] $dataCarrier
     * @return self
     */
    public function setDataCarrier(array $dataCarrier)
    {
        $this->dataCarrier = $dataCarrier;
        return $this;
    }
}


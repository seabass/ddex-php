<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing EquipmentListType
 *
 * A Composite containing details of Equipment.
 * XSD Type: EquipmentList
 */
class EquipmentListType
{
    /**
     * The Language and script for the Elements of the EquipmentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a piece of Equipment.
     *
     * @var \DDEX\RIN\RIN11F\EquipmentType[] $equipment
     */
    private $equipment = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the EquipmentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the EquipmentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as equipment
     *
     * A Composite containing details of a piece of Equipment.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\EquipmentType $equipment
     */
    public function addToEquipment(\DDEX\RIN\RIN11F\EquipmentType $equipment)
    {
        $this->equipment[] = $equipment;
        return $this;
    }

    /**
     * isset equipment
     *
     * A Composite containing details of a piece of Equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipment($index)
    {
        return isset($this->equipment[$index]);
    }

    /**
     * unset equipment
     *
     * A Composite containing details of a piece of Equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipment($index)
    {
        unset($this->equipment[$index]);
    }

    /**
     * Gets as equipment
     *
     * A Composite containing details of a piece of Equipment.
     *
     * @return \DDEX\RIN\RIN11F\EquipmentType[]
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * A Composite containing details of a piece of Equipment.
     *
     * @param \DDEX\RIN\RIN11F\EquipmentType[] $equipment
     * @return self
     */
    public function setEquipment(array $equipment)
    {
        $this->equipment = $equipment;
        return $this;
    }
}


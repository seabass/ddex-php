<?php

namespace DDEX\RIN\RIN_200;

/**
 * Class representing InstrumentType
 *
 * A Composite containing details of an Instrument.
 * XSD Type: Instrument
 */
class InstrumentType
{
    /**
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @var \DDEX\RIN\RIN_200\ProprietaryIdType[] $instrumentId
     */
    private $instrumentId = null;

    /**
     * The Identifier (specific to the File) of the Instrument. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @var string $instrumentReference
     */
    private $instrumentReference = null;

    /**
     * The Type of Instrument.
     *
     * @var string $instrumentType
     */
    private $instrumentType = null;

    /**
     * The Name of the Party manufacturing the Instrument.
     *
     * @var \DDEX\RIN\RIN_200\InstrumentManufacturerType $manufacturerName
     */
    private $manufacturerName = null;

    /**
     * The Name of the Instrument model.
     *
     * @var \DDEX\RIN\RIN_200\InstrumentModelType $modelName
     */
    private $modelName = null;

    /**
     * A Nickname of the Instrument.
     *
     * @var string $nickname
     */
    private $nickname = null;

    /**
     * The serial number of the Instrument.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @return self
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId
     */
    public function addToInstrumentId(\DDEX\RIN\RIN_200\ProprietaryIdType $proprietaryId)
    {
        $this->instrumentId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset instrumentId
     *
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstrumentId($index)
    {
        return isset($this->instrumentId[$index]);
    }

    /**
     * unset instrumentId
     *
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstrumentId($index)
    {
        unset($this->instrumentId[$index]);
    }

    /**
     * Gets as instrumentId
     *
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @return \DDEX\RIN\RIN_200\ProprietaryIdType[]
     */
    public function getInstrumentId()
    {
        return $this->instrumentId;
    }

    /**
     * Sets a new instrumentId
     *
     * A Composite containing details of an Identifier of the Instrument.
     *
     * @param \DDEX\RIN\RIN_200\ProprietaryIdType[] $instrumentId
     * @return self
     */
    public function setInstrumentId(array $instrumentId = null)
    {
        $this->instrumentId = $instrumentId;
        return $this;
    }

    /**
     * Gets as instrumentReference
     *
     * The Identifier (specific to the File) of the Instrument. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @return string
     */
    public function getInstrumentReference()
    {
        return $this->instrumentReference;
    }

    /**
     * Sets a new instrumentReference
     *
     * The Identifier (specific to the File) of the Instrument. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @param string $instrumentReference
     * @return self
     */
    public function setInstrumentReference($instrumentReference)
    {
        $this->instrumentReference = $instrumentReference;
        return $this;
    }

    /**
     * Gets as instrumentType
     *
     * The Type of Instrument.
     *
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrumentType;
    }

    /**
     * Sets a new instrumentType
     *
     * The Type of Instrument.
     *
     * @param string $instrumentType
     * @return self
     */
    public function setInstrumentType($instrumentType)
    {
        $this->instrumentType = $instrumentType;
        return $this;
    }

    /**
     * Gets as manufacturerName
     *
     * The Name of the Party manufacturing the Instrument.
     *
     * @return \DDEX\RIN\RIN_200\InstrumentManufacturerType
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    /**
     * Sets a new manufacturerName
     *
     * The Name of the Party manufacturing the Instrument.
     *
     * @param \DDEX\RIN\RIN_200\InstrumentManufacturerType $manufacturerName
     * @return self
     */
    public function setManufacturerName(?\DDEX\RIN\RIN_200\InstrumentManufacturerType $manufacturerName = null)
    {
        $this->manufacturerName = $manufacturerName;
        return $this;
    }

    /**
     * Gets as modelName
     *
     * The Name of the Instrument model.
     *
     * @return \DDEX\RIN\RIN_200\InstrumentModelType
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * The Name of the Instrument model.
     *
     * @param \DDEX\RIN\RIN_200\InstrumentModelType $modelName
     * @return self
     */
    public function setModelName(?\DDEX\RIN\RIN_200\InstrumentModelType $modelName = null)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as nickname
     *
     * A Nickname of the Instrument.
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Sets a new nickname
     *
     * A Nickname of the Instrument.
     *
     * @param string $nickname
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * The serial number of the Instrument.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * The serial number of the Instrument.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing EquipmentType
 *
 * A Composite containing details of a piece of Equipment.
 * XSD Type: Equipment
 */
class EquipmentType
{
    /**
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @var \DDEX\RIN\RIN11F\ProprietaryIdType[] $equipmentId
     */
    private $equipmentId = null;

    /**
     * The Identifier (specific to the File) of the Equipment. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @var string $equipmentReference
     */
    private $equipmentReference = null;

    /**
     * The Type of Equipment.
     *
     * @var string $equipmentType
     */
    private $equipmentType = null;

    /**
     * The Name of the Equipment.
     *
     * @var string $equipmentName
     */
    private $equipmentName = null;

    /**
     * The Name of the Party manufacturing the Equipment.
     *
     * @var string $manufacturerName
     */
    private $manufacturerName = null;

    /**
     * The Name of the model.
     *
     * @var string $modelName
     */
    private $modelName = null;

    /**
     * The serial number of the Equipment.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * A Composite containing a human-readable Comment about the Equipment.
     *
     * @var \DDEX\RIN\RIN11F\CommentType $comment
     */
    private $comment = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId
     */
    public function addToEquipmentId(\DDEX\RIN\RIN11F\ProprietaryIdType $proprietaryId)
    {
        $this->equipmentId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset equipmentId
     *
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipmentId($index)
    {
        return isset($this->equipmentId[$index]);
    }

    /**
     * unset equipmentId
     *
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipmentId($index)
    {
        unset($this->equipmentId[$index]);
    }

    /**
     * Gets as equipmentId
     *
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @return \DDEX\RIN\RIN11F\ProprietaryIdType[]
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
    }

    /**
     * Sets a new equipmentId
     *
     * A Composite containing details of an Identifier of the Equipment.
     *
     * @param \DDEX\RIN\RIN11F\ProprietaryIdType[] $equipmentId
     * @return self
     */
    public function setEquipmentId(array $equipmentId = null)
    {
        $this->equipmentId = $equipmentId;
        return $this;
    }

    /**
     * Gets as equipmentReference
     *
     * The Identifier (specific to the File) of the Equipment. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @return string
     */
    public function getEquipmentReference()
    {
        return $this->equipmentReference;
    }

    /**
     * Sets a new equipmentReference
     *
     * The Identifier (specific to the File) of the Equipment. This is a LocalEquipmentAnchor starting with the letter I.
     *
     * @param string $equipmentReference
     * @return self
     */
    public function setEquipmentReference($equipmentReference)
    {
        $this->equipmentReference = $equipmentReference;
        return $this;
    }

    /**
     * Gets as equipmentType
     *
     * The Type of Equipment.
     *
     * @return string
     */
    public function getEquipmentType()
    {
        return $this->equipmentType;
    }

    /**
     * Sets a new equipmentType
     *
     * The Type of Equipment.
     *
     * @param string $equipmentType
     * @return self
     */
    public function setEquipmentType($equipmentType)
    {
        $this->equipmentType = $equipmentType;
        return $this;
    }

    /**
     * Gets as equipmentName
     *
     * The Name of the Equipment.
     *
     * @return string
     */
    public function getEquipmentName()
    {
        return $this->equipmentName;
    }

    /**
     * Sets a new equipmentName
     *
     * The Name of the Equipment.
     *
     * @param string $equipmentName
     * @return self
     */
    public function setEquipmentName($equipmentName)
    {
        $this->equipmentName = $equipmentName;
        return $this;
    }

    /**
     * Gets as manufacturerName
     *
     * The Name of the Party manufacturing the Equipment.
     *
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    /**
     * Sets a new manufacturerName
     *
     * The Name of the Party manufacturing the Equipment.
     *
     * @param string $manufacturerName
     * @return self
     */
    public function setManufacturerName($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;
        return $this;
    }

    /**
     * Gets as modelName
     *
     * The Name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Sets a new modelName
     *
     * The Name of the model.
     *
     * @param string $modelName
     * @return self
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * The serial number of the Equipment.
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
     * The serial number of the Equipment.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Equipment.
     *
     * @return \DDEX\RIN\RIN11F\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Equipment.
     *
     * @param \DDEX\RIN\RIN11F\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN11F\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}


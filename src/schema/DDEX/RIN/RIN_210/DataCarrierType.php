<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DataCarrierType
 *
 * A Composite containing details of a DataCarrier.
 * XSD Type: DataCarrier
 */
class DataCarrierType
{
    /**
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\ProprietaryIdType[] $dataCarrierId
     */
    private $dataCarrierId = null;

    /**
     * The Identifier (specific to the File) of the DataCarrier. This is a LocalDataCarrierAnchor starting with the letter D.
     *
     * @var string $dataCarrierReference
     */
    private $dataCarrierReference = null;

    /**
     * The Type of DataCarrier.
     *
     * @var string $dataCarrierType
     */
    private $dataCarrierType = null;

    /**
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\TitleWithUDVType[] $title
     */
    private $title = [
        
    ];

    /**
     * The Name of the Party manufacturing the DataCarrier.
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
     * The serial number of the DataCarrier.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * The total number of DataCarriers in a multi-DataCarrier set.
     *
     * @var int $numberOfDataCarriersInSet
     */
    private $numberOfDataCarriersInSet = null;

    /**
     * The DataCarrier item number in a multi-DataCarrier set.
     *
     * @var int $dataCarrierOfSet
     */
    private $dataCarrierOfSet = null;

    /**
     * A summary of the contents of the DataCarrier.
     *
     * @var string $contentSummary
     */
    private $contentSummary = null;

    /**
     * A Description of the current location of the DataCarrier.
     *
     * @var string $currentLocation
     */
    private $currentLocation = null;

    /**
     * A Composite containing a human-readable Comment about the DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\CommentType $comment
     */
    private $comment = null;

    /**
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @var string[] $dataCarrierProjectReference
     */
    private $dataCarrierProjectReference = [
        
    ];

    /**
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @var string[] $dataCarrierFileReference
     */
    private $dataCarrierFileReference = [
        
    ];

    /**
     * A Composite containing details of items located on the DataCarrier.
     *
     * @var \DDEX\RIN\RIN_210\DataCarrierContentItemType[] $dataCarrierContent
     */
    private $dataCarrierContent = null;

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId
     */
    public function addToDataCarrierId(\DDEX\RIN\RIN_210\ProprietaryIdType $proprietaryId)
    {
        $this->dataCarrierId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset dataCarrierId
     *
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrierId($index)
    {
        return isset($this->dataCarrierId[$index]);
    }

    /**
     * unset dataCarrierId
     *
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrierId($index)
    {
        unset($this->dataCarrierId[$index]);
    }

    /**
     * Gets as dataCarrierId
     *
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\ProprietaryIdType[]
     */
    public function getDataCarrierId()
    {
        return $this->dataCarrierId;
    }

    /**
     * Sets a new dataCarrierId
     *
     * A Composite containing details of an Identifier of the DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\ProprietaryIdType[] $dataCarrierId
     * @return self
     */
    public function setDataCarrierId(array $dataCarrierId = null)
    {
        $this->dataCarrierId = $dataCarrierId;
        return $this;
    }

    /**
     * Gets as dataCarrierReference
     *
     * The Identifier (specific to the File) of the DataCarrier. This is a LocalDataCarrierAnchor starting with the letter D.
     *
     * @return string
     */
    public function getDataCarrierReference()
    {
        return $this->dataCarrierReference;
    }

    /**
     * Sets a new dataCarrierReference
     *
     * The Identifier (specific to the File) of the DataCarrier. This is a LocalDataCarrierAnchor starting with the letter D.
     *
     * @param string $dataCarrierReference
     * @return self
     */
    public function setDataCarrierReference($dataCarrierReference)
    {
        $this->dataCarrierReference = $dataCarrierReference;
        return $this;
    }

    /**
     * Gets as dataCarrierType
     *
     * The Type of DataCarrier.
     *
     * @return string
     */
    public function getDataCarrierType()
    {
        return $this->dataCarrierType;
    }

    /**
     * Sets a new dataCarrierType
     *
     * The Type of DataCarrier.
     *
     * @param string $dataCarrierType
     * @return self
     */
    public function setDataCarrierType($dataCarrierType)
    {
        $this->dataCarrierType = $dataCarrierType;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType $title
     */
    public function addToTitle(\DDEX\RIN\RIN_210\TitleWithUDVType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\TitleWithUDVType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\TitleWithUDVType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as manufacturerName
     *
     * The Name of the Party manufacturing the DataCarrier.
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
     * The Name of the Party manufacturing the DataCarrier.
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
     * The serial number of the DataCarrier.
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
     * The serial number of the DataCarrier.
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
     * Gets as numberOfDataCarriersInSet
     *
     * The total number of DataCarriers in a multi-DataCarrier set.
     *
     * @return int
     */
    public function getNumberOfDataCarriersInSet()
    {
        return $this->numberOfDataCarriersInSet;
    }

    /**
     * Sets a new numberOfDataCarriersInSet
     *
     * The total number of DataCarriers in a multi-DataCarrier set.
     *
     * @param int $numberOfDataCarriersInSet
     * @return self
     */
    public function setNumberOfDataCarriersInSet($numberOfDataCarriersInSet)
    {
        $this->numberOfDataCarriersInSet = $numberOfDataCarriersInSet;
        return $this;
    }

    /**
     * Gets as dataCarrierOfSet
     *
     * The DataCarrier item number in a multi-DataCarrier set.
     *
     * @return int
     */
    public function getDataCarrierOfSet()
    {
        return $this->dataCarrierOfSet;
    }

    /**
     * Sets a new dataCarrierOfSet
     *
     * The DataCarrier item number in a multi-DataCarrier set.
     *
     * @param int $dataCarrierOfSet
     * @return self
     */
    public function setDataCarrierOfSet($dataCarrierOfSet)
    {
        $this->dataCarrierOfSet = $dataCarrierOfSet;
        return $this;
    }

    /**
     * Gets as contentSummary
     *
     * A summary of the contents of the DataCarrier.
     *
     * @return string
     */
    public function getContentSummary()
    {
        return $this->contentSummary;
    }

    /**
     * Sets a new contentSummary
     *
     * A summary of the contents of the DataCarrier.
     *
     * @param string $contentSummary
     * @return self
     */
    public function setContentSummary($contentSummary)
    {
        $this->contentSummary = $contentSummary;
        return $this;
    }

    /**
     * Gets as currentLocation
     *
     * A Description of the current location of the DataCarrier.
     *
     * @return string
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * Sets a new currentLocation
     *
     * A Description of the current location of the DataCarrier.
     *
     * @param string $currentLocation
     * @return self
     */
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\CommentType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\CommentType $comment
     * @return self
     */
    public function setComment(?\DDEX\RIN\RIN_210\CommentType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as dataCarrierProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return self
     * @param string $dataCarrierProjectReference
     */
    public function addToDataCarrierProjectReference($dataCarrierProjectReference)
    {
        $this->dataCarrierProjectReference[] = $dataCarrierProjectReference;
        return $this;
    }

    /**
     * isset dataCarrierProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrierProjectReference($index)
    {
        return isset($this->dataCarrierProjectReference[$index]);
    }

    /**
     * unset dataCarrierProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrierProjectReference($index)
    {
        unset($this->dataCarrierProjectReference[$index]);
    }

    /**
     * Gets as dataCarrierProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @return string[]
     */
    public function getDataCarrierProjectReference()
    {
        return $this->dataCarrierProjectReference;
    }

    /**
     * Sets a new dataCarrierProjectReference
     *
     * A Reference for a Project (specific to the File). This is a LocalProjectAnchorReference starting with the letter J.
     *
     * @param string $dataCarrierProjectReference
     * @return self
     */
    public function setDataCarrierProjectReference(array $dataCarrierProjectReference = null)
    {
        $this->dataCarrierProjectReference = $dataCarrierProjectReference;
        return $this;
    }

    /**
     * Adds as dataCarrierFileReference
     *
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @return self
     * @param string $dataCarrierFileReference
     */
    public function addToDataCarrierFileReference($dataCarrierFileReference)
    {
        $this->dataCarrierFileReference[] = $dataCarrierFileReference;
        return $this;
    }

    /**
     * isset dataCarrierFileReference
     *
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrierFileReference($index)
    {
        return isset($this->dataCarrierFileReference[$index]);
    }

    /**
     * unset dataCarrierFileReference
     *
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrierFileReference($index)
    {
        unset($this->dataCarrierFileReference[$index]);
    }

    /**
     * Gets as dataCarrierFileReference
     *
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @return string[]
     */
    public function getDataCarrierFileReference()
    {
        return $this->dataCarrierFileReference;
    }

    /**
     * Sets a new dataCarrierFileReference
     *
     * A Reference for a File stored on the DataCarrier (specific to this Message). This is a LocalFileAnchorReference starting with the letter F.
     *
     * @param string $dataCarrierFileReference
     * @return self
     */
    public function setDataCarrierFileReference(array $dataCarrierFileReference = null)
    {
        $this->dataCarrierFileReference = $dataCarrierFileReference;
        return $this;
    }

    /**
     * Adds as dataCarrierContentItem
     *
     * A Composite containing details of items located on the DataCarrier.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\DataCarrierContentItemType $dataCarrierContentItem
     */
    public function addToDataCarrierContent(\DDEX\RIN\RIN_210\DataCarrierContentItemType $dataCarrierContentItem)
    {
        $this->dataCarrierContent[] = $dataCarrierContentItem;
        return $this;
    }

    /**
     * isset dataCarrierContent
     *
     * A Composite containing details of items located on the DataCarrier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataCarrierContent($index)
    {
        return isset($this->dataCarrierContent[$index]);
    }

    /**
     * unset dataCarrierContent
     *
     * A Composite containing details of items located on the DataCarrier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataCarrierContent($index)
    {
        unset($this->dataCarrierContent[$index]);
    }

    /**
     * Gets as dataCarrierContent
     *
     * A Composite containing details of items located on the DataCarrier.
     *
     * @return \DDEX\RIN\RIN_210\DataCarrierContentItemType[]
     */
    public function getDataCarrierContent()
    {
        return $this->dataCarrierContent;
    }

    /**
     * Sets a new dataCarrierContent
     *
     * A Composite containing details of items located on the DataCarrier.
     *
     * @param \DDEX\RIN\RIN_210\DataCarrierContentItemType[] $dataCarrierContent
     * @return self
     */
    public function setDataCarrierContent(array $dataCarrierContent = null)
    {
        $this->dataCarrierContent = $dataCarrierContent;
        return $this;
    }
}


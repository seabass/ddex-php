<?php

namespace DDEX\RIN\RIN11F\RecordingInformationNotification;

/**
 * Class representing RecordingInformationNotificationAnonymousPHPType
 */
class RecordingInformationNotificationAnonymousPHPType
{
    /**
     * The Identifier of the Version of the XML schema used for the File. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $schemaVersionId
     */
    private $schemaVersionId = null;

    /**
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The file header for the RecordingInformationNotification.
     *
     * @var \DDEX\RIN\RIN11F\FileHeaderType $fileHeader
     */
    private $fileHeader = null;

    /**
     * A Composite containing a human-readable Comment about the Message.
     *
     * @var \DDEX\RIN\RIN11F\CommentType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\RIN\RIN11F\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more MusicalWorks.
     *
     * @var \DDEX\RIN\RIN11F\MusicalWorkListType $musicalWorkList
     */
    private $musicalWorkList = null;

    /**
     * A Composite containing details of one or more Resources.
     *
     * @var \DDEX\RIN\RIN11F\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more RecordingComponents.
     *
     * @var \DDEX\RIN\RIN11F\RecordingComponentListType $recordingComponentList
     */
    private $recordingComponentList = null;

    /**
     * A Composite containing details of one or more Projects.
     *
     * @var \DDEX\RIN\RIN11F\ProjectListType $projectList
     */
    private $projectList = null;

    /**
     * A Composite containing details of one or more Sessions.
     *
     * @var \DDEX\RIN\RIN11F\SessionListType $sessionList
     */
    private $sessionList = null;

    /**
     * A Composite containing details of Equipment.
     *
     * @var \DDEX\RIN\RIN11F\EquipmentListType $equipmentList
     */
    private $equipmentList = null;

    /**
     * A Composite containing details of one or more DataCarriers.
     *
     * @var \DDEX\RIN\RIN11F\DataCarrierListType $dataCarrierList
     */
    private $dataCarrierList = null;

    /**
     * A Composite containing details of one or more Elements.
     *
     * @var \DDEX\RIN\RIN11F\ElementListType $elementList
     */
    private $elementList = null;

    /**
     * A Composite containing details of one or more Files.
     *
     * @var \DDEX\RIN\RIN11F\FileListType $fileList
     */
    private $fileList = null;

    /**
     * A Composite containing details of one or more Transfers.
     *
     * @var \DDEX\RIN\RIN11F\TransferType[] $transferList
     */
    private $transferList = null;

    /**
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @var \DDEX\RIN\RIN11F\RecordingInformationNotificationType[] $importedRinFiles
     */
    private $importedRinFiles = null;

    /**
     * Gets as schemaVersionId
     *
     * The Identifier of the Version of the XML schema used for the File. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getSchemaVersionId()
    {
        return $this->schemaVersionId;
    }

    /**
     * Sets a new schemaVersionId
     *
     * The Identifier of the Version of the XML schema used for the File. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $schemaVersionId
     * @return self
     */
    public function setSchemaVersionId($schemaVersionId)
    {
        $this->schemaVersionId = $schemaVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as fileHeader
     *
     * The file header for the RecordingInformationNotification.
     *
     * @return \DDEX\RIN\RIN11F\FileHeaderType
     */
    public function getFileHeader()
    {
        return $this->fileHeader;
    }

    /**
     * Sets a new fileHeader
     *
     * The file header for the RecordingInformationNotification.
     *
     * @param \DDEX\RIN\RIN11F\FileHeaderType $fileHeader
     * @return self
     */
    public function setFileHeader(\DDEX\RIN\RIN11F\FileHeaderType $fileHeader)
    {
        $this->fileHeader = $fileHeader;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A Composite containing a human-readable Comment about the Message.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\CommentType $comment
     */
    public function addToComment(\DDEX\RIN\RIN11F\CommentType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A Composite containing a human-readable Comment about the Message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A Composite containing a human-readable Comment about the Message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A Composite containing a human-readable Comment about the Message.
     *
     * @return \DDEX\RIN\RIN11F\CommentType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A Composite containing a human-readable Comment about the Message.
     *
     * @param \DDEX\RIN\RIN11F\CommentType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\PartyType $party
     */
    public function addToPartyList(\DDEX\RIN\RIN11F\PartyType $party)
    {
        $this->partyList[] = $party;
        return $this;
    }

    /**
     * isset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyList($index)
    {
        return isset($this->partyList[$index]);
    }

    /**
     * unset partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyList($index)
    {
        unset($this->partyList[$index]);
    }

    /**
     * Gets as partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return \DDEX\RIN\RIN11F\PartyType[]
     */
    public function getPartyList()
    {
        return $this->partyList;
    }

    /**
     * Sets a new partyList
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @param \DDEX\RIN\RIN11F\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList = null)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Gets as musicalWorkList
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @return \DDEX\RIN\RIN11F\MusicalWorkListType
     */
    public function getMusicalWorkList()
    {
        return $this->musicalWorkList;
    }

    /**
     * Sets a new musicalWorkList
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @param \DDEX\RIN\RIN11F\MusicalWorkListType $musicalWorkList
     * @return self
     */
    public function setMusicalWorkList(?\DDEX\RIN\RIN11F\MusicalWorkListType $musicalWorkList = null)
    {
        $this->musicalWorkList = $musicalWorkList;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @return \DDEX\RIN\RIN11F\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @param \DDEX\RIN\RIN11F\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(?\DDEX\RIN\RIN11F\ResourceListType $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as recordingComponentList
     *
     * A Composite containing details of one or more RecordingComponents.
     *
     * @return \DDEX\RIN\RIN11F\RecordingComponentListType
     */
    public function getRecordingComponentList()
    {
        return $this->recordingComponentList;
    }

    /**
     * Sets a new recordingComponentList
     *
     * A Composite containing details of one or more RecordingComponents.
     *
     * @param \DDEX\RIN\RIN11F\RecordingComponentListType $recordingComponentList
     * @return self
     */
    public function setRecordingComponentList(?\DDEX\RIN\RIN11F\RecordingComponentListType $recordingComponentList = null)
    {
        $this->recordingComponentList = $recordingComponentList;
        return $this;
    }

    /**
     * Gets as projectList
     *
     * A Composite containing details of one or more Projects.
     *
     * @return \DDEX\RIN\RIN11F\ProjectListType
     */
    public function getProjectList()
    {
        return $this->projectList;
    }

    /**
     * Sets a new projectList
     *
     * A Composite containing details of one or more Projects.
     *
     * @param \DDEX\RIN\RIN11F\ProjectListType $projectList
     * @return self
     */
    public function setProjectList(?\DDEX\RIN\RIN11F\ProjectListType $projectList = null)
    {
        $this->projectList = $projectList;
        return $this;
    }

    /**
     * Gets as sessionList
     *
     * A Composite containing details of one or more Sessions.
     *
     * @return \DDEX\RIN\RIN11F\SessionListType
     */
    public function getSessionList()
    {
        return $this->sessionList;
    }

    /**
     * Sets a new sessionList
     *
     * A Composite containing details of one or more Sessions.
     *
     * @param \DDEX\RIN\RIN11F\SessionListType $sessionList
     * @return self
     */
    public function setSessionList(?\DDEX\RIN\RIN11F\SessionListType $sessionList = null)
    {
        $this->sessionList = $sessionList;
        return $this;
    }

    /**
     * Gets as equipmentList
     *
     * A Composite containing details of Equipment.
     *
     * @return \DDEX\RIN\RIN11F\EquipmentListType
     */
    public function getEquipmentList()
    {
        return $this->equipmentList;
    }

    /**
     * Sets a new equipmentList
     *
     * A Composite containing details of Equipment.
     *
     * @param \DDEX\RIN\RIN11F\EquipmentListType $equipmentList
     * @return self
     */
    public function setEquipmentList(?\DDEX\RIN\RIN11F\EquipmentListType $equipmentList = null)
    {
        $this->equipmentList = $equipmentList;
        return $this;
    }

    /**
     * Gets as dataCarrierList
     *
     * A Composite containing details of one or more DataCarriers.
     *
     * @return \DDEX\RIN\RIN11F\DataCarrierListType
     */
    public function getDataCarrierList()
    {
        return $this->dataCarrierList;
    }

    /**
     * Sets a new dataCarrierList
     *
     * A Composite containing details of one or more DataCarriers.
     *
     * @param \DDEX\RIN\RIN11F\DataCarrierListType $dataCarrierList
     * @return self
     */
    public function setDataCarrierList(?\DDEX\RIN\RIN11F\DataCarrierListType $dataCarrierList = null)
    {
        $this->dataCarrierList = $dataCarrierList;
        return $this;
    }

    /**
     * Gets as elementList
     *
     * A Composite containing details of one or more Elements.
     *
     * @return \DDEX\RIN\RIN11F\ElementListType
     */
    public function getElementList()
    {
        return $this->elementList;
    }

    /**
     * Sets a new elementList
     *
     * A Composite containing details of one or more Elements.
     *
     * @param \DDEX\RIN\RIN11F\ElementListType $elementList
     * @return self
     */
    public function setElementList(?\DDEX\RIN\RIN11F\ElementListType $elementList = null)
    {
        $this->elementList = $elementList;
        return $this;
    }

    /**
     * Gets as fileList
     *
     * A Composite containing details of one or more Files.
     *
     * @return \DDEX\RIN\RIN11F\FileListType
     */
    public function getFileList()
    {
        return $this->fileList;
    }

    /**
     * Sets a new fileList
     *
     * A Composite containing details of one or more Files.
     *
     * @param \DDEX\RIN\RIN11F\FileListType $fileList
     * @return self
     */
    public function setFileList(?\DDEX\RIN\RIN11F\FileListType $fileList = null)
    {
        $this->fileList = $fileList;
        return $this;
    }

    /**
     * Adds as transfer
     *
     * A Composite containing details of one or more Transfers.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\TransferType $transfer
     */
    public function addToTransferList(\DDEX\RIN\RIN11F\TransferType $transfer)
    {
        $this->transferList[] = $transfer;
        return $this;
    }

    /**
     * isset transferList
     *
     * A Composite containing details of one or more Transfers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferList($index)
    {
        return isset($this->transferList[$index]);
    }

    /**
     * unset transferList
     *
     * A Composite containing details of one or more Transfers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferList($index)
    {
        unset($this->transferList[$index]);
    }

    /**
     * Gets as transferList
     *
     * A Composite containing details of one or more Transfers.
     *
     * @return \DDEX\RIN\RIN11F\TransferType[]
     */
    public function getTransferList()
    {
        return $this->transferList;
    }

    /**
     * Sets a new transferList
     *
     * A Composite containing details of one or more Transfers.
     *
     * @param \DDEX\RIN\RIN11F\TransferType[] $transferList
     * @return self
     */
    public function setTransferList(array $transferList = null)
    {
        $this->transferList = $transferList;
        return $this;
    }

    /**
     * Adds as incorporatedRecordingInformationNotificationFile
     *
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\RecordingInformationNotificationType $incorporatedRecordingInformationNotificationFile
     */
    public function addToImportedRinFiles(\DDEX\RIN\RIN11F\RecordingInformationNotificationType $incorporatedRecordingInformationNotificationFile)
    {
        $this->importedRinFiles[] = $incorporatedRecordingInformationNotificationFile;
        return $this;
    }

    /**
     * isset importedRinFiles
     *
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImportedRinFiles($index)
    {
        return isset($this->importedRinFiles[$index]);
    }

    /**
     * unset importedRinFiles
     *
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImportedRinFiles($index)
    {
        unset($this->importedRinFiles[$index]);
    }

    /**
     * Gets as importedRinFiles
     *
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @return \DDEX\RIN\RIN11F\RecordingInformationNotificationType[]
     */
    public function getImportedRinFiles()
    {
        return $this->importedRinFiles;
    }

    /**
     * Sets a new importedRinFiles
     *
     * A Composite containing details of one or more Files incorporated into the RecordingInformationNotification.
     *
     * @param \DDEX\RIN\RIN11F\RecordingInformationNotificationType[] $importedRinFiles
     * @return self
     */
    public function setImportedRinFiles(array $importedRinFiles = null)
    {
        $this->importedRinFiles = $importedRinFiles;
        return $this;
    }
}


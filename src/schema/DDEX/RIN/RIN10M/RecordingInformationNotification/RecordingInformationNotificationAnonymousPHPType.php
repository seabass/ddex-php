<?php

namespace DDEX\RIN\RIN10M\RecordingInformationNotification;

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
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The file header for the RecordingInformationNotification.
     *
     * @var \DDEX\RIN\RIN10M\FileHeaderType $fileHeader
     */
    private $fileHeader = null;

    /**
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @var \DDEX\RIN\RIN10M\PartyType[] $partyList
     */
    private $partyList = null;

    /**
     * A Composite containing details of one or more MusicalWorks.
     *
     * @var \DDEX\RIN\RIN10M\MusicalWorkType[] $musicalWorkList
     */
    private $musicalWorkList = null;

    /**
     * A Composite containing details of one or more Resources.
     *
     * @var \DDEX\RIN\RIN10M\SoundRecordingType[] $resourceList
     */
    private $resourceList = null;

    /**
     * A Composite containing details of one or more RecordingComponents.
     *
     * @var \DDEX\RIN\RIN10M\RecordingComponentListType $recordingComponentList
     */
    private $recordingComponentList = null;

    /**
     * A Composite containing details of one or more Projects.
     *
     * @var \DDEX\RIN\RIN10M\ProjectType[] $projectList
     */
    private $projectList = null;

    /**
     * A Composite containing details of one or more Sessions.
     *
     * @var \DDEX\RIN\RIN10M\SessionType[] $sessionList
     */
    private $sessionList = null;

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
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RecordingInformationNotification as defined in IETF RfC 5646. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * @return \DDEX\RIN\RIN10M\FileHeaderType
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
     * @param \DDEX\RIN\RIN10M\FileHeaderType $fileHeader
     * @return self
     */
    public function setFileHeader(?\DDEX\RIN\RIN10M\FileHeaderType $fileHeader = null)
    {
        $this->fileHeader = $fileHeader;
        return $this;
    }

    /**
     * Adds as party
     *
     * A Composite containing details of one or more Parties relating to the reported MusicalWorks.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\PartyType $party
     */
    public function addToPartyList(\DDEX\RIN\RIN10M\PartyType $party)
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
     * @return \DDEX\RIN\RIN10M\PartyType[]
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
     * @param \DDEX\RIN\RIN10M\PartyType[] $partyList
     * @return self
     */
    public function setPartyList(array $partyList = null)
    {
        $this->partyList = $partyList;
        return $this;
    }

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\MusicalWorkType $musicalWork
     */
    public function addToMusicalWorkList(\DDEX\RIN\RIN10M\MusicalWorkType $musicalWork)
    {
        $this->musicalWorkList[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWorkList
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWorkList($index)
    {
        return isset($this->musicalWorkList[$index]);
    }

    /**
     * unset musicalWorkList
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWorkList($index)
    {
        unset($this->musicalWorkList[$index]);
    }

    /**
     * Gets as musicalWorkList
     *
     * A Composite containing details of one or more MusicalWorks.
     *
     * @return \DDEX\RIN\RIN10M\MusicalWorkType[]
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
     * @param \DDEX\RIN\RIN10M\MusicalWorkType[] $musicalWorkList
     * @return self
     */
    public function setMusicalWorkList(array $musicalWorkList = null)
    {
        $this->musicalWorkList = $musicalWorkList;
        return $this;
    }

    /**
     * Adds as soundRecording
     *
     * A Composite containing details of one or more Resources.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\SoundRecordingType $soundRecording
     */
    public function addToResourceList(\DDEX\RIN\RIN10M\SoundRecordingType $soundRecording)
    {
        $this->resourceList[] = $soundRecording;
        return $this;
    }

    /**
     * isset resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceList($index)
    {
        return isset($this->resourceList[$index]);
    }

    /**
     * unset resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceList($index)
    {
        unset($this->resourceList[$index]);
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources.
     *
     * @return \DDEX\RIN\RIN10M\SoundRecordingType[]
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
     * @param \DDEX\RIN\RIN10M\SoundRecordingType[] $resourceList
     * @return self
     */
    public function setResourceList(array $resourceList = null)
    {
        $this->resourceList = $resourceList;
        return $this;
    }

    /**
     * Gets as recordingComponentList
     *
     * A Composite containing details of one or more RecordingComponents.
     *
     * @return \DDEX\RIN\RIN10M\RecordingComponentListType
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
     * @param \DDEX\RIN\RIN10M\RecordingComponentListType $recordingComponentList
     * @return self
     */
    public function setRecordingComponentList(?\DDEX\RIN\RIN10M\RecordingComponentListType $recordingComponentList = null)
    {
        $this->recordingComponentList = $recordingComponentList;
        return $this;
    }

    /**
     * Adds as project
     *
     * A Composite containing details of one or more Projects.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\ProjectType $project
     */
    public function addToProjectList(\DDEX\RIN\RIN10M\ProjectType $project)
    {
        $this->projectList[] = $project;
        return $this;
    }

    /**
     * isset projectList
     *
     * A Composite containing details of one or more Projects.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectList($index)
    {
        return isset($this->projectList[$index]);
    }

    /**
     * unset projectList
     *
     * A Composite containing details of one or more Projects.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectList($index)
    {
        unset($this->projectList[$index]);
    }

    /**
     * Gets as projectList
     *
     * A Composite containing details of one or more Projects.
     *
     * @return \DDEX\RIN\RIN10M\ProjectType[]
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
     * @param \DDEX\RIN\RIN10M\ProjectType[] $projectList
     * @return self
     */
    public function setProjectList(array $projectList = null)
    {
        $this->projectList = $projectList;
        return $this;
    }

    /**
     * Adds as session
     *
     * A Composite containing details of one or more Sessions.
     *
     * @return self
     * @param \DDEX\RIN\RIN10M\SessionType $session
     */
    public function addToSessionList(\DDEX\RIN\RIN10M\SessionType $session)
    {
        $this->sessionList[] = $session;
        return $this;
    }

    /**
     * isset sessionList
     *
     * A Composite containing details of one or more Sessions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionList($index)
    {
        return isset($this->sessionList[$index]);
    }

    /**
     * unset sessionList
     *
     * A Composite containing details of one or more Sessions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionList($index)
    {
        unset($this->sessionList[$index]);
    }

    /**
     * Gets as sessionList
     *
     * A Composite containing details of one or more Sessions.
     *
     * @return \DDEX\RIN\RIN10M\SessionType[]
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
     * @param \DDEX\RIN\RIN10M\SessionType[] $sessionList
     * @return self
     */
    public function setSessionList(array $sessionList = null)
    {
        $this->sessionList = $sessionList;
        return $this;
    }
}


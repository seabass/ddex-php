<?php

namespace DDEX\RIN\RIN11F;

/**
 * Class representing RecordingComponentListType
 *
 * A Composite containing details of one or more RecordingComponents.
 * XSD Type: RecordingComponentList
 */
class RecordingComponentListType
{
    /**
     * The Language and script for the Elements of the RecordingComponentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a RecordingComponent.
     *
     * @var \DDEX\RIN\RIN11F\RecordingComponentType[] $recordingComponent
     */
    private $recordingComponent = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the RecordingComponentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the RecordingComponentList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as recordingComponent
     *
     * A Composite containing details of a RecordingComponent.
     *
     * @return self
     * @param \DDEX\RIN\RIN11F\RecordingComponentType $recordingComponent
     */
    public function addToRecordingComponent(\DDEX\RIN\RIN11F\RecordingComponentType $recordingComponent)
    {
        $this->recordingComponent[] = $recordingComponent;
        return $this;
    }

    /**
     * isset recordingComponent
     *
     * A Composite containing details of a RecordingComponent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecordingComponent($index)
    {
        return isset($this->recordingComponent[$index]);
    }

    /**
     * unset recordingComponent
     *
     * A Composite containing details of a RecordingComponent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecordingComponent($index)
    {
        unset($this->recordingComponent[$index]);
    }

    /**
     * Gets as recordingComponent
     *
     * A Composite containing details of a RecordingComponent.
     *
     * @return \DDEX\RIN\RIN11F\RecordingComponentType[]
     */
    public function getRecordingComponent()
    {
        return $this->recordingComponent;
    }

    /**
     * Sets a new recordingComponent
     *
     * A Composite containing details of a RecordingComponent.
     *
     * @param \DDEX\RIN\RIN11F\RecordingComponentType[] $recordingComponent
     * @return self
     */
    public function setRecordingComponent(array $recordingComponent)
    {
        $this->recordingComponent = $recordingComponent;
        return $this;
    }
}


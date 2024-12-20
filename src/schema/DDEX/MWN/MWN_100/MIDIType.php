<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing MIDIType
 *
 * A Composite containing details of a MIDI.
 * XSD Type: MIDI
 */
class MIDIType
{
    /**
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of Identifiers of the Midi.
     *
     * @var \DDEX\MWN\MWN_100\ResourceProprietaryIdType[] $midiId
     */
    private $midiId = [
        
    ];

    /**
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @var string $resourceReference
     */
    private $resourceReference = null;

    /**
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @var \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @var \DDEX\MWN\MWN_100\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @var \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     */
    private $resourceMusicalWorkReferenceList = null;

    /**
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @var \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $midiDetailsByTerritory
     */
    private $midiDetailsByTerritory = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Resource as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceProprietaryIdType $midiId
     */
    public function addToMidiId(\DDEX\MWN\MWN_100\ResourceProprietaryIdType $midiId)
    {
        $this->midiId[] = $midiId;
        return $this;
    }

    /**
     * isset midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMidiId($index)
    {
        return isset($this->midiId[$index]);
    }

    /**
     * unset midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMidiId($index)
    {
        unset($this->midiId[$index]);
    }

    /**
     * Gets as midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @return \DDEX\MWN\MWN_100\ResourceProprietaryIdType[]
     */
    public function getMidiId()
    {
        return $this->midiId;
    }

    /**
     * Sets a new midiId
     *
     * A Composite containing details of Identifiers of the Midi.
     *
     * @param \DDEX\MWN\MWN_100\ResourceProprietaryIdType[] $midiId
     * @return self
     */
    public function setMidiId(array $midiId)
    {
        $this->midiId = $midiId;
        return $this;
    }

    /**
     * Gets as resourceReference
     *
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @return string
     */
    public function getResourceReference()
    {
        return $this->resourceReference;
    }

    /**
     * Sets a new resourceReference
     *
     * The Identifier (specific to the Message) of the Resource within the Release which contains it. This is a LocalResourceAnchor starting with the letter A.
     *
     * @param string $resourceReference
     * @return self
     */
    public function setResourceReference($resourceReference)
    {
        $this->resourceReference = $resourceReference;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @return \DDEX\MWN\MWN_100\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Resource.
     *
     * @param \DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(?\DDEX\MWN\MWN_100\ReferenceTitleType $referenceTitle = null)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\TitleType $title
     */
    public function addToTitle(\DDEX\MWN\MWN_100\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
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
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @return \DDEX\MWN\MWN_100\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the MusicalWork.
     *
     * @param \DDEX\MWN\MWN_100\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The Duration of the Resource (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S). The seconds section ss may include fractions (e.g. one minute and 30.5 seconds would be PT1M30.5S).
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(?\DateInterval $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Adds as resourceMusicalWorkReference
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference
     */
    public function addToResourceMusicalWorkReferenceList(\DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType $resourceMusicalWorkReference)
    {
        $this->resourceMusicalWorkReferenceList[] = $resourceMusicalWorkReference;
        return $this;
    }

    /**
     * isset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceMusicalWorkReferenceList($index)
    {
        return isset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * unset resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceMusicalWorkReferenceList($index)
    {
        unset($this->resourceMusicalWorkReferenceList[$index]);
    }

    /**
     * Gets as resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @return \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[]
     */
    public function getResourceMusicalWorkReferenceList()
    {
        return $this->resourceMusicalWorkReferenceList;
    }

    /**
     * Sets a new resourceMusicalWorkReferenceList
     *
     * A Composite containing details of one or more MusicalWorks contained in the Resource.
     *
     * @param \DDEX\MWN\MWN_100\ResourceMusicalWorkReferenceType[] $resourceMusicalWorkReferenceList
     * @return self
     */
    public function setResourceMusicalWorkReferenceList(array $resourceMusicalWorkReferenceList = null)
    {
        $this->resourceMusicalWorkReferenceList = $resourceMusicalWorkReferenceList;
        return $this;
    }

    /**
     * Adds as midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $midiDetailsByTerritory
     */
    public function addToMidiDetailsByTerritory(\DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType $midiDetailsByTerritory)
    {
        $this->midiDetailsByTerritory[] = $midiDetailsByTerritory;
        return $this;
    }

    /**
     * isset midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMidiDetailsByTerritory($index)
    {
        return isset($this->midiDetailsByTerritory[$index]);
    }

    /**
     * unset midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMidiDetailsByTerritory($index)
    {
        unset($this->midiDetailsByTerritory[$index]);
    }

    /**
     * Gets as midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @return \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[]
     */
    public function getMidiDetailsByTerritory()
    {
        return $this->midiDetailsByTerritory;
    }

    /**
     * Sets a new midiDetailsByTerritory
     *
     * A Composite containing details of Descriptors and other attributes of the MIDI which may vary according to Territory of release.
     *
     * @param \DDEX\MWN\MWN_100\ResourceDetailsByTerritoryType[] $midiDetailsByTerritory
     * @return self
     */
    public function setMidiDetailsByTerritory(array $midiDetailsByTerritory = null)
    {
        $this->midiDetailsByTerritory = $midiDetailsByTerritory;
        return $this;
    }
}


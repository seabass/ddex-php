<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing ResourceListType
 *
 * A Composite containing details of one or more Resources. ResourceList provides a simple means of aggregating Resources without any explicit sequencing or grouping: if that is needed it is provided by the ResourceGroup Composite.
 * XSD Type: ResourceList
 */
class ResourceListType
{
    /**
     * The Language and script for the Elements of the ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DDEX\ERN\ERN_360\SoundRecordingType[] $soundRecording
     */
    private $soundRecording = [
        
    ];

    /**
     * A Composite containing details of a MIDI.
     *
     * @var \DDEX\ERN\ERN_360\MIDIType[] $mIDI
     */
    private $mIDI = [
        
    ];

    /**
     * A Composite containing details of a Video.
     *
     * @var \DDEX\ERN\ERN_360\VideoType[] $video
     */
    private $video = [
        
    ];

    /**
     * A Composite containing details of an Image.
     *
     * @var \DDEX\ERN\ERN_360\ImageType[] $image
     */
    private $image = [
        
    ];

    /**
     * A Composite containing details of a Text.
     *
     * @var \DDEX\ERN\ERN_360\TextType[] $text
     */
    private $text = [
        
    ];

    /**
     * A Composite containing details of a Text.
     *
     * @var \DDEX\ERN\ERN_360\SheetMusicType[] $sheetMusic
     */
    private $sheetMusic = [
        
    ];

    /**
     * A Composite containing details of an item of Software.
     *
     * @var \DDEX\ERN\ERN_360\SoftwareType[] $software
     */
    private $software = [
        
    ];

    /**
     * A Composite containing details of a UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\UserDefinedResourceType[] $userDefinedResource
     */
    private $userDefinedResource = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ResourceList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\SoundRecordingType $soundRecording
     */
    public function addToSoundRecording(\DDEX\ERN\ERN_360\SoundRecordingType $soundRecording)
    {
        $this->soundRecording[] = $soundRecording;
        return $this;
    }

    /**
     * isset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoundRecording($index)
    {
        return isset($this->soundRecording[$index]);
    }

    /**
     * unset soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoundRecording($index)
    {
        unset($this->soundRecording[$index]);
    }

    /**
     * Gets as soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return \DDEX\ERN\ERN_360\SoundRecordingType[]
     */
    public function getSoundRecording()
    {
        return $this->soundRecording;
    }

    /**
     * Sets a new soundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param \DDEX\ERN\ERN_360\SoundRecordingType[] $soundRecording
     * @return self
     */
    public function setSoundRecording(array $soundRecording = null)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }

    /**
     * Adds as mIDI
     *
     * A Composite containing details of a MIDI.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\MIDIType $mIDI
     */
    public function addToMIDI(\DDEX\ERN\ERN_360\MIDIType $mIDI)
    {
        $this->mIDI[] = $mIDI;
        return $this;
    }

    /**
     * isset mIDI
     *
     * A Composite containing details of a MIDI.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMIDI($index)
    {
        return isset($this->mIDI[$index]);
    }

    /**
     * unset mIDI
     *
     * A Composite containing details of a MIDI.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMIDI($index)
    {
        unset($this->mIDI[$index]);
    }

    /**
     * Gets as mIDI
     *
     * A Composite containing details of a MIDI.
     *
     * @return \DDEX\ERN\ERN_360\MIDIType[]
     */
    public function getMIDI()
    {
        return $this->mIDI;
    }

    /**
     * Sets a new mIDI
     *
     * A Composite containing details of a MIDI.
     *
     * @param \DDEX\ERN\ERN_360\MIDIType[] $mIDI
     * @return self
     */
    public function setMIDI(array $mIDI = null)
    {
        $this->mIDI = $mIDI;
        return $this;
    }

    /**
     * Adds as video
     *
     * A Composite containing details of a Video.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\VideoType $video
     */
    public function addToVideo(\DDEX\ERN\ERN_360\VideoType $video)
    {
        $this->video[] = $video;
        return $this;
    }

    /**
     * isset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideo($index)
    {
        return isset($this->video[$index]);
    }

    /**
     * unset video
     *
     * A Composite containing details of a Video.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideo($index)
    {
        unset($this->video[$index]);
    }

    /**
     * Gets as video
     *
     * A Composite containing details of a Video.
     *
     * @return \DDEX\ERN\ERN_360\VideoType[]
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets a new video
     *
     * A Composite containing details of a Video.
     *
     * @param \DDEX\ERN\ERN_360\VideoType[] $video
     * @return self
     */
    public function setVideo(array $video = null)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * Adds as image
     *
     * A Composite containing details of an Image.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ImageType $image
     */
    public function addToImage(\DDEX\ERN\ERN_360\ImageType $image)
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * isset image
     *
     * A Composite containing details of an Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImage($index)
    {
        return isset($this->image[$index]);
    }

    /**
     * unset image
     *
     * A Composite containing details of an Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImage($index)
    {
        unset($this->image[$index]);
    }

    /**
     * Gets as image
     *
     * A Composite containing details of an Image.
     *
     * @return \DDEX\ERN\ERN_360\ImageType[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * A Composite containing details of an Image.
     *
     * @param \DDEX\ERN\ERN_360\ImageType[] $image
     * @return self
     */
    public function setImage(array $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Adds as text
     *
     * A Composite containing details of a Text.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TextType $text
     */
    public function addToText(\DDEX\ERN\ERN_360\TextType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * A Composite containing details of a Text.
     *
     * @return \DDEX\ERN\ERN_360\TextType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * A Composite containing details of a Text.
     *
     * @param \DDEX\ERN\ERN_360\TextType[] $text
     * @return self
     */
    public function setText(array $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as sheetMusic
     *
     * A Composite containing details of a Text.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\SheetMusicType $sheetMusic
     */
    public function addToSheetMusic(\DDEX\ERN\ERN_360\SheetMusicType $sheetMusic)
    {
        $this->sheetMusic[] = $sheetMusic;
        return $this;
    }

    /**
     * isset sheetMusic
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSheetMusic($index)
    {
        return isset($this->sheetMusic[$index]);
    }

    /**
     * unset sheetMusic
     *
     * A Composite containing details of a Text.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSheetMusic($index)
    {
        unset($this->sheetMusic[$index]);
    }

    /**
     * Gets as sheetMusic
     *
     * A Composite containing details of a Text.
     *
     * @return \DDEX\ERN\ERN_360\SheetMusicType[]
     */
    public function getSheetMusic()
    {
        return $this->sheetMusic;
    }

    /**
     * Sets a new sheetMusic
     *
     * A Composite containing details of a Text.
     *
     * @param \DDEX\ERN\ERN_360\SheetMusicType[] $sheetMusic
     * @return self
     */
    public function setSheetMusic(array $sheetMusic = null)
    {
        $this->sheetMusic = $sheetMusic;
        return $this;
    }

    /**
     * Adds as software
     *
     * A Composite containing details of an item of Software.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\SoftwareType $software
     */
    public function addToSoftware(\DDEX\ERN\ERN_360\SoftwareType $software)
    {
        $this->software[] = $software;
        return $this;
    }

    /**
     * isset software
     *
     * A Composite containing details of an item of Software.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSoftware($index)
    {
        return isset($this->software[$index]);
    }

    /**
     * unset software
     *
     * A Composite containing details of an item of Software.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSoftware($index)
    {
        unset($this->software[$index]);
    }

    /**
     * Gets as software
     *
     * A Composite containing details of an item of Software.
     *
     * @return \DDEX\ERN\ERN_360\SoftwareType[]
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * A Composite containing details of an item of Software.
     *
     * @param \DDEX\ERN\ERN_360\SoftwareType[] $software
     * @return self
     */
    public function setSoftware(array $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Adds as userDefinedResource
     *
     * A Composite containing details of a UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\UserDefinedResourceType $userDefinedResource
     */
    public function addToUserDefinedResource(\DDEX\ERN\ERN_360\UserDefinedResourceType $userDefinedResource)
    {
        $this->userDefinedResource[] = $userDefinedResource;
        return $this;
    }

    /**
     * isset userDefinedResource
     *
     * A Composite containing details of a UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedResource($index)
    {
        return isset($this->userDefinedResource[$index]);
    }

    /**
     * unset userDefinedResource
     *
     * A Composite containing details of a UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedResource($index)
    {
        unset($this->userDefinedResource[$index]);
    }

    /**
     * Gets as userDefinedResource
     *
     * A Composite containing details of a UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_360\UserDefinedResourceType[]
     */
    public function getUserDefinedResource()
    {
        return $this->userDefinedResource;
    }

    /**
     * Sets a new userDefinedResource
     *
     * A Composite containing details of a UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_360\UserDefinedResourceType[] $userDefinedResource
     * @return self
     */
    public function setUserDefinedResource(array $userDefinedResource = null)
    {
        $this->userDefinedResource = $userDefinedResource;
        return $this;
    }
}


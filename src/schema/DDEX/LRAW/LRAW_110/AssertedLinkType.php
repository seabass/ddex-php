<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing AssertedLinkType
 *
 * A Composite containing details of a link between a SoundRecording and one or more MusicalWorks that it uses.
 * XSD Type: AssertedLink
 */
class AssertedLinkType
{
    /**
     * A Composite containing details of Identifiers of the link.
     *
     * @var \DDEX\LRAW\LRAW_110\LinkIdType $linkId
     */
    private $linkId = null;

    /**
     * An Identifier of a link request relating to the asserted link.
     *
     * @var string $linkRequestId
     */
    private $linkRequestId = null;

    /**
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @var \DDEX\LRAW\LRAW_110\AssertionType[] $assertion
     */
    private $assertion = [
        
    ];

    /**
     * A Type of the relationship between the Resource and the work(s). If the Resource is a MultipleWorkResource (e.g. it contains samples, it is a medley or an interpellation), more than one MusicalWork may be specified.
     *
     * @var string $resourceWorkRelationshipType
     */
    private $resourceWorkRelationshipType = null;

    /**
     * A Composite containing details of the SoundRecording for which the link to the MusicalWorks is asserted.
     *
     * @var \DDEX\LRAW\LRAW_110\SoundRecordingType $soundRecording
     */
    private $soundRecording = null;

    /**
     * A Composite containing details of the Video for which the link to the MusicalWorks is asserted.
     *
     * @var \DDEX\LRAW\LRAW_110\VideoType $video
     */
    private $video = null;

    /**
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @var \DDEX\LRAW\LRAW_110\MusicalWorkType[] $musicalWork
     */
    private $musicalWork = [
        
    ];

    /**
     * Gets as linkId
     *
     * A Composite containing details of Identifiers of the link.
     *
     * @return \DDEX\LRAW\LRAW_110\LinkIdType
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * A Composite containing details of Identifiers of the link.
     *
     * @param \DDEX\LRAW\LRAW_110\LinkIdType $linkId
     * @return self
     */
    public function setLinkId(\DDEX\LRAW\LRAW_110\LinkIdType $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Gets as linkRequestId
     *
     * An Identifier of a link request relating to the asserted link.
     *
     * @return string
     */
    public function getLinkRequestId()
    {
        return $this->linkRequestId;
    }

    /**
     * Sets a new linkRequestId
     *
     * An Identifier of a link request relating to the asserted link.
     *
     * @param string $linkRequestId
     * @return self
     */
    public function setLinkRequestId($linkRequestId)
    {
        $this->linkRequestId = $linkRequestId;
        return $this;
    }

    /**
     * Adds as assertion
     *
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\AssertionType $assertion
     */
    public function addToAssertion(\DDEX\LRAW\LRAW_110\AssertionType $assertion)
    {
        $this->assertion[] = $assertion;
        return $this;
    }

    /**
     * isset assertion
     *
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssertion($index)
    {
        return isset($this->assertion[$index]);
    }

    /**
     * unset assertion
     *
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssertion($index)
    {
        unset($this->assertion[$index]);
    }

    /**
     * Gets as assertion
     *
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @return \DDEX\LRAW\LRAW_110\AssertionType[]
     */
    public function getAssertion()
    {
        return $this->assertion;
    }

    /**
     * Sets a new assertion
     *
     * A Composite containing details of an assertion about the link between the SoundRecording and one or more MusicalWorks that it uses.
     *
     * @param \DDEX\LRAW\LRAW_110\AssertionType[] $assertion
     * @return self
     */
    public function setAssertion(array $assertion)
    {
        $this->assertion = $assertion;
        return $this;
    }

    /**
     * Gets as resourceWorkRelationshipType
     *
     * A Type of the relationship between the Resource and the work(s). If the Resource is a MultipleWorkResource (e.g. it contains samples, it is a medley or an interpellation), more than one MusicalWork may be specified.
     *
     * @return string
     */
    public function getResourceWorkRelationshipType()
    {
        return $this->resourceWorkRelationshipType;
    }

    /**
     * Sets a new resourceWorkRelationshipType
     *
     * A Type of the relationship between the Resource and the work(s). If the Resource is a MultipleWorkResource (e.g. it contains samples, it is a medley or an interpellation), more than one MusicalWork may be specified.
     *
     * @param string $resourceWorkRelationshipType
     * @return self
     */
    public function setResourceWorkRelationshipType($resourceWorkRelationshipType)
    {
        $this->resourceWorkRelationshipType = $resourceWorkRelationshipType;
        return $this;
    }

    /**
     * Gets as soundRecording
     *
     * A Composite containing details of the SoundRecording for which the link to the MusicalWorks is asserted.
     *
     * @return \DDEX\LRAW\LRAW_110\SoundRecordingType
     */
    public function getSoundRecording()
    {
        return $this->soundRecording;
    }

    /**
     * Sets a new soundRecording
     *
     * A Composite containing details of the SoundRecording for which the link to the MusicalWorks is asserted.
     *
     * @param \DDEX\LRAW\LRAW_110\SoundRecordingType $soundRecording
     * @return self
     */
    public function setSoundRecording(?\DDEX\LRAW\LRAW_110\SoundRecordingType $soundRecording = null)
    {
        $this->soundRecording = $soundRecording;
        return $this;
    }

    /**
     * Gets as video
     *
     * A Composite containing details of the Video for which the link to the MusicalWorks is asserted.
     *
     * @return \DDEX\LRAW\LRAW_110\VideoType
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets a new video
     *
     * A Composite containing details of the Video for which the link to the MusicalWorks is asserted.
     *
     * @param \DDEX\LRAW\LRAW_110\VideoType $video
     * @return self
     */
    public function setVideo(?\DDEX\LRAW\LRAW_110\VideoType $video = null)
    {
        $this->video = $video;
        return $this;
    }

    /**
     * Adds as musicalWork
     *
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @return self
     * @param \DDEX\LRAW\LRAW_110\MusicalWorkType $musicalWork
     */
    public function addToMusicalWork(\DDEX\LRAW\LRAW_110\MusicalWorkType $musicalWork)
    {
        $this->musicalWork[] = $musicalWork;
        return $this;
    }

    /**
     * isset musicalWork
     *
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMusicalWork($index)
    {
        return isset($this->musicalWork[$index]);
    }

    /**
     * unset musicalWork
     *
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMusicalWork($index)
    {
        unset($this->musicalWork[$index]);
    }

    /**
     * Gets as musicalWork
     *
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @return \DDEX\LRAW\LRAW_110\MusicalWorkType[]
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A Composite containing details of a MusicalWork used by the SoundRecording.
     *
     * @param \DDEX\LRAW\LRAW_110\MusicalWorkType[] $musicalWork
     * @return self
     */
    public function setMusicalWork(array $musicalWork = null)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}


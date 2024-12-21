<?php

namespace DDEX\LRAW\LRAW_110;

/**
 * Class representing LinkRequestType
 *
 * A Composite containing details of a request for a link.
 * XSD Type: LinkRequest
 */
class LinkRequestType
{
    /**
     * An Identifier of the link request.
     *
     * @var string $linkRequestId
     */
    private $linkRequestId = null;

    /**
     * A Composite containing details of the SoundRecording for which a link to a MusicalWork is requested.
     *
     * @var \DDEX\LRAW\LRAW_110\SoundRecordingType $soundRecording
     */
    private $soundRecording = null;

    /**
     * A Composite containing details of the Video for which a link to a MusicalWork is requested.
     *
     * @var \DDEX\LRAW\LRAW_110\VideoType $video
     */
    private $video = null;

    /**
     * A Composite containing details of the MusicalWork for which a link to a Resource is requested.
     *
     * @var \DDEX\LRAW\LRAW_110\MusicalWorkType $musicalWork
     */
    private $musicalWork = null;

    /**
     * Gets as linkRequestId
     *
     * An Identifier of the link request.
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
     * An Identifier of the link request.
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
     * Gets as soundRecording
     *
     * A Composite containing details of the SoundRecording for which a link to a MusicalWork is requested.
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
     * A Composite containing details of the SoundRecording for which a link to a MusicalWork is requested.
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
     * A Composite containing details of the Video for which a link to a MusicalWork is requested.
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
     * A Composite containing details of the Video for which a link to a MusicalWork is requested.
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
     * Gets as musicalWork
     *
     * A Composite containing details of the MusicalWork for which a link to a Resource is requested.
     *
     * @return \DDEX\LRAW\LRAW_110\MusicalWorkType
     */
    public function getMusicalWork()
    {
        return $this->musicalWork;
    }

    /**
     * Sets a new musicalWork
     *
     * A Composite containing details of the MusicalWork for which a link to a Resource is requested.
     *
     * @param \DDEX\LRAW\LRAW_110\MusicalWorkType $musicalWork
     * @return self
     */
    public function setMusicalWork(?\DDEX\LRAW\LRAW_110\MusicalWorkType $musicalWork = null)
    {
        $this->musicalWork = $musicalWork;
        return $this;
    }
}


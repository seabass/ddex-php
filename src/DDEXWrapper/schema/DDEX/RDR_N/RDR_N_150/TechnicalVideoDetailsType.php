<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing TechnicalVideoDetailsType
 *
 * A Composite containing technical details of a Video.
 * XSD Type: TechnicalVideoDetails
 */
class TechnicalVideoDetailsType
{
    /**
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a ContainerFormat.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContainerFormatType $containerFormat
     */
    private $containerFormat = null;

    /**
     * A Composite containing details of a Type of VideoCodec.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoCodecTypeType $videoCodecType
     */
    private $videoCodecType = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the TechnicalSoundRecordingDetails as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContainerFormatType
     */
    public function getContainerFormat()
    {
        return $this->containerFormat;
    }

    /**
     * Sets a new containerFormat
     *
     * A Composite containing details of a ContainerFormat.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContainerFormatType $containerFormat
     * @return self
     */
    public function setContainerFormat(?\DDEX\RDR_N\RDR_N_150\ContainerFormatType $containerFormat = null)
    {
        $this->containerFormat = $containerFormat;
        return $this;
    }

    /**
     * Gets as videoCodecType
     *
     * A Composite containing details of a Type of VideoCodec.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoCodecTypeType
     */
    public function getVideoCodecType()
    {
        return $this->videoCodecType;
    }

    /**
     * Sets a new videoCodecType
     *
     * A Composite containing details of a Type of VideoCodec.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VideoCodecTypeType $videoCodecType
     * @return self
     */
    public function setVideoCodecType(?\DDEX\RDR_N\RDR_N_150\VideoCodecTypeType $videoCodecType = null)
    {
        $this->videoCodecType = $videoCodecType;
        return $this;
    }
}


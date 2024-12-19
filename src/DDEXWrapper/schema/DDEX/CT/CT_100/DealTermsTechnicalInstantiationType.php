<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing DealTermsTechnicalInstantiationType
 *
 * A Composite containing technical details of a Release.
 * XSD Type: DealTermsTechnicalInstantiation
 */
class DealTermsTechnicalInstantiationType
{
    /**
     * A Type of resolution (or definition) in which a Video is provided.
     *
     * @var \DDEX\CT\CT_100\VideoDefinitionTypeType $videoDefinitionType
     */
    private $videoDefinitionType = null;

    /**
     * A Type of coding used to encode a Resource.
     *
     * @var string $codingType
     */
    private $codingType = null;

    /**
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @var \DDEX\CT\CT_100\BitRateType $bitRate
     */
    private $bitRate = null;

    /**
     * Gets as videoDefinitionType
     *
     * A Type of resolution (or definition) in which a Video is provided.
     *
     * @return \DDEX\CT\CT_100\VideoDefinitionTypeType
     */
    public function getVideoDefinitionType()
    {
        return $this->videoDefinitionType;
    }

    /**
     * Sets a new videoDefinitionType
     *
     * A Type of resolution (or definition) in which a Video is provided.
     *
     * @param \DDEX\CT\CT_100\VideoDefinitionTypeType $videoDefinitionType
     * @return self
     */
    public function setVideoDefinitionType(?\DDEX\CT\CT_100\VideoDefinitionTypeType $videoDefinitionType = null)
    {
        $this->videoDefinitionType = $videoDefinitionType;
        return $this;
    }

    /**
     * Gets as codingType
     *
     * A Type of coding used to encode a Resource.
     *
     * @return string
     */
    public function getCodingType()
    {
        return $this->codingType;
    }

    /**
     * Sets a new codingType
     *
     * A Type of coding used to encode a Resource.
     *
     * @param string $codingType
     * @return self
     */
    public function setCodingType($codingType)
    {
        $this->codingType = $codingType;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @return \DDEX\CT\CT_100\BitRateType
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * A Composite containing the BitRate for the audio data and a UnitOfMeasure (the default is kbps).
     *
     * @param \DDEX\CT\CT_100\BitRateType $bitRate
     * @return self
     */
    public function setBitRate(?\DDEX\CT\CT_100\BitRateType $bitRate = null)
    {
        $this->bitRate = $bitRate;
        return $this;
    }
}


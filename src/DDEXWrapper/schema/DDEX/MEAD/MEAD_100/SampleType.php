<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing SampleType
 *
 * A Composite containing details of a sample.
 * XSD Type: Sample
 */
class SampleType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of a related Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\ResourceSummaryType $relatedResource
     */
    private $relatedResource = null;

    /**
     * A Composite containing a Description of a sample feature.
     *
     * @var \DDEX\MEAD\MEAD_100\SampleFeatureType[] $sampleFeature
     */
    private $sampleFeature = [
        
    ];

    /**
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @var bool $containsSamples
     */
    private $containsSamples = null;

    /**
     * A Flag indicating whether the SoundRecording is contained in a sample (=true) or not (=false).
     *
     * @var bool $isContainedInSample
     */
    private $isContainedInSample = null;

    /**
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\TimingType[] $hostTiming
     */
    private $hostTiming = [
        
    ];

    /**
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\TimingType[] $sampleTiming
     */
    private $sampleTiming = [
        
    ];

    /**
     * A Composite containing a Description of the sample.
     *
     * @var \DDEX\MEAD\MEAD_100\TextWithFormatType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param string $metadataSourceReference
     */
    public function addToMetadataSourceReference($metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return string[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param string $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Gets as relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\ResourceSummaryType
     */
    public function getRelatedResource()
    {
        return $this->relatedResource;
    }

    /**
     * Sets a new relatedResource
     *
     * A Composite containing details of a related Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\ResourceSummaryType $relatedResource
     * @return self
     */
    public function setRelatedResource(?\DDEX\MEAD\MEAD_100\ResourceSummaryType $relatedResource = null)
    {
        $this->relatedResource = $relatedResource;
        return $this;
    }

    /**
     * Adds as sampleFeature
     *
     * A Composite containing a Description of a sample feature.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\SampleFeatureType $sampleFeature
     */
    public function addToSampleFeature(\DDEX\MEAD\MEAD_100\SampleFeatureType $sampleFeature)
    {
        $this->sampleFeature[] = $sampleFeature;
        return $this;
    }

    /**
     * isset sampleFeature
     *
     * A Composite containing a Description of a sample feature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSampleFeature($index)
    {
        return isset($this->sampleFeature[$index]);
    }

    /**
     * unset sampleFeature
     *
     * A Composite containing a Description of a sample feature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSampleFeature($index)
    {
        unset($this->sampleFeature[$index]);
    }

    /**
     * Gets as sampleFeature
     *
     * A Composite containing a Description of a sample feature.
     *
     * @return \DDEX\MEAD\MEAD_100\SampleFeatureType[]
     */
    public function getSampleFeature()
    {
        return $this->sampleFeature;
    }

    /**
     * Sets a new sampleFeature
     *
     * A Composite containing a Description of a sample feature.
     *
     * @param \DDEX\MEAD\MEAD_100\SampleFeatureType[] $sampleFeature
     * @return self
     */
    public function setSampleFeature(array $sampleFeature = null)
    {
        $this->sampleFeature = $sampleFeature;
        return $this;
    }

    /**
     * Gets as containsSamples
     *
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @return bool
     */
    public function getContainsSamples()
    {
        return $this->containsSamples;
    }

    /**
     * Sets a new containsSamples
     *
     * The Flag indicating whether the SoundRecording contains samples (=true) or not (=false).
     *
     * @param bool $containsSamples
     * @return self
     */
    public function setContainsSamples($containsSamples)
    {
        $this->containsSamples = $containsSamples;
        return $this;
    }

    /**
     * Gets as isContainedInSample
     *
     * A Flag indicating whether the SoundRecording is contained in a sample (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsContainedInSample()
    {
        return $this->isContainedInSample;
    }

    /**
     * Sets a new isContainedInSample
     *
     * A Flag indicating whether the SoundRecording is contained in a sample (=true) or not (=false).
     *
     * @param bool $isContainedInSample
     * @return self
     */
    public function setIsContainedInSample($isContainedInSample)
    {
        $this->isContainedInSample = $isContainedInSample;
        return $this;
    }

    /**
     * Adds as hostTiming
     *
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TimingType $hostTiming
     */
    public function addToHostTiming(\DDEX\MEAD\MEAD_100\TimingType $hostTiming)
    {
        $this->hostTiming[] = $hostTiming;
        return $this;
    }

    /**
     * isset hostTiming
     *
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHostTiming($index)
    {
        return isset($this->hostTiming[$index]);
    }

    /**
     * unset hostTiming
     *
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHostTiming($index)
    {
        unset($this->hostTiming[$index]);
    }

    /**
     * Gets as hostTiming
     *
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\TimingType[]
     */
    public function getHostTiming()
    {
        return $this->hostTiming;
    }

    /**
     * Sets a new hostTiming
     *
     * A Composite containing details of a StartTime and a Duration of a host Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\TimingType[] $hostTiming
     * @return self
     */
    public function setHostTiming(array $hostTiming = null)
    {
        $this->hostTiming = $hostTiming;
        return $this;
    }

    /**
     * Adds as sampleTiming
     *
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TimingType $sampleTiming
     */
    public function addToSampleTiming(\DDEX\MEAD\MEAD_100\TimingType $sampleTiming)
    {
        $this->sampleTiming[] = $sampleTiming;
        return $this;
    }

    /**
     * isset sampleTiming
     *
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSampleTiming($index)
    {
        return isset($this->sampleTiming[$index]);
    }

    /**
     * unset sampleTiming
     *
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSampleTiming($index)
    {
        unset($this->sampleTiming[$index]);
    }

    /**
     * Gets as sampleTiming
     *
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\TimingType[]
     */
    public function getSampleTiming()
    {
        return $this->sampleTiming;
    }

    /**
     * Sets a new sampleTiming
     *
     * A Composite containing details of a StartTime and a Duration of a sample Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\TimingType[] $sampleTiming
     * @return self
     */
    public function setSampleTiming(array $sampleTiming = null)
    {
        $this->sampleTiming = $sampleTiming;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a Description of the sample.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\TextWithFormatType $description
     */
    public function addToDescription(\DDEX\MEAD\MEAD_100\TextWithFormatType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * A Composite containing a Description of the sample.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * A Composite containing a Description of the sample.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * A Composite containing a Description of the sample.
     *
     * @return \DDEX\MEAD\MEAD_100\TextWithFormatType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A Composite containing a Description of the sample.
     *
     * @param \DDEX\MEAD\MEAD_100\TextWithFormatType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}


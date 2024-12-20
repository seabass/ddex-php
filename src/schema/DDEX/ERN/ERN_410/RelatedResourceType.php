<?php

namespace DDEX\ERN\ERN_410;

/**
 * Class representing RelatedResourceType
 *
 * A Composite containing details of a ResourceRelatedResourceReference for the case where one Resource is related to another one.
 * XSD Type: RelatedResource
 */
class RelatedResourceType
{
    /**
     * A Type of relationship between two Resources.
     *
     * @var string $resourceRelationshipType
     */
    private $resourceRelationshipType = null;

    /**
     * A Reference for a related Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string $resourceRelatedResourceReference
     */
    private $resourceRelatedResourceReference = null;

    /**
     * A Composite containing details of ReleaseIds, which allows referencing a related Release that is not in this message. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @var \DDEX\ERN\ERN_410\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @var \DDEX\ERN\ERN_410\TimingType[] $timing
     */
    private $timing = [
        
    ];

    /**
     * Gets as resourceRelationshipType
     *
     * A Type of relationship between two Resources.
     *
     * @return string
     */
    public function getResourceRelationshipType()
    {
        return $this->resourceRelationshipType;
    }

    /**
     * Sets a new resourceRelationshipType
     *
     * A Type of relationship between two Resources.
     *
     * @param string $resourceRelationshipType
     * @return self
     */
    public function setResourceRelationshipType($resourceRelationshipType)
    {
        $this->resourceRelationshipType = $resourceRelationshipType;
        return $this;
    }

    /**
     * Gets as resourceRelatedResourceReference
     *
     * A Reference for a related Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string
     */
    public function getResourceRelatedResourceReference()
    {
        return $this->resourceRelatedResourceReference;
    }

    /**
     * Sets a new resourceRelatedResourceReference
     *
     * A Reference for a related Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $resourceRelatedResourceReference
     * @return self
     */
    public function setResourceRelatedResourceReference($resourceRelatedResourceReference)
    {
        $this->resourceRelatedResourceReference = $resourceRelatedResourceReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds, which allows referencing a related Release that is not in this message. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @return \DDEX\ERN\ERN_410\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds, which allows referencing a related Release that is not in this message. If available, a GRid shall always to be used. If the Release contains only one SoundRecording, the ISRC of the SoundRecording may be used instead. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead. More than one of these identifiers may be provided.
     *
     * @param \DDEX\ERN\ERN_410\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(?\DDEX\ERN\ERN_410\ReleaseIdType $releaseId = null)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as timing
     *
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_410\TimingType $timing
     */
    public function addToTiming(\DDEX\ERN\ERN_410\TimingType $timing)
    {
        $this->timing[] = $timing;
        return $this;
    }

    /**
     * isset timing
     *
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTiming($index)
    {
        return isset($this->timing[$index]);
    }

    /**
     * unset timing
     *
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTiming($index)
    {
        unset($this->timing[$index]);
    }

    /**
     * Gets as timing
     *
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @return \DDEX\ERN\ERN_410\TimingType[]
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Sets a new timing
     *
     * A Composite containing details of a StartTime and/or a Duration of the related Resource.
     *
     * @param \DDEX\ERN\ERN_410\TimingType[] $timing
     * @return self
     */
    public function setTiming(array $timing = null)
    {
        $this->timing = $timing;
        return $this;
    }
}


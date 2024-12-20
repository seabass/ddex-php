<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing CueType
 *
 * A Composite containing details of a Cue.
 * XSD Type: Cue
 */
class CueType
{
    /**
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DDEX\DSR\DSR_420\CueUseTypeType $cueUseType
     */
    private $cueUseType = null;

    /**
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @var \DDEX\DSR\DSR_420\CueThemeTypeType $cueThemeType
     */
    private $cueThemeType = null;

    /**
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @var \DDEX\DSR\DSR_420\CueVocalTypeType $cueVocalType
     */
    private $cueVocalType = null;

    /**
     * A Flag indicating whether a Creation contains dancing (=True) or not (=False).
     *
     * @var bool $isDance
     */
    private $isDance = null;

    /**
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @var \DDEX\DSR\DSR_420\CueVisualPerceptionTypeType $cueVisualPerceptionType
     */
    private $cueVisualPerceptionType = null;

    /**
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @var \DDEX\DSR\DSR_420\CueOriginType $cueOrigin
     */
    private $cueOrigin = null;

    /**
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @var \DDEX\DSR\DSR_420\CueCreationReferenceType[] $cueCreationReference
     */
    private $cueCreationReference = [
        
    ];

    /**
     * A Type of the Creation referenced in the Cue.
     *
     * @var string $referencedCreationType
     */
    private $referencedCreationType = null;

    /**
     * A Composite containing details of a CreationId.
     *
     * @var \DDEX\DSR\DSR_420\CreationIdType $referencedCreationId
     */
    private $referencedCreationId = null;

    /**
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @var \DDEX\DSR\DSR_420\TitleType[] $referencedCreationTitle
     */
    private $referencedCreationTitle = [
        
    ];

    /**
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @var \DDEX\DSR\DSR_420\ResourceContributorType[] $referencedCreationContributor
     */
    private $referencedCreationContributor = [
        
    ];

    /**
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=True) or not (=False).
     *
     * @var bool $hasMusicalContent
     */
    private $hasMusicalContent = null;

    /**
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $startTime
     */
    private $startTime = null;

    /**
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @var \DateInterval $endTime
     */
    private $endTime = null;

    /**
     * Gets as cueUseType
     *
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DDEX\DSR\DSR_420\CueUseTypeType
     */
    public function getCueUseType()
    {
        return $this->cueUseType;
    }

    /**
     * Sets a new cueUseType
     *
     * A Composite containing details of a UseType of the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DDEX\DSR\DSR_420\CueUseTypeType $cueUseType
     * @return self
     */
    public function setCueUseType(?\DDEX\DSR\DSR_420\CueUseTypeType $cueUseType = null)
    {
        $this->cueUseType = $cueUseType;
        return $this;
    }

    /**
     * Gets as cueThemeType
     *
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @return \DDEX\DSR\DSR_420\CueThemeTypeType
     */
    public function getCueThemeType()
    {
        return $this->cueThemeType;
    }

    /**
     * Sets a new cueThemeType
     *
     * A Composite containing details of a ThemeType for the Creation referenced in the Cue.
     *
     * @param \DDEX\DSR\DSR_420\CueThemeTypeType $cueThemeType
     * @return self
     */
    public function setCueThemeType(?\DDEX\DSR\DSR_420\CueThemeTypeType $cueThemeType = null)
    {
        $this->cueThemeType = $cueThemeType;
        return $this;
    }

    /**
     * Gets as cueVocalType
     *
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @return \DDEX\DSR\DSR_420\CueVocalTypeType
     */
    public function getCueVocalType()
    {
        return $this->cueVocalType;
    }

    /**
     * Sets a new cueVocalType
     *
     * A Composite containing details of a VocalType for the Creation referenced in the Cue.
     *
     * @param \DDEX\DSR\DSR_420\CueVocalTypeType $cueVocalType
     * @return self
     */
    public function setCueVocalType(?\DDEX\DSR\DSR_420\CueVocalTypeType $cueVocalType = null)
    {
        $this->cueVocalType = $cueVocalType;
        return $this;
    }

    /**
     * Gets as isDance
     *
     * A Flag indicating whether a Creation contains dancing (=True) or not (=False).
     *
     * @return bool
     */
    public function getIsDance()
    {
        return $this->isDance;
    }

    /**
     * Sets a new isDance
     *
     * A Flag indicating whether a Creation contains dancing (=True) or not (=False).
     *
     * @param bool $isDance
     * @return self
     */
    public function setIsDance($isDance)
    {
        $this->isDance = $isDance;
        return $this;
    }

    /**
     * Gets as cueVisualPerceptionType
     *
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @return \DDEX\DSR\DSR_420\CueVisualPerceptionTypeType
     */
    public function getCueVisualPerceptionType()
    {
        return $this->cueVisualPerceptionType;
    }

    /**
     * Sets a new cueVisualPerceptionType
     *
     * A Composite containing details of a VisualPerceptionType for the Creation referenced in the Cue.
     *
     * @param \DDEX\DSR\DSR_420\CueVisualPerceptionTypeType $cueVisualPerceptionType
     * @return self
     */
    public function setCueVisualPerceptionType(?\DDEX\DSR\DSR_420\CueVisualPerceptionTypeType $cueVisualPerceptionType = null)
    {
        $this->cueVisualPerceptionType = $cueVisualPerceptionType;
        return $this;
    }

    /**
     * Gets as cueOrigin
     *
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @return \DDEX\DSR\DSR_420\CueOriginType
     */
    public function getCueOrigin()
    {
        return $this->cueOrigin;
    }

    /**
     * Sets a new cueOrigin
     *
     * A Composite containing details of a CueOrigin for the Cue. It can be expected that this element will be contractually mandatory in many communications of cue sheets to music rights societies.
     *
     * @param \DDEX\DSR\DSR_420\CueOriginType $cueOrigin
     * @return self
     */
    public function setCueOrigin(?\DDEX\DSR\DSR_420\CueOriginType $cueOrigin = null)
    {
        $this->cueOrigin = $cueOrigin;
        return $this;
    }

    /**
     * Adds as cueCreationReference
     *
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\CueCreationReferenceType $cueCreationReference
     */
    public function addToCueCreationReference(\DDEX\DSR\DSR_420\CueCreationReferenceType $cueCreationReference)
    {
        $this->cueCreationReference[] = $cueCreationReference;
        return $this;
    }

    /**
     * isset cueCreationReference
     *
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCueCreationReference($index)
    {
        return isset($this->cueCreationReference[$index]);
    }

    /**
     * unset cueCreationReference
     *
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCueCreationReference($index)
    {
        unset($this->cueCreationReference[$index]);
    }

    /**
     * Gets as cueCreationReference
     *
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @return \DDEX\DSR\DSR_420\CueCreationReferenceType[]
     */
    public function getCueCreationReference()
    {
        return $this->cueCreationReference;
    }

    /**
     * Sets a new cueCreationReference
     *
     * A Composite containing a CueCreationReference for a Creation (specific to this Message).
     *
     * @param \DDEX\DSR\DSR_420\CueCreationReferenceType[] $cueCreationReference
     * @return self
     */
    public function setCueCreationReference(array $cueCreationReference = null)
    {
        $this->cueCreationReference = $cueCreationReference;
        return $this;
    }

    /**
     * Gets as referencedCreationType
     *
     * A Type of the Creation referenced in the Cue.
     *
     * @return string
     */
    public function getReferencedCreationType()
    {
        return $this->referencedCreationType;
    }

    /**
     * Sets a new referencedCreationType
     *
     * A Type of the Creation referenced in the Cue.
     *
     * @param string $referencedCreationType
     * @return self
     */
    public function setReferencedCreationType($referencedCreationType)
    {
        $this->referencedCreationType = $referencedCreationType;
        return $this;
    }

    /**
     * Gets as referencedCreationId
     *
     * A Composite containing details of a CreationId.
     *
     * @return \DDEX\DSR\DSR_420\CreationIdType
     */
    public function getReferencedCreationId()
    {
        return $this->referencedCreationId;
    }

    /**
     * Sets a new referencedCreationId
     *
     * A Composite containing details of a CreationId.
     *
     * @param \DDEX\DSR\DSR_420\CreationIdType $referencedCreationId
     * @return self
     */
    public function setReferencedCreationId(?\DDEX\DSR\DSR_420\CreationIdType $referencedCreationId = null)
    {
        $this->referencedCreationId = $referencedCreationId;
        return $this;
    }

    /**
     * Adds as referencedCreationTitle
     *
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\TitleType $referencedCreationTitle
     */
    public function addToReferencedCreationTitle(\DDEX\DSR\DSR_420\TitleType $referencedCreationTitle)
    {
        $this->referencedCreationTitle[] = $referencedCreationTitle;
        return $this;
    }

    /**
     * isset referencedCreationTitle
     *
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationTitle($index)
    {
        return isset($this->referencedCreationTitle[$index]);
    }

    /**
     * unset referencedCreationTitle
     *
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationTitle($index)
    {
        unset($this->referencedCreationTitle[$index]);
    }

    /**
     * Gets as referencedCreationTitle
     *
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @return \DDEX\DSR\DSR_420\TitleType[]
     */
    public function getReferencedCreationTitle()
    {
        return $this->referencedCreationTitle;
    }

    /**
     * Sets a new referencedCreationTitle
     *
     * A Composite containing details of a Title of the Creation referenced in the Cue.
     *
     * @param \DDEX\DSR\DSR_420\TitleType[] $referencedCreationTitle
     * @return self
     */
    public function setReferencedCreationTitle(array $referencedCreationTitle = null)
    {
        $this->referencedCreationTitle = $referencedCreationTitle;
        return $this;
    }

    /**
     * Adds as referencedCreationContributor
     *
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @return self
     * @param \DDEX\DSR\DSR_420\ResourceContributorType $referencedCreationContributor
     */
    public function addToReferencedCreationContributor(\DDEX\DSR\DSR_420\ResourceContributorType $referencedCreationContributor)
    {
        $this->referencedCreationContributor[] = $referencedCreationContributor;
        return $this;
    }

    /**
     * isset referencedCreationContributor
     *
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferencedCreationContributor($index)
    {
        return isset($this->referencedCreationContributor[$index]);
    }

    /**
     * unset referencedCreationContributor
     *
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferencedCreationContributor($index)
    {
        unset($this->referencedCreationContributor[$index]);
    }

    /**
     * Gets as referencedCreationContributor
     *
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @return \DDEX\DSR\DSR_420\ResourceContributorType[]
     */
    public function getReferencedCreationContributor()
    {
        return $this->referencedCreationContributor;
    }

    /**
     * Sets a new referencedCreationContributor
     *
     * A Composite containing details a Contributor of the Creation referenced in the Cue.
     *
     * @param \DDEX\DSR\DSR_420\ResourceContributorType[] $referencedCreationContributor
     * @return self
     */
    public function setReferencedCreationContributor(array $referencedCreationContributor = null)
    {
        $this->referencedCreationContributor = $referencedCreationContributor;
        return $this;
    }

    /**
     * Gets as hasMusicalContent
     *
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=True) or not (=False).
     *
     * @return bool
     */
    public function getHasMusicalContent()
    {
        return $this->hasMusicalContent;
    }

    /**
     * Sets a new hasMusicalContent
     *
     * A Flag indicating whether whether the Creation referenced in the Cue contains musical content such as a SoundRecording or a MusicalWork (=True) or not (=False).
     *
     * @param bool $hasMusicalContent
     * @return self
     */
    public function setHasMusicalContent($hasMusicalContent)
    {
        $this->hasMusicalContent = $hasMusicalContent;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $startTime
     * @return self
     */
    public function setStartTime(?\DateInterval $startTime = null)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * The Duration of the use of the Creation that is referenced in the CueCreationReference (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
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
     * Gets as endTime
     *
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @return \DateInterval
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time of the Creation, measured from the start of the Resource from which the CueSheet is referenced (using the ISO 8601:2004 PT[[hhH]mmM]ssS format, where lower case characters indicate variables, upper case characters are part of the xs:string, e.g. one hour, two minutes and three seconds would be PT1H2M3S).
     *
     * @param \DateInterval $endTime
     * @return self
     */
    public function setEndTime(?\DateInterval $endTime = null)
    {
        $this->endTime = $endTime;
        return $this;
    }
}


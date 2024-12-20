<?php

namespace DDEX\MEAD\MEAD_100;

/**
 * Class representing UsageType
 *
 * A Composite containing details of a Context in which a Work or Resource has been used.
 * XSD Type: Usage
 */
class UsageType
{
    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var string[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @var \DDEX\MEAD\MEAD_100\EventDateType[] $usageDate
     */
    private $usageDate = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @var \DDEX\MEAD\MEAD_100\UsagePeriodType[] $usagePeriod
     */
    private $usagePeriod = [
        
    ];

    /**
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
     *
     * @var \DDEX\MEAD\MEAD_100\TextWithFormatType[] $description
     */
    private $description = [
        
    ];

    /**
     * The number indicating the order of the usage in a group of usages.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A Composite containing details of a relevant Resource.
     *
     * @var \DDEX\MEAD\MEAD_100\RelatedResourceType[] $relevantResource
     */
    private $relevantResource = [
        
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
     * Adds as usageDate
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\EventDateType $usageDate
     */
    public function addToUsageDate(\DDEX\MEAD\MEAD_100\EventDateType $usageDate)
    {
        $this->usageDate[] = $usageDate;
        return $this;
    }

    /**
     * isset usageDate
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageDate($index)
    {
        return isset($this->usageDate[$index]);
    }

    /**
     * unset usageDate
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageDate($index)
    {
        unset($this->usageDate[$index]);
    }

    /**
     * Gets as usageDate
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @return \DDEX\MEAD\MEAD_100\EventDateType[]
     */
    public function getUsageDate()
    {
        return $this->usageDate;
    }

    /**
     * Sets a new usageDate
     *
     * A Composite containing details of the Date and Place of the usage (in ISO 8601:2004 format: YYYY-MM-DD).
     *
     * @param \DDEX\MEAD\MEAD_100\EventDateType[] $usageDate
     * @return self
     */
    public function setUsageDate(array $usageDate = null)
    {
        $this->usageDate = $usageDate;
        return $this;
    }

    /**
     * Adds as usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\UsagePeriodType $usagePeriod
     */
    public function addToUsagePeriod(\DDEX\MEAD\MEAD_100\UsagePeriodType $usagePeriod)
    {
        $this->usagePeriod[] = $usagePeriod;
        return $this;
    }

    /**
     * isset usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsagePeriod($index)
    {
        return isset($this->usagePeriod[$index]);
    }

    /**
     * unset usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsagePeriod($index)
    {
        unset($this->usagePeriod[$index]);
    }

    /**
     * Gets as usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @return \DDEX\MEAD\MEAD_100\UsagePeriodType[]
     */
    public function getUsagePeriod()
    {
        return $this->usagePeriod;
    }

    /**
     * Sets a new usagePeriod
     *
     * A Composite containing details about the Period of Time for which a usage is reported.
     *
     * @param \DDEX\MEAD\MEAD_100\UsagePeriodType[] $usagePeriod
     * @return self
     */
    public function setUsagePeriod(array $usagePeriod = null)
    {
        $this->usagePeriod = $usagePeriod;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
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
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
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
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
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
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
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
     * A Composite containing a textual Description of the usage, e.g. 'Woodstock festival' or 'advert' or 'theme song from movie XYZ'.
     *
     * @param \DDEX\MEAD\MEAD_100\TextWithFormatType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the usage in a group of usages.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The number indicating the order of the usage in a group of usages.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Adds as relevantResource
     *
     * A Composite containing details of a relevant Resource.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_100\RelatedResourceType $relevantResource
     */
    public function addToRelevantResource(\DDEX\MEAD\MEAD_100\RelatedResourceType $relevantResource)
    {
        $this->relevantResource[] = $relevantResource;
        return $this;
    }

    /**
     * isset relevantResource
     *
     * A Composite containing details of a relevant Resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelevantResource($index)
    {
        return isset($this->relevantResource[$index]);
    }

    /**
     * unset relevantResource
     *
     * A Composite containing details of a relevant Resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelevantResource($index)
    {
        unset($this->relevantResource[$index]);
    }

    /**
     * Gets as relevantResource
     *
     * A Composite containing details of a relevant Resource.
     *
     * @return \DDEX\MEAD\MEAD_100\RelatedResourceType[]
     */
    public function getRelevantResource()
    {
        return $this->relevantResource;
    }

    /**
     * Sets a new relevantResource
     *
     * A Composite containing details of a relevant Resource.
     *
     * @param \DDEX\MEAD\MEAD_100\RelatedResourceType[] $relevantResource
     * @return self
     */
    public function setRelevantResource(array $relevantResource = null)
    {
        $this->relevantResource = $relevantResource;
        return $this;
    }
}


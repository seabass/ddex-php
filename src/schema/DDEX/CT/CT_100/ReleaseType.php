<?php

namespace DDEX\CT\CT_100;

/**
 * Class representing ReleaseType
 *
 * A Composite containing details of a DDEX Release.
 * XSD Type: Release
 */
class ReleaseType
{
    /**
     * The Flag indicating whether the Release Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Release data with the now provided data.
     *
     * @var bool $isUpdated
     */
    private $isUpdated = null;

    /**
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @var string $releaseReference
     */
    private $releaseReference = null;

    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\CT\CT_100\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @var \DDEX\CT\CT_100\DisplayTitleType[] $displayTitle
     */
    private $displayTitle = [
        
    ];

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @var \DDEX\CT\CT_100\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @var \DDEX\CT\CT_100\ContainedPrimaryResourceType[] $containedPrimaryResource
     */
    private $containedPrimaryResource = [
        
    ];

    /**
     * Gets as isUpdated
     *
     * The Flag indicating whether the Release Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Release data with the now provided data.
     *
     * @return bool
     */
    public function getIsUpdated()
    {
        return $this->isUpdated;
    }

    /**
     * Sets a new isUpdated
     *
     * The Flag indicating whether the Release Element was updated (=true) or not (=false). When this Boolean Flag is set to true, the MessageRecipient is expected to replace any previously provided Release data with the now provided data.
     *
     * @param bool $isUpdated
     * @return self
     */
    public function setIsUpdated($isUpdated)
    {
        $this->isUpdated = $isUpdated;
        return $this;
    }

    /**
     * Gets as releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @return string
     */
    public function getReleaseReference()
    {
        return $this->releaseReference;
    }

    /**
     * Sets a new releaseReference
     *
     * The Identifier (specific to the Message) of the Release. Used to link the Release to one or more Deal(s). This is a LocalReleaseAnchor starting with the letter R.
     *
     * @param string $releaseReference
     * @return self
     */
    public function setReleaseReference($releaseReference)
    {
        $this->releaseReference = $releaseReference;
        return $this;
    }

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\CT\CT_100\ReleaseIdType
     */
    public function getReleaseId()
    {
        return $this->releaseId;
    }

    /**
     * Sets a new releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @param \DDEX\CT\CT_100\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\CT\CT_100\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Adds as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return self
     * @param \DDEX\CT\CT_100\DisplayTitleType $displayTitle
     */
    public function addToDisplayTitle(\DDEX\CT\CT_100\DisplayTitleType $displayTitle)
    {
        $this->displayTitle[] = $displayTitle;
        return $this;
    }

    /**
     * isset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayTitle($index)
    {
        return isset($this->displayTitle[$index]);
    }

    /**
     * unset displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayTitle($index)
    {
        unset($this->displayTitle[$index]);
    }

    /**
     * Gets as displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @return \DDEX\CT\CT_100\DisplayTitleType[]
     */
    public function getDisplayTitle()
    {
        return $this->displayTitle;
    }

    /**
     * Sets a new displayTitle
     *
     * A Composite containing details of a Title of the Release as the MessageSender suggests it should be shown to the Consumer. In many instances this is the only Title to be communicated for any given Creation. Multiple instances can be supplied with an ApplicableTerritoryCode and/or LanguageAndScriptCode.
     *
     * @param \DDEX\CT\CT_100\DisplayTitleType[] $displayTitle
     * @return self
     */
    public function setDisplayTitle(array $displayTitle = null)
    {
        $this->displayTitle = $displayTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return self
     * @param \DDEX\CT\CT_100\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\CT\CT_100\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtistName($index)
    {
        return isset($this->displayArtistName[$index]);
    }

    /**
     * unset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtistName($index)
    {
        unset($this->displayArtistName[$index]);
    }

    /**
     * Gets as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @return \DDEX\CT\CT_100\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Release to a Consumer.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/communicating-displayartists-and-displayartistname
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/displayartistnames-for-releases-and-resources
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/information-on-displayartists%2C-displayartistnames%2C-contributors-and-indirectcontributors
     *
     * @param \DDEX\CT\CT_100\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as containedPrimaryResource
     *
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @return self
     * @param \DDEX\CT\CT_100\ContainedPrimaryResourceType $containedPrimaryResource
     */
    public function addToContainedPrimaryResource(\DDEX\CT\CT_100\ContainedPrimaryResourceType $containedPrimaryResource)
    {
        $this->containedPrimaryResource[] = $containedPrimaryResource;
        return $this;
    }

    /**
     * isset containedPrimaryResource
     *
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedPrimaryResource($index)
    {
        return isset($this->containedPrimaryResource[$index]);
    }

    /**
     * unset containedPrimaryResource
     *
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedPrimaryResource($index)
    {
        unset($this->containedPrimaryResource[$index]);
    }

    /**
     * Gets as containedPrimaryResource
     *
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @return \DDEX\CT\CT_100\ContainedPrimaryResourceType[]
     */
    public function getContainedPrimaryResource()
    {
        return $this->containedPrimaryResource;
    }

    /**
     * Sets a new containedPrimaryResource
     *
     * A Composite containing details of the primary Resource contained in the Release.
     *
     * @param \DDEX\CT\CT_100\ContainedPrimaryResourceType[] $containedPrimaryResource
     * @return self
     */
    public function setContainedPrimaryResource(array $containedPrimaryResource = null)
    {
        $this->containedPrimaryResource = $containedPrimaryResource;
        return $this;
    }
}


<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RequestedVideoType
 *
 * A Composite containing details of a requested Video.
 * XSD Type: RequestedVideo
 */
class RequestedVideoType
{
    /**
     * A Composite containing details of a VideoId.
     *
     * @var \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     */
    private $videoId = [
        
    ];

    /**
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     */
    private $referenceTitle = null;

    /**
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @var \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     */
    private $displayArtistName = [
        
    ];

    /**
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     */
    private $displayArtist = [
        
    ];

    /**
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @var \DDEX\RDR_N\RDR_N_150\PerformingContributorType[] $performingContributor
     */
    private $performingContributor = [
        
    ];

    /**
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @var \DDEX\RDR_N\RDR_N_150\SimpleHostSoundCarrierType[] $hostSoundCarrier
     */
    private $hostSoundCarrier = [
        
    ];

    /**
     * An integer value that allows signaling to the sender of a claim how much the Video that is subject to the claim has been used. This is a value between 0 and 10, where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the request Message.
     *
     * @var int $weight
     */
    private $weight = null;

    /**
     * Adds as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType $videoId
     */
    public function addToVideoId(\DDEX\RDR_N\RDR_N_150\VideoIdType $videoId)
    {
        $this->videoId[] = $videoId;
        return $this;
    }

    /**
     * isset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoId($index)
    {
        return isset($this->videoId[$index]);
    }

    /**
     * unset videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoId($index)
    {
        unset($this->videoId[$index]);
    }

    /**
     * Gets as videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @return \DDEX\RDR_N\RDR_N_150\VideoIdType[]
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Sets a new videoId
     *
     * A Composite containing details of a VideoId.
     *
     * @param \DDEX\RDR_N\RDR_N_150\VideoIdType[] $videoId
     * @return self
     */
    public function setVideoId(array $videoId)
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * Gets as referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ReferenceTitleType
     */
    public function getReferenceTitle()
    {
        return $this->referenceTitle;
    }

    /**
     * Sets a new referenceTitle
     *
     * A Composite containing details of the ReferenceTitle of the Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle
     * @return self
     */
    public function setReferenceTitle(\DDEX\RDR_N\RDR_N_150\ReferenceTitleType $referenceTitle)
    {
        $this->referenceTitle = $referenceTitle;
        return $this;
    }

    /**
     * Adds as displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName
     */
    public function addToDisplayArtistName(\DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType $displayArtistName)
    {
        $this->displayArtistName[] = $displayArtistName;
        return $this;
    }

    /**
     * isset displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
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
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @return \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[]
     */
    public function getDisplayArtistName()
    {
        return $this->displayArtistName;
    }

    /**
     * Sets a new displayArtistName
     *
     * A Composite containing the Name to be used by a DSP when presenting Artist details of the Resource to a Consumer.
     *
     * @param \DDEX\RDR_N\RDR_N_150\DisplayArtistNameWithDefaultType[] $displayArtistName
     * @return self
     */
    public function setDisplayArtistName(array $displayArtistName = null)
    {
        $this->displayArtistName = $displayArtistName;
        return $this;
    }

    /**
     * Adds as displayArtist
     *
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist
     */
    public function addToDisplayArtist(\DDEX\RDR_N\RDR_N_150\ArtistType $displayArtist)
    {
        $this->displayArtist[] = $displayArtist;
        return $this;
    }

    /**
     * isset displayArtist
     *
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDisplayArtist($index)
    {
        return isset($this->displayArtist[$index]);
    }

    /**
     * unset displayArtist
     *
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDisplayArtist($index)
    {
        unset($this->displayArtist[$index]);
    }

    /**
     * Gets as displayArtist
     *
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ArtistType[]
     */
    public function getDisplayArtist()
    {
        return $this->displayArtist;
    }

    /**
     * Sets a new displayArtist
     *
     * A Composite containing details of a DisplayArtist. A DisplayArtist may be described through Name, Identifier and Roles.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ArtistType[] $displayArtist
     * @return self
     */
    public function setDisplayArtist(array $displayArtist = null)
    {
        $this->displayArtist = $displayArtist;
        return $this;
    }

    /**
     * Adds as performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\PerformingContributorType $performingContributor
     */
    public function addToPerformingContributor(\DDEX\RDR_N\RDR_N_150\PerformingContributorType $performingContributor)
    {
        $this->performingContributor[] = $performingContributor;
        return $this;
    }

    /**
     * isset performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformingContributor($index)
    {
        return isset($this->performingContributor[$index]);
    }

    /**
     * unset performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformingContributor($index)
    {
        unset($this->performingContributor[$index]);
    }

    /**
     * Gets as performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @return \DDEX\RDR_N\RDR_N_150\PerformingContributorType[]
     */
    public function getPerformingContributor()
    {
        return $this->performingContributor;
    }

    /**
     * Sets a new performingContributor
     *
     * A Composite containing details of a performing Contributor to the Video, as defined in the International Treaties. While there is a semantic difference between a performing and a non-performing Contributor, some MLCs may classify a specific contribution as one while other MLCs may classify the same contribution as the other. Therefore, it is necessary to carry some of the attributes specific to performances (esp. the flags) on both composites while in theory they make no sense for non-performing contributions.
     *
     * @param \DDEX\RDR_N\RDR_N_150\PerformingContributorType[] $performingContributor
     * @return self
     */
    public function setPerformingContributor(array $performingContributor = null)
    {
        $this->performingContributor = $performingContributor;
        return $this;
    }

    /**
     * Adds as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\SimpleHostSoundCarrierType $hostSoundCarrier
     */
    public function addToHostSoundCarrier(\DDEX\RDR_N\RDR_N_150\SimpleHostSoundCarrierType $hostSoundCarrier)
    {
        $this->hostSoundCarrier[] = $hostSoundCarrier;
        return $this;
    }

    /**
     * isset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHostSoundCarrier($index)
    {
        return isset($this->hostSoundCarrier[$index]);
    }

    /**
     * unset hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHostSoundCarrier($index)
    {
        unset($this->hostSoundCarrier[$index]);
    }

    /**
     * Gets as hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @return \DDEX\RDR_N\RDR_N_150\SimpleHostSoundCarrierType[]
     */
    public function getHostSoundCarrier()
    {
        return $this->hostSoundCarrier;
    }

    /**
     * Sets a new hostSoundCarrier
     *
     * A Composite containing details of a HostSoundCarrier on which the Video appears (e.g., the CD on which it was originally released). This Composite exists in the Release Notification Message Suite Standard, to support the identification and matching of Video information.
     *
     * @param \DDEX\RDR_N\RDR_N_150\SimpleHostSoundCarrierType[] $hostSoundCarrier
     * @return self
     */
    public function setHostSoundCarrier(array $hostSoundCarrier = null)
    {
        $this->hostSoundCarrier = $hostSoundCarrier;
        return $this;
    }

    /**
     * Gets as weight
     *
     * An integer value that allows signaling to the sender of a claim how much the Video that is subject to the claim has been used. This is a value between 0 and 10, where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the request Message.
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * An integer value that allows signaling to the sender of a claim how much the Video that is subject to the claim has been used. This is a value between 0 and 10, where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the request Message.
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}


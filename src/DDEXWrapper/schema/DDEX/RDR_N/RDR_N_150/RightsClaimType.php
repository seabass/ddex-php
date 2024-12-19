<?php

namespace DDEX\RDR_N\RDR_N_150;

/**
 * Class representing RightsClaimType
 *
 * A Composite containing details of a RightsClaim.
 * XSD Type: RightsClaim
 */
class RightsClaimType
{
    /**
     * A Composite containing details of a SoundRecording.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ClaimedSoundRecordingType $claimedSoundRecording
     */
    private $claimedSoundRecording = null;

    /**
     * A Composite containing details of a Video.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ClaimedVideoType $claimedVideo
     */
    private $claimedVideo = null;

    /**
     * An Identifier of the Message in which the claim was communicated.
     *
     * @var string $messageId
     */
    private $messageId = null;

    /**
     * A registration Status of a Resource.
     *
     * @var string $registrationStatus
     */
    private $registrationStatus = null;

    /**
     * A Composite containing details of a RegistrationError.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ErrorType[] $registrationError
     */
    private $registrationError = [
        
    ];

    /**
     * A Status of a RightsClaim.
     *
     * @var string $claimStatus
     */
    private $claimStatus = null;

    /**
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @var \DDEX\RDR_N\RDR_N_150\ContributorClaimType[] $contributorClaim
     */
    private $contributorClaim = [
        
    ];

    /**
     * A Composite containing details of the RightsController for whom the sender of the status message has registered the claim.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RightsControllerType $rightsController
     */
    private $rightsController = null;

    /**
     * A Composite containing details of a Rights Conflict.
     *
     * @var \DDEX\RDR_N\RDR_N_150\RightsConflictType[] $rightsConflict
     */
    private $rightsConflict = [
        
    ];

    /**
     * An integer value that allows signaling to the sender of a claim how much the recording that is subject to the claim has been used. This is a value between 0 and 10 where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the status update message.
     *
     * @var int $weight
     */
    private $weight = null;

    /**
     * The DateTime when the claim was last updated (or when it was registered if it has not yet been updated) (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @var \DateTime $claimRegistrationDateTime
     */
    private $claimRegistrationDateTime = null;

    /**
     * Gets as claimedSoundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ClaimedSoundRecordingType
     */
    public function getClaimedSoundRecording()
    {
        return $this->claimedSoundRecording;
    }

    /**
     * Sets a new claimedSoundRecording
     *
     * A Composite containing details of a SoundRecording.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ClaimedSoundRecordingType $claimedSoundRecording
     * @return self
     */
    public function setClaimedSoundRecording(?\DDEX\RDR_N\RDR_N_150\ClaimedSoundRecordingType $claimedSoundRecording = null)
    {
        $this->claimedSoundRecording = $claimedSoundRecording;
        return $this;
    }

    /**
     * Gets as claimedVideo
     *
     * A Composite containing details of a Video.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ClaimedVideoType
     */
    public function getClaimedVideo()
    {
        return $this->claimedVideo;
    }

    /**
     * Sets a new claimedVideo
     *
     * A Composite containing details of a Video.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ClaimedVideoType $claimedVideo
     * @return self
     */
    public function setClaimedVideo(?\DDEX\RDR_N\RDR_N_150\ClaimedVideoType $claimedVideo = null)
    {
        $this->claimedVideo = $claimedVideo;
        return $this;
    }

    /**
     * Gets as messageId
     *
     * An Identifier of the Message in which the claim was communicated.
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Sets a new messageId
     *
     * An Identifier of the Message in which the claim was communicated.
     *
     * @param string $messageId
     * @return self
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * Gets as registrationStatus
     *
     * A registration Status of a Resource.
     *
     * @return string
     */
    public function getRegistrationStatus()
    {
        return $this->registrationStatus;
    }

    /**
     * Sets a new registrationStatus
     *
     * A registration Status of a Resource.
     *
     * @param string $registrationStatus
     * @return self
     */
    public function setRegistrationStatus($registrationStatus)
    {
        $this->registrationStatus = $registrationStatus;
        return $this;
    }

    /**
     * Adds as registrationError
     *
     * A Composite containing details of a RegistrationError.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ErrorType $registrationError
     */
    public function addToRegistrationError(\DDEX\RDR_N\RDR_N_150\ErrorType $registrationError)
    {
        $this->registrationError[] = $registrationError;
        return $this;
    }

    /**
     * isset registrationError
     *
     * A Composite containing details of a RegistrationError.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationError($index)
    {
        return isset($this->registrationError[$index]);
    }

    /**
     * unset registrationError
     *
     * A Composite containing details of a RegistrationError.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationError($index)
    {
        unset($this->registrationError[$index]);
    }

    /**
     * Gets as registrationError
     *
     * A Composite containing details of a RegistrationError.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ErrorType[]
     */
    public function getRegistrationError()
    {
        return $this->registrationError;
    }

    /**
     * Sets a new registrationError
     *
     * A Composite containing details of a RegistrationError.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ErrorType[] $registrationError
     * @return self
     */
    public function setRegistrationError(array $registrationError = null)
    {
        $this->registrationError = $registrationError;
        return $this;
    }

    /**
     * Gets as claimStatus
     *
     * A Status of a RightsClaim.
     *
     * @return string
     */
    public function getClaimStatus()
    {
        return $this->claimStatus;
    }

    /**
     * Sets a new claimStatus
     *
     * A Status of a RightsClaim.
     *
     * @param string $claimStatus
     * @return self
     */
    public function setClaimStatus($claimStatus)
    {
        $this->claimStatus = $claimStatus;
        return $this;
    }

    /**
     * Adds as contributorClaim
     *
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\ContributorClaimType $contributorClaim
     */
    public function addToContributorClaim(\DDEX\RDR_N\RDR_N_150\ContributorClaimType $contributorClaim)
    {
        $this->contributorClaim[] = $contributorClaim;
        return $this;
    }

    /**
     * isset contributorClaim
     *
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributorClaim($index)
    {
        return isset($this->contributorClaim[$index]);
    }

    /**
     * unset contributorClaim
     *
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributorClaim($index)
    {
        unset($this->contributorClaim[$index]);
    }

    /**
     * Gets as contributorClaim
     *
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @return \DDEX\RDR_N\RDR_N_150\ContributorClaimType[]
     */
    public function getContributorClaim()
    {
        return $this->contributorClaim;
    }

    /**
     * Sets a new contributorClaim
     *
     * A Status of a RightsClaim at a Contributor level to allow reporting whether a claim of a performance has been accepted or not.
     *
     * @param \DDEX\RDR_N\RDR_N_150\ContributorClaimType[] $contributorClaim
     * @return self
     */
    public function setContributorClaim(array $contributorClaim = null)
    {
        $this->contributorClaim = $contributorClaim;
        return $this;
    }

    /**
     * Gets as rightsController
     *
     * A Composite containing details of the RightsController for whom the sender of the status message has registered the claim.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RightsControllerType
     */
    public function getRightsController()
    {
        return $this->rightsController;
    }

    /**
     * Sets a new rightsController
     *
     * A Composite containing details of the RightsController for whom the sender of the status message has registered the claim.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RightsControllerType $rightsController
     * @return self
     */
    public function setRightsController(?\DDEX\RDR_N\RDR_N_150\RightsControllerType $rightsController = null)
    {
        $this->rightsController = $rightsController;
        return $this;
    }

    /**
     * Adds as rightsConflict
     *
     * A Composite containing details of a Rights Conflict.
     *
     * @return self
     * @param \DDEX\RDR_N\RDR_N_150\RightsConflictType $rightsConflict
     */
    public function addToRightsConflict(\DDEX\RDR_N\RDR_N_150\RightsConflictType $rightsConflict)
    {
        $this->rightsConflict[] = $rightsConflict;
        return $this;
    }

    /**
     * isset rightsConflict
     *
     * A Composite containing details of a Rights Conflict.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRightsConflict($index)
    {
        return isset($this->rightsConflict[$index]);
    }

    /**
     * unset rightsConflict
     *
     * A Composite containing details of a Rights Conflict.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRightsConflict($index)
    {
        unset($this->rightsConflict[$index]);
    }

    /**
     * Gets as rightsConflict
     *
     * A Composite containing details of a Rights Conflict.
     *
     * @return \DDEX\RDR_N\RDR_N_150\RightsConflictType[]
     */
    public function getRightsConflict()
    {
        return $this->rightsConflict;
    }

    /**
     * Sets a new rightsConflict
     *
     * A Composite containing details of a Rights Conflict.
     *
     * @param \DDEX\RDR_N\RDR_N_150\RightsConflictType[] $rightsConflict
     * @return self
     */
    public function setRightsConflict(array $rightsConflict = null)
    {
        $this->rightsConflict = $rightsConflict;
        return $this;
    }

    /**
     * Gets as weight
     *
     * An integer value that allows signaling to the sender of a claim how much the recording that is subject to the claim has been used. This is a value between 0 and 10 where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the status update message.
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
     * An integer value that allows signaling to the sender of a claim how much the recording that is subject to the claim has been used. This is a value between 0 and 10 where 10 means 'a lot' and 0 means 'nothing' and 1 means 'just a little' by the judgement of the sender of the status update message.
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as claimRegistrationDateTime
     *
     * The DateTime when the claim was last updated (or when it was registered if it has not yet been updated) (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @return \DateTime
     */
    public function getClaimRegistrationDateTime()
    {
        return $this->claimRegistrationDateTime;
    }

    /**
     * Sets a new claimRegistrationDateTime
     *
     * The DateTime when the claim was last updated (or when it was registered if it has not yet been updated) (the only allowed format is ISO 8601: YYYY-MM-DDThh:mm:ssTZD).
     *
     * @param \DateTime $claimRegistrationDateTime
     * @return self
     */
    public function setClaimRegistrationDateTime(?\DateTime $claimRegistrationDateTime = null)
    {
        $this->claimRegistrationDateTime = $claimRegistrationDateTime;
        return $this;
    }
}


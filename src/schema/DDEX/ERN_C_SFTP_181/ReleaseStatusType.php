<?php

namespace DDEX\ERN\ERN_C_SFTP_181;

/**
 * Class representing ReleaseStatusType
 *
 * A Composite containing details of a Release status.
 * XSD Type: ReleaseStatus
 */
class ReleaseStatusType
{
    /**
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\ReleaseIdType $releaseId
     */
    private $releaseId = null;

    /**
     * A Composite containing details of the status of the Release.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\SupplyChainStatusType $releaseStatus
     */
    private $releaseStatus = null;

    /**
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @var string $errorText
     */
    private $errorText = null;

    /**
     * A Composite containing details of the Type of action that is proposed by the MessageSender.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\ProposedActionTypeType $proposedActionType
     */
    private $proposedActionType = null;

    /**
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @var bool $manualCheckRequired
     */
    private $manualCheckRequired = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\ProprietaryIdMappingType[] $proprietaryIdMapping
     */
    private $proprietaryIdMapping = [
        
    ];

    /**
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\ResourceIdType[] $affectedResource
     */
    private $affectedResource = [
        
    ];

    /**
     * A Composite containing details of an acknowledgement.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\AcknowledgementType[] $acknowledgement
     */
    private $acknowledgement = [
        
    ];

    /**
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\PartyDescriptorType[] $claimant
     */
    private $claimant = [
        
    ];

    /**
     * Gets as releaseId
     *
     * A Composite containing details of ReleaseIds. If available, a GRid has to be used. If the Release is an abstraction of a complete PhysicalProduct (such as a CD Album), the ICPN of the PhysicalProduct may be used instead.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\ReleaseIdType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\ReleaseIdType $releaseId
     * @return self
     */
    public function setReleaseId(\DDEX\ERN\ERN_C_SFTP_181\ReleaseIdType $releaseId)
    {
        $this->releaseId = $releaseId;
        return $this;
    }

    /**
     * Gets as releaseStatus
     *
     * A Composite containing details of the status of the Release.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\SupplyChainStatusType
     */
    public function getReleaseStatus()
    {
        return $this->releaseStatus;
    }

    /**
     * Sets a new releaseStatus
     *
     * A Composite containing details of the status of the Release.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\SupplyChainStatusType $releaseStatus
     * @return self
     */
    public function setReleaseStatus(\DDEX\ERN\ERN_C_SFTP_181\SupplyChainStatusType $releaseStatus)
    {
        $this->releaseStatus = $releaseStatus;
        return $this;
    }

    /**
     * Gets as errorText
     *
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @return string
     */
    public function getErrorText()
    {
        return $this->errorText;
    }

    /**
     * Sets a new errorText
     *
     * A Comment about the Message. This is solely to aid the MessageRecipient of the Message to resolve the issues complained about.
     *
     * @param string $errorText
     * @return self
     */
    public function setErrorText($errorText)
    {
        $this->errorText = $errorText;
        return $this;
    }

    /**
     * Gets as proposedActionType
     *
     * A Composite containing details of the Type of action that is proposed by the MessageSender.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\ProposedActionTypeType
     */
    public function getProposedActionType()
    {
        return $this->proposedActionType;
    }

    /**
     * Sets a new proposedActionType
     *
     * A Composite containing details of the Type of action that is proposed by the MessageSender.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\ProposedActionTypeType $proposedActionType
     * @return self
     */
    public function setProposedActionType(?\DDEX\ERN\ERN_C_SFTP_181\ProposedActionTypeType $proposedActionType = null)
    {
        $this->proposedActionType = $proposedActionType;
        return $this;
    }

    /**
     * Gets as manualCheckRequired
     *
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @return bool
     */
    public function getManualCheckRequired()
    {
        return $this->manualCheckRequired;
    }

    /**
     * Sets a new manualCheckRequired
     *
     * A Flag indicating whether the sender just needs to resend the same material again (=false) or whether someone needs to look at the material before the re-delivery is done (=true).
     *
     * @param bool $manualCheckRequired
     * @return self
     */
    public function setManualCheckRequired($manualCheckRequired)
    {
        $this->manualCheckRequired = $manualCheckRequired;
        return $this;
    }

    /**
     * Adds as proprietaryIdMapping
     *
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_181\ProprietaryIdMappingType $proprietaryIdMapping
     */
    public function addToProprietaryIdMapping(\DDEX\ERN\ERN_C_SFTP_181\ProprietaryIdMappingType $proprietaryIdMapping)
    {
        $this->proprietaryIdMapping[] = $proprietaryIdMapping;
        return $this;
    }

    /**
     * isset proprietaryIdMapping
     *
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryIdMapping($index)
    {
        return isset($this->proprietaryIdMapping[$index]);
    }

    /**
     * unset proprietaryIdMapping
     *
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryIdMapping($index)
    {
        unset($this->proprietaryIdMapping[$index]);
    }

    /**
     * Gets as proprietaryIdMapping
     *
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\ProprietaryIdMappingType[]
     */
    public function getProprietaryIdMapping()
    {
        return $this->proprietaryIdMapping;
    }

    /**
     * Sets a new proprietaryIdMapping
     *
     * A Composite containing details of a ProprietaryIdentifier mapping.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\ProprietaryIdMappingType[] $proprietaryIdMapping
     * @return self
     */
    public function setProprietaryIdMapping(array $proprietaryIdMapping = null)
    {
        $this->proprietaryIdMapping = $proprietaryIdMapping;
        return $this;
    }

    /**
     * Adds as affectedResource
     *
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_181\ResourceIdType $affectedResource
     */
    public function addToAffectedResource(\DDEX\ERN\ERN_C_SFTP_181\ResourceIdType $affectedResource)
    {
        $this->affectedResource[] = $affectedResource;
        return $this;
    }

    /**
     * isset affectedResource
     *
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAffectedResource($index)
    {
        return isset($this->affectedResource[$index]);
    }

    /**
     * unset affectedResource
     *
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAffectedResource($index)
    {
        unset($this->affectedResource[$index]);
    }

    /**
     * Gets as affectedResource
     *
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\ResourceIdType[]
     */
    public function getAffectedResource()
    {
        return $this->affectedResource;
    }

    /**
     * Sets a new affectedResource
     *
     * A Composite containing details of ResourceIds for the Resources that are affected.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\ResourceIdType[] $affectedResource
     * @return self
     */
    public function setAffectedResource(array $affectedResource = null)
    {
        $this->affectedResource = $affectedResource;
        return $this;
    }

    /**
     * Adds as acknowledgement
     *
     * A Composite containing details of an acknowledgement.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_181\AcknowledgementType $acknowledgement
     */
    public function addToAcknowledgement(\DDEX\ERN\ERN_C_SFTP_181\AcknowledgementType $acknowledgement)
    {
        $this->acknowledgement[] = $acknowledgement;
        return $this;
    }

    /**
     * isset acknowledgement
     *
     * A Composite containing details of an acknowledgement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcknowledgement($index)
    {
        return isset($this->acknowledgement[$index]);
    }

    /**
     * unset acknowledgement
     *
     * A Composite containing details of an acknowledgement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcknowledgement($index)
    {
        unset($this->acknowledgement[$index]);
    }

    /**
     * Gets as acknowledgement
     *
     * A Composite containing details of an acknowledgement.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\AcknowledgementType[]
     */
    public function getAcknowledgement()
    {
        return $this->acknowledgement;
    }

    /**
     * Sets a new acknowledgement
     *
     * A Composite containing details of an acknowledgement.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\AcknowledgementType[] $acknowledgement
     * @return self
     */
    public function setAcknowledgement(array $acknowledgement = null)
    {
        $this->acknowledgement = $acknowledgement;
        return $this;
    }

    /**
     * Adds as claimant
     *
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @return self
     * @param \DDEX\ERN\ERN_C_SFTP_181\PartyDescriptorType $claimant
     */
    public function addToClaimant(\DDEX\ERN\ERN_C_SFTP_181\PartyDescriptorType $claimant)
    {
        $this->claimant[] = $claimant;
        return $this;
    }

    /**
     * isset claimant
     *
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimant($index)
    {
        return isset($this->claimant[$index]);
    }

    /**
     * unset claimant
     *
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimant($index)
    {
        unset($this->claimant[$index]);
    }

    /**
     * Gets as claimant
     *
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\PartyDescriptorType[]
     */
    public function getClaimant()
    {
        return $this->claimant;
    }

    /**
     * Sets a new claimant
     *
     * A Composite containing details of a Party that has also claimed the same SoundRecording for the same territory and time.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\PartyDescriptorType[] $claimant
     * @return self
     */
    public function setClaimant(array $claimant = null)
    {
        $this->claimant = $claimant;
        return $this;
    }
}


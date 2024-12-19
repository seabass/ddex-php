<?php

namespace DDEX\RDR_N\RDR_N_150\DeclarationOfSoundRecordingRightsClaimMessage;

/**
 * Class representing DeclarationOfSoundRecordingRightsClaimMessageAnonymousPHPType
 */
class DeclarationOfSoundRecordingRightsClaimMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageProfile for the DeclarationOfSoundRecordingRightsClaimMessage that defines if the message contains a statement of the rights that a RightsController controls or an explicit mandate. Absence of this flag indicates that it is a RightsStatement.
     *
     * @var string $rightsStatementProfile
     */
    private $rightsStatementProfile = null;

    /**
     * The MessageHeader for the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @var \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     */
    private $messageNotificationPeriod = null;

    /**
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @var \DDEX\RDR_N\RDR_N_150\ResourceListType $resourceList
     */
    private $resourceList = null;

    /**
     * Gets as avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @return string
     */
    public function getAvsVersionId()
    {
        return $this->avsVersionId;
    }

    /**
     * Sets a new avsVersionId
     *
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @param string $avsVersionId
     * @return self
     */
    public function setAvsVersionId($avsVersionId)
    {
        $this->avsVersionId = $avsVersionId;
        return $this;
    }

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as rightsStatementProfile
     *
     * The MessageProfile for the DeclarationOfSoundRecordingRightsClaimMessage that defines if the message contains a statement of the rights that a RightsController controls or an explicit mandate. Absence of this flag indicates that it is a RightsStatement.
     *
     * @return string
     */
    public function getRightsStatementProfile()
    {
        return $this->rightsStatementProfile;
    }

    /**
     * Sets a new rightsStatementProfile
     *
     * The MessageProfile for the DeclarationOfSoundRecordingRightsClaimMessage that defines if the message contains a statement of the rights that a RightsController controls or an explicit mandate. Absence of this flag indicates that it is a RightsStatement.
     *
     * @param string $rightsStatementProfile
     * @return self
     */
    public function setRightsStatementProfile($rightsStatementProfile)
    {
        $this->rightsStatementProfile = $rightsStatementProfile;
        return $this;
    }

    /**
     * Gets as messageHeader
     *
     * The MessageHeader for the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the DeclarationOfSoundRecordingRightsClaimMessage.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\RDR_N\RDR_N_150\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @return \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType
     */
    public function getMessageNotificationPeriod()
    {
        return $this->messageNotificationPeriod;
    }

    /**
     * Sets a new messageNotificationPeriod
     *
     * A Composite containing details of a reporting Period covered by the Message. It must contain at least one out of StartDate or EndDate. The StartDate must be earlier than the EndDate if both are provided.
     *
     * @param \DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod
     * @return self
     */
    public function setMessageNotificationPeriod(?\DDEX\RDR_N\RDR_N_150\MessageNotificationPeriodType $messageNotificationPeriod = null)
    {
        $this->messageNotificationPeriod = $messageNotificationPeriod;
        return $this;
    }

    /**
     * Gets as resourceList
     *
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @return \DDEX\RDR_N\RDR_N_150\ResourceListType
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }

    /**
     * Sets a new resourceList
     *
     * A Composite containing details of one or more Resources.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-releaseresourcework-metadata/sequencing-resources
     *
     * @param \DDEX\RDR_N\RDR_N_150\ResourceListType $resourceList
     * @return self
     */
    public function setResourceList(\DDEX\RDR_N\RDR_N_150\ResourceListType $resourceList)
    {
        $this->resourceList = $resourceList;
        return $this;
    }
}


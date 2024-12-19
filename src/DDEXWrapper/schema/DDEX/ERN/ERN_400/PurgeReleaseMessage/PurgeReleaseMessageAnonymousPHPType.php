<?php

namespace DDEX\ERN\ERN_400\PurgeReleaseMessage;

/**
 * Class representing PurgeReleaseMessageAnonymousPHPType
 */
class PurgeReleaseMessageAnonymousPHPType
{
    /**
     * The Language and script for the Elements of this Message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @var \DDEX\ERN\ERN_400\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @var \DDEX\ERN\ERN_400\PurgedReleaseType $purgedRelease
     */
    private $purgedRelease = null;

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
     * Gets as messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @return \DDEX\ERN\ERN_400\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the PurgeReleaseMessage.
     *
     * @param \DDEX\ERN\ERN_400\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\ERN\ERN_400\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @return \DDEX\ERN\ERN_400\PurgedReleaseType
     */
    public function getPurgedRelease()
    {
        return $this->purgedRelease;
    }

    /**
     * Sets a new purgedRelease
     *
     * A Composite containing details of a DDEX Release to be purged.
     *
     * @param \DDEX\ERN\ERN_400\PurgedReleaseType $purgedRelease
     * @return self
     */
    public function setPurgedRelease(\DDEX\ERN\ERN_400\PurgedReleaseType $purgedRelease)
    {
        $this->purgedRelease = $purgedRelease;
        return $this;
    }
}


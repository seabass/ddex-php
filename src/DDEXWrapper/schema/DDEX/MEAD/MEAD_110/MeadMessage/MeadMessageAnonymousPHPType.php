<?php

namespace DDEX\MEAD\MEAD_110\MeadMessage;

/**
 * Class representing MeadMessageAnonymousPHPType
 */
class MeadMessageAnonymousPHPType
{
    /**
     * The Identifier of the Version of the AllowedValueSets used for the Message. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $avsVersionId
     */
    private $avsVersionId = null;

    /**
     * The Language and script for the Elements of this message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The MessageHeader for the MeadMessage.
     *
     * @var \DDEX\MEAD\MEAD_110\MessageHeaderType $messageHeader
     */
    private $messageHeader = null;

    /**
     * An Identifier of the subscription.
     *
     * @var string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceType[] $metadataSourceList
     */
    private $metadataSourceList = null;

    /**
     * A Composite containing detailed information about one or more Works
     *
     * @var \DDEX\MEAD\MEAD_110\WorkInformationType[] $workInformationList
     */
    private $workInformationList = null;

    /**
     * A Composite containing detailed information about one or more Resources.
     *
     * @var \DDEX\MEAD\MEAD_110\ResourceInformationType[] $resourceInformationList
     */
    private $resourceInformationList = null;

    /**
     * A Composite containing detailed information about one or more Releases.
     *
     * @var \DDEX\MEAD\MEAD_110\ReleaseInformationType[] $releaseInformationList
     */
    private $releaseInformationList = null;

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
     * The Language and script for the Elements of this message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of this message as defined in IETF RfC 5646. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The MessageHeader for the MeadMessage.
     *
     * @return \DDEX\MEAD\MEAD_110\MessageHeaderType
     */
    public function getMessageHeader()
    {
        return $this->messageHeader;
    }

    /**
     * Sets a new messageHeader
     *
     * The MessageHeader for the MeadMessage.
     *
     * @param \DDEX\MEAD\MEAD_110\MessageHeaderType $messageHeader
     * @return self
     */
    public function setMessageHeader(\DDEX\MEAD\MEAD_110\MessageHeaderType $messageHeader)
    {
        $this->messageHeader = $messageHeader;
        return $this;
    }

    /**
     * Gets as subscriptionId
     *
     * An Identifier of the subscription.
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Sets a new subscriptionId
     *
     * An Identifier of the subscription.
     *
     * @param string $subscriptionId
     * @return self
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * Adds as metadataSource
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceType $metadataSource
     */
    public function addToMetadataSourceList(\DDEX\MEAD\MEAD_110\MetadataSourceType $metadataSource)
    {
        $this->metadataSourceList[] = $metadataSource;
        return $this;
    }

    /**
     * isset metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceList($index)
    {
        return isset($this->metadataSourceList[$index]);
    }

    /**
     * unset metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceList($index)
    {
        unset($this->metadataSourceList[$index]);
    }

    /**
     * Gets as metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceType[]
     */
    public function getMetadataSourceList()
    {
        return $this->metadataSourceList;
    }

    /**
     * Sets a new metadataSourceList
     *
     * A Composite containing details of one or more Parties that created the metadata.
     *
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceType[] $metadataSourceList
     * @return self
     */
    public function setMetadataSourceList(array $metadataSourceList = null)
    {
        $this->metadataSourceList = $metadataSourceList;
        return $this;
    }

    /**
     * Adds as workInformation
     *
     * A Composite containing detailed information about one or more Works
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\WorkInformationType $workInformation
     */
    public function addToWorkInformationList(\DDEX\MEAD\MEAD_110\WorkInformationType $workInformation)
    {
        $this->workInformationList[] = $workInformation;
        return $this;
    }

    /**
     * isset workInformationList
     *
     * A Composite containing detailed information about one or more Works
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWorkInformationList($index)
    {
        return isset($this->workInformationList[$index]);
    }

    /**
     * unset workInformationList
     *
     * A Composite containing detailed information about one or more Works
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWorkInformationList($index)
    {
        unset($this->workInformationList[$index]);
    }

    /**
     * Gets as workInformationList
     *
     * A Composite containing detailed information about one or more Works
     *
     * @return \DDEX\MEAD\MEAD_110\WorkInformationType[]
     */
    public function getWorkInformationList()
    {
        return $this->workInformationList;
    }

    /**
     * Sets a new workInformationList
     *
     * A Composite containing detailed information about one or more Works
     *
     * @param \DDEX\MEAD\MEAD_110\WorkInformationType[] $workInformationList
     * @return self
     */
    public function setWorkInformationList(array $workInformationList = null)
    {
        $this->workInformationList = $workInformationList;
        return $this;
    }

    /**
     * Adds as resourceInformation
     *
     * A Composite containing detailed information about one or more Resources.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ResourceInformationType $resourceInformation
     */
    public function addToResourceInformationList(\DDEX\MEAD\MEAD_110\ResourceInformationType $resourceInformation)
    {
        $this->resourceInformationList[] = $resourceInformation;
        return $this;
    }

    /**
     * isset resourceInformationList
     *
     * A Composite containing detailed information about one or more Resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceInformationList($index)
    {
        return isset($this->resourceInformationList[$index]);
    }

    /**
     * unset resourceInformationList
     *
     * A Composite containing detailed information about one or more Resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceInformationList($index)
    {
        unset($this->resourceInformationList[$index]);
    }

    /**
     * Gets as resourceInformationList
     *
     * A Composite containing detailed information about one or more Resources.
     *
     * @return \DDEX\MEAD\MEAD_110\ResourceInformationType[]
     */
    public function getResourceInformationList()
    {
        return $this->resourceInformationList;
    }

    /**
     * Sets a new resourceInformationList
     *
     * A Composite containing detailed information about one or more Resources.
     *
     * @param \DDEX\MEAD\MEAD_110\ResourceInformationType[] $resourceInformationList
     * @return self
     */
    public function setResourceInformationList(array $resourceInformationList = null)
    {
        $this->resourceInformationList = $resourceInformationList;
        return $this;
    }

    /**
     * Adds as releaseInformation
     *
     * A Composite containing detailed information about one or more Releases.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\ReleaseInformationType $releaseInformation
     */
    public function addToReleaseInformationList(\DDEX\MEAD\MEAD_110\ReleaseInformationType $releaseInformation)
    {
        $this->releaseInformationList[] = $releaseInformation;
        return $this;
    }

    /**
     * isset releaseInformationList
     *
     * A Composite containing detailed information about one or more Releases.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReleaseInformationList($index)
    {
        return isset($this->releaseInformationList[$index]);
    }

    /**
     * unset releaseInformationList
     *
     * A Composite containing detailed information about one or more Releases.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReleaseInformationList($index)
    {
        unset($this->releaseInformationList[$index]);
    }

    /**
     * Gets as releaseInformationList
     *
     * A Composite containing detailed information about one or more Releases.
     *
     * @return \DDEX\MEAD\MEAD_110\ReleaseInformationType[]
     */
    public function getReleaseInformationList()
    {
        return $this->releaseInformationList;
    }

    /**
     * Sets a new releaseInformationList
     *
     * A Composite containing detailed information about one or more Releases.
     *
     * @param \DDEX\MEAD\MEAD_110\ReleaseInformationType[] $releaseInformationList
     * @return self
     */
    public function setReleaseInformationList(array $releaseInformationList = null)
    {
        $this->releaseInformationList = $releaseInformationList;
        return $this;
    }
}


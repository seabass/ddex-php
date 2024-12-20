<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing MetadataSourceType
 *
 * A Composite containing details of a Party that created metadata.
 * XSD Type: MetadataSource
 */
class MetadataSourceType
{
    /**
     * The Identifier (specific to the Message) of the metadata source. This is a LocalMetadataSourceAnchor starting with the letter U.
     *
     * @var string $sourceReference
     */
    private $sourceReference = null;

    /**
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\MEAD\MEAD_110\DetailedPartyIdType[] $partyId
     */
    private $partyId = [
        
    ];

    /**
     * A Composite containing details of the PartyName(s).
     *
     * @var \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * The Type of the metadata source.
     *
     * @var \DDEX\MEAD\MEAD_110\MetadataSourceTypeType $metadataSourceType
     */
    private $metadataSourceType = null;

    /**
     * Gets as sourceReference
     *
     * The Identifier (specific to the Message) of the metadata source. This is a LocalMetadataSourceAnchor starting with the letter U.
     *
     * @return string
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

    /**
     * Sets a new sourceReference
     *
     * The Identifier (specific to the Message) of the metadata source. This is a LocalMetadataSourceAnchor starting with the letter U.
     *
     * @param string $sourceReference
     * @return self
     */
    public function setSourceReference($sourceReference)
    {
        $this->sourceReference = $sourceReference;
        return $this;
    }

    /**
     * Adds as partyId
     *
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\DetailedPartyIdType $partyId
     */
    public function addToPartyId(\DDEX\MEAD\MEAD_110\DetailedPartyIdType $partyId)
    {
        $this->partyId[] = $partyId;
        return $this;
    }

    /**
     * isset partyId
     *
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyId($index)
    {
        return isset($this->partyId[$index]);
    }

    /**
     * unset partyId
     *
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyId($index)
    {
        unset($this->partyId[$index]);
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\MEAD\MEAD_110\DetailedPartyIdType[]
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the metadata source. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\MEAD\MEAD_110\DetailedPartyIdType[] $partyId
     * @return self
     */
    public function setPartyId(array $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return self
     * @param \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType $partyName
     */
    public function addToPartyName(\DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @return \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * A Composite containing details of the PartyName(s).
     *
     * @param \DDEX\MEAD\MEAD_110\PartyNameWithPronunciationType[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName = null)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as metadataSourceType
     *
     * The Type of the metadata source.
     *
     * @return \DDEX\MEAD\MEAD_110\MetadataSourceTypeType
     */
    public function getMetadataSourceType()
    {
        return $this->metadataSourceType;
    }

    /**
     * Sets a new metadataSourceType
     *
     * The Type of the metadata source.
     *
     * @param \DDEX\MEAD\MEAD_110\MetadataSourceTypeType $metadataSourceType
     * @return self
     */
    public function setMetadataSourceType(\DDEX\MEAD\MEAD_110\MetadataSourceTypeType $metadataSourceType)
    {
        $this->metadataSourceType = $metadataSourceType;
        return $this;
    }
}


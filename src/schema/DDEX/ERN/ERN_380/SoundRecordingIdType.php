<?php

namespace DDEX\ERN\ERN_380;

/**
 * Class representing SoundRecordingIdType
 *
 * A Composite containing details of SoundRecordingIds.
 * XSD Type: SoundRecordingId
 */
class SoundRecordingIdType
{
    /**
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @var bool $isReplaced
     */
    private $isReplaced = null;

    /**
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the SoundRecording. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
     *
     * @var string $iSRC
     */
    private $iSRC = null;

    /**
     * A Composite containing details of the CatalogNumber of the SoundRecording.
     *
     * @var \DDEX\ERN\ERN_380\CatalogNumberType $catalogNumber
     */
    private $catalogNumber = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @var \DDEX\ERN\ERN_380\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @return bool
     */
    public function getIsReplaced()
    {
        return $this->isReplaced;
    }

    /**
     * Sets a new isReplaced
     *
     * The Flag indicating whether this Identifier is old and has been replaced by a new one (=true) or not (=false). The Flag may only be set to True when the new Identifier is also provided. If the Flag is not set, this Identifier is deemed to be the current one.
     *
     * @param bool $isReplaced
     * @return self
     */
    public function setIsReplaced($isReplaced)
    {
        $this->isReplaced = $isReplaced;
        return $this;
    }

    /**
     * Gets as iSRC
     *
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the SoundRecording. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
     *
     * @return string
     */
    public function getISRC()
    {
        return $this->iSRC;
    }

    /**
     * Sets a new iSRC
     *
     * The ISRC (International Standard Recording Code as defined in ISO 3901) for the SoundRecording. An ISRC comprises four parts: two characters, followed by three alphanumeric characters, then two digits and five digits. DDEX will enforce the syntax [a-zA-Z]{2}[a-zA-Z0-9]{3}[0-9]{7} using XML Schema in the future.
     *
     * @param string $iSRC
     * @return self
     */
    public function setISRC($iSRC)
    {
        $this->iSRC = $iSRC;
        return $this;
    }

    /**
     * Gets as catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the SoundRecording.
     *
     * @return \DDEX\ERN\ERN_380\CatalogNumberType
     */
    public function getCatalogNumber()
    {
        return $this->catalogNumber;
    }

    /**
     * Sets a new catalogNumber
     *
     * A Composite containing details of the CatalogNumber of the SoundRecording.
     *
     * @param \DDEX\ERN\ERN_380\CatalogNumberType $catalogNumber
     * @return self
     */
    public function setCatalogNumber(?\DDEX\ERN\ERN_380\CatalogNumberType $catalogNumber = null)
    {
        $this->catalogNumber = $catalogNumber;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @return self
     * @param \DDEX\ERN\ERN_380\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\ERN\ERN_380\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @return \DDEX\ERN\ERN_380\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the SoundRecording (usually one per society involved in the messaging).
     *
     * @param \DDEX\ERN\ERN_380\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


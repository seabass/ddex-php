<?php

namespace DDEX\RIN\RIN10M;

/**
 * Class representing PostalAddressType
 *
 * A Composite containing details of a PostalAddress.
 * XSD Type: PostalAddress
 */
class PostalAddressType
{
    /**
     * The number indicating the order of the PostalAddress in a group of PostalAddresses. This is represented in an XML schema as an XML Attribute.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A text line of the PostalAddress.
     *
     * @var string[] $postalAddressLine
     */
    private $postalAddressLine = [
        
    ];

    /**
     * The name of the city in the PostalAddress.
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * The name of a district in the PostalAddress.
     *
     * @var string[] $districtName
     */
    private $districtName = [
        
    ];

    /**
     * A PostCode or zip code.
     *
     * @var string $postCode
     */
    private $postCode = null;

    /**
     * The Territory of the PostalAddress. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var \DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryCode
     */
    private $territoryCode = null;

    /**
     * Gets as sequenceNumber
     *
     * The number indicating the order of the PostalAddress in a group of PostalAddresses. This is represented in an XML schema as an XML Attribute.
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
     * The number indicating the order of the PostalAddress in a group of PostalAddresses. This is represented in an XML schema as an XML Attribute.
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
     * Adds as postalAddressLine
     *
     * A text line of the PostalAddress.
     *
     * @return self
     * @param string $postalAddressLine
     */
    public function addToPostalAddressLine($postalAddressLine)
    {
        $this->postalAddressLine[] = $postalAddressLine;
        return $this;
    }

    /**
     * isset postalAddressLine
     *
     * A text line of the PostalAddress.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPostalAddressLine($index)
    {
        return isset($this->postalAddressLine[$index]);
    }

    /**
     * unset postalAddressLine
     *
     * A text line of the PostalAddress.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPostalAddressLine($index)
    {
        unset($this->postalAddressLine[$index]);
    }

    /**
     * Gets as postalAddressLine
     *
     * A text line of the PostalAddress.
     *
     * @return string[]
     */
    public function getPostalAddressLine()
    {
        return $this->postalAddressLine;
    }

    /**
     * Sets a new postalAddressLine
     *
     * A text line of the PostalAddress.
     *
     * @param string[] $postalAddressLine
     * @return self
     */
    public function setPostalAddressLine(array $postalAddressLine)
    {
        $this->postalAddressLine = $postalAddressLine;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * The name of the city in the PostalAddress.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * The name of the city in the PostalAddress.
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Adds as districtName
     *
     * The name of a district in the PostalAddress.
     *
     * @return self
     * @param string $districtName
     */
    public function addToDistrictName($districtName)
    {
        $this->districtName[] = $districtName;
        return $this;
    }

    /**
     * isset districtName
     *
     * The name of a district in the PostalAddress.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistrictName($index)
    {
        return isset($this->districtName[$index]);
    }

    /**
     * unset districtName
     *
     * The name of a district in the PostalAddress.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistrictName($index)
    {
        unset($this->districtName[$index]);
    }

    /**
     * Gets as districtName
     *
     * The name of a district in the PostalAddress.
     *
     * @return string[]
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * Sets a new districtName
     *
     * The name of a district in the PostalAddress.
     *
     * @param string[] $districtName
     * @return self
     */
    public function setDistrictName(array $districtName = null)
    {
        $this->districtName = $districtName;
        return $this;
    }

    /**
     * Gets as postCode
     *
     * A PostCode or zip code.
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Sets a new postCode
     *
     * A PostCode or zip code.
     *
     * @param string $postCode
     * @return self
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * Gets as territoryCode
     *
     * The Territory of the PostalAddress. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return \DDEX\RIN\RIN10M\AllTerritoryCodeType
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * The Territory of the PostalAddress. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param \DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryCode
     * @return self
     */
    public function setTerritoryCode(?\DDEX\RIN\RIN10M\AllTerritoryCodeType $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }
}


<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing NameIdType
 *
 * A Composite containing details of an Identifier for a Name.
 * XSD Type: NameId
 */
class NameIdType
{
    /**
     * The Flag indicating whether this Composite provides a deprecated values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDeprecated
     */
    private $isDeprecated = null;

    /**
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @var string $iSNI
     */
    private $iSNI = null;

    /**
     * An Interested Party Identifier, a CISAC standard Identifier. An IpiNameNumber comprises 11 digits.
     *
     * @var string $ipiNameNumber
     */
    private $ipiNameNumber = null;

    /**
     * An International Performer Number, an IPDA Identifier.
     *
     * @var string $iPN
     */
    private $iPN = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @var \DDEX\PIE\PIE_100\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Gets as isDeprecated
     *
     * The Flag indicating whether this Composite provides a deprecated values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDeprecated()
    {
        return $this->isDeprecated;
    }

    /**
     * Sets a new isDeprecated
     *
     * The Flag indicating whether this Composite provides a deprecated values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDeprecated
     * @return self
     */
    public function setIsDeprecated($isDeprecated)
    {
        $this->isDeprecated = $isDeprecated;
        return $this;
    }

    /**
     * Gets as iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @return string
     */
    public function getISNI()
    {
        return $this->iSNI;
    }

    /**
     * Sets a new iSNI
     *
     * An International Standard Name Identifier, the ISO 27729 Standard Identifier for names. DDEX will enforce the syntax [0-9]{15}[X0-9] using XML Schema in the future.
     *
     * @param string $iSNI
     * @return self
     */
    public function setISNI($iSNI)
    {
        $this->iSNI = $iSNI;
        return $this;
    }

    /**
     * Gets as ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier. An IpiNameNumber comprises 11 digits.
     *
     * @return string
     */
    public function getIpiNameNumber()
    {
        return $this->ipiNameNumber;
    }

    /**
     * Sets a new ipiNameNumber
     *
     * An Interested Party Identifier, a CISAC standard Identifier. An IpiNameNumber comprises 11 digits.
     *
     * @param string $ipiNameNumber
     * @return self
     */
    public function setIpiNameNumber($ipiNameNumber)
    {
        $this->ipiNameNumber = $ipiNameNumber;
        return $this;
    }

    /**
     * Gets as iPN
     *
     * An International Performer Number, an IPDA Identifier.
     *
     * @return string
     */
    public function getIPN()
    {
        return $this->iPN;
    }

    /**
     * Sets a new iPN
     *
     * An International Performer Number, an IPDA Identifier.
     *
     * @param string $iPN
     * @return self
     */
    public function setIPN($iPN)
    {
        $this->iPN = $iPN;
        return $this;
    }

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\PIE\PIE_100\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
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
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @return \DDEX\PIE\PIE_100\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the Party.
     *
     * @param \DDEX\PIE\PIE_100\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId = null)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


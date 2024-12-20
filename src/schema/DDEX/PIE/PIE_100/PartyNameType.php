<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing PartyNameType
 *
 * A Composite containing details of a PartyName.
 * XSD Type: PartyName
 */
class PartyNameType
{
    /**
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * A Flag indicating whether the PartyName is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isCanonical
     */
    private $isCanonical = null;

    /**
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @var \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     */
    private $metadataSourceReference = [
        
    ];

    /**
     * A Composite containing details of an Identifier for the Name.
     *
     * @var \DDEX\PIE\PIE_100\NameIdType[] $nameId
     */
    private $nameId = [
        
    ];

    /**
     * A Type of PartyName according to its semantics.
     *
     * @var \DDEX\PIE\PIE_100\PartyNameTypeType[] $partyNameType
     */
    private $partyNameType = [
        
    ];

    /**
     * A Reason for the name change (only applicable if the name replaces a previously valid name).
     *
     * @var \DDEX\PIE\PIE_100\ReasonForNameChangeType $reasonForNameChange
     */
    private $reasonForNameChange = null;

    /**
     * A Purpose for which the PartyName is used.
     *
     * @var \DDEX\PIE\PIE_100\PartyNamePurposeType[] $partyNamePurpose
     */
    private $partyNamePurpose = [
        
    ];

    /**
     * A Type of PartyName according to its representation.
     *
     * @var \DDEX\PIE\PIE_100\PartyNameFormatType[] $partyNameFormat
     */
    private $partyNameFormat = [
        
    ];

    /**
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType $fullName
     */
    private $fullName = null;

    /**
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationType $fullNameAsciiTranscribed
     */
    private $fullNameAsciiTranscribed = null;

    /**
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A NamePart that consists of qualifications and/or titles at the beginning of a PartyName.
     *
     * @var string $titlesBeforeNames
     */
    private $titlesBeforeNames = null;

    /**
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType $keyName
     */
    private $keyName = null;

    /**
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A NamePart that consists of qualifications and/or titles at the end of a PartyName.
     *
     * @var string $titlesAfterNames
     */
    private $titlesAfterNames = null;

    /**
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType[] $shortName
     */
    private $shortName = [
        
    ];

    /**
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @var \DDEX\PIE\PIE_100\NameWithScriptCodeType[] $abbreviatedName
     */
    private $abbreviatedName = [
        
    ];

    /**
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @var \DDEX\PIE\PIE_100\ValidityPeriodType[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @var \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     */
    private $relatedCreation = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the PartyName applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as isCanonical
     *
     * A Flag indicating whether the PartyName is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsCanonical()
    {
        return $this->isCanonical;
    }

    /**
     * Sets a new isCanonical
     *
     * A Flag indicating whether the PartyName is canonical (=true) or not (=false). This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isCanonical
     * @return self
     */
    public function setIsCanonical($isCanonical)
    {
        $this->isCanonical = $isCanonical;
        return $this;
    }

    /**
     * Adds as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference
     */
    public function addToMetadataSourceReference(\DDEX\PIE\PIE_100\MetadataSourceReferenceType $metadataSourceReference)
    {
        $this->metadataSourceReference[] = $metadataSourceReference;
        return $this;
    }

    /**
     * isset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadataSourceReference($index)
    {
        return isset($this->metadataSourceReference[$index]);
    }

    /**
     * unset metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadataSourceReference($index)
    {
        unset($this->metadataSourceReference[$index]);
    }

    /**
     * Gets as metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @return \DDEX\PIE\PIE_100\MetadataSourceReferenceType[]
     */
    public function getMetadataSourceReference()
    {
        return $this->metadataSourceReference;
    }

    /**
     * Sets a new metadataSourceReference
     *
     * A Reference for a Party (specific to this Message) that is the author of this metadata. This is a LocalMetadataSourceAnchorReference starting with the letter U.
     *
     * @param \DDEX\PIE\PIE_100\MetadataSourceReferenceType[] $metadataSourceReference
     * @return self
     */
    public function setMetadataSourceReference(array $metadataSourceReference = null)
    {
        $this->metadataSourceReference = $metadataSourceReference;
        return $this;
    }

    /**
     * Adds as nameId
     *
     * A Composite containing details of an Identifier for the Name.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\NameIdType $nameId
     */
    public function addToNameId(\DDEX\PIE\PIE_100\NameIdType $nameId)
    {
        $this->nameId[] = $nameId;
        return $this;
    }

    /**
     * isset nameId
     *
     * A Composite containing details of an Identifier for the Name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameId($index)
    {
        return isset($this->nameId[$index]);
    }

    /**
     * unset nameId
     *
     * A Composite containing details of an Identifier for the Name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameId($index)
    {
        unset($this->nameId[$index]);
    }

    /**
     * Gets as nameId
     *
     * A Composite containing details of an Identifier for the Name.
     *
     * @return \DDEX\PIE\PIE_100\NameIdType[]
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * Sets a new nameId
     *
     * A Composite containing details of an Identifier for the Name.
     *
     * @param \DDEX\PIE\PIE_100\NameIdType[] $nameId
     * @return self
     */
    public function setNameId(array $nameId = null)
    {
        $this->nameId = $nameId;
        return $this;
    }

    /**
     * Adds as partyNameType
     *
     * A Type of PartyName according to its semantics.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyNameTypeType $partyNameType
     */
    public function addToPartyNameType(\DDEX\PIE\PIE_100\PartyNameTypeType $partyNameType)
    {
        $this->partyNameType[] = $partyNameType;
        return $this;
    }

    /**
     * isset partyNameType
     *
     * A Type of PartyName according to its semantics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyNameType($index)
    {
        return isset($this->partyNameType[$index]);
    }

    /**
     * unset partyNameType
     *
     * A Type of PartyName according to its semantics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyNameType($index)
    {
        unset($this->partyNameType[$index]);
    }

    /**
     * Gets as partyNameType
     *
     * A Type of PartyName according to its semantics.
     *
     * @return \DDEX\PIE\PIE_100\PartyNameTypeType[]
     */
    public function getPartyNameType()
    {
        return $this->partyNameType;
    }

    /**
     * Sets a new partyNameType
     *
     * A Type of PartyName according to its semantics.
     *
     * @param \DDEX\PIE\PIE_100\PartyNameTypeType[] $partyNameType
     * @return self
     */
    public function setPartyNameType(array $partyNameType)
    {
        $this->partyNameType = $partyNameType;
        return $this;
    }

    /**
     * Gets as reasonForNameChange
     *
     * A Reason for the name change (only applicable if the name replaces a previously valid name).
     *
     * @return \DDEX\PIE\PIE_100\ReasonForNameChangeType
     */
    public function getReasonForNameChange()
    {
        return $this->reasonForNameChange;
    }

    /**
     * Sets a new reasonForNameChange
     *
     * A Reason for the name change (only applicable if the name replaces a previously valid name).
     *
     * @param \DDEX\PIE\PIE_100\ReasonForNameChangeType $reasonForNameChange
     * @return self
     */
    public function setReasonForNameChange(?\DDEX\PIE\PIE_100\ReasonForNameChangeType $reasonForNameChange = null)
    {
        $this->reasonForNameChange = $reasonForNameChange;
        return $this;
    }

    /**
     * Adds as partyNamePurpose
     *
     * A Purpose for which the PartyName is used.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyNamePurposeType $partyNamePurpose
     */
    public function addToPartyNamePurpose(\DDEX\PIE\PIE_100\PartyNamePurposeType $partyNamePurpose)
    {
        $this->partyNamePurpose[] = $partyNamePurpose;
        return $this;
    }

    /**
     * isset partyNamePurpose
     *
     * A Purpose for which the PartyName is used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyNamePurpose($index)
    {
        return isset($this->partyNamePurpose[$index]);
    }

    /**
     * unset partyNamePurpose
     *
     * A Purpose for which the PartyName is used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyNamePurpose($index)
    {
        unset($this->partyNamePurpose[$index]);
    }

    /**
     * Gets as partyNamePurpose
     *
     * A Purpose for which the PartyName is used.
     *
     * @return \DDEX\PIE\PIE_100\PartyNamePurposeType[]
     */
    public function getPartyNamePurpose()
    {
        return $this->partyNamePurpose;
    }

    /**
     * Sets a new partyNamePurpose
     *
     * A Purpose for which the PartyName is used.
     *
     * @param \DDEX\PIE\PIE_100\PartyNamePurposeType[] $partyNamePurpose
     * @return self
     */
    public function setPartyNamePurpose(array $partyNamePurpose = null)
    {
        $this->partyNamePurpose = $partyNamePurpose;
        return $this;
    }

    /**
     * Adds as partyNameFormat
     *
     * A Type of PartyName according to its representation.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\PartyNameFormatType $partyNameFormat
     */
    public function addToPartyNameFormat(\DDEX\PIE\PIE_100\PartyNameFormatType $partyNameFormat)
    {
        $this->partyNameFormat[] = $partyNameFormat;
        return $this;
    }

    /**
     * isset partyNameFormat
     *
     * A Type of PartyName according to its representation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyNameFormat($index)
    {
        return isset($this->partyNameFormat[$index]);
    }

    /**
     * unset partyNameFormat
     *
     * A Type of PartyName according to its representation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyNameFormat($index)
    {
        unset($this->partyNameFormat[$index]);
    }

    /**
     * Gets as partyNameFormat
     *
     * A Type of PartyName according to its representation.
     *
     * @return \DDEX\PIE\PIE_100\PartyNameFormatType[]
     */
    public function getPartyNameFormat()
    {
        return $this->partyNameFormat;
    }

    /**
     * Sets a new partyNameFormat
     *
     * A Type of PartyName according to its representation.
     *
     * @param \DDEX\PIE\PIE_100\PartyNameFormatType[] $partyNameFormat
     * @return self
     */
    public function setPartyNameFormat(array $partyNameFormat = null)
    {
        $this->partyNameFormat = $partyNameFormat;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $fullName
     * @return self
     */
    public function setFullName(?\DDEX\PIE\PIE_100\NameWithScriptCodeType $fullName = null)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationType
     */
    public function getFullNameAsciiTranscribed()
    {
        return $this->fullNameAsciiTranscribed;
    }

    /**
     * Sets a new fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationType $fullNameAsciiTranscribed
     * @return self
     */
    public function setFullNameAsciiTranscribed(?\DDEX\PIE\PIE_100\NameWithPronunciationType $fullNameAsciiTranscribed = null)
    {
        $this->fullNameAsciiTranscribed = $fullNameAsciiTranscribed;
        return $this;
    }

    /**
     * Gets as fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType
     */
    public function getFullNameIndexed()
    {
        return $this->fullNameIndexed;
    }

    /**
     * Sets a new fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(?\DDEX\PIE\PIE_100\NameWithScriptCodeType $fullNameIndexed = null)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as titlesBeforeNames
     *
     * A NamePart that consists of qualifications and/or titles at the beginning of a PartyName.
     *
     * @return string
     */
    public function getTitlesBeforeNames()
    {
        return $this->titlesBeforeNames;
    }

    /**
     * Sets a new titlesBeforeNames
     *
     * A NamePart that consists of qualifications and/or titles at the beginning of a PartyName.
     *
     * @param string $titlesBeforeNames
     * @return self
     */
    public function setTitlesBeforeNames($titlesBeforeNames)
    {
        $this->titlesBeforeNames = $titlesBeforeNames;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType
     */
    public function getNamesBeforeKeyName()
    {
        return $this->namesBeforeKeyName;
    }

    /**
     * Sets a new namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(?\DDEX\PIE\PIE_100\NameWithScriptCodeType $namesBeforeKeyName = null)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $keyName
     * @return self
     */
    public function setKeyName(?\DDEX\PIE\PIE_100\NameWithScriptCodeType $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType
     */
    public function getNamesAfterKeyName()
    {
        return $this->namesAfterKeyName;
    }

    /**
     * Sets a new namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(?\DDEX\PIE\PIE_100\NameWithScriptCodeType $namesAfterKeyName = null)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as titlesAfterNames
     *
     * A NamePart that consists of qualifications and/or titles at the end of a PartyName.
     *
     * @return string
     */
    public function getTitlesAfterNames()
    {
        return $this->titlesAfterNames;
    }

    /**
     * Sets a new titlesAfterNames
     *
     * A NamePart that consists of qualifications and/or titles at the end of a PartyName.
     *
     * @param string $titlesAfterNames
     * @return self
     */
    public function setTitlesAfterNames($titlesAfterNames)
    {
        $this->titlesAfterNames = $titlesAfterNames;
        return $this;
    }

    /**
     * Adds as shortName
     *
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $shortName
     */
    public function addToShortName(\DDEX\PIE\PIE_100\NameWithScriptCodeType $shortName)
    {
        $this->shortName[] = $shortName;
        return $this;
    }

    /**
     * isset shortName
     *
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShortName($index)
    {
        return isset($this->shortName[$index]);
    }

    /**
     * unset shortName
     *
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShortName($index)
    {
        unset($this->shortName[$index]);
    }

    /**
     * Gets as shortName
     *
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType[]
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * A Composite containing an incomplete Name of the Party, in its normal form of presentation.
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType[] $shortName
     * @return self
     */
    public function setShortName(array $shortName = null)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Adds as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType $abbreviatedName
     */
    public function addToAbbreviatedName(\DDEX\PIE\PIE_100\NameWithScriptCodeType $abbreviatedName)
    {
        $this->abbreviatedName[] = $abbreviatedName;
        return $this;
    }

    /**
     * isset abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAbbreviatedName($index)
    {
        return isset($this->abbreviatedName[$index]);
    }

    /**
     * unset abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAbbreviatedName($index)
    {
        unset($this->abbreviatedName[$index]);
    }

    /**
     * Gets as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return \DDEX\PIE\PIE_100\NameWithScriptCodeType[]
     */
    public function getAbbreviatedName()
    {
        return $this->abbreviatedName;
    }

    /**
     * Sets a new abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @param \DDEX\PIE\PIE_100\NameWithScriptCodeType[] $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(array $abbreviatedName = null)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\ValidityPeriodType $validityPeriod
     */
    public function addToValidityPeriod(\DDEX\PIE\PIE_100\ValidityPeriodType $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @return \DDEX\PIE\PIE_100\ValidityPeriodType[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * A Composite containing details about the Period of Time for which the PartyName is valid.
     * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/deals-and-commercial-aspects/start-dates,-end-dates,-start-datetimes-and-end-datetimes/
     *
     * @param \DDEX\PIE\PIE_100\ValidityPeriodType[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @return self
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation
     */
    public function addToRelatedCreation(\DDEX\PIE\PIE_100\RelatedCreationForPartyType $relatedCreation)
    {
        $this->relatedCreation[] = $relatedCreation;
        return $this;
    }

    /**
     * isset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedCreation($index)
    {
        return isset($this->relatedCreation[$index]);
    }

    /**
     * unset relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedCreation($index)
    {
        unset($this->relatedCreation[$index]);
    }

    /**
     * Gets as relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @return \DDEX\PIE\PIE_100\RelatedCreationForPartyType[]
     */
    public function getRelatedCreation()
    {
        return $this->relatedCreation;
    }

    /**
     * Sets a new relatedCreation
     *
     * A Composite containing details of a Creation (a Work, a Release or a Resource) where the relationship is valid.
     *
     * @param \DDEX\PIE\PIE_100\RelatedCreationForPartyType[] $relatedCreation
     * @return self
     */
    public function setRelatedCreation(array $relatedCreation = null)
    {
        $this->relatedCreation = $relatedCreation;
        return $this;
    }
}


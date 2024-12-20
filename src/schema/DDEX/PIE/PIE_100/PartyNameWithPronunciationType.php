<?php

namespace DDEX\PIE\PIE_100;

/**
 * Class representing PartyNameWithPronunciationType
 *
 * A Composite containing details of a PartyName.
 * Explanatory Note: This Composite is named PartyNameWithPronunciation to disambiguate it from the basic PartyName Composite.
 * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
 * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers
 * XSD Type: PartyNameWithPronunciation
 */
class PartyNameWithPronunciationType
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
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullName
     */
    private $fullName = null;

    /**
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameAsciiTranscribed
     */
    private $fullNameAsciiTranscribed = null;

    /**
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $keyName
     */
    private $keyName = null;

    /**
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @var \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $abbreviatedName
     */
    private $abbreviatedName = null;

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
     * Gets as fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullName
     * @return self
     */
    public function setFullName(\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameAsciiTranscribed
     * @return self
     */
    public function setFullNameAsciiTranscribed(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameAsciiTranscribed = null)
    {
        $this->fullNameAsciiTranscribed = $fullNameAsciiTranscribed;
        return $this;
    }

    /**
     * Gets as fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $fullNameIndexed = null)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesBeforeKeyName = null)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $keyName
     * @return self
     */
    public function setKeyName(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $namesAfterKeyName = null)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType
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
     * @param \DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(?\DDEX\PIE\PIE_100\NameWithPronunciationAndScriptCodeType $abbreviatedName = null)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }
}


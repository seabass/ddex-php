<?php

namespace DDEX\MWN\MWN_US_LOD_100;

/**
 * Class representing PartyNameForNotificationType
 *
 * A Composite containing details of a PartyName. Name details for a Party typically either contain a FullName or a KeyName.
 * Explanatory Note: This Composite is named PartyNameForNotification to disambiguate it from the basic PartyName Composite.
 * XSD Type: PartyNameForNotification
 */
class PartyNameForNotificationType
{
    /**
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @var bool $isLegalName
     */
    private $isLegalName = null;

    /**
     * The Flag indicating whether this Name is a pseudonym (=true) or not (=false).
     *
     * @var bool $isPseudonym
     */
    private $isPseudonym = null;

    /**
     * The Flag indicating whether a Name is a variant used on a Release, Resource or Work (=true) or not (=false).
     *
     * @var bool $isNameUsedOnCreation
     */
    private $isNameUsedOnCreation = null;

    /**
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $fullName
     */
    private $fullName = null;

    /**
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @var string $fullNameAsciiTranscribed
     */
    private $fullNameAsciiTranscribed = null;

    /**
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $keyName
     */
    private $keyName = null;

    /**
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @var \DDEX\MWN\MWN_US_LOD_100\NameType $abbreviatedName
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
     * Gets as isLegalName
     *
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsLegalName()
    {
        return $this->isLegalName;
    }

    /**
     * Sets a new isLegalName
     *
     * The Flag indicating whether this Name is a legal name (=true) or not (=false).
     *
     * @param bool $isLegalName
     * @return self
     */
    public function setIsLegalName($isLegalName)
    {
        $this->isLegalName = $isLegalName;
        return $this;
    }

    /**
     * Gets as isPseudonym
     *
     * The Flag indicating whether this Name is a pseudonym (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsPseudonym()
    {
        return $this->isPseudonym;
    }

    /**
     * Sets a new isPseudonym
     *
     * The Flag indicating whether this Name is a pseudonym (=true) or not (=false).
     *
     * @param bool $isPseudonym
     * @return self
     */
    public function setIsPseudonym($isPseudonym)
    {
        $this->isPseudonym = $isPseudonym;
        return $this;
    }

    /**
     * Gets as isNameUsedOnCreation
     *
     * The Flag indicating whether a Name is a variant used on a Release, Resource or Work (=true) or not (=false).
     *
     * @return bool
     */
    public function getIsNameUsedOnCreation()
    {
        return $this->isNameUsedOnCreation;
    }

    /**
     * Sets a new isNameUsedOnCreation
     *
     * The Flag indicating whether a Name is a variant used on a Release, Resource or Work (=true) or not (=false).
     *
     * @param bool $isNameUsedOnCreation
     * @return self
     */
    public function setIsNameUsedOnCreation($isNameUsedOnCreation)
    {
        $this->isNameUsedOnCreation = $isNameUsedOnCreation;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $fullName
     * @return self
     */
    public function setFullName(\DDEX\MWN\MWN_US_LOD_100\NameType $fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as fullNameAsciiTranscribed
     *
     * The FullName transcribed using 7-bit ASCII code.
     *
     * @return string
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
     * @param string $fullNameAsciiTranscribed
     * @return self
     */
    public function setFullNameAsciiTranscribed($fullNameAsciiTranscribed)
    {
        $this->fullNameAsciiTranscribed = $fullNameAsciiTranscribed;
        return $this;
    }

    /**
     * Gets as fullNameIndexed
     *
     * A Composite containing the complete Name of the Party in the form in which it normally appears in an alphabetic index, with the KeyName first (e.g. Smith, John H.; Beatles, The).
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(?\DDEX\MWN\MWN_US_LOD_100\NameType $fullNameIndexed = null)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(?\DDEX\MWN\MWN_US_LOD_100\NameType $namesBeforeKeyName = null)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $keyName
     * @return self
     */
    public function setKeyName(?\DDEX\MWN\MWN_US_LOD_100\NameType $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(?\DDEX\MWN\MWN_US_LOD_100\NameType $namesAfterKeyName = null)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return \DDEX\MWN\MWN_US_LOD_100\NameType
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
     * @param \DDEX\MWN\MWN_US_LOD_100\NameType $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(?\DDEX\MWN\MWN_US_LOD_100\NameType $abbreviatedName = null)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }
}


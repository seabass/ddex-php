<?php

namespace DDEX\ERN\ERN_C_SFTP_181;

/**
 * Class representing PartyNameType
 *
 * A Composite containing details of a PartyName. Name details for a Party typically either contain a FullName or a KeyName.
 * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/guidance-on-contributors%2C-artists-and-writers/lengths-of-artist-names
 * Further Reading: https://kb.ddex.net/implementing-each-standard/best-practices-for-all-ddex-standards/general-guidance-on-messages/field-length-and-precision
 * XSD Type: PartyName
 */
class PartyNameType
{
    /**
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $fullName
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
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $fullNameIndexed
     */
    private $fullNameIndexed = null;

    /**
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $namesBeforeKeyName
     */
    private $namesBeforeKeyName = null;

    /**
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $keyName
     */
    private $keyName = null;

    /**
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $namesAfterKeyName
     */
    private $namesAfterKeyName = null;

    /**
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\NameType $abbreviatedName
     */
    private $abbreviatedName = null;

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the PartyName as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. A list of common language/script combinations has been published in the Language Metadata Table (LMT) at https://www.mesaonline.org/lmt by the Media & Entertainment Services Alliance. Other language/script combinations allowed by IETF RfC 5646 are also valid. This is represented in an XML schema as an XML Attribute.
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
     * Gets as fullName
     *
     * A Composite containing the complete Name of the Party, in its normal form of presentation (e.g. John H. Smith, Acme Music Inc, the Beatles).
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $fullName
     * @return self
     */
    public function setFullName(\DDEX\ERN\ERN_C_SFTP_181\NameType $fullName)
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
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $fullNameIndexed
     * @return self
     */
    public function setFullNameIndexed(?\DDEX\ERN\ERN_C_SFTP_181\NameType $fullNameIndexed = null)
    {
        $this->fullNameIndexed = $fullNameIndexed;
        return $this;
    }

    /**
     * Gets as namesBeforeKeyName
     *
     * A Composite containing the Name(s) preceding the KeyName in the FullName (and that is placed after it in a FullNameIndexed). Examples: 'George' in 'George Michael'; 'John Fitzgerald' in 'John Fitzgerald Kennedy'. Not all PartyNames have a NamesBeforeKeyName (e.g. Madonna, EMI Music Inc).
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $namesBeforeKeyName
     * @return self
     */
    public function setNamesBeforeKeyName(?\DDEX\ERN\ERN_C_SFTP_181\NameType $namesBeforeKeyName = null)
    {
        $this->namesBeforeKeyName = $namesBeforeKeyName;
        return $this;
    }

    /**
     * Gets as keyName
     *
     * A Composite containing the Part of a Name of the Party normally used to index an entry in an alphabetical list, such as 'Smith' (in John Smith) or 'Garcia Marquez' or 'Madonna' or 'Francis de Sales' (in Saint Francis de Sales). For persons, this normally corresponds to the 'family name' or names, which in Western name forms usually comes as a surname at the end of a FullName, and in Asian name forms often at the beginning of a FullName.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $keyName
     * @return self
     */
    public function setKeyName(?\DDEX\ERN\ERN_C_SFTP_181\NameType $keyName = null)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as namesAfterKeyName
     *
     * A Composite containing the Name(s) following the KeyName. Example:'Ibrahim' (in Anwar Ibrahim). This is common, e.g., in many Asian personal name forms where a FullName begins with the KeyName, which is followed by other names.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $namesAfterKeyName
     * @return self
     */
    public function setNamesAfterKeyName(?\DDEX\ERN\ERN_C_SFTP_181\NameType $namesAfterKeyName = null)
    {
        $this->namesAfterKeyName = $namesAfterKeyName;
        return $this;
    }

    /**
     * Gets as abbreviatedName
     *
     * A Composite containing a short version of the PartyName (e.g. for use on devices with a small display).
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\NameType
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
     * @param \DDEX\ERN\ERN_C_SFTP_181\NameType $abbreviatedName
     * @return self
     */
    public function setAbbreviatedName(?\DDEX\ERN\ERN_C_SFTP_181\NameType $abbreviatedName = null)
    {
        $this->abbreviatedName = $abbreviatedName;
        return $this;
    }
}


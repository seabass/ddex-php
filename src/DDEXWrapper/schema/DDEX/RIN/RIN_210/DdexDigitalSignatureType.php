<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing DdexDigitalSignatureType
 *
 * A Composite containing a digital signature of the File in accordance with DDEX-DSIG.
 * XSD Type: DdexDigitalSignature
 */
class DdexDigitalSignatureType
{
    /**
     * An XmlAttribute of type xs:ID.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * An Element of type SignedInfoType.
     *
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfoTypeType $signedInfo
     */
    private $signedInfo = null;

    /**
     * An Element of type SignatureValueType.
     *
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValueTypeType $signatureValue
     */
    private $signatureValue = null;

    /**
     * A KeyInfo Composite.
     *
     * @var \DDEX\RIN\RIN_210\KeyInfoType $keyInfo
     */
    private $keyInfo = null;

    /**
     * Gets as id
     *
     * An XmlAttribute of type xs:ID.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * An XmlAttribute of type xs:ID.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signedInfo
     *
     * An Element of type SignedInfoType.
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfoTypeType
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * An Element of type SignedInfoType.
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfoTypeType $signedInfo
     * @return self
     */
    public function setSignedInfo(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfoTypeType $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * An Element of type SignatureValueType.
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValueTypeType
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * An Element of type SignatureValueType.
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValueTypeType $signatureValue
     * @return self
     */
    public function setSignatureValue(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValueTypeType $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * A KeyInfo Composite.
     *
     * @return \DDEX\RIN\RIN_210\KeyInfoType
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * A KeyInfo Composite.
     *
     * @param \DDEX\RIN\RIN_210\KeyInfoType $keyInfo
     * @return self
     */
    public function setKeyInfo(\DDEX\RIN\RIN_210\KeyInfoType $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }
}


<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing SignatureTypeType
 *
 * 
 * XSD Type: SignatureType
 */
class SignatureTypeType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\ObjectXsd[] $object
     */
    private $object = [
        
    ];

    /**
     * Gets as id
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
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyInfo $keyInfo = null)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\ObjectXsd $object
     */
    public function addToObject(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object = null)
    {
        $this->object = $object;
        return $this;
    }
}


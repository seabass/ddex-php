<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing SignaturePropertiesTypeType
 *
 * 
 * XSD Type: SignaturePropertiesType
 */
class SignaturePropertiesTypeType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureProperty[] $signatureProperty
     */
    private $signatureProperty = [
        
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
     * Adds as signatureProperty
     *
     * @return self
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureProperty $signatureProperty
     */
    public function addToSignatureProperty(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureProperty $signatureProperty)
    {
        $this->signatureProperty[] = $signatureProperty;
        return $this;
    }

    /**
     * isset signatureProperty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignatureProperty($index)
    {
        return isset($this->signatureProperty[$index]);
    }

    /**
     * unset signatureProperty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignatureProperty($index)
    {
        unset($this->signatureProperty[$index]);
    }

    /**
     * Gets as signatureProperty
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureProperty[]
     */
    public function getSignatureProperty()
    {
        return $this->signatureProperty;
    }

    /**
     * Sets a new signatureProperty
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureProperty[] $signatureProperty
     * @return self
     */
    public function setSignatureProperty(array $signatureProperty)
    {
        $this->signatureProperty = $signatureProperty;
        return $this;
    }
}


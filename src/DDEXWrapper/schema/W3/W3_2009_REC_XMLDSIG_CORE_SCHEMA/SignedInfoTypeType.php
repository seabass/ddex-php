<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing SignedInfoTypeType
 *
 * 
 * XSD Type: SignedInfoType
 */
class SignedInfoTypeType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Reference[] $reference
     */
    private $reference = [
        
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
     * Gets as canonicalizationMethod
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Reference $reference
     */
    public function addToReference(\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }
}


<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing KeyInfoTypeType
 *
 * 
 * XSD Type: KeyInfoType
 */
class KeyInfoTypeType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $keyName
     */
    private $keyName = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyValue $keyValue
     */
    private $keyValue = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RetrievalMethod $retrievalMethod
     */
    private $retrievalMethod = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509Data $x509Data
     */
    private $x509Data = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\PGPData $pGPData
     */
    private $pGPData = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SPKIData $sPKIData
     */
    private $sPKIData = null;

    /**
     * @var string $mgmtData
     */
    private $mgmtData = null;

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
     * Gets as keyName
     *
     * @return string
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * @param string $keyName
     * @return self
     */
    public function setKeyName($keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Gets as keyValue
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyValue
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyValue $keyValue
     * @return self
     */
    public function setKeyValue(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\KeyValue $keyValue = null)
    {
        $this->keyValue = $keyValue;
        return $this;
    }

    /**
     * Gets as retrievalMethod
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RetrievalMethod
     */
    public function getRetrievalMethod()
    {
        return $this->retrievalMethod;
    }

    /**
     * Sets a new retrievalMethod
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RetrievalMethod $retrievalMethod
     * @return self
     */
    public function setRetrievalMethod(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RetrievalMethod $retrievalMethod = null)
    {
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }

    /**
     * Gets as x509Data
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509Data
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509Data $x509Data
     * @return self
     */
    public function setX509Data(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509Data $x509Data = null)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * Gets as pGPData
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\PGPData
     */
    public function getPGPData()
    {
        return $this->pGPData;
    }

    /**
     * Sets a new pGPData
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\PGPData $pGPData
     * @return self
     */
    public function setPGPData(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\PGPData $pGPData = null)
    {
        $this->pGPData = $pGPData;
        return $this;
    }

    /**
     * Gets as sPKIData
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SPKIData
     */
    public function getSPKIData()
    {
        return $this->sPKIData;
    }

    /**
     * Sets a new sPKIData
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SPKIData $sPKIData
     * @return self
     */
    public function setSPKIData(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\SPKIData $sPKIData = null)
    {
        $this->sPKIData = $sPKIData;
        return $this;
    }

    /**
     * Gets as mgmtData
     *
     * @return string
     */
    public function getMgmtData()
    {
        return $this->mgmtData;
    }

    /**
     * Sets a new mgmtData
     *
     * @param string $mgmtData
     * @return self
     */
    public function setMgmtData($mgmtData)
    {
        $this->mgmtData = $mgmtData;
        return $this;
    }
}


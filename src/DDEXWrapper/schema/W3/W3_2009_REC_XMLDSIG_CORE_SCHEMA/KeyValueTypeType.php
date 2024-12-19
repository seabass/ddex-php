<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing KeyValueTypeType
 *
 * 
 * XSD Type: KeyValueType
 */
class KeyValueTypeType
{
    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\DSAKeyValue $dSAKeyValue = null)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\RSAKeyValue $rSAKeyValue = null)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }
}


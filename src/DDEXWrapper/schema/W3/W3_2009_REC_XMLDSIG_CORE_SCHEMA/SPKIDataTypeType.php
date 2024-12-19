<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing SPKIDataTypeType
 *
 * 
 * XSD Type: SPKIDataType
 */
class SPKIDataTypeType
{
    /**
     * @var string $sPKISexp
     */
    private $sPKISexp = null;

    /**
     * Gets as sPKISexp
     *
     * @return string
     */
    public function getSPKISexp()
    {
        return $this->sPKISexp;
    }

    /**
     * Sets a new sPKISexp
     *
     * @param string $sPKISexp
     * @return self
     */
    public function setSPKISexp($sPKISexp)
    {
        $this->sPKISexp = $sPKISexp;
        return $this;
    }
}


<?php

namespace W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA;

/**
 * Class representing PGPDataTypeType
 *
 * 
 * XSD Type: PGPDataType
 */
class PGPDataTypeType
{
    /**
     * @var string $pGPKeyID
     */
    private $pGPKeyID = null;

    /**
     * @var string $pGPKeyPacket
     */
    private $pGPKeyPacket = null;

    /**
     * Gets as pGPKeyID
     *
     * @return string
     */
    public function getPGPKeyID()
    {
        return $this->pGPKeyID;
    }

    /**
     * Sets a new pGPKeyID
     *
     * @param string $pGPKeyID
     * @return self
     */
    public function setPGPKeyID($pGPKeyID)
    {
        $this->pGPKeyID = $pGPKeyID;
        return $this;
    }

    /**
     * Gets as pGPKeyPacket
     *
     * @return string
     */
    public function getPGPKeyPacket()
    {
        return $this->pGPKeyPacket;
    }

    /**
     * Sets a new pGPKeyPacket
     *
     * @param string $pGPKeyPacket
     * @return self
     */
    public function setPGPKeyPacket($pGPKeyPacket)
    {
        $this->pGPKeyPacket = $pGPKeyPacket;
        return $this;
    }
}


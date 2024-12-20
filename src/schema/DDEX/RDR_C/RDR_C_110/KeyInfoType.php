<?php

namespace DDEX\RDR_C\RDR_C_110;

/**
 * Class representing KeyInfoType
 *
 * A KeyInfo Composite.
 * XSD Type: KeyInfo
 */
class KeyInfoType
{
    /**
     * An XmlAttribute of type xs:ID. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * An X509Data Composite.
     *
     * @var \DDEX\RDR_C\RDR_C_110\X509DataType $x509Data
     */
    private $x509Data = null;

    /**
     * Gets as id
     *
     * An XmlAttribute of type xs:ID. This is represented in an XML schema as an XML Attribute.
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
     * An XmlAttribute of type xs:ID. This is represented in an XML schema as an XML Attribute.
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
     * Gets as x509Data
     *
     * An X509Data Composite.
     *
     * @return \DDEX\RDR_C\RDR_C_110\X509DataType
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * An X509Data Composite.
     *
     * @param \DDEX\RDR_C\RDR_C_110\X509DataType $x509Data
     * @return self
     */
    public function setX509Data(\DDEX\RDR_C\RDR_C_110\X509DataType $x509Data)
    {
        $this->x509Data = $x509Data;
        return $this;
    }
}


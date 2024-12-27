<?php

namespace DDEX\ERN\ERN_C_SFTP_181;

/**
 * Class representing X509DataType
 *
 * An X509Data Composite.
 * XSD Type: X509Data
 */
class X509DataType
{
    /**
     * An Element of type X509IssuerSerialType.
     *
     * @var \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509IssuerSerialTypeType $x509IssuerSerial
     */
    private $x509IssuerSerial = null;

    /**
     * An Element of type xs:base64Binary.
     *
     * @var string $x509SKI
     */
    private $x509SKI = null;

    /**
     * An Element of type xs:string.
     *
     * @var string $x509SubjectName
     */
    private $x509SubjectName = null;

    /**
     * An Element of type xs:base64Binary.
     *
     * @var string $x509Certificate
     */
    private $x509Certificate = null;

    /**
     * An Element of type xs:base64Binary.
     *
     * @var string $x509CRL
     */
    private $x509CRL = null;

    /**
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @var \DDEX\ERN\ERN_C_SFTP_181\PartyIdType $partyId
     */
    private $partyId = null;

    /**
     * @var mixed $any
     */
    private $any = null;

    /**
     * Gets as x509IssuerSerial
     *
     * An Element of type X509IssuerSerialType.
     *
     * @return \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509IssuerSerialTypeType
     */
    public function getX509IssuerSerial()
    {
        return $this->x509IssuerSerial;
    }

    /**
     * Sets a new x509IssuerSerial
     *
     * An Element of type X509IssuerSerialType.
     *
     * @param \W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509IssuerSerialTypeType $x509IssuerSerial
     * @return self
     */
    public function setX509IssuerSerial(?\W3\W3_2009_REC_XMLDSIG_CORE_SCHEMA\X509IssuerSerialTypeType $x509IssuerSerial = null)
    {
        $this->x509IssuerSerial = $x509IssuerSerial;
        return $this;
    }

    /**
     * Gets as x509SKI
     *
     * An Element of type xs:base64Binary.
     *
     * @return string
     */
    public function getX509SKI()
    {
        return $this->x509SKI;
    }

    /**
     * Sets a new x509SKI
     *
     * An Element of type xs:base64Binary.
     *
     * @param string $x509SKI
     * @return self
     */
    public function setX509SKI($x509SKI)
    {
        $this->x509SKI = $x509SKI;
        return $this;
    }

    /**
     * Gets as x509SubjectName
     *
     * An Element of type xs:string.
     *
     * @return string
     */
    public function getX509SubjectName()
    {
        return $this->x509SubjectName;
    }

    /**
     * Sets a new x509SubjectName
     *
     * An Element of type xs:string.
     *
     * @param string $x509SubjectName
     * @return self
     */
    public function setX509SubjectName($x509SubjectName)
    {
        $this->x509SubjectName = $x509SubjectName;
        return $this;
    }

    /**
     * Gets as x509Certificate
     *
     * An Element of type xs:base64Binary.
     *
     * @return string
     */
    public function getX509Certificate()
    {
        return $this->x509Certificate;
    }

    /**
     * Sets a new x509Certificate
     *
     * An Element of type xs:base64Binary.
     *
     * @param string $x509Certificate
     * @return self
     */
    public function setX509Certificate($x509Certificate)
    {
        $this->x509Certificate = $x509Certificate;
        return $this;
    }

    /**
     * Gets as x509CRL
     *
     * An Element of type xs:base64Binary.
     *
     * @return string
     */
    public function getX509CRL()
    {
        return $this->x509CRL;
    }

    /**
     * Sets a new x509CRL
     *
     * An Element of type xs:base64Binary.
     *
     * @param string $x509CRL
     * @return self
     */
    public function setX509CRL($x509CRL)
    {
        $this->x509CRL = $x509CRL;
        return $this;
    }

    /**
     * Gets as partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @return \DDEX\ERN\ERN_C_SFTP_181\PartyIdType
     */
    public function getPartyId()
    {
        return $this->partyId;
    }

    /**
     * Sets a new partyId
     *
     * A Composite containing details of the PartyId for the Party. If no Namespace is given, the Identifier is a DdexPartyId (DPID). Note that DPIDs are not normally used to identify Artists, producers or other Creators.
     *
     * @param \DDEX\ERN\ERN_C_SFTP_181\PartyIdType $partyId
     * @return self
     */
    public function setPartyId(?\DDEX\ERN\ERN_C_SFTP_181\PartyIdType $partyId = null)
    {
        $this->partyId = $partyId;
        return $this;
    }

    /**
     * Gets as any
     *
     * @return mixed
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * Sets a new any
     *
     * @param $any
     * @return self
     */
    public function setAny($any)
    {
        $this->any = $any;
        return $this;
    }
}


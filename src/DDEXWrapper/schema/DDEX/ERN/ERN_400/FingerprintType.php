<?php

namespace DDEX\ERN\ERN_400;

/**
 * Class representing FingerprintType
 *
 * A Composite containing details of a Fingerprint and its governing algorithm.
 * XSD Type: Fingerprint
 */
class FingerprintType
{
    /**
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @var \DDEX\ERN\ERN_400\FingerprintAlgorithmTypeType $algorithm
     */
    private $algorithm = null;

    /**
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A parameter of the FingerprintAlgorithm.
     *
     * @var string $parameter
     */
    private $parameter = null;

    /**
     * A Composite containing details of a File containing the Fingerprint.
     *
     * @var \DDEX\ERN\ERN_400\FileType $file
     */
    private $file = null;

    /**
     * The datatype of the Fingerprint.
     *
     * @var string $dataType
     */
    private $dataType = null;

    /**
     * The value of the Fingerprint.
     *
     * @var string $fingerprint
     */
    private $fingerprint = null;

    /**
     * Gets as algorithm
     *
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @return \DDEX\ERN\ERN_400\FingerprintAlgorithmTypeType
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * A Composite containing details of the Type of FingerprintAlgorithm governing the Fingerprint.
     *
     * @param \DDEX\ERN\ERN_400\FingerprintAlgorithmTypeType $algorithm
     * @return self
     */
    public function setAlgorithm(\DDEX\ERN\ERN_400\FingerprintAlgorithmTypeType $algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }

    /**
     * Gets as version
     *
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The Identifier of the Version of the FingerprintAlgorithm.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as parameter
     *
     * A parameter of the FingerprintAlgorithm.
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A parameter of the FingerprintAlgorithm.
     *
     * @param string $parameter
     * @return self
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as file
     *
     * A Composite containing details of a File containing the Fingerprint.
     *
     * @return \DDEX\ERN\ERN_400\FileType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * A Composite containing details of a File containing the Fingerprint.
     *
     * @param \DDEX\ERN\ERN_400\FileType $file
     * @return self
     */
    public function setFile(?\DDEX\ERN\ERN_400\FileType $file = null)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Gets as dataType
     *
     * The datatype of the Fingerprint.
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets a new dataType
     *
     * The datatype of the Fingerprint.
     *
     * @param string $dataType
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Gets as fingerprint
     *
     * The value of the Fingerprint.
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * Sets a new fingerprint
     *
     * The value of the Fingerprint.
     *
     * @param string $fingerprint
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
}


<?php

namespace DDEX\MEAD\MEAD_110;

/**
 * Class representing MetadataSourceReferenceType
 *
 * A Composite containing details of a claim made by a metadata provider.
 * XSD Type: MetadataSourceReference
 */
class MetadataSourceReferenceType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The DateTime of the Assertion made by the metadata provider, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @var \DateTime $assertionDateTime
     */
    private $assertionDateTime = null;

    /**
     * A Status of the Assertion made by the metadata provider. This attribute allows to say if the Assertion has been proactively verified (as opposed to ingested from a data source that may not be 100% reliable). Absence of a Status means that no specific status is asserted.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * A weighting factor for the asserted metadata computed by an AI algorithm. The Weight shall be provided as a Decimal between 0 and 100.
     *
     * @var float $weight
     */
    private $weight = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as assertionDateTime
     *
     * The DateTime of the Assertion made by the metadata provider, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @return \DateTime
     */
    public function getAssertionDateTime()
    {
        return $this->assertionDateTime;
    }

    /**
     * Sets a new assertionDateTime
     *
     * The DateTime of the Assertion made by the metadata provider, in ISO 8601 format: YYYY-MM-DDThh:mm:ssTZD.
     *
     * @param \DateTime $assertionDateTime
     * @return self
     */
    public function setAssertionDateTime(\DateTime $assertionDateTime)
    {
        $this->assertionDateTime = $assertionDateTime;
        return $this;
    }

    /**
     * Gets as status
     *
     * A Status of the Assertion made by the metadata provider. This attribute allows to say if the Assertion has been proactively verified (as opposed to ingested from a data source that may not be 100% reliable). Absence of a Status means that no specific status is asserted.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A Status of the Assertion made by the metadata provider. This attribute allows to say if the Assertion has been proactively verified (as opposed to ingested from a data source that may not be 100% reliable). Absence of a Status means that no specific status is asserted.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as weight
     *
     * A weighting factor for the asserted metadata computed by an AI algorithm. The Weight shall be provided as a Decimal between 0 and 100.
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * A weighting factor for the asserted metadata computed by an AI algorithm. The Weight shall be provided as a Decimal between 0 and 100.
     *
     * @param float $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
}


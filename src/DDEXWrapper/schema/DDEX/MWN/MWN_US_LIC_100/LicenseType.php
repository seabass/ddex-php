<?php

namespace DDEX\MWN\MWN_US_LIC_100;

/**
 * Class representing LicenseType
 *
 * A Composite containing details of a License.
 * XSD Type: License
 */
class LicenseType
{
    /**
     * A Composite containing details of an Identifier of the License.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType[] $licenseId
     */
    private $licenseId = null;

    /**
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @var \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId
     */
    private $licenseRequestId = null;

    /**
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @var string[] $licenseRightShareReference
     */
    private $licenseRightShareReference = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of an Identifier of the License.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $proprietaryId
     */
    public function addToLicenseId(\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $proprietaryId)
    {
        $this->licenseId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset licenseId
     *
     * A Composite containing details of an Identifier of the License.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseId($index)
    {
        return isset($this->licenseId[$index]);
    }

    /**
     * unset licenseId
     *
     * A Composite containing details of an Identifier of the License.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseId($index)
    {
        unset($this->licenseId[$index]);
    }

    /**
     * Gets as licenseId
     *
     * A Composite containing details of an Identifier of the License.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType[]
     */
    public function getLicenseId()
    {
        return $this->licenseId;
    }

    /**
     * Sets a new licenseId
     *
     * A Composite containing details of an Identifier of the License.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType[] $licenseId
     * @return self
     */
    public function setLicenseId(array $licenseId)
    {
        $this->licenseId = $licenseId;
        return $this;
    }

    /**
     * Gets as licenseRequestId
     *
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @return \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType
     */
    public function getLicenseRequestId()
    {
        return $this->licenseRequestId;
    }

    /**
     * Sets a new licenseRequestId
     *
     * A Composite containing details of an Identifier of the License request that is referred to.
     *
     * @param \DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId
     * @return self
     */
    public function setLicenseRequestId(\DDEX\MWN\MWN_US_LIC_100\ProprietaryIdType $licenseRequestId)
    {
        $this->licenseRequestId = $licenseRequestId;
        return $this;
    }

    /**
     * Adds as licenseRightShareReference
     *
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return self
     * @param string $licenseRightShareReference
     */
    public function addToLicenseRightShareReference($licenseRightShareReference)
    {
        $this->licenseRightShareReference[] = $licenseRightShareReference;
        return $this;
    }

    /**
     * isset licenseRightShareReference
     *
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseRightShareReference($index)
    {
        return isset($this->licenseRightShareReference[$index]);
    }

    /**
     * unset licenseRightShareReference
     *
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseRightShareReference($index)
    {
        unset($this->licenseRightShareReference[$index]);
    }

    /**
     * Gets as licenseRightShareReference
     *
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @return string[]
     */
    public function getLicenseRightShareReference()
    {
        return $this->licenseRightShareReference;
    }

    /**
     * Sets a new licenseRightShareReference
     *
     * A Reference for a RightShare (specific to this Message) that is referred to in the License. This is a LocalRightShareAnchorReference starting with the letter S.
     *
     * @param string $licenseRightShareReference
     * @return self
     */
    public function setLicenseRightShareReference(array $licenseRightShareReference = null)
    {
        $this->licenseRightShareReference = $licenseRightShareReference;
        return $this;
    }
}


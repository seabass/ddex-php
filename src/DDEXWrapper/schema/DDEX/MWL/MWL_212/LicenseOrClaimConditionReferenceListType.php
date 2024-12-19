<?php

namespace DDEX\MWL\MWL_212;

/**
 * Class representing LicenseOrClaimConditionReferenceListType
 *
 * A ddex:Composite containing a list of
 *  ddex:References in a mwl:LicenseOrClaimCondition.
 * XSD Type: LicenseOrClaimConditionReferenceList
 */
class LicenseOrClaimConditionReferenceListType
{
    /**
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @var string[] $licenseOrClaimConditionReleaseReference
     */
    private $licenseOrClaimConditionReleaseReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @var string[] $licenseOrClaimConditionResourceReference
     */
    private $licenseOrClaimConditionResourceReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @var string[] $licenseOrClaimConditionWorkReference
     */
    private $licenseOrClaimConditionWorkReference = [
        
    ];

    /**
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @var string[] $licenseOrClaimConditionRightShareReference
     */
    private $licenseOrClaimConditionRightShareReference = [
        
    ];

    /**
     * Adds as licenseOrClaimConditionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @return self
     * @param string $licenseOrClaimConditionReleaseReference
     */
    public function addToLicenseOrClaimConditionReleaseReference($licenseOrClaimConditionReleaseReference)
    {
        $this->licenseOrClaimConditionReleaseReference[] = $licenseOrClaimConditionReleaseReference;
        return $this;
    }

    /**
     * isset licenseOrClaimConditionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimConditionReleaseReference($index)
    {
        return isset($this->licenseOrClaimConditionReleaseReference[$index]);
    }

    /**
     * unset licenseOrClaimConditionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimConditionReleaseReference($index)
    {
        unset($this->licenseOrClaimConditionReleaseReference[$index]);
    }

    /**
     * Gets as licenseOrClaimConditionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @return string[]
     */
    public function getLicenseOrClaimConditionReleaseReference()
    {
        return $this->licenseOrClaimConditionReleaseReference;
    }

    /**
     * Sets a new licenseOrClaimConditionReleaseReference
     *
     * A ddex:Reference for a ddex:Release
     *  (specific to this ddex:Message). This is a ddex:LocalReleaseAnchorReference
     *  starting with the letter R.
     *
     * @param string $licenseOrClaimConditionReleaseReference
     * @return self
     */
    public function setLicenseOrClaimConditionReleaseReference(array $licenseOrClaimConditionReleaseReference = null)
    {
        $this->licenseOrClaimConditionReleaseReference = $licenseOrClaimConditionReleaseReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimConditionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @return self
     * @param string $licenseOrClaimConditionResourceReference
     */
    public function addToLicenseOrClaimConditionResourceReference($licenseOrClaimConditionResourceReference)
    {
        $this->licenseOrClaimConditionResourceReference[] = $licenseOrClaimConditionResourceReference;
        return $this;
    }

    /**
     * isset licenseOrClaimConditionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimConditionResourceReference($index)
    {
        return isset($this->licenseOrClaimConditionResourceReference[$index]);
    }

    /**
     * unset licenseOrClaimConditionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimConditionResourceReference($index)
    {
        unset($this->licenseOrClaimConditionResourceReference[$index]);
    }

    /**
     * Gets as licenseOrClaimConditionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @return string[]
     */
    public function getLicenseOrClaimConditionResourceReference()
    {
        return $this->licenseOrClaimConditionResourceReference;
    }

    /**
     * Sets a new licenseOrClaimConditionResourceReference
     *
     * A ddex:Reference for a ddex:Resource
     *  (specific to this ddex:Message). This is a ddex:LocalResourceAnchorReference
     *  starting with the letter A.
     *
     * @param string $licenseOrClaimConditionResourceReference
     * @return self
     */
    public function setLicenseOrClaimConditionResourceReference(array $licenseOrClaimConditionResourceReference = null)
    {
        $this->licenseOrClaimConditionResourceReference = $licenseOrClaimConditionResourceReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimConditionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @return self
     * @param string $licenseOrClaimConditionWorkReference
     */
    public function addToLicenseOrClaimConditionWorkReference($licenseOrClaimConditionWorkReference)
    {
        $this->licenseOrClaimConditionWorkReference[] = $licenseOrClaimConditionWorkReference;
        return $this;
    }

    /**
     * isset licenseOrClaimConditionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimConditionWorkReference($index)
    {
        return isset($this->licenseOrClaimConditionWorkReference[$index]);
    }

    /**
     * unset licenseOrClaimConditionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimConditionWorkReference($index)
    {
        unset($this->licenseOrClaimConditionWorkReference[$index]);
    }

    /**
     * Gets as licenseOrClaimConditionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @return string[]
     */
    public function getLicenseOrClaimConditionWorkReference()
    {
        return $this->licenseOrClaimConditionWorkReference;
    }

    /**
     * Sets a new licenseOrClaimConditionWorkReference
     *
     * A ddex:Reference for a ddex:Work (specific
     *  to this ddex:Message). This is a ddex:LocalMusicalWorkAnchorReference starting
     *  with the letter W.
     *
     * @param string $licenseOrClaimConditionWorkReference
     * @return self
     */
    public function setLicenseOrClaimConditionWorkReference(array $licenseOrClaimConditionWorkReference = null)
    {
        $this->licenseOrClaimConditionWorkReference = $licenseOrClaimConditionWorkReference;
        return $this;
    }

    /**
     * Adds as licenseOrClaimConditionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @return self
     * @param string $licenseOrClaimConditionRightShareReference
     */
    public function addToLicenseOrClaimConditionRightShareReference($licenseOrClaimConditionRightShareReference)
    {
        $this->licenseOrClaimConditionRightShareReference[] = $licenseOrClaimConditionRightShareReference;
        return $this;
    }

    /**
     * isset licenseOrClaimConditionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimConditionRightShareReference($index)
    {
        return isset($this->licenseOrClaimConditionRightShareReference[$index]);
    }

    /**
     * unset licenseOrClaimConditionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimConditionRightShareReference($index)
    {
        unset($this->licenseOrClaimConditionRightShareReference[$index]);
    }

    /**
     * Gets as licenseOrClaimConditionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @return string[]
     */
    public function getLicenseOrClaimConditionRightShareReference()
    {
        return $this->licenseOrClaimConditionRightShareReference;
    }

    /**
     * Sets a new licenseOrClaimConditionRightShareReference
     *
     * A ddex:Reference for a ddex:RightShare
     *  (specific to this ddex:Message). This is a ddex:LocalRightShareAnchorReference
     *  starting with the letter S.
     *
     * @param string $licenseOrClaimConditionRightShareReference
     * @return self
     */
    public function setLicenseOrClaimConditionRightShareReference(array $licenseOrClaimConditionRightShareReference = null)
    {
        $this->licenseOrClaimConditionRightShareReference = $licenseOrClaimConditionRightShareReference;
        return $this;
    }
}


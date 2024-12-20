<?php

namespace DDEX\MWL\MWL_200;

/**
 * Class representing LicenseOrClaimConditionListType
 *
 * A ddex:Composite containing details of a list of conditions and/or limitations for Usages.
 * XSD Type: LicenseOrClaimConditionList
 */
class LicenseOrClaimConditionListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimConditionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @var \DDEX\MWL\MWL_200\LicenseOrClaimConditionType[] $licenseOrClaimCondition
     */
    private $licenseOrClaimCondition = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimConditionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the mwl:LicenseOrClaimConditionList as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as licenseOrClaimCondition
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @return self
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimConditionType $licenseOrClaimCondition
     */
    public function addToLicenseOrClaimCondition(\DDEX\MWL\MWL_200\LicenseOrClaimConditionType $licenseOrClaimCondition)
    {
        $this->licenseOrClaimCondition[] = $licenseOrClaimCondition;
        return $this;
    }

    /**
     * isset licenseOrClaimCondition
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLicenseOrClaimCondition($index)
    {
        return isset($this->licenseOrClaimCondition[$index]);
    }

    /**
     * unset licenseOrClaimCondition
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLicenseOrClaimCondition($index)
    {
        unset($this->licenseOrClaimCondition[$index]);
    }

    /**
     * Gets as licenseOrClaimCondition
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @return \DDEX\MWL\MWL_200\LicenseOrClaimConditionType[]
     */
    public function getLicenseOrClaimCondition()
    {
        return $this->licenseOrClaimCondition;
    }

    /**
     * Sets a new licenseOrClaimCondition
     *
     * A ddex:Composite containing details of conditions and/or limitations for Usages.
     *
     * @param \DDEX\MWL\MWL_200\LicenseOrClaimConditionType[] $licenseOrClaimCondition
     * @return self
     */
    public function setLicenseOrClaimCondition(array $licenseOrClaimCondition)
    {
        $this->licenseOrClaimCondition = $licenseOrClaimCondition;
        return $this;
    }
}


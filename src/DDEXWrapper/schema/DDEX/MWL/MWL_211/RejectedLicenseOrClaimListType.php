<?php

namespace DDEX\MWL\MWL_211;

/**
 * Class representing RejectedLicenseOrClaimListType
 *
 * A ddex:Composite containing details of ddex:Licenses or ddex:Claims that are rejected.
 * XSD Type: RejectedLicenseOrClaimList
 */
class RejectedLicenseOrClaimListType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the RejectedLicenseOrClaimList as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @var \DDEX\MWL\MWL_211\RejectedLicenseOrClaimType[] $rejectedLicenseOrClaim
     */
    private $rejectedLicenseOrClaim = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the RejectedLicenseOrClaimList as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the RejectedLicenseOrClaimList as defined in IETF RfC 4646. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * Adds as rejectedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @return self
     * @param \DDEX\MWL\MWL_211\RejectedLicenseOrClaimType $rejectedLicenseOrClaim
     */
    public function addToRejectedLicenseOrClaim(\DDEX\MWL\MWL_211\RejectedLicenseOrClaimType $rejectedLicenseOrClaim)
    {
        $this->rejectedLicenseOrClaim[] = $rejectedLicenseOrClaim;
        return $this;
    }

    /**
     * isset rejectedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectedLicenseOrClaim($index)
    {
        return isset($this->rejectedLicenseOrClaim[$index]);
    }

    /**
     * unset rejectedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectedLicenseOrClaim($index)
    {
        unset($this->rejectedLicenseOrClaim[$index]);
    }

    /**
     * Gets as rejectedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @return \DDEX\MWL\MWL_211\RejectedLicenseOrClaimType[]
     */
    public function getRejectedLicenseOrClaim()
    {
        return $this->rejectedLicenseOrClaim;
    }

    /**
     * Sets a new rejectedLicenseOrClaim
     *
     * A ddex:Composite containing details of the ddex:License or ddex:Claim that is rejected.
     *
     * @param \DDEX\MWL\MWL_211\RejectedLicenseOrClaimType[] $rejectedLicenseOrClaim
     * @return self
     */
    public function setRejectedLicenseOrClaim(array $rejectedLicenseOrClaim)
    {
        $this->rejectedLicenseOrClaim = $rejectedLicenseOrClaim;
        return $this;
    }
}


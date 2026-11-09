<?php

namespace DDEX\ERN\ERN_C_WS_180;

/**
 * Class representing ProprietaryIdMappingType
 *
 * A Composite containing details of a ProprietaryIdentifier mapping.
 * XSD Type: ProprietaryIdMapping
 */
class ProprietaryIdMappingType
{
    /**
     * A Composite containing details of an Identifier that is formally used.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\FormalIdentifierType $formalIdentifier
     */
    private $formalIdentifier = null;

    /**
     * A Composite containing details of a ProprietaryIdentifier for the above Identifier.
     *
     * @var \DDEX\ERN\ERN_C_WS_180\ProprietaryIdWithOptionalAttributeType $proprietaryId
     */
    private $proprietaryId = null;

    /**
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @var string[] $landingPage
     */
    private $landingPage = [
        
    ];

    /**
     * Gets as formalIdentifier
     *
     * A Composite containing details of an Identifier that is formally used.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\FormalIdentifierType
     */
    public function getFormalIdentifier()
    {
        return $this->formalIdentifier;
    }

    /**
     * Sets a new formalIdentifier
     *
     * A Composite containing details of an Identifier that is formally used.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\FormalIdentifierType $formalIdentifier
     * @return self
     */
    public function setFormalIdentifier(\DDEX\ERN\ERN_C_WS_180\FormalIdentifierType $formalIdentifier)
    {
        $this->formalIdentifier = $formalIdentifier;
        return $this;
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier for the above Identifier.
     *
     * @return \DDEX\ERN\ERN_C_WS_180\ProprietaryIdWithOptionalAttributeType
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier for the above Identifier.
     *
     * @param \DDEX\ERN\ERN_C_WS_180\ProprietaryIdWithOptionalAttributeType $proprietaryId
     * @return self
     */
    public function setProprietaryId(\DDEX\ERN\ERN_C_WS_180\ProprietaryIdWithOptionalAttributeType $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }

    /**
     * Adds as landingPage
     *
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @return self
     * @param string $landingPage
     */
    public function addToLandingPage($landingPage)
    {
        $this->landingPage[] = $landingPage;
        return $this;
    }

    /**
     * isset landingPage
     *
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLandingPage($index)
    {
        return isset($this->landingPage[$index]);
    }

    /**
     * unset landingPage
     *
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLandingPage($index)
    {
        unset($this->landingPage[$index]);
    }

    /**
     * Gets as landingPage
     *
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @return string[]
     */
    public function getLandingPage()
    {
        return $this->landingPage;
    }

    /**
     * Sets a new landingPage
     *
     * A URL for the WebPage where the item identified by the Identifier can be found on the DSP's system.
     *
     * @param string[] $landingPage
     * @return self
     */
    public function setLandingPage(array $landingPage = null)
    {
        $this->landingPage = $landingPage;
        return $this;
    }
}


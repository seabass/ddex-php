<?php

namespace DDEX\MWN\MWN_US_LIC_101;

/**
 * Class representing RightsAgreementIdType
 *
 * A Composite containing details of Identifiers of a License, Claim, RightShare or contract.
 * XSD Type: RightsAgreementId
 */
class RightsAgreementIdType
{
    /**
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @var \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $proprietaryId
     */
    private $proprietaryId = [
        
    ];

    /**
     * Adds as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @return self
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $proprietaryId
     */
    public function addToProprietaryId(\DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType $proprietaryId)
    {
        $this->proprietaryId[] = $proprietaryId;
        return $this;
    }

    /**
     * isset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProprietaryId($index)
    {
        return isset($this->proprietaryId[$index]);
    }

    /**
     * unset proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProprietaryId($index)
    {
        unset($this->proprietaryId[$index]);
    }

    /**
     * Gets as proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @return \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[]
     */
    public function getProprietaryId()
    {
        return $this->proprietaryId;
    }

    /**
     * Sets a new proprietaryId
     *
     * A Composite containing details of a ProprietaryIdentifier of the License, Claim, RightShare or contract.
     *
     * @param \DDEX\MWN\MWN_US_LIC_101\ProprietaryIdType[] $proprietaryId
     * @return self
     */
    public function setProprietaryId(array $proprietaryId)
    {
        $this->proprietaryId = $proprietaryId;
        return $this;
    }
}


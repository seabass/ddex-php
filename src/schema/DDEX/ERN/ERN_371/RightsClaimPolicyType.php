<?php

namespace DDEX\ERN\ERN_371;

/**
 * Class representing RightsClaimPolicyType
 *
 * A Composite containing details of a rights claim
 *  policy.
 * XSD Type: RightsClaimPolicy
 */
class RightsClaimPolicyType
{
    /**
     * A Composite containing details of
     *  conditions.
     *
     * @var \DDEX\ERN\ERN_371\ConditionType $condition
     */
    private $condition = null;

    /**
     * A Type of rights claim
     *  policy.
     *
     * @var string $rightsClaimPolicyType
     */
    private $rightsClaimPolicyType = null;

    /**
     * Gets as condition
     *
     * A Composite containing details of
     *  conditions.
     *
     * @return \DDEX\ERN\ERN_371\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of
     *  conditions.
     *
     * @param \DDEX\ERN\ERN_371\ConditionType $condition
     * @return self
     */
    public function setCondition(\DDEX\ERN\ERN_371\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as rightsClaimPolicyType
     *
     * A Type of rights claim
     *  policy.
     *
     * @return string
     */
    public function getRightsClaimPolicyType()
    {
        return $this->rightsClaimPolicyType;
    }

    /**
     * Sets a new rightsClaimPolicyType
     *
     * A Type of rights claim
     *  policy.
     *
     * @param string $rightsClaimPolicyType
     * @return self
     */
    public function setRightsClaimPolicyType($rightsClaimPolicyType)
    {
        $this->rightsClaimPolicyType = $rightsClaimPolicyType;
        return $this;
    }
}


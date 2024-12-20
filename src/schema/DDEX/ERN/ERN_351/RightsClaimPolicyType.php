<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing RightsClaimPolicyType
 *
 * A ddex:Composite containing details of a rights claim policy.
 * XSD Type: RightsClaimPolicy
 */
class RightsClaimPolicyType
{
    /**
     * A ddex:Composite containing details of conditions.
     *
     * @var \DDEX\ERN\ERN_351\ConditionType $condition
     */
    private $condition = null;

    /**
     * A ddex:Type of rights claim policy.
     *
     * @var string $rightsClaimPolicyType
     */
    private $rightsClaimPolicyType = null;

    /**
     * Gets as condition
     *
     * A ddex:Composite containing details of conditions.
     *
     * @return \DDEX\ERN\ERN_351\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A ddex:Composite containing details of conditions.
     *
     * @param \DDEX\ERN\ERN_351\ConditionType $condition
     * @return self
     */
    public function setCondition(\DDEX\ERN\ERN_351\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as rightsClaimPolicyType
     *
     * A ddex:Type of rights claim policy.
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
     * A ddex:Type of rights claim policy.
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


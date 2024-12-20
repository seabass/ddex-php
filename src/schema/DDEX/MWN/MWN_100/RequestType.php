<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RequestType
 *
 * A Composite containing details of a request for a claim for RightShares.
 * XSD Type: Request
 */
class RequestType
{
    /**
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @var string[] $requestWorkReference
     */
    private $requestWorkReference = [
        
    ];

    /**
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @var string[] $requestResourceReference
     */
    private $requestResourceReference = [
        
    ];

    /**
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @var string[] $requestReleaseReference
     */
    private $requestReleaseReference = [
        
    ];

    /**
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @var \DDEX\MWN\MWN_100\ConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * A reason for the Request.
     *
     * @var string $requestReason
     */
    private $requestReason = null;

    /**
     * Adds as requestWorkReference
     *
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return self
     * @param string $requestWorkReference
     */
    public function addToRequestWorkReference($requestWorkReference)
    {
        $this->requestWorkReference[] = $requestWorkReference;
        return $this;
    }

    /**
     * isset requestWorkReference
     *
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestWorkReference($index)
    {
        return isset($this->requestWorkReference[$index]);
    }

    /**
     * unset requestWorkReference
     *
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestWorkReference($index)
    {
        unset($this->requestWorkReference[$index]);
    }

    /**
     * Gets as requestWorkReference
     *
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @return string[]
     */
    public function getRequestWorkReference()
    {
        return $this->requestWorkReference;
    }

    /**
     * Sets a new requestWorkReference
     *
     * A Reference for a Work (specific to this Message). This is a LocalMusicalWorkAnchorReference starting with the letter W.
     *
     * @param string $requestWorkReference
     * @return self
     */
    public function setRequestWorkReference(array $requestWorkReference = null)
    {
        $this->requestWorkReference = $requestWorkReference;
        return $this;
    }

    /**
     * Adds as requestResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return self
     * @param string $requestResourceReference
     */
    public function addToRequestResourceReference($requestResourceReference)
    {
        $this->requestResourceReference[] = $requestResourceReference;
        return $this;
    }

    /**
     * isset requestResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestResourceReference($index)
    {
        return isset($this->requestResourceReference[$index]);
    }

    /**
     * unset requestResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestResourceReference($index)
    {
        unset($this->requestResourceReference[$index]);
    }

    /**
     * Gets as requestResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @return string[]
     */
    public function getRequestResourceReference()
    {
        return $this->requestResourceReference;
    }

    /**
     * Sets a new requestResourceReference
     *
     * A Reference for a Resource (specific to this Message). This is a LocalResourceAnchorReference starting with the letter A.
     *
     * @param string $requestResourceReference
     * @return self
     */
    public function setRequestResourceReference(array $requestResourceReference = null)
    {
        $this->requestResourceReference = $requestResourceReference;
        return $this;
    }

    /**
     * Adds as requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return self
     * @param string $requestReleaseReference
     */
    public function addToRequestReleaseReference($requestReleaseReference)
    {
        $this->requestReleaseReference[] = $requestReleaseReference;
        return $this;
    }

    /**
     * isset requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestReleaseReference($index)
    {
        return isset($this->requestReleaseReference[$index]);
    }

    /**
     * unset requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestReleaseReference($index)
    {
        unset($this->requestReleaseReference[$index]);
    }

    /**
     * Gets as requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @return string[]
     */
    public function getRequestReleaseReference()
    {
        return $this->requestReleaseReference;
    }

    /**
     * Sets a new requestReleaseReference
     *
     * A Reference for a Release (specific to this Message). This is a LocalReleaseAnchorReference starting with the letter R.
     *
     * @param string $requestReleaseReference
     * @return self
     */
    public function setRequestReleaseReference(array $requestReleaseReference = null)
    {
        $this->requestReleaseReference = $requestReleaseReference;
        return $this;
    }

    /**
     * Adds as condition
     *
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\ConditionType $condition
     */
    public function addToCondition(\DDEX\MWN\MWN_100\ConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @return \DDEX\MWN\MWN_100\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A Composite containing details of conditions and/or limitations for Usages. If more than one Condition is provided the MessageSender asks for a claim for any or all of these and, in effect, the Conditions are conjoined by an 'or'.
     *
     * @param \DDEX\MWN\MWN_100\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as requestReason
     *
     * A reason for the Request.
     *
     * @return string
     */
    public function getRequestReason()
    {
        return $this->requestReason;
    }

    /**
     * Sets a new requestReason
     *
     * A reason for the Request.
     *
     * @param string $requestReason
     * @return self
     */
    public function setRequestReason($requestReason)
    {
        $this->requestReason = $requestReason;
        return $this;
    }
}


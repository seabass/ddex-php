<?php

namespace DDEX\MWN\MWN_100;

/**
 * Class representing RequestListType
 *
 * A Composite containing details of one or more requests for a claim for RightShares.
 * XSD Type: RequestList
 */
class RequestListType
{
    /**
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @var \DDEX\MWN\MWN_100\RequestType[] $request
     */
    private $request = [
        
    ];

    /**
     * Adds as request
     *
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @return self
     * @param \DDEX\MWN\MWN_100\RequestType $request
     */
    public function addToRequest(\DDEX\MWN\MWN_100\RequestType $request)
    {
        $this->request[] = $request;
        return $this;
    }

    /**
     * isset request
     *
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequest($index)
    {
        return isset($this->request[$index]);
    }

    /**
     * unset request
     *
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequest($index)
    {
        unset($this->request[$index]);
    }

    /**
     * Gets as request
     *
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @return \DDEX\MWN\MWN_100\RequestType[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * A Composite containing details of a request for a claim for RightShares.
     *
     * @param \DDEX\MWN\MWN_100\RequestType[] $request
     * @return self
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
        return $this;
    }
}


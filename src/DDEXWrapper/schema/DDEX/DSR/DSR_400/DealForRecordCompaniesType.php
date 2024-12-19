<?php

namespace DDEX\DSR\DSR_400;

/**
 * Class representing DealForRecordCompaniesType
 *
 * A ddex:Composite containing details of the terms and conditions of a ddex:Deal made between a ddex:DSP (as ddex:Licensee) and a ddex:Licensor of ddex:Works or ddex:Releases.
 * XSD Type: DealForRecordCompanies
 */
class DealForRecordCompaniesType
{
    /**
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal.
     *
     * @var \DDEX\DSR\DSR_400\DetailedDealType $detailedDeal
     */
    private $detailedDeal = null;

    /**
     * Gets as detailedDeal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal.
     *
     * @return \DDEX\DSR\DSR_400\DetailedDealType
     */
    public function getDetailedDeal()
    {
        return $this->detailedDeal;
    }

    /**
     * Sets a new detailedDeal
     *
     * A ddex:Composite containing details of the terms and conditions of the ddex:Deal.
     *
     * @param \DDEX\DSR\DSR_400\DetailedDealType $detailedDeal
     * @return self
     */
    public function setDetailedDeal(\DDEX\DSR\DSR_400\DetailedDealType $detailedDeal)
    {
        $this->detailedDeal = $detailedDeal;
        return $this;
    }
}


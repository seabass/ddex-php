<?php

namespace DDEX\DSR\DSR_420;

/**
 * Class representing DealForRecordCompaniesType
 *
 * A Composite containing details of the terms and conditions of a Deal made between a DSP (as Licensee) and a Licensor of Works or Releases.
 * XSD Type: DealForRecordCompanies
 */
class DealForRecordCompaniesType
{
    /**
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @var \DDEX\DSR\DSR_420\DetailedDealType $detailedDeal
     */
    private $detailedDeal = null;

    /**
     * Gets as detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @return \DDEX\DSR\DSR_420\DetailedDealType
     */
    public function getDetailedDeal()
    {
        return $this->detailedDeal;
    }

    /**
     * Sets a new detailedDeal
     *
     * A Composite containing details of the terms and conditions of the Deal.
     *
     * @param \DDEX\DSR\DSR_420\DetailedDealType $detailedDeal
     * @return self
     */
    public function setDetailedDeal(\DDEX\DSR\DSR_420\DetailedDealType $detailedDeal)
    {
        $this->detailedDeal = $detailedDeal;
        return $this;
    }
}


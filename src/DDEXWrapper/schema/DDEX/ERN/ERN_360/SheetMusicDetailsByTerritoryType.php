<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing SheetMusicDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors, Dates and other attributes of a SheetMusic which may vary according to Territory of release.
 * XSD Type: SheetMusicDetailsByTerritory
 */
class SheetMusicDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the SheetMusicDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\TitleType[] $title
     */
    private $title = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was originally published, whether for physical or electronic/online distribution.
     *
     * @var \DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A Composite containing details of a FulfillmentDate.
     *
     * @var \DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @var \DDEX\ERN\ERN_360\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ERN\ERN_360\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing technical details of the SheetMusic.
     *
     * @var \DDEX\ERN\ERN_360\TechnicalSheetMusicDetailsType[] $technicalSheetMusicDetails
     */
    private $technicalSheetMusicDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the SheetMusicDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the SheetMusicDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as territoryCode
     *
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A Territory to which the SheetMusic details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A Territory to which the SheetMusic details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as title
     *
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TitleType $title
     */
    public function addToTitle(\DDEX\ERN\ERN_360\TitleType $title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\TitleType[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A Composite containing details of a Title of the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\TitleType[] $title
     * @return self
     */
    public function setTitle(array $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DDEX\ERN\ERN_360\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A Composite containing details of a Contributor to the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\ResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DDEX\ERN\ERN_360\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A Composite containing details of an indirect Contributor to the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\CLineType $cLine
     */
    public function addToCLine(\DDEX\ERN\ERN_360\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A Composite containing details of the CLine for the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\CourtesyLineType
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A Composite containing an Annotation which acknowledges record companies and/or other Parties giving permission for Artists or others featured in the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DDEX\ERN\ERN_360\CourtesyLineType $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was originally published, whether for physical or electronic/online distribution.
     *
     * @return \DDEX\ERN\ERN_360\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the SheetMusic was originally published, whether for physical or electronic/online distribution.
     *
     * @param \DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DDEX\ERN\ERN_360\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @return \DDEX\ERN\ERN_360\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A Composite containing details of a FulfillmentDate.
     *
     * @param \DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DDEX\ERN\ERN_360\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\GenreType $genre
     */
    public function addToGenre(\DDEX\ERN\ERN_360\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @return \DDEX\ERN\ERN_360\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A Composite containing details of a Genre to which the SheetMusic belongs.
     *
     * @param \DDEX\ERN\ERN_360\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ERN\ERN_360\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentalWarningType($index)
    {
        return isset($this->parentalWarningType[$index]);
    }

    /**
     * unset parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentalWarningType($index)
    {
        unset($this->parentalWarningType[$index]);
    }

    /**
     * Gets as parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ERN\ERN_360\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A Composite containing details of the classification of the SheetMusic according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ERN\ERN_360\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as technicalSheetMusicDetails
     *
     * A Composite containing technical details of the SheetMusic.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TechnicalSheetMusicDetailsType $technicalSheetMusicDetails
     */
    public function addToTechnicalSheetMusicDetails(\DDEX\ERN\ERN_360\TechnicalSheetMusicDetailsType $technicalSheetMusicDetails)
    {
        $this->technicalSheetMusicDetails[] = $technicalSheetMusicDetails;
        return $this;
    }

    /**
     * isset technicalSheetMusicDetails
     *
     * A Composite containing technical details of the SheetMusic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalSheetMusicDetails($index)
    {
        return isset($this->technicalSheetMusicDetails[$index]);
    }

    /**
     * unset technicalSheetMusicDetails
     *
     * A Composite containing technical details of the SheetMusic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalSheetMusicDetails($index)
    {
        unset($this->technicalSheetMusicDetails[$index]);
    }

    /**
     * Gets as technicalSheetMusicDetails
     *
     * A Composite containing technical details of the SheetMusic.
     *
     * @return \DDEX\ERN\ERN_360\TechnicalSheetMusicDetailsType[]
     */
    public function getTechnicalSheetMusicDetails()
    {
        return $this->technicalSheetMusicDetails;
    }

    /**
     * Sets a new technicalSheetMusicDetails
     *
     * A Composite containing technical details of the SheetMusic.
     *
     * @param \DDEX\ERN\ERN_360\TechnicalSheetMusicDetailsType[] $technicalSheetMusicDetails
     * @return self
     */
    public function setTechnicalSheetMusicDetails(array $technicalSheetMusicDetails = null)
    {
        $this->technicalSheetMusicDetails = $technicalSheetMusicDetails;
        return $this;
    }
}


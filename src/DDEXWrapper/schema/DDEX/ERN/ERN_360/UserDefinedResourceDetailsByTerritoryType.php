<?php

namespace DDEX\ERN\ERN_360;

/**
 * Class representing UserDefinedResourceDetailsByTerritoryType
 *
 * A Composite containing details of Descriptors, Dates and other attributes of a UserDefinedResource application which may vary according to Territory of release.
 * XSD Type: UserDefinedResourceDetailsByTerritory
 */
class UserDefinedResourceDetailsByTerritoryType
{
    /**
     * The Language and script for the Elements of the UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A Composite containing details of a Contributor to the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A Composite containing details of a UserDefinedValue.
     *
     * @var \DDEX\ERN\ERN_360\UserDefinedValueType[] $userDefinedValue
     */
    private $userDefinedValue = [
        
    ];

    /**
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A Composite containing details of the CLine for the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A Composite containing details of the Date and Place of the Event in which the UserDefinedResource was originally published, whether for physical or electronic/online distribution.
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
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @var \DDEX\ERN\ERN_360\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A Composite containing details of a Synopsis of the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
     *
     * @var \DDEX\ERN\ERN_360\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ERN\ERN_360\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_360\TechnicalUserDefinedResourceDetailsType[] $technicalUserDefinedResourceDetails
     */
    private $technicalUserDefinedResourceDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or ExcludedTerritory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * A Territory to which the UserDefinedResource details do not apply (represented by an ISO 3166-1 TerritoryCode). Either this Element or Territory shall be present, but not both.
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
     * Adds as resourceContributor
     *
     * A Composite containing details of a Contributor to the UserDefinedResource.
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
     * A Composite containing details of a Contributor to the UserDefinedResource.
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
     * A Composite containing details of a Contributor to the UserDefinedResource.
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
     * A Composite containing details of a Contributor to the UserDefinedResource.
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
     * A Composite containing details of a Contributor to the UserDefinedResource.
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
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
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
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
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
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
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
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
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
     * A Composite containing details of an indirect Contributor to the UserDefinedResource.
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
     * Adds as userDefinedValue
     *
     * A Composite containing details of a UserDefinedValue.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\UserDefinedValueType $userDefinedValue
     */
    public function addToUserDefinedValue(\DDEX\ERN\ERN_360\UserDefinedValueType $userDefinedValue)
    {
        $this->userDefinedValue[] = $userDefinedValue;
        return $this;
    }

    /**
     * isset userDefinedValue
     *
     * A Composite containing details of a UserDefinedValue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserDefinedValue($index)
    {
        return isset($this->userDefinedValue[$index]);
    }

    /**
     * unset userDefinedValue
     *
     * A Composite containing details of a UserDefinedValue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserDefinedValue($index)
    {
        unset($this->userDefinedValue[$index]);
    }

    /**
     * Gets as userDefinedValue
     *
     * A Composite containing details of a UserDefinedValue.
     *
     * @return \DDEX\ERN\ERN_360\UserDefinedValueType[]
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A Composite containing details of a UserDefinedValue.
     *
     * @param \DDEX\ERN\ERN_360\UserDefinedValueType[] $userDefinedValue
     * @return self
     */
    public function setUserDefinedValue(array $userDefinedValue = null)
    {
        $this->userDefinedValue = $userDefinedValue;
        return $this;
    }

    /**
     * Adds as pLine
     *
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\PLineType $pLine
     */
    public function addToPLine(\DDEX\ERN\ERN_360\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPLine($index)
    {
        return isset($this->pLine[$index]);
    }

    /**
     * unset pLine
     *
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPLine($index)
    {
        unset($this->pLine[$index]);
    }

    /**
     * Gets as pLine
     *
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_360\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A Composite containing details of the PLine for the UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_360\PLineType[] $pLine
     * @return self
     */
    public function setPLine(array $pLine = null)
    {
        $this->pLine = $pLine;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A Composite containing details of the CLine for the UserDefinedResource.
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
     * A Composite containing details of the CLine for the UserDefinedResource.
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
     * A Composite containing details of the CLine for the UserDefinedResource.
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
     * A Composite containing details of the CLine for the UserDefinedResource.
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
     * A Composite containing details of the CLine for the UserDefinedResource.
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
     * Gets as originalResourceReleaseDate
     *
     * A Composite containing details of the Date and Place of the Event in which the UserDefinedResource was originally published, whether for physical or electronic/online distribution.
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
     * A Composite containing details of the Date and Place of the Event in which the UserDefinedResource was originally published, whether for physical or electronic/online distribution.
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
     * Adds as keywords
     *
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\ERN\ERN_360\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @return \DDEX\ERN\ERN_360\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A Composite containing details of a Description of the UserDefinedResource containing Keywords.
     *
     * @param \DDEX\ERN\ERN_360\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A Composite containing details of a Synopsis of the UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_360\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A Composite containing details of a Synopsis of the UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_360\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\ERN\ERN_360\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
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
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
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
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
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
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
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
     * A Composite containing details of a Genre to which the UserDefinedResource belongs.
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
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A Composite containing details of the classification of the UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * Adds as technicalUserDefinedResourceDetails
     *
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_360\TechnicalUserDefinedResourceDetailsType $technicalUserDefinedResourceDetails
     */
    public function addToTechnicalUserDefinedResourceDetails(\DDEX\ERN\ERN_360\TechnicalUserDefinedResourceDetailsType $technicalUserDefinedResourceDetails)
    {
        $this->technicalUserDefinedResourceDetails[] = $technicalUserDefinedResourceDetails;
        return $this;
    }

    /**
     * isset technicalUserDefinedResourceDetails
     *
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalUserDefinedResourceDetails($index)
    {
        return isset($this->technicalUserDefinedResourceDetails[$index]);
    }

    /**
     * unset technicalUserDefinedResourceDetails
     *
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalUserDefinedResourceDetails($index)
    {
        unset($this->technicalUserDefinedResourceDetails[$index]);
    }

    /**
     * Gets as technicalUserDefinedResourceDetails
     *
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_360\TechnicalUserDefinedResourceDetailsType[]
     */
    public function getTechnicalUserDefinedResourceDetails()
    {
        return $this->technicalUserDefinedResourceDetails;
    }

    /**
     * Sets a new technicalUserDefinedResourceDetails
     *
     * A Composite containing technical details of the UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_360\TechnicalUserDefinedResourceDetailsType[] $technicalUserDefinedResourceDetails
     * @return self
     */
    public function setTechnicalUserDefinedResourceDetails(array $technicalUserDefinedResourceDetails = null)
    {
        $this->technicalUserDefinedResourceDetails = $technicalUserDefinedResourceDetails;
        return $this;
    }
}


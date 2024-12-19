<?php

namespace DDEX\ERN\ERN_351;

/**
 * Class representing UserDefinedResourceDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors, Dates and other attributes of a ddex:UserDefinedResource application which may vary according to ddex:Territory of release.
 * XSD Type: UserDefinedResourceDetailsByTerritory
 */
class UserDefinedResourceDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_351\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @var \DDEX\ddexC\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @var \DDEX\ddexC\UserDefinedValueType[] $userDefinedValue
     */
    private $userDefinedValue = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
     *
     * @var \DDEX\ddexC\PLineType[] $pLine
     */
    private $pLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
     *
     * @var \DDEX\ddexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:UserDefinedResource was originally published, whether for physical or electronic/online distribution.
     *
     * @var \DDEX\ddexC\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
     *
     * @var \DDEX\ddexC\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:UserDefinedResource.
     *
     * @var \DDEX\ddexC\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
     *
     * @var \DDEX\ddexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DDEX\ddexC\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
     *
     * @var \DDEX\ERN\ERN_351\TechnicalUserDefinedResourceDetailsType[] $technicalUserDefinedResourceDetails
     */
    private $technicalUserDefinedResourceDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * The ddex:Language and script for the ddex:Elements of the ddexC:UserDefinedResourceDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Territory to which the ddex:UserDefinedResource details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
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
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_351\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DDEX\ERN\ERN_351\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_351\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_351\ResourceContributorType[] $resourceContributor
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ddexC\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DDEX\ddexC\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @return \DDEX\ddexC\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:UserDefinedResource.
     *
     * @param \DDEX\ddexC\IndirectResourceContributorType[] $indirectResourceContributor
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
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return self
     * @param \DDEX\ddexC\UserDefinedValueType $userDefinedValue
     */
    public function addToUserDefinedValue(\DDEX\ddexC\UserDefinedValueType $userDefinedValue)
    {
        $this->userDefinedValue[] = $userDefinedValue;
        return $this;
    }

    /**
     * isset userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
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
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
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
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @return \DDEX\ddexC\UserDefinedValueType[]
     */
    public function getUserDefinedValue()
    {
        return $this->userDefinedValue;
    }

    /**
     * Sets a new userDefinedValue
     *
     * A ddex:Composite containing details of a ddex:UserDefinedValue.
     *
     * @param \DDEX\ddexC\UserDefinedValueType[] $userDefinedValue
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
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ddexC\PLineType $pLine
     */
    public function addToPLine(\DDEX\ddexC\PLineType $pLine)
    {
        $this->pLine[] = $pLine;
        return $this;
    }

    /**
     * isset pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
     *
     * @return \DDEX\ddexC\PLineType[]
     */
    public function getPLine()
    {
        return $this->pLine;
    }

    /**
     * Sets a new pLine
     *
     * A ddex:Composite containing details of the ddex:PLine for the ddex:UserDefinedResource.
     *
     * @param \DDEX\ddexC\PLineType[] $pLine
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
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ddexC\CLineType $cLine
     */
    public function addToCLine(\DDEX\ddexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
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
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
     *
     * @return \DDEX\ddexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:UserDefinedResource.
     *
     * @param \DDEX\ddexC\CLineType[] $cLine
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
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:UserDefinedResource was originally published, whether for physical or electronic/online distribution.
     *
     * @return \DDEX\ddexC\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:UserDefinedResource was originally published, whether for physical or electronic/online distribution.
     *
     * @param \DDEX\ddexC\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DDEX\ddexC\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @return \DDEX\ddexC\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @param \DDEX\ddexC\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DDEX\ddexC\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
     *
     * @return self
     * @param \DDEX\ddexC\KeywordsType $keywords
     */
    public function addToKeywords(\DDEX\ddexC\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
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
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
     *
     * @return \DDEX\ddexC\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:UserDefinedResource containing ddex:Keywords.
     *
     * @param \DDEX\ddexC\KeywordsType[] $keywords
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
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:UserDefinedResource.
     *
     * @return \DDEX\ddexC\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:UserDefinedResource.
     *
     * @param \DDEX\ddexC\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DDEX\ddexC\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
     *
     * @return self
     * @param \DDEX\ddexC\GenreType $genre
     */
    public function addToGenre(\DDEX\ddexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
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
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
     *
     * @return \DDEX\ddexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:UserDefinedResource belongs.
     *
     * @param \DDEX\ddexC\GenreType[] $genre
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
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DDEX\ddexC\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DDEX\ddexC\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
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
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DDEX\ddexC\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:UserDefinedResource according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DDEX\ddexC\ParentalWarningTypeType[] $parentalWarningType
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
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
     *
     * @return self
     * @param \DDEX\ERN\ERN_351\TechnicalUserDefinedResourceDetailsType $technicalUserDefinedResourceDetails
     */
    public function addToTechnicalUserDefinedResourceDetails(\DDEX\ERN\ERN_351\TechnicalUserDefinedResourceDetailsType $technicalUserDefinedResourceDetails)
    {
        $this->technicalUserDefinedResourceDetails[] = $technicalUserDefinedResourceDetails;
        return $this;
    }

    /**
     * isset technicalUserDefinedResourceDetails
     *
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
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
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
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
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
     *
     * @return \DDEX\ERN\ERN_351\TechnicalUserDefinedResourceDetailsType[]
     */
    public function getTechnicalUserDefinedResourceDetails()
    {
        return $this->technicalUserDefinedResourceDetails;
    }

    /**
     * Sets a new technicalUserDefinedResourceDetails
     *
     * A ddex:Composite containing technical details of the ddex:UserDefinedResource.
     *
     * @param \DDEX\ERN\ERN_351\TechnicalUserDefinedResourceDetailsType[] $technicalUserDefinedResourceDetails
     * @return self
     */
    public function setTechnicalUserDefinedResourceDetails(array $technicalUserDefinedResourceDetails = null)
    {
        $this->technicalUserDefinedResourceDetails = $technicalUserDefinedResourceDetails;
        return $this;
    }
}


<?php

namespace DDEX\RIN\RIN_210;

/**
 * Class representing ProjectListType
 *
 * A Composite containing details of one or more Projects.
 * XSD Type: ProjectList
 */
class ProjectListType
{
    /**
     * The Language and script for the Elements of the ProjectList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Composite containing details of a Project.
     *
     * @var \DDEX\RIN\RIN_210\ProjectType[] $project
     */
    private $project = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the ProjectList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the ProjectList as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Adds as project
     *
     * A Composite containing details of a Project.
     *
     * @return self
     * @param \DDEX\RIN\RIN_210\ProjectType $project
     */
    public function addToProject(\DDEX\RIN\RIN_210\ProjectType $project)
    {
        $this->project[] = $project;
        return $this;
    }

    /**
     * isset project
     *
     * A Composite containing details of a Project.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProject($index)
    {
        return isset($this->project[$index]);
    }

    /**
     * unset project
     *
     * A Composite containing details of a Project.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProject($index)
    {
        unset($this->project[$index]);
    }

    /**
     * Gets as project
     *
     * A Composite containing details of a Project.
     *
     * @return \DDEX\RIN\RIN_210\ProjectType[]
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Sets a new project
     *
     * A Composite containing details of a Project.
     *
     * @param \DDEX\RIN\RIN_210\ProjectType[] $project
     * @return self
     */
    public function setProject(array $project)
    {
        $this->project = $project;
        return $this;
    }
}


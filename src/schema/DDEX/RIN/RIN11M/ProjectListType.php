<?php

namespace DDEX\RIN\RIN11M;

/**
 * Class representing ProjectListType
 *
 * A Composite containing details of one or more Projects.
 * XSD Type: ProjectList
 */
class ProjectListType
{
    /**
     * A Composite containing details of a Project.
     *
     * @var \DDEX\RIN\RIN11M\ProjectType[] $project
     */
    private $project = [
        
    ];

    /**
     * Adds as project
     *
     * A Composite containing details of a Project.
     *
     * @return self
     * @param \DDEX\RIN\RIN11M\ProjectType $project
     */
    public function addToProject(\DDEX\RIN\RIN11M\ProjectType $project)
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
     * @return \DDEX\RIN\RIN11M\ProjectType[]
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
     * @param \DDEX\RIN\RIN11M\ProjectType[] $project
     * @return self
     */
    public function setProject(array $project)
    {
        $this->project = $project;
        return $this;
    }
}


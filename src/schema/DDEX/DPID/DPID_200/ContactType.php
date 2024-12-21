<?php

namespace DDEX\DPID\DPID_200;

/**
 * Class representing ContactType
 *
 * A Composite containing details of a Person that can be contacted for specific purposes.
 * XSD Type: Contact
 */
class ContactType
{
    /**
     * The role played by the contact person.
     *
     * @var string $role
     */
    private $role = null;

    /**
     * The Name of the contact person.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * An EmailAddress of the contact person.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * A PhoneNumber of the contact person.
     *
     * @var string $telephone
     */
    private $telephone = null;

    /**
     * An Address of the contact person.
     *
     * @var string $address
     */
    private $address = null;

    /**
     * An Annotation of the contact person.
     *
     * @var string $annotation
     */
    private $annotation = null;

    /**
     * Gets as role
     *
     * The role played by the contact person.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The role played by the contact person.
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as name
     *
     * The Name of the contact person.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The Name of the contact person.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as email
     *
     * An EmailAddress of the contact person.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * An EmailAddress of the contact person.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as telephone
     *
     * A PhoneNumber of the contact person.
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * A PhoneNumber of the contact person.
     *
     * @param string $telephone
     * @return self
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as address
     *
     * An Address of the contact person.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * An Address of the contact person.
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as annotation
     *
     * An Annotation of the contact person.
     *
     * @return string
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * An Annotation of the contact person.
     *
     * @param string $annotation
     * @return self
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }
}


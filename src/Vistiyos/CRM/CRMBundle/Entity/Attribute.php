<?php

namespace Vistiyos\CRM\CRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attribute
 *
 * @ORM\Table(name="attributes")
 * @ORM\Entity
 * @ORM\MappedSuperClass
 */
class Attribute
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", length=255)
     */
    private $fieldType;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="default_value", type="string", length=255)
     */
    private $defaultValue;

    /**
     * @var boolean
     * @ORM\Column(name="required",type="boolean")
     */
    private $required;

    /**
     * @var array
     * @ORM\Column(name="values_allowed",type="array")
     */
    private $valuesAllowed;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fieldType
     *
     * @param string $fieldType
     * @return $this
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * Get fieldType
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Attribute
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Check whether or not an attribute is required
     *
     * @return boolean
     */
    public function isRequired()
    {
        return $this->required;
    }

    /**
     * Mark this attribute as required
     *
     * @param boolean $required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get values allowed
     *
     * @return array
     */
    public function getValuesAllowed()
    {
        return $this->valuesAllowed;
    }

    /**
     * @param array $valuesAllowed
     * @return $this
     */
    public function setValuesAllowed($valuesAllowed)
    {
        $this->valuesAllowed = $valuesAllowed;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }


}

<?php

namespace Vistiyos\CRM\CRMBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactAttributeValue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ContactAttributeValue
{
    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text")
     */
    private $value;

    /**
     * @var Attribute
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Vistiyos\CRM\CRMBundle\Entity\Attribute")
     * @ORM\JoinColumn(name="attribute_id", referencedColumnName="id", nullable=false)
     */
    private $attribute;

    /**
     * @var Contact
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="Vistiyos\CRM\CRMBundle\Entity\Contact")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id", nullable=false)
     */
    private $contact;


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
     * Set value
     *
     * @param string $value
     * @return ContactAttributeValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}

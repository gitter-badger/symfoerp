<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 17/6/15
 * Time: 18:47
 */

namespace Vistiyos\UI\UIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class User
 * @package Vistiyos\ERP\ERPBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table("users")
 */
class User extends BaseUser
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank(message="profile.form.name.empty_error",groups={"Registration","Profile"})
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="locale", type="string",length=2)
     */
    protected $locale;

    /**
     * Get name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}
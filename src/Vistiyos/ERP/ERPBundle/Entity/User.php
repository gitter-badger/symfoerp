<?php
/**
 * Created by PhpStorm.
 * User: vistiyos
 * Date: 17/6/15
 * Time: 18:47
 */

namespace Vistiyos\ERP\ERPBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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

}
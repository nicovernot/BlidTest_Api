<?php


namespace App\Entity;


use App\Model\UserModel;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends UserModel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updatedAt;
    /**
     * @ORM\Column(unique=true)
     */
    protected $email;
    /**
     * @ORM\Column(length=50, unique=true)
     */
    protected $username;
    /**
     * @ORM\Column()
     */
    protected $password;
    /**
     * @ORM\Column(type="array")
     */
    protected $roles;
}
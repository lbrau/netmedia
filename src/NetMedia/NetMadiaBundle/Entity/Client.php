<?php

namespace NetMedia\NetMadiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NetMedia\NetMadiaBundle\Entity\ClientRepository")
 */
class Client
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
    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Media", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $consoMedias;
    
//    /**
//    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Media", cascade={"persist"})
//    * @ORM\JoinColumn(nullable=true)
//    */
//    private $signalerMedias;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=100)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="cb", type="string", length=255)
     */
    private $cb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;


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
     * Set string
     *
     * @param string $string
     * @return Client
     */
    public function setString($string)
    {
        $this->string = $string;

        return $this;
    }

    /**
     * Get string
     *
     * @return string 
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Client
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set cb
     *
     * @param string $cb
     * @return Client
     */
    public function setCb($cb)
    {
        $this->cb = $cb;

        return $this;
    }

    /**
     * Get cb
     *
     * @return string 
     */
    public function getCb()
    {
        return $this->cb;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Client
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }
}

<?php

namespace NetMedia\NetMadiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilAdmin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NetMedia\NetMadiaBundle\Entity\ProfilAdminRepository")
 */
class ProfilAdmin
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
    private $manageMedias;
    
    /**
    * @ORM\OneToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Role", mappedBy="profilAdmins",cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=150)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150)
     */
    private $mail;

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
     * Set pseudo
     *
     * @param string $pseudo
     * @return ProfilAdmin
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
     * @return ProfilAdmin
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
     * Set actif
     *
     * @param boolean $actif
     * @return ProfilAdmin
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

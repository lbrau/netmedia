<?php

namespace NetMedia\NetMadiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NetMedia\NetMadiaBundle\Entity\RoleRepository")
 */
class Role
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
    * @ORM\ManyToOne(targetEntity="NetMedia\NetMadiaBundle\Entity\ProfilAdmin", inversedBy="role", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $profilAdmins;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=150)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="constanteSysteme", type="string", length=150)
     */
    private $constanteSysteme;

    /**
     * @var string
     *
     * @ORM\Column(name="actif", type="boolean", length=255)
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
     * Set libelle
     *
     * @param string $libelle
     * @return Role
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set constanteSysteme
     *
     * @param string $constanteSysteme
     * @return Role
     */
    public function setConstanteSysteme($constanteSysteme)
    {
        $this->constanteSysteme = $constanteSysteme;

        return $this;
    }

    /**
     * Get constanteSysteme
     *
     * @return string 
     */
    public function getConstanteSysteme()
    {
        return $this->constanteSysteme;
    }

    /**
     * Set actif
     *
     * @param string $actif
     * @return Role
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return string 
     */
    public function getActif()
    {
        return $this->actif;
    }
}

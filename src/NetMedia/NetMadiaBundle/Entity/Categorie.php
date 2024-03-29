<?php

namespace NetMedia\NetMadiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NetMedia\NetMadiaBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
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
     * Set libelle
     *
     * @param string $libelle
     * @return Categorie
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
     * Get libelle
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }
    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Categorie
     */
    public function setFile($actif)
    {
        $this->file = $actif;

        return $this;
    }
    
    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Categorie
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

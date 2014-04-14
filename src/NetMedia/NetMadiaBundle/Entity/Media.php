<?php

namespace NetMedia\NetMadiaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Media
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="NetMedia\NetMadiaBundle\Entity\MediaRepository")
 */
class Media
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
    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Client", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $clients;
    
    /**
    * @Assert\File(maxSize="6000000000000")
    */
    private $file;
    
//    /**
//     * @Assert\File(maxSize="6000000000000")
//     */
//    public $file;
    
    /**
    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Producteur", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $producteurs;
    
    /**
    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\ProfilAdmin", cascade={"persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $profilAdmins;
    
//    /**
//    * @ORM\ManyToMany(targetEntity="NetMedia\NetMadiaBundle\Entity\Client", cascade={"persist"})
//    * @ORM\JoinColumn(nullable=true)
//    */
//    private $signalClients;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=150)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="jacket", type="string", length=255)
     */
    private $jacket;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;
    
    /**
    * @ORM\Column(type="string", length=255, nullable=true)
    */
    public $path;

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
     * Set titre
     *
     * @param string $titre
     * @return Media
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Media
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set jacket
     *
     * @param string $jacket
     * @return Media
     */
    public function setJacket($jacket)
    {
        $this->jacket = $jacket;

        return $this;
    }

    /**
     * Get jacket
     *
     * @return string 
     */
    public function getJacket()
    {
        return $this->jacket;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Media
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return Media
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Media
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
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    public function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents';
    }
    
    public function upload() {
        
        if(null == $this->file) {
            return;
        }
        
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->path = $this->file->getClientOriginalName();
        $this->file = null;
    }
}

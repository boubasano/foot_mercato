<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

// cette classe empeche le formulaire de se valider à vide 
class AuthorJoueur
{
    /**
     * @Assert\NotBlank
     */
    private $name;
}

/**
 * @ORM\Entity(repositoryClass="App\Repository\JoueurRepository")
 */
class Joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_joueur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_joueur;

    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_joueur", type="string", length=250)
     */
    private $nom_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_joueur", type="string", length=250)
     */
    private $prenom_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_joueur", type="string", length=250)
     */
    private $email_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="password_joueur", type="string", length=250)
     */
    private $password_joueur;

    // /**
    //  * @var \DateTime
    //  *
    //  * @ORM\Column(name="datenaissance_joueur", type="date")
    //  */
    // private $datenaissance_joueur;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="categorie_joueur", type="string", length=50)
    //  */
    // private $categorie_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_joueur", type="string", length=250)
     */
    private $pays_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_joueur", type="string", length=250)
     */
    private $ville_joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="continent_joueur", type="string", length=250)
     */
    private $continent_joueur;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="photos_joueur", type="string", length=50)
    //  */
    // private $photos_joueur;

    // // /**
    // //  * @var string
    // //  *
    // //  * @ORM\Column(name="favoris_joueur", type="string", length=250)
    // //  */
    // // private $favoris_joueur;

    public function getIdJoueur(): ?int
    {
        return $this->id_joueur;
    }

    public function getNomJoueur(): ?string
    {
        return $this->nom_joueur;
    }

    public function setNomJoueur(string $nom_joueur): self
    {
        $this->nom_joueur = $nom_joueur;

        return $this;
    }

    public function getPrenomJoueur(): ?string
    {
        return $this->prenom_joueur;
    }

    public function setPrenomJoueur(string $prenom_joueur): self
    {
        $this->prenom_joueur = $prenom_joueur;

        return $this;
    }

    public function getEmailJoueur(): ?string
    {
        return $this->email_joueur;
    }

    public function setEmailJoueur(string $email_joueur): self
    {
        $this->email_joueur = $email_joueur;

        return $this;
    }

    public function getPasswordJoueur(): ?string
    {
        return $this->password_joueur;
    }

    public function setPasswordJoueur(string $password_joueur): self
    {
        $this->password_joueur = $password_joueur;

        return $this;
    }

     public function getDatenaissanceJoueur(): ?\DateTimeInterface
    {
        return $this->datenaissance_joueur;
    }

    public function setDateContact(\DateTimeInterface $datenaissance_joueur): self
    {
        $this->datenaissance_joueur = $datenaissance_joueur;

        return $this;
    }

    public function getCategorieJoueur(): ?string
    {
        return $this->categorie_joueur;
    }

    public function setCategorieJoueur(string $categorie_joueur): self
    {
        $this->categorie_joueur = $categorie_joueur;

        return $this;
    }
    
    public function getPaysJoueur(): ?string
    {
        return $this->pays_joueur;
    }

    public function setPaysJoueur(string $pays_joueur): self
    {
        $this->pays_joueur = $pays_joueur;

        return $this;
    }

    public function getVilleJoueur(): ?string
    {
        return $this->ville_joueur;
    }

    public function setVilleJoueur(string $ville_joueur): self
    {
        $this->ville_joueur = $ville_joueur;

        return $this;
    }

    public function getContinentJoueur(): ?string
    {
        return $this->continent_joueur;
    }

    public function setContinentJoueur(string $continent_joueur): self
    {
        $this->continent_joueur = $continent_joueur;

        return $this;
    }

    public function getPhotosJoueur(): ?string
    {
        return $this->photos_joueur;
    }

    public function setPhotosJoueur(string $photos_joueur): self
    {
        $this->photos_joueur = $photos_joueur;

        return $this;
    }

    public function getFavorisJoueur(): ?string
    {
        return $this->favoris_joueur;
    }

    public function setFavorisJoueur(string $favoris_joueur): self
    {
        $this->favoris_joueur = $favoris_joueur;

        return $this;
    }



}

    

    
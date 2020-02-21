<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

// cette classe empeche le formulaire de se valider à vide 
class AuthorAgent
{
    /**
     * @Assert\NotBlank
     */
    private $name;
}
/**
 * @ORM\Entity(repositoryClass="App\Repository\AgentRepository")
 */


class Agent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_agent", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_agent", type="string", length=50)
     */
    private $nom_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_agent", type="string", length=250)
     */
    private $prenom_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="email_agent", type="string", length=250)
     */
    private $email_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="password_agent", type="string", length=250)
     */
    private $password_agent;

    // /**
    //  * @var \DateTime
    //  *
    //  * @ORM\Column(name="age_agent", type="date", nullable=false)
    //  */
    // private $ageAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_agent", type="string", length=250)
     */
    private $pays_agent;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_agent", type="string", length=250)
     */
    private $ville_agent;


    /**
     * @var string
     *
     * @ORM\Column(name="continent_agent", type="string", length=50, nullable=false)
     */
    private $continent_agent;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="photo_agent", type="string", length=50, nullable=false)
    //  */
    // private $photoAgent;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="diplome_agent", type="string", length=50, nullable=false)
    //  */
    // private $diplomeAgent;

    // /**
    //  * @var int
    //  *
    //  * @ORM\Column(name="immatriculation_agent", type="integer", nullable=false)
    //  */
    // private $immatriculationAgent;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="favoris_agent", type="string", length=250, nullable=false)
    //  */
    // private $favorisAgent;

    public function getIdAgent(): ?int
    {
        return $this->id_agent;
    }

    public function getNomAgent(): ?string
    {
        return $this->nom_agent;
    }

    public function setNomAgent(string $nom_agent): self
    {
        $this->nom_agent = $nom_agent;

        return $this;
    }

    public function getPrenomAgent(): ?string
    {
        return $this->prenom_agent;
    }

    public function setPrenomAgent(string $prenom_agent): self
    {
        $this->prenom_agent = $prenom_agent;

        return $this;
    }

    public function getEmailAgent(): ?string
    {
        return $this->email_agent;
    }

    public function setEmailAgent(string $email_agent): self
    {
        $this->email_agent = $email_agent;

        return $this;
    }

    public function getPasswordAgent(): ?string
    {
        return $this->password_agent;
    }

    public function setPasswordAgent(string $password_agent): self
    {
        $this->password_agent = $password_agent;

        return $this;
    }

     public function getDatenaissanceAgent(): ?\DateTimeInterface
    {
        return $this->datenaissance_agent;
    }

    public function setDatenaissanceAgent(\DateTimeInterface $datenaissance_agent): self
    {
        $this->datenaissance_agent = $datenaissance_agent;

        return $this;
    }
    
    public function getPaysAgent(): ?string
    {
        return $this->pays_agent;
    }

    public function setPaysAgent(string $pays_agent): self
    {
        $this->pays_agent = $pays_agent;

        return $this;
    }

    public function getVilleAgent(): ?string
    {
        return $this->ville_agent;
    }

    public function setVilleAgent(string $ville_agent): self
    {
        $this->ville_agent = $ville_agent;

        return $this;
    }

    public function getContinentAgent(): ?string
    {
        return $this->continent_agent;
    }

    public function setContinentagent(string $continent_agent): self
    {
        $this->continent_agent = $continent_agent;

        return $this;
    }

    public function getPhotosAgent(): ?string
    {
        return $this->photos_agent;
    }

    public function setPhotosAgent(string $photos_agent): self
    {
        $this->photos_agent = $photos_agent;

        return $this;
    }

    public function getFavorisAgent(): ?string
    {
        return $this->favoris_agent;
    }

    public function setFavorisAgent(string $favoris_agent): self
    {
        $this->favoris_agent = $favoris_agent;

        return $this;
    }



}

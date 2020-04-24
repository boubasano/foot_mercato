<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity(repositoryClass="App\Repository\JoueurRepository")
 * @UniqueEntity(fields={"email_joueur"},
 *     message="L'email que vous avez enregistré est dejà utilisé !")
 */
class Joueur 
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_joueur;

    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays_joueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_joueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $continent_joueur;

    public function getIdJoueur(): ?int
    {
        return $this->id_joueur;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
    
    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}

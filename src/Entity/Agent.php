<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\EqualTo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgentRepository")
 */
class Agent implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password_agent;

    /**
     * @Assert\EqualTo(propertyPath="password_agent", message="veuillez entrez le même mot de passe")
     */
    private $confirm_password_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_agent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $continent_agent;

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

    public function getConfirmPasswordAgent(): ?string
    {
        return $this->confirm_password_agent;
    }

    public function setPasswordAgent(string $password_agent): self
    {
        $this->password_agent = $password_agent;

        return $this;
    }

     public function setConfirmPasswordAgent(string $confirm_password_agent): self
    {
        $this->confirm_password_agent = $confirm_password_agent;

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

    public function setContinentAgent(string $continent_agent): self
    {
        $this->continent_agent = $continent_agent;

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

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgentRepository")
 */
class Agent
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

    public function setPasswordAgent(string $password_agent): self
    {
        $this->password_agent = $password_agent;

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
}

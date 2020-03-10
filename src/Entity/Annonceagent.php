<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceAgentRepository")
 */
class AnnonceAgent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_annonceagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_annonceagent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_annonceagent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_annonceagent;

    /**
     * @ORM\Column(type="integer")
     */
    private $agent_id;

    public function getIdAnnonceagent(): ?int
    {
        return $this->id_annonceagent;
    }

    public function getIntituleAnnonceagent(): ?string
    {
        return $this->intitule_annonceagent;
    }

    public function setIntituleAnnonceagent(string $intitule_annonceagent): self
    {
        $this->intitule_annonceagent = $intitule_annonceagent;

        return $this;
    }

    public function getTypeAnnonceagent(): ?string
    {
        return $this->type_annonceagent;
    }

    public function setTypeAnnonceagent(string $type_annonceagent): self
    {
        $this->type_annonceagent = $type_annonceagent;

        return $this;
    }

    public function getDateAnnonceagent(): ?\DateTimeInterface
    {
        return $this->date_annonceagent;
    }

    public function setDateAnnonceagent(\DateTimeInterface $date_annonceagent): self
    {
        $this->date_annonceagent = $date_annonceagent;

        return $this;
    }

    public function getAgentId(): ?int
    {
        return $this->agent_id;
    }

    public function setAgentId(int $agent_id): self
    {
        $this->agent_id = $agent_id;

        return $this;
    }
}

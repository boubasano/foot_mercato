<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatutRepository")
 */
class Statut
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $agent_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $centre_id;

    public function getIdStatut(): ?int
    {
        return $this->id_statut;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPlayerId(): ?int
    {
        return $this->player_id;
    }

    public function setPlayerId(int $player_id): self
    {
        $this->player_id = $player_id;

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

    public function getCentreId(): ?int
    {
        return $this->centre_id;
    }

    public function setCentreId(int $centre_id): self
    {
        $this->centre_id = $centre_id;

        return $this;
    }
}

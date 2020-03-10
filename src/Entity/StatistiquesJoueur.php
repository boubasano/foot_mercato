<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StatistiquesJoueurRepository")
 */
class StatistiquesJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_statistiquesjoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $media;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statistiques;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdStatistiquesJoueur(): ?int
    {
        return $this->id_statistiquesjoueur;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getStatistiques(): ?string
    {
        return $this->statistiques;
    }

    public function setStatistiques(string $statistiques): self
    {
        $this->statistiques = $statistiques;

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
}

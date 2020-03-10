<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AtoutJoueurRepository")
 */
class AtoutJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_atoutjoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $qualite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ameliorer;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdAtoutJoueur(): ?int
    {
        return $this->id_atoutjoueur;
    }

    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    public function setQualite(string $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }

    public function getAmeliorer(): ?string
    {
        return $this->ameliorer;
    }

    public function setAmeliorer(string $ameliorer): self
    {
        $this->ameliorer = $ameliorer;

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

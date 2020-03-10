<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SanteJoueurRepository")
 */
class SanteJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_santejoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $renseignement_santejoueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdSantejoueur(): ?int
    {
        return $this->id_santejoueur;
    }

    public function getRenseignementSantejoueur(): ?string
    {
        return $this->renseignement_santejoueur;
    }

    public function setRenseignementSantejoueur(string $renseignement_santejoueur): self
    {
        $this->renseignement_santejoueur = $renseignement_santejoueur;

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

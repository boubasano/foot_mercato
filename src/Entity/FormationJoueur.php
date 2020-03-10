<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormationJoueurRepository")
 */
class FormationJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_formationjoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_formationjoueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdFormationjoueur(): ?int
    {
        return $this->id_formationjoueur;
    }

    public function getIntituleFormationjoueur(): ?string
    {
        return $this->intitule_formationjoueur;
    }

    public function setIntituleFormationjoueur(string $intitule_formationjoueur): self
    {
        $this->intitule_formationjoueur = $intitule_formationjoueur;

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

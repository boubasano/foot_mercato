<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProfessionJoueurRepository")
 */
class ProfessionJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_professionjoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_professionjoueur;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdProfessionjoueur(): ?int
    {
        return $this->id_professionjoueur;
    }

    public function getIntituleProfessionjoueur(): ?string
    {
        return $this->intitule_professionjoueur;
    }

    public function setIntituleProfessionjoueur(string $intitule_professionjoueur): self
    {
        $this->intitule_professionjoueur = $intitule_professionjoueur;

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

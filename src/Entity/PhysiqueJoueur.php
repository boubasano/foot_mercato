<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhysiqueJoueurRepository")
 */
class PhysiqueJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_physiquejoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $taille;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poids;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $corpulence;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdPhysiqueJoueur(): ?int
    {
        return $this->id_physiquejoueur;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getCorpulence(): ?string
    {
        return $this->corpulence;
    }

    public function setCorpulence(string $corpulence): self
    {
        $this->corpulence = $corpulence;

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

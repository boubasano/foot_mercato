<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExperienceJoueurRepository")
 */
class ExperienceJoueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_experiencejoueur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $saison_debut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $saison_fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubjoueur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $championnat;

    /**
     * @ORM\Column(type="integer")
     */
    private $match_joue;

    /**
     * @ORM\Column(type="integer")
     */
    private $buts;

    /**
     * @ORM\Column(type="integer")
     */
    private $passes;

    /**
     * @ORM\Column(type="integer")
     */
    private $carton_jaune;

    /**
     * @ORM\Column(type="integer")
     */
    private $carton_rouge;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_id;

    public function getIdExperienceJoueur(): ?int
    {
        return $this->id_experiencejoueur;
    }

    public function getSaisonDebut(): ?\DateTimeInterface
    {
        return $this->saison_debut;
    }

    public function setSaisonDebut(\DateTimeInterface $saison_debut): self
    {
        $this->saison_debut = $saison_debut;

        return $this;
    }

    public function getSaisonFin(): ?\DateTimeInterface
    {
        return $this->saison_fin;
    }

    public function setSaisonFin(\DateTimeInterface $saison_fin): self
    {
        $this->saison_fin = $saison_fin;

        return $this;
    }

    public function getClubjoueur(): ?string
    {
        return $this->clubjoueur;
    }

    public function setClubjoueur(string $clubjoueur): self
    {
        $this->clubjoueur = $clubjoueur;

        return $this;
    }

    public function getChampionnat(): ?string
    {
        return $this->championnat;
    }

    public function setChampionnat(string $championnat): self
    {
        $this->championnat = $championnat;

        return $this;
    }

    public function getMatchJoue(): ?int
    {
        return $this->match_joue;
    }

    public function setMatchJoue(int $match_joue): self
    {
        $this->match_joue = $match_joue;

        return $this;
    }

    public function getButs(): ?int
    {
        return $this->buts;
    }

    public function setButs(int $buts): self
    {
        $this->buts = $buts;

        return $this;
    }

    public function getPasses(): ?int
    {
        return $this->passes;
    }

    public function setPasses(int $passes): self
    {
        $this->passes = $passes;

        return $this;
    }

    public function getCartonJaune(): ?int
    {
        return $this->carton_jaune;
    }

    public function setCartonJaune(int $carton_jaune): self
    {
        $this->carton_jaune = $carton_jaune;

        return $this;
    }

    public function getCartonRouge(): ?int
    {
        return $this->carton_rouge;
    }

    public function setCartonRouge(int $carton_rouge): self
    {
        $this->carton_rouge = $carton_rouge;

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

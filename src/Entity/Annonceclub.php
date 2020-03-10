<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceClubRepository")
 */
class AnnonceClub
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_annonceclub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule_annonceclub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_annonceclub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_annonceclub;

    /**
     * @ORM\Column(type="integer")
     */
    private $centre_id;

    public function getIdAnnonceclub(): ?int
    {
        return $this->id_annonceclub;
    }

    public function getIntituleAnnonceclub(): ?string
    {
        return $this->intitule_annonceclub;
    }

    public function setIntituleAnnonceclub(string $intitule_annonceclub): self
    {
        $this->intitule_annonceclub = $intitule_annonceclub;

        return $this;
    }

    public function getTypeAnnonceclub(): ?string
    {
        return $this->type_annonceclub;
    }

    public function setTypeAnnonceclub(string $type_annonceclub): self
    {
        $this->type_annonceclub = $type_annonceclub;

        return $this;
    }

    public function getDateAnnonceclub(): ?string
    {
        return $this->date_annonceclub;
    }

    public function setDateAnnonceclub(string $date_annonceclub): self
    {
        $this->date_annonceclub = $date_annonceclub;

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

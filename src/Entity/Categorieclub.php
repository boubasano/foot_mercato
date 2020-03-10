<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieClubRepository")
 */
class CategorieClub
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_categorieclub;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $niveu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $centre_id;

    public function getIdCategorieClub(): ?int
    {
        return $this->id_categorieclub;
    }

    public function getNiveu(): ?string
    {
        return $this->niveu;
    }

    public function setNiveu(string $niveu): self
    {
        $this->niveu = $niveu;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

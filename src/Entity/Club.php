<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
// cette classe empeche le formulaire de se valider à vide 
class AuthorClub
{
    /**
     * @Assert\NotBlank
     */
    private $name;
}
/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */

class Club
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_club", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id_club;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_club", type="string", length=50, nullable=false)
     */
    private $nom_club;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_club", type="string", length=250, nullable=false)
     */
    private $pays_club;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_club", type="string", length=250, nullable=false)
     */
    private $ville_club;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="embleme_club", type="string", length=50, nullable=false)
    //  */
    // private $embleme_club;

    /**
     * @var string
     *
     * @ORM\Column(name="email_club", type="string", length=50, nullable=false)
     */
    private $email_club;

    /**
     * @var string
     *
     * @ORM\Column(name="password_club", type="string", length=50, nullable=false)
     */
    private $password_club;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="favoris_club", type="string", length=250, nullable=false)
    //  */
    // private $favoris_club;

    /**
     * @var string
     *
     * @ORM\Column(name="continent_club", type="string", length=50, nullable=false)
     */
    private $continent_club;

    // /**
    //  * @var string
    //  *
    //  * @ORM\Column(name="photos_club", type="string", length=50, nullable=false)
    //  */
    // private $photos_club;


    public function getIdClub(): ?int
    {
        return $this->id_club;
    }

    public function getNomClub(): ?string
    {
        return $this->nom_club;
    }

    public function setNomClub(string $nom_club): self
    {
        $this->nom_club = $nom_club;

        return $this;
    }

    // public function getEmblemeClub(): ?string
    // {
    //     return $this->embleme_club;
    // }

    // public function setEmblemeClub(string $embleme_club): self
    // {
    //     $this->embleme_club = $embleme_club;

    //     return $this;
    // }

    public function getEmailClub(): ?string
    {
        return $this->email_club;
    }

    public function setEmailClub(string $email_club): self
    {
        $this->email_club = $email_club;

        return $this;
    }

    public function getPasswordClub(): ?string
    {
        return $this->password_club;
    }

    public function setPasswordClub(string $password_club): self
    {
        $this->password_club = $password_club;

        return $this;
    }
    
    public function getPaysClub(): ?string
    {
        return $this->pays_club;
    }

    public function setPaysClub(string $pays_club): self
    {
        $this->pays_club = $pays_club;

        return $this;
    }

    public function getVilleClub(): ?string
    {
        return $this->ville_club;
    }

    public function setVilleClub(string $ville_club): self
    {
        $this->ville_club = $ville_club;

        return $this;
    }

    public function getContinentClub(): ?string
    {
        return $this->continent_club;
    }

    public function setContinentclub(string $continent_club): self
    {
        $this->continent_club = $continent_club;

        return $this;
    }

    // public function getPhotosClub(): ?string
    // {
    //     return $this->photos_club;
    // }

    // public function setPhotosClub(string $photos_club): self
    // {
    //     $this->photos_club = $photos_club;

    //     return $this;
    // }

    // public function getFavorisClub(): ?string
    // {
    //     return $this->favoris_club;
    // }

    // public function setFavorisClub(string $favoris_club): self
    // {
    //     $this->favoris_club = $favoris_club;

    //     return $this;
    // }

}

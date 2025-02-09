<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubRepository")
 */
class Club 
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_club;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays_club;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_club;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $continent_club;

   
    public function getIdClub(): ?int
    {
        return $this->id_club;
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

    public function setContinentClub(string $continent_club): self
    {
        $this->continent_club = $continent_club;

        return $this;
    }

//     /**
//      * A visual identifier that represents this user.
//      *
//      * @see UserInterface
//      */
//     public function getUsername(): string
//     {
//         return (string) $this->email;
//     }

//     /**
//      * @see UserInterface
//      */
//     public function getRoles(): array
//     {
//         $roles = $this->roles;
//         // guarantee every user at least has ROLE_USER
//         $roles[] = 'ROLE_USER';

//         return array_unique($roles);
//     }

//     public function setRoles(array $roles): self
//     {
//         $this->roles = $roles;

//         return $this;
//     }

//     /**
//      * @see UserInterface
//      */
//     public function getPassword(): string
//     {
//         return (string) $this->password;
//     }
// // 
//     public function setPassword(string $password): self
//     {
//         $this->password = $password;

//         return $this;
//     }

//     /**
//      * @see UserInterface
//      */
//     public function getSalt()
//     {
//         // not needed when using the "bcrypt" algorithm in security.yaml
//     }

//     /**
//      * @see UserInterface
//      */
//     public function eraseCredentials()
//     {
//         // If you store any temporary, sensitive data on the user, clear it here
//         // $this->plainPassword = null;
//     }
}

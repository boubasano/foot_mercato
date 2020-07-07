<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"email"},
 *      message="L'email que vous avez enregistré est dejà utilisé !")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_user;

    
    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=180, unique=false)
     */
    private $email;

    /**
     * @ORM\Column(type="array", nullable=false)
     */
    private $roles= [];

    /**
     *
     * @ORM\Column(type="array", length=255)
     */
    private $password;

     /**
     *  @Assert\EqualTo(propertyPath="password",
     *                     message="veuillez entrer un mot de passe identique")
     */
    private $password_confirm;

    /**
     * @ORM\ManyToOne(targetEntity=Situation::class, inversedBy="joueurs")
     * @ORM\JoinColumn(name="situation", referencedColumnName="id",  nullable=true)
     */
    private $situation;


    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function id_user(): ?int
    {
        return $this->id_user;
    }

    public function get_iduser(): ?int
    {
        return $this->id_user;
    }

    public function set_iduser(int $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function isid_user(): ?int
    {
        return $this->id_user;
    }

    public function hasid_user(): ?int
    {
        return $this->id_user;
    }



    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

     public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles = ['ROLE_USER'];

        return $roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordConfirm(): string
    {
        return (string) $this->password_confirm;
    }

    public function setPasswordConfirm(string $password_confirm): self
    {
        $this->password_confirm = $password_confirm;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getSituation(): ?Int
    {
        return $this->situation;
    }

    public function setSituation(?Situation $situation): self
    {
        $this->situation = $situation;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire_contact;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_contact;

    public function getIdContact(): ?int
    {
        return $this->id_contact;
    }

    public function getNomContact(): ?string
    {
        return $this->nom_contact;
    }

    public function setNomContact(string $nom_contact): self
    {
        $this->nom_contact = $nom_contact;

        return $this;
    }

    public function getPrenomContact(): ?string
    {
        return $this->prenom_contact;
    }

    public function setPrenomContact(string $prenom_contact): self
    {
        $this->prenom_contact = $prenom_contact;

        return $this;
    }

    public function getEmailContact(): ?string
    {
        return $this->email_contact;
    }

    public function setEmailContact(string $email_contact): self
    {
        $this->email_contact = $email_contact;

        return $this;
    }

    public function getCommentaireContact(): ?string
    {
        return $this->commentaire_contact;
    }

    public function setCommentaireContact(string $commentaire_contact): self
    {
        $this->commentaire_contact = $commentaire_contact;

        return $this;
    }

    public function getDateContact(): ?\DateTimeInterface
    {
        return $this->date_contact;
    }

    public function setDateContact(\DateTimeInterface $date_contact): self
    {
        $this->date_contact = $date_contact;

        return $this;
    }
}

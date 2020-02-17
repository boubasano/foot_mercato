<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur")
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_joueur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJoueur;

    /**
     * @var int
     *
     * @ORM\Column(name="civilite", type="integer", nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_joueur", type="string", length=250, nullable=false)
     */
    private $nomJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_joueur", type="string", length=250, nullable=false)
     */
    private $prenomJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_joueur", type="string", length=250, nullable=false)
     */
    private $emailJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="password_joueur", type="string", length=250, nullable=false)
     */
    private $passwordJoueur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance_joueur", type="date", nullable=false)
     */
    private $datenaissanceJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_joueur", type="string", length=50, nullable=false)
     */
    private $categorieJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_joueur", type="string", length=250, nullable=false)
     */
    private $paysJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_joueur", type="string", length=250, nullable=false)
     */
    private $villeJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="continent_joueur", type="string", length=250, nullable=false)
     */
    private $continentJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="photos_joueur", type="string", length=50, nullable=false)
     */
    private $photosJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="favoris_joueur", type="string", length=250, nullable=false)
     */
    private $favorisJoueur;


}

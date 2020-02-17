<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
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
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_club", type="string", length=50, nullable=false)
     */
    private $nomClub;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_club", type="string", length=50, nullable=false)
     */
    private $paysClub;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_club", type="string", length=50, nullable=false)
     */
    private $villeClub;

    /**
     * @var string
     *
     * @ORM\Column(name="embleme_club", type="string", length=50, nullable=false)
     */
    private $emblemeClub;

    /**
     * @var string
     *
     * @ORM\Column(name="email_club", type="string", length=50, nullable=false)
     */
    private $emailClub;

    /**
     * @var string
     *
     * @ORM\Column(name="password_club", type="string", length=50, nullable=false)
     */
    private $passwordClub;

    /**
     * @var string
     *
     * @ORM\Column(name="favoris_club", type="string", length=250, nullable=false)
     */
    private $favorisClub;


}

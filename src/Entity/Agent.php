<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity
 */
class Agent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_agent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_agent", type="string", length=50, nullable=false)
     */
    private $nomAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_agent", type="string", length=50, nullable=false)
     */
    private $prenomAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="email_agent", type="string", length=50, nullable=false)
     */
    private $emailAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="password_agent", type="string", length=50, nullable=false)
     */
    private $passwordAgent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="age_agent", type="date", nullable=false)
     */
    private $ageAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_agent", type="string", length=50, nullable=false)
     */
    private $paysAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="continent_agent", type="string", length=50, nullable=false)
     */
    private $continentAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_agent", type="string", length=50, nullable=false)
     */
    private $photoAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome_agent", type="string", length=50, nullable=false)
     */
    private $diplomeAgent;

    /**
     * @var int
     *
     * @ORM\Column(name="immatriculation_agent", type="integer", nullable=false)
     */
    private $immatriculationAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="favoris_agent", type="string", length=250, nullable=false)
     */
    private $favorisAgent;


}

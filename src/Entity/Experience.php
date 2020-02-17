<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity
 */
class Experience
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_experience", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperience;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saison_debut", type="date", nullable=false)
     */
    private $saisonDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saison_fin", type="date", nullable=false)
     */
    private $saisonFin;

    /**
     * @var string
     *
     * @ORM\Column(name="club", type="string", length=50, nullable=false)
     */
    private $club;

    /**
     * @var string
     *
     * @ORM\Column(name="championnat", type="string", length=50, nullable=false)
     */
    private $championnat;

    /**
     * @var int
     *
     * @ORM\Column(name="match_joue", type="integer", nullable=false)
     */
    private $matchJoue;

    /**
     * @var int
     *
     * @ORM\Column(name="buts", type="integer", nullable=false)
     */
    private $buts;

    /**
     * @var int
     *
     * @ORM\Column(name="passes", type="integer", nullable=false)
     */
    private $passes;

    /**
     * @var int
     *
     * @ORM\Column(name="carton_jaune", type="integer", nullable=false)
     */
    private $cartonJaune;

    /**
     * @var int
     *
     * @ORM\Column(name="carton_rouge", type="integer", nullable=false)
     */
    private $cartonRouge;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

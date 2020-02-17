<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Physique
 *
 * @ORM\Table(name="physique")
 * @ORM\Entity
 */
class Physique
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_physique", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhysique;

    /**
     * @var int
     *
     * @ORM\Column(name="taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="corpulence", type="string", length=20, nullable=false)
     */
    private $corpulence;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistiques
 *
 * @ORM\Table(name="statistiques")
 * @ORM\Entity
 */
class Statistiques
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_statistiques", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatistiques;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=50, nullable=false)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="statistiques", type="string", length=50, nullable=false)
     */
    private $statistiques;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

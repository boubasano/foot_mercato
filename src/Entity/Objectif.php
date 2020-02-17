<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectif
 *
 * @ORM\Table(name="objectif")
 * @ORM\Entity
 */
class Objectif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_objectif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjectif;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="string", length=50, nullable=false)
     */
    private $objectif;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonceagent
 *
 * @ORM\Table(name="annonceagent")
 * @ORM\Entity
 */
class Annonceagent
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_annonceagent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonceagent;

    /**
     * @var int
     *
     * @ORM\Column(name="intitule_annonceagent", type="integer", nullable=false)
     */
    private $intituleAnnonceagent;

    /**
     * @var int
     *
     * @ORM\Column(name="type_annonceagent", type="integer", nullable=false)
     */
    private $typeAnnonceagent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_annonceagent", type="date", nullable=false)
     */
    private $dateAnnonceagent;

    /**
     * @var int
     *
     * @ORM\Column(name="agent_id", type="integer", nullable=false)
     */
    private $agentId;


}

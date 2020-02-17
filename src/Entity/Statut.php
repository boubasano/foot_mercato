<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="statut")
 * @ORM\Entity
 */
class Statut
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_statut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=25, nullable=false)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="player_id", type="integer", nullable=false)
     */
    private $playerId;

    /**
     * @var int
     *
     * @ORM\Column(name="agent_id", type="integer", nullable=false)
     */
    private $agentId;

    /**
     * @var int
     *
     * @ORM\Column(name="centre_id", type="integer", nullable=false)
     */
    private $centreId;


}

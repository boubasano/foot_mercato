<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sante
 *
 * @ORM\Table(name="sante")
 * @ORM\Entity
 */
class Sante
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sante", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSante;

    /**
     * @var string
     *
     * @ORM\Column(name="renseignement_sante", type="string", length=50, nullable=false)
     */
    private $renseignementSante;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

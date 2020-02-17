<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Atout
 *
 * @ORM\Table(name="atout")
 * @ORM\Entity
 */
class Atout
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_atout", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAtout;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=50, nullable=false)
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="ameliorer", type="string", length=50, nullable=false)
     */
    private $ameliorer;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

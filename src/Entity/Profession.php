<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profession
 *
 * @ORM\Table(name="profession")
 * @ORM\Entity
 */
class Profession
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_profession", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule_profession", type="string", length=50, nullable=false)
     */
    private $intituleProfession;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;


}

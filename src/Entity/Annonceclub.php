<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonceclub
 *
 * @ORM\Table(name="annonceclub")
 * @ORM\Entity
 */
class Annonceclub
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_annonceclub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonceclub;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule_annonceclub", type="string", length=50, nullable=false)
     */
    private $intituleAnnonceclub;

    /**
     * @var string
     *
     * @ORM\Column(name="type_annonceclub", type="string", length=50, nullable=false)
     */
    private $typeAnnonceclub;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_annonceclub", type="date", nullable=false)
     */
    private $dateAnnonceclub;

    /**
     * @var int
     *
     * @ORM\Column(name="centre_id", type="integer", nullable=false)
     */
    private $centreId;


}

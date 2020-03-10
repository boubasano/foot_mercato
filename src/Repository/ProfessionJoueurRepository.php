<?php

namespace App\Repository;

use App\Entity\ProfessionJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProfessionJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProfessionJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProfessionJoueur[]    findAll()
 * @method ProfessionJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfessionJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProfessionJoueur::class);
    }

    // /**
    //  * @return ProfessionJoueur[] Returns an array of ProfessionJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProfessionJoueur
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

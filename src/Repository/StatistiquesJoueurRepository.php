<?php

namespace App\Repository;

use App\Entity\StatistiquesJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StatistiquesJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatistiquesJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatistiquesJoueur[]    findAll()
 * @method StatistiquesJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatistiquesJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatistiquesJoueur::class);
    }

    // /**
    //  * @return StatistiquesJoueur[] Returns an array of StatistiquesJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StatistiquesJoueur
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

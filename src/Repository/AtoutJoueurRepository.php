<?php

namespace App\Repository;

use App\Entity\AtoutJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AtoutJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method AtoutJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method AtoutJoueur[]    findAll()
 * @method AtoutJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtoutJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AtoutJoueur::class);
    }

    // /**
    //  * @return AtoutJoueur[] Returns an array of AtoutJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AtoutJoueur
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

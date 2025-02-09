<?php

namespace App\Repository;

use App\Entity\SanteJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SanteJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method SanteJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method SanteJoueur[]    findAll()
 * @method SanteJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SanteJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SanteJoueur::class);
    }

    // /**
    //  * @return SanteJoueur[] Returns an array of SanteJoueur objects
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
    public function findOneBySomeField($value): ?SanteJoueur
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

<?php

namespace App\Repository;

use App\Entity\ObjectifJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ObjectifJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjectifJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjectifJoueur[]    findAll()
 * @method ObjectifJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjectifJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjectifJoueur::class);
    }

    // /**
    //  * @return ObjectifJoueur[] Returns an array of ObjectifJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObjectifJoueur
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

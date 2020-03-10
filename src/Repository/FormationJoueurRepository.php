<?php

namespace App\Repository;

use App\Entity\FormationJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormationJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormationJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormationJoueur[]    findAll()
 * @method FormationJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormationJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormationJoueur::class);
    }

    // /**
    //  * @return FormationJoueur[] Returns an array of FormationJoueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormationJoueur
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

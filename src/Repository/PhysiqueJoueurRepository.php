<?php

namespace App\Repository;

use App\Entity\PhysiqueJoueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PhysiqueJoueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhysiqueJoueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhysiqueJoueur[]    findAll()
 * @method PhysiqueJoueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhysiqueJoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhysiqueJoueur::class);
    }

    // /**
    //  * @return PhysiqueJoueur[] Returns an array of PhysiqueJoueur objects
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
    public function findOneBySomeField($value): ?PhysiqueJoueur
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

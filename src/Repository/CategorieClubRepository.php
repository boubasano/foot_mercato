<?php

namespace App\Repository;

use App\Entity\CategorieClub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CategorieClub|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieClub|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieClub[]    findAll()
 * @method CategorieClub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieClub::class);
    }

    // /**
    //  * @return CategorieClub[] Returns an array of CategorieClub objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategorieClub
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

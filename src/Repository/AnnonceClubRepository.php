<?php

namespace App\Repository;

use App\Entity\AnnonceClub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AnnonceClub|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnnonceClub|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnnonceClub[]    findAll()
 * @method AnnonceClub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceClubRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnnonceClub::class);
    }

    // /**
    //  * @return AnnonceClub[] Returns an array of AnnonceClub objects
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
    public function findOneBySomeField($value): ?AnnonceClub
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

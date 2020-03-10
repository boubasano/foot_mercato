<?php

namespace App\Repository;

use App\Entity\AnnonceAgent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AnnonceAgent|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnnonceAgent|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnnonceAgent[]    findAll()
 * @method AnnonceAgent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceAgentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnnonceAgent::class);
    }

    // /**
    //  * @return AnnonceAgent[] Returns an array of AnnonceAgent objects
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
    public function findOneBySomeField($value): ?AnnonceAgent
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

<?php

namespace App\Repository;

use App\Entity\NouvUtilisateur3;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NouvUtilisateur3|null find($id, $lockMode = null, $lockVersion = null)
 * @method NouvUtilisateur3|null findOneBy(array $criteria, array $orderBy = null)
 * @method NouvUtilisateur3[]    findAll()
 * @method NouvUtilisateur3[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouvUtilisateur3Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NouvUtilisateur3::class);
    }

    // /**
    //  * @return NouvUtilisateur3[] Returns an array of NouvUtilisateur3 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NouvUtilisateur3
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

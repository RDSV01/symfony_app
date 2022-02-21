<?php

namespace App\Repository;

use App\Entity\NouvUtilisateur1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NouvUtilisateur1|null find($id, $lockMode = null, $lockVersion = null)
 * @method NouvUtilisateur1|null findOneBy(array $criteria, array $orderBy = null)
 * @method NouvUtilisateur1[]    findAll()
 * @method NouvUtilisateur1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NouvUtilisateur1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NouvUtilisateur1::class);
    }

    // /**
    //  * @return NouvUtilisateur1[] Returns an array of NouvUtilisateur1 objects
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
    public function findOneBySomeField($value): ?NouvUtilisateur1
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

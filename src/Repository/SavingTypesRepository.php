<?php

namespace App\Repository;

use App\Entity\SavingTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SavingTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method SavingTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method SavingTypes[]    findAll()
 * @method SavingTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SavingTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SavingTypes::class);
    }

    // /**
    //  * @return SavingTypes[] Returns an array of SavingTypes objects
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
    public function findOneBySomeField($value): ?SavingTypes
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

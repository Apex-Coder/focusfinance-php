<?php

namespace App\Repository;

use App\Entity\IncomeTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IncomeTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method IncomeTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method IncomeTypes[]    findAll()
 * @method IncomeTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IncomeTypesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IncomeTypes::class);
    }

    // /**
    //  * @return IncomeTypes[] Returns an array of IncomeTypes objects
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
    public function findOneBySomeField($value): ?IncomeTypes
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
